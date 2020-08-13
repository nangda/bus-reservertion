<?php 
session_start();
header("Access-Control-Allow-Origin:*", true);
header("Access-Control-Allow-Headers: x-requested-with", true);
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest' AND isset($_SESSION['token']) AND isset($_POST['token']) AND !empty($_SESSION['token']) AND !empty($_POST['token'])) {

	// On v&eacute;rifie que les deux correspondent
    if ($_SESSION['token'] == $_POST['token']) { 


		include("../../panel/connectionbd.php");
		include("../../panel/mesfonctions.php");
        
        
		$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
		$admin=$ladministrateur[0];
		
		$date_debut=mysql_real_escape_string  ($_POST["date-debut-operation"]);
		$date_fin=mysql_real_escape_string  ($_POST["date-fin-operation"]);
		$nom=(mysql_real_escape_string  ($_POST["libelle-nom-a"])); 
		$statut=(mysql_real_escape_string  ($_POST["statut"]));

		
		
		$error="";
		$response=array();
		$pagination=7;
		if(isset($_POST["page_encours"]))$page_encours=mysql_real_escape_string  ($_POST["page_encours"]);
		else $page_encours=1;
		
		
		$marge=3;
	    $nbligneparpage=10;
		
			
        $query_artiste="SELECT * FROM artiste WHERE idartiste!='0' ";

		
		if($date_debut!="")$query_artiste.=" AND date_creation>='$date_debut' ";
		if($date_fin!="")$query_artiste.=" AND date_creation<='$date_fin' ";
		
		if($nom!="")$query_artiste.=" AND nom_dartiste like'%$nom%'";
		if($statut!="-1")$query_artiste.=" AND etat ='$statut'";
		
		if($nom=="")$query_artiste.=" ORDER BY idartiste DESC";
		else $query_artiste.=" ORDER BY nom_dartiste ASC";
		
	    $result_artiste=mysql_query($query_artiste);
	    $nbreponse=mysql_num_rows($result_artiste);
		
		$nbtotalpage=ceil($nbreponse/$nbligneparpage);
		$debut=($page_encours-1)*$nbligneparpage;
		$query_artiste.=" LIMIT $debut, $nbligneparpage";
		$result_artiste=mysql_query($query_artiste);
		
        $response["nbreponse"]=$nbreponse;
				 ob_start();
				 include("tableau-liste-artiste.php");
				 $tableau_artiste = ob_get_clean();
				 ob_end_clean();
		$response["liste"]=utf8_encode($tableau_artiste);

	}else{
		$response["erreur"] = "oui";
		$response["session"] = "0";
		$response["message"] = " Votre jeton de session semble invalide";
	}
	
}else{
	$response["erreur"] = "oui";
	$response["session"] = "0";
	$response["message"] = " Votre jeton de session semble invalide";
}
echo json_encode($response);