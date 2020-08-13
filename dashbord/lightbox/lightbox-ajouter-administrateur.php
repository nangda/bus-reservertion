<?php

@session_start();

include("../connectionbd.php");

include("../mesfonctions.php");





?>

<?php 

if(isset($_GET["idadministrateur"])){

	$idadministrateur=mysql_real_escape_string  ($_GET["idadministrateur"]);

	$ladministrateur=getadministrateurInformations($idadministrateur);

	$laville=getvilleInformations($ladministrateur["idville"]);

}else $idadministrateur=0; 





 $url_enregistrer="Enregistrer_administrateur('".base64_encode('traitement_ajax/main.php?editer-administrateur')."', '$idadministrateur')";

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

		<div class="lightbox" id="lightbox-utilisation">

			<div class="entete-lightbox">Ajouter un utilisateur

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">



						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306

        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3

        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>



					</svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-utilisation">

				<div class="content-form">

					<p class="accroche-lightbox"> Pour ajouter un utilisateur, vous devez renseigner soigneuseument le formulaire ci-dessous.</p>

					<form action="" id="form-ajout-utilisateur" class="form-ajout" enctype="multipart/form-data">

                      	

						

						



						

						<div class="ligne-form">



							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="nom" id="nom"

								data-error-contener="div-erreur-champ-nom" onKeyup="Verif_saisie(event, 'nom', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo ($ladministrateur["nom"])?>"<?php }?>>

								<span id="libelle_reference">Nom <i class="">*</i></span>

								<div id="div-erreur-champ-nom" class="message-erreur">

									Veuillez indiquer le nom de l'utilisateur.

								</div>

							</div>

							

							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="prenom" id="prenom"

								data-error-contener="div-erreur-champ-prenom" onKeyup="Verif_saisie(event, 'prenom', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo ($ladministrateur["prenom"])?>"<?php }?>>

								<span id="libelle_reference">Prénom <i class="">*</i></span>

								<div id="div-erreur-champ-prenom" class="message-erreur">

									Veuillez indiquer le prénom de l'utilisateur.

								</div>

							</div>

						</div>

						

						<div class="ligne-form">

							<div class="wrap-field-form middle wrap-select">

								<select name="agence" id="agence" data-error-contener="div-erreur-champ-agence" class="search-select mandatory-administrateur" >

									<option value="" desable selected>Agence d'affectation</option>

								   <?php 
									$query_region="SELECT * FROM region WHERE etat='1' AND idregion IN (SELECT idregion FROM agence WHERE etat='1' ) ORDER BY reference ASC;";
									$result_region=mysql_query($query_region);
									while($region=mysql_fetch_array($result_region)){
								  ?>
									 <optgroup label="<?php echo $region["titre"]?>">
									   <?php 
										$query_agence="SELECT * FROM agence WHERE etat='1' AND idregion ='$region[0]'  ORDER BY titre ASC;";
										$result_agence=mysql_query($query_agence);
										while($agence=mysql_fetch_array($result_agence)){
											if($ladministrateur["idagence"]==$agence[0])$selected ="SELECTED";
											else $selected="";
									  ?>
									  <option value="<?php echo $agence[0]?>" data-code="<?php echo $agence["reference"]?>" <?php echo $selected?>><?php echo $agence["titre"]?></option>
									  <?php }?>
									  </optgroup>
								  <?php }?>

								</select>

								<div id="div-erreur-champ-agence" class="message-erreur">

									Veuillez choisir une agence.

								</div>

							</div>							



							<div class="wrap-field-form middle">

								<select name="fonction" id="fonction" data-error-contener="div-erreur-champ-fonction" class="search-select mandatory-administrateur" >
							     	<option value="" desable selected>Profil</option>
							     	<option value="Administrateur" <?php if($idadministrateur!=0 AND $ladministrateur["fonction"]=="Administrateur"){?>SELECTED<?php }?>>Administrateur</option>
							     	<option value="Charge_daccueil" <?php if($idadministrateur!=0 AND $ladministrateur["fonction"]=="Charge_daccueil"){?>SELECTED<?php }?>>Chargé(e) d'accueil en agence</option>
							     	<option value="Gestionnaire" <?php if($idadministrateur!=0 AND $ladministrateur["fonction"]=="Gestionnaire"){?>SELECTED<?php }?>>Gestionnaire en agence</option>
							     	<option value="Invite" <?php if($idadministrateur!=0 AND $ladministrateur["fonction"]=="Invite"){?>SELECTED<?php }?>>Invit&eacute;</option>
								</select>

								<div id="div-erreur-champ-fonction" class="message-erreur">

									Veuillez choisir un profil.

								</div>

							</div>

						</div>

						

						

						

						<div class="ligne-form">

							<div class="wrap-field-form middle">

								<input placeholder=" " type="text" name="telephone" id="telephone"

								data-error-contener="div-erreur-champ-telephone" onKeyup="Verif_saisie(event, 'telephone', 'btn-valider-utilisateur')"  <?php if($idadministrateur!=0){?>value="<?php echo ($ladministrateur["telephone"])?>"<?php }?> oninput="this.value = this.value.replace(/[^0-9()+. ]/g, '').replace(/(\..*)\./g, '$1');">

								<span id="libelle_reference">Téléphone <i class=""></i></span>

								<div id="div-erreur-champ-telephone" class="message-erreur">

									Veuillez indiquer numéro de téléphone valide.

								</div>

							</div>

							



							<div class="wrap-field-form middle">

								<input placeholder=" " type="email" name="email" id="email"

								data-error-contener="div-erreur-champ-email"  class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo ($ladministrateur["email"])?>"<?php }?>>

								<span id="libelle_reference">E-mail <i class="">*</i></span>

								<div id="div-erreur-champ-email" class="message-erreur">

									Veuillez indiquer l'adrese e-mail de l'utilisateur.

								</div>

							</div>

							

							

						</div>

						

						<div class="ligne-form">

							

							

							<div class="wrap-field-form middle">

								<input placeholder=" " type="password" name="password" id="password"

								data-error-contener="div-erreur-champ-pasword" onKeyup="Verif_saisie(event, 'password', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo (base64_decode($ladministrateur["pwd"]))?>"<?php }?>>

								<span id="libelle_reference">Mot de passe <i class="">*</i></span>

								<div id="div-erreur-champ-pasword" class="message-erreur">

									Veuillez indiquer le mot de passe de l'utilisateur.

								</div>

							</div>

							

							<div class="wrap-field-form middle">

								<input placeholder=" " type="password" name="cpassword" id="cpassword"

								data-error-contener="div-erreur-champ-cpasword" onKeyup="Verif_saisie(event, 'cpassword', 'btn-valider-utilisateur')" class="mandatory-administrateur" <?php if($idadministrateur!=0){?>value="<?php echo (base64_decode($ladministrateur["pwd"]))?>"<?php }?>>

								<span id="libelle_reference">Confirmez le mot de passe <i class="">*</i></span>

								<div id="div-erreur-champ-cpasword" class="message-erreur">

									Confirmation invalide.

								</div>

							</div>

						</div>

						

						<div class="ligne-form">



							<div class="wrap-field-form middle">

								<input placeholder=" " type="date" name="date_debut" id="date_debut"

								data-error-contener="div-erreur-champ-date_debut" onKeyup="Verif_saisie(event, 'date_debut', 'btn-valider-utilisateur')" <?php if($idadministrateur!=0){?>value="<?php echo (str_replace('/', '-', Convertir_date_francais($ladministrateur["date_debut"])))?>"<?php }?>>

								<span id="libelle_reference">Période de validité du <i class="">*</i></span>

								<div id="div-erreur-champ-date_debut" class="message-erreur">

									Veuillez indiquer la date de début de validité de l'utilisateur.

								</div>

							</div>

							

							<div class="wrap-field-form middle">

								<input placeholder=" " type="date" name="date_fin" id="date_fin"

								data-error-contener="div-erreur-champ-date_fin" onKeyup="Verif_saisie(event, 'date_fin', 'btn-valider-utilisateur')" <?php if($idadministrateur!=0){?>value="<?php echo (str_replace('/', '-', Convertir_date_francais($ladministrateur["date_fin"])))?>"<?php }?>>

								<span id="libelle_reference">Au <i class="">*</i></span>

								<div id="div-erreur-champ-date_fin" class="message-erreur">

									Veuillez indiquer la date de fin de validité de l'utilisateur.

								</div>

							</div>

						</div>





						<div class="ligne-form ligne-btn">

							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">

							<input type="button" name="btn-valider-utilisateur" value="Enregistrer" id="btn-valider-utilisateur" class="btn-submit" onClick="<?php echo $url_enregistrer?>">

							<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>

							<input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $idadministrateur?>"/>

							<input type="hidden" name="traitement" id="traitement" value="editer-administrateur"/>

						</div>



					</form>

				</div>



			</div>

		</div>

</body>

</html>