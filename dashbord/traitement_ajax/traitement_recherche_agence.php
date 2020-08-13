
     <?php 

        
        
	$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
	$admin=$ladministrateur[0];
		
		
	  $error="";
	  $response=array();

	  if(isset($_POST["page_encours"]))$page_active=mysql_real_escape_string  ($_POST["page_encours"]);
	  else $page_active=1;

      $idformulaire=mysql_real_escape_string  ($_POST["form"]);
      $idconteneur_resultat=mysql_real_escape_string  ($_POST["conteneur-resultat"]);
      $idville=mysql_real_escape_string  (trim($_POST["ville-agence"]));
      $titre=mysql_real_escape_string  (trim($_POST["nom-agence"]));
      $code=mysql_real_escape_string  (trim($_POST["code-agence"]));
      $zone=mysql_real_escape_string  (trim($_POST["zone-agence"]));
	  $nbligneparpage=10;
		
	  $ledebut=$debut=$nbligneparpage*($page_active-1);

	  $query_agence="SELECT * FROM agence WHERE idagence!='0' ";

      if($idville!="" ){
		  $query_agence.=" AND idville='$idville' ";
	  }
      if($zone!="" ){
		  $query_agence.=" AND zone='$zone' ";
	  }
      if($code!="" ){
		  $query_agence.=" AND reference LIKE '%$code%' ";
	  }
      
      if($titre!=""){
		  $query_agence.=" AND titre LIKE '%$titre%' ";
		  $query_agence.=" ORDER BY titre ASC";
	  }else{
		  $query_agence.=" ORDER BY idagence DESC";
	  }
      
	  $total=mysql_num_rows(mysql_query("$query_agence"));

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

    
    

	$query_agence.=" LIMIT $debut, $nbligneparpage";
	$result_agence=mysql_query($query_agence);

        $response["nbreponse"]=$total;
				 ob_start();
				 include("tableau-liste-agence.php");
				 $tableau_agence = ob_get_clean();
				 ob_end_clean();
		$response["liste"]=utf8_encode($tableau_agence);

?>