<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 


 $url_enregistrer="Apercu_importation('".base64_encode('traitement_ajax/main.php?traitement=editer-importation')."')";
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
		<div class="lightbox" id="lightbox-region">
			<div class="entete-lightbox">Importation des données
				<div class="close-lightbox" onClick="Cacher_loader('loader');">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

					</svg>
				</div>
			</div>
			<div class="contenu-lightbox" id="conteneur-region">
				<div class="content-form">
					<p class="accroche-lightbox"> Pour ajouter les données à importer, vous devez  soigneuseument renseigner le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-importation" class="form-ajout" enctype="multipart/form-data">
                      

						<div class="ligne-form">
							<div class="wrap-field-form">
								<input placeholder=" " type="file" name="fichier-importation" id="fichier-importation" style="margin-top: 10p; padding-top: 8px"
								data-error-contener="div-erreur-champ-titre-agence" class="mandatory">
								<span id="libelle_reference">cliquez pour joindre le fichier excel <i class="">*</i></span>
								<div id="div-erreur-champ-titre-agence" class="message-erreur">
									Veuillez joindre un fichier au format excel.
								</div>
							</div>
						</div>
						


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-agence" value="Apercu" id="btn-valider-importation" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idagence" id="idagence" value="<?php echo $idagence ?>"/>
							<input type="hidden" name="traitement" id="traitement-apercu" value="editer-importation"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>