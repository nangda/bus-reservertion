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
		
		// verifier qu'il ya bien l'indication sur le traitement a faire
		
        if ((isset($_POST['traitement']) || isset($_GET['traitement'])) AND ( !empty($_POST['traitement']) OR !empty($_GET['traitement'])) ) { 

         
			include("../connectionbd.php");
			include("../mesfonctions.php");
			if(isset($_SESSION["compte"])){
			 $ladministrateur=getadministrateurInformations($_SESSION["compte"]);
			 $admin=$ladministrateur[0];
			 $droit_dacces=getDroitAccesAdministrateur($ladministrateur[0]);
			 $niveau_dacces=$droit_dacces["niveau_dacces"];
			 $circonscription=$droit_dacces["circonscription"];
			 $profil=$ladministrateur["fonction"];
			}
	
           
			if(isset($_POST['traitement']))$traitement=mysql_real_escape_string(trim($_POST['traitement']));
			else $traitement=mysql_real_escape_string(trim($_GET['traitement']));
			
            if($traitement=="identification") require_once("traitement_acceder_compte.php");
            elseif($traitement=="fermer-session") require_once("traitement_fermeture_session.php");
            elseif($traitement=="editer-region") require_once("traitement_enregistrement_region.php");
            elseif($traitement=="supprimer-region") require_once("traitement_supprimer_region.php");
            elseif($traitement=="valider-region") require_once("traitement_valider_region.php");
            elseif($traitement=="editer-ville") require_once("traitement_enregistrement_ville.php");
            elseif($traitement=="supprimer-ville") require_once("traitement_supprimer_ville.php");
            elseif($traitement=="supprimer-visite") require_once("traitement_supprimer_visite.php");
            elseif($traitement=="valider-ville") require_once("traitement_valider_ville.php");
            elseif($traitement=="editer-administrateur") require_once("traitement_enregistrement_administrateur.php");
            elseif($traitement=="supprimer-administrateur") require_once("traitement_supprimer_administrateur.php");
            elseif($traitement=="valider-administrateur") require_once("traitement_valider_administrateur.php");
            elseif($traitement=="editer-agence") require_once("traitement_enregistrement_agence.php");
            elseif($traitement=="supprimer-agence") require_once("traitement_supprimer_agence.php");
            elseif($traitement=="valider-agence") require_once("traitement_valider_agence.php");
            elseif($traitement=="select-ville-agence") require_once("traitement_select_ville_agence.php");
            elseif($traitement=="select_cirsconscription_utilisateur") require_once("traitement_cirsconscription_utilisateur.php");
            elseif($traitement=="select-onglet") require_once("traitement_select_onglet.php");
            elseif($traitement=="ajouter-droit-adminitrateur") require_once("traitement_enregistrement_droit_utilisateur.php");
			elseif($traitement=="valider-code-authentification-a-deux-facteurs") require_once("traitement_validation_sms_code_authentification_a_deux_facteurs.php");
			elseif($traitement=="renvoyer-code-authentification-a-deux-facteurs") require_once("traitement_renvoyer_SMS_code_authentification_a_deux_facteurs.php");
			elseif($traitement=="editer-suivi") require_once("traitement_enregistrement_suivi_demande.php");
			elseif($traitement=="cloturer-dossier") require_once("traitement_enregistrement_cloture_dossier.php");
			elseif($traitement=="affecter-dossier") require_once("traitement_enregistrement_affectation_dossier.php");
			elseif($traitement=="rechercher-dossiers") require_once("traitement_recherche_dossier.php");
			elseif($traitement=="rechercher-importation") require_once("traitement_recherche_importation.php");
			elseif($traitement=="update-pwd") require_once("traitement_modifier_pwd.php");
			elseif($traitement=="valider-code-modification-pwd") require_once("traitement_validation_sms_code_modif_pwd.php");
			elseif($traitement=="update-telephone") require_once("traitement_modifier_telephone.php");
			elseif($traitement=="valider-code-modification-telephone") require_once("traitement_validation_sms_code_modif_telephone.php");
			elseif($traitement=="editer-importation") require_once("traitement_apercu_importation.php");
			elseif($traitement=="enregistrer-importation") require_once("traitement_enregistrement_importation.php");
			elseif($traitement=="supprimer-importation") require_once("traitement_supprimer_importation.php");
			elseif($traitement=="valider-importation") require_once("traitement_valider_importation.php");
			elseif($traitement=="rechercher-ville") require_once("traitement_recherche_ville.php");
			elseif($traitement=="rechercher-agence") require_once("traitement_recherche_agence.php");
			elseif($traitement=="rechercher-administrateur") require_once("traitement_recherche_administrateur.php");
			elseif($traitement=="rechercher-visite") require_once("traitement_recherche_visite.php");
			elseif($traitement=="deverouiller-dossier") require_once("traitement_enregistrement_deverouillage_dossier.php");
			
			
		}else{
			 $error=" Tentative d'accès non autorisée ";
			 $response["erreur"] = "oui";
			 $response["session"] = "0";
			 $response["message"] = "$error";
		}
	}else{
		$error=" Votre jeton de session semble invalide ";
		 $response["erreur"] = "oui";
		 $response["session"] = "0";
		 $response["message"] = "$error";
	}
	
}else{
	$error=" Votre jeton de session semble invalide 2365 ";
	 $response["erreur"] = "oui";
	 $response["session"] = "0";
	 $response["message"] = "$error";
}

echo json_encode($response);
?>