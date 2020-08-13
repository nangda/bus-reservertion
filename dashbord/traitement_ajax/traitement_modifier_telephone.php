<?php 

$telephone=mysql_real_escape_string  (strip_tags(trim($_POST['new-telephone-user'])));
$compte=$_SESSION["compte"];
$administrateur=mysql_fetch_array(mysql_query("SELECT * FROM administrateur WHERE  email='$compte' ;"));

$error="";
$response=array();
$trouve=false;
if($administrateur!=false){ 

	if(mysql_num_rows(mysql_query("SELECT * FROM administrateur WHERE idadministrateur!='$administrateur[0]' AND  telephone='$telephone' "))>0){ 
		$trouve=true;
		$error="Numéro de téléphone déjà utilisé par un autre client";
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
	 $response["next"] = base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=modification-telephone");
	 $prenom=$administrateur["prenom"];
	 $telephone=$administrateur["telephone"];

	 $sms="<#>Vous soouhaitez remplacer votre numero de teleéphone actuel par [$telephone]. Trouvez ici le code de confirmation : $code_activation";
	 $destination="237".$telephone;
	
	 EnvoyerSMS($destination,$sms); 

}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}

	
?>
