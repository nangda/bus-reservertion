<?php 
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$niveau_dacces=mysql_real_escape_string  ($_POST["niveau_dacces"]);



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

//     $query_ville="SELECT * FROM ville WHERE idregion='$idregion'  ORDER BY titre ASC";
//	 $result_ville=mysql_query($query_ville);
//	 $option="<option value=\"\" desable selected>Ville</option>";
//	 while($ville=mysql_fetch_array($result_ville)){
//		 $option.="<option value=\"$ville[0]\">".utf8_encode($ville["titre"])."</option>";
//	 }
     if($niveau_dacces=="Toutes"){
		 $option.="<option value=\"\">Selectionner</option>";
		 $option.="<option value=\"Toutes\">Toutes</option>";
	 }elseif($niveau_dacces=="zone"){
		 $option.="<option value=\"\">Selectionner</option>";
		 $option.="<option value=\"Maritime\">Maritime</option>";
		 $option.="<option value=\"Centrale\">Centrale</option>";
	 }elseif($niveau_dacces=="region"){
		 $query_region="SELECT * FROM region WHERE etat='1' ORDER BY titre ASC";
		 $result_region=mysql_query($query_region);
		 $option.="<option value=\"\">Selectionner</option>";
		 while($region=mysql_fetch_array($result_region)){
			 $option.="<option value=\"$region[0]\">".($region["titre"])."</option>";
		 }
	 }elseif($niveau_dacces=="ville"){
		 $query_ville="SELECT * FROM ville  ORDER BY titre ASC";
		 $result_ville=mysql_query($query_ville);
		 $option.="<option value=\"\">Selectionner</option>";
		 while($ville=mysql_fetch_array($result_ville)){
			 $option.="<option value=\"$ville[0]\">".($ville["titre"])."</option>";
		 }
	 }elseif($niveau_dacces=="agence"){
		 $option.="<option value=\"\">Selectionner</option>";
		 
			 $query_agence="SELECT * FROM agence   ORDER BY titre ASC";
			 $result_agence=mysql_query($query_agence);
			 while($agence=mysql_fetch_array($result_agence)){
				 $option.="<option value=\"$agence[0]\">".($agence["titre"])."</option>";
			 }
			
	 }
	
	
	 $response["erreur"] = "non";
	 $response["session"] = "1";
	 $response["etat"] = "$etat";
	 $response["option"] = "$option";
	 
}else{
	$response["erreur"] = "oui";
	$response["session"] = "1";
}

	