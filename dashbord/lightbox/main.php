<?php 
session_start();

if (isset($_SESSION['compte']) OR isset($_SESSION["token"])) {
	
		
        if ((isset($_POST['traitement']) || isset($_GET['traitement'])) AND ( !empty($_POST['traitement']) OR !empty($_GET['traitement'])) ) { 

			include("../connectionbd.php");
            
			if(isset($_POST['traitement']))$traitement=mysql_real_escape_string(trim($_POST['traitement']));
			else $traitement=mysql_real_escape_string(trim($_GET['traitement']));
			
            if($traitement=="editer-region") require_once("lightbox-ajouter-region.php");
            elseif($traitement=="detail-region") require_once("lightbox-detail-region.php");
            elseif($traitement=="editer-ville") require_once("lightbox-ajouter-ville.php");
            elseif($traitement=="editer-company") require_once("lightbox-ajouter-company.php");
            elseif($traitement=="editer-bus") require_once("lightbox-ajouter-bus.php");
            elseif($traitement=="detail-ville") require_once("lightbox-detail-ville.php");
            elseif($traitement=="detail-importation") require_once("lightbox-detail-importation.php");
            elseif($traitement=="editer-agence") require_once("lightbox-ajouter-agence.php");
            elseif($traitement=="detail-agence") require_once("lightbox-detail-agence.php");
            elseif($traitement=="editer-administrateur") require_once("lightbox-ajouter-administrateur.php");
            elseif($traitement=="detail-administrateur") require_once("lightbox-detail-administrateur.php");
            elseif($traitement=="droit-administrateur") require_once("lightbox-gestion-droit-utilisateur.php");
			elseif($traitement=="authentification_a_deux_facteurs") require_once("lightbox-valider-acces-espace-admin.php");
			elseif($traitement=="suivi-dossier") require_once("lightbox-suivi-dossier.php");
			elseif($traitement=="piece-justificative") require_once("lightbox-pieces-justificatives.php");
			elseif($traitement=="detail-demande") require_once("lightbox-detail-demande.php");
			elseif($traitement=="cloture-dossier") require_once("lightbox-cloture-dossier.php");
			elseif($traitement=="modification-pwd") require_once("lightbox-valider-modification-pwd.php");
			elseif($traitement=="modification-telephone") require_once("lightbox-valider-modification-telephone.php");
			elseif($traitement=="editer-importation") require_once("lightbox-ajouter-importation.php");
			elseif($traitement=="affectation-dossier") require_once("lightbox-affectation-demande.php");
			elseif($traitement=="deverouiller-dossier") require_once("lightbox-deverouillage-saisi.php");
			
		}else{
			 require_once("lightbox-notification-expiration-session.php");
		}
	
	
}else{
	require_once("lightbox-notification-expiration-session.php");
}

if(isset($response))echo json_encode($response);
?>