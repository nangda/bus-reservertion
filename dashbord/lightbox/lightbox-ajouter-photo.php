<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idalbum"])){
	$idalbum=mysql_real_escape_string  ($_GET["idalbum"]);
	$lalbum=getalbumInformations($idalbum);
}else $idalbum=0; 


 $url_enregistrer="Enregistrer_album('".base64_encode('traitement_ajax/traitement_enregistrement_album.php')."', '$idalbum')";
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
			<div class="entete-lightbox">Ajouter un album
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
					<p class="accroche-lightbox"> Pour ajouter un album, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-album" class="form-ajout" enctype="multipart/form-data">
                      	
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nom-p" id="nom-p"
								data-error-contener="div-erreur-champ-nom-p" onKeyup="Verif_saisie(event, 'nom-a', 'btn-valider-album')" class="mandatory-album" <?php if($idalbum!=0){?>value="<?php echo utf8_encode($lalbum["nom-p"])?>"<?php }?>>
								<span id="libelle_reference">Nom de la photo<i class="">*</i></span>
								<div id="div-erreur-champ-nom-p" class="message-erreur">
									Veuillez indiquer le nom de la photo'.
								</div>
							</div>
							
							<div class="wrap-field-form middle wrap-select">
								<select name="album" id="album" data-error-contener="div-erreur-champ-album" class="mandatory-administrateur">
									<option value="" desable selected>Album</option>
									<option value="M." <?php if($idadministrateur!=0 AND $ladministrateur["album"]=="M.") echo "SELECTED"?>>Homme </option>
									<option value="Mme." <?php if($idadministrateur!=0 AND $ladministrateur["album"]=="Mme.") echo "SELECTED"?>>Femme</option>
								</select>
								<div id="div-erreur-champ-album" class="message-erreur">
									Veuillez choisir un album.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">
							
							<div class="wrap-field-form ">
								<input placeholder=" " type="file" name="photo" id="photo"
								data-error-contener="div-erreur-champ-pasword" onKeyup="Verif_saisie(event, 'photo', 'btn-valider-album')" class="mandatory-album" <?php if($idalbum!=0){?>value="<?php echo utf8_encode(base64_decode($lalbum["pwd"]))?>"<?php }?>>
								<span id="libelle_reference">Apercu photo<i class="">*</i></span>
								<div id="div-erreur-champ-photo" class="message-erreur">
									Veuillez joindre une photo.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">
							<div class="wrap-field-form full wrap-select">
								<textarea name="commentaire" id="commentaire" value="" data-error-contener="div-erreur-champ-commentaire" class="mandatory-administrateur">
								</textarea>
								<span id="libelle_reference">Commentaire <i class="">*</i></span>
								<div id="div-erreur-champ-commentaire" class="message-erreur">
									Veuillez indiquer un commentaire.
								</div>
							</div>

						</div>
						
						
						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-album" value="Enregistrer" id="btn-valider-album" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idalbum" id="idalbum" value="<?php echo $idalbum?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>