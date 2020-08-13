<?php

function GetDeverouillageInformations($iddemandeur){
	return mysql_fetch_array(mysql_query("SELECT * FROM deverouillage  WHERE iddemandeur='$iddemandeur'  "));
}

function GetDeverouillageInformationsByIndicateur($iddemandeur, $indicateur){
	return mysql_fetch_array(mysql_query("SELECT * FROM deverouillage  WHERE iddemandeur='$iddemandeur' AND champs='$indicateur'  "));
}


function MarquerMsgCommeLu($idsuivi, $indicateur){
	return mysql_query("UPDATE suivi_dossier  SET $indicateur='1' WHERE idsuivi='$idsuivi'  ");
}

function GetNbMsgNonLusDemandeur($iddemandeur){
	return mysql_num_rows(mysql_query("SELECT * FROM suivi_dossier  WHERE iddemandeur='$iddemandeur' AND lecture_demandeur='0' "));
}

function LeDossierDemandeurAToutesLesInfosPersonelles($iddemandeur){
	// permet de savoir si le demandeur a renseigner touotes ses infos personnelles. 
	$LeDossierDemandeurAToutesLesInfosPersonelles=1;
	$demandeur=getdemandeurInformations($iddemandeur);
	
	if( $demandeur["numero_compte"]=="" OR $demandeur["nom_personne_a_contacter"]=="" OR $demandeur["prenom_personne_a_contacter"]=="" OR $demandeur["telephone1_personne_a_contacter"]=="" OR $demandeur["photo"]=="") $LeDossierDemandeurAToutesLesInfosPersonelles=0;
	
	
	return $LeDossierDemandeurAToutesLesInfosPersonelles;
	
}
function LeDossierDemandeurAToutesLesJustfis($iddemandeur){
	// permet de savoir si le demandeur peut soumettre son dossier. 
	$DossierDemandeurAToutesLesJustfis=1;
	$demandeur=getdemandeurInformations($iddemandeur);
	if( ($demandeur["statut_professionnel"]=="Employe_secteur_prive") AND ($demandeur["avis"]=="" OR $demandeur["bulletin_de_paie1"]=="" OR $demandeur["bulletin_de_paie2"]=="" OR $demandeur["bulletin_de_paie3"]=="" OR $demandeur["cni_recto"]=="" OR $demandeur["cni_verso"]=="" OR $demandeur["facture"]==""))$DossierDemandeurAToutesLesJustfis=0;
	
	else if( ($demandeur["statut_professionnel"]=="Fonctionnaire/Agent_public") AND ($demandeur["avis"]=="" OR $demandeur["bulletin_de_paie1"]==""  OR $demandeur["cni_recto"]=="" OR $demandeur["cni_verso"]=="" OR $demandeur["facture"]==""))$DossierDemandeurAToutesLesJustfis=0;
	
	return $DossierDemandeurAToutesLesJustfis;
	
}

function LeDossierEstDeverouiller($iddemandeur, $section){
	// permet de savoir si le demandeur peut modifier son dossier au cas ou il est deverouille. 
	$LeDossierEstDeverouiller=0;
	$demandeur=getdemandeurInformations($iddemandeur);

	if($section=="mes-informations"){
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'nom'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'prenom'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'date_naissance'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'lieu_naissance'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'adresse'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'numero_compte'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'cle'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'agence'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'profession'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'statut_professionnel'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'employeur'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'date_embauche'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'nom_personne_a_contacter'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'prenom_personne_a_contacter'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'telephone1_personne_a_contacter'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'telephone2_personne_a_contacter'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'photo'))$LeDossierEstDeverouiller=1;

	}elseif($section=="pieces-justificatives"){
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'avis'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie1'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie2'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie3'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'cni_recto'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'cni_verso'))$LeDossierEstDeverouiller=1;
       if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'facture'))$LeDossierEstDeverouiller=1;
	}
	
	return $LeDossierEstDeverouiller;
	
}

function LeDossierDemandeurNaAucuneJustif($iddemandeur){
	// permet de savoir si le demandeur peut soumettre son dossier. 
	$LeDossierDemandeurNaAucuneJustif=1;
	$demandeur=getdemandeurInformations($iddemandeur);
	if( $demandeur["avis"]=="" AND $demandeur["bulletin_de_paie1"]=="" AND $demandeur["bulletin_de_paie2"]=="" AND $demandeur["bulletin_de_paie3"]=="" AND $demandeur["cni_recto"]=="" AND $demandeur["cni_verso"]=="" AND $demandeur["facture"]=="")$LeDossierDemandeurNaAucuneJustif=0;
	
	
	return $LeDossierDemandeurNaAucuneJustif;
	
}

function LeDossierDemandeurEstIlPretPourSoumission($iddemandeur){
	// permet de savoir si le demandeur peut soumettre son dossier. 
	$ledossierEstPret=1;
	$demandeur=getdemandeurInformations($iddemandeur);
	if($demandeur["montant_souhaite"]==0 OR $demandeur["duree_credit"]==0)$ledossierEstPret=0;
	elseif(LeDossierDemandeurAToutesLesJustfis($iddemandeur)==0)$ledossierEstPret=0;
	elseif(LeDossierDemandeurAToutesLesInfosPersonelles($iddemandeur)==0)$ledossierEstPret=0;
	
	return $ledossierEstPret;
	
}

function LeDossierDemandeurEstIlComplet($iddemandeur){
	$ledossierEstComplet=1;
	$demandeur=getdemandeurInformations($iddemandeur);
	if(LeDossierDemandeurAToutesLesInfosPersonelles($iddemandeur)==0)$ledossierEstComplet=0;
	elseif(LeDossierDemandeurAToutesLesJustfis($iddemandeur)==0)$ledossierEstComplet=0;
	elseif($demandeur["signature"]=="")$ledossierEstComplet=0;
	elseif($demandeur["montant_souhaite"]==0 OR $demandeur["duree_credit"]==0)$ledossierEstComplet=0;
	
	return $ledossierEstComplet;
	
}

function UpdateEtatDossier($iddemandeur){
	$ledossierEstComplet=LeDossierDemandeurEstIlComplet($iddemandeur);
	$demandeur=getdemandeurInformations($iddemandeur);
	if($demandeur["cloture"]==0){
		if($ledossierEstComplet==0)$etat="Incomplet";
		else{
          //if(mysql_num_rows(mysql_query("SELECT * FROM suivi_dossier WHERE iddemandeur ='$iddemandeur' AND emetteur='admin' "))>0)$etat="En_cours";
		  if($demandeur["gestionnaire"]!=0)$etat="En_cours";
		  else $etat="En_attente";
		}
	}else $etat=$demandeur["etat"];
	
	mysql_query("UPDATE demandeur SET etat='$etat' WHERE iddemandeur='$iddemandeur' ");
	
	return $etat;
	
}


