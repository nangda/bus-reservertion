<?php 
$mois_de_suspension=mysql_real_escape_string  ($_POST["mois-pause"]);


$iddemandeur=trim(mysql_real_escape_string  ($_POST["iddemandeur"]));
$piece=trim(mysql_real_escape_string  ($_POST["piece"]));
$demandeur=getdemandeurInformations($iddemandeur);



$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");



if($trouve==false){ 
	
	 $dossier_fichier="../justifs/demandeur$demandeur[0]/";

	 $fileName = $demandeur[$piece];
	
	 unlink($dossier_fichier.$fileName);
     
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["message"] = "Suppression effectuée avec succès";
	
	 mysql_query("UPDATE demandeur  SET  $piece='' WHERE iddemandeur='$iddemandeur';") OR die(mysql_error());
	 $demandeur=getdemandeurInformations($iddemandeur);
	 
	 UpdateEtatDossier($demandeur[0]);
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$message";
}

	