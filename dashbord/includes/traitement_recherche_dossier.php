<?php 

        
        
	$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
	$admin=$ladministrateur[0];
		
	 $droit_dacces=getDroitAccesAdministrateur($ladministrateur[0]);
	 $niveau_dacces=$droit_dacces["niveau_dacces"];
	 $circonscription=$droit_dacces["circonscription"];
	
		
	  $error="";
	  $response=array();

	  if(isset($_POST["page_encours"]))$page_active=mysql_real_escape_string  ($_POST["page_encours"]);
	  else $page_active=1;

      $etat_dossier=mysql_real_escape_string  ($_POST["etat-dossier"]);
      $idformulaire=mysql_real_escape_string  ($_POST["form"]);
      $idconteneur_resultat=mysql_real_escape_string  ($_POST["conteneur-resultat"]);
	  $nbligneparpage=10;
		
	  $ledebut=$debut=$nbligneparpage*($page_active-1);


	  $query_demandeur="SELECT * FROM demandeur WHERE corbeille='0' ";
	  if($etat_dossier!="tous")$query_demandeur.=" AND etat='$etat_dossier' ";

	  if($niveau_dacces=="region")$query_demandeur.=" AND idregion='$circonscription'";
	  elseif($niveau_dacces=="ville")$query_demandeur.=" AND idville='$circonscription'";
	  elseif($niveau_dacces=="agence")$query_demandeur.=" AND idagence='$circonscription'";

	  $total=mysql_num_rows(mysql_query("$query_demandeur"));
	  $query_demandeur.=" ORDER BY iddemandeur DESC";

	  $nbpage=ceil($total/$nbligneparpage);

	  $nbpage_affiche=5;

	  $marge=(ceil($nbpage_affiche/2)-1); 

	 if($nbpage_affiche!=$nbpage){
		if($page_active==$nbpage){
		   $page_debut=$nbpage-$nbpage_affiche+1;
		   $page_fin=$page_active;
		}else{
		   $page_debut=$page_active-$marge;
		   $page_fin=$page_active+$marge;
		}
	 }else{ 
		 $page_debut=1;
		 $page_fin=$nbpage;
	} 
	if($page_fin>$nbpage)$page_fin=$nbpage;
	if($page_debut<1)$page_debut=1;

	if($nbpage<$nbpage_affiche)$page_fin=$nbpage;

    if($page_active-$marge<=0 AND $nbpage_affiche<$nbpage)$page_fin+=1;
    if($page_active==1 AND $nbpage_affiche<$nbpage)$page_fin=$nbpage_affiche;

    
    

	$query_demandeur.=" LIMIT $debut, $nbligneparpage";
	$result_demandeur=mysql_query($query_demandeur);

        $response["nbreponse"]=$total;
				 ob_start();
				 include("tableau-liste-dossier.php");
				 $tableau_dossier = ob_get_clean();
				 ob_end_clean();
		$response["liste"]=utf8_encode($tableau_dossier);

?>