function GetLibelleEtatDossier($iddemandeur){
	
	$demandeur=getdemandeurInformations($iddemandeur);
	$etat=$demandeur["etat"];
	
	if($demandeur["cloture"]=="0"){
		if($etat=="Incomplet")$libelle_etat="<strong>Dossier incomplet</strong>";
		elseif($etat=="En_attente")$libelle_etat="<strong>Dossier complet</strong>, en attente de traitement";
		elseif($etat=="En_cours")$libelle_etat="<strong>Dossier en cours de traitement</strong>";
		
	}else{
		if($etat=="valide")$libelle_etat="<strong>Dossier cl&ocirc;tur&eacute;</strong>, Cr&eacute;dit accord&eacute; ";
		elseif($etat="refuse")$libelle_etat="<strong>Dossier cl&ocirc;tur&eacute;</strong>, Pr&ecirc;t non accord&eacute;";
	} 
	
	
	return $libelle_etat;
	
} 

function GetCouleurEtatDossier($iddemandeur){
	
	$demandeur=getdemandeurInformations($iddemandeur);
	$etat=$demandeur["etat"];
	
	if($demandeur["cloture"]=="0"){
		if($etat=="Incomplet")$couleur_etat="#491d05 !important";
		elseif($etat=="En_attente")$couleur_etat="#fbff00 !important";
		elseif($etat=="En_cours")$couleur_etat="#e37b03 !important";
		
	}else{
		if($etat=="valide")$couleur_etat="#fbff00 !important";
		elseif($etat="refuse")$couleur_etat="red !important";
	} 
	
	
	return $couleur_etat;
	
}


function GetClassEtatDossier($iddemandeur){
	
	$demandeur=getdemandeurInformations($iddemandeur);
	$etat=$demandeur["etat"];
	
	if($demandeur["cloture"]=="0"){
		if($etat=="Incomplet")$class_etat="incomplet";
		elseif($etat=="En_attente")$class_etat="";
		elseif($etat=="En_cours")$class_etat="encours";
		
	}else{
		if($etat=="valide")$class_etat="accepte";
		elseif($etat="refuse")$class_etat="rejete";
	} 
	
	
	return $class_etat;
	
}


function GetInfosClotureDossier($iddemandeur){
	$ladministrateur=getAdministrateurInformations($_SESSION["compte"]);
	$demandeur=getdemandeurInformations($iddemandeur);
	$etat=$demandeur["etat"];
	$infoBulle="Cl&ocirc;turer le dossier de  ".$demandeur["nom"]." ".$demandeur["prenom"]." ";
	
	
	if($demandeur["gestionnaire"]==$ladministrateur[0] OR $ladministrateur["fonction"]=="Administrateur"){
		$url_cloturer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=cloture-dossier")."','loader');";
	}else{
		$url_cloturer="javascript:AfficherNotification('INFORMATION','loader','<strong>".$ladministrateur["prenom"]."</strong>, Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur.','OK','','','','1');";
	}
		
	
	
	$cloture['url'] = $url_cloturer;
	$cloture['infobulle'] = $infoBulle;	
	
	return $cloture;
	
}

function GetInfosAffectationDossier($iddemandeur){
	
	$demandeur=getdemandeurInformations($iddemandeur);
    $ladministrateur=getAdministrateurInformations($_SESSION["compte"]);
	$droit_dacces=getDroitAccesAdministrateur($ladministrateur[0]);
	$etat=$demandeur["etat"];
	$infoBulle="Affecter le dossier de  ".$demandeur["nom"]." ".$demandeur["prenom"]." &agrave; un gestionnaire";
	
	if($demandeur["gestionnaire"]=="0"){
		if($etat=="Incomplet"){
			$infoBulle="Dossier incomplet, aucune affectation possible &agrave; un gestionnaire ";
			$class_affectation="gris";
		}else{
			$class_affectation="";
		}
		
	}else{
		$class_affectation="vert";
		$gestionnnaire=getAdministrateurInformations($demandeur["gestionnaire"]);
		$infoBulle="Dossier affect&eacute; au gestionnaire : ".$gestionnnaire["nom"]." ".$gestionnnaire["prenom"];
	} 
	if($droit_dacces["affecter_dossier"]==1){
		$url_affecter="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=affectation-dossier")."','loader');";
	}else{
		$url_affecter="javascript:AfficherNotification('INFORMATION','loader','<strong>".$ladministrateur["prenom"]."</strong>, Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur.','OK','','','','1');";
	}
		
	
	$affectation['class'] = $class_affectation;
	$affectation['url'] = $url_affecter;
	$affectation['infobulle'] = $infoBulle;	
	
	return $affectation;
	
}

function GetNombreDossierParIndicateur($indicateur, $niveau_dacces, $circonscription, $profil){
	
	$ladministrateur=getAdministrateurInformations($_SESSION["compte"]);
	
	if($indicateur=="All")$query="SELECT * FROM demandeur WHERE corbeille!='1' ";
	else $query="SELECT * FROM demandeur WHERE corbeille!='1' AND etat='$indicateur' ";
	
	if($niveau_dacces=="zone")$query.=" AND zone_agence='$circonscription'";
	elseif($niveau_dacces=="region")$query.=" AND region_agence='$circonscription'";
	elseif($niveau_dacces=="ville")$query.=" AND ville_agence='$circonscription'";
	elseif($niveau_dacces=="agence")$query.=" AND agence='$circonscription'";
	
	if($profil=="Gestionnaire") $query.=" AND gestionnaire='$ladministrateur[0]'";
	
    $nbdossier=mysql_num_rows(mysql_query($query));
	return $nbdossier;
}


function GetNombreDossierParJourParAgence($jour,$idagence, $niveau_dacces, $circonscription){
	
	 $query="SELECT * FROM demandeur WHERE corbeille!='1' AND date_creation='".$jour."' AND agence='$idagence' ";
	
	if($niveau_dacces=="zone")$query.=" AND zone_agence='$circonscription'";
	elseif($niveau_dacces=="region")$query.=" AND region_agence='$circonscription'";
	elseif($niveau_dacces=="ville")$query.=" AND ville_agence='$circonscription'";
	elseif($niveau_dacces=="agence")$query.=" AND agence='$circonscription'";
	
	
    $nbdossier=mysql_num_rows(mysql_query($query));
	return $nbdossier;
}

