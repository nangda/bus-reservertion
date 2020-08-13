<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["iddepartement"])){
	$iddepartement=mysql_real_escape_string  ($_GET["iddepartement"]);
	$ledepartement=getdepartementInformations($iddepartement);
}else $iddepartement=0; 


 $url_enregistrer="Enregistrer_departement('".base64_encode('traitement_ajax/traitement_enregistrement_departement.php')."', '$iddepartement')";
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
		<div class="lightbox" id="lightbox-departement">
			<div class="entete-lightbox">Ajouter un departement
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
					<p class="accroche-lightbox"> Pour ajouter une departement, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>
					<form action="" id="form-ajout-departement" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-departement" id="titre-departement"
								data-error-contener="div-erreur-champ-titre-departement" onKeyup="Verif_saisie(event, 'titre-departement', 'btn-valider-departement')" class="mandatory-departement" <?php if($iddepartement!=0){?>value="<?php echo utf8_encode($ledepartement["titre"])?>"	<?php }?>>
								<span id="libelle_reference">Titre <i class="">*</i></span>
								<div id="div-erreur-champ-titre-departement" class="message-erreur">
									Veuillez indiquer le nom de la departement.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-departement" id="reference-departement" <?php if($iddepartement!=0){?>value="<?php echo utf8_encode($ledepartement["reference"])?>"	<?php }?> data-error-contener="div-erreur-champ-reference-departement" onKeyup="Verif_saisie(event, 'reference-departement', 'btn-valider-departement')" class="mandatory-departement">
								<span id="libelle_reference">R&eacute;f&eacute;rence <i class="">*</i></span>
								<div id="div-erreur-champ-reference-departement" class="message-erreur">
									Veuillez indiquer la ref&eacute;rence de la departement.
								</div>
							</div>
						</div>

						<div class="ligne-form">
							<div class="wrap-field-form middle wrap-select">
							<select name="province" id="province" data-error-contener="div-erreur-champ-province"  class="mandatory-departement">
								<option value="" desable selected>Province</option>
								<?php 
									$query_province="SELECT * FROM province  ORDER BY titre ASC";
									$result_province=mysql_query($query_province);
									while($province=mysql_fetch_array($result_province)){


								 ?>
								<option value="<?php echo $province[0]?>" <?php if($iddepartement!=0 AND $ledepartement["idprovince"]==$province[0])echo"SELECTED";?>><?php echo $province["titre"]?></option>
								<?php }?>
							</select>
							<div id="div-erreur-champ-province" class="message-erreur">
								Veuillez choisir une province.
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
							<input type="button" name="btn-valider-departement" value="Enregistrer" id="btn-valider-departement" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="iddepartement" id="iddepartement" value="<?php echo $iddepartement ?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>