<?php 

        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$onglet=mysql_real_escape_string  ($_POST["element"]);
$module=mysql_real_escape_string  ($_GET["module"]);



$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");



if($trouve==false){ 
     
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $_SESSION["".$module.""]=$onglet;
	 $response["lasession"] = $_SESSION["".$module.""];
	 $response["module"] = $module;
	 $compte=$ladministrateur["nom"]." ".$ladministrateur["prenom"];
	 $idcompte=$ladministrateur[0];
	 if($onglet=="tab-region"){
		$page="Donn&eacute;es de base &raquo; Edition des r&eacute;gions";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet d\'edition des r&eacute;gions";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-ville"){
		$page="Donn&eacute;es de base &raquo; Edition des villes";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet  d\'edition des villes";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-agence"){
		$page="Donn&eacute;es de base &raquo; Edition des agences";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet  d\'edition des agences";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 } elseif($onglet=="tab-importation"){
		$page="Donn&eacute;es de base &raquo; Importation des donn&eacute;es";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet  d\'importation des donn&eacute;es";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-administrateur"){
		$page="Utilisateurs &raquo; Gestion des administrateurs";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet  Gestion des administrateurs";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-visite"){
		$page="Utilisateurs &raquo; Historique des connexions";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet  Historique des connexions";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-dossier"){
		$page="Suivi des demandes &raquo; Toutes les demandes";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet de consultation de tous les dossiers";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-dossier-attente"){
		$page="Suivi des demandes &raquo; Dossiers en attente";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet des dossiers en attente";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-dossier-encours"){
		$page="Suivi des demandes &raquo; Dossiers en cours de traitement";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet des dossiers en cours de traitement";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-dossier-incomplet"){
		$page="Suivi des demandes &raquo; Dossiers incomplets";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet des dossiers incomplets";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-dossier-valide"){
		$page="Suivi des demandes &raquo; Dossiers valid&eacute;s";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet des dossiers valid&eacute;s";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }elseif($onglet=="tab-dossier-rejete"){
		$page="Suivi des demandes &raquo; dossiers rejet&eacute;s";
		$operation="Lecture";
		$requete="";
		$libelle="Acc&egrave;s à l\'onglet des dossiers rejet&eacute;s";
		$type="Admin";
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);
	 }
	 
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
}

?>
	