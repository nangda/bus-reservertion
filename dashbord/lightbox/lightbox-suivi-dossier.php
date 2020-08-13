<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$admin=$ladministrateur[0];
$droit_dacces=getDroitAccesAdministrateur($ladministrateur[0]);
$niveau_dacces=$droit_dacces["niveau_dacces"];
$circonscription=$droit_dacces["circonscription"];
$profil=$ladministrateur["fonction"];

?>

<?php 

$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$url_enregistrer="Enregistrer_suivi('".base64_encode('traitement_ajax/main.php?traitement=editer-suivi')."')";

$icone_support="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSItNDIgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPjxwYXRoIGQ9Im0zMzMuNjcxODc1IDEyMy4zMDg1OTRjMCAzMy44ODY3MTgtMTIuMTUyMzQ0IDYzLjIxODc1LTM2LjEyNSA4Ny4xOTUzMTItMjMuOTcyNjU2IDIzLjk3MjY1Ni01My4zMDg1OTQgMzYuMTI1LTg3LjE5NTMxMyAzNi4xMjVoLS4wNTg1OTNjLTMzLjg0Mzc1LS4wMTE3MTgtNjMuMTYwMTU3LTEyLjE2NDA2Mi04Ny4xMzI4MTMtMzYuMTI1LTIzLjk3NjU2Mi0yMy45NzY1NjItMzYuMTI1LTUzLjMwODU5NC0zNi4xMjUtODcuMTk1MzEyIDAtMzMuODc1IDEyLjE0ODQzOC02My4yMTA5MzggMzYuMTI1LTg3LjE4MzU5NCAyMy45NjA5MzgtMjMuOTY0ODQ0IDUzLjI3NzM0NC0zNi4xMTMyODEyIDg3LjEzMjgxMy0zNi4xMjVoLjA1ODU5M2MzMy44NzUgMCA2My4yMTA5MzggMTIuMTUyMzQ0IDg3LjE5NTMxMyAzNi4xMjUgMjMuOTcyNjU2IDIzLjk3MjY1NiAzNi4xMjUgNTMuMzA4NTk0IDM2LjEyNSA4Ny4xODM1OTR6bTAgMCIgZmlsbD0iI2ZmYmI4NSIvPjxwYXRoIGQ9Im00MjcuMTY3OTY5IDQyMy45NDUzMTJjMCAyNi43MzQzNzYtOC41MDM5MDcgNDguMzc4OTA3LTI1LjI1MzkwNyA2NC4zMjAzMTMtMTYuNTU0Njg3IDE1Ljc1MzkwNi0zOC40NDkyMTggMjMuNzM0Mzc1LTY1LjA3MDMxMiAyMy43MzQzNzVoLTI0Ni41MzEyNWMtMjYuNjIxMDk0IDAtNDguNTE1NjI1LTcuOTgwNDY5LTY1LjA1ODU5NC0yMy43MzQzNzUtMTYuNzYxNzE4LTE1Ljk1MzEyNS0yNS4yNTM5MDYtMzcuNTkzNzUtMjUuMjUzOTA2LTY0LjMyMDMxMyAwLTEwLjI4MTI1LjMzOTg0NC0yMC40NTMxMjQgMS4wMTk1MzEtMzAuMjM0Mzc0LjY5MTQwNy0xMCAyLjA4OTg0NC0yMC44ODI4MTMgNC4xNTIzNDQtMzIuMzYzMjgyIDIuMDc4MTI1LTExLjU3NDIxOCA0Ljc1LTIyLjUxNTYyNSA3Ljk0OTIxOS0zMi41MTU2MjUgMy4zMjAzMTItMTAuMzUxNTYyIDcuODEyNS0yMC41NjI1IDEzLjM3MTA5NC0zMC4zNDM3NSA1Ljc3MzQzNy0xMC4xNTIzNDMgMTIuNTU0Njg3LTE4Ljk5NjA5MyAyMC4xNTYyNS0yNi4yNzczNDMgNy45Njg3NS03LjYyMTA5NCAxNy43MTA5MzctMTMuNzQyMTg4IDI4Ljk3MjY1Ni0xOC4yMDMxMjYgMTEuMjIyNjU2LTQuNDM3NSAyMy42NjQwNjItNi42ODc1IDM2Ljk3NjU2Mi02LjY4NzUgNS4yMjI2NTYgMCAxMC4yODEyNSAyLjEzNjcxOSAyMC4wMzEyNSA4LjQ4ODI4MiA2LjEwMTU2MyAzLjk4MDQ2OCAxMy4xMzI4MTMgOC41MTE3MTggMjAuODk0NTMyIDEzLjQ3MjY1NiA2LjcwMzEyNCA0LjI3MzQzOCAxNS43ODEyNSA4LjI4MTI1IDI3LjAwMzkwNiAxMS45MDIzNDQgOS44NjMyODEgMy4xOTE0MDYgMTkuODc1IDQuOTcyNjU2IDI5Ljc2NTYyNSA1LjI4MTI1IDEuMDg5ODQzLjAzOTA2MiAyLjE3OTY4Ny4wNTg1OTQgMy4yNjk1MzEuMDU4NTk0IDEwLjk4NDM3NSAwIDIyLjA5Mzc1LTEuODAwNzgyIDMzLjA0Njg3NS01LjMzOTg0NCAxMS4yMjI2NTYtMy42MjEwOTQgMjAuMzEyNS03LjYyODkwNiAyNy4wMTE3MTktMTEuOTAyMzQ0IDcuODQzNzUtNS4wMTE3MTkgMTQuODc1LTkuNTM5MDYyIDIwLjg4NjcxOC0xMy40NjA5MzggOS43NTc4MTMtNi4zNjMyODEgMTQuODA4NTk0LTguNSAyMC4wNDI5NjktOC41IDEzLjMwMDc4MSAwIDI1Ljc0MjE4OCAyLjI1IDM2Ljk3MjY1NyA2LjY4NzUgMTEuMjYxNzE4IDQuNDYwOTM4IDIxLjAwMzkwNiAxMC41OTM3NSAyOC45NjQ4NDMgMTguMjAzMTI2IDcuNjEzMjgxIDcuMjgxMjUgMTQuMzk0NTMxIDE2LjEyNSAyMC4xNjQwNjMgMjYuMjc3MzQzIDUuNTYyNSA5Ljc4OTA2MyAxMC4wNjI1IDE5Ljk5MjE4OCAxMy4zNzEwOTQgMzAuMzMyMDMxIDMuMjAzMTI0IDEwLjAxMTcxOSA1Ljg4MjgxMiAyMC45NTMxMjYgNy45NjA5MzcgMzIuNTM1MTU3IDIuMDUwNzgxIDExLjQ5MjE4NyAzLjQ1MzEyNSAyMi4zNzUgNC4xNDA2MjUgMzIuMzQ3NjU2LjY5MTQwNiA5Ljc1IDEuMDMxMjUgMTkuOTIxODc1IDEuMDQyOTY5IDMwLjI0MjE4N3ptMCAwIiBmaWxsPSIjNmFhOWZmIi8+PHBhdGggZD0ibTIxMC4zNTE1NjIgMjQ2LjYyODkwNmgtLjA1ODU5M3YtMjQ2LjYyODkwNmguMDU4NTkzYzMzLjg3NSAwIDYzLjIxMDkzOCAxMi4xNTIzNDQgODcuMTk1MzEzIDM2LjEyNSAyMy45NzI2NTYgMjMuOTcyNjU2IDM2LjEyNSA1My4zMDg1OTQgMzYuMTI1IDg3LjE4MzU5NCAwIDMzLjg4NjcxOC0xMi4xNTIzNDQgNjMuMjE4NzUtMzYuMTI1IDg3LjE5NTMxMi0yMy45NzI2NTYgMjMuOTcyNjU2LTUzLjMwODU5NCAzNi4xMjUtODcuMTk1MzEzIDM2LjEyNXptMCAwIiBmaWxsPSIjZjVhODZjIi8+PHBhdGggZD0ibTQyNy4xNjc5NjkgNDIzLjk0NTMxMmMwIDI2LjczNDM3Ni04LjUwMzkwNyA0OC4zNzg5MDctMjUuMjUzOTA3IDY0LjMyMDMxMy0xNi41NTQ2ODcgMTUuNzUzOTA2LTM4LjQ0OTIxOCAyMy43MzQzNzUtNjUuMDcwMzEyIDIzLjczNDM3NWgtMTI2LjU1MDc4MXYtMjI1LjUzNTE1NmMxLjA4OTg0My4wMzkwNjIgMi4xNzk2ODcuMDU4NTk0IDMuMjY5NTMxLjA1ODU5NCAxMC45ODQzNzUgMCAyMi4wOTM3NS0xLjgwMDc4MiAzMy4wNDY4NzUtNS4zMzk4NDQgMTEuMjIyNjU2LTMuNjIxMDk0IDIwLjMxMjUtNy42Mjg5MDYgMjcuMDExNzE5LTExLjkwMjM0NCA3Ljg0Mzc1LTUuMDExNzE5IDE0Ljg3NS05LjUzOTA2MiAyMC44ODY3MTgtMTMuNDYwOTM4IDkuNzU3ODEzLTYuMzYzMjgxIDE0LjgwODU5NC04LjUgMjAuMDQyOTY5LTguNSAxMy4zMDA3ODEgMCAyNS43NDIxODggMi4yNSAzNi45NzI2NTcgNi42ODc1IDExLjI2MTcxOCA0LjQ2MDkzOCAyMS4wMDM5MDYgMTAuNTkzNzUgMjguOTY0ODQzIDE4LjIwMzEyNiA3LjYxMzI4MSA3LjI4MTI1IDE0LjM5NDUzMSAxNi4xMjUgMjAuMTY0MDYzIDI2LjI3NzM0MyA1LjU2MjUgOS43ODkwNjMgMTAuMDYyNSAxOS45OTIxODggMTMuMzcxMDk0IDMwLjMzMjAzMSAzLjIwMzEyNCAxMC4wMTE3MTkgNS44ODI4MTIgMjAuOTUzMTI2IDcuOTYwOTM3IDMyLjUzNTE1NyAyLjA1MDc4MSAxMS40OTIxODcgMy40NTMxMjUgMjIuMzc1IDQuMTQwNjI1IDMyLjM0NzY1Ni42OTE0MDYgOS43NSAxLjAzMTI1IDE5LjkyMTg3NSAxLjA0Mjk2OSAzMC4yNDIxODd6bTAgMCIgZmlsbD0iIzI2ODJmZiIvPjwvc3ZnPgo=";
?>

