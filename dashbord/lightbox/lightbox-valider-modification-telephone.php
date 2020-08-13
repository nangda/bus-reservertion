<?php

@session_start();

include("../connectionbd.php");

include("../mesfonctions.php");



?>

<?php 



	$idadministrateur=mysql_real_escape_string  ($_GET["idadministrateur"]);

	$administrateur=getadministrateurInformations($idadministrateur);

   

?>



<!doctype html>

<html>

<head>

  <meta charset="utf-8">

  <title>Document sans titre</title>

</head>

<body>

 <link rel="stylesheet" type="text/css" href="css/lightbox.css"> 

 <div class="conteneur-lightbox">

  <div class="lightbox" id="lightbox-valider-code">

    <div class="entete-lightbox"> 
         validation
     <div class="close-lightbox" onClick="Cacher_loader('loader');"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

	<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
		C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
		l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

</svg></div>      
         
         </div>

  <div class="contenu-lightbox" id="conteneur-code-lightbox">

    <div class="content-form">

      <p class="accroche-indicateur">Saisissez le code à 04 chiffres que nous venons de vous envoyer par SMS. </p>

     

		<form action="" id="form-validation-code" onSubmit="return false">

						  <div class="wrap-field">

							  <div class="field-form">

								  <input id="code" name="code" placeholder=" " oninput="this.value = this.value.replace(/[^0-9()+. ]/g, '').replace(/(\..*)\./g, '$1');" data-error-contener="div-erreur-champ-code" type="text" onKeyup ="Verif_saisie(event, 'code', 'btn-valider-code')" class="mandatory-code">

								  <label class="libele-form">Code reçu<span class="obligatoire">*</span></label>

								  <div class="message-erreur" id="div-erreur-champ-identifiant" style="display: none;"> Veuillez saisir le code reçu.</div>

							  </div>

						  </div>

						  <div class="checkbox clearfix">

							  <!--<div class="wrap-decompte">J'ai pas reçu de SMS,

								  <a href="javascript:Renvoyer_SMS_connexion_administrateur('<?php echo base64_encode('traitement_ajax/main.php')?>');">renvoyer</a> ou <a href="javascript:gotoURL('./contacter-bicec-cresco/','loader')">nous contacter</a>

							  </div>-->

						  </div>

						  <div class="form-group">

							  <button type="button" class="btn btn-connexion" id="btn-valider-code" onclick="Valider_code_authentification_modif_telephone('<?php echo base64_encode('traitement_ajax/main.php')?>')">Valider</button>

						  </div>

							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>

							<input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $idadministrateur ?>"/>

							<input type="hidden" name="traitement" id="traitement" value="valider-code-modification-telephone"/>

					  </form>

      </div>



    </div>

  </div>

</body>

</html>

