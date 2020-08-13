<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
?>

<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$LeDossierDemandeurEstIlComplet=LeDossierDemandeurEstIlComplet($iddemandeur);
$url_enregistrer="Notification_enregistrer_cloture_dossier('".base64_encode('traitement_ajax/main.php?traitement=cloturer-dossier')."','$LeDossierDemandeurEstIlComplet')";

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

		<div class="lightbox" id="lightbox-cloture-dossier">

			<div class="entete-lightbox">Cloture du dossier #0
				<?php echo $demandeur[0]?> -
				<?php echo $demandeur["nom"]?>
				<?php echo $demandeur["prenom"]?>

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-cloture-dossier">
				<div class="content-form">
					<form action="" id="form-cloture-dossier" class="form-ajout" enctype="multipart/form-data">
						<div class="ligne-form ">
							<div class="wrap-field-form">
								<input id="credit-accorde" checked name="etat-credit" placeholder=" " data-error-contener="div-erreur-champ-credit-accorde" type="radio" onKeyup="" onClick="$('#motif').html('Message &agrave; envoyer &agrave; <?php echo $demandeur[" nom "]?> <?php echo $demandeur["prenom "]?>');$('#conteneur_montant').show()" value="valide">
								<label class="libele-form" for="credit-accorde">Crédit accordé</label>
							</div>

							<div class="wrap-field-form">
								<input id="credit-refuse" name="etat-credit" placeholder=" " data-error-contener="div-erreur-champ-credit-refuse" type="radio" onClick="$('#motif').html('Veuillez indiquer le motif du refus');$('#conteneur_montant').hide()" value="refuse">
								<label class="libele-form" for="credit-refuse">Crédit refusé</label>
							</div>
						</div>

					  <div class="ligne-form" id="conteneur_montant">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="montant-accorde" id="montant-accorde" data-error-contener="div-erreur-champ-montant-accorde" onKeyup="Verif_saisie(event, 'montant-accorde', 'btn-valider-cloture')" class="mandatory" <?php if($idville!=0){?>value="
								<?php echo ($leville["titre"])?>" <?php }?> oninput="this.value = this.value.replace(/[^0-9()+. ]/g, '').replace(/(\..*)\./g, '$1');">
								<span id="libelle_reference">Montant accordé <i class="">*</i></span>
								<div id="div-erreur-champ-montant-accorde" class="message-erreur">
									Veuillez saisir un montant valide. Au moins 50 000 Fcfa.
								</div>
							</div>

							<div class="wrap-field-form middle wrap-select">
								<select name="duree" id="duree" data-error-contener="div-erreur-champ-duree" class="mandatory">
									<option value="" desable selected>Durée</option>
										<option value="9">09 mois</option>
										<option value="10">10 mois</option>
										<option value="11">11 mois</option>
								</select>
								<div id="div-erreur-champ-duree" class="message-erreur">
									Veuillez indiquer une durée.
								</div>
							</div>
						</div>

						<div class="ligne-form ">
							<div class="wrap-field-form wrap-input">
								<label class="libele-form commentaire" id="motif">Message &agrave; envoyer &agrave; <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?> </label>
								<textarea name="commentaire-traitement" placeholder="votre message ici"  id="commentaire-traitement" cols="30" rows="10" data-error-contener="div-erreur-champ-commentaire" onkeyup="Verif_saisie(event, 'nom-a', 'btn-valider')" style=""> </textarea>
								<div id="div-erreur-champ-commentaire" class="message-erreur">
									Veuillez renseigner ce champs.
								</div>
							</div>
						</div>



						<div class="ligne-form">
							<p style="display: block; padding: 13px 15px; background-color: rgba(227, 123, 3, 0.12); text-align: left; position: relative; margin-bottom: 30px; font-size: 12px">
								<span style="position: absolute; top:-14px; font-size: 18px"><strong>Bon &agrave; savoir</strong></span> En cl&oacute;turant ce dossier, <strong>un message de notification sera imméditament envoy&eacute;</strong> à
								<strong>
									<?php echo $demandeur["nom"]." ".$demandeur["prenom"]?>
								</strong>, pour lui informer de l'acceptation ou du refus du crédit souhaité. <br>Veuillez donc vous rassurer que tout est conforme avant de cliquer sur le bouton "Clôturer le dossier". </p>

							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-album" value="Clôturer le dossier" id="btn-valider-cloture" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="iddemandeur" id="iddemandeur" value="<?php echo $iddemandeur ?>"/>
							<input type="hidden" name="traitement" id="traitement" value="cloturer-dossier"/>
						</div>


					</form>

				</div>

			</div>

		</div>

</body>

</html>