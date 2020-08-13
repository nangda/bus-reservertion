<?php 
        
        
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idville=mysql_real_escape_string  ($_POST["idville"]);
$titre=(mysql_real_escape_string  ($_POST["titre-ville"]));
$reference=(mysql_real_escape_string  ($_POST["reference-ville"]));
$idregion=(mysql_real_escape_string  ($_POST["region-ville"]));
$laregion=getregionInformations($idregion);

$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		


if($idville==0 AND mysql_num_rows(mysql_query("SELECT * FROM ville WHERE titre='$titre'   OR reference='$reference' "))>0){ 
	$trouve=true;
   $error="Une ville ayant les mêmes infos existe  d&eacute;j&agrave;. Bien vouloir vérifier.<br>";
}


if($trouve==false){ 
	if($idville==0){
		 $supprimable="1";
		 $etat=0;
		 $concerne="";
		 $idconcerne=0;
		 $query="INSERT INTO ville VALUES ('0','$titre','$reference','$idregion','$admin','0','0','$date_creation','$heure_creation','','','','','$etat') ";

		 mysql_query($query) OR die(mysql_error());
		 $lville=getvilleinformations(mysql_insert_id());
         
		  $class="";
		  $title="Valider "; 
			$url_detail="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idville=$lville[0]&traitement=detail-ville")."";
			$url_supprimer="javascript:Notification_suppression_ville('".base64_encode("traitement_ajax/main.php?traitement=supprimer-ville")."', '".$lville[0]."', '". $_SESSION["token"]."','0')";
			$url_modifier="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idville=$lville[0]&traitement=editer-ville")."";
			$url_valider="javascript:Valider_ville('".base64_encode("traitement_ajax/main.php?traitement=valider-ville")."', '$lville[0]', '".$_SESSION["token"]."', '". $lville["etat"]."')";


		 $deja_operationel=villeDejaoperationnel($lville[0]);
		

		 $ville="<tr id=\"tr_ville$lville[0]\">
		 <td class=\"colonne-tab edit-line\"><a href=\"$url_modifier\"><i class=\"fa fa-pencil\"></i></a></td>
							<td class=\"colonne-tab detail-line\"><a href=\"$url_detail\"><i class=\"fa fa-eye\"></i></a></td>
							<td class=\"colonne-tab\" id=\"valider-ville$lville[0]\"><a href=\"$url_valider\"><i class=\"fa fa-check-circle\"></i></a></td>
							<td class=\"colonne-tab delete-line\"><a href=\"$url_supprimer\"><i class=\"fa fa-trash\"></i></a></td>
							<td id=\"nom-ville$lville[0]\">".($lville["titre"])." </td>
							<td id=\"reference-ville$lville[0]\">".$lville["reference"]."</td>
							<td id=\"region-ville$lville[0]\">".($laregion["titre"])."</td>
							</tr>";
		 $response["ville"] = $ville;
	}else{
		 $query="UPDATE ville SET idregion='$idregion',titre='$titre', reference='$reference', modificateur ='$admin', date_modification='$date_creation', heure_modification='$heure_creation' WHERE idville='$idville'";

		 mysql_query($query) OR die(mysql_error());
		 $lville=getvilleinformations($idville);

		 $response["nom"] = ($lville["titre"]);
		 $response["reference"] = ($lville["reference"]);
		 $response["region"] =($laregion["titre"]);
	}

	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["nbville"] = mysql_num_rows(mysql_query("SELECT * FROM ville  "));

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$error";
}
		  


 ?>