<?php 

        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idadministrateur=mysql_real_escape_string  ($_POST["idadministrateur"]);
$laadministrateur=getadministrateurinformations($idadministrateur);



$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

$deja_operationel=0;//administrateurDejaoperationnel($idadministrateur);



$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		


if($trouve==false){ 

     if($laadministrateur["etat"]==1)$etat='0'; else $etat="1";
	 $query="UPDATE  administrateur SET etat='$etat' WHERE idadministrateur='$idadministrateur';";
	 mysql_query($query) OR die(mysql_error());

	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["etat"] = "$etat";
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
}

	