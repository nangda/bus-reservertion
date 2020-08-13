<?php 

        
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idregion=mysql_real_escape_string  ($_POST["idregion"]);
$titre=(mysql_real_escape_string  ($_POST["titre-region"]));
$reference=(mysql_real_escape_string  ($_POST["reference-region"]));
$zone=(mysql_real_escape_string  ($_POST["zone-region"]));


$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		

if($idregion==0 AND mysql_num_rows(mysql_query("SELECT * FROM region WHERE titre='$titre' OR reference='$reference' ")) ){
	$error=" Un enregisytrement ayant les mêmes informations existe déjà";
	$trouve=true;
}



if($trouve==false){ 
	if($idregion==0){
		 $supprimable="1";
		 $etat=0;
		 $concerne="";
		 $idconcerne=0;
		 $query="INSERT INTO region VALUES ('0','".($titre)."','$reference','$zone','$admin','0','0','$date_creation','$heure_creation','','','','','$etat') ";

		 mysql_query($query) OR die(mysql_error());
		 $lregion=getregioninformations(mysql_insert_id());

		  $class="";
		  $title="Valider "; 

				$url_detail="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idregion=$region[0]&traitement=detail-region")."";
				$url_supprimer="javascript:Notification_suppression_region('".base64_encode("traitement_ajax/main.php?traitement=supprimer-region")."', '".$lregion[0]."', '". $_SESSION["token"]."','0')";
				$url_modifier="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action','OK','','','','');";
				$url_valider="javascript:Valider_region('".base64_encode("traitement_ajax/main.php?traitement=valider-region")."', '$lregion[0]', '".$_SESSION["token"]."', '". $region["etat"]."')";

		 $region="<tr id=\"tr_region$lregion[0]\">
							<td class=\"colonne-tab edit-line\"><a href=\"$url_modifier\"><i class=\"fa fa-pencil\"></i></a></td>
							<td class=\"colonne-tab detail-line\"><a href=\"$url_detail\"><i class=\"fa fa-eye\"></i></a></td>
							<td class=\"colonne-tab\" id=\"valider-region$lregion[0]\"><a href=\"$url_valider\"><i class=\"fa fa-check-circle\"></i></a></td>
							<td class=\"colonne-tab delete-line\"><a href=\"$url_supprimer\"><i class=\"fa fa-trash\"></i></a></td>
							<td id=\"nom-region$lregion[0]\">".($lregion["titre"])." </td>
							<td id=\"reference-region$lregion[0]\">".$lregion["reference"]."</td>
							<td id=\"zone-region$lregion[0]\">".$lregion["zone"]."</td>
							</tr>";
		 $response["region"] = $region;
	}else{
		 $query="UPDATE region SET zone='$zone',titre='$titre', reference='$reference', modificateur ='$admin', date_modification='$date_creation', heure_modification='$heure_creation' WHERE idregion='$idregion'";

		 mysql_query($query) OR die(mysql_error());
		 $lregion=getregioninformations($idregion);

		 $response["nom"] = ($lregion["titre"]);
		 $response["reference"] = ($lregion["reference"]);
		 $response["zone"] = ($lregion["zone"]);
	}


	$response["erreur"] = "non";
	$response["session"] = "1";
	$response["nbregion"] = mysql_num_rows(mysql_query("SELECT * FROM region  "));

}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
	$response["message"] = "$error";
}
		  

 ?>