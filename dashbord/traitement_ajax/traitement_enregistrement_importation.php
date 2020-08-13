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

 

$i=0;


if($trouve==false){ 
	
     require_once '../PHP_Excel/Classes/PHPExcel/IOFactory.php';
	  
	 $objPHPExcel = PHPExcel_IOFactory::load($fichier['tmp_name']);
	  
		  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){
		      $highestRow = $worksheet->getHighestRow();
			  for($row=2; $row<=$highestRow; $row++){ 
				  
				  $code_agence= mysql_real_escape_string  (strip_tags(trim ($worksheet->getCellBycolumnAndRow(0, $row)->getValue())));
				  $numero_compte= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(1, $row)->getValue())));
				  $cle_compte= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(2, $row)->getValue())));
				  $gestionnaire= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(3, $row)->getValue())));
				  // $prix=preg_replace('/s/', '', $prix);
				  
				  $code_gestionnaire= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(4, $row)->getValue())));
				  $email_gestionnaire= mysql_real_escape_string  (strip_tags(trim(($worksheet->getCellBycolumnAndRow(5, $row)->getValue()))));
				  $importation=getImportationInformationsByNumeroCompte($numero_compte);
				  if($code_agence!="" AND filter_var($email_gestionnaire, FILTER_VALIDATE_EMAIL) AND $cle_compte!="" AND $code_agence!="" AND $code_gestionnaire!="" AND $gestionnaire!="" AND $numero_compte!="" AND $importation==false){
					  
					  $sql= "INSERT INTO importation_donnees VALUES ('0', '$code_agence','$numero_compte','$cle_compte','$gestionnaire','$code_gestionnaire' ,'$email_gestionnaire' ,'$admin' ,'$date_creation','$heure_creation','0','','','1')";
					mysql_query($sql)or die (mysql_error());
					  $i=$row-1;
				  }
			  }
			  
		  }

	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["nbligne"] = "$i";
	if($i>0)$response["message"] = "$i ligne(s) importée(s) avec succès";
	else $response["message"] = "Aucune ligne importée";

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$message";
}
		  

 ?>