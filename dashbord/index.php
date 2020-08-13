<?php 

 session_start();

 $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

 if(!isset($_SESSION['token'])) $_SESSION['token']= $token;

 if(isset($_SESSION["login_client"])) unset($_SESSION["login_client"]);

?>

<!doctype html>

<html>

<head>

	<meta charset="utf-8">

	<meta name="robots" content="noindex, nofollow">

	<meta name="googlebot" content="noindex">

	<title>Identification - DASHBOARD BUS BOOKING</title>

	<meta name="description" content="Accès à la console d'administration">

	<meta name="keywords" content="DIGITALISATION BICEC CRESCO">

	<meta name="author" content="Marc Merlin BAPPA">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>

	<link rel="stylesheet" href="css/index.css">

	<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="js/jquery-1.8.2.min.js"></script>

<!--	<script src="owl-carousel/owl.carousel.min.js"></script>-->

	<script src="js/mesfonctions.js"></script>

	<script src="js/phpjs.js"></script>

	<script src="js/app.js"></script>

	<script src="js/md5.js"></script>

	 

</head>



<body>

	

<div class="wrap-container">

    <div class="container">

        <div class="wrap-bloc-identification">

            <div class="bloc-identification">

                <div class="wrap-bloc-texte-form">

                    <a href="#" class="wrap-logo">

                        <img src="../images/logo-blanc.png" class="logo" alt="logo">

                    </a>

                    <p><strong class="libelle-pas-membre">DASHBOARD  </strong> <br> Administration of the DIGITALE platform <strong>BUS BOOKING</strong>  </p>

                    <a href="formulaire-adhesion.php" class="btn-ensavoir" style="display: none">J'ADHERE</a>

                    <ul class="social-list clearfix">

                        <li><a href="https://www.facebook.com/LeGABONNOUVEAU/" target="_blank"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="https://twitter.com/GabonNouveau" target="_blank"><i class="fa fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                    </ul>

                </div>

                <div class="conteneur-bloc-form-identification">

					<div class="bloc-form-identification">

					  <h3><span class="libelle-titre-connexion">IDENTIFICATION </span>Please login to access the administration console</h3>

					  <form action="" id="form-login">

						  <div class="wrap-field">

							  <div class="field-form">

								  <input type="mail" required=" " name="login" placeholder="" data-error-contener="div-erreur-champ-login" onkeyup="Verif_saisie(event, 'identifiant', 'btn-valider')" id="identifiant">

								  <label class="libele-form">E-mail</label>

								  <div class="message-erreur" id="div-erreur-champ-login" style="display: none;">Enter your email.</div>

							  </div>

						  </div>

						  <div class="wrap-field">

							  <div class="field-form">

								  <input type="password" required=" " name="mdp" id="pwd" data-error-contener="div-erreur-champ-password-membre" onkeyup="Verif_saisie(event, 'pwd', 'btn-valider')">

								  <label class="libele-form">Password</label>

								  <div class="message-erreur" id="div-erreur-champ-password-membre" style="display: none;"> Enter a valide password.</div>

							  </div>

						  </div>

						  <div class="checkbox clearfix">

							  <div class="form-check">

							  </div>

							  <a  href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode('lightbox/lightbox-mot-de-passe-oublie.php')?>','loader');">Forgot password?</a>

						  </div>

						  <div class="form-group">

							  <button type="button" class="btn btn-connexion" id="btn-valider">Login</button>

						  </div>

						  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />   

						  <input type="hidden" name="traitement" id="traitement" value="identification" />   

					  </form>

            		</div>

                </div>

            </div>

        </div>

    </div>

</div>

	

	<script>

		$(".btn-connexion").click(function(){

			Acceder_compte('<?php echo base64_encode('traitement_ajax/main.php?traitement=identification')?>');

		})

		

	</script>

	

    <div id="loader" style="display:none">

		<div id="div_preloader" style="text-align: center">

			<img src="images/preloader.gif">

		</div>

	</div>

	<div id="loader2" style="display:none">

		<div id="div_preloader" style="text-align: center">

			<img src="images/preloader.gif">

		</div>

	</div>

</body>

</html>