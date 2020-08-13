<?php 
$compte=mysql_real_escape_string(trim($_POST['login']));
$pwd= (trim($_POST['mdp'])); 

$administrateur=mysql_fetch_array(mysql_query("SELECT * FROM administrateur WHERE email='$compte';"));
$error="";
$today=date("Y/m/d");
if($administrateur!=false){ 

  if($administrateur["etat"]=="0"){
	   $error="<strong >D&eacute;sol&eacute;, <strong>Ce compte a &eacute;t&eacute; suspendu</strong>.<br /> Veuillez contacter l\'administrateur principal </strong>";
	  
  }elseif($administrateur["date_debut"]!=="" AND $administrateur["date_fin"]!=""){
	  
	  if($administrateur["date_debut"]>$today OR $administrateur["date_fin"]<$today){
	   $error="<strong>&nbsp;&nbsp;D&eacute;sol&eacute;, La p&eacute;riode de validit&eacute; de ce compte semble poser problème.</strong>.<br /> Vueillez contacter l\'administrateur principal ";
	  }

  }elseif(md5(base64_decode($administrateur["pwd"]))!=$pwd){
		  $error="<strong >".$administrateur["prenom"]."</strong>, votre mot de passe semble invalide </div>";
  }

}else{
	  $error="Email ou mot de passe invalide" ;
}
$code_activation=randomize_integer(4);


if($error==""){ 
	 $date=gmdate("Y/m/d");
	 $heure=gmdate("H")+1;
	 $heure=$heure.gmdate(":i:s");

	 $idadministrateur=$administrateur[0];
	 mysql_query("UPDATE administrateur SET code_authentification_a_deux_facteurs='$code_activation' WHERE idadministrateur='$idadministrateur'");
	 $administrateur=getadministrateurInformations($idadministrateur);
     $code_activation=$administrateur["code_authentification_a_deux_facteurs"];
	 
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["next"] = base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=authentification_a_deux_facteurs");
	 $prenom=$administrateur["prenom"];
	 $telephone=$administrateur["telephone"];

	 $sms="<#>Code d'Authentification pour acces a la console d'administration BICEC CRESCO : $code_activation";
	 $destination="237".$telephone;
	
	 if($administrateur["telephone"]!="") EnvoyerSMS($destination,$sms); 
	 //else{
	 ob_start();
	 include("tableau_admin_mail_deux_facteur.php");
	 $tableau_mail_admin = ob_get_clean();
	 ob_end_clean();

	 mail_simple($administrateur["email"], "CODE D'ACCES A LA CONSOLE D'ADMINISTRATION" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>");   

	 //}
	//
	 $response["erreur"] = "non";
	 $response["session"] = "1";
}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}

?>