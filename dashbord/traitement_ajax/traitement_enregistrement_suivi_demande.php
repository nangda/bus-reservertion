<?php 

        
        
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];

$iddemandeur=mysql_real_escape_string  ($_POST["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$contenu=mysql_real_escape_string  (strip_tags(trim($_POST["commentaire-traitement"])));
$emetteur=mysql_real_escape_string  (strip_tags(trim($_POST["emetteur"])));
$from=mysql_real_escape_string  (strip_tags(trim($_POST["from"])));


$error="";
$response=array();
$trouve=false;
$tab_mois=array("","Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");


$date_creation=date("Y/m/d");
$heure_actuelle = gmdate( "H" ) + 1;
if($heure_actuelle<10)$heure_actuelle="0".$heure_actuelle;
$minute_actuelle = gmdate( "i" );
$heure_creation=$heure_actuelle.":".$minute_actuelle;		

$icone_support="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSItNDIgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPjxwYXRoIGQ9Im0zMzMuNjcxODc1IDEyMy4zMDg1OTRjMCAzMy44ODY3MTgtMTIuMTUyMzQ0IDYzLjIxODc1LTM2LjEyNSA4Ny4xOTUzMTItMjMuOTcyNjU2IDIzLjk3MjY1Ni01My4zMDg1OTQgMzYuMTI1LTg3LjE5NTMxMyAzNi4xMjVoLS4wNTg1OTNjLTMzLjg0Mzc1LS4wMTE3MTgtNjMuMTYwMTU3LTEyLjE2NDA2Mi04Ny4xMzI4MTMtMzYuMTI1LTIzLjk3NjU2Mi0yMy45NzY1NjItMzYuMTI1LTUzLjMwODU5NC0zNi4xMjUtODcuMTk1MzEyIDAtMzMuODc1IDEyLjE0ODQzOC02My4yMTA5MzggMzYuMTI1LTg3LjE4MzU5NCAyMy45NjA5MzgtMjMuOTY0ODQ0IDUzLjI3NzM0NC0zNi4xMTMyODEyIDg3LjEzMjgxMy0zNi4xMjVoLjA1ODU5M2MzMy44NzUgMCA2My4yMTA5MzggMTIuMTUyMzQ0IDg3LjE5NTMxMyAzNi4xMjUgMjMuOTcyNjU2IDIzLjk3MjY1NiAzNi4xMjUgNTMuMzA4NTk0IDM2LjEyNSA4Ny4xODM1OTR6bTAgMCIgZmlsbD0iI2ZmYmI4NSIvPjxwYXRoIGQ9Im00MjcuMTY3OTY5IDQyMy45NDUzMTJjMCAyNi43MzQzNzYtOC41MDM5MDcgNDguMzc4OTA3LTI1LjI1MzkwNyA2NC4zMjAzMTMtMTYuNTU0Njg3IDE1Ljc1MzkwNi0zOC40NDkyMTggMjMuNzM0Mzc1LTY1LjA3MDMxMiAyMy43MzQzNzVoLTI0Ni41MzEyNWMtMjYuNjIxMDk0IDAtNDguNTE1NjI1LTcuOTgwNDY5LTY1LjA1ODU5NC0yMy43MzQzNzUtMTYuNzYxNzE4LTE1Ljk1MzEyNS0yNS4yNTM5MDYtMzcuNTkzNzUtMjUuMjUzOTA2LTY0LjMyMDMxMyAwLTEwLjI4MTI1LjMzOTg0NC0yMC40NTMxMjQgMS4wMTk1MzEtMzAuMjM0Mzc0LjY5MTQwNy0xMCAyLjA4OTg0NC0yMC44ODI4MTMgNC4xNTIzNDQtMzIuMzYzMjgyIDIuMDc4MTI1LTExLjU3NDIxOCA0Ljc1LTIyLjUxNTYyNSA3Ljk0OTIxOS0zMi41MTU2MjUgMy4zMjAzMTItMTAuMzUxNTYyIDcuODEyNS0yMC41NjI1IDEzLjM3MTA5NC0zMC4zNDM3NSA1Ljc3MzQzNy0xMC4xNTIzNDMgMTIuNTU0Njg3LTE4Ljk5NjA5MyAyMC4xNTYyNS0yNi4yNzczNDMgNy45Njg3NS03LjYyMTA5NCAxNy43MTA5MzctMTMuNzQyMTg4IDI4Ljk3MjY1Ni0xOC4yMDMxMjYgMTEuMjIyNjU2LTQuNDM3NSAyMy42NjQwNjItNi42ODc1IDM2Ljk3NjU2Mi02LjY4NzUgNS4yMjI2NTYgMCAxMC4yODEyNSAyLjEzNjcxOSAyMC4wMzEyNSA4LjQ4ODI4MiA2LjEwMTU2MyAzLjk4MDQ2OCAxMy4xMzI4MTMgOC41MTE3MTggMjAuODk0NTMyIDEzLjQ3MjY1NiA2LjcwMzEyNCA0LjI3MzQzOCAxNS43ODEyNSA4LjI4MTI1IDI3LjAwMzkwNiAxMS45MDIzNDQgOS44NjMyODEgMy4xOTE0MDYgMTkuODc1IDQuOTcyNjU2IDI5Ljc2NTYyNSA1LjI4MTI1IDEuMDg5ODQzLjAzOTA2MiAyLjE3OTY4Ny4wNTg1OTQgMy4yNjk1MzEuMDU4NTk0IDEwLjk4NDM3NSAwIDIyLjA5Mzc1LTEuODAwNzgyIDMzLjA0Njg3NS01LjMzOTg0NCAxMS4yMjI2NTYtMy42MjEwOTQgMjAuMzEyNS03LjYyODkwNiAyNy4wMTE3MTktMTEuOTAyMzQ0IDcuODQzNzUtNS4wMTE3MTkgMTQuODc1LTkuNTM5MDYyIDIwLjg4NjcxOC0xMy40NjA5MzggOS43NTc4MTMtNi4zNjMyODEgMTQuODA4NTk0LTguNSAyMC4wNDI5NjktOC41IDEzLjMwMDc4MSAwIDI1Ljc0MjE4OCAyLjI1IDM2Ljk3MjY1NyA2LjY4NzUgMTEuMjYxNzE4IDQuNDYwOTM4IDIxLjAwMzkwNiAxMC41OTM3NSAyOC45NjQ4NDMgMTguMjAzMTI2IDcuNjEzMjgxIDcuMjgxMjUgMTQuMzk0NTMxIDE2LjEyNSAyMC4xNjQwNjMgMjYuMjc3MzQzIDUuNTYyNSA5Ljc4OTA2MyAxMC4wNjI1IDE5Ljk5MjE4OCAxMy4zNzEwOTQgMzAuMzMyMDMxIDMuMjAzMTI0IDEwLjAxMTcxOSA1Ljg4MjgxMiAyMC45NTMxMjYgNy45NjA5MzcgMzIuNTM1MTU3IDIuMDUwNzgxIDExLjQ5MjE4NyAzLjQ1MzEyNSAyMi4zNzUgNC4xNDA2MjUgMzIuMzQ3NjU2LjY5MTQwNiA5Ljc1IDEuMDMxMjUgMTkuOTIxODc1IDEuMDQyOTY5IDMwLjI0MjE4N3ptMCAwIiBmaWxsPSIjNmFhOWZmIi8+PHBhdGggZD0ibTIxMC4zNTE1NjIgMjQ2LjYyODkwNmgtLjA1ODU5M3YtMjQ2LjYyODkwNmguMDU4NTkzYzMzLjg3NSAwIDYzLjIxMDkzOCAxMi4xNTIzNDQgODcuMTk1MzEzIDM2LjEyNSAyMy45NzI2NTYgMjMuOTcyNjU2IDM2LjEyNSA1My4zMDg1OTQgMzYuMTI1IDg3LjE4MzU5NCAwIDMzLjg4NjcxOC0xMi4xNTIzNDQgNjMuMjE4NzUtMzYuMTI1IDg3LjE5NTMxMi0yMy45NzI2NTYgMjMuOTcyNjU2LTUzLjMwODU5NCAzNi4xMjUtODcuMTk1MzEzIDM2LjEyNXptMCAwIiBmaWxsPSIjZjVhODZjIi8+PHBhdGggZD0ibTQyNy4xNjc5NjkgNDIzLjk0NTMxMmMwIDI2LjczNDM3Ni04LjUwMzkwNyA0OC4zNzg5MDctMjUuMjUzOTA3IDY0LjMyMDMxMy0xNi41NTQ2ODcgMTUuNzUzOTA2LTM4LjQ0OTIxOCAyMy43MzQzNzUtNjUuMDcwMzEyIDIzLjczNDM3NWgtMTI2LjU1MDc4MXYtMjI1LjUzNTE1NmMxLjA4OTg0My4wMzkwNjIgMi4xNzk2ODcuMDU4NTk0IDMuMjY5NTMxLjA1ODU5NCAxMC45ODQzNzUgMCAyMi4wOTM3NS0xLjgwMDc4MiAzMy4wNDY4NzUtNS4zMzk4NDQgMTEuMjIyNjU2LTMuNjIxMDk0IDIwLjMxMjUtNy42Mjg5MDYgMjcuMDExNzE5LTExLjkwMjM0NCA3Ljg0Mzc1LTUuMDExNzE5IDE0Ljg3NS05LjUzOTA2MiAyMC44ODY3MTgtMTMuNDYwOTM4IDkuNzU3ODEzLTYuMzYzMjgxIDE0LjgwODU5NC04LjUgMjAuMDQyOTY5LTguNSAxMy4zMDA3ODEgMCAyNS43NDIxODggMi4yNSAzNi45NzI2NTcgNi42ODc1IDExLjI2MTcxOCA0LjQ2MDkzOCAyMS4wMDM5MDYgMTAuNTkzNzUgMjguOTY0ODQzIDE4LjIwMzEyNiA3LjYxMzI4MSA3LjI4MTI1IDE0LjM5NDUzMSAxNi4xMjUgMjAuMTY0MDYzIDI2LjI3NzM0MyA1LjU2MjUgOS43ODkwNjMgMTAuMDYyNSAxOS45OTIxODggMTMuMzcxMDk0IDMwLjMzMjAzMSAzLjIwMzEyNCAxMC4wMTE3MTkgNS44ODI4MTIgMjAuOTUzMTI2IDcuOTYwOTM3IDMyLjUzNTE1NyAyLjA1MDc4MSAxMS40OTIxODcgMy40NTMxMjUgMjIuMzc1IDQuMTQwNjI1IDMyLjM0NzY1Ni42OTE0MDYgOS43NSAxLjAzMTI1IDE5LjkyMTg3NSAxLjA0Mjk2OSAzMC4yNDIxODd6bTAgMCIgZmlsbD0iIzI2ODJmZiIvPjwvc3ZnPgo=";


if($trouve==false){ 
	
		 $query="INSERT INTO suivi_dossier VALUES ('0','$demandeur[0]','$admin','$contenu','$emetteur','$admin','0','$date_creation','$heure_creation','','','0','0') ";

		 mysql_query($query) OR die(mysql_error());
		 //$suivi=getdemandeurinformations(mysql_insert_id());
	     $query_suivi="SELECT * FROM suivi_dossier WHERE iddemandeur='$demandeur[0]' AND idsuivi>'$from' ORDER BY idsuivi ASC";
	     $result_suivi=mysql_query($query_suivi) OR die(mysql_error());
	     $echange="";
	    
	     while($suivi=mysql_fetch_array($result_suivi)){
			 $emetteur=$suivi["emetteur"];
			 if($emetteur=="customer"){
				 $img_emetteur=$demandeur["photo"];
				 $prenom_emmeteur=$demandeur["nom"]." ".$demandeur["prenom"];
			 }else{
				 $img_emetteur=$icone_support;
				 $suiveur=getAdministrateurInformations($suivi["idadministrateur"]);
				 if($suiveur!=false)$prenom_emmeteur=$suiveur["nom"]." ".$suiveur["prenom"];
				 else $prenom_emmeteur="";
			 }
			 $date=getdatedetaille($suivi["date_creation"], "");
			 $heure=$suivi["heure_creation"];
			 $echange.="<div class=\"line-msg-follow-up $emetteur\" id=\"$suivi[0]\">
						<div class=\"wrap-msg-follow-up\">
							<div class=\"wrap-img-user-msg\"><img src=\"$img_emetteur\" alt=\"\"></div>
							<div class=\"wrapper-msg-user\">
								<div class=\"wrap-msg-user\" style=\"text-align: left\"> ".$suivi["message"]."</div>
								<div class=\"wraper-meta-info-msg\">
								    <div class=\"date-msg\">$prenom_emmeteur - </div>
									<div class=\"date-msg\">$date</div>
									<div class=\"time-msg\"> &agrave; $heure</div>
								</div>
							</div>
						</div>
					</div>";
			 if($suivi["lecture_administrateur"]==0)MarquerMsgCommeLu($suivi[0], "lecture_administrateur");
		 }


		$response["erreur"] = "non";
		$response["session"] = "1";
	    $response["echange"]=$echange;
	    UpdateEtatDossier($demandeur[0]);
		$page="Suivi des demandes &raquo; Ecrire au client ";
		$operation="Ecriture";
		$requete=mysql_real_escape_string  ($query_suivi);
		$libelle=mysql_real_escape_string  ("A envoy&eacute; un message &agrave; ".$demandeur["nom"]." ".$demandeur["prenom"]);
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