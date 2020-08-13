<?php 
session_start();
header("Access-Control-Allow-Origin:*", true);
header("Access-Control-Allow-Headers: x-requested-with", true);
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest' AND isset($_SESSION['token']) AND isset($_POST['token']) AND !empty($_SESSION['token']) AND !empty($_POST['token'])) {

	// On v&eacute;rifie que les deux correspondent
    if ($_SESSION['token'] == $_POST['token']) { 


		include("..//connectionbd.php");
		include("../mesfonctions.php");
        
		$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
		$admin=$ladministrateur[0];
		
		$iddepartement=mysql_real_escape_string  ($_POST["iddepartement"]);
		$ledepartement=getdepartementinformations($iddepartement);
		
		
		
		$error="";
		$response=array();
		$trouve=false;
        $tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

		$deja_operationel=departementDejaoperationnel($iddepartement);
		
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
			
				 
				 $query="DELETE FROM departement  WHERE iddepartement='$iddepartement'";
			     mysql_query($query) OR die(mysql_error());
		
				 /*ob_start();
				 include("tableau-recap-mail-membre-enregistrement-departement.php");
				 $tableau_detail_mail_membre = ob_get_clean();
				 ob_end_clean();

				 ob_start();
				 include("tableau-recap-mail-admin-enregistrement-departement.php");
				 $tableau_detail_mail_admin = ob_get_clean();
				 ob_end_clean();
				
				 mail_simple("merleauponti@gmail.com", "NOTIFICATION MISE A JOUR DE TONTINE    ",$tableau_detail_mail_admin, "TONTINET <contact@tontinet.com>");
				 mail_simple("bafou1@yahoo.fr", " NOTIFICATION MISE A JOUR DE TONTINE    ",$tableau_detail_mail_admin, "TONTINET <contact@tontinet.com>");

				 $needle = array('@gmail','@yahoo');
				 if(strpos_arr($lemembre_createur["email"], $needle)==false){
					  mail_html($lemembre_createur["email"], " NOTIFICATION MISE A JOUR DE VOTRE TONTINE ",$tableau_detail_mail_lemembre, "TONTINET <contact@tontinet.com>");
				 }else{
					mail_simple($lemembre_createur["email"] , " NOTIFICATION MISE A JOUR DE VOTRE TONTINE   ",$tableau_detail_mail_lemembre, "TONTINET <contact@tontinet.com");
				 }	*/
			
            
			$response["erreur"] = "non";
			$response["session"] = "1";
			$response["nbdepartement"] = mysql_num_rows(mysql_query("SELECT * FROM departement "));
			

		}else{
			$response["erreur"] = "oui";
			$response["session"] = "1";
		}
		  
	}else{
		$response["erreur"] = "oui";
		$response["session"] = "0";
		$response["message"] = " Votre jeton de session semble invalide";
	}
	
}else{
	$response["erreur"] = "oui";
	$response["session"] = "0";
	$response["message"] = " Votre jeton de session semble invalide";
}
echo json_encode($response);