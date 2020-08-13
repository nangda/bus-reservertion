<?php 
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$iddemandeur=mysql_real_escape_string  ($_POST["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);

$decision=mysql_real_escape_string  (strip_tags(trim($_POST["etat-credit"])));
$montant_accorde=mysql_real_escape_string  (strip_tags(trim($_POST["montant-accorde"])));
$duree_accorde=mysql_real_escape_string  (strip_tags(trim($_POST["duree"])));

if($decision=="refuse"){
	$montant_accorde=0;
	$duree_accorde=0;
}else{
	$montant_accorde=mysql_real_escape_string  (strip_tags(trim($_POST["montant-accorde"])));
	$duree_accorde=mysql_real_escape_string  (strip_tags(trim($_POST["duree"])));
}
$commentaire=mysql_real_escape_string  (strip_tags(trim($_POST["commentaire-traitement"])));


$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		

$response["oldclass"] = GetClassEtatDossier($demandeur[0]);
$prenom=$demandeur["prenom"];

if($trouve==false){ 
	
	
		 $query="UPDATE demandeur SET cloture='1', etat='$decision', date_cloture='$date_creation', heure_cloture='$heure_creation', cloture_par='$admin', montant_accorde='$montant_accorde', duree_accorde='$duree_accorde', commentaire_cloture='$commentaire' WHERE iddemandeur='$demandeur[0]' ";

		 mysql_query($query) OR die(mysql_error());
	     $demandeur=getdemandeurInformations($iddemandeur);
	     $agence=getagenceinformations($demandeur["agence"]);
	     $ville=getvilleInformations($demandeur["ville"]);
		 if($demandeur["statut_professionnel"]=="Employe_secteur_prive") $statut_professionnel="Employ&eacute; du secteur priv&eacute;";
		 else $statut_professionnel="Fonctionnaire/Agent_public";
	
	     if($decision=="valide"){
			 $contenu="<strong>$prenom</strong>, un crédit scolaire BICEC d\'un montant de ".number_format($demandeur["montant_accorde"], 0, ',', ' ')." Fcfa et d\'une durée de ".$demandeur["duree_accorde"]." mois vous a été accordé. Nous vous contacterons bientôt";
			 
			 $sms="$prenom, un crédit scolaire BICEC d'un montant de ".number_format($demandeur["montant_accorde"], 0, ',', ' ')." Fcfa et d'une durée de ".$demandeur["duree_accorde"]." mois vous a été accordé. Nous vous contacterons bientôt.";
			 
		 }else{
			 $contenu="<strong>$prenom</strong>, Votre demande de crédit scolaire BICEC d\'un montant de ".number_format($demandeur["montant_souhaite"], 0, ',', ' ')." Fcfa pour une durée de ".$demandeur["duree_credit"]." mois n\'a pas recu un avis favorable.<br>";
			 $contenu.="<strong>$motif : </strong> $commentaire.";
			 
			 $sms="$prenom, Votre demande de crédit scolaire BICEC d'un montant de ".number_format($demandeur["montant_souhaite"], 0, ',', ' ')." Fcfa pour une durée de ".$demandeur["duree_credit"]." mois n'a pas recu un avis favorable. Nous vous contacterons bientôt.";
		 }

		 $query="INSERT INTO suivi_dossier VALUES ('0','$demandeur[0]','0','$contenu','admin','0','0','".date("Y/m/d")."','$heure_creation','','','0','0') ";
		 mysql_query($query) OR die(mysql_error());

		 $destination="237".$demandeur["telephone"];

		 EnvoyerSMS($destination,$sms); 

		 ob_start();
		 include("tableau_admin_cloture_demande.php");
		 $tableau_mail_admin = ob_get_clean();
		 ob_end_clean();

		 //mail_simple("merleauponti@gmail.com", "NOTIFICATION DE CLOTURE  DE DOSSIER" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>");   
		 mail_simple($agence["email"], "NOTIFICATION DE CLOTURE  DE DOSSIER" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>");   
	
		 $response["erreur"] = "non";
		 $response["session"] = "1";
		 $response["ligne"]="$ligne_dossier";
	
		$page="Suivi des demandes &raquo; cl&ocirc;turer un dossier ";
		$operation="Ecriture";
		$requete=mysql_real_escape_string  ($query);
		$libelle=mysql_real_escape_string  ("Cl&ocirc;ture du dossier du client <strong>".$demandeur["nom"]." ".$demandeur["prenom"]."</strong> par ".$ladministrateur["nom"]." ".$ladministrateur["prenom"]);
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