<!doctype html>

<html>

<head>

	<meta charset="utf-8">

	<title>Document sans titre</title>

	<style>

		.wrap-select:after {

			top: 30% !important;

		}

	</style>

</head>



<body>

	<link rel="stylesheet" type="text/css" href="css/lightbox.css">

	<div class="conteneur-lightbox">

		<div class="lightbox" id="lightbox-droit-utilisateur">

			<div class="entete-lightbox">Suivi du dossier #0<?php echo $demandeur[0]?>  -  <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?>

				<div class="close-lightbox" onclick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"></path> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-suivi">
				
				<div class="wrapper-line-msg-follow-up" id="conteneur-echange">
				<?php 
						 $query_suivi="SELECT * FROM suivi_dossier WHERE iddemandeur='$demandeur[0]' ORDER BY idsuivi ASC";
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
							 echo "<div class=\"line-msg-follow-up $emetteur\" id=\"$suivi[0]\">
										<div class=\"wrap-msg-follow-up\">
											<div class=\"wrap-img-user-msg\"><img src=\"$img_emetteur\" alt=\"\"></div>
											<div class=\"wrapper-msg-user\">
												<div class=\"wrap-msg-user\" style=\"text-align: left\">".$suivi["message"]."</div>
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


				?>				
				
				</div>

				<div class="content-form">
					<form action="" id="form-ajout-suivi" class="form-ajout" enctype="multipart/form-data" onSubmit="return false">
                      	
						<div class="ligne-form line-form-suivi">
                           <?php if($droit_dacces["editer_reponse_demande"]=="1"){?>
							<div class="wrap-field-form wrap-input">
								<textarea name="commentaire-traitement" placeholder="votre message ici" class="mandatory" id="commentaire-traitement" cols="30" rows="10" data-error-contener="div-erreur-champ-nom-a" onkeyup="Verif_saisie(event, 'commentaire-traitement', 'btn-valider')"> </textarea>
							</div>
							<?php }?>
							<div class="wrap-field-form ">
								<div class="ligne-form ligne-btn">
								 <?php if($droit_dacces["editer_reponse_demande"]=="1"){?>
									<input type="button" name="btn-valider-album" value="Envoyer" id="btn-valider-album" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
								<?php }?>
									<input type="button" name="cancel-form" value="Fermer" class="btn-submit cancel" onClick="Cacher_loader('loader')">
									<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
									<input type="hidden" name="iddemandeur" id="iddemandeur" value="<?php echo $iddemandeur ?>"/>
									<input type="hidden" name="traitement" id="traitement" value="editer-suivi"/>
									<input type="hidden" name="emetteur" id="emetteur" value="admin"/>
									<input type="hidden" name="from" id="from" value="0"/>
								</div>
							</div>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>