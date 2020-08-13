<?php

@session_start();

include("../connectionbd.php");

include("../mesfonctions.php");





?>

<?php 

if(isset($_GET["idagence"])){

	$idagence=mysql_real_escape_string  ($_GET["idagence"]);

	$laagence=getagenceInformations($idagence);

}else $idagence=0; 





 $url_enregistrer="Enregistrer_agence('".base64_encode('traitement_ajax/main.php?traitement=editer-agence')."', '$idagence')";

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

		<div class="lightbox" id="lightbox-region">

			<div class="entete-lightbox">Ajouter une agence

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">



						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306

        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3

        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>



					</svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-region">

				<div class="content-form">

					<p class="accroche-lightbox"> Pour ajouter une agence, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>

					<form action="" id="form-ajout-agence" class="form-ajout" enctype="multipart/form-data">

                      

						<div class="ligne-form">

							<div class="wrap-field-form middle wrap-select">

								<select name="region-agence" id="region-agence" data-error-contener="div-erreur-champ-region" class="search-select mandatory-agence" onChange="Select_ville_agence('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-ville-agence")?>','<?php echo $_SESSION["token"]?>')">

									<option value="" desable selected>R&eacute;gion</option>

								<?php 

									$query_region="SELECT * FROM region  ORDER BY titre ASC";

									$result_region=mysql_query($query_region);

									while($region=mysql_fetch_array($result_region)){





								 ?>

								<option value="<?php echo $region[0]?>" <?php if($idagence!=0 AND $laagence["idregion"]==$region[0])echo"SELECTED";?>><?php echo utf8_encode($region["titre"])?></option>

								<?php }?>

								</select>

								<div id="div-erreur-champ-region" class="message-erreur">

									Veuillez choisir une r&eacute;gion.

								</div>

							</div>							

							<div class="wrap-field-form middle wrap-select">

								<select name="ville-agence" id="ville-agence" data-error-contener="div-erreur-champ-ville" class="search-select mandatory-agence" >

									<option value="" desable selected>Ville</option>

								<?php 

								  if($idagence!=0){

									$query_ville="SELECT * FROM ville WHERE idregion='".$laagence["idregion"]."'  ORDER BY titre ASC";

									$result_ville=mysql_query($query_ville);

									while($region=mysql_fetch_array($result_ville)){

								 ?>

									<option value="<?php echo $region[0]?>" <?php if($idagence!=0 AND $laagence["idville"]==$ville[0])echo"SELECTED";?>><?php echo utf8_encode($region["titre"])?></option>

									<?php }?>

								<?php }?>

								</select>

								<div id="div-erreur-champ-ville" class="message-erreur">

									Veuillez choisir une ville.

								</div>

							</div>							



							

						</div>



						<div class="ligne-form">

							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="titre-agence" id="titre-agence"

								data-error-contener="div-erreur-champ-titre-agence" onKeyup="Verif_saisie(event, 'titre-agence', 'btn-valider-agence')" class="mandatory-agence" <?php if($idagence!=0){?>value="<?php echo utf8_encode($laagence["titre"])?>" <?php }?>>

								<span id="libelle_reference">Titre <i class="">*</i></span>

								<div id="div-erreur-champ-titre-agence" class="message-erreur">

									Veuillez indiquer le nom de la agence.

								</div>

							</div>

							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="reference-agence" id="reference-agence" <?php if($idagence!=0){?>value="<?php echo utf8_encode($laagence["reference"])?>" <?php }?> data-error-contener="div-erreur-champ-reference-agence" onKeyup="Verif_saisie(event, 'reference-agence', 'btn-valider-agence')" class="mandatory-agence">

								<span id="libelle_reference">R&eacute;f&eacute;rence <i class="">*</i></span>

								<div id="div-erreur-champ-reference-agence" class="message-erreur">

									Veuillez indiquer la ref&eacute;rence de la agence.

								</div>

							</div>

							

							



						</div>

						<div class="ligne-form">

							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="telephone-agence" id="telephone-agence"

								data-error-contener="div-erreur-champ-telephone-agence" onKeyup="Verif_saisie(event, 'titre-telephone', 'btn-valider-agence')" class="mandatory-agence" <?php if($idagence!=0){?>value="<?php echo utf8_encode($laagence["telephone"])?>" <?php }?>>

								<span id="libelle_reference">T&eacute;l&eacute;phone <i class="">*</i></span>

								<div id="div-erreur-champ-titre-agence" class="message-erreur">

									Veuillez indiquer le telephone l'agence.

								</div>

							</div>

							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="email-agence" id="email-agence" <?php if($idagence!=0){?>value="<?php echo utf8_encode($laagence["email"])?>" <?php }?> data-error-contener="div-erreur-champ-email-agence" onKeyup="Verif_saisie(event, 'email-agence', 'btn-valider-agence')" class="mandatory-agence">

								<span id="libelle_reference">Email <i class="">*</i></span>

								<div id="div-erreur-champ-email-agence" class="message-erreur">

									Veuillez indiquer l'email de l'agence.

								</div>

							</div>

							

							



						</div>

						





						<div class="ligne-form ligne-btn">

							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">

							<input type="button" name="btn-valider-agence" value="Enregistrer" id="btn-valider-agence" class="btn-submit" onClick="<?php echo $url_enregistrer?>">

							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>

							<input type="hidden" name="idagence" id="idagence" value="<?php echo $idagence ?>"/>

							<input type="hidden" name="traitement" id="traitement" value="editer-agence"/>

						</div>



					</form>

				</div>



			</div>

		</div>

</body>

</html>