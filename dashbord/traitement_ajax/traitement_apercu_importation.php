<?php 
       
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$fichier=$_FILES['fichier-importation'];

$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		


$fileName="";
$valid_extensions = array("xls", "xlsx");


if(is_uploaded_file($fichier['tmp_name']) ){
	 $tabfichier = explode(".", $fichier['name']);
	 $file_extension = end($tabfichier);
	 if(!in_array(strtolower($file_extension), $valid_extensions)){
	   $trouve=true;
	   $message="Le fichier doit être au format: <strong>xls</strong> ou <strong>xlsx</strong><br>" ;
	 }
}else{
	   $trouve=true;
	   $message="Veuillez joindre un fichier<br>" ;
 }		

 




if($trouve==false){ 
	
     require_once '../PHP_Excel/Classes/PHPExcel/IOFactory.php';
	  
	 $objPHPExcel = PHPExcel_IOFactory::load($fichier['tmp_name']);
	  
     ob_start();
     include("../lightbox/lightbox-apercu-importation.php");
     $tableau_importation = ob_get_clean();
     ob_end_clean();


	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["apercu"] = "$tableau_importation";
	$response["message"] = "$error";

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$message";
}
		  

 ?>