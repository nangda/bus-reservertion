<?php 

 session_start();

 $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

 if(!isset($_SESSION['token'])) $_SESSION['token']= $token;

include("connectionbd.php");

include("mesfonctions.php");

if(isset($_SESSION["compte"]))$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

else echo "<script language=\"javascript\">self.location='../';</script>";

$base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" .$_SERVER['HTTP_HOST'] ; 

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

			<!-- Latest compiled and minified CSS -->
			<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">

			<script src="js/jquery-1.8.2.min.js"></script>

			<script src="js/mesfonctions.js"></script>

			<script src="js/phpjs.js"></script>

			<script src="js/app.js"></script>
			<script src="js/datepicker.min.js"></script>
			<!-- Include English language -->
			<script src="js/datepicker.fr.js"></script>
			


		</head>



		<body>
			<div id="grand-conteneur-page">

					<?php include("includes/header-cpt.php"); ?>

					<?php include("includes/menu-cpt.php"); ?>
					<?php if($droit_dacces["utilisateur"]=="0"){?>
					 <script>self.location='./accueil/'</script>
					<?php }?>
       <script>	
		   Fermeture_session_explicite('<?php echo base64_encode("lightbox/lightbox-notification-expiration-session.php")?>','<?php echo time()?>', '<?php echo $lastvisit["time"]?>')
       </script>

				<div id="wrap-section-right">

					  <div id="section-right">

						  <div id="wrap-entete-page">

							  <h1 id="title-page">GESTION DES UTILISATEURS</h1>

							  <ul id="fil-arian">

								  <li><a href="./"><i class="fa fa-home"></i></a>

								  </li>

								  <li><a href="">Liste des utilisateurs</a>

								  </li>

							  </ul>

						  </div>



						<ul id="conteneur-onglet-page">

							<li class="onglet-page <?php if((isset($_SESSION["onglet-utilisateur"]) AND $_SESSION["onglet-utilisateur"]=="tab-administrateur") OR !isset($_SESSION["onglet-utilisateur"])){?>actif<?php }?>" data-id="tab-administrateur">Gestion des administrateurs</li>

							 <li class="onglet-page <?php if((isset($_SESSION["onglet-utilisateur"]) AND $_SESSION["onglet-utilisateur"]=="tab-visite")){?>actif<?php }?>" data-id="tab-visite">Historique des connexions</li>

						</ul>



						<div id="wrap-content-right">

							<!--		Gestion des enregistrement de la page		-->

							<div id="conteneur-page">

								

								<!--			RUBRIQUE DE GESTION DE LA LISTE DES utilisateurs					-->

								<?php include("includes/onglet-administrateur.php"); ?>
								<!--			RUBRIQUE DE GESTION DE HISTORIQUE DES CONNEXIONS					-->

								<?php include("includes/onglet-visite.php"); ?>

								





							</div>

						</div>

					  </div>

					</div>
					</div>

				



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

		


				</script>

				<script>
					//feather.replace()

					$( document ).ready( function () {
						 $(".onglet-page").click(function(){
						   $(".onglet-page").removeClass('actif');
						   $(this).addClass('actif');
						   var id=$(this).attr('data-id');
				 		   $(".wrap-contain-onglet-page").hide();
						   $("#"+id+"").show();
						   var element=$(this).attr("data-id"); 
						   traiementClickOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-utilisateur")?>', element, '<?php echo $_SESSION["token"]?>') ;
						})
					} )
						$('.btn-filter').click( function (Event) {
 							Event.preventDefault();
 							$(this).parents('.contain-tab2').find('.conteneur-recherche-fiche').slideToggle('slow');
 							return false;
 						} )
                       $( '#date-debut-operation' ).datepicker( {
							language: 'fr',
							autoClose: true,
						} )

						$( '#date-fin-operation' ).datepicker( {
							language: 'fr',
							autoClose: true,

						} )					
				</script>
				
<?php 
if(time()-$lastvisit["time"]>1200){
	// unset($_SESSION["compte"]);
}elseif(!isset($_SESSION["onglet-utilisateur"])){

	$compte=$ladministrateur["nom"]." ".$ladministrateur["prenom"];
	$idcompte=$ladministrateur[0];
	$page="Utilisateurs &raquo; Gestion des administrateurs";
	$operation="Lecture";
	$requete=$query_region;
	$libelle="Accès à l\'onglet Gestion des administrateurs";
	$type="Admin";
	Enregistrer_visite($compte, $idcompte=0,$page,$operation,$requete, $libelle, $type);
}

?>				
				
			</body>

		</html>