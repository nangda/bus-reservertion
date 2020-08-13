

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
  <div class="lightbox" >
    <div class="entete-lightbox">Modifier mon mot de passe
      <div class="close-lightbox" onClick="Cacher_loader('loader');">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

        <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

      </svg>
    </div>
  </div>
  <div class="contenu-lightbox" id="conteneur-creation-compte">
    <div class="content-form">
		<p class="accroche-indicateur"> Pour modifier votre mot de passe, veuillez renseigner le formulaire suivant.</p>
      <form action="" class="form-modif-elt-mail" id="form-modif-pwd">
				<div class="wrap-field">
					  <div class="field-form">
						  <input type="password" required=" " name="mdp" id="pwd" data-error-contener="div-erreur-champ-password-membre" onkeyup="Verif_saisie(event, 'pwd', 'btn-valider')">
						  <label class="libele-form">Ancien Mot de passe</label>
						  <div class="message-erreur" id="div-erreur-champ-password-membre" style="display: none;"> Veuillez saisir un mot de passe valide.</div>
					  </div>
				  </div>
		  
		  <div class="wrap-field">
					  <div class="field-form">
						  <input type="password" required=" " name="mdp" id="pwd" data-error-contener="div-erreur-champ-password-membre" onkeyup="Verif_saisie(event, 'pwd', 'btn-valider')">
						  <label class="libele-form">Nouveau Mot de passe</label>
						  <div class="message-erreur" id="div-erreur-champ-password-membre" style="display: none;"> Veuillez saisir un mot de passe valide.</div>
					  </div>
				  </div>
		  <div class="wrap-field">
					  <div class="field-form">
						  <input type="password" required=" " name="mdp" id="pwd" data-error-contener="div-erreur-champ-password-membre" onkeyup="Verif_saisie(event, 'pwd', 'btn-valider')">
						  <label class="libele-form">Confirmer Mot de passe</label>
						  <div class="message-erreur" id="div-erreur-champ-password-membre" style="display: none;"> Veuillez saisir un mot de passe valide.</div>
					  </div>
				  </div>
			
			

			<div class="ligne-form ligne-btn">
				<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
				<input type="button" id="btn-valider-operation" name="valider-form" class="btn-submit"  value="Enregistrer" onClick="Modifier_pwd('<?php echo base64_encode('traitement_ajax/traitement_enregistrement_modification_pwd.php')?>')">
				<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />     
			</div>		

		  </form>
      </div>

    </div>
  </div>
</body>
</html>


