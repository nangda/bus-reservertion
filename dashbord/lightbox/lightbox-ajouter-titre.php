<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idtitre"])){
	$idtitre=mysql_real_escape_string  ($_GET["idtitre"]);
	$ltitre=gettitreInformations($idtitre);
}else $idtitre=0; 


 $url_enregistrer="Enregistrer_titre('".base64_encode('traitement_ajax/traitement_enregistrement_titre.php')."', '$idtitre')";
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
			<div class="entete-lightbox">Ajouter un titre
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
					<p class="accroche-lightbox"> Pour ajouter un titre, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-titre" class="form-ajout" enctype="multipart/form-data">
                      	
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nom-a" id="nom-a"
								data-error-contener="div-erreur-champ-nom-a" onKeyup="Verif_saisie(event, 'nom-a', 'btn-valider-titre')" class="mandatory-titre" <?php if($idtitre!=0){?>value="<?php echo utf8_encode($ltitre["nom-a"])?>"<?php }?>>
								<span id="libelle_reference">Nom d'titre<i class="">*</i></span>
								<div id="div-erreur-champ-nom-a" class="message-erreur">
									Veuillez indiquer le nom d'titre'.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nom-artiste" id="nom-artiste"
								data-error-contener="div-erreur-champ-nom-artiste" onKeyup="Verif_saisie(event, 'nom-artiste', 'btn-valider-titre')" class="mandatory-titre" <?php if($idtitre!=0){?>value="<?php echo utf8_encode($ltitre["nom-artiste"])?>"<?php }?>>
								<span id="libelle_reference">Artiste<i class="">*</i></span>
								<div id="div-erreur-champ-nom-artiste" class="message-erreur">
									Veuillez indiquer le nom de l'artiste'.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="annee-sortie" id="annee-sortie"
								data-error-contener="div-erreur-champ-annee-sortie" onKeyup="Verif_saisie(event, 'annee-sortie', 'btn-valider-titre')" class="mandatory-titre" <?php if($idtitre!=0){?>value="<?php echo utf8_encode($ltitre["annee-sortie"])?>"<?php }?>>
								<span id="libelle_reference">Ann&eacute;e sortie <i class="">*</i></span>
								<div id="div-erreur-champ-annee-sortie" class="message-erreur">
									Veuillez indiquer l'année de sortie'.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nb-titre" id="nb-titre"
								data-error-contener="div-erreur-champ-nb-titre" onKeyup="Verif_saisie(event, 'annee-sortie', 'btn-valider-titre')" class="mandatory-titre" <?php if($idtitre!=0){?>value="<?php echo utf8_encode($ltitre["nb-titre"])?>"<?php }?>>
								<span id="libelle_reference">Nombre titre <i class="">*</i></span>
								<div id="div-erreur-champ-nb-titre" class="message-erreur">
									Veuillez indiquer le nombre de titre.
								</div>
							</div>
						</div>
						
						
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="prix" name="prix" id="prix"
								data-error-contener="div-erreur-champ-prix" onKeyup="Verif_saisie(event, 'prix', 'btn-valider-titre')" class="mandatory-titre" <?php if($idtitre!=0){?>value="<?php echo utf8_encode($ltitre["prix"])?>"<?php }?>>
								<span id="libelle_reference">Prix titre <i class="">*</i></span>
								<div id="div-erreur-champ-prix" class="message-erreur">
									Veuillez indiquer le prix.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="file" name="photo" id="photo"
								data-error-contener="div-erreur-champ-pasword" onKeyup="Verif_saisie(event, 'photo', 'btn-valider-titre')" class="mandatory-titre" <?php if($idtitre!=0){?>value="<?php echo utf8_encode(base64_decode($ltitre["pwd"]))?>"<?php }?>>
								<span id="libelle_reference">Apercu titre<i class="">*</i></span>
								<div id="div-erreur-champ-photo" class="message-erreur">
									Veuillez joindre de l'titre.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">
							<div class="wrap-field-form full wrap-select">
								<textarea name="presentation" id="presentation" value="" data-error-contener="div-erreur-champ-presentation" class="mandatory-administrateur">
								</textarea>
								<span id="libelle_reference">Présentation <i class="">*</i></span>
								<div id="div-erreur-champ-presentation" class="message-erreur">
									Veuillez indiquer une description.
								</div>
							</div>

						</div>
						
						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-titre" value="Enregistrer" id="btn-valider-titre" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idtitre" id="idtitre" value="<?php echo $idtitre?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>