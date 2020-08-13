<?php 
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$iddemandeur=mysql_real_escape_string  ($_POST["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);


$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");
$gestionnaire=mysql_real_escape_string  (strip_tags(trim($_POST["gestionnaire"])));

$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		

$response["oldclass"] = GetClassEtatDossier($demandeur[0]);
$prenom=$demandeur["prenom"];

if($trouve==false){ 
	
	
		 $query="UPDATE demandeur SET  date_affectation='$date_creation', heure_affectation='$heure_creation', affecte_par='$admin', gestionnaire='$gestionnaire' WHERE iddemandeur='$demandeur[0]' ";

		 mysql_query($query) OR die(mysql_error());
	
	     if($demandeur["gestionnaire"]==0){
			 $contenu="<strong>$prenom</strong>, votre dossier a été transmis à votre gestionnaire pour étude. Nous vous contacterons bientôt.";
			 $query="INSERT INTO suivi_dossier VALUES ('0','$demandeur[0]','0','$contenu','admin','0','0','".date("Y/m/d")."','$heure_creation','','','0','0') ";
			 mysql_query($query) OR die(mysql_error());
			 $sms="$prenom, votre dossier de demande de crédit scolaire a été transmis à votre gestionnaire pour étude. Nous vous contacterons bientôt";
			 $destination="237".$demandeur["telephone"];
			 //EnvoyerSMS($destination,$sms); 
			 
			 UpdateEtatDossier($demandeur[0]);
			 
		 }
	
		 $legestionnaire=getadministrateurInformations($gestionnaire);
	
		 $agence=getagenceinformations($demandeur["agence"]);
		 $ville=getvilleInformations($demandeur["ville"]);
		 if($demandeur["statut_professionnel"]=="Employe_secteur_prive") $statut_professionnel="Employ&eacute; du secteur priv&eacute;";
		 else $statut_professionnel="Fonctionnaire/Agent_public";
 
	     if($demandeur["gestionnaire"]!=$gestionnaire){
			 ob_start();
			 include("tableau_admin_affectation_demande.php");
			 $tableau_mail_admin = ob_get_clean();
			 ob_end_clean();
             
			 //mail_simple("merleauponti@gmail.com", "NOTIFICATION D'AFFECTATION DE DOSSIER" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>");   
			 mail_simple($legestionnaire["email"], "NOTIFICATION D'AFFECTATION  DE DOSSIER" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>");   
		 }
	

		 ob_start();
		 include("tableau-ligne-dossier.php");
		 $ligne_dossier = ob_get_clean();
		 ob_end_clean();
	
	
		 $response["erreur"] = "non";
		 $response["session"] = "1";
		 $response["ligne"]="$ligne_dossier";
		 $response["message"]="Le dossier de <strong>".$demandeur["nom"]." ".$demandeur["prenom"]."</strong> a &eacute;t&eacute; affect&eacute; &agrave; <strong>".$legestionnaire["nom"]." ".$legestionnaire["prenom"]."</strong>. <br>Dossier transf&eacute;r&eacute; &agrave; l'onglet en cours de traitement.";
	
		$page="Suivi des demandes &raquo; Affecter un dossier ";
		$operation="Ecriture";
		$requete=mysql_real_escape_string  ($query_suivi);
		$libelle=mysql_real_escape_string  ("Affectation du dossier du client <strong>".$demandeur["nom"]." ".$demandeur["prenom"]."</strong> &agrave; ".$legestionnaire["nom"]." ".$legestionnaire["prenom"]);
		$type="Admin";
		$compte=mysql_real_escape_string  ($ladministrateur["nom"]." ".$ladministrateur["prenom"]);
		$idcompte=$ladministrateur[0];
		Enregistrer_visite($compte, $idcompte,$page,$operation,$requete, $libelle, $type);

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$error";
}
		  

 ?>