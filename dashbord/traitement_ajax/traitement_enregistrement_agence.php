<?php 
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idagence=mysql_real_escape_string  ($_POST["idagence"]);
$titre=(mysql_real_escape_string  ($_POST["titre-agence"]));
$reference=(mysql_real_escape_string  ($_POST["reference-agence"]));
$email=(mysql_real_escape_string  ($_POST["email-agence"]));
$telephone=(mysql_real_escape_string  ($_POST["telephone-agence"]));
$idville=(mysql_real_escape_string  ($_POST["ville-agence"]));
$laville=getvilleInformations($idville);
$idregion=(mysql_real_escape_string  ($_POST["region-agence"]));
$laregion=getregionInformations($idregion);
$zone=$laregion["zone"];

$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		


if($idagence==0 AND mysql_num_rows(mysql_query("SELECT * FROM agence WHERE titre='$titre' OR reference='$reference' "))>0){ 
	$trouve=true;
   $error="Une agence ayant les mêmes infos existe  d&eacute;j&agrave;. Bien vouloir vérifier.<br>";
}


if($trouve==false){ 
	if($idagence==0){
		 $supprimable="1";
		 $etat=0;
		 $concerne="";
		 $idconcerne=0;
		 $query="INSERT INTO agence VALUES ('0','$titre','$reference','$telephone','$email','$idville','$idregion','$zone','$admin','0','0','$date_creation','$heure_creation','','','','','$etat') ";

		 mysql_query($query) OR die(mysql_error());
		 $lagence=getagenceinformations(mysql_insert_id());

		  $class="";
		  $title="Valider "; 
			$url_detail="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idagence=$agence[0]&traitement=detail-agence")."','loader');";
			$url_supprimer="javascript:Notification_suppression_agence('".base64_encode("traitement_ajax/main.php?traitement=supprimer-agence")."', '".$lagence[0]."', '". $_SESSION["token"]."','0')";
			$url_modifier="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idagence=$agence[0]&traitement=editer-agence")."','loader');";
			$url_valider="javascript:Valider_agence('".base64_encode("traitement_ajax/main.php?traitement=valider-agence")."', '$lagence[0]', '".$_SESSION["token"]."', '". $agence["etat"]."')";


		 $deja_operationel=agenceDejaoperationnel($lagence[0]);
		

		 $agence="<tr id=\"tr_agence$lagence[0]\">
							<td class=\"colonne-tab edit-line\"><a href=\"$url_modifier\"><i class=\"fa fa-pencil\"></i></a></td>
							<td class=\"colonne-tab detail-line\"><a href=\"$url_detail\"><i class=\"fa fa-eye\"></i></a></td>
							<td class=\"colonne-tab\" id=\"valider-agence$lagence[0]\"><a href=\"$url_valider\"><i class=\"fa fa-check-circle\"></i></a></td>
							<td class=\"colonne-tab delete-line\"><a href=\"$url_supprimer\"><i class=\"fa fa-trash\"></i></a></td>
							<td id=\"nom-agence$lagence[0]\">".($lagence["titre"])." </td>
							<td id=\"reference-agence$lagence[0]\">".($lagence["reference"])." </td>
							<td id=\"telephone-agence$lagence[0]\">".$lagence["telephone"]."</td>
							<td id=\"email-agence$lagence[0]\">".$lagence["email"]."</td>
							<td id=\"ville-agence$lagence[0]\">".($laville["titre"])."</td>
							<td id=\"region-agence$lagence[0]\">".($laregion["titre"])."</td>
							<td id=\"zone-agence$lagence[0]\">".($lagence["zone"])."</td>
							</tr>";
		 $response["agence"] = $agence;
	}else{
		 $query="UPDATE agence SET zone='$zone',idville='$idville',idregion='$idregion',email='$email',telephone='$telephone',titre='$titre', reference='$reference', modificateur ='$admin', date_modification='$date_creation', heure_modification='$heure_creation' WHERE idagence='$idagence'";

		 mysql_query($query) OR die(mysql_error());
		 $lagence=getagenceinformations($idagence);

		 $response["nom"] = ($lagence["titre"]);
		 $response["reference"] = ($lagence["reference"]);
		 $response["region"] =($laregion["titre"]);
		 $response["zone"] =($lagence["zone"]);
	}

	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["nbagence"] = mysql_num_rows(mysql_query("SELECT * FROM agence  "));

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$error";
}
		  


 ?>