function GetNombreDossierParPeriodeParAgence($debut, $fin,$idagence, $niveau_dacces, $circonscription){
	
	 $query="SELECT * FROM demandeur WHERE corbeille!='1' AND date_creation BETWEEN '".$debut."' AND '".$fin."'   AND agence='$idagence' ";
	
	if($niveau_dacces=="zone")$query.=" AND zone_agence='$circonscription'";
	elseif($niveau_dacces=="region")$query.=" AND region_agence='$circonscription'";
	elseif($niveau_dacces=="ville")$query.=" AND ville_agence='$circonscription'";
	elseif($niveau_dacces=="agence")$query.=" AND agence='$circonscription'";
	
	
    $nbdossier=mysql_num_rows(mysql_query($query));
	return $nbdossier;
}


function formatdequatrechiffre($nombre){
	if(strlen(intval($nombre))=="1")$chaine="000".$nombre;
	elseif(strlen(intval($nombre))=="2")$chaine="00".$nombre;
	elseif(strlen(intval($nombre))=="3")$chaine="0".$nombre;
	elseif(strlen(intval($nombre))=="4")$chaine=$nombre;
	return $chaine;
}
function DepartementDejaoperationnel($iddepartement){
	if(mysql_num_rows(mysql_query("SELECT * FROM commune WHERE iddepartement='$iddepartement'  "))>0) return "1";
	else return "0";
}



function ProvinceDejaoperationnel($idprovince){
	if(mysql_num_rows(mysql_query("SELECT * FROM commune WHERE idprovince='$idprovince'  "))>0) return "1";
	else return "0";
}


function RegionDejaoperationnel($idregion){
	if(mysql_num_rows(mysql_query("SELECT * FROM ville WHERE idregion='$idregion'  "))>0) return "1";
	else return "0";
}


function AgenceDejaoperationnel($agence){
	return "1";
}

function VilleDejaoperationnel($ville){
	if(mysql_num_rows(mysql_query("SELECT * FROM agence WHERE idville='$ville'  "))>0) return "1";
	else return "0";
}

function QuartierDejaoperationnel($quartier){
	if(mysql_num_rows(mysql_query("SELECT * FROM membre WHERE quartier='$quartier'  "))>0) return "1";
	else return "0";
}


function CommuneDejaoperationnel($idcommune){
	if(mysql_num_rows(mysql_query("SELECT * FROM quartier WHERE idcommune='$idcommune'  "))>0) return "1";
	else return "0";
}


function GetNombreArtiste(){
	$result_artiste=mysql_query("SELECT  * FROM artiste ");
	return mysql_num_rows($result_artiste);
}
function GetNombreAlbum(){
	$result_album=mysql_query("SELECT  * FROM album ");
	return mysql_num_rows($result_album);
}
function GetNombreTitre(){
	$result_titre=mysql_query("SELECT  * FROM titre ");
	return mysql_num_rows($result_titre);
}



function GetNombreMembreParSexe($sexe){
	$result_membre=mysql_query("SELECT  * FROM membre WHERE sexe='$sexe' ");
	return mysql_num_rows($result_membre);
}


function GetNombreMembreParPays($pays){
	if($pays!="autre")$result_membre=mysql_query("SELECT  * FROM membre WHERE pays='$pays' ");
	else $result_membre=mysql_query("SELECT  * FROM membre WHERE pays!='Gabon' ");
	return mysql_num_rows($result_membre);
}

function GetNombreTotalMembre(){
	$result_membre=mysql_query("SELECT  * FROM membre ");
	return mysql_num_rows($result_membre);
}

function GetNombreMembreParType($type_membre){
	$result_membre=mysql_query("SELECT  * FROM membre WHERE type_membre='$type_membre' ");
	return mysql_num_rows($result_membre);
}


function GetNombreDemandeAgence($agence){
	$query="SELECT * FROM client WHERE idagence='$agence'  ";
	//echo $query;
	$result=mysql_query($query);
	
	return mysql_num_rows($result);
}






function GetNombreDemandeAgenceIndicateur($indicateur, $agence){
	$query="SELECT * FROM client WHERE agence='$agence'  ";
	if($indicateur=="homme")$query.=" AND sexe='homme' ";
	elseif($indicateur=="femme")$query.=" AND sexe='femme' ";
	elseif($indicateur=="jeune")$query.=" AND age<='35' ";
	//echo $query;
	$result=mysql_query($query);
	
	return mysql_num_rows($result);
}




function dateDansLaSemaine($date)
{
	//Obtenir le num&egrave;ro de la semaine dans l'ann&egrave;e
	$numero_semaine = date('W', strtotime($date));
	
	//initialiser le 
    $jour_semaine = array();
	
	//Initialise l'objet date
    $datetime = new DateTime('00:00:00');
	
	// Configurer la date en iso
    $datetime->setISODate((int)$datetime->format('o'), $numero_semaine, 1);
	
	// Defini un interval 
    $interval = new DateInterval('P1D');
    $lasemaine = new DatePeriod($datetime, $interval, 6);

    foreach($lasemaine as $day){
        $jour_semaine[] = $day->format('Y/m/d');
    }
    return $jour_semaine;
}
function GetNomListeMembre($liste_membre){
	
	$tab=array();
	for($i=0; $i<count($liste_membre); $i++){
		$membre=getmembreinformations($liste_membre[$i]);
		$tab[]=$membre["nom"]." ".$membre["prenom"];
	}	
	
	return implode(", ", $tab);
}

function RemoveAllSpace($string){
	return preg_replace('/\s+/','',$string);
}
function roundUpToAny($n,$x=10) {
    return (ceil($n)%$x === 0) ? ceil($n) : round(($n+$x/2)/$x)*$x;
}


function getaccesInformations($idligne){
	return mysql_fetch_array(mysql_query("SELECT * FROM droit_acces WHERE idligne='$idligne'  "));
}


function getLibelleDroitAccesDossiers($idadministrateur){
 $droit_dacces=getDroitAccesAdministrateur($idadministrateur);
 $niveau_dacces=$droit_dacces["niveau_dacces"];
 $circonscription=$droit_dacces["circonscription"];
	$libelle="";
 if($droit_dacces!=false){
	 $libelle=($niveau_dacces);
	 if($niveau_dacces=="Toutes")$libelle="Tous les dossiers";
	 else if($niveau_dacces=="zone"){
		 $agence=getAgenceInformations($circonscription);
		 $libelle="Tous les dossiers de la zone  <strong>".$droit_dacces["circonscription"]."</strong>";
	 }else if($niveau_dacces=="agence"){
		 $agence=getAgenceInformations($circonscription);
		 $libelle="Tous les dossiers de l'agence <strong>".$agence["titre"]."</strong>";
	 }else if($niveau_dacces=="ville"){
		 $ville=getvilleInformations($circonscription);
		 $libelle="Tous les dossiers de la ville de <strong>".$ville["titre"]."</strong>";
	 }else if($niveau_dacces=="region"){
		 $region=getregionInformations($circonscription);
		 $libelle="Tous les dossiers de la <strong>".$region["titre"]."</strong>";
	 }
 }
	
	return $libelle;
	
}


