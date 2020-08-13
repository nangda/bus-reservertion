<?php 

        
        
	$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
	$admin=$ladministrateur[0];
		
		
	  $error="";
	  $response=array();

	  if(isset($_POST["page_encours"]))$page_active=mysql_real_escape_string  ($_POST["page_encours"]);
	  else $page_active=1;

      $etat_dossier=mysql_real_escape_string  ($_POST["etat-dossier"]);
      $idformulaire=mysql_real_escape_string  ($_POST["form"]);
      $idconteneur_resultat=mysql_real_escape_string  ($_POST["conteneur-resultat"]);

      $date_debut=mysql_real_escape_string  (trim($_POST["date-debut-operation"]));
      $date_fin=mysql_real_escape_string  (trim($_POST["date-fin-operation"]));
      $compte=mysql_real_escape_string  (trim($_POST["libelle-compte"]));
      $client=mysql_real_escape_string  (trim($_POST["libelle-client"]));
      $ville_client=mysql_real_escape_string  (trim($_POST["ville-client"]));
      if(isset($_POST["ville-agence"]))$ville_agence=mysql_real_escape_string  (trim($_POST["ville-agence"]));
      else $ville_agence="";

      if(isset($_POST["agence-search"]))$agence=mysql_real_escape_string  (trim($_POST["agence-search"]));
      else $agence="";


      $nbligneparpage=10;
		
	  $ledebut=$debut=$nbligneparpage*($page_active-1);


	  $query_demandeur="SELECT * FROM demandeur WHERE corbeille='0' ";
	  if($etat_dossier!="tous")$query_demandeur.=" AND etat='$etat_dossier' ";


	  if($niveau_dacces=="zone")$query_demandeur.=" AND zone_agence='$circonscription'";
	  elseif($niveau_dacces=="region")$query_demandeur.=" AND region_agence='$circonscription'";
	  elseif($niveau_dacces=="ville")$query_demandeur.=" AND ville_agence='$circonscription'";
	  elseif($niveau_dacces=="agence")$query_demandeur.=" AND agence='$circonscription'";

	  if($ladministrateur["fonction"]=="Gestionnaire") $query_demandeur.=" AND gestionnaire='$ladministrateur[0]'";

      if($agence!="" ){
		  $query_demandeur.=" AND agence='$agence' ";
	  }
      
      if($ville_agence!="" ){
		  $query_demandeur.=" AND ville_agence='$ville_agence' ";
	  }
      
      if($ville_client!="" ){
		  $query_demandeur.=" AND ville='$ville_client' ";
	  }
      
      if($date_debut!="" ){
		  $query_demandeur.=" AND date_soumission>='$date_debut' ";
	  }
      if($date_fin!="" ){
		  $query_demandeur.=" AND date_soumission<='$date_fin' ";
	  }
      
      if($client!="" ){
		  $query_demandeur.=" AND ( nom LIKE '%$client%' OR prenom LIKE '%$client%' )  ";
	  }

      if($compte!="" ){
		  $query_demandeur.=" AND numero_compte LIKE '%$compte%'  ";
	  }



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
    if($etat_dossier=='tous')$fichier_tableau="tableau-liste-dossier.php";
    else $fichier_tableau="tableau-liste-dossier-$etat_dossier.php";

        $response["nbreponse"]=$total;
				 ob_start();
				 include($fichier_tableau);
				 $tableau_dossier = ob_get_clean();
				 ob_end_clean();
		$response["liste"]=utf8_encode($tableau_dossier);

?>