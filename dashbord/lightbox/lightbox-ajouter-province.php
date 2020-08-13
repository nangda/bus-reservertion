<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idprovince"])){
	$idprovince=mysql_real_escape_string  ($_GET["idprovince"]);
	$laprovince=getprovinceInformations($idprovince);
}else $idprovince=0; 


 $url_enregistrer="Enregistrer_province('".base64_encode('traitement_ajax/traitement_enregistrement_province.php')."', '$idprovince')";
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
		<div class="lightbox" id="lightbox-province">
			<div class="entete-lightbox">Ajouter une province
				<div class="close-lightbox" onClick="Cacher_loader('loader');">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

					</svg>
				</div>
			</div>
			<div class="contenu-lightbox" id="conteneur-province">
				<div class="content-form">
					<p class="accroche-lightbox"> Pour ajouter une province, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-province" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-province" id="titre-province"
								data-error-contener="div-erreur-champ-titre-province" onKeyup="Verif_saisie(event, 'titre-province', 'btn-valider-province')" class="mandatory-province" <?php if($idprovince!=0){?>value="<?php echo utf8_encode($laprovince["titre"])?>" 	<?php }?>>
								<span id="libelle_reference">Titre <i class="">*</i></span>
								<div id="div-erreur-champ-titre-province" class="message-erreur">
									Veuillez indiquer le nom de la province.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-province" id="reference-province" <?php if($idprovince!=0){?>value="<?php echo utf8_encode($laprovince["reference"])?>" 	<?php }?> data-error-contener="div-erreur-champ-reference-province" onKeyup="Verif_saisie(event, 'reference-province', 'btn-valider-province')" class="mandatory-province">
								<span id="libelle_reference">Référence <i class="">*</i></span>
								<div id="div-erreur-champ-reference-province" class="message-erreur">
									Veuillez indiquer la reférence de la province.
								</div>
							</div>
						</div>

						<div class="ligne-form">
							<div class="wrap-field-form middle">
								<input placeholder=" " type="color" name="couleur" id="couleur" class="datepicker-here date-cotisation mandatory-province" data-error-contener="div-erreur-champ-couleur" <?php if($idprovince!=0){?>value="<?php echo utf8_encode($laprovince["couleur"])?>" <?php }?> class="mandatory-province">
								<span>Code couleur <i class="">*</i></span>
								<div id="div-erreur-champ-couleur" class="message-erreur">
									Veuillez indiquer le code couleur de la présence.
								</div>
							</div>

						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-province" value="Enregistrer" id="btn-valider-province" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idprovince" id="idprovince" value="<?php echo $idprovince ?>"/>
							
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>