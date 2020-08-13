<?php 
 session_start();
 $token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
 if(!isset($_SESSION['token'])) $_SESSION['token']= $token;

include("connectionbd.php");
include("mesfonctions.php");
?>	
		<html lang="fr">

		<head>

			<meta charset="ISO-8859-1">

			<meta name="description" content="TontiNet">
			<meta name="keywords" content="TontiNet">
			<meta name="author" content="Marc Merlin BAPPA">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<title>Gestion des contenus médias</title>
			<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
			<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
			<link rel="stylesheet" href="css/panel.css">
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
			<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
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
							  <h1 id="title-page">Multimedia ( Actualit&eacute;s, Photos, Vid&eacute;os) </h1>
							  <ul id="fil-arian">
								  <li><a href="./"><i class="fa fa-home"></i></a>
								  </li>
								  <li><a href="">Multimedia</a>
								  </li>
							  </ul>
						  </div>

						<ul id="conteneur-onglet-page">
							<li class="onglet-page actif" data-id="tab-actu">Actualit&eacute;s</li>
							 <li class="onglet-page " data-id="tab-album-photo">Albums photos</li>
							 <li class="onglet-page" data-id="tab-photo">Photos</li>
							 <li class="onglet-page" data-id="tab-video">Vid&eacute;os</li>
						</ul>

						<div id="wrap-content-right">
							<!--		Gestion des enregistrement de la page		-->
							<div id="conteneur-page">
								
								<!--			RUBRIQUE DE GESTION DE LA LISTE DES ARTISTES					-->
								<?php include("includes/onglet-actualite.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES GENRES					-->
								<?php include("includes/onglet-album-photo.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES ALBUMS					-->
								<?php include("includes/onglet-photo.php"); ?>
								
								<!--			RUBRIQUE DE GESTION DES TITRES				-->
								<?php //include("includes/onglet-titre.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES VILLES				-->
								<?php //include("includes/onglet-accueil.php"); ?>

								<!--			RUBRIQUE DE GESTION DES COMMUNES				-->
								<?php// include("includes/onglet-banniere.php"); ?>
								
								
								<!--			RUBRIQUE DE GESTION DES QUARTIERS				-->
								<?php //include("includes/onglet-quartier.php"); ?>


							</div>
						</div>
					  </div>
					</div>
				</div>

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

						$("select").change(function(){
							if($(this).val()=="" || $(this).val()=="0"){
								$(this).parents(".field-form").find(".message-erreur").slideDown("slow");
							}else $(this).parents(".field-form").find(".message-erreur").slideUp("slow");
						})

						$("input:radio").change(function(){
							if($(".message-erreur").is(":visible") ){
								$(this).parents(".wrap-field").find(".message-erreur").slideUp("slow");
							}
						})

						$("#conteneur-date-naissance select").change(function(){
							var jour=trim($("#jour_nais-membre").val());	
							var mois=trim($("#mois_nais-membre").val());	
							var annee=trim($("#annee_nais-membre").val());	
							if(checkdate (mois, jour, annee) && $("#div-erreur-champ-jour_nais-membre").is(":visible") ){
								$("#div-erreur-champ-jour_nais-membre").slideUp("slow");
							}
						})

						//gestion des erreur lié à l'année de naissance

						$("#annee_nais-membre").change(function(){
							var jour=trim($("#jour_nais-membre").val());	
							var mois=trim($("#mois_nais-membre").val());	
							var annee=trim($("#annee_nais-membre").val());	
							if(!checkdate (mois, jour, annee) && $("#div-erreur-champ-jour_nais-membre").not(":visible") ){
								$("#div-erreur-champ-jour_nais-membre").slideDown("slow");
							}
						})


					} )
				</script>


			<!-- Latest compiled and minified JavaScript -->
			<script src="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.js"></script>
			
			<script>
				$("#code-pays").change(function(){
					$('#indicatif').val($("#code-pays").find('option:selected').attr('data-code'));
				})
				$("#code-pays-whatsapp").change(function(){
					$('#indicatif-whatsapp').val($("#code-pays-whatsapp").find('option:selected').attr('data-code'));
				})
			
			$("input[name='ancien-militant']").change(function(){
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
			$(document).ready(function(){
				
				$("#pays-membre").change(function(){
					var valSelect=$(this).val();
					if(valSelect=='Gabon'){
					  $("#circonscription").slideDown("slow");
						$("#div_ville").show("fast");
						$("#ville-saisi").hide("fast");
					}else{
					  $("#circonscription").slideUp("slow");
						$("#div_ville").hide("fast");
						$("#ville-saisi").show("fast");
					}
				})
			})

			$(".btn-inscription").click(function(){
				Enregistrement_inscription('<?php echo base64_encode('traitement_ajax/traitement_enregistrement_inscription.php')?>');
			})
			
				$( '#date_ancienne_adhesion' ).datepicker( {
					language: 'fr',
					autoClose: true,
				} )
			</script>
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