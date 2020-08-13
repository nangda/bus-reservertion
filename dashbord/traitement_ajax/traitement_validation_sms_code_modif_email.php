<?php 

$iddemandeur=trim(mysql_real_escape_string  ($_POST["iddemandeur"]));

$compte=$_SESSION["login_client"];
$demandeur=getdemandeurInformations($iddemandeur);
$code=mysql_real_escape_string  (trim($_POST["code"]));

$email=(mysql_real_escape_string  (strip_tags(trim($_POST['email']))));

$error="";
$response=array();
$trouve=false;
if($demandeur!=false){ 

  if($demandeur["code_authentification_a_deux_facteurs"]!=$code){
	  $error=" <strong >".$demandeur["prenom"]."</strong>, Ce code ne correspond pas.";
	  $trouve=true;
   }else{
		if(mysql_num_rows(mysql_query("SELECT * FROM demandeur WHERE iddemandeur!='$demandeur[0]' AND  email='$email' "))>0){ 
			$trouve=true;
			$message="Email déjà utilisée par un autre client";
		}
  }

}else{
	  $error="Ce code ne correspond pas" ;
	  $trouve=true;
}


if($trouve==false){ 

	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["message"] = "Email modifiée avec succès.";

	mysql_query("UPDATE demandeur SET email='$email', code_authentification_a_deux_facteurs='****' WHERE iddemandeur='$iddemandeur';") OR die(mysql_errno());
		
	 unset($_SESSION["login_client"]);
	 unset($_SESSION["token"]);

}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}
		
	
?>