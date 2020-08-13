<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idville"])){
	$idville=mysql_real_escape_string  ($_GET["idville"]);
	$leville=getvilleInformations($idville);
}else $idville=0; 


 $url_enregistrer="Enregistrer_ville('".base64_encode('traitement_ajax/main.php?traitement=editer-ville')."', '$idville')";
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
		<div class="lightbox" id="lightbox-ville">
			<div class="entete-lightbox">Ajouter un ville
				<div class="close-lightbox" onClick="Cacher_loader('loader');">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

					</svg>
				</div>
			</div>
			<div class="contenu-lightbox" id="conteneur-ville">
				<div class="content-form">
					<p class="accroche-lightbox"> Pour ajouter une ville, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-ville" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-ville" id="titre-ville"
								data-error-contener="div-erreur-champ-titre-ville" onKeyup="Verif_saisie(event, 'titre-ville', 'btn-valider-ville')" class="mandatory-ville" <?php if($idville!=0){?>value="<?php echo ($leville["titre"])?>"	<?php }?>>
								<span id="libelle_reference">Titre <i class="">*</i></span>
								<div id="div-erreur-champ-titre-ville" class="message-erreur">
									Veuillez indiquer le nom de la ville.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-ville" id="reference-ville" <?php if($idville!=0){?>value="<?php echo ($leville["reference"])?>"	<?php }?> data-error-contener="div-erreur-champ-reference-ville" onKeyup="Verif_saisie(event, 'reference-ville', 'btn-valider-ville')" class="mandatory-ville">
								<span id="libelle_reference">R&eacute;f&eacute;rence <i class="">*</i></span>
								<div id="div-erreur-champ-reference-ville" class="message-erreur">
									Veuillez indiquer la ref&eacute;rence de la ville.
								</div>
							</div>
						</div>

						<div class="ligne-form">
							<div class="wrap-field-form middle wrap-select">
							<select name="region-ville" id="region" data-error-contener="div-erreur-champ-region"  class="mandatory-ville">
								<option value="" desable selected>R&eacute;gion</option>
								<?php 
									$query_region="SELECT * FROM region  ORDER BY titre ASC";
									$result_region=mysql_query($query_region);
									while($region=mysql_fetch_array($result_region)){


								 ?>
								<option value="<?php echo $region[0]?>" <?php if($idville!=0 AND $leville["idregion"]==$region[0])echo"SELECTED";?>><?php echo ($region["titre"])?></option>
								<?php }?>
							</select>
							<div id="div-erreur-champ-region" class="message-erreur">
								Veuillez choisir une r&eacute;gion.
							</div>
						</div>
							
							

						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-ville" value="Enregistrer" id="btn-valider-ville" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idville" id="idville" value="<?php echo $idville ?>"/>
							<input type="hidden" name="traitement" id="traitement" value="editer-ville"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>