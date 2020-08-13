<?php 

$idadministrateur=trim(mysql_real_escape_string  ($_POST["idadministrateur"]));

$compte=$_SESSION["compte"];
$administrateur=getadministrateurInformations($idadministrateur);
$code=mysql_real_escape_string  (trim($_POST["code"]));

$telephone=(mysql_real_escape_string  (strip_tags(trim($_POST['telephone']))));

$error="";
$response=array();
$trouve=false;
if($administrateur!=false){ 

  if($administrateur["code_authentification_a_deux_facteurs"]!=$code){
	  $error=" <strong >".$administrateur["prenom"]."</strong>, Ce code ne correspond pas.";
	  $trouve=true;
   }else{
		if(mysql_num_rows(mysql_query("SELECT * FROM administrateur WHERE idadministrateur!='$administrateur[0]' AND  telephone='$telephone' "))>0){ 
			$trouve=true;
			$message="Numéro de téléphone déjà utilisée par un autre client";
		}
  }

}else{
	  $error="Ce code ne correspond pas" ;
	  $trouve=true;
}


if($trouve==false){ 

	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["message"] = "Numéro de téléphone modifié avec succès.";

	mysql_query("UPDATE administrateur SET telephone='$telephone', code_authentification_a_deux_facteurs='****' WHERE idadministrateur='$idadministrateur';") OR die(mysql_errno());
		
	 unset($_SESSION["compte"]);
	 unset($_SESSION["token"]);

}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}
		
	
?>