 <?php 
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>

<style>
	
	.close-lightbox path {
		fill: rgba(0,0,0,0.5);
}

.close-lightbox{
	background:#FFFFFF
}
	
		
</style>
 <link rel="stylesheet" type="text/css" href="../css/lightbox.css"> 
</head>
<body>
<div class="conteneur-lightbox">
	<div class="lightbox">
	  <div class="entete-lightbox"> Mot de passse oublié?
	    <div class="close-lightbox" onClick="Cacher_loader('loader');"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

	<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
		C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
		l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

</svg></div>
	  </div>
        <div class="contenu-lightbox" id="conteneur-connexion-lightbox">
			  <p class="accroche-indicateur">
				Vous avez oubli&eacute; votre mot de passe?
				Reneignez votre adresse e-mail d'identification.
			  </p>
			 <form id="forget-pass-form" action="" method="post"> 
                
				 <div class="wrap-field">
					  <div class="field-form">
						  <input id="email" name="email" placeholder=" "  data-error-contener="div-erreur-champ-email" type="text" onKeyup ="Verif_saisie_identification(event,'email')">
						  <label class="libele-form">Téléphone ou Email<span class="obligatoire">*</span></label>
						  <div class="message-erreur" id="div-erreur-champ-email" style="display: none;"> Veuillez saisir lune adresse mail ou un numéro de téléphone.</div>
					  </div>
				  </div>
                
                <div class="conteneur-btn-lightbox">
                <button value="Se connecter" type="button" onClick="Affichage_contenuLightBox64('<?php echo base64_encode('lightbox/lightbox-valider-code.php')?>','loader');" class="btn btn-connexion" id="btn-valider">Envoyer</button>     
            <!--     <a href="javascript:Cacher_loader('loader');" class="btn-lightbox-reservation" id="btn-payer-plus-tard">Payer plus tard</a>    
             -->  </div>
            </form>
              </div>
	</div>
</div>

</body>
</html>