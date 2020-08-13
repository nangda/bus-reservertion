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
		$error="";
		$response=array();
		$trouve=false;
        $tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");
        $date_creation=date("Y/m/d");
        $heure_actuelle = gmdate( "H" ) + 1;
		if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
		$minute_actuelle = gmdate( "i" );
		$heure_creation=$heure_actuelle.":".$minute_actuelle;		
        
		$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
		$admin=$lville[0];
		
		$iddepartement=mysql_real_escape_string  ($_POST["departement"]);
		$ladepartement=getdepartementInformationsbyreference($iddepartement);
		
		
		if($ladepartement==false){
			$trouve=true;
			$erreur="Aucune departement ne correspont";
		}else{
			
		}
		
		
		
		if($trouve==false){ 
 		   ob_start();
		   include("datatable-departement-camembert.php");
		   $datatable = ob_get_clean();
		   ob_end_clean();
           
		   $response["erreur"] = "non";
		   $response["session"] = "1";
		   $response["nbreponse"] = $nbdepartement=mysql_num_rows(mysql_query("SELECT * FROM membre WHERE departement='$ladepartement[0]' "));
		   $response["session"] = "1";
		   $response["datatable"] = "$datatable";
		   $response["message"] = "Aucun enregistrement relatif au département <strong>".utf8_encode($ladepartement["titre"])."</strong>";
		   $response["departement"] = utf8_encode($ladepartement["titre"]);
		

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