<?php 

        
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idutilisateur=mysql_real_escape_string  ($_POST["idadministrateur"]);
$niveau_dacces=mysql_real_escape_string  ($_POST["niveau_dacces"]);
$circonscription=mysql_real_escape_string  ($_POST["circonscription"]);


if(isset($_POST["donne-de-base"]))$donnee_de_base=1; else $donnee_de_base=0;
if(isset($_POST["suivi-de-demande"]))$suivi_des_demandes=1; else $suivi_des_demandes=0;
if(isset($_POST["administrateur"]))$utilisateur=1; else $utilisateur=0;


if(isset($_POST["region"]))$region=1; else $region=0;
if(isset($_POST["ville"]))$ville=1; else $ville=0;
if(isset($_POST["agence"]))$agence=1; else $agence=0;
if(isset($_POST["importation"]))$importation=1; else $importation=0;

if(isset($_POST["gestion-administrateur"]))$gestion_utilisateur=1; else $gestion_utilisateur=0;
if(isset($_POST["historique-session"]))$historique_de_session=1; else $historique_de_session=0;
if(isset($_POST["gestion-ip-autorise"]))$gestion_ip=1; else $gestion_ip=0;


if(isset($_POST["acces-piece-jointe"]))$acces_piece_jointe=1; else $acces_piece_jointe=0;
if(isset($_POST["reponse-demande"]))$editer_reponse_demande=1; else $editer_reponse_demande=0;
if(isset($_POST["suivi-demande"]))$consulter_les_echanges=1; else $consulter_les_echanges=0;
if(isset($_POST["affecter-dossier"]))$affecter_dossier=1; else $affecter_dossier=0;

if(isset($_POST["mise-corbeille"]))$mettre_demande_corbeille=1; else $mettre_demande_corbeille=0;
if(isset($_POST["cloturer_demande"]))$cloturer_demande=1; else $cloturer_demande=0;

if(isset($_POST["acces_corbeille"]))$acces_corbeille=1; else $acces_corbeille=0;
if(isset($_POST["restaurer_demande_de_la_corbeille"]))$restaurer_demande_de_la_corbeille=1; else $restaurer_demande_de_la_corbeille=0;


if(isset($_POST["editer-ville"])){
	$editer_ville=1; 
	$donnee_de_base=1;
	$ville=1;
}else $editer_ville=0;


if(isset($_POST["valider-ville"])){
	$valider_ville=1; 
	$donnee_de_base=1;
	$ville=1;
}else $valider_ville=0;


if(isset($_POST["supprimer-ville"])){
	$supprimer_ville=1; 
	$donnee_de_base=1;
	$ville=1;
}else $supprimer_ville=0;

if(isset($_POST["editer-importation"])){
	$editer_importation=1; 
	$donnee_de_base=1;
	$importation=1;
}else $editer_importation=0;


if(isset($_POST["valider-importation"])){
	$valider_importation=1; 
	$donnee_de_base=1;
	$importation=1;
}else $valider_importation=0;


if(isset($_POST["supprimer-importation"])){
	$supprimer_importation=1; 
	$donnee_de_base=1;
	$importation=1;
}else $supprimer_importation=0;

if(isset($_POST["editer-region"])){
	$editer_region=1; 
	$donnee_de_base=1;
	$region=1;
}else $editer_region=0;


if(isset($_POST["valider-region"])){
	$valider_region=1; 
	$donnee_de_base=1;
	$region=1;
}else $valider_region=0;


if(isset($_POST["supprimer-region"])){
	$supprimer_region=1; 
	$donnee_de_base=1;
	$region=1;
}else $supprimer_region=0;




if(isset($_POST["editer-agence"])){
	$editer_agence=1; 
	$donnee_de_base=1;
	$agence=1;
}else $editer_agence=0;


if(isset($_POST["valider-agence"])){
	$valider_agence=1; 
	$donnee_de_base=1;
	$agence=1;
}else $valider_agence=0;


if(isset($_POST["supprimer-agence"])){
	$supprimer_agence=1; 
	$donnee_de_base=1;
	$agence=1;
}else $supprimer_agence=0;


if(isset($_POST["editer-administrateur"])){
	$editer_administrateur=1; 
	$utilisateur=1;
	$gestion_utilisateur=1;
}else $editer_administrateur=0;


if(isset($_POST["suspendre-administrateur"])){
	$valider_administrateur=1; 
	$utilisateur=1;
	$gestion_utilisateur=1;
}else $valider_administrateur=0;


if(isset($_POST["supprimer-administrateur"])){
	$supprime_administrateur=1; 
	$utilisateur=1;
	$gestion_utilisateur=1;
}else $supprime_administrateur=0;



if(isset($_POST["editer-ip-autorise"])){
	$editer_ip=1; 
	$utilisateur=1;
	$gestion_ip=1;
}else $editer_ip=0;


if(isset($_POST["valider-ip-autorise"])){
	$valider_ip=1; 
	$utilisateur=1;
	$gestion_ip=1;
}else $valider_ip=0;


if(isset($_POST["supprimer-ip-autorise"])){
	$supprime_ip=1; 
	$utilisateur=1;
	$gestion_ip=1;
}else $supprime_ip=0;

if(isset($_POST["supprimer-session"])){
	$supprimer_visite=1; 
	$utilisateur=1;
	$historique_de_session=1;
}else $supprimer_visite=0;



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
	
		 $droit=getDroitAccesAdministrateur($idutilisateur);
	     if($droit!=false){
			 mysql_query("DELETE FROM droit_dacces WHERE idadministrateur='$idutilisateur'");
		 }
	
		 $query="INSERT INTO droit_dacces VALUES ('0','$idutilisateur','$donnee_de_base','$region','$editer_region','$valider_region','$supprimer_region','$ville','$editer_ville','$valider_ville','$supprimer_ville','$agence','$editer_agence','$valider_agence','$supprimer_agence','$importation','$editer_importation','$valider_importation','$supprimer_importation','$suivi_des_demandes','$niveau_dacces','$circonscription','$affecter_dossier','$acces_piece_jointe','$editer_reponse_demande','$consulter_les_echanges','$cloturer_demande','$mettre_demande_corbeille','$acces_corbeille','$restaurer_demande_de_la_corbeille','$utilisateur','$gestion_utilisateur','$editer_administrateur','$valider_administrateur','$supprime_administrateur','$historique_de_session','$supprimer_visite','$gestion_ip','$editer_ip','$valider_ip','$supprime_ip','$admin','0','$date_creation','$heure_creation','','') ";

		 mysql_query($query) OR die(mysql_error());

		$response["erreur"] = "non";
		$response["session"] = "1";

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$error";
}
		  

 ?>