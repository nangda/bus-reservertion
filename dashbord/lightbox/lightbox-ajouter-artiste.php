<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idartiste"])){
	$idartiste=mysql_real_escape_string  ($_GET["idartiste"]);
	$lartiste=getartisteInformations($idartiste);
}else $idartiste=0; 


 $url_enregistrer="Enregistrer_artiste('".base64_encode('traitement_ajax/traitement_enregistrement_artiste.php')."', '$idartiste')";
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
			<div class="entete-lightbox">Ajouter un artiste
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
					<p class="accroche-lightbox"> Pour ajouter un artiste, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-artiste" class="form-ajout" enctype="multipart/form-data">
                      	
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nom-a" id="nom-a"
								data-error-contener="div-erreur-champ-nom-a" onKeyup="Verif_saisie(event, 'nom-a', 'btn-valider-artiste')" class="mandatory-artiste" <?php if($idartiste!=0){?>value="<?php echo utf8_encode($lartiste["nom-a"])?>"<?php }?>>
								<span id="libelle_reference">Nom d'artiste<i class="">*</i></span>
								<div id="div-erreur-champ-nom-a" class="message-erreur">
									Veuillez indiquer le nom d'artiste'.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nationalite" id="nationalite"
								data-error-contener="div-erreur-champ-nationalite" onKeyup="Verif_saisie(event, 'nationalite', 'btn-valider-artiste')" class="mandatory-artiste" <?php if($idartiste!=0){?>value="<?php echo utf8_encode($lartiste["nationalite"])?>"<?php }?>>
								<span id="libelle_reference">Nationalité <i class="">*</i></span>
								<div id="div-erreur-champ-nationalite" class="message-erreur">
									Veuillez indiquer la nationalite.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="telephone" id="telephone"
								data-error-contener="div-erreur-champ-telephone" onKeyup="Verif_saisie(event, 'telephone', 'btn-valider-artiste')" class="mandatory-artiste" <?php if($idartiste!=0){?>value="<?php echo utf8_encode($lartiste["telephone"])?>"<?php }?>>
								<span id="libelle_reference">Téléphone <i class="">*</i></span>
								<div id="div-erreur-champ-telephone" class="message-erreur">
									Veuillez indiquer le téléphone de l'artiste.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="email" name="email" id="email"
								data-error-contener="div-erreur-champ-email" onKeyup="Verif_saisie(event, 'telephone', 'btn-valider-artiste')" class="mandatory-artiste" <?php if($idartiste!=0){?>value="<?php echo utf8_encode($lartiste["email"])?>"<?php }?>>
								<span id="libelle_reference">E-mail <i class="">*</i></span>
								<div id="div-erreur-champ-email" class="message-erreur">
									Veuillez indiquer l'adrese e-mail de l'artiste.
								</div>
							</div>
						</div>
						
						
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="nom" name="nom" id="nom"
								data-error-contener="div-erreur-champ-nom" onKeyup="Verif_saisie(event, 'nom', 'btn-valider-artiste')" class="mandatory-artiste" <?php if($idartiste!=0){?>value="<?php echo utf8_encode($lartiste["nom"])?>"<?php }?>>
								<span id="libelle_reference">Nom & prénom <i class="">*</i></span>
								<div id="div-erreur-champ-nom" class="message-erreur">
									Veuillez indiquer le nom de l'artiste.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="file" name="photo" id="photo"
								data-error-contener="div-erreur-champ-pasword" onKeyup="Verif_saisie(event, 'photo', 'btn-valider-artiste')" class="mandatory-artiste" <?php if($idartiste!=0){?>value="<?php echo utf8_encode(base64_decode($lartiste["pwd"]))?>"<?php }?>>
								<span id="libelle_reference">Photo portrait<i class="">*</i></span>
								<div id="div-erreur-champ-photo" class="message-erreur">
									Veuillez joindre de l'artiste.
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
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="date" name="site" id="site"
								data-error-contener="div-erreur-champ-site" onKeyup="Verif_saisie(event, 'site', 'btn-valider-artiste')" <?php if($idartiste!=0){?>value="<?php echo utf8_encode(str_replace('/', '-', $lartiste["site"]))?>"<?php }?>>
								<span id="libelle_reference">Site web </span>
								<div id="div-erreur-champ-site" class="message-erreur">
									
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="date" name="twitter" id="twitter"
								data-error-contener="div-erreur-champ-twitter" onKeyup="Verif_saisie(event, 'twitter', 'btn-valider-artiste')" <?php if($idartiste!=0){?>value="<?php echo utf8_encode(str_replace('/', '-', $lartiste["twitter"]))?>"<?php }?>>
								<span id="libelle_reference">Twitter </span>
								<div id="div-erreur-champ-twitter" class="message-erreur">
									
								</div>
							</div>
						</div>
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="date" name="facebook" id="facebook"
								data-error-contener="div-erreur-champ-facebook" onKeyup="Verif_saisie(event, 'facebook', 'btn-valider-artiste')" <?php if($idartiste!=0){?>value="<?php echo utf8_encode(str_replace('/', '-', $lartiste["facebook"]))?>"<?php }?>>
								<span id="libelle_reference">Facebook </span>
								<div id="div-erreur-champ-facebook" class="message-erreur">
									
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="date" name="instagram" id="instagram"
								data-error-contener="div-erreur-champ-instagram" onKeyup="Verif_saisie(event, 'instagram', 'btn-valider-artiste')" <?php if($idartiste!=0){?>value="<?php echo utf8_encode(str_replace('/', '-', $lartiste["instagram"]))?>"<?php }?>>
								<span id="libelle_reference">Twitter </span>
								<div id="div-erreur-champ-instagram" class="message-erreur">
									
								</div>
							</div>
						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-artiste" value="Enregistrer" id="btn-valider-artiste" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idartiste" id="idartiste" value="<?php echo $idartiste?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>