<?php 

 session_start();

 $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

 if(!isset($_SESSION['token'])) $_SESSION['token']= $token;

 

include("connectionbd.php");

include("mesfonctions.php");



if(isset($_SESSION["compte"]))$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

else echo "<script language=\"javascript\">self.location='./';</script>";

?>		

		<html lang="fr">



		<head>



			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



			<meta name="robots" content="noindex, nofollow">

			<title><?php echo $ladministrateur["prenom"];?> - Gestion des utilisateurs de la plateforme  - BICEC CRESCO</title>

			<meta name="description" content="Suivi des dossiers de demandes de crédit  - BICEC CRESCO">

			<meta name="keywords" content="DASHBORD BICEC CRESCO">

			<meta name="author" content="Marc Merlin BAPPA">

			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

			<base href="https://luxwebhostingservices.net/bicec-cresco/dashbord/">

			<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>

			<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

			<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">

			<link rel="stylesheet" href="css/compte.css">

			<link rel="stylesheet" href="css/header.css">

			<link rel="stylesheet" href="css/footer.css">

			<link rel="stylesheet" media="screen and (max-width: 1030px)" href="css/index-min.css">

			<link rel="stylesheet" media="screen and (max-width: 1030px)" href="css/header-min.css">

			<link rel="stylesheet" media="screen and (max-width: 1030px)" href="css/footer-min.css">

			<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

			<link href="owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">

			<link href="owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">

			<link href="owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">

			<link href="css/loading.css" rel="stylesheet" type="text/css">

			<!-- Latest compiled and minified CSS -->

			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.css">

			<script src="js/jquery-1.8.2.min.js"></script>

			<script src="owl-carousel/owl.carousel.min.js"></script>

			<script src="js/mesfonctions.js"></script>

			<script src="js/phpjs.js"></script>

			<script src="js/app.js"></script>

			<script src="js/sweetalert.min.js"></script>

			<script src="https://unpkg.com/feather-icons"></script>



			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



			<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

		</head>



		<body>

			<div id="grand-conteneur-page">

					<?php include("includes/header-cpt.php"); ?>

					<?php include("includes/menu-cpt.php"); ?>

				<div id="wrap-section-right">

					  <div id="section-right">

						  <div id="wrap-entete-page">

							  <h1 id="title-page">MODIFICATIONS DE COMPTE</h1>

							  <ul id="fil-arian">

								  <li><a href="./"><i class="fa fa-home"></i></a>

								  </li>

								  <li><a href="">Mise à jour du compte</a>

								  </li>

							  </ul>

						  </div>




						<div id="wrap-content-right" class="wrap-content-right">

							<!--		Gestion des enregistrement de la page		-->

							<div id="conteneur-page" class="mon-compte">

								<div class="conteneur-rubrique-form">
 				<div class="wrap-icon-rubrique-form"><img src="images/office.png" alt=""></div>
 				<div class="wrap-titre-rubrique-form">
 					<h2 class="titre-rubrique-form">Agence et compte bancaire d'op&eacute;ration</h2>
 					<p class="accroche-rubrique-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis neque vitae tortor auctor mollis. Quisque ornare condimentum efficitur. </p>
 				</div>
 
				<div class="wrap-field middle">
                   <div class="field-form wrap-select">
 					<select name="agence-operation-user" id="agence-operation-user" data-error-contener="div-erreur-champ-agence-operation-user">
                       <?php 
 						$query_region="SELECT * FROM region WHERE etat='1' AND idregion IN (SELECT idregion FROM agence WHERE etat='1' ) ORDER BY titre ASC;";
 	                    $result_region=mysql_query($query_region);
 	                    while($region=mysql_fetch_array($result_region)){
 					  ?>
                         <optgroup label="<?php echo $region["titre"]?>">
						   <?php 
							$query_agence="SELECT * FROM agence WHERE etat='1' AND idregion ='$region[0]'  ORDER BY titre ASC;";
							$result_agence=mysql_query($query_agence);
							while($agence=mysql_fetch_array($result_agence)){
								if($demandeur["agence"]==$agence[0])$selected ="SELECTED";
								else $selected="";
						  ?>
                          <option value="<?php echo $agence[0]?>" data-code="<?php echo $agence["reference"]?>" <?php echo $selected?>><?php echo $agence["titre"]?></option>
                          <?php }?>
                          </optgroup>
                      <?php }?>
                       </select>
					  <label class="libele-form">Votre Agence <span class="obligatoire">*</span></label>

						<div class="message-erreur" id="div-erreur-champ-agence-operation-user"> Veuillez choisir votre agence d'operation.</div>

					</div>			  

				  <div class="field-form">
 					  <div class="wrap-field third" id="cpt-agence">
 						  <div class="field-form field-code-agence">
 							 <input type="text" readonly  required=" " name="numero-code-agence-user" placeholder=" " data-error-contener="div-erreur-champ-code-agence-user" onkeyup="Verif_saisie(event, 'code-agence-user', 'btn-valider')" id="code-agence-user">
 							  <label class="libele-form">Code agence <span class="obligatoire">*</span></label>
 						  </div>
						  <div class="field-form field-numero-compte">
							 <input name="numero-compte-user" type="text" required=" " id="numero-compte-user" placeholder=" " onkeyup="Verif_saisie(event, 'numero-compte-user', 'btn-valider')" maxlength="11" data-error-contener="div-erreur-champ-numero-compte-user"  value="<?php echo $demandeur["numero_compte"]?>">
							  <label class="libele-form">N&deg; de compte (11 chiffres)<span class="obligatoire">*</span></label>
							  <div class="message-erreur" id="div-erreur-champ-numero-compte-user">Num&eacute;ro de compte invalide.</div>
						  </div>
						  <div class="field-form field-cle-agence">
							 <input type="text" required=" " name="cle-agence-user" placeholder=" " data-error-contener="div-erreur-champ-cle-agence-user" onkeyup="Verif_saisie(event, 'cle-agence-user', 'btn-valider')" id="cle-agence-user" value="<?php echo $demandeur["cle"]?>">
							  <label class="libele-form">Cl&eacute; <span class="obligatoire">*</span></label>
							  <div class="message-erreur" id="div-erreur-champ-cle-agence-user">invalide.</div>
						  </div>
					  </div>

				  </div>
				</div>

			</div>


			<div class="conteneur-rubrique-form">

				<div class="wrap-icon-rubrique-form"><img src="images/id.png" alt=""></div>
				<div class="wrap-titre-rubrique-form">
					<h2 class="titre-rubrique-form">Votre identit&eacute;</h2>
					<p class="accroche-rubrique-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis neque vitae tortor auctor mollis. Quisque ornare condimentum efficitur. </p>
				</div>
				<div class="wrap-field">
				  <div class="field-form wrap-select">
						<select name="civilite-user" class="search-select mandatory" id="civilite-user" data-error-contener="div-erreur-champ-civilite-user">
							<option value="M">Monsieur</option>
							<option value="Mme" <?php if($demandeur["civilite"]=="Mme") echo "SELECTED"?>>Madame</option></select>
                        <label class="libele-form">Vous &ecirc;tes<span class="obligatoire">*</span></label>
						<div class="message-erreur" id="div-erreur-champ-civilite-user"> Veuillez choisir le type de l'&eacute;v&egrave;nement.</div>
					</div>
				</div>



				<div class="wrap-field middle">

				  <div class="field-form">

					  <input type="text" required=" " name="prenom" placeholder=" " data-error-contener="div-erreur-champ-prenom-user" onkeyup="Verif_saisie(event, 'prenom-user', 'btn-valider')" id="prenomr" class="mandatory" value="<?php echo $demandeur["prenom"] ?>">

					  <label class="libele-form">Pr&eacute;nom<span class="obligatoire">*</span></label>

					  <div class="message-erreur" id="div-erreur-champ-prenom-user" style="display: none;"> Veuillez saisir votre pr&eacute;nom.</div>

				  </div>

				  <div class="field-form">

					  <input type="text" required=" " name="nom" placeholder=" " data-error-contener="div-erreur-champ-nom-user" onkeyup="Verif_saisie(event, 'prenom-user', 'btn-valider')" id="nom" class="mandatory" value="<?php echo $demandeur["nom"] ?>" style="text-transform: uppercase;">

					  <label class="libele-form">Nom<span class="obligatoire">*</span></label>

					  <div class="message-erreur" id="div-erreur-champ-nom-user" style="display: none;"> Veuillez saisir votre nom.</div>

				  </div>

				</div>

				<div class="wrap-field middle">

				  <div class="field-form">



					  <div class="wrap-field third">



						  <div class="field-form mois_naiss wrap-select">



							  <select name="mois_naissance" id="mois_naissance" data-error-contener="div-erreur-champ-date_naissance">
                                <option value="">--------------</option>

                                <?php 
                                   $tab_naissance=explode("/", $demandeur["date_naissance"]);
								   for($i=1; $i<count($tab_mois);$i++){
									   if($i<10)$j="0".$i; else $j=$i;
								?>
							  	<option value="<?php echo $j?>" <?php if($j==$tab_naissance[1])echo "SELECTED"?>><?php echo $tab_mois[$i]?></option>
                                <?php }?>

							  </select>
							  <label class="libele-form">Mois de naissance<span class="obligatoire">*</span></label>
						  </div>

						  <div class="field-form jour_naiss wrap-select" >
							  <select name="jour_naissance" id="jour_naissance" data-error-contener="div-erreur-champ-date_naissance">
                               <option value="">--</option>
                                <?php 
								   for($i=1; $i<=31;$i++){
									   if($i<10)$j="0".$i; else $j=$i;
								?>

							  	<option value="<?php echo $j?>" <?php if($j==$tab_naissance[2])echo "SELECTED"?>><?php echo $j?></option>

                                <?php }?>
							  </select>
							  <label class="libele-form">Jour<span class="obligatoire">*</span></label>
						  </div>
						  <div class="field-form annee_naiss wrap-select">
							   <select name="annee_naissance" id="annee_naissance" data-error-contener="div-erreur-champ-date_naissance">
                               <option value="">----</option>
                                <?php 
								   for($i=date("Y")-18; $i>=date("Y")-80;$i--){
									   if($i<10)$j="0".$i; else $j=$i;
								?>
							  	<option value="<?php echo $j?>" <?php if($j==$tab_naissance[0])echo "SELECTED"?>><?php echo $j?></option>

                                <?php }?>
							  </select>
							  <label class="libele-form">Ann&eacute;e<span class="obligatoire">*</span></label>
						  </div>
						<div class="message-erreur" id="div-erreur-champ-date_naissance" style="display: none;"> Veuillez indiquer une date de naissance valide.</div>
					  </div>

				  </div>

				  <div class="field-form">

					  <input type="text" required=" " name="lieu_naissance" placeholder=" " data-error-contener="div-erreur-champ-lieu_naissance" onkeyup="Verif_saisie(event, 'lieu_naissance', 'btn-valider')" id="lieu_naissance" class="mandatory" value="<?php echo $demandeur["lieu_naissance"] ?>">

					  <label class="libele-form">Lieu de naissance<span class="obligatoire">*</span></label>

					  <div class="message-erreur" id="div-erreur-champ-lieu_naissance" style="display: none;"> Veuillez saisir votre lieu de naissance.</div>

				  </div>

				</div>

			</div>


			<div class="conteneur-rubrique-form">
 				<div class="wrap-icon-rubrique-form"><img src="images/business.png" alt=""></div>
 				<div class="wrap-titre-rubrique-form">

					<h2 class="titre-rubrique-form">Informations professionelles</h2>

					<p class="accroche-rubrique-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis neque vitae tortor auctor mollis. Quisque ornare condimentum efficitur. </p>

				</div>

				<div class="wrap-field middle">

				  <div class="field-form wrap-select">

						<select name="statut_professionnel" class="search-select mandatory" id="statut_professionnel" data-error-contener="div-erreur-champ-profession-conjoint-user">

							<option value="Fonctionnaire/Agent_public" >Fonctionnaire/Agent public</option>

							<option value="Employe_secteur_prive" <?php if($demandeur["statut_professionnel"]=="Employe_secteur_prive") echo "SELECTED"?>>Employ&eacute; du secteur priv&eacute;</option></select>

                        <label class="libele-form">Statut professionnel<span class="obligatoire">*</span></label>

						<div class="message-erreur" id="div-erreur-champ-profession-conjoint-user"> Veuillez indiquer votre statut professionnel.</div>

					</div>

				  <div class="field-form">

					  <input type="text" required=" " name="employeur" placeholder=" " data-error-contener="div-erreur-champ-employeur-user" onkeyup="Verif_saisie(event, 'employeur', 'btn-valider')" id="employeur" class="mandatory" value="<?php echo $demandeur["employeur"] ?>">
					  <label class="libele-form">Employeur<span class="obligatoire">*</span></label>
					  <div class="message-erreur" id="div-erreur-champ-employeur-user" style="display: none;"> Veuillez saisir le nom de votre entreprise.</div>
				  </div>
				</div>

				<div class="wrap-field middle">
					<div class="field-form">
					  <div class="wrap-field third">
						  <div class="field-form mois_naiss wrap-select">
							  <select name="mois-embauche" id="mois-embauche" data-error-contener="div-erreur-champ-date-embauche">
                               <option value="">--------------</option>
                                <?php 
	                               $tab_embauche=explode("/", $demandeur["date_embauche"]);
								   for($i=1; $i<count($tab_mois);$i++){
									   if($i<10)$j="0".$i; else $j=$i;
								?>
							  	<option value="<?php echo $j?>" <?php if($j==$tab_embauche[1])echo "SELECTED"?>><?php echo $tab_mois[$i]?></option>
                                <?php }?>
							  </select>
							  <label class="libele-form">Mois embauche<span class="obligatoire">*</span></label>
						  </div>

						  <div class="field-form jour_naiss wrap-select" >
							  <select name="jour-embauche" id="jour-embauche" data-error-contener="div-erreur-champ-date-embauche">
                               <option value="">--</option>
                                <?php 
								   for($i=1; $i<=31;$i++){
									   if($i<10)$j="0".$i; else $j=$i;
								?>
							  	<option value="<?php echo $j?>" <?php if($j==$tab_embauche[2])echo "SELECTED"?>><?php echo $j?></option>
                                <?php }?>
							  </select>
							  <label class="libele-form">Jour<span class="obligatoire">*</span></label>
						  </div>

						  <div class="field-form annee_naiss wrap-select">
							   <select name="annee-embauche" id="annee-embauche" data-error-contener="div-erreur-champ-date-embauche">
                               <option value="">----</option>
                                <?php 
								   for($i=date("Y"); $i>=date("Y")-60;$i--){
									   if($i<10)$j="0".$i; else $j=$i;
								?>
							  	<option value="<?php echo $j?>" <?php if($j==$tab_embauche[0])echo "SELECTED"?>><?php echo $j?></option>
                                <?php }?>
							  </select>
							  <label class="libele-form">Ann&eacute;e<span class="obligatoire">*</span></label>
						  </div>
						<div class="message-erreur" id="div-erreur-champ-date-embauche" style="display: none;"> Veuillez indiquer une date d'embauche valide.</div>
					  </div>
				  </div>

				  <div class="field-form">
					  <input type="text" required=" " name="profession" placeholder=" " data-error-contener="div-erreur-champ-profession-user" onkeyup="Verif_saisie(event, 'profession', 'btn-valider')" id="profession" class="mandatory" value="<?php echo $demandeur["profession"] ?>">
					  <label class="libele-form">Profession / Fonction<span class="obligatoire">*</span></label>
					  <div class="message-erreur" id="div-erreur-champ-profession-user" style="display: none;"> Veuillez saisir votre profession.</div>
				  </div>
				</div>	

			</div>

			<div class="conteneur-rubrique-form">

				<div class="wrap-icon-rubrique-form"><img src="images/contact.png" alt=""></div>
				<div class="wrap-titre-rubrique-form">
					<h2 class="titre-rubrique-form">Pour vous contacter</h2>
					<p class="accroche-rubrique-form">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis neque vitae tortor auctor mollis. Quisque ornare condimentum efficitur. </p>
				</div>

				<div class="wrap-field middle">
                  <div class="field-form wrap-select">
					<select name="ville" id="ville" data-error-contener="div-erreur-champ-agence-operation-user">
                      <?php 
						$query_ville="SELECT * FROM ville WHERE etat='1'  ORDER BY titre ASC;";
	                    $result_ville=mysql_query($query_ville);
	                    while($ville=mysql_fetch_array($result_ville)){
					  ?>
                          <option value="<?php echo $ville[0]?>"><?php echo $ville["titre"]?></option>
                      <?php }?>
                       </select>
					  <label class="libele-form">Ville de r&eacute;sidence <span class="obligatoire">*</span></label>
						<div class="message-erreur" id="div-erreur-champ-agence-operation-user"> Veuillez choisir votre agence d'operation.</div>
				  </div>			  

				  <div class="field-form">

					  <input type="text" required=" " name="adresse" placeholder=" " data-error-contener="div-erreur-champ-adresse-user" onkeyup="Verif_saisie(event, 'adresse', 'btn-valider')" id="adresse" class="mandatory" value="<?php echo $demandeur["adresse"] ?>">

					  <label class="libele-form">Adresse/Quartier<span class="obligatoire">*</span></label>

					  <div class="message-erreur" id="div-erreur-champ-adresse-user" style="display: none;"> Veuillez saisir votre adresse.</div>

				  </div>
				</div>
				<div class="wrap-field middle">
				  <div class="field-form">
						<span class="indicateur-telephone">+237 </span>
					  <input type="text" required=" "  class="numero-telephone" readonly disabled name="telephone" placeholder=" " data-error-contener="div-erreur-champ-fixe-user" onkeyup="Verif_saisie(event, 'telephone', 'btn-valider')" id="telephone" value="<?php echo $demandeur["telephone"]?>">
					  <label class="libele-form">T&eacute;l&eacute;phone principal <span class="obligatoire">*</span></label>
					  <?php if($demandeur["signature"]==""){?>
					  <div class="wrapper-action-fichier" style="display: block">
					  	<span class="modifier-fichier"><i class="fa fa-pencil"></i> Modifier</span>
					  </div>
					  <?php }?>
					  <div class="message-erreur" id="div-erreur-champ-fixe-user" style="display: none;"> Veuillez saisir votre T&eacute;l&eacute;phone fixe.</div>
				  </div>

				  <div class="field-form">
					  <span class="indicateur-telephone">+237 </span>
					  <input type="text" required=" "  class="numero-telephone" name="telephone2" placeholder=" " data-error-contener="div-erreur-champ-portable-user" onkeyup="Verif_saisie(event, 'telephone2', 'btn-valider')" id="telephone2"  value="<?php echo $demandeur["telephone2"] ?>">
					  <label class="libele-form">T&eacute;l&eacute;phone 2</label>
					  <div class="message-erreur" id="div-erreur-champ-portable-user" style="display: none;"> Veuillez saisir votre t&eacute;l&eacute;phone portable.</div>
				  </div>

				</div>

				<div class="wrap-field ">
				  <div class="field-form">
					  <input type="text" required=" " name="email" placeholder=" " data-error-contener="div-erreur-champ-email-user" onkeyup="Verif_saisie(event, 'email', 'btn-valider')" id="email" value="<?php echo $demandeur["email"]?>">
					  <label class="libele-form">Adresse e-mail<span class="obligatoire">*</span></label>
					  <div class="message-erreur" id="div-erreur-champ-email-user" style="display: none;"> Veuillez saisir votre email.</div>
				  </div>
				</div>
			</div>

			<div class="conteneur-rubrique-form">

				<div class="wrap-icon-rubrique-form"><img src="images/people.png" alt=""></div>



				<div class="wrap-titre-rubrique-form">

					<h2 class="titre-rubrique-form" style="margin-bottom: 5px">Personne &agrave contacter</h2>
					<p class="accroche-rubrique-form" style="display: inline-block; text-align: left; margin-bottom: 10px">Personne &agrave joindre si la banque n'arrive pas &agrave rentrer directement en contact avec vous. </p>
				</div>

				<div class="wrap-field middle">
				  <div class="field-form">
					  <input type="text" required=" " name="prenom-conjoint" placeholder=" " data-error-contener="div-erreur-champ-prenom-conjoint"  id="prenom-conjoint" value="<?php echo $demandeur["prenom_conjoint"] ?>" class="mandatory" onkeyup="Verif_saisie(event, 'prenom-conjoint', 'btn-valider')">
					  <label class="libele-form">Pr&eacute;nom <span class="obligatoire">*</span></label>
					  <div class="message-erreur" id="div-erreur-champ-prenom-conjoint" style="display: none;"> Veuillez saisir un pr&eacute;nom.</div>
				  </div>

				  <div class="field-form">
					  <input type="text" required=" " name="nom-conjoint" placeholder=" " data-error-contener="div-erreur-champ-nom-conjoint"  id="nom-conjoint" value="<?php echo $demandeur["nom_conjoint"] ?>" class="mandatory" onkeyup="Verif_saisie(event, 'nom-conjoint', 'btn-valider')" style="text-transform: uppercase;">
					  <label class="libele-form">Nom <span class="obligatoire">*</span></label>
					  <div class="message-erreur" id="div-erreur-champ-nom-conjoint" style="display: none;"> Veuillez saisir un nom.</div>
				  </div>

				</div>



				<div class="wrap-field middle">
				  <div class="field-form">

   					<span class="indicateur-telephone">+237 </span>

					  <input type="text" required=" " class="numero-telephone mandatory" name="telephone1-conjoint" placeholder=" " data-error-contener="div-erreur-champ-telephone-conjoint-1-user"  id="telephone1-conjoint"  onkeyup="Verif_saisie(event, 'telephone1-conjoint', 'btn-valider')" value="<?php echo $demandeur["telephone1_conjoint"]?>">
					  <label class="libele-form">T&eacute;l&eacute;phone 1 <span class="obligatoire">*</span></label>
					  <div class="message-erreur" id="div-erreur-champ-telephone-conjoint-1-user" style="display: none;"> Veuillez saisir un num&eacute;ro de T&eacute;l&eacute;phone valide.</div>
				  </div>

				  <div class="field-form">
        				<span class="indicateur-telephone">+237 </span>
					  <input type="text" required=" " class="numero-telephone" name="telephone2-conjoint" placeholder=" " data-error-contener="div-erreur-champ-telephone-conjoint-2-user"  id="telephone2-conjoint">
					  <label class="libele-form">T&eacute;l&eacute;phone 2</label>
					  <div class="message-erreur" id="div-erreur-champ-telephone-conjoint-2-user" style="display: none;"> Veuillez saisir votre t&eacute;l&eacute;phone portable.</div>
				  </div>
				</div>
			</div>

			<div class="conteneur-rubrique-form">	

				

         <?php if($demandeur["signature"]==""){?>
		  <div class="form-group">
			  <button type="button" class="btn btn-annuler" id="btn-annuler">Annuler</button>
			  <button type="button" class="btn" id="btn-valider" onClick="">Enregistrer</button>
	      </div>
		  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />   
		  <input type="hidden" name="iddemandeur" id="iddemandeur" value="<?php echo $demandeur[0] ?>" />   
		  <input type="hidden" name="traitement" id="traitement" value="update-infos-identification" />   
		  <input type="hidden" name="photo" id="photo" value="" data-photo="<?php if($demandeur["photo"]=="")echo"RAS"; else echo "DEJA" ?>"/>  
		  <?php }?> 
	  </form>

	  </div>




							</div>

						</div>

					  </div>

					</div>

				</div>



		<!-- Resources -->

		<script src="https://code.highcharts.com/highcharts.js"></script>

		<script src="https://code.highcharts.com/modules/exporting.js"></script>

		<script src="https://code.highcharts.com/modules/export-data.js"></script>

				<script>

					

					function allCheck(){

						$("#lightbox-droit-utilisateur input:checkbox").change(function(){
							if($(this).is(":checked")){

								$(this).parent('li').find("input:checkbox").each(function(){
									$(this).prop("checked", true);
									$(this).parents(".wrap-menu-user").find("input:checkbox").first().prop("checked", true);
									$(this).parents(".wrap-module-user").find("input:checkbox").first().prop("checked", true);
								});
								$(this).prop("checked", true);
							}else{
								$(this).parent('li').find("input:checkbox").each(function(){
									$(this).prop("checked", false);
									if($(this).parent('li').find("input:checkbox").is(":checked").length==0) alert("0");
										  //$(this).parents(".wrap-menu-user").find("input:checkbox").first().prop("checked", true);
								});
								$(this).prop("checked", false);

							}
						})

					}

					feather.replace()











					//**************************************************





					$( document ).ready( function () {



						$( '.menu.dropdown' ).click( function () {

							$( '.wrap-smenu-left' ).hide( '' );

							if ( $( this ).find( '.wrap-smenu-left' ).is( ':visible' ) ) {

								$( this ).find( '.wrap-smenu-left' ).hide( '' );

							} else {

								$( this ).find( '.wrap-smenu-left' ).show( '' );

							}

						} )









					} )

				</script>





			<!-- Latest compiled and minified JavaScript -->

			<script src="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.js"></script>

			</body>

		</html>



				<script>

					feather.replace()





					$( document ).ready( function () {



						$('.btn-filter').click( function (Event) {

							Event.preventDefault();

							$(this).parents('.contain-tab2').find('.conteneur-recherche-fiche').slideToggle('slow');

							return false;

						} )

						

						  $(".onglet-page").click(function(){

						   $(".onglet-page").removeClass('actif');

						   $(this).addClass('actif');

						   var id=$(this).attr('data-id');

				;		  $(".wrap-contain-onglet-page").hide();

						  $("#"+id+"").show();

						})











					} )

				</script>





			<!-- Latest compiled and minified JavaScript -->

			<script src="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.js"></script>

			</body>

		</html>