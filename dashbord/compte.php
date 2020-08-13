<?php 
 session_start();
 $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
 if(!isset($_SESSION['token'])) $_SESSION['token']= $token;

include("connectionbd.php");
include("mesfonctions.php");

if(isset($_SESSION["compte"]))$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
else echo "<script language=\"javascript\">self.location='../';</script>";
?>		

	<html>
		<head>
			<meta charset="utf-8">
			<meta name="robots" content="noindex, nofollow">

			<title><?php echo $ladministrateur["prenom"];?> - Gestion des utilisateurs de la plateforme  - BICEC CRESCO</title>

			<meta name="description" content="Suivi des dossiers de demandes de crédit  - BICEC CRESCO">

			<meta name="keywords" content="DASHBORD BICEC CRESCO">

			<meta name="author" content="Marc Merlin BAPPA">

			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="<?php echo $base?>/bus-booking/dashbord/">

			<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>

			<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

			<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">

			<link rel="stylesheet" href="css/inscription.css">

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
			
			
			<link href="css/croppie.css" rel="stylesheet" type="text/css" />
			<link href="css/demo.css" rel="stylesheet" type="text/css" />

			<!-- Latest compiled and minified CSS -->


			<script src="js/jquery-1.8.2.min.js"></script>


			<script src="js/mesfonctions.js"></script>

			<script src="js/phpjs.js"></script>

			<script src="js/app.js"></script>

			<script src="js/sweetalert.min.js"></script>

			<script src="https://unpkg.com/feather-icons"></script>
	       <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>

		</head>

		<body>

			<div id="grand-conteneur-page">

					<?php include("includes/header-cpt.php"); ?>

					<?php include("includes/menu-cpt.php"); ?>

				<div id="wrap-section-right">

					  <div id="section-right">

						  <div id="wrap-entete-page">

							  <h1 id="title-page">PARAMETRES DE COMPTE</h1>

							  <ul id="fil-arian">

								  <li><a href="./"><i class="fa fa-home"></i></a>

								  </li>

								  <li><a href="">Compte</a>

								  </li>

							  </ul>

						  </div>


						<div id="wrap-content-right">

							<!--		Gestion des enregistrement de la page		-->

							<div id="conteneur-page">

								
								<div class="wrap-contain-onglet-page" id="tab-administrateur" style="display: block;">

									<div class="contain-onglet-page">

										<h2 class="titre-tab" align="center">MODIFIER MES PARAMETRES DE COMPTE</h2>



										<div class="wrapper-bloc-parametre-compte">
				<div class="wrap-bloc-parametre-compte">
					<div class="bloc-parametre-compte">
						<form action="" id="form-modifier-pwd">
							<div class="wrap-titre-rubrique-form">
								<h2 class="titre-rubrique-form">Modifier mon mot de passe</h2>
							</div>
							
							<div class="wrap-field">

							  <div class="field-form">
								  <input type="password" required=" " name="pwd-user" placeholder=" " data-error-contener="div-erreur-champ-pwd-user" onkeyup="Verif_saisie(event, 'pwd-user', 'btn-valider')" id="pwd-user" class="mandatory-pwd" value="<?php ?>" >
								  <label class="libele-form">Mot de passe actuel</label>
								  <div class="message-erreur" id="div-erreur-champ-pwd-user" style="display: none;"> Veuillez saisir votre mot de passe actuel.</div>
							  </div>
								
								
								<div class="field-form">
								  <input type="password" required=" " name="new-pwd-user" placeholder=" " data-error-contener="div-erreur-champ-new-pwd-user" onkeyup="Verif_saisie(event, 'new-pwd-user', 'btn-valider')" id="new-pwd-user" class="mandatory-pwd" value="">
								  <label class="libele-form">Nouveau mot de passe</label>
								  <div class="message-erreur" id="div-erreur-champ-new-pwd-user" style="display: none;"> Veuillez saisir le nouveau mot de passe.</div>
							  </div>
								
								
								<div class="field-form">
								  <input type="password" required=" " name="confirm-pwd-user" placeholder=" " data-error-contener="div-erreur-champ-confirm-pwd-user" onkeyup="Verif_saisie(event, 'confirm-pwd-user', 'btn-valider')" id="confirm-pwd-user" class="mandatory-pwd" value="">
								  <label class="libele-form">Confirmez mot de passe</label>
								  <div class="message-erreur" id="div-erreur-champ-confirm-pwd-user" style="display: none;"> Confirmation invalide.</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <button type="button" class="btn btn-connexion" id="btn-valider" onClick="Modifier_pwd('<?php echo base64_encode("traitement_ajax/main.php") ?>')">Enregistrer</button>
						  </div>
						  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />   
						  <input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $ladministrateur[0] ?>" />   
						  <input type="hidden" name="traitement" id="traitement" value="update-pwd" />   
					    </form>
					</div>
				</div>
				
								
				<div class="wrap-bloc-parametre-compte">
					<div class="bloc-parametre-compte">
						<form action="" id="form-modifier-telephone">
							<div class="wrap-titre-rubrique-form">
								<h2 class="titre-rubrique-form">Modifier mon téléphone</h2>
							</div>
							
							<div class="wrap-field">

							  <div class="field-form">
								  <input type="telephone" required=" " name="telephone-user" placeholder=" " data-error-contener="div-erreur-champ-telephone-user" onkeyup="Verif_saisie(event, 'telephone-user', 'btn-valider')" id="telephone-user" readonly value="<?php echo $ladministrateur["telephone"] ?>">
								  <label class="libele-form">Votre téléphone</label>
								  <div class="message-erreur" id="div-erreur-champ-telephone-user" style="display: none;"> Veuillez saisir votre téléphone.</div>
							  </div>
								
								<div class="field-form">
								  <input type="telephone" required=" " name="new-telephone-user" placeholder=" " data-error-contener="div-erreur-champ-new-telephone-user" onkeyup="Verif_saisie(event, 'new-telephone-user', 'btn-valider-telephone')" id="new-telephone-user" class="mandatory-telephone" value="">
								  <label class="libele-form">Nouveau téléphone</label>
								  <div class="message-erreur" id="div-erreur-champ-new-telephone-user" style="display: none;"> Veuillez saisir le nouveau numéro de téléphone.</div>
							  </div>
								
								<div class="field-form">
								  <input type="telephone" required=" " name="confirm-telephone-user" placeholder=" " data-error-contener="div-erreur-champ-confirm-telephone-user" onkeyup="Verif_saisie(event, 'confirm-telephone-user', 'btn-valider-telephone')" id="confirm-telephone-user" class="mandatory-telephone" value="">
								  <label class="libele-form">Confirmez votre téléphone</label>
								  <div class="message-erreur" id="div-erreur-champ-confirm-telephone-user" style="display: none;"> Confirmation invalide.</div>
							  </div>
							</div>
							
							<div class="form-group">
							  <button type="button" class="btn btn-connexion" id="btn-valider" onClick="Modifier_telephone('<?php echo base64_encode("traitement_ajax/main.php") ?>')">Enregistrer</button>
						  </div>
						  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />   
						  <input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $ladministrateur[0] ?>" />   
						  <input type="hidden" name="traitement" id="traitement" value="update-telephone" />   
					    </form>
					</div>
				</div>
				
			</div>
										
										
										<div class="wrapper-bloc-photo-parametre-compte">
				<div class="wrap-bloc-photo-parametre-compte">
					<div class="bloc-photo-parametre-compte">
						
						<div class="demo-wrap upload-demo">
							<div class="container">
								<div class="grid">
									<div class="col-1-2">

										<div class="actions">
										<div class="upload-msg">
										   Joindre une photo
										</div>
										<div id="upload-demo"></div>
											<a class="btn file-btn">
												<span>
												 <?php 
								if ($photo_candidat==false){ ?>
								   Ajouter
							   <?php }else{?>Nouvelle photo<?php }?>
												 </span>
												<input type="file" id="upload" value="Choose a file" accept="image/*" />
											</a>
											<button class="upload-result">Enregistrer</button>
										</div>
									</div>

								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
										

									</div>

								</div>
							</div>

						</div>

					  </div>

					</div>

				</div>



			
	<script src="js/croppie.js"></script>
	<script src="js/demo.js"></script>
	<script>
		Demo.init();
	</script>
			
		<!-- Resources -->

		<script src="https://code.highcharts.com/highcharts.js"></script>

		<script src="https://code.highcharts.com/modules/exporting.js"></script>

		<script src="https://code.highcharts.com/modules/export-data.js"></script>

				<script>

					
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