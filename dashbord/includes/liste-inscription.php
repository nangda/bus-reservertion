<?php 
 session_start();
 $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
 if(!isset($_SESSION['token'])) $_SESSION['token']= $token;

include("connectionbd.php");
include("mesfonctions.php");
?>	
		<html>

		<head>

			<meta charset="ISO-8859-1">

			<meta name="description" content="TontiNet">
			<meta name="keywords" content="TontiNet">
			<meta name="author" content="Marc Merlin BAPPA">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<title>Liste des adh&eacute;sions Gabon Nouveau</title>
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
			<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.css">
			<script src="js/jquery-1.8.2.min.js"></script>
			<script src="owl-carousel/owl.carousel.min.js"></script>
			<script src="js/mesfonctions.js"></script>
			<script src="js/phpjs.js"></script>
			<script src="js/app.js"></script>
			<script src="js/sweetalert.min.js"></script>
			<script src="https://unpkg.com/feather-icons"></script>
			<script src="js/datepicker.min.js"></script>
			<!-- Include English language -->
			<script src="js/datepicker.fr.js"></script>

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
							  <h1 id="title-page">GESTION DES ADHESIONS</h1>
							  <ul id="fil-arian">
								  <li><a href="./"><i class="fa fa-home"></i></a>
								  </li>
								  <li><a href="">Liste des adh&eacute;sions</a>
								  </li>
							  </ul>
						  </div>

						<ul id="conteneur-onglet-page">
							<li class="onglet-page actif" data-id="tab-adhesion">Liste des adh&eacute;sions</li>
							 <li class="onglet-page " data-id="tab-nouvelle-adhesion">Nouvelle adh&eacute;sion</li>
							 <li class="onglet-page" data-id="tab-region">Province</li>
							 <li class="onglet-page" data-id="tab-departement">D&eacute;partement</li>
							 <li class="onglet-page" data-id="tab-commune">Commune</li>
							 <li class="onglet-page" data-id="tab-ville">Ville</li>
							 <li class="onglet-page" data-id="tab-quartier">Quartier</li>
						</ul>

						<div id="wrap-content-right">
							<!--		Gestion des enregistrement de la page		-->
							<div id="conteneur-page">
								
								<!--			RUBRIQUE DE GESTION DE LA LISTE DES ADHERENTS					-->
								<?php include("includes/onglet-liste-adhesion.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES ADHERENTS					-->
								<?php include("includes/onglet-nouvelle-adhesion.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES provinces					-->
								<?php include("includes/onglet-province.php"); ?>
								
								<!--			RUBRIQUE DE GESTION DES DEPARTEMENTS				-->
								<?php include("includes/onglet-departement.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES VILLES				-->
								<?php include("includes/onglet-ville.php"); ?>

								<!--			RUBRIQUE DE GESTION DES COMMUNES				-->
								<?php include("includes/onglet-commune.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES QUARTIERS				-->
								<?php include("includes/onglet-quartier.php"); ?>


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
					feather.replace()





					

			$( '#date_ancienne_adhesion' ).datepicker( {
							language: 'fr',
							autoClose: true,
						} )
					//**************************************************


					$( document ).ready( function () {
						$( "select" ).addClass( "search-select" );
						$('.btn-filter').click( function (Event) {
							Event.preventDefault();
							$(this).parents('.contain-tab2').find('.conteneur-recherche-fiche').slideToggle('slow');
							return false;
						} )
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

	//				var table = $( '#liste-page' ).DataTable( {
	//
	//					language: {
	//
	//						url: "http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
	//
	//					},
	//					"columnDefs": [ {
	//						orderable: false,
	//						targets: [ 0, 1, 2, 3, 4 ]
	//					} ],
	//					order: [
	//						[ 5, 'asc' ]
	//					],
	//
	//
	//				} );

					$( document ).ready( function () {
						
						$("input[name='ancien-miliant']").change(function(){
						var val_input=$(this).val();
							  if(val_input==1){
								  $("#bloc-deja-membre").show("slow");

							  }else{
								  $("#bloc-deja-membre").hide("slow");
								  $( "#bloc-deja-membre input " ).each(function() {
									  if(trim($(this).val())==""){
										  var conteneur_erreur=$(this).attr("data-error-contener");
										  $("#"+conteneur_erreur).fadeOut("slow");
									  }
								  });
							  }

					})

						  $(".onglet-page").click(function(){
						   $(".onglet-page").removeClass('actif');
						   $(this).addClass('actif');
						   var id=$(this).attr('data-id');
				;		  $(".wrap-contain-onglet-page").hide();
						  $("#"+id+"").show();
						})

						var table = $( '#table_id' ).DataTable( {

							language: {

								url: "http://cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"

							},
							"columnDefs": [ {
								orderable: false,
								targets: [ 0, 1, 2, 3, 4 ]
							} ],
							order: [
								[ 5, 'asc' ]
							],


						} );




					} )
					
				</script>


			<!-- Latest compiled and minified JavaScript -->
			<script src="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.js"></script>
			</body>
		</html>