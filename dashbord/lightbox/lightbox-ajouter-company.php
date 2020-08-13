<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");


?>
<?php 
if(isset($_GET["idcompany"])){
	$idcompany=mysql_real_escape_string  ($_GET["idcompany"]);
	$leville=getvilleInformations($idcompany);
}else $idcompany=0; 


 $url_enregistrer="Enregistrer_ville('".base64_encode('traitement_ajax/traitement_enregistrement_ville.php')."', '$idcompany')";
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
			<div class="entete-lightbox">Add a Company
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
					<p class="accroche-lightbox"> Please correctly fill the form to add a company.</p>
					<form action="" id="form-ajout-ville" class="form-ajout" enctype="multipart/form-data">
                      
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="titre-company" id="titre-company"
								data-error-contener="div-erreur-champ-titre-ville" onKeyup="Verif_saisie(event, 'titre-company', 'btn-valider-ville')" class="mandatory-ville" <?php if($idcompany!=0){?>value="<?php echo utf8_encode($leville["titre"])?>"	<?php }?>>
								<span id="libelle_reference">Name <i class="">*</i></span>
								<div id="div-erreur-champ-titre-ville" class="message-erreur">
									Please enter the company's name.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="reference-company" id="reference-company" <?php if($idcompany!=0){?>value="<?php echo utf8_encode($leville["reference"])?>"	<?php }?> data-error-contener="div-erreur-champ-reference-ville" onKeyup="Verif_saisie(event, 'reference-ville', 'btn-valider-ville')" class="mandatory-ville">
								<span id="libelle_reference">Reference <i class="">*</i></span>
								<div id="div-erreur-champ-reference-ville" class="message-erreur">
									Please enter the company's reference.
								</div>
							</div>
						</div>
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="headquater-company" id="headquater-company"
								data-error-contener="div-erreur-champ-titre-ville" onKeyup="Verif_saisie(event, 'headquater-company', 'btn-valider-ville')" class="mandatory-ville" <?php if($idcompany!=0){?>value="<?php echo utf8_encode($leville["headquater"])?>"	<?php }?>>
								<span id="libelle_reference">Headquater <i class="">*</i></span>
								<div id="div-erreur-champ-titre-ville" class="message-erreur">
									Please enter the company's Headquater.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="file" name="logo-company" id="logo-company" <?php if($idcompany!=0){?>value="<?php echo utf8_encode($leville["logo"])?>"	<?php }?> data-error-contener="div-erreur-champ-reference-ville" onKeyup="Verif_saisie(event, 'logo-ville', 'btn-valider-ville')" class="mandatory-ville">
								<!-- <span id="libelle_reference">Reference <i class="">*</i></span> -->
								<div id="div-erreur-champ-reference-ville" class="message-erreur">
									Please enter the company's logo.
								</div>
							</div>
						</div>
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<input placeholder=" " type="text" name="contact-company" id="contact-company"
								data-error-contener="div-erreur-champ-titre-ville" onKeyup="Verif_saisie(event, 'contact-company', 'btn-valider-ville')" class="mandatory-ville" <?php if($idcompany!=0){?>value="<?php echo utf8_encode($leville["contact"])?>"	<?php }?>>
								<span id="libelle_reference">Phone Number <i class="">*</i></span>
								<div id="div-erreur-champ-titre-ville" class="message-erreur">
									Please enter the company's contact.
								</div>
							</div>
							
							<div class="wrap-field-form middle">
								<input placeholder=" " type="email" name="email-company" id="email-company" <?php if($idcompany!=0){?>value="<?php echo utf8_encode($leville["reference"])?>"	<?php }?> data-error-contener="div-erreur-champ-reference-ville" onKeyup="Verif_saisie(event, 'reference-ville', 'btn-valider-ville')" class="mandatory-ville">
								<span id="libelle_reference">email<i class="">*</i></span>
								<div id="div-erreur-champ-reference-ville" class="message-erreur">company
									Please enter the company's email address.
								</div>
							</div>
						</div>

						<!-- <div class="ligne-form">
							<div class="wrap-field-form middle wrap-select">
							<select name="province-ville" id="province" data-error-contener="div-erreur-champ-province"  class="mandatory-ville">
								<option value="" desable selected>Province</option>
								<?php 
									$query_province="SELECT * FROM province  ORDER BY titre ASC";
									$result_province=mysql_query($query_province);
									while($province=mysql_fetch_array($result_province)){


								 ?>
								<option value="<?php echo $province[0]?>" <?php if($idcompany!=0 AND $leville["idprovince"]==$province[0])echo"SELECTED";?>><?php echo utf8_encode($province["titre"])?></option>
								<?php }?>
							</select>
							<div id="div-erreur-champ-province" class="message-erreur">
								Veuillez choisir une province.
							</div>
						</div> -->
							
							

						</div>


						<div class="ligne-form ligne-btn">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							<input type="button" name="btn-valider-ville" value="Enregistrer" id="btn-valider-ville" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
							<input type="hidden" name="idcompany" id="idcompany" value="<?php echo $idcompany ?>"/>
						</div>

					</form>
				</div>

			</div>
		</div>
</body>
</html>