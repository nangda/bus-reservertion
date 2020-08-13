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


if($error==""){ 
	 $date=gmdate("Y/m/d");
	 $heure=gmdate("H")+1;
	 $heure=$heure.gmdate(":i:s");

	 $ip =  get_ip();//$_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_restaurateur_IP']);
	 $titre_page="Identification ACCES PANEL GESTION"; 
	 $page="Accueil identification";
	 $action="Acces console admin";
	 $visiteur=$administrateur["nom"]." ".$administrateur["prenom"];

	 Enregistrer_visite($visiteur,$administrateur[0],$page_visite,$action,"","Acces console admin");

	 $_SESSION["compte"]=$administrateur["email"];
	 $response["erreur"] = "non";
	 $response["session"] = "1";
}else{
	 $response["erreur"] = "oui";
	 $response["session"] = "1";
	 $response["message"] = "$error";
}

?>