function getdemandeurInformations($iddemandeur){
	return mysql_fetch_array(mysql_query("SELECT * FROM demandeur WHERE iddemandeur='$iddemandeur'  "));
}

function getdemandeurInformationsByPhone($phone){
	return mysql_fetch_array(mysql_query("SELECT * FROM demandeur WHERE telephone='$phone'  "));
}

function getImportationInformationsByNumeroCompte($compte){
	return mysql_fetch_array(mysql_query("SELECT * FROM importation_donnees WHERE numero_compte='$compte'  "));
}
function getImportationInformations($idimportation){
	return mysql_fetch_array(mysql_query("SELECT * FROM importation_donnees WHERE idimportation='$idimportation'  "));
}


function getDroitAccesAdministrateur($idadministrateur){
	return mysql_fetch_array(mysql_query("SELECT * FROM droit_dacces WHERE idadministrateur='$idadministrateur'  "));
}



function connaitre_operateur($numero){
	   $id_operateur="";
	   
	   if(preg_match('`^(242|)3[0-9]{7}$`', $numero) || preg_match('`^(243|)3[0-9]{7}$`', $numero)){
			 $id_operateur="CAMTEL";
	   }elseif(preg_match('`^67[0-9]{7}$`', $numero) || preg_match('`^65[0-4][0-9]{6}$`', $numero) || preg_match('`^68[0-1][0-9]{6}$`', $numero)){
			 $id_operateur="MTN";
	   }elseif(preg_match('`^69[0-9]{7}$`', $numero) || preg_match('`^65[5-9][0-9]{6}$`', $numero)){
			 $id_operateur="ORANGE";
	   }elseif(preg_match('`^66[0-9]{7}$`', $numero) || preg_match('`^64[5-9][0-9]{6}$`', $numero)){
			 $id_operateur="NEXTEL";
	   }else{
			return false;
	   }
	   
	   return $id_operateur;
}

