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
	 $nbdeverouillage=mysql_num_rows(mysql_query("SELECT * FROM deverouillage WHERE iddemandeur='$demandeur[0]'"));
	
	 mysql_query("DELETE FROM deverouillage WHERE iddemandeur='$demandeur[0]' ");
	
	unset($_POST["token"]); 
	unset($_POST["traitement"]); 
	unset($_POST["iddemandeur"]); 
	
	 if(count($_POST)>0){
		 $exception=array("token", "iddemandeur", "traitement");
		 foreach($_POST as $clef => $valeur){
				 $query="INSERT INTO  deverouillage  VALUES ('0','$demandeur[0]','$clef','$admin','$date_creation','$heure_creation') ";
				 mysql_query($query) OR die(mysql_error());

		  }
	 }
 		 $agence=getagenceinformations($demandeur["agence"]);
		 $ville=getvilleInformations($demandeur["ville"]);
		 if($demandeur["statut_professionnel"]=="Employe_secteur_prive") $statut_professionnel="Employ&eacute; du secteur priv&eacute;";
		 else $statut_professionnel="Fonctionnaire/Agent_public";
	
	 $champs_deverouille=implode(", ", $_POST);

	 if(count($_POST)>0){
		 ob_start();
		 include("tableau_admin_deverouillage_demande.php");
		 $tableau_mail_admin = ob_get_clean();
		 ob_end_clean();

		 //mail_simple("merleauponti@gmail.com", "NOTIFICATION DE DEVEROUILLAGE De DOSSIER" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>");   
		 mail_simple($agence["email"], "NOTIFICATION DE DEVEROUILLAGE De DOSSIER" ,$tableau_mail_admin, "BICEC CRESCO<CRESCO@bicec.com>"); 
		 $response["message"]="Deverouillage effectu&eacute; avec succ&egrave;s. le client <strong>".$demandeur["nom"]." ".$demandeur["prenom"]."</strong> peut d&eacute;j&agrave; mettre &agrave; jour ses informations";
		 
	 }elseif($nbdeverouillage>0){
		 $response["message"]="Verouillage effectu&eacute; avec succ&egrave;s. Le client <strong>".$demandeur["nom"]." ".$demandeur["prenom"]."</strong> ne peut plus mettre &agrave; jour ses informations";
	 }else{
		  $response["message"]="Verouillage effectu&eacute; avec succ&egrave;s. Le client <strong>".$demandeur["nom"]." ".$demandeur["prenom"]."</strong> ne peut plus mettre &agrave; jour ses informations";
	 }
	
	
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["ligne"]="$ligne_dossier";
	 

	$page="Suivi des demandes &raquo; Deverouillage dossier ";
	$operation="Ecriture";
	$requete=mysql_real_escape_string  ($query);
	$libelle=mysql_real_escape_string  ($reponse["message"]);
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