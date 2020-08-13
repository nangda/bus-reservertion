<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idquartier"])){
	$idquartier=mysql_real_escape_string  ($_GET["idquartier"]);
	$lequartier=getquartierInformations($idquartier);
}else $idquartier=0; 


 $url_enregistrer="Enregistrer_quartier('".base64_encode('traitement_ajax/traitement_enregistrement_quartier.php')."', '$idquartier')";
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
		<div class="lightbox" id="lightbox-quartier">
			<div class="entete-lightbox">Ajouter un quartier
				<div class="close-lightbox" onClick="Cacher_loader('loader');">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

					</svg>
				</div>
			</div>
			<div class="contenu-lightbox" id="conteneur-quartier">
				<div class="content-form">
					<p class="accroche-lightbox"> Pour ajouter une quartier, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-quartier" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">
							<div class="wrap-field-form middle wrap-select">
							<select name="commune-quartier" id="commune" data-error-contener="div-erreur-champ-commune">
								<option value="" desable selected>Arrondissement</option>
								<?php 
									$query_commune="SELECT * FROM commune  ORDER BY titre ASC";
									$result_commune=mysql_query($query_commune);
									while($commune=mysql_fetch_array($result_commune)){


								 ?>
								<option value="<?php echo $commune[0]?>" <?php if($idquartier!=0 AND $lequartier["idcommune"]==$commune[0])echo"SELECTED";?>><?php echo utf8_encode($commune["titre"])?></option>
								<?php }?>
							</select>
							<div id="div-erreur-champ-commune" class="message-erreur">
								Veuillez choisir une commune.
							</div>
						</div>

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-quartier" id="titre-quartier"
								data-error-contener="div-erreur-champ-titre-quartier" onKeyup="Verif_saisie(event, 'titre-quartier', 'btn-valider-quartier')" class="mandatory-quartier" <?php if($idquartier!=0){?>value="<?php echo utf8_encode($lequartier["titre"])?>"	<?php }?>>
								<span id="libelle_reference">Titre <i class="">*</i></span>
								<div id="div-erreur-champ-titre-quartier" class="message-erreur">
									Veuillez indiquer le nom de la quartier.
								</div>
							</div>
							
						</div>

						<div class="ligne-form">
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-quartier" id="reference-quartier" <?php if($idquartier!=0){?>value="<?php echo utf8_encode($lequartier["reference"])?>"	<?php }?> data-error-contener="div-erreur-champ-reference-quartier" onKeyup="Verif_saisie(event, 'reference-quartier', 'btn-valider-quartier')" class="mandatory-quartier">
								<span id="libelle_reference">R&eacute;f&eacute;rence <i class="">*</i></span>
								<div id="div-erreur-champ-reference-quartier" class="message-erreur">
									Veuillez indiquer la ref&eacute;rence de la quartier.
								</div>
							</div>
							

						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-quartier" value="Enregistrer" id="btn-valider-quartier" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idquartier" id="idquartier" value="<?php echo $idquartier ?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>