function valideChaine($chaineNonValide)
{
  $chaineNonValide = preg_replace('`\s+`', '-', trim($chaineNonValide));
  $chaineValide=strtr($chaineNonValide,"¿¡¬√ƒ≈‡·‚„‰Â“”‘’÷ÿÚÛÙıˆ¯»È ÀËÈÍÎ«ÁÃÕŒœÏÌÓÔŸ⁄€‹˘˙˚¸ˇ—Ò","aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
  $chaineNonValide = str_replace("'", "_", $chaineNonValide);
  $chaineNonValide = preg_replace('`_+`', '-', trim($chaineNonValide));
  $chaineNonValide=preg_replace('/[\W\s\/]+/', '-', trim($chaineNonValide));
;
  return ($chaineValide);
}

function get_ip() {
	// IP si internet partag&eacute;
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derriËre un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}




  function Monjour($jour){
  $tab_jour=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");

  return $tab_jour[intval($jour)];
}

function getAdministrateurInformations($idadministrateur){
  return mysql_fetch_array(mysql_query("SELECT * FROM administrateur WHERE idadministrateur='$idadministrateur' OR email='$idadministrateur' "));
} 

 
 function getvisiteInformations($idvisite){

    return mysql_fetch_array(mysql_query("SELECT * FROM visite WHERE idvisite='$idvisite'  "));
 } 
function getvilleInformationsbyreference($reference){

    return mysql_fetch_array(mysql_query("SELECT * FROM ville WHERE reference='$reference'  "));
 }

 function getagenceInformationsbyreference($reference){

    return mysql_fetch_array(mysql_query("SELECT * FROM agence WHERE reference='$reference'  "));
 }


 function getprovinceInformationsbyreference($reference){

    return mysql_fetch_array(mysql_query("SELECT * FROM province WHERE reference='$reference'  "));
 }

 function getprovinceInformations($idprovince){

    return mysql_fetch_array(mysql_query("SELECT * FROM province WHERE idprovince='$idprovince'  "));
 }

function getRegionInformationsbyreference($reference){

    return mysql_fetch_array(mysql_query("SELECT * FROM region WHERE reference='$reference'  "));
 }

 function getRegionInformations($idregion){

    return mysql_fetch_array(mysql_query("SELECT * FROM region WHERE idregion='$idregion'  "));
 }

 function getdepartementInformationsbyreference($reference){

    return mysql_fetch_array(mysql_query("SELECT * FROM departement WHERE reference='$reference'  "));
 }
 function getdepartementInformations($iddepartement){

    return mysql_fetch_array(mysql_query("SELECT * FROM departement WHERE iddepartement='$iddepartement' "));
 }

 
 function getipInformations($idip){
    return mysql_fetch_array(mysql_query("SELECT * FROM ip WHERE idip='$idip'"));
 }
 function getcomplementInformations($idcomplement){
    return mysql_fetch_array(mysql_query("SELECT * FROM complement WHERE idcomplement='$idcomplement'"));
 }
 function getcomplement_choixInformations($idchoix){
    return mysql_fetch_array(mysql_query("SELECT * FROM complement_choix WHERE idchoix='$idchoix'"));
 }
 function getcategorie_restaurantInformations($idcategorie){
    return mysql_fetch_array(mysql_query("SELECT * FROM categorie_restaurant WHERE idcategorie='$idcategorie'"));
 }
function getvilleInformations($idville){
  return mysql_fetch_array(mysql_query("SELECT * FROM ville WHERE idville='$idville'"));
}
function getCommuneInformations($idcommune){
  return mysql_fetch_array(mysql_query("SELECT * FROM commune WHERE idcommune='$idcommune'"));
}

function getdeclarationInformations($iddeclaration){
  return mysql_fetch_array(mysql_query("SELECT * FROM declaration WHERE iddeclaration='$iddeclaration'"));
}


function getvilleInformationsbytitle($titre){
  return mysql_fetch_array(mysql_query("SELECT * FROM ville WHERE titre='$titre'"));
}

function getAgenceInformationsbytitle($titre){
  return mysql_fetch_array(mysql_query("SELECT * FROM agence WHERE titre='$titre'"));
}

function getAgenceInformations($idagence){
  return mysql_fetch_array(mysql_query("SELECT * FROM agence WHERE idagence='$idagence'"));
}






function Madate2($date){
  $tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");
  $tab=explode("/",$date);
  return $tab[2]." ".$tab_mois[intval($tab[1])]." ".$tab[0];
}



function Madate3($date){
  $tab_mois=array("","Jan.","F&eacute;v.","Mars","Avril","Mai","Juin","Juil.","Ao&ucirc;t","Sept.","Oct.","Nov.","D&eacute;c.");

  $tab=explode("/",$date);

  return $tab[2]."   ".$tab_mois[intval($tab[1])]."   ".$tab[0];

}

function Madate4($date){
  $tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");

  $tab=explode("/",$date);

  return $tab[2]." ".$tab_mois[intval($tab[1])];

}

   function Convertir_date_francais($date){

    $tab=explode("/",$date);

	return $tab[2]."/".$tab[1]."/".$tab[0];

  

  }
   function Convertir_date_anglais($date){

    $tab=explode("/",$date);

	return $tab[2]."/".$tab[1]."/".$tab[0];

  

  }


  


function getmenuInformations($idmenu){
    return mysql_fetch_array(mysql_query("SELECT * FROM menu WHERE idmenu='$idmenu'"));
  }



 function getmenu_developpeurInformations($idmenu){
    return mysql_fetch_array(mysql_query("SELECT * FROM menu_developpeur WHERE idmenu='$idmenu'"));
  }



 function getmenu_developpeurInformationsReference($reference){
    return mysql_fetch_array(mysql_query("SELECT * FROM menu_developpeur WHERE reference='$reference'"));
  }


  function getmodule_developpeurInformations($idmodule){
    return mysql_fetch_array(mysql_query("SELECT * FROM module_developpeur WHERE idmodule='$idmodule'"));
  }



  function getmodule_developpeurInformationsbytitre($titre){
    return mysql_fetch_array(mysql_query("SELECT * FROM module_developpeur WHERE titre='$titre'"));
  }

  function getsmenu_developpeurInformations($idsmenu){
    return mysql_fetch_array(mysql_query("SELECT * FROM smenu_developpeur WHERE idsmenu='$idsmenu'"));
  }



  function getsmenuInformations($idsmenu){
    return mysql_fetch_array(mysql_query("SELECT * FROM smenu WHERE idsmenu='$idsmenu'"));
  }


  function getUtilisateurInformations($idadministrateur){
	  return mysql_fetch_array(mysql_query("SELECT * FROM administrateur WHERE idadministrateur='$idadministrateur'"));
  }

  
 function getUtilisateur2Informations($idadministrateur){
	  return mysql_fetch_array(mysql_query("SELECT * FROM administrateur WHERE idadministrateur='$idadministrateur' OR email='$idadministrateur'"));
  }

 function getcategorieInformations($idcategorie){
		  return mysql_fetch_array(mysql_query("SELECT * FROM categorie WHERE idcategorie='$idcategorie'"));
  }



  

function Redim($image,$destination,$dst_w=100, $quality){

  $src_im = ImageCreateFromJpeg($image);

  $size = GetImageSize($image);

  $src_w = $size[0];

  $src_h = $size[1];

  //taille de votre image

  // Contraint le r&eacute;&eacute;chantillonage ‡ une largeur fixe

  // Maintient le ratio de l'image

  $dst_h = round(($dst_w / $src_w) * $src_h);

  $dst_im = ImageCreateTrueColor($dst_w,$dst_h);

  /* ImageCopyResampled copie et r&eacute;&eacute;chantillonne l'image originale*/

  ImageCopyResampled($dst_im,$src_im,0,0,0,0,$dst_w,$dst_h,$src_w,$src_h);

  /* ImageJpeg g&eacute;nËre l'image dans la sortie standard (c.‡.d le navigateur).

  Le second paramËtre est optionnel ; dans ce cas, l'image est g&eacute;n&eacute;r&eacute;e dans un fichier*/

  imagejpeg($dst_im,$destination,$quality);

  imagedestroy($dst_im);

  imagedestroy($src_im);

}







function mail_html($destinataire, $sujet , $messhtml , $from){ 

$limite = "_parties_".md5 (uniqid (rand())); 
$entete = "Reply-to: $from\n"; 

$entete .= "From:$from\n"; 

$entete .= "Date: ".date("l j F Y, G:i")."\n"; 

$entete .= "MIME-Version: 1.0\n"; 

$entete .= "Content-Type: multipart/alternative;\n"; 

$entete .= " boundary=\"----=$limite\"\n\n"; 



//le message en html original 

$texte_html = "------=$limite\n"; 

$texte_html .= "Content-Type: text/html; charset=\"US-ASCII\"\n"; 

$texte_html .= "Content-Transfer-Encoding: 7bit\n\n"; 

$texte_html .= $messhtml; 

$texte_html .= "\n\n\n------=$limite\n"; 

 

 mail($destinataire, $sujet,$texte_html, $entete); 

} 




function mail_attach($to , $sujet , $message , $fichier, $type, $name , $from)

 {

    $mail_mime = "MIME-Version: 1.0\n";

    $mail_mime .= "Content-Type: multipart/mixed;\n";

    $mail_mime .= " boundary=\"----=_NextPart\"\n\n";

    $texte = "------=_NextPart\n";

    $texte .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";

    $texte .= "Content-Transfer-Encoding: 32bit\n\n";

    $texte .= stripslashes($message);

    $texte .= "\n\n";

    $attachement = "------=_NextPart\n";

    $attachement .= "Content-Type: $type; name=\"$name\"\n";

    $attachement .= "Content-Transfer-Encoding: base64\n";

    $attachement .= "Content-Disposition: attachment; filename=\"$name\"\n\n";

    $fp = fopen($fichier, "rb");

    $buff = fread($fp, filesize($fichier));

    fclose($fp);

    $attachement .= chunk_split(base64_encode($buff));

    $attachement .= "\n\n\n------=_NextPart\n";

    $sujet = stripslashes($sujet);

    $from = stripslashes($from);

    if (file_exists($fichier))

       {

       return mail($to, $sujet, $texte.$attachement, "From: $from\n".$mail_mime);

       }

       else

       {

       return mail($to, $sujet, $texte, "From: $from\n".$mail_mime);

       }

   

  }

function mail_attach2($to , $sujet , $message , $attachement , $from)

 {

    $mail_mime = "MIME-Version: 1.0\n";

    $mail_mime .= "Content-Type: multipart/mixed;\n";

    $mail_mime .= " boundary=\"----=_NextPart\"\n\n";

    $texte = "------=_NextPart\n";

    $texte .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";

    $texte .= "Content-Transfer-Encoding: 32bit\n\n";

    $texte .= stripslashes($message);

    $texte .= "\n\n";

   

    $sujet = stripslashes($sujet);

    $from = stripslashes($from);

   

       return mail($to, $sujet, $texte.$attachement, "From: $from\n".$mail_mime);

  }  

  

function mail_simple_html($to , $sujet , $message , $from, $reponse,$cc, $emetteur){
	$headers = "Reply-To:  $reponse\r\n";
	$headers .= "Return-Path: $from\r\n";
	$headers .= "From: $from\r\n"; 
    if($cc!="")$headers .= "Cc: $cc \r\n";	
	$headers .= "Organization: $emetteur\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Content-Transfer-Encoding: 32bit\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
	mail("$to", "$sujet", "$message", $headers); 
}


function mail_simple_html_attach($to , $sujet , $message , $from, $reponse,$cc, $emetteur, $filename, $type,  $path){
	$file = $path.$filename;
	$content = file_get_contents( $file);
	$content = chunk_split(base64_encode($content));
	$uid = md5(uniqid(time()));
	$name = basename($file);
	
	// header
	$header = "From: ".$emetteur." <".$from.">\r\n";
	$header .= "Reply-To: ".$reponse."\r\n";
    if($cc!="")$header .= "BCC: $cc \r\n";	
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n";
	$header .= "X-Priority: 3\r\n";
	$header .= "X-Mailer: PHP". phpversion() ."\r\n" ;
	
	// message & attachment
	$nmessage = "--".$uid."\r\n";
	$nmessage .= "Content-type:text/html; charset=iso-8859-1\r\n";
	$nmessage .= "Content-Transfer-Encoding: 7bit\r\n";
	$nmessage .= $message."\r\n";
	$nmessage .= "--".$uid."\r\n";
	$nmessage .= "Content-Type: $type; name=\"".$filename."\"\r\n";
	$nmessage .= "Content-Transfer-Encoding: base64\r\n";
	$nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n";
	$nmessage .= $content."\r\n";
	$nmessage .= "--".$uid."--";
	
	if (mail($to, $sujet, $nmessage, $header)) {
		return true; // Or do something here
	} else {
	  return false;
	}

}



function mail_simple($to , $sujet , $message , $from)

 {

    $mail_mime = "MIME-Version: 1.0\n";
    $mail_mime .= "Content-Type: multipart/mixed;\n";
    $mail_mime .= " boundary=\"----=_NextPart\"\n\n";
    $texte = "------=_NextPart\n";
    $texte .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n";
    $texte .= "Content-Transfer-Encoding: 32bit\n\n";
    $texte .= stripslashes($message);
    $texte .= "\n\n";
    $sujet = stripslashes($sujet);
    $from = stripslashes($from);
    return mail($to, $sujet, $texte, "From: $from\n".$mail_mime);

  }

function strpos_arr($haystack, $needle) {
    if(!is_array($needle)) $needle = array($needle);
    foreach($needle as $what) {
        if(($pos = strpos($haystack, $what))!==false) return $pos;
    }
    return false;
}

function GetTime(){
	return time()+(3600*6); 
}

  



 function VerifierAdresseMail($adresse) 

{ 

   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 

   if(preg_match($Syntaxe,$adresse)) 

      return true; 

   else 

     return false; 

}






function randomize($car) {

  $string = "";

  $chaine = "abcdefghijklmnpqrstuvwxy123456789";

  srand((double)microtime()*1000000);

  for($i=0; $i<$car; $i++) {

    $string .= $chaine[rand()%strlen($chaine)];

  }

  return $string;

}

function EnvoyerSMS ($numcli,$message) {

   //$url = 'http://196.202.235.146:50011/mediasms/index.php?app=ws&u=GILZIK&op=pv&h=9526225e29b164331493517a99692d2a&to='.$numcli.'&msg='.urlencode($message);
   $url="https://sms.etech-keys.com/ss/api.php?login=699127866&password=AA9e725&sender_id=BICECCRESCO&destinataire=$numcli&message=".urlencode($message)."&ext_id=0123456&programmation=0";
   //$url="http://sms.intra.bicec/bicec/admin/json.php?module=sms&action=send_cresco&phone=$numcli&body=".urlencode($message);
            
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch,CURLOPT_HEADER, false);

    @curl_exec($ch);

    $resultat=curl_close($ch);

}


