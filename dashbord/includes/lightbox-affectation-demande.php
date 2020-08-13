<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
?>

<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$url_enregistrer="document.getElementById('zip').click()";
$agence_dossier=$demandeur["agence"];
$lagence=getAgenceInformations($agence_dossier);

$query_gestionnaire="SELECT * FROM administrateur WHERE fonction='Gestionnaire' AND idagence='$agence_dossier'	ORDER BY nom, prenom ASC";
$result_gestionnaire=mysql_query($query_gestionnaire);
$nbreponse=mysql_num_rows($result_gestionnaire);
?>


<!doctype html>

<html lang="fr">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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

		<div class="lightbox" id="lightbox-pieces-justificative">

			<div class="entete-lightbox"> #0<?php echo $demandeur[0]?>  -  <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?> - Affectation à un gestionnaire

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-affectation-demande">
				<div class="content-form">
					<form action="" id="form-pieces-justificative" class="form-ajout" enctype="multipart/form-data">
						<p class="accroche-lighbox">Veuillez assigner un gestionnaire à ce dossier</p>
						<?php if($nbreponse==0){?>
						<p class="accroche-lighbox">AGENCE : <?php echo $lagence["titre"];?></p>
						<?php }?>
						<div class="wrapper-line-gestionnaire">

							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-1" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-1" class="label-gestionnaire">Gestionnaire 1</label>
							</div>
							
							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-2" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-2" class="label-gestionnaire">Gestionnaire 2</label>
							</div>
							
							
							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-3" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-3" class="label-gestionnaire">Gestionnaire 3</label>
							</div>
							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-4" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-4" class="label-gestionnaire">Gestionnaire 4</label>
							</div>
							
							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-5" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-5" class="label-gestionnaire">Gestionnaire 5</label>
							</div>
							
							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-1" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-6" class="label-gestionnaire">Gestionnaire 6</label>
							</div>
							<div class="line-gestionnaire">
								<input type="radio" id="gestionnaire-7" name="gestionnaire" class="check-gestionnaire">
								<label for="gestionnaire-7" class="label-gestionnaire">Gestionnaire 7</label>
							</div>

						</div>
						
						<div class="ligne-form">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
						  	<input type="button" name="btn-valider-album" value="Valider" id="btn-valider-album" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
						  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
						  	<input type="hidden" name="idalbum" id="idalbum" value="<?php echo $idalbum?>"/>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>