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

    <div class="entete-lightbox"> Authentification à deux facteurs</div>

  <div class="contenu-lightbox" id="conteneur-code-lightbox">

    <div class="content-form">

      <p class="accroche-indicateur">Saisissez le code à 04 chiffres que nous venons de vous envoyer par SMS. </p>

     

		<form action="" id="form-validation-code">

						  <div class="wrap-field">

							  <div class="field-form">

								  <input id="code" name="code" placeholder=" " oninput="this.value = this.value.replace(/[^0-9()+. ]/g, '').replace(/(\..*)\./g, '$1');" data-error-contener="div-erreur-champ-code" type="text" onKeyup ="Verif_saisie(event, 'code', 'btn-valider-code')" class="mandatory-code">

								  <label class="libele-form">Code reçu<span class="obligatoire">*</span></label>

								  <div class="message-erreur" id="div-erreur-champ-identifiant" style="display: none;"> Veuillez saisir le code reçu.</div>

							  </div>

						  </div>

						  <div class="checkbox clearfix">

							  <div class="wrap-decompte">J'ai pas reçu de SMS,

								  <a href="javascript:Renvoyer_SMS_connexion_administrateur('<?php echo base64_encode('traitement_ajax/main.php')?>');">renvoyer</a> ou <a href="">nous contacter</a>

							  </div>

						  </div>

						  <div class="form-group">

							  <button type="button" class="btn btn-connexion" id="btn-valider-code" onclick="Valider_code_authentification_a_deux_facteurs('<?php echo base64_encode('traitement_ajax/main.php')?>')">Valider</button>

						  </div>

							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>

							<input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $idadministrateur ?>"/>

							<input type="hidden" name="traitement" id="traitement" value="valider-code-authentification-a-deux-facteurs"/>

					  </form>

      </div>



    </div>

  </div>

</body>

</html>