function envoyer_sms($username,$password,$destination,$source,$text) {
	  $content ='username='.($username).
				'&password='.($password).
				'&type=0'.
				'&dlr=1'.
				'&destination='.rawurlencode($destination).
				'&source='.rawurlencode($source).
				'&message='.rawurlencode($text);
                

    $ch = curl_init(); 
    $url="http://dstr.connectbind.com:8080/sendsms?".$content;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false);
 
    @curl_exec($ch);
    $resultat=curl_close($ch);
    //return $output;
}  

function sendSMS_autre($username,$password,$destination,$source,$message) {
	
	  $url = 'http://lmtgroup.dyndns.org/sendsms/sendsmsGold.php?';
      $timeout = 10;
	  $request  = $url."UserName=".urlencode($username)."&Password=".$password;
      $request .="&SOA=".urlencode($source)."&MN=".urlencode($destination)."&SM=".urlencode($message);
      $url =$request;
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_POST, 1);
      $response = curl_exec($ch);
     //echo $response;
     curl_close($ch);

}  

function sendSMS($username,$password,$destination,$source,$text) {
	  $content ='username='.($username).
				'&password='.($password).
				'&type=0'.
				'&dlr=1'.
				'&destination='.rawurlencode($destination).
				'&source='.rawurlencode($source).
				'&message='.($text);
                

    $ch = curl_init(); 
    $url="http://121.241.242.114:8080/sendsms?".$content;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false);
 
    @curl_exec($ch);
    $resultat=curl_close($ch);
    //return $output;
} 


function Enregistrer_visite($compte, $idcompte=0,$page,$operation,$requete, $libelle, $type){
  $h=gmdate("H")+1;
  if($h<10)$h="0".$h;
  $heure_visite=$h.":".gmdate("i:s");
  $ip =  get_ip();
  $date_visite=gmdate("Y/m/d");
  $requete=addslashes($requete);
 
  if(!isset($libelle))$libelle="";
	
  $time=time();

  mysql_query("INSERT INTO visite VALUES ('0','$compte','$idcompte','$date_visite','$heure_visite','$page','$operation','$requete','$ip','$libelle','$type','$time');");
}


function GetLastVisit($idcompte, $type){
  
  return mysql_fetch_array(mysql_query("SELECT * FROM visite WHERE idcompte='$idcompte' AND type='$type' ORDER BY idvisite DESC LIMIT 0,1"));
	
  
}




