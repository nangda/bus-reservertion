
     <?php 

        
        
	$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
	$admin=$ladministrateur[0];
		
		
	  $error="";
	  $response=array();

	  if(isset($_POST["page_encours"]))$page_active=mysql_real_escape_string  ($_POST["page_encours"]);
	  else $page_active=1;

      $idformulaire=mysql_real_escape_string  ($_POST["form"]);
      $idconteneur_resultat=mysql_real_escape_string  ($_POST["conteneur-resultat"]);
      $nom=mysql_real_escape_string  (trim($_POST["libelle-nom"]));
      $prenom=mysql_real_escape_string  (trim($_POST["libelle-prenom"]));
      $telephone=mysql_real_escape_string  (trim($_POST["libelle-telephone"]));
      $email=mysql_real_escape_string  (trim($_POST["libelle-email"]));
      $niveau_dacces=mysql_real_escape_string  (trim($_POST["niveau_dacces"]));
      $circonscription=mysql_real_escape_string  (trim($_POST["circonscription"]));
      $profil=mysql_real_escape_string  (trim($_POST["profil"]));
      $idagence=mysql_real_escape_string  (trim($_POST["agence"]));
	  $nbligneparpage=10;
		
	  $ledebut=$debut=$nbligneparpage*($page_active-1);

	  $query_administrateur="SELECT * FROM administrateur WHERE idadministrateur!='0' ";

      if($idagence!="" ){
		  $query_administrateur.=" AND idagence='$idagence' ";
	  }
      if($profil!="" ){
		  $query_administrateur.=" AND fonction='$profil' ";
	  }
      if($niveau_dacces!="" ){
		  $query_administrateur.=" AND idadministrateur IN (SELECT idadministrateur FROM droit_dacces WHERE niveau_dacces='$niveau_dacces') ";
	  }
      if($circonscription!="" ){
		  $query_administrateur.=" AND idadministrateur IN (SELECT idadministrateur FROM droit_dacces WHERE circonscription='$circonscription') ";
	  }
      if($prenom!="" ){
		  $query_administrateur.=" AND prenom LIKE '%$prenom%' ";
	  }
      
      if($email!="" ){
		  $query_administrateur.=" AND email LIKE '%$email%' ";
	  }
      
      if($nom!=""){
		  $query_administrateur.=" AND nom LIKE '%$nom%' ";
		  $query_administrateur.=" ORDER BY nom ASC";
	  }else{
		  $query_administrateur.=" ORDER BY idadministrateur DESC";
	  }
      
	  $total=mysql_num_rows(mysql_query("$query_administrateur"));

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

    
    

	$query_administrateur.=" LIMIT $debut, $nbligneparpage";
	$result_administrateur=mysql_query($query_administrateur);

        $response["nbreponse"]=$total;
				 ob_start();
				 include("tableau-liste-administrateur.php");
				 $tableau_administrateur = ob_get_clean();
				 ob_end_clean();
		$response["liste"]=utf8_encode($tableau_administrateur);

?>