<?php 



$error="";
$today=date("Y/m/d");
$administrateur=getadministrateurInformations($_SESSION["compte"]);

if($administrateur==false)$error="oui";
if($error==""){ 
	 $date=gmdate("Y/m/d");
	 $heure=gmdate("H")+1;
	 $heure=$heure.gmdate(":i:s");


	 $ip =  get_ip();//$_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_restaurateur_IP']);
	 $titre_page="Identification ACCES PANEL GESTION"; 
	 $page=mysql_real_escape_string("CONSOLE D'AMINISTRATION");
	 $operation="Deconnexion";
	 $requete="";
	 $libelle="Cl&ocirc;ture de session console admin";
	 $visiteur=mysql_real_escape_string($administrateur["nom"]." ".$administrateur["prenom"]);
	 $type="Admin";

	 Enregistrer_visite($visiteur,$administrateur[0],$page,$operation,$requete,$libelle,$type); 
	
	$_SESSION["compte"]=$administrateur["email"];
	 unset($_SESSION["compte"]);
	 unset($_SESSION["token"]);
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["next"] = "./";
	 $response["page"] = "Identification - DASHBORD BICEC CRESCO";
	
}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
	 $response["next"] = "./";
	 $response["page"] = "Identification - DASHBORD BICEC CRESCO";
}

?>