function suppr_accents($str, $encoding='utf-8')
{
    // transformer les caractËres accentu&eacute;s en entit&eacute;s HTML
    $str = htmlentities($str, ENT_NOQUOTES, $encoding);
 
    // remplacer les entit&eacute;s HTML pour avoir juste le premier caractËres non accentu&eacute;s
    // Exemple : "&ecute;" => "e", "&Ecute;" => "E", "√ " => "a" ...
    $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);
 
    // Remplacer les ligatures tel que : å, ∆ ...
    // Exemple "≈ì" => "oe"
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    // Supprimer tout le reste
    $str = preg_replace('#&[^;]+;#', '', $str);
 
    return $str;
}

function IsautorizedIp($ip){
	
	$ligne=mysql_fetch_array(mysql_query("SELECT * FROM ip WHERE titre='$ip' AND etat='1';"));
	
	return $ligne;
}

function multipleDeCinq($n,$x=25) {
	if($n>0 && $n<10) $x=5;
	if($n>=10 && $n<100) $x=10;
	if($n>=100 && $n<1000) $x=100;
	if($n>=1000 && $n<10000) $x=1000;
	if($n>=10000 && $n<100000) $x=10000;
	if($n>=100000 && $n<1000000) $x=100000;
    return (ceil($n)%$x === 0) ? ceil($n) : round(($n+$x/2)/$x)*$x;
}



function getdatedetailleminFr($date){
  $tab_mois=array("","Jan.","F&eacute;v.","Mars","Avril","Mai","Juin","Juil.","Ao&ucirc;t","Sept.","Oct.","Nov.","D&eacute;c.");
  $tab=explode("/",$date);
  $reponse=$tab[0]." ".$tab_mois[intval($tab[1])]." ".$tab[2];

  return $reponse;
}function getdatedetaillemin($date){
  $tab_mois=array("","Jan.","F&eacute;v.","Mars","Avril","Mai","Juin","Juil.","Ao&ucirc;t","Sept.","Oct.","Nov.","D&eacute;c.");
  $tab=explode("/",$date);
  $reponse=$tab[2]." ".$tab_mois[intval($tab[1])]." ".$tab[0];

  return $reponse;
}
function getdatedetaille($date, $heure){
  $tab_semaine=array("Dim.","Lun.","Mar.","Mer.","Jeu.","Ven.","Sam.");
  $tab_mois=array("","Jan.","F&eacute;v.","Mars","Avril","Mai","Juin","Juil.","Ao&ucirc;t","Sept.","Oct.","Nov.","D&eacute;c.");
  $tab=explode("/",$date);
  if(count($tab)==3)$reponse=$tab_semaine[date('w', mktime(0,0,0,$tab[1],$tab[2],$tab[0]))]." ".$tab[2]." ".$tab_mois[intval($tab[1])]." ".$tab[0];
  else $reponse=$tab_mois[intval($tab[1])]." ".$tab[0];
	
  if($heure!="") $reponse.= " &agrave; ".$heure;
  return $reponse;
}

function getweek_first_last_date($date)
{
    $cur_date = strtotime($date); // Change to whatever date you need
    // Get the day of the week: Sunday = 0 to Saturday = 6
    $dotw = date('w', $cur_date);
    if($dotw>1)
    {
        $pre_monday  =  $cur_date-(($dotw-1)*24*60*60);
        $next_sunday = $cur_date+((7-$dotw)*24*60*60);
    }
    else if($dotw==1)
    {
        $pre_monday  = $cur_date;
        $next_sunday =  $cur_date+((7-$dotw)*24*60*60);
    }
    else if($dotw==0)
    {
        $pre_monday  =$cur_date -(6*24*60*60);;
        $next_sunday = $cur_date;
    }

    $date_array =   array();
    $date_array['first_day_of_week'] = date('Y/m/d', $pre_monday);
    $date_array['last_day_of_week'] =date('Y/m/d', $next_sunday);

    return $date_array;
}
function getdatesoftheweek($debut_semaine){
	$tab=explode("/",$debut_semaine);
	$lundi=strtotime($tab[0]."-".$tab[1]."-".$tab[2]); 
	$timestamp_jour=24*3600;
	$mardi=$lundi+$timestamp_jour;
	$merdredi=$lundi+$timestamp_jour*2;
	$jeudi=$lundi+$timestamp_jour*3;
	$vendredi=$lundi+$timestamp_jour*4;
	$samedi=$lundi+$timestamp_jour*5;
	$dimanche=$lundi+$timestamp_jour*6;

	$array = array(
      "lundi" => date("Y/m/d",$lundi),
      "mardi" => date("Y/m/d",$mardi),
      "mercredi" => date("Y/m/d",$mercredi),
      "jeudi" => date("Y/m/d",$jeudi),
      "vendredi" => date("Y/m/d",$vendredi),
      "samedi" => date("Y/m/d",$samedi),
      "dimanche" => date("Y/m/d",$dimanche)
    );
	return $array;
	
}


function randomize_integer($car) {

  $string = "";

  $chaine = "123456789";

  srand((double)microtime()*1000000);

  for($i=0; $i<$car; $i++) {

    $string .= $chaine[rand()%strlen($chaine)];

  }

  return $string;

}

function base30_to_jpeg($base30_string, $output_file) {

    $data = str_replace('image/jsignature;base30,', '', $base30_string);
    $converter = new jSignature_Tools_Base30();
    $raw = $converter->Base64ToNative($data);
//Calculate dimensions
$width = 0;
$height = 0;
foreach($raw as $line)
{
    if (max($line['x'])>$width)$width=max($line['x']);
    if (max($line['y'])>$height)$height=max($line['y']);
}

// Create an image
    $im = imagecreatetruecolor($width+20,$height+20);


// Save transparency for PNG
    imagesavealpha($im, true);
// Fill background with transparency
    $trans_colour = imagecolorallocatealpha($im, 255, 255, 255, 127);
    imagefill($im, 0, 0, $trans_colour);
// Set pen thickness
    imagesetthickness($im, 5);
// Set pen color to black
    $black = imagecolorallocate($im, 33, 84, 207);   
// Loop through array pairs from each signature word
    for ($i = 0; $i < count($raw); $i++)
    {
        // Loop through each pair in a word
        for ($j = 0; $j < count($raw[$i]['x']); $j++)
        {
            // Make sure we are not on the last coordinate in the array
            if ( ! isset($raw[$i]['x'][$j])) 
                break;
            if ( ! isset($raw[$i]['x'][$j+1])) 
            // Draw the dot for the coordinate
                imagesetpixel ( $im, $raw[$i]['x'][$j], $raw[$i]['y'][$j], $black); 
            else
            // Draw the line for the coordinate pair
            imageline($im, $raw[$i]['x'][$j], $raw[$i]['y'][$j], $raw[$i]['x'][$j+1], $raw[$i]['y'][$j+1], $black);
        }
    } 

//Create Image
    $ifp = fopen($output_file, "wb"); 
    imagepng($im, $output_file);
    fclose($ifp);  
    imagedestroy($im);

    return $output_file; 
}

