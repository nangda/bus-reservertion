<?php 

$idadministrateur=trim(mysql_real_escape_string  ($_POST["idadministrateur"]));

$administrateur=getadministrateurInformations($idadministrateur);
$code=mysql_real_escape_string  (trim($_POST["code"]));

$current_pwd=mysql_real_escape_string  (strip_tags(trim($_POST['pwd-user'])));
$pwd=(mysql_real_escape_string  (strip_tags(trim($_POST['new-pwd-user']))));
$compte=$_SESSION["login_client"];

$error="";
$response=array();
$trouve=false;
if($administrateur!=false){ 

  if($administrateur["code_authentification_a_deux_facteurs"]!=$code){
	  $error=" <strong >".$administrateur["prenom"]."</strong>, Ce code ne correspond pas.";
	  $trouve=true;
   }else{
	  if(md5(base64_decode($administrateur["pwd"]))!=$current_pwd){
		  $error=" <strong >".$administrateur["prenom"]."</strong>, votre mot de passe semble invalide";
		  $trouve=true;
	  }
  }

}else{
	  $error="Ce code ne correspond pas" ;
	  $trouve=true;
}


if($trouve==false){ 

	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["message"] = "Votre mot de passe a été modifier avec succès.";

	mysql_query("UPDATE administrateur SET pwd='$pwd', code_authentification_a_deux_facteurs='****' WHERE idadministrateur='$idadministrateur';") OR die(mysql_errno());
		
	 unset($_SESSION["compte"]);
	 unset($_SESSION["token"]);

}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}
		
	
?>