<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idagence=mysql_real_escape_string  ($_POST["idagence"]);
$laagence=getagenceinformations($idagence);


$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

$deja_operationel=agenceDejaoperationnel($idagence);

if($deja_operationel==1){
	$trouve=true;
	$response["deja_operationnel"]=1;
}else $response["deja_operationnel"]=0;

$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		


if($trouve==false){ 
	 $query="DELETE FROM agence  WHERE idagence='$idagence';";
	 mysql_query($query) OR die(mysql_error());

	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["nbagence"] = mysql_num_rows(mysql_query("SELECT * FROM agence "));
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
}

	