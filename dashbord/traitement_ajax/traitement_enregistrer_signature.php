<?php 
require_once('../includes/jSignature_Tools_Base30.php');
$response=array();

$iddemandeur=mysql_real_escape_string(strip_tags(trim($_POST["iddemandeur"])));
$demandeur=getdemandeurInformations($iddemandeur);
$signature=mysql_real_escape_string(strip_tags(trim($_POST["signature"])));
$assurance=trim(mysql_real_escape_string  ($_POST["souscription-assurance"]));
$vente =mysql_real_escape_string(strip_tags(trim($_POST["condition-vente"]))); 
$utilisation =mysql_real_escape_string(strip_tags(trim($_POST["condition-utilisation"]))); 


if($signature=="0" || $signature=="0" || $assurance=="0"  ){ 
	$trouve=true;
	$message="Vueillez cocher les cases de validation";
}

$error="";

$trouve=false;


$h=gmdate("H")+1;
if($h<10)$h="0".$h;
$heure_creation=$h.":".gmdate("i:s");
$heure_modification="";
$date_validation="";
$heure_validaton="";
$photo="";




if($trouve==false){ 
	
	 mysql_query("UPDATE  demandeur SET signature='$signature'  WHERE iddemandeur='$demandeur[0]' ") OR die(mysql_error());
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $dossier_fichier="../justifs/demandeur$demandeur[0]/";
	 if(file_exists($dossier_fichier)!=1)mkdir($dossier_fichier);
	 if(file_exists($dossier_fichier))unlink($dossier_fichier."signature.png");
	 base30_to_jpeg($demandeur["signature"], $dossier_fichier."signature.png");
	 UpdateEtatDossier($demandeur[0]);
	
}else{
	  $response["erreur"] = "oui";
	  $response["session"] = "1";
	  $response["message"] = "$message";
	
}

?>