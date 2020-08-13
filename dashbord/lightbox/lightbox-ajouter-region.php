<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idregion"])){
	$idregion=mysql_real_escape_string  ($_GET["idregion"]);
	$laregion=getregionInformations($idregion);
}else $idregion=0; 


 $url_enregistrer="Enregistrer_region('".base64_encode('traitement_ajax/main.php?traitement=enregistrement-region')."', '$idregion')";
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
			<div class="entete-lightbox">Ajouter une region
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
					<p class="accroche-lightbox"> Pour ajouter une region, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-region" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-region" id="titre-region"
								data-error-contener="div-erreur-champ-titre-region" onKeyup="Verif_saisie(event, 'titre-region', 'btn-valider-region')" class="mandatory-region" <?php if($idregion!=0){?>value="<?php echo ($laregion["titre"])?>" 	<?php }?>>
								<span id="libelle_reference">Titre <i class="">*</i></span>
								<div id="div-erreur-champ-titre-region" class="message-erreur">
									Veuillez indiquer le nom de la region.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-region" id="reference-region" <?php if($idregion!=0){?>value="<?php echo ($laregion["reference"])?>" 	<?php }?> data-error-contener="div-erreur-champ-reference-region" onKeyup="Verif_saisie(event, 'reference-region', 'btn-valider-region')" class="mandatory-region">
								<span id="libelle_reference">Référence <i class="">*</i></span>
								<div id="div-erreur-champ-reference-region" class="message-erreur">
									Veuillez indiquer la reférence de la region.
								</div>
							</div>
						</div>

						<div class="ligne-form">

							<div class="wrap-field-form middle wrap-select">
							<select name="zone-region" id="zone-region" data-error-contener="div-erreur-champ-zone-region" class="mandatory-region">
								<option value="" desable selected>Zone *</option>
								
								<option value="Maritime" <?php if($idregion!=0 AND $laregion["zone"]=="Maritime")echo"SELECTED";?>>Maritime</option>
								<option value="Centrale" <?php if($idregion!=0 AND $laregion["zone"]=="Centrale")echo"SELECTED";?>>Centrale</option>
								
							</select>
							<div id="div-erreur-champ-zone-region" class="message-erreur">
								Veuillez choisir une commune.
							</div>
						</div>
						</div>

						


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-region" value="Enregistrer" id="btn-valider-region" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idregion" id="idregion" value="<?php echo $idregion ?>"/>
							<input type="hidden" name="traitement" id="traitement" value="editer-region"/>
							
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>