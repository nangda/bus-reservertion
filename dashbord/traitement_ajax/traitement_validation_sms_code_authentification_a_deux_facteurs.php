<?php 

$idadministrateur=trim(mysql_real_escape_string  ($_POST["idadministrateur"]));

$administrateur=getadministrateurInformations($idadministrateur);
$code=mysql_real_escape_string  (trim($_POST["code"]));
$error="";
$response=array();
$trouve=false;
if($administrateur!=false){ 

  if($administrateur["code_authentification_a_deux_facteurs"]!=$code){
	  $error=" <strong >".$administrateur["prenom"]."</strong>, Ce code ne correspond pas.";
	  $trouve=true;
   }

}else{
	  $error="Ce code ne correspond pas" ;
	  $trouve=true;
}


if($trouve==false){ 

	 $url_to_go="./accueil/";
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["next"] = "$url_to_go";
	 mysql_query("UPDATE administrateur SET code_authentification_a_deux_facteurs='****' WHERE idadministrateur='$idadministrateur';");
	 $ip =  get_ip();//$_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_restaurateur_IP']);
	 $titre_page="Identification ACCES PANEL GESTION"; 
	 $page="Accueil - Identification ACCES PANEL GESTION";
	 $operation="Identification";
	 $requete="";
	 $libelle="Acces console admin";
	 $visiteur=mysql_real_escape_string($administrateur["nom"]." ".$administrateur["prenom"]);
	 $type="Admin";

	 Enregistrer_visite($visiteur,$administrateur[0],$page,$operation,$requete,$libelle,$type); 

	 $_SESSION["compte"]=$administrateur["email"];

}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}
		
	
?>