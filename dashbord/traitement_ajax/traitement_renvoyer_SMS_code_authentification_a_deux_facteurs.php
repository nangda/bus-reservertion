<?php 

$response=array();
$idadministrateur=trim(mysql_real_escape_string  ($_POST["idadministrateur"]));

$administrateur=getadministrateurInformations($idadministrateur);
$prenom=$administrateur["prenom"];
$telephone=$administrateur["telephone"];

$error="";

$trouve=false;

$code_activation=$administrateur["code_authentification_a_deux_facteurs"];


if($trouve==false){ 
		
	  $response["erreur"] = "non";
	  $response["session"] = "1";
	  $response["email"] = "$email";
	  $response["message"] = "<strong>$prenom</strong>, le code d'Authentification à deux facteurs a été renvoyé par SMS au numéro <strong>".substr($telephone, 0,3)."XXXX".substr($telephone, -2)."</strong>";
	 
	  $sms="<#>Code d'Authentification pour acces a la console d'administration BICEC CRESCO : $code_activation";
	  $destination="237".$telephone;
	  EnvoyerSMS($destination,$sms); 

}else{
	  $response["erreur"] = "oui";
	  $response["session"] = "1";
	  $response["message"] = "$message";
	
}

?>