
     <?php 

        
        
	$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
	$admin=$ladministrateur[0];
		
		
	  $error="";
	  $response=array();

	  if(isset($_POST["page_encours"]))$page_active=mysql_real_escape_string  ($_POST["page_encours"]);
	  else $page_active=1;

      $idformulaire=mysql_real_escape_string  ($_POST["form"]);
      $idconteneur_resultat=mysql_real_escape_string  ($_POST["conteneur-resultat"]);
      $date_debut=mysql_real_escape_string  (trim($_POST["date-debut-operation"]));
      $date_fin=mysql_real_escape_string  (trim($_POST["date-fin-operation"]));
      $compte=mysql_real_escape_string  (trim($_POST["libelle-nom"]));
      $ip=mysql_real_escape_string  (trim($_POST["ip"]));
      $operation=mysql_real_escape_string  (trim($_POST["operation-search"]));
	  $nbligneparpage=10;
		
	  $ledebut=$debut=$nbligneparpage*($page_active-1);

	  $query_visite="SELECT * FROM visite WHERE idvisite!='0' ";

      if($operation!="" ){
		  $query_visite.=" AND operation='$operation' ";
	  }
      
      if($date_debut!="" ){
		  $query_visite.=" AND date>='$date_debut' ";
	  }
      if($date_fin!="" ){
		  $query_visite.=" AND date<='$date_fin' ";
	  }
      
      if($ip!="" ){
		  $query_visite.=" AND ip LIKE '%$ip%' ";
	  }
      

      
      if($compte!=""){
		 
		  $query_visite.=" AND compte LIKE '%$compte%' ";
		  ///$query_visite.=" ORDER BY compte ASC";
	  }
		  $query_visite.=" ORDER BY idvisite DESC";

      
	  $total=mysql_num_rows(mysql_query("$query_visite"));

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

    
    

	$query_visite.=" LIMIT $debut, $nbligneparpage";
	$result_visite=mysql_query($query_visite);

        $response["nbreponse"]=$total;
				 ob_start();
				 include("tableau-liste-visite.php");
				 $tableau_visite = ob_get_clean();
				 ob_end_clean();
		$response["liste"]=utf8_encode($tableau_visite);

?>