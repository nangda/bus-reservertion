<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idmodule"])){
	$idmodule=mysql_real_escape_string  ($_GET["idmodule"]);
	$lmodule=getmoduleInformations($idmodule);
}else $idmodule=0; 


 $url_enregistrer="Enregistrer_module('".base64_encode('traitement_ajax/traitement_enregistrement_module.php')."', '$idmodule')";
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
		<div class="lightbox" id="lightbox-utilisation">
			<div class="entete-lightbox">Ajouter un module
				<div class="close-lightbox" onClick="Cacher_loader('loader');">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

					</svg>
				</div>
			</div>
			<div class="contenu-lightbox" id="conteneur-utilisation">
				<div class="content-form">
					<p class="accroche-lightbox"> Pour ajouter un module, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-module" class="form-ajout" enctype="multipart/form-data">
                      	
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre" id="titre"
								data-error-contener="div-erreur-champ-titre" onKeyup="Verif_saisie(event, 'titre', 'btn-valider-module')" class="mandatory-module" <?php if($idmodule!=0){?>value="<?php echo utf8_encode($lmodule["titre"])?>"<?php }?>>
								<span id="libelle_reference">Titre<i class="">*</i></span>
								<div id="div-erreur-champ-titre" class="message-erreur">
									Veuillez indiquer le nom du module'.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="rang" id="rang"
								data-error-contener="div-erreur-champ-rang" onKeyup="Verif_saisie(event, 'rang', 'btn-valider-module')" class="mandatory-module" <?php if($idmodule!=0){?>value="<?php echo utf8_encode($lmodule["rang"])?>"<?php }?>>
								<span id="libelle_reference">Rang<i class="">*</i></span>
								<div id="div-erreur-champ-rang" class="message-erreur">
									Veuillez indiquer le rang.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">

							<div class="wrap-field-form middle wrap-select">
								<select name="langue" id="langue" data-error-contener="div-erreur-champ-langue" class="mandatory-administrateur">
									<option value="" desable selected>Langue</option>
									<option value="francais">Francais </option>
									<option value="anglais." >Anglais</option>
								</select>
								<div id="div-erreur-champ-langue" class="message-erreur">
									Veuillez choisir une langue.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="url" id="url"
								data-error-contener="div-erreur-champ-pasword" onKeyup="Verif_saisie(event, 'url', 'btn-valider-module')" class="mandatory-module" <?php if($idmodule!=0){?>value="<?php echo utf8_encode(base64_decode($lmodule["pwd"]))?>"<?php }?>>
								<span id="libelle_reference">URL<i class="">*</i></span>
								<div id="div-erreur-champ-url" class="message-erreur">
									Veuillez indiquer l'url.
								</div>
							</div>
						</div>
						
						
						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-module" value="Enregistrer" id="btn-valider-module" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idmodule" id="idmodule" value="<?php echo $idmodule?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>