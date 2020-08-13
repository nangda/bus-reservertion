<?php 

        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idimportation=mysql_real_escape_string  ($_POST["idimportation"]);
$laimportation=getimportationinformations($idimportation);



$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");





$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		


if($trouve==false){ 

     if($laimportation["etat"]==1)$etat='0'; else $etat="1";
	 $query="UPDATE  importation_donnees SET etat='$etat' WHERE idimportation='$idimportation';";
	 mysql_query($query) OR die(mysql_error());

	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["etat"] = "$etat";
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
}

	