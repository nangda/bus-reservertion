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
		$admin=$ladministrateur[0];
		
		$idquartier=mysql_real_escape_string  ($_POST["idquartier"]);
		$titre=utf8_decode(mysql_real_escape_string  ($_POST["titre-quartier"]));
		$reference=utf8_decode(mysql_real_escape_string  ($_POST["reference-quartier"]));
		$idcommune=utf8_decode(mysql_real_escape_string  ($_POST["commune-quartier"]));
		if($idcommune=="")$idcommune=0;
		$lacommune=getcommuneInformations($idcommune);
		if($lacommune==false){
			$iddepartement=0;
			$idprovince=0;
		}else{
			$iddepartement=$lacommune["iddepartement"];
			$ledepartement=getdepartementInformations($iddepartement);

			$idprovince=$lacommune["idprovince"];
			$laprovince=getdepartementInformations($idprovince);
			
		}
		$error="";
		$response=array();
		$trouve=false;
        $tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

		
        $date_creation=date("Y/m/d");
        $heure_actuelle = gmdate( "H" ) + 1;
		if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
		$minute_actuelle = gmdate( "i" );
		$heure_creation=$heure_actuelle.":".$minute_actuelle;		

		if($idquartier==0 AND mysql_num_rows(mysql_query("SELECT * FROM quartier WHERE titre='$titre'   OR reference='$reference' "))>0){ 
			$trouve=true;
		   $error="Un quartier ayant les mêmes infos existe  d&eacute;j&agrave;. Bien vouloir vérifier.<br>";
		}

		
		
		
		if($trouve==false){ 
			if($idquartier==0){
			     $supprimable="1";
				 $etat=0;
				 $concerne="";
				 $idconcerne=0;
				 $query="INSERT INTO quartier VALUES ('0','$titre','$reference','$idcommune','$iddepartement','$idprovince','$admin','0','$date_creation','$heure_creation','','','$etat') ";
				 
			     mysql_query($query) OR die(mysql_error());
				 $lquartier=getquartierinformations(mysql_insert_id());
				
				  $class="";
				  $title="Valider "; 
				  /*if($profil=="CREATEUR" OR $profil=="TRESORIER"){
						$url_supprimer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-confirmation-suppression-quartier.php?idtontine=$latontine[0]&idquartier=$lquartier[0]")."','loader');";
						$url_modifier="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-ajouter-quartier.php?idtontine=$latontine[0]&idquartier=$lquartier[0]")."','loader', initDatePaiement);";

						$url_valider="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-confirmation-validation-quartier.php?idtontine=$latontine[0]&idquartier=$lquartier[0]")."','loader');";

				  }else{*/
						$url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";
						$url_modifier="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";
						$url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";

				  //}

				
				
				 $quartier="<tr id=\"tr_quartier$lquartier[0]\">
									<td class=\"colonne-tab edit-line\"><a href=\"javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-ajouter-quartier.php?idquartier=$lquartier[0]")."','loader');\"><i class=\"fa fa-pencil\"></i></a></td>
									<td class=\"colonne-tab detail-line\"><i class=\"fa fa-eye\"></i></td>
									<td class=\"colonne-tab\"><i class=\"fa fa-check-circle\"></i></td>
									<td class=\"colonne-tab delete-line\"><i class=\"fa fa-trash\"></i></td>
									<td id=\"nom-quartier$lquartier[0]\">".utf8_encode($lquartier["titre"])." </td>
									<td id=\"reference-quartier$lquartier[0]\">".$lquartier["reference"]."</td>
									<td id=\"commune-quartier$lquartier[0]\">".utf8_encode($lacommune["titre"])."</td>
									<td id=\"departement-quartier$lquartier[0]\">".utf8_encode($ledepartement["titre"])."</td>
									<td id=\"province-quartier$lquartier[0]\">".utf8_encode($laprovince["titre"])."</td>
									</tr>";
				 $response["quartier"] = $quartier;
			}else{
				 $query="UPDATE quartier SET idprovince='$idprovince',iddepartement='$iddepartement',idcommune='$idcommune',titre='$titre', reference='$reference', modificateur ='$admin', date_modification='$date_creation', heure_modification='$heure_creation' WHERE idquartier='$idquartier'";
				
			     mysql_query($query) OR die(mysql_error());
				 $lquartier=getquartierinformations($idquartier);
				
				 $response["nom"] = utf8_encode($lquartier["titre"]);
				 $response["reference"] = utf8_encode($lquartier["reference"]);
				 $response["commune"] =utf8_encode($lacommune["titre"]);
				 $response["departement"] =utf8_encode($ledepartement["titre"]);
				 $response["province"] =utf8_encode($laprovince["titre"]);
			}
		
				 /*ob_start();
				 include("tableau-recap-mail-membre-enregistrement-quartier.php");
				 $tableau_detail_mail_membre = ob_get_clean();
				 ob_end_clean();

				 ob_start();
				 include("tableau-recap-mail-admin-enregistrement-quartier.php");
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
			$response["nbquartier"] = mysql_num_rows(mysql_query("SELECT * FROM quartier  "));

		}else{
			$response["erreur"] = "oui";
			$response["session"] = "1";
			$response["message"] = "$error";
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