function GetMensualite($credit,$duree,$taux){
    $c=$credit; // Montant du crÈdit souhaitÈ
	
    if($taux and $taux!='') $t=$taux/100;
    else $t=0.115; // Taux d'interet 
	
    $n=$duree; // DurÈe du crÈdit
	
    $m=( ($c*$t) / 12 ) / ( 1 - pow( 1 + ( $t / 12 ), $n*-1 ) ); // Formule de la mensualitÈ
	
    return round($m,2);
}


function Getbaseurl(){
  $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
return $config['base_url'];
}

function iso_strtoupper_fr($chaine){
  $chaine=strtoupper($chaine);
  $chaine=trim($chaine); 
  $chaine = strtr($chaine, "‰‚‡·Â„ÈËÎÍÚÛÙıˆ¯ÏÌÓÔ˘˙˚¸˝ÒÁ˛ˇÊú¯", "ƒ¬¿¡≈√…»À “”‘’÷ÿÃÕŒœŸ⁄€‹›—«ﬁ›∆å–ÿ");
  return $chaine;

}

function mise_majuscules($texte)
    {
    $texte = strtoupper($texte);
    $texte = strtr($texte, "‰‚‡·Â‡ÈËÎÍÚÛÙıˆ¯ÏÌÓÔ˘˙˚¸˝ÒÁ˛ˇÊ?¯","ƒ¬¿¡≈‡…»À “”‘’÷ÿÃÕŒœŸ⁄€‹›—«ﬁ›∆?–ÿ");
    return $texte;
    }


function Enregistrer_droit_administrateur($idadminitrateur, $profil, $idagence){
		$gestion_utilisateur=0;
		$historique_de_session=0;
		$gestion_ip=0;
		$acces_piece_jointe=0;
		$editer_reponse_demande=0;
	    $consulter_les_echanges=1;
	    $mettre_demande_corbeille=0;
		$cloturer_demande=0;
		$acces_corbeille=0;
		$restaurer_demande_de_la_corbeille=0; 
		$ville=0;
		$editer_ville=0; 
		$valider_ville=0;
		$supprimer_ville=0; 
		$editer_importation=0; 
		$valider_importation=0; 
		$supprimer_importation=0; 
		$region=0;
		$editer_region=0; 
		$valider_region=0; 
		$supprimer_region=0; 
		$agence=0;
		$editer_agence=0; 
		$valider_agence=0; 
		$supprimer_agence=0;
		$gestion_utilisateur=0;
		$editer_administrateur=0; 
		$valider_administrateur=0; 
		$supprime_administrateur=0; 

		$gestion_ip=0;
		$editer_ip=0; 
		$valider_ip=0; 
		$supprime_ip=0;

		$historique_de_session=0;
		$supprimer_visite=0; 
		$donnee_de_base=0;
		$utilisateur=0;
		$ville=0;
		$region=0;
		$importation=0;
	
	    $affecter_dossier=0;
	
	if($profil=="Charge_daccueil" OR $profil=="Gestionnaire"){
		$niveau_dacces="agence";
		$circonscription=$idagence;
		if($profil=="Charge_daccueil"){
			$mettre_demande_corbeille=1;
			$affecter_dossier=1;
			
			
		}$editer_reponse_demande=1;
		
	}else{
		$niveau_dacces="Toutes";
		$circonscription="Toutes";
		$donnee_de_base=1;
		$ville=1;
		$region=1;
		$importation=1;
		$agence=1;
		$mettre_demande_corbeille=1;
		if($profil=="Invite"){
			$acces_piece_jointe=1;
			$editer_reponse_demande=0;
		}else{
			$utilisateur=1;
			$gestion_utilisateur=1;
			$historique_de_session=1;
			$gestion_ip=1;
			$acces_piece_jointe=1;
			$editer_reponse_demande=1;
			$cloturer_demande=1;
			$acces_corbeille=1;
			$restaurer_demande_de_la_corbeille=1; 
			$ville=1;
			$editer_ville=1; 
			$valider_ville=1;
			$supprimer_ville=1; 
			$editer_importation=1; 
			$valider_importation=1; 
			$supprimer_importation=1; 
			$region=1;
			$editer_region=1; 
			$valider_region=1; 
			$supprimer_region=1; 
			$agence=1;
			$editer_agence=1; 
			$valider_agence=1; 
			$supprimer_agence=1;
			$gestion_utilisateur=1;
			$editer_administrateur=1; 
			$valider_administrateur=1; 
			$supprime_administrateur=1; 
			
			$gestion_ip=1;
			$editer_ip=1; 
			$valider_ip=1; 
			$supprime_ip=1;
			
			$historique_de_session=1;
			$supprimer_visite=1; 
			$affecter_dossier=1;
			
		}
		
	}
    $suivi_des_demandes=1;
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];
$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;	


		 $droit=getDroitAccesAdministrateur($idadminitrateur);
	     if($droit!=false){
			 mysql_query("DELETE FROM droit_dacces WHERE idadministrateur='$idadminitrateur'");
		 }
	
		 $query="INSERT INTO droit_dacces VALUES ('0','$idadminitrateur','$donnee_de_base','$region','$editer_region','$valider_region','$supprimer_region','$ville','$editer_ville','$valider_ville','$supprimer_ville','$agence','$editer_agence','$valider_agence','$supprimer_agence','$importation','$editer_importation','$valider_importation','$supprimer_importation','$suivi_des_demandes','$niveau_dacces','$circonscription','$affecter_dossier','$acces_piece_jointe','$editer_reponse_demande','$consulter_les_echanges','$cloturer_demande','$mettre_demande_corbeille','$acces_corbeille','$restaurer_demande_de_la_corbeille','$utilisateur','$gestion_utilisateur','$editer_administrateur','$valider_administrateur','$supprime_administrateur','$historique_de_session','$supprimer_visite','$gestion_ip','$editer_ip','$valider_ip','$supprime_ip','$admin','0','$date_creation','$heure_creation','','') ";

		 mysql_query($query) OR die(mysql_error());



}

function MoveDir($dir, $dirNew){
	if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file==".") continue;
					if ($file=="..")continue;
					rename($dir.'/'.$file,$dirNew.'/'.$file);
			    }
			  closedir($dh);
		    }	
	}
	
	unlink($dir);
}
?>