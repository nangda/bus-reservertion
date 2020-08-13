<?php 

$current_pwd=mysql_real_escape_string  (strip_tags(trim($_POST['pwd-user'])));
$pwd=mysql_real_escape_string  (strip_tags(trim($_POST['pwd'])));
$compte=$_SESSION["compte"];
$administrateur=mysql_fetch_array(mysql_query("SELECT * FROM administrateur WHERE  email='$compte' ;"));

$error="";
$response=array();
$trouve=false;
$response["activation"] = "1";
if($administrateur!=false){ 

  if(md5(base64_decode($administrateur["pwd"]))!=$current_pwd){
	  $error=" <strong >".$administrateur["prenom"]."</strong>, votre mot de passe semble invalide";
	  $trouve=true;
  }

}else{
	  $error="Identifiant invalide ";
	  $trouve=true;
}
$code_activation=randomize_integer(4);

if($trouve==false){ 
	 $date=gmdate("Y/m/d");
	 $heure=gmdate("H")+1;
	 $heure=$heure.gmdate(":i:s");
	 $idadministrateur=$administrateur[0];
	 mysql_query("UPDATE administrateur SET code_authentification_a_deux_facteurs='$code_activation' WHERE idadministrateur='$idadministrateur'");
	 $administrateur=getadministrateurInformations($idadministrateur);
     $code_activation=$administrateur["code_authentification_a_deux_facteurs"];
	 //$_SESSION["login_client"]=$administrateur["telephone"];
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["next"] = base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=modification-pwd");
	 $prenom=$administrateur["prenom"];
	 $telephone=$administrateur["telephone"];

	 $sms="<#>Code d'Authentification pour confirmation de modification de votre mot de passe d'acces a l'espace admin BICEC CRESCO : $code_activation";
	 $destination="237".$telephone;
	
	 EnvoyerSMS($destination,$sms); 

}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}

	
?>
