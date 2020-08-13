<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idadministrateur"])){
	$idadministrateur=mysql_real_escape_string  ($_GET["idadministrateur"]);
	$ladministrateur=getadministrateurInformations($idadministrateur);
}else $idadministrateur=0; 


 $url_enregistrer="Enregistrer_administrateur('".base64_encode('traitement_ajax/traitement_enregistrement_administrateur.php')."', '$idadministrateur')";
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
		<div class="lightbox" id="lightbox-utilisation">
			<div class="entete-lightbox">Ajouter un utilisateur
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
					<p class="accroche-lightbox"> Pour ajouter un utilisateur, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-utilisateur" class="form-ajout" enctype="multipart/form-data">
                      	
						
						

						<div class="ligne-form">
							<div class="wrap-field-form full wrap-select">
							<select name="civilite" id="civilite" data-error-contener="div-erreur-champ-civilite" class="mandatory-administrateur">
								<option value="" desable selected>Civilit&eacute;</option>
							  	<option value="M." <?php if($idadministrateur!=0 AND $ladministrateur["civilite"]=="M.") echo "SELECTED"?>>Homme </option>
							  	<option value="Mme." <?php if($idadministrateur!=0 AND $ladministrateur["civilite"]=="Mme.") echo "SELECTED"?>>Femme</option>
							</select>
							<div id="div-erreur-champ-civilite" class="message-erreur">
								Veuillez choisir une civilit&eacute;.
							</div>
						</div>

						</div>
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="nom" id="nom"
								data-error-contener="div-erreur-champ-nom" onKeyup="Verif_saisie(event, 'nom', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode($ladministrateur["nom"])?>"<?php }?>>
								<span id="libelle_reference">Nom <i class="">*</i></span>
								<div id="div-erreur-champ-nom" class="message-erreur">
									Veuillez indiquer le nom de l'utilisateur.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="prenom" id="prenom"
								data-error-contener="div-erreur-champ-prenom" onKeyup="Verif_saisie(event, 'prenom', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode($ladministrateur["prenom"])?>"<?php }?>>
								<span id="libelle_reference">Pr&eacute;nom <i class="">*</i></span>
								<div id="div-erreur-champ-prenom" class="message-erreur">
									Veuillez indiquer le pr&eacute;nom de l'utilisateur.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="telephone" id="telephone"
								data-error-contener="div-erreur-champ-telephone" onKeyup="Verif_saisie(event, 'telephone', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode($ladministrateur["telephone"])?>"<?php }?>>
								<span id="libelle_reference">T&eacute;l&eacute;phone <i class="">*</i></span>
								<div id="div-erreur-champ-telephone" class="message-erreur">
									Veuillez indiquer le t&eacute;l&eacute;phone de l'utilisateur.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="fonction" id="fonction"
								data-error-contener="div-erreur-champ-fonction" onKeyup="Verif_saisie(event, 'fonction', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode($ladministrateur["fonction"])?>"<?php }?>>
								<span id="libelle_reference">Fonction <i class="">*</i></span>
								<div id="div-erreur-champ-fonction" class="message-erreur">
									Veuillez indiquer la fonction de l'utilisateur.
								</div>
							</div>
						</div>
						
						
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="email" name="email" id="email"
								data-error-contener="div-erreur-champ-email" onKeyup="Verif_saisie(event, 'telephone', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode($ladministrateur["email"])?>"<?php }?>>
								<span id="libelle_reference">E-mail <i class="">*</i></span>
								<div id="div-erreur-champ-email" class="message-erreur">
									Veuillez indiquer l'adrese e-mail de l'utilisateur.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="password" name="password" id="password"
								data-error-contener="div-erreur-champ-pasword" onKeyup="Verif_saisie(event, 'password', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode(base64_decode($ladministrateur["pwd"]))?>"<?php }?>>
								<span id="libelle_reference">Mot de passe <i class="">*</i></span>
								<div id="div-erreur-champ-pasword" class="message-erreur">
									Veuillez indiquer le mot de passe de l'utilisateur.
								</div>
							</div>
						</div>
						
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="date" name="date_debut" id="date_debut"
								data-error-contener="div-erreur-champ-date_debut" onKeyup="Verif_saisie(event, 'date_debut', 'btn-valider-utilisateur')" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode(str_replace('/', '-', $ladministrateur["date_debut"]))?>"<?php }?>>
								<span id="libelle_reference">P&eacute;riode de validit&eacute; du <i class="">*</i></span>
								<div id="div-erreur-champ-date_debut" class="message-erreur">
									Veuillez indiquer la date de d&eacute;but de validit&eacute; de l'utilisateur.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="date" name="date_fin" id="date_fin"
								data-error-contener="div-erreur-champ-date_fin" onKeyup="Verif_saisie(event, 'date_fin', 'btn-valider-utilisateur')" <?php if($idadministrateur!=0){?>value="<?php echo utf8_encode(str_replace('/', '-', $ladministrateur["date_fin"]))?>"<?php }?>>
								<span id="libelle_reference">Au <i class="">*</i></span>
								<div id="div-erreur-champ-date_fin" class="message-erreur">
									Veuillez indiquer la date de fin de validit&eacute; de l'utilisateur.
								</div>
							</div>
						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-utilisateur" value="Enregistrer" id="btn-valider-utilisateur" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $idadministrateur?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>