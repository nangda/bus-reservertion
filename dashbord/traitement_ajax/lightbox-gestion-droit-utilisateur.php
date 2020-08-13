



<?php



@session_start();



include("../connectionbd.php");



include("../mesfonctions.php");







?>



<?php 







	$idadministrateur=mysql_real_escape_string  ($_GET["idadministrateur"]);



	$administrateur=getadministrateurInformations($idadministrateur);



	$ville=getvilleInformations($administrateur["idville"]);







	$createur=getAdministrateurInformations($administrateur["createur"]);



	$modificateur=getAdministrateurInformations($administrateur["modificateur"]);



	$valideur=getAdministrateurInformations($administrateur["valideur"]);







?><!doctype html>



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



		<div class="lightbox" id="lightbox-droit-utilisateur">



			<div class="entete-lightbox">Gestion des accès et droits de : <?php echo utf8_encode($administrateur["nom"]." ".$administrateur["prenom"])?>



				<div class="close-lightbox" onClick="Cacher_loader('loader');">



					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">



						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>



				</div>



			</div>



			<div class="contenu-lightbox" id="conteneur-utilisation">



				<div class="content-form">



					<form action="" id="form-ajout-utilisateur" class="form-ajout" enctype="multipart/form-data">



						<ul class="wrapper-module-user">



							<li class="wrap-module-user">



								<input type="checkbox" id="donne-de-base" name="donne-de-base" class="check-module-user">



								<label for="donne-de-base" class="label-module-user">Données de base</label>



								<ul class="wrapper-menu-user">



									<li class="wrap-menu-user">



										<input type="checkbox" id="region" name="region" class="check-menu-user">



										<label for="region" class="label-menu-user">Les Regions</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces">



												<input type="checkbox" id="editer-region" name="editer-region" class="check-user-acces">



												<label for="editer-region" class="label-user-acces">Editer</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="valider-region" name="valider-region" class="check-user-acces">



												<label for="valider-region" class="label-user-acces">Valider</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="supprimer-region" name="supprimer-region" class="check-user-acces">



												<label for="supprimer-region" class="label-user-acces">Supprimer</label>



											</li>



										</ul>



									</li>



									



									<li class="wrap-menu-user">



										<input type="checkbox" id="ville" name="ville" class="check-menu-user">



										<label for="ville" class="label-menu-user">Les villes</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces">



												<input type="checkbox" id="editer-ville" name="editer-ville" class="check-user-acces">



												<label for="editer-ville" class="label-user-acces">Editer</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="valider-ville" name="valider-ville" class="check-user-acces">



												<label for="valider-ville" class="label-user-acces">Valider</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="supprimer-ville" name="supprimer-ville" class="check-user-acces">



												<label for="supprimer-ville" class="label-user-acces">Supprimer</label>



											</li>



										</ul>



									</li>



									



									<li class="wrap-menu-user">



										<input type="checkbox" id="agence" name="agence" class="check-menu-user">



										<label for="agence" class="label-menu-user">Les Agences</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces">



												<input type="checkbox" id="editer-agence" name="editer-agence" class="check-user-acces">



												<label for="editer-agence" class="label-user-acces">Editer</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="valider-agence" name="valider-agence" class="check-user-acces">



												<label for="valider-agence" class="label-user-acces">Valider</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="supprimer-agence" name="supprimer-agence" class="check-user-acces">



												<label for="supprimer-agence" class="label-user-acces">Supprimer</label>



											</li>



										</ul>



									</li>



								</ul>



							</li>



							



							<li class="wrap-module-user">



								<input type="checkbox" id="suivi-de-demande" name="suivi-de-demande" class="check-module-user">



								<label for="suivi-de-demande" class="label-module-user">Suivi des demandes</label>



								<ul class="wrapper-menu-user">



									<li class="wrap-menu-user">





										<label for="menu-user-2-1" class="label-menu-user no-checbox">Hierachie de consultation des données</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces wrap-select">



												<select name="niveau_dacces" id="wrapper-hierachie-donnee-1" onChange="Select_cirsconscription_utilisateur('<?php echo base64_encode("traitement_ajax/main.php?traitement=select_cirsconscription_utilisateur")?>', '<?php echo $_SESSION["token"]?>')">



													<option value="Toutes">Toutes</option>



													<option value="region">Région</option>



													<option value="ville">Ville</option>



													<option value="agence">Agences</option>



												</select>



												<label for="wrapper-hierachie-donnee-1" class="label-user-acces select-label-select">Niveau d'accès</label>



											</li>



											



											<li class="wrap-user-acces wrap-select">



												<select name="circonscription" id="wrapper-hierachie-donnee-2">



													<option value="Toutes">Toutes</option>



													<option value="region">Circonscriptions 1</option>



													<option value="ville">Circonscriptions 2</option>



													<option value="agence">Circonscriptions 3</option>



												</select>



												<label for="wrapper-hierachie-donnee-2" class="label-user-acces select-label-select">Circonscriptions</label>



											</li>



										</ul>



									</li>



									



									<li class="wrap-menu-user">



										<label for="menu-user-2-2" class="label-menu-user no-checbox">Traitement des demandes</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces">



												<input type="checkbox" id="acces-piece-jointe" name="acces-piece-jointe" class="check-user-acces">



												<label for="acces-piece-jointe" class="label-user-acces">Accès aux pièces jointes</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="reponse-demande" name="reponse-demande" class="check-user-acces">



												<label for="reponse-demande" class="label-user-acces">Peux répondre aux demandes</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="mise-corbeille" name="mise-corbeille" class="check-user-acces">



												<label for="mise-corbeille" class="label-user-acces">Mettre à la corbeille</label>



											</li>



										</ul>



									</li>



									



								</ul>



							</li>



							



							<li class="wrap-module-user">



								<input type="checkbox" id="administrateur" name="administrateur" class="check-module-user">



								<label for="administrateur" class="label-module-user">Administrateurs</label>



								<ul class="wrapper-menu-user">



									<li class="wrap-menu-user">



										<input type="checkbox" id="gestion-administrateur" name="gestion-administrateur" class="check-menu-user">



										<label for="gestion-administrateur" class="label-menu-user">Gestion des administrateurs</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces">



												<input type="checkbox" id="editer-administrateur" name="editer-administrateur" class="check-user-acces">



												<label for="editer-administrateur" class="label-user-acces">Editer</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="suspendre-administrateur" name="suspendre-administrateur" class="check-user-acces">



												<label for="suspendre-administrateur" class="label-user-acces">Suspendre</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="supprimer-administrateur" name="supprimer-administrateur" class="check-user-acces">



												<label for="supprimer-administrateur" class="label-user-acces">Supprimer</label>



											</li>



										</ul>



									</li>



									



									<li class="wrap-menu-user">



										<input type="checkbox" id="historique-session" name="historique-session" class="check-menu-user">



										<label for="historique-session" class="label-menu-user">Historique des sessions</label>



									</li>



									



									<li class="wrap-menu-user">



										<input type="checkbox" id="gestion-ip-autorise" name="gestion-ip-autorise" class="check-menu-user">



										<label for="gestion-ip-autorise" class="label-menu-user">Gestion des IP autorisées</label>



										<ul class="wrapper-user-acces">



											<li class="wrap-user-acces">



												<input type="checkbox" id="editer-ip-autorise" name="editer-ip-autorise" class="check-user-acces">



												<label for="editer-ip-autorise" class="label-user-acces">Editer</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="valider-ip-autorise" name="valider-ip-autorise" class="check-user-acces">



												<label for="valider-ip-autorise" class="label-user-acces">Valider</label>



											</li>



											



											<li class="wrap-user-acces">



												<input type="checkbox" id="supprimer-ip-autorise" name="supprimer-ip-autorise" class="check-user-acces">



												<label for="supprimer-ip-autorise" class="label-user-acces">Supprimer</label>



											</li>



										</ul>



									</li>



								</ul>



							</li>



						</ul>



						<div class="ligne-form ligne-btn fixed"> <input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');"> <input type="button" name="btn-valider-utilisateur" value="Enregistrer" id="btn-valider-utilisateur" class="btn-submit" onClick="<?php echo $url_enregistrer?>"> <input type="hidden" name="token" id="token" value="<?php echo $_SESSION[" token "] ?>"/> <input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $idadministrateur?>"/> </div>



					</form>



				</div>



			</div>



		</div>



</body>



</html>