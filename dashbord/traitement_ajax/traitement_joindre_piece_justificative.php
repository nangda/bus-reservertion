<?php 
$mois_de_suspension=mysql_real_escape_string  ($_POST["mois-pause"]);


$iddemandeur=trim(mysql_real_escape_string  ($_POST["iddemandeur"]));
$piece=trim(mysql_real_escape_string  ($_POST["piece"]));
$demandeur=getdemandeurInformations($iddemandeur);
$fichier=$_FILES['piece-jointe'];



$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

$fileName="";
$valid_extensions = array("jpeg", "jpg", "png","pdf");


if(is_uploaded_file($fichier['tmp_name']) ){
	 $tabfichier = explode(".", $fichier['name']);
	 $file_extension = end($tabfichier);
	 if(!in_array(strtolower($file_extension), $valid_extensions)){
	   $trouve=true;
	   $message="Le fichier doit être au format: <strong>jpeg</strong> ou <strong>jpg</strong> ou <strong>png</strong> ou <strong>pdf</strong><br>" ;
	 }
}		

 $dossier_fichier="../justifs/demandeur$demandeur[0]/";
 if(file_exists($dossier_fichier)!=1)mkdir($dossier_fichier);

 if(is_uploaded_file($fichier['tmp_name']) ){
	 if(file_exists($dossier_fichier)!=1)mkdir($dossier_fichier);
	 $fileName = time().".".$file_extension;
	 copy($fichier['tmp_name'],$dossier_fichier.$fileName);
 }else{
	   $trouve=true;
	   $message="Veuillez joindre un fichier<br>" ;
 }

if($trouve==false){ 
	
	 $dossier_fichier="../justifs/demandeur$demandeur[0]/";
	 if(file_exists($dossier_fichier)!=1)mkdir($dossier_fichier);

	 if(file_exists($dossier_fichier)!=1)mkdir($dossier_fichier);
	 if($piece=="avis"){
		 if($demandeur["statut_professionnel"]=="Employe_secteur_prive")$fileName = "avis.".$file_extension;
		 else $fileName = "attestation_de_presence_effective.".$file_extension;
	 }else  $fileName = "$piece.".$file_extension;
	
	 copy($fichier['tmp_name'],$dossier_fichier.$fileName);
     
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["filename"] = "$fileName";
	
	 mysql_query("UPDATE demandeur  SET  $piece='$fileName' WHERE iddemandeur='$iddemandeur';") OR die(mysql_error());
	 $demandeur=getdemandeurInformations($iddemandeur);
	 UpdateEtatDossier($demandeur[0]);
	
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$message";
}

	