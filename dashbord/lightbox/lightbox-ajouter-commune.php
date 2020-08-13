<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idcommune"])){
	$idcommune=mysql_real_escape_string  ($_GET["idcommune"]);
	$lacommune=getcommuneInformations($idcommune);
}else $idcommune=0; 


 $url_enregistrer="Enregistrer_commune('".base64_encode('traitement_ajax/traitement_enregistrement_commune.php')."', '$idcommune')";
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
		<div class="lightbox" id="lightbox-departement">
			<div class="entete-lightbox">Ajouter une commune
				<div class="close-lightbox" onClick="Cacher_loader('loader');">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

					</svg>
				</div>
			</div>
			<div class="contenu-lightbox" id="conteneur-departement">
				<div class="content-form">
					<p class="accroche-lightbox"> Pour ajouter une commune, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-commune" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">
							<div class="wrap-field-form middle wrap-select">
								<select name="departement-commune" id="departement" data-error-contener="div-erreur-champ-departement" class="search-select">
									<option value="" desable selected>D&eacute;partement</option>
								<?php 
									$query_departement="SELECT * FROM departement  ORDER BY titre ASC";
									$result_departement=mysql_query($query_departement);
									while($departement=mysql_fetch_array($result_departement)){


								 ?>
								<option value="<?php echo $departement[0]?>" <?php if($idcommune!=0 AND $lacommune["iddepartement"]==$departement[0])echo"SELECTED";?>><?php echo utf8_encode($departement["titre"])?></option>
								<?php }?>
								</select>
								<div id="div-erreur-champ-departement" class="message-erreur">
									Veuillez choisir un d&eacute;partement.
								</div>
							</div>							

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-commune" id="titre-commune"
								data-error-contener="div-erreur-champ-titre-commune" onKeyup="Verif_saisie(event, 'titre-commune', 'btn-valider-commune')" class="mandatory-commune" <?php if($idcommune!=0){?>value="<?php echo utf8_encode($lacommune["titre"])?>" <?php }?>>
								<span id="libelle_reference">Titre <i class="">*</i></span>
								<div id="div-erreur-champ-titre-commune" class="message-erreur">
									Veuillez indiquer le nom de la commune.
								</div>
							</div>
							
						</div>

						<div class="ligne-form">
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-commune" id="reference-commune" <?php if($idcommune!=0){?>value="<?php echo utf8_encode($lacommune["reference"])?>" <?php }?> data-error-contener="div-erreur-champ-reference-commune" onKeyup="Verif_saisie(event, 'reference-commune', 'btn-valider-commune')" class="mandatory-commune">
								<span id="libelle_reference">R&eacute;f&eacute;rence <i class="">*</i></span>
								<div id="div-erreur-champ-reference-commune" class="message-erreur">
									Veuillez indiquer la ref&eacute;rence de la commune.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="color" name="couleur" id="couleur" class="datepicker-here date-cotisation mandatory-departement" data-error-contener="div-erreur-champ-couleur" >
								<span>Code couleur <i class="">*</i></span>
								<div id="div-erreur-champ-couleur" class="message-erreur">
									Veuillez choisir une couleur.
								</div>
							</div>

						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-commune" value="Enregistrer" id="btn-valider-commune" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idcommune" id="idcommune" value="<?php echo $idcommune ?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>