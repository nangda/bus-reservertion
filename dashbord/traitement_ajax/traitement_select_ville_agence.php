<?php 
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$idregion=mysql_real_escape_string  ($_POST["idregion"]);
$laregion=getregioninformations($idregion);



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

     $query_ville="SELECT * FROM ville WHERE idregion='$idregion'  ORDER BY titre ASC";
	 $result_ville=mysql_query($query_ville);
	 $option="<option value=\"\" desable selected>Ville</option>";
	 while($ville=mysql_fetch_array($result_ville)){
		 $option.="<option value=\"$ville[0]\">".($ville["titre"])."</option>";
	 }

	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["etat"] = "$etat";
	 $response["option"] = "$option";
	 $response["query_ville"] = "$query_ville";
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
}

	