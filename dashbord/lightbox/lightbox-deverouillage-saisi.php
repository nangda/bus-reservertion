<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
?>

<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$url_enregistrer="document.getElementById('zip').click()";
$agence_dossier=$demandeur["agence"];
$lagence=getAgenceInformations($agence_dossier);

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

		<div class="lightbox" id="lightbox-pieces-justificative">

			<div class="entete-lightbox"> #0<?php echo $demandeur[0]?>  -  <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?> - Dévérouillage pour mise &agrave; jour.

				<div class="close-lightbox" onClick="Cacher_loader('loader2');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-deverrouillage-champ">
				<div class="content-form">
					<form action="" id="form-deverrouillage" class="form-ajout" enctype="multipart/form-data">

						
						<div class="accroche-lighbox">Vous pouvez donner la possibilité  au client de mettre à jour certaines de ses informations après soumission de son dossier.</div>
						<p class="accroche-lighbox">Pour ce faire vous devez cochez les champs sur lequels il pourra apporter des corrections, puis valider.</p>
						
						<div class="wrapper-line-deverouillage">

							<div class="line-deverouillage">
								<input type="checkbox"  id="nom" name="nom" class="check-champ-client" value="Nom" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'nom')!=false)echo "CHECKED"?>>
								<label for="nom" class="label-champ-client">Nom</label>
							</div>

							<div class="line-deverouillage">
								<input type="checkbox" id="prenom" name="prenom" class="check-champ-client" value="Prénom" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'prenom')!=false)echo "CHECKED"?>>
								<label for="prenom" class="label-champ-client">Pr&eacute;nom</label>
							</div>

							<div class="line-deverouillage">
								<input type="checkbox" id="date_naissance" name="date_naissance" class="check-champ-client" value="Date de naissance" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'date_naissance')!=false)echo "CHECKED"?>>
								<label for="date_naissance" class="label-champ-client">Date de naissance</label>
							</div>
							<div class="line-deverouillage">
								<input type="checkbox" id="lieu_naissance" name="lieu_naissance" class="check-champ-client" value="Lieu de naissance" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'lieu_naissance')!=false)echo "CHECKED"?>>
								<label for="lieu_naissance" class="label-champ-client">Lieu de naissance</label>
							</div>
							
							<div class="line-deverouillage">
								<input type="checkbox" id="adresse" name="adresse" class="check-champ-client" value="Adresse" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'adresse')!=false)echo "CHECKED"?>>
								<label for="adresse" class="label-champ-client">Adresse</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="numero_compte" name="numero_compte" class="check-champ-client" value="Num&eacute;ro de compte" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'numero_compte')!=false)echo "CHECKED"?>>
								<label for="numero_compte" class="label-champ-client">Num&eacute;ro de compte</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="cle" name="cle" class="check-champ-client" value="Cl&eacute;" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'cle')!=false)echo "CHECKED"?>>
								<label for="cle" class="label-champ-client">Cl&eacute;</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="agence" name="agence" class="check-champ-client" value="Agence" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'agence')!=false)echo "CHECKED"?>>
								<label for="agence" class="label-champ-client">Agence</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="profession" name="profession" class="check-champ-client" value="Profession" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'profession')!=false)echo "CHECKED"?>>
								<label for="profession" class="label-champ-client">Profession</label>
							</div>
							
							<div class="line-deverouillage">
								<input type="checkbox" id="statut_professionnel" name="statut_professionnel" class="check-champ-client" value="Statut professionnel" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'statut_professionnel')!=false)echo "CHECKED"?>>
								<label for="statut_professionnel" class="label-champ-client">Statut professionnel</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="employeur" name="employeur" class="check-champ-client" value="Employeur" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'employeur')!=false)echo "CHECKED"?>>
								<label for="employeur" class="label-champ-client">Employeur</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="date_embauche" name="date_embauche" class="check-champ-client" value="Date d'embauche" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'date_embauche')!=false)echo "CHECKED"?>>
								<label for="date_embauche" class="label-champ-client">Date d'embauche</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="nom_personne_a_contacter" name="nom_personne_a_contacter" class="check-champ-client" value="Nom personne à contacter" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'nom_personne_a_contacter')!=false)echo "CHECKED"?>>
								<label for="nom_personne_a_contacter" class="label-champ-client">Nom personne à contacter</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="prenom_personne_a_contacter" name="prenom_personne_a_contacter" class="check-champ-client" value="Pr&eacute;nom personne à contacter" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'prenom_personne_a_contacter')!=false)echo "CHECKED"?>>
								<label for="prenom_personne_a_contacter" class="label-champ-client">Pr&eacute;nom personne à contacter</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="telephone1_personne_a_contacter" name="telephone1_personne_a_contacter" class="check-champ-client" value="Téléphone 1 personne à contacter" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'telephone1_personne_a_contacter')!=false)echo "CHECKED"?>>
								<label for="telephone1_personne_a_contacter" class="label-champ-client">Téléphone 1 personne à contacter</label>
							</div>
							
							
							<div class="line-deverouillage">
								<input type="checkbox" id="telephone2_personne_a_contacter" name="telephone2_personne_a_contacter" class="check-champ-client" value="Téléphone 2 personne à contacter" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'telephone2_personne_a_contacter')!=false)echo "CHECKED"?>>
								<label for="telephone2_personne_a_contacter" class="label-champ-client">Téléphone 2 personne à contacter</label>
							</div>
							

							
							<div class="line-deverouillage">
								<input type="checkbox" id="photo" name="photo" class="check-champ-client" value="Photo" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'photo')!=false)echo "CHECKED"?>>
								<label for="photo" class="label-champ-client">Photo</label>
							</div>
							

							

							<?php if($demandeur["statut_professionnel"]=="Fonctionnaire/Agent_public"){?>
							<div class="line-deverouillage">
								<input type="checkbox" id="avis" name="avis" class="check-champ-client" value="Attestation de présence effective" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'avis')!=false)echo "CHECKED"?>>
								<label for="avis" class="label-champ-client">Attestation de présence effective</label>
							</div>
							
							<div class="line-deverouillage">
								<input type="checkbox" id="bulletin_de_paie1" name="bulletin_de_paie1" class="check-champ-client" value="Dernier Bulletin de paie" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie1')!=false)echo "CHECKED"?>>
								<label for="bulletin_de_paie1" class="label-champ-client">Dernier Bulletin de paie</label>
							</div>
							<?php }else{?>
							<div class="line-deverouillage">
								<input type="checkbox" id="avis" name="avis" class="check-champ-client" value="Attestation de Virement Irrévocable de Salaire" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'avis')!=false)echo "CHECKED"?>>
								<label for="avis" class="label-champ-client">Attestation de Virement Irrévocable de Salaire</label>
							</div>
							

							<div class="line-deverouillage">
								<input type="checkbox" id="bulletin_de_paie1" name="bulletin_de_paie1" class="check-champ-client" value="Bulletin de paie num&eacute;ro 1" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie1')!=false)echo "CHECKED"?>>
								<label for="bulletin_de_paie1" class="label-champ-client">Bulletin de paie num&eacute;ro 1</label>
							</div>
							

							
							<div class="line-deverouillage">
								<input type="checkbox" id="bulletin_de_paie2" name="bulletin_de_paie2" class="check-champ-client" value="Bulletin de paie num&eacute;ro 2" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie2')!=false)echo "CHECKED"?>>
								<label for="bulletin_de_paie2" class="label-champ-client">Bulletin de paie num&eacute;ro 2</label>
							</div>
							

							
							<div class="line-deverouillage">
								<input type="checkbox" id="bulletin_de_paie3" name="bulletin_de_paie3" class="check-champ-client" value="Bulletin de paie num&eacute;ro 3" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'bulletin_de_paie3')!=false)echo "CHECKED"?>>
								<label for="bulletin_de_paie3" class="label-champ-client">Bulletin de paie num&eacute;ro 3</label>
							</div>
							
							<?php }?>

							
							<div class="line-deverouillage">
								<input type="checkbox" id="cni_recto" name="cni_recto" class="check-champ-client" value="CNI Recto" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'cni_recto')!=false)echo "CHECKED"?>>
								<label for="cni_recto" class="label-champ-client">CNI Recto</label>
							</div>
							

							
							<div class="line-deverouillage">
								<input type="checkbox" id="cni_verso" name="cni_verso" class="check-champ-client" value="CNI Verso" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'cni_verso')!=false)echo "CHECKED"?>>
								<label for="cni_verso" class="label-champ-client">CNI Verso</label>
							</div>
							

							
							<div class="line-deverouillage">
								<input type="checkbox" id="facture" name="facture" class="check-champ-client" value="facture" <?php if(GetDeverouillageInformationsByIndicateur($demandeur[0], 'facture')!=false)echo "CHECKED"?>>
								<label for="facture" class="label-champ-client">Facture ENEO/CAMWATER</label>
							</div>
							

						</div>
						
						<div class="ligne-form">
							<input type="button" name="cancel-form" value="<?php if($demandeur["gestionnaire"]==0){?>Annuler<?php }else{?>Fermer<?php }?>" class="btn-submit cancel" onClick="Cacher_loader('loader2');">
							
						  	<input type="button" name="btn-valider-affectation" value="Valider" id="btn-valider-affectation" class="btn-submit" onClick="Notification_enregistrer_deverouillage_dossier('<?php echo base64_encode("traitement_ajax/main.php")?>')">
							
						  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
						  	<input type="hidden" name="iddemandeur" id="iddemandeur" value="<?php echo $iddemandeur?>"/>
						  	<input type="hidden" name="traitement" id="traitement" value="deverouiller-dossier"/>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>