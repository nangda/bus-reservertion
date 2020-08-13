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


		include("../connectionbd.php");
		include("../mesfonctions.php");
        
        
		$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
		$admin=$lprovince[0];
		
		$idprovince=mysql_real_escape_string  ($_POST["idprovince"]);
		$titre=utf8_decode(mysql_real_escape_string  ($_POST["titre-province"]));
		$reference=utf8_decode(mysql_real_escape_string  ($_POST["reference-province"]));
		$couleur=utf8_decode(mysql_real_escape_string  ($_POST["couleur"]));

		
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
			if($idprovince==0){
			     $supprimable="1";
				 $etat=0;
				 $concerne="";
				 $idconcerne=0;
				 $query="INSERT INTO province VALUES ('0','$titre','$reference','$couleur','$admin','0','$date_creation','$heure_creation','','','$etat') ";
				 
			     mysql_query($query) OR die(mysql_error());
				 $lprovince=getprovinceinformations(mysql_insert_id());
				
				  $class="";
				  $title="Valider "; 
				  /*if($profil=="CREATEUR" OR $profil=="TRESORIER"){
						$url_supprimer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-confirmation-suppression-province.php?idtontine=$latontine[0]&idprovince=$lprovince[0]")."','loader');";
						$url_modifier="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-ajouter-province.php?idtontine=$latontine[0]&idprovince=$lprovince[0]")."','loader', initDatePaiement);";

						$url_valider="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-confirmation-validation-province.php?idtontine=$latontine[0]&idprovince=$lprovince[0]")."','loader');";

				  }else{*/
						$url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";
						$url_modifier="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";
						$url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";

				  //}

				
				
				 $province="<tr id=\"tr_province$lprovince[0]\">
									<td class=\"colonne-tab edit-line\"><a href=\"javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-ajouter-province.php?idprovince=$lprovince[0]")."','loader');\"><i class=\"fa fa-pencil\"></i></a></td>
									<td class=\"colonne-tab detail-line\"><i class=\"fa fa-eye\"></i></td>
									<td class=\"colonne-tab\"><i class=\"fa fa-check-circle\"></i></td>
									<td class=\"colonne-tab delete-line\"><i class=\"fa fa-trash\"></i></td>
									<td id=\"nom-province$lprovince[0]\">".utf8_encode($lprovince["titre"])." </td>
									<td id=\"reference-province$lprovince[0]\">".$lprovince["reference"]."</td>
									<td id=\"couleur-province$lprovince[0]\" style=\"background-color: ".$lprovince["couleur"]."\">".$lprovince["couleur"]."</td>
									</tr>";
				 $response["province"] = $province;
			}else{
				 $query="UPDATE province SET titre='$titre', reference='$reference', couleur='$couleur',modificateur ='$admin', date_modification='$date_creation', heure_modification='$heure_creation' WHERE idprovince='$idprovince'";
				
			     mysql_query($query) OR die(mysql_error());
				 $lprovince=getprovinceinformations($idprovince);
				
				 $response["nom"] = utf8_encode($lprovince["titre"]);
				 $response["reference"] = utf8_encode($lprovince["reference"]);
				 $response["couleur"] =utf8_encode($lprovince["couleur"]);
			}
		
				 /*ob_start();
				 include("tableau-recap-mail-membre-enregistrement-province.php");
				 $tableau_detail_mail_membre = ob_get_clean();
				 ob_end_clean();

				 ob_start();
				 include("tableau-recap-mail-admin-enregistrement-province.php");
				 $tableau_detail_mail_admin = ob_get_clean();
				 ob_end_clean();
				
				 mail_simple("merleauponti@gmail.com", "NOTIFICATION MISE A JOUR DE TONTINE    ",$tableau_detail_mail_admin, "TONTINET <contact@tontinet.com>");
				 mail_simple("bafou1@yahoo.fr", " NOTIFICATION MISE A JOUR DE TONTINE    ",$tableau_detail_mail_admin, "TONTINET <contact@tontinet.com>");

				 $needle = array('@gmail','@yahoo');
				 if(strpos_arr($lemembre_createur["email"], $needle)==false){
					  mail_html($lemembre_createur["email"], " NOTIFICATION MISE A JOUR DE VOTRE TONTINE ",$tableau_detail_mail_lemembre, "TONTINET <contact@tontinet.com>");
				 }else{
					mail_simple($lemembre_createur["email"] , " NOTIFICATION MISE A JOUR DE VOTRE TONTINE   ",$tableau_detail_mail_lemembre, "TONTINET <contact@tontinet.com>");
				 }	*/
			
            
			$response["erreur"] = "non";
			$response["session"] = "1";
			$response["nbprovince"] = mysql_num_rows(mysql_query("SELECT * FROM province  "));

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

 ?>