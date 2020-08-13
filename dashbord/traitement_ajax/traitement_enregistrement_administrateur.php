<?php 


$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idadministrateur=mysql_real_escape_string  (strip_tags(trim($_POST["idadministrateur"])));
$nom=mysql_real_escape_string  (strip_tags(trim($_POST["nom"])));
$prenom=mysql_real_escape_string  (strip_tags(trim($_POST["prenom"])));
$telephone=mysql_real_escape_string  (strip_tags(trim($_POST["telephone"])));
$fonction=mysql_real_escape_string  (strip_tags(trim($_POST["fonction"])));
$email=mysql_real_escape_string  (strip_tags(trim($_POST["email"])));
$idagence=mysql_real_escape_string  (strip_tags(trim($_POST["agence"])));
$password=mysql_real_escape_string  (strip_tags(trim($_POST["password"])));
$date_debut=mysql_real_escape_string  (strip_tags(trim(str_replace("-", "/", $_POST["date_debut"]))));
if($date_debut!='')$date_debut=Convertir_date_anglais($date_debut);
$date_fin=mysql_real_escape_string  (strip_tags(trim(str_replace("-", "/", $_POST["date_fin"]))));
if($date_fin!='')$date_fin=Convertir_date_anglais($date_fin);

$lagence=getagenceInformations($idagence);

$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;	
$message="";

if($idadministrateur==0){
	if(mysql_num_rows(mysql_query("SELECT * FROM administrateur WHERE email='$email' "))>0){ 
		$trouve=true;
		$message="Email deja enregistré pour un autre utilisateur";
	}elseif($telephone!="" AND mysql_num_rows(mysql_query("SELECT * FROM administrateur WHERE telephone='$telephone' "))>0){ 
		$trouve=true;
		$message="Numéro de téléphone déjà enregistré par un autre utilisateur";
	}
}else{
	if(mysql_num_rows(mysql_query("SELECT * FROM administrateur WHERE email='$email' AND idadministrateur!='$idadministrateur' "))>0){ 
		$trouve=true;
		$message="Adresse email deja enregistré pour un autre utilisateur";
	}elseif($telephone!="" AND mysql_num_rows(mysql_query("SELECT * FROM administrateur WHERE telephone='$telephone' AND idadministrateur!='$idadministrateur'  "))>0){ 
		$trouve=true;
		$message="Numéro de téléphone déjà enregistré par un autre utilisateur";
	}
	
}

if($trouve==false){ 
	if($idadministrateur==0){
		 $etat=0;
		 $query="INSERT INTO administrateur VALUES ('0','$nom','$prenom','$email','".base64_encode($password)."','$telephone','$fonction','$date_debut','$date_fin','$idagence','$admin','0','0','$date_creation','$heure_creation','','','','','****','$etat') ";

		 mysql_query($query) OR die(mysql_error());
		 $ladministrateur=getadministrateurinformations(mysql_insert_id());
         Enregistrer_droit_administrateur($ladministrateur[0], $fonction, $idagence);
		  $class="";
		  $title="Valider "; 
		  
			$url_detail="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idadministrateur=$ladministrateur[0]&traitement=detail-administrateur")."','loader');";
		
			$url_droit="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idadministrateur=$ladministrateur[0]&traitement=droit-administrateur")."','loader',allCheck);";
		
			$url_supprimer="javascript:Notification_suppression_administrateur('".base64_encode("traitement_ajax/main.php?traitement=supprimer-administrateur")."', '".$ladministrateur[0]."', '". $_SESSION["token"]."','0')";
		
			$url_modifier="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idadministrateur=$ladministrateur[0]&traitement=editer-administrateur")."','loader',allCheck);";
		
			$url_valider="javascript:Valider_administrateur('".base64_encode("traitement_ajax/main.php?traitement=valider-administrateur")."', '$ladministrateur[0]', '".$_SESSION["token"]."', '". $ladministrateur["etat"]."')";


		 $deja_operationel=1;
		

		 $administrateur="<tr id=\"tr_administrateur$ladministrateur[0]\">
							<td class=\"colonne-tab edit-line\"><a href=\"$url_modifier\"><i class=\"fa fa-pencil\"></i></a></td>
							<td class=\"colonne-tab detail-line\"><a href=\"$url_detail\"><i class=\"fa fa-eye\"></i></a></td>
							<td class=\"colonne-tab detail-line\"><a href=\"$url_droit\"><i class=\"fa fa-lock\"></i></a></td>
							<td class=\"colonne-tab\" id=\"valider-administrateur$ladministrateur[0]\"><a href=\"$url_valider\"><i class=\"fa fa-check-circle\"></i></a></td>
							<td class=\"colonne-tab delete-line\"><a href=\"$url_supprimer\"><i class=\"fa fa-trash\"></i></a></td>
							<td id=\"nom-administrateur$ladministrateur[0]\">".($ladministrateur["nom"]." ".$ladministrateur["prenom"])." </td>
							<td id=\"fonction-administrateur$ladministrateur[0]\">".($ladministrateur["fonction"])." </td>
							<td id=\"ville-administrateur$ladministrateur[0]\">".$lagence["titre"]."</td>
							<td id=\"telephone-administrateur$ladministrateur[0]\">".$ladministrateur["telephone"]."</td>
							<td id=\"email-administrateur$ladministrateur[0]\">".$ladministrateur["email"]."</td>
							<td id=\"periode-administrateur$ladministrateur[0]\">".Convertir_date_francais($ladministrateur["date_debut"])."-".Convertir_date_francais($ladministrateur["date_fin"])."</td>
							<td id=\"periode-administrateur$ladministrateur[0]\">".getLibelleDroitAccesDossiers($ladministrateur[0])."</td>
							</tr>";
		 $response["administrateur"] = $administrateur;


	}else{
		 $ladministrateur=getadministrateurinformations($idadministrateur);
		 $droit=getDroitAccesAdministrateur($idadminitrateur);
		 if($fontion!=$ladministrateur["fonction"] OR $droit==false) Enregistrer_droit_administrateur($ladministrateur[0], $fonction, $idagence);
		
		 $query="UPDATE administrateur SET idagence='$idagence', nom='$nom', pwd='".base64_encode($password)."',prenom='$prenom',email= '$email' ,modificateur ='$admin', date_debut='$date_debut',date_fin='$date_fin',date_modification='$date_creation', heure_modification='$heure_creation', telephone='$telephone' , fonction='$fonction' WHERE idadministrateur='$idadministrateur'";

		 mysql_query($query) OR die(mysql_error());
		 $ladministrateur=getadministrateurinformations($idadministrateur);


		 $response["periode"] = Convertir_date_francais($ladministrateur["date_debut"])."-".Convertir_date_francais($ladministrateur["date_fin"]);
		 $response["telephone"] = ($ladministrateur["telephone"]);
		 $response["email"] =($ladministrateur["email"]);
		 $response["fonction"] =($ladministrateur["fonction"]);
		 $response["ville"] =($lagence["titre"]);
		 $response["acces"] =getLibelleDroitAccesDossiers($ladministrateur[0]);
		 $response["utilisateur"] =($ladministrateur["nom"]." ".$ladministrateur["prenom"]);
	}

	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["message"] = "$message";
	$response["nbadministrateur"] = mysql_num_rows(mysql_query("SELECT * FROM administrateur  "));
	

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$message";
}

