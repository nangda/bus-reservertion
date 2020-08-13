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

			<title><?php echo $ladministrateur["prenom"];?> - Suivi des dossiers de demandes de crédit  - BICEC CRESCO</title>

			<meta name="description" content="Suivi des dossiers de demandes de crédit  - BICEC CRESCO">

			<meta name="keywords" content="DASHBORD BICEC CRESCO">

			<meta name="author" content="Marc Merlin BAPPA">

			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

			<base href="https://luxwebhostingservices.net/bicec-cresco/dashbord/">
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
					<?php if($droit_dacces["suivi_des_demandes"]=="0"){?>
					 <script>self.location='./accueil/'</script>
					<?php }?>
				<div id="wrap-section-right">
					  <div id="section-right">
 						  <div id="wrap-entete-page">
							  <h1 id="title-page">Suivi des dossiers clients</h1>
							  <ul id="fil-arian">
								  <li><a href="./"><i class="fa fa-home"></i></a>
								  </li>
								  <li>Liste des dossiers </li>
							  </ul>
						  </div>
						<ul id="conteneur-onglet-page">
							<li class="onglet-page <?php if((isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier") OR !isset($_SESSION["onglet-suivi"])){?>actif<?php }?>" data-id="tab-dossier">Tous les  dossiers</li>
							 <li class="onglet-page <?php if((isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier-attente")){?>actif<?php }?>" data-id="tab-dossier-attente">En attente</li>
							 <li class="onglet-page <?php if((isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier-encours")){?>actif<?php }?>" data-id="tab-dossier-encours">En cours</li>
 							 <li class="onglet-page <?php if((isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier-incomplet")){?>actif<?php }?>" data-id="tab-dossier-incomplet">Incomplets</li>
 							 <li class="onglet-page <?php if((isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier-valide")){?>actif<?php }?>" data-id="tab-dossier-valide">Validés</li>
 							 <li class="onglet-page <?php if((isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier-rejete")){?>actif<?php }?>" data-id="tab-dossier-rejete">Réjétés</li>
 						</ul>

 						<div id="wrap-content-right">
							<div id="conteneur-page">
								<?php include("includes/onglet-dossier.php"); ?>
								<?php include("includes/onglet-dossier-attente.php"); ?>
								<?php include("includes/onglet-dossier-encours.php"); ?>
								<?php include("includes/onglet-dossier-incomplet.php"); ?>
								<?php include("includes/onglet-dossier-valide.php"); ?>
								<?php include("includes/onglet-dossier-rejete.php"); ?>
							</div>
 						</div>
 					  </div>
 					</div>
 				</div>
 				<script>
 					function allCheck(){
 						$("#lightbox-droit-utilisateur input:checkbox").change(function(){
 							$(this).parent('li').find("input:checkbox").each(function(){
 								if($(this).is(":checked")){
 									$(this).prop("checked", false);
 								}else{
 									  $(this).prop("checked", true);
 								}
 							});

 							if($(this).is(":checked")){
 									$(this).prop("checked", false);
 								}else{
 									  $(this).prop("checked", true);
 								}
						})
					}

 					feather.replace()
					$( document ).ready( function () {
						 $(".onglet-page").click(function(){
						   $(".onglet-page").removeClass('actif');
						   $(this).addClass('actif');
						   var id=$(this).attr('data-id');
				 		   $(".wrap-contain-onglet-page").hide();
						   $("#"+id+"").show();
						   var element=$(this).attr("data-id"); 
						   traiementClickOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', element, '<?php echo $_SESSION["token"]?>') ;
						})
						$('.btn-filter').click( function (Event) {
 							Event.preventDefault();
 							$(this).parents('.contain-tab2').find('.conteneur-recherche-fiche').slideToggle('slow');
 							return false;
 						} )
					} )
				</script>
<?php 
if(!isset($_SESSION["onglet"])){
	$compte=$ladministrateur["nom"]." ".$ladministrateur["prenom"];
	$idcompte=$ladministrateur[0];
	$page="Suivi des demandes &raquo; Toutes les demandes";
	$operation="Lecture";
	$requete=$query_region;
	$libelle="Accès à l\'onglet de consultation de toutes les dossiers";
	$type="Admin";
	Enregistrer_visite($compte, $idcompte=0,$page,$operation,$requete, $libelle, $type);
}

?>

			</body>
		</html>