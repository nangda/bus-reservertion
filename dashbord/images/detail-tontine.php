<html>

<head>

	<meta charset="iso-8859-1">
	<meta name="description" content="TontiNet">
	<meta name="keywords" content="TontiNet">
	<meta name="author" content="Marc Merlin BAPPA">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Espace membre TontiNet</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="css/detail-tontine.css">
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
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/notification.css">
	<link rel="stylesheet" type="text/css" href="css/tooltip.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.css">
		<!-- Include datepicker -->
    <link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="owl-carousel/owl.carousel.min.js"></script>
	<script src="js/mesfonctions.js"></script>
	<script src="js/phpjs.js"></script>
	<script src="js/app.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="https://unpkg.com/feather-icons"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script src="js/datepicker.min.js"></script>
	<!-- Include English language -->
	<script src="js/datepicker.fr.js"></script>
</head>

<body>

	
		<div id="grand-conteneur-page">

			<?php include("includes/header-cpt.php"); ?>	
			<div id="wrap-conteneur-page">

			<?php include("includes/menu-cpt.php"); ?>		
				<div id="wrap-section-right">
					<div id="section-right">
<!--
						<div id="wrap-entete-page">
							<h1 id="title-page">Console d'administration</h1>
							<ul id="fil-arian">
								<li><a href="./"><i class="fa fa-home"></i></a></li><li><a href="#">Espace membre</a></li>
								  <li><a href="#">Mes tontine</a></li>																  <li><a href="#">detail de la tontine</a></li>							</ul>
						</div>
-->
					
						<div id="conteneur-info-header-membre">
							<div id="info-header-membre">
								<div class="bloc-header-membre bloc-left-header-membre">
									<div class="wrap-bloc-info-header-membre">
										<div class="valeur-info-header-membre">Tontine AJS</div>
										<div class="libele-info-header-membre">Association des Jeunes de Songbegue</div>
									</div>
								</div>
								
								
								<div class="bloc-header-membre bloc-right-header-membre">
									<div class="wrap-bloc-info-header-membre">
										<div class="libele-info-header-membre">Date création</div>
										<div class="valeur-info-header-membre">Mer. 02 Jan. 2019</div>
									</div>
									<div class="wrap-bloc-info-header-membre">
										<div class="libele-info-header-membre">Fréquence </div>
										<div class="valeur-info-header-membre info-frequence">
											<span class="tontine-encours"> Mensuelle, tous les 15</span> <br>
											<span class="tontine-encours"> Début : Mer. 02 Jan. 2019</span> <span class="svaleur svaleur-btn">Modifier</span>
										</div>
									</div>
									<div class="wrap-bloc-info-header-membre">
										<div class="libele-info-header-membre">Statut </div>
										<div class="valeur-info-header-membre cla">
											<span class="tontine-encours"> En cours cycle 1.</span> <br>
											<span class="svaleur">Bénéficiaire 1 / 10</span>
										</div>
									</div>
									<div class="wrap-bloc-info-header-membre">
										<div class="libele-info-header-membre">Nombre de membres </div>
										<div class="valeur-info-header-membre">10 membres</div>
									</div>
									<div class="wrap-bloc-info-header-membre">
										<div class="libele-info-header-membre">Action </div>
										<div class="valeur-info-header-membre"><a href="#" class="btn-action fermer">Fermer le cycle</a></div>
									</div>
								</div>
							</div>
						</div>
						<ul id="conteneur-onglet-membre">
							<li class="onglet-membre actif" data-id="accueil-membre">Accueil</li>
							<li class="onglet-membre " data-id="tontine-membre">Les membres</li>
							<li class="onglet-membre " data-id="transaction-membre">Tr&eacute;sorerie</li>
							<li class="onglet-membre " data-id="activite-membre">Amendes</li>
							<li class="onglet-membre " data-id="activite-membre">Emprunts</li>
						</ul>
						<div id="wrap-content-right">
							<!--		Gestion des enregistrement de la page		-->
							<div id="conteneur-page">
								<div class="wrap-contain-onglet-membre" id="accueil-membre">
									<div class="contain-onglet-membre">
									<div class="wrap-info-membre">
										<div class="info-membre">
											<div class="photo-profil-membre"><img src="images/avatar-large.jpg" alt=""></div>
											<div class="wrap-detail-membre">
											<ul class="detail-membre">
												<li><h3 class="nom-detail-membre">BAPPA Marc Merlin</h3></li>	
												<li><span class="date-abonnement-membre">Membre depuis Mer. 02 Jan. 2019</span></li>
													
												<li><span class="pays-residence-membre">Cameroun</span></li>	
																								
																								
																									
												<li><span class="telephone-membre">699127866</span></li>
																								
														
												<li><span class="email-membre">merleauponti@luxwebservices.net</span></li>
													
												
														
											</ul>
											</div>
										</div>
									</div>

								  <div class="conteneur-wrap-bloc-page">
									  <div class="wrap-bloc-page" id="bloc-graphe">
										<div class="bloc-page box-shaldow">
										  <div class="wrap-titre-bloc-page">
											<h2 class="titre-bloc-page">Prochain bénéficiaire de la tontine</h2>
											<span class="date-prochain-beneficiaire">Voir les cotisations</span>
											</div>
											
											<div class="content-bloc-prochain-beneficiaire">
												<div class="ligne-bloc-prochain">Marc Merlin bénéficiera le : <span class="valeur-bloc-prochain"> Ven. 18 jan 2018</span></div>
												<div class="ligne-bloc-prochain">Montant max attendu :  <span class="valeur-bloc-prochain"> 500 000 Fcfa</span></div>
												<div class="ligne-bloc-prochain">Montant min attendu :  <span class="valeur-bloc-prochain"> 50 000 Fcfa</span></div>
												<div class="ligne-bloc-prochain">Montant déjà cotisé :  <span class="valeur-bloc-prochain"> 200 000 Fcfa</span></div>
												<div class="ligne-bloc-prochain">L'amende en cas de non paiement :  <span class="valeur-bloc-prochain"> 10 000 Fcfa</span></div>
											</div>
											
											<div class="wrap-autre-info-prochain">
												<div>
													<div class="bloc-prochain"> Min cotisable : <span>25 000 Fcfa</span> </div>
													<div class="bloc-prochain">Max cotisable : <span>200 000 Fcfa</span> </div>
												</div>
												
												<div class="cotisation"><a href="#">Payer la cotisation</a></div>
											</div>

										  </div>

									  </div>

									<div class="wrap-bloc-page" id="bloc-chiffre-stat">
									  <div class="wrap-list-bloc">
										<div class="bloc-page box-shaldow wrap-bloc-chiffre">
										  <div class="bloc-chiffre">
											<div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre">30 000 </h4>
											  <h6 class="libele-bloc-chiffre">Tontines&nbsp;&nbsp;</h6>
											  </div>
											<div class="img-bloc-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="401.601px" height="401.6px" viewBox="0 0 401.601 401.6" style="enable-background:new 0 0 401.601 401.6;" xml:space="preserve">
<g>
	<g>
		<path d="M116.682,229.329c11.286,0,22.195-0.729,32.518-2.086V114.094c-10.322-1.356-21.232-2.085-32.518-2.085    c-64.441,0-116.681,23.693-116.681,52.921v11.477C0.001,205.634,52.241,229.329,116.682,229.329z"/>
		<path d="M116.682,288.411c11.286,0,22.195-0.729,32.518-2.084v-33.166c-10.325,1.356-21.229,2.095-32.518,2.095    c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.124-2.454,10.839v11.477    C0.001,264.718,52.241,288.411,116.682,288.411z"/>
		<path d="M149.199,314.823v-2.578c-10.325,1.356-21.229,2.095-32.518,2.095c-56.25,0-103.199-18.054-114.227-42.082    C0.848,275.757,0,279.381,0,283.096v11.477c0,29.229,52.24,52.922,116.681,52.922c12.887,0,25.282-0.95,36.873-2.7    c-2.873-5.877-4.355-12.075-4.355-18.496V314.823z"/>
		<path d="M284.92,22.379c-64.441,0-116.681,23.693-116.681,52.921v11.477c0,29.228,52.24,52.921,116.681,52.921    c64.44,0,116.681-23.693,116.681-52.921V75.3C401.601,46.072,349.36,22.379,284.92,22.379z"/>
		<path d="M284.92,165.626c-56.25,0-103.199-18.053-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,147.573,341.17,165.626,284.92,165.626z"/>
		<path d="M284.92,224.71c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.229,52.24,52.922,116.681,52.922c64.44,0,116.681-23.693,116.681-52.922v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,206.657,341.17,224.71,284.92,224.71z"/>
		<path d="M284.92,286.983c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.123-2.454,10.838v11.478    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,268.928,341.17,286.983,284.92,286.983z"/>
		<path d="M284.92,346.066c-56.25,0-103.199-18.053-114.227-42.081c-1.606,3.5-2.454,7.125-2.454,10.838V326.3    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,328.012,341.17,346.066,284.92,346.066z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
											</div>
										  <div class="wrap-evolution-chiffre">
											<div class="libele-evolution">En savoir +</div>
											<div class="valeur-evolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
											</div>
										  </div>

										<div class="bloc-page box-shaldow wrap-bloc-chiffre">
										  <div class="bloc-chiffre">
											<div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre">60 000</h4>
											  <h6 class="libele-bloc-chiffre">Amandes </h6>
											  </div>
											<div class="img-bloc-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="401.601px" height="401.6px" viewBox="0 0 401.601 401.6" style="enable-background:new 0 0 401.601 401.6;" xml:space="preserve">
<g>
	<g>
		<path d="M116.682,229.329c11.286,0,22.195-0.729,32.518-2.086V114.094c-10.322-1.356-21.232-2.085-32.518-2.085    c-64.441,0-116.681,23.693-116.681,52.921v11.477C0.001,205.634,52.241,229.329,116.682,229.329z"/>
		<path d="M116.682,288.411c11.286,0,22.195-0.729,32.518-2.084v-33.166c-10.325,1.356-21.229,2.095-32.518,2.095    c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.124-2.454,10.839v11.477    C0.001,264.718,52.241,288.411,116.682,288.411z"/>
		<path d="M149.199,314.823v-2.578c-10.325,1.356-21.229,2.095-32.518,2.095c-56.25,0-103.199-18.054-114.227-42.082    C0.848,275.757,0,279.381,0,283.096v11.477c0,29.229,52.24,52.922,116.681,52.922c12.887,0,25.282-0.95,36.873-2.7    c-2.873-5.877-4.355-12.075-4.355-18.496V314.823z"/>
		<path d="M284.92,22.379c-64.441,0-116.681,23.693-116.681,52.921v11.477c0,29.228,52.24,52.921,116.681,52.921    c64.44,0,116.681-23.693,116.681-52.921V75.3C401.601,46.072,349.36,22.379,284.92,22.379z"/>
		<path d="M284.92,165.626c-56.25,0-103.199-18.053-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,147.573,341.17,165.626,284.92,165.626z"/>
		<path d="M284.92,224.71c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.229,52.24,52.922,116.681,52.922c64.44,0,116.681-23.693,116.681-52.922v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,206.657,341.17,224.71,284.92,224.71z"/>
		<path d="M284.92,286.983c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.123-2.454,10.838v11.478    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,268.928,341.17,286.983,284.92,286.983z"/>
		<path d="M284.92,346.066c-56.25,0-103.199-18.053-114.227-42.081c-1.606,3.5-2.454,7.125-2.454,10.838V326.3    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,328.012,341.17,346.066,284.92,346.066z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
											</div>
										  <div class="wrap-evolution-chiffre">
											<div class="libele-evolution">En savoir +</div>
											<div class="valeur-evolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
											</div>
										  </div>

										<div class="bloc-page box-shaldow wrap-bloc-chiffre">
										  <div class="bloc-chiffre">
											<div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre">40 000</h4>
											  <h6 class="libele-bloc-chiffre">Fond solidarité</h6>
											  </div>
											<div class="img-bloc-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="401.601px" height="401.6px" viewBox="0 0 401.601 401.6" style="enable-background:new 0 0 401.601 401.6;" xml:space="preserve">
<g>
	<g>
		<path d="M116.682,229.329c11.286,0,22.195-0.729,32.518-2.086V114.094c-10.322-1.356-21.232-2.085-32.518-2.085    c-64.441,0-116.681,23.693-116.681,52.921v11.477C0.001,205.634,52.241,229.329,116.682,229.329z"/>
		<path d="M116.682,288.411c11.286,0,22.195-0.729,32.518-2.084v-33.166c-10.325,1.356-21.229,2.095-32.518,2.095    c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.124-2.454,10.839v11.477    C0.001,264.718,52.241,288.411,116.682,288.411z"/>
		<path d="M149.199,314.823v-2.578c-10.325,1.356-21.229,2.095-32.518,2.095c-56.25,0-103.199-18.054-114.227-42.082    C0.848,275.757,0,279.381,0,283.096v11.477c0,29.229,52.24,52.922,116.681,52.922c12.887,0,25.282-0.95,36.873-2.7    c-2.873-5.877-4.355-12.075-4.355-18.496V314.823z"/>
		<path d="M284.92,22.379c-64.441,0-116.681,23.693-116.681,52.921v11.477c0,29.228,52.24,52.921,116.681,52.921    c64.44,0,116.681-23.693,116.681-52.921V75.3C401.601,46.072,349.36,22.379,284.92,22.379z"/>
		<path d="M284.92,165.626c-56.25,0-103.199-18.053-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,147.573,341.17,165.626,284.92,165.626z"/>
		<path d="M284.92,224.71c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.229,52.24,52.922,116.681,52.922c64.44,0,116.681-23.693,116.681-52.922v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,206.657,341.17,224.71,284.92,224.71z"/>
		<path d="M284.92,286.983c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.123-2.454,10.838v11.478    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,268.928,341.17,286.983,284.92,286.983z"/>
		<path d="M284.92,346.066c-56.25,0-103.199-18.053-114.227-42.081c-1.606,3.5-2.454,7.125-2.454,10.838V326.3    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,328.012,341.17,346.066,284.92,346.066z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
											</div>
										  <div class="wrap-evolution-chiffre">
											<div class="libele-evolution">En savoir + </div>
											<div class="valeur-evolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
											</div>
										  </div>

										<div class="bloc-page box-shaldow wrap-bloc-chiffre">
										  <div class="bloc-chiffre">
											<div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre">75 000</h4>
											  <h6 class="libele-bloc-chiffre">Caisse Scolaire</h6>
											  </div>
											<div class="img-bloc-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="401.601px" height="401.6px" viewBox="0 0 401.601 401.6" style="enable-background:new 0 0 401.601 401.6;" xml:space="preserve">
<g>
	<g>
		<path d="M116.682,229.329c11.286,0,22.195-0.729,32.518-2.086V114.094c-10.322-1.356-21.232-2.085-32.518-2.085    c-64.441,0-116.681,23.693-116.681,52.921v11.477C0.001,205.634,52.241,229.329,116.682,229.329z"/>
		<path d="M116.682,288.411c11.286,0,22.195-0.729,32.518-2.084v-33.166c-10.325,1.356-21.229,2.095-32.518,2.095    c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.124-2.454,10.839v11.477    C0.001,264.718,52.241,288.411,116.682,288.411z"/>
		<path d="M149.199,314.823v-2.578c-10.325,1.356-21.229,2.095-32.518,2.095c-56.25,0-103.199-18.054-114.227-42.082    C0.848,275.757,0,279.381,0,283.096v11.477c0,29.229,52.24,52.922,116.681,52.922c12.887,0,25.282-0.95,36.873-2.7    c-2.873-5.877-4.355-12.075-4.355-18.496V314.823z"/>
		<path d="M284.92,22.379c-64.441,0-116.681,23.693-116.681,52.921v11.477c0,29.228,52.24,52.921,116.681,52.921    c64.44,0,116.681-23.693,116.681-52.921V75.3C401.601,46.072,349.36,22.379,284.92,22.379z"/>
		<path d="M284.92,165.626c-56.25,0-103.199-18.053-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,147.573,341.17,165.626,284.92,165.626z"/>
		<path d="M284.92,224.71c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.229,52.24,52.922,116.681,52.922c64.44,0,116.681-23.693,116.681-52.922v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,206.657,341.17,224.71,284.92,224.71z"/>
		<path d="M284.92,286.983c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.123-2.454,10.838v11.478    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,268.928,341.17,286.983,284.92,286.983z"/>
		<path d="M284.92,346.066c-56.25,0-103.199-18.053-114.227-42.081c-1.606,3.5-2.454,7.125-2.454,10.838V326.3    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,328.012,341.17,346.066,284.92,346.066z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
											</div>
										  <div class="wrap-evolution-chiffre">
											<div class="libele-evolution">En savoir +</div>
											<div class="valeur-evolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
											</div>
										  </div>


										<div class="bloc-page box-shaldow wrap-bloc-chiffre">
										  <div class="bloc-chiffre">
											<div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre">500 000</h4>
											  <h6 class="libele-bloc-chiffre">Banque</h6>
											  </div>
											<div class="img-bloc-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="401.601px" height="401.6px" viewBox="0 0 401.601 401.6" style="enable-background:new 0 0 401.601 401.6;" xml:space="preserve">
<g>
	<g>
		<path d="M116.682,229.329c11.286,0,22.195-0.729,32.518-2.086V114.094c-10.322-1.356-21.232-2.085-32.518-2.085    c-64.441,0-116.681,23.693-116.681,52.921v11.477C0.001,205.634,52.241,229.329,116.682,229.329z"/>
		<path d="M116.682,288.411c11.286,0,22.195-0.729,32.518-2.084v-33.166c-10.325,1.356-21.229,2.095-32.518,2.095    c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.124-2.454,10.839v11.477    C0.001,264.718,52.241,288.411,116.682,288.411z"/>
		<path d="M149.199,314.823v-2.578c-10.325,1.356-21.229,2.095-32.518,2.095c-56.25,0-103.199-18.054-114.227-42.082    C0.848,275.757,0,279.381,0,283.096v11.477c0,29.229,52.24,52.922,116.681,52.922c12.887,0,25.282-0.95,36.873-2.7    c-2.873-5.877-4.355-12.075-4.355-18.496V314.823z"/>
		<path d="M284.92,22.379c-64.441,0-116.681,23.693-116.681,52.921v11.477c0,29.228,52.24,52.921,116.681,52.921    c64.44,0,116.681-23.693,116.681-52.921V75.3C401.601,46.072,349.36,22.379,284.92,22.379z"/>
		<path d="M284.92,165.626c-56.25,0-103.199-18.053-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,147.573,341.17,165.626,284.92,165.626z"/>
		<path d="M284.92,224.71c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.229,52.24,52.922,116.681,52.922c64.44,0,116.681-23.693,116.681-52.922v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,206.657,341.17,224.71,284.92,224.71z"/>
		<path d="M284.92,286.983c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.123-2.454,10.838v11.478    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,268.928,341.17,286.983,284.92,286.983z"/>
		<path d="M284.92,346.066c-56.25,0-103.199-18.053-114.227-42.081c-1.606,3.5-2.454,7.125-2.454,10.838V326.3    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,328.012,341.17,346.066,284.92,346.066z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
											</div>
										  <div class="wrap-evolution-chiffre">
											<div class="libele-evolution">En savoir +</div>
											<div class="valeur-evolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
											</div>
										  </div>


										<div class="bloc-page box-shaldow wrap-bloc-chiffre">
										  <div class="bloc-chiffre">
											<div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre">50</h4>
											  <h6 class="libele-bloc-chiffre">Emprunts</h6>
											  </div>
											<div class="img-bloc-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="401.601px" height="401.6px" viewBox="0 0 401.601 401.6" style="enable-background:new 0 0 401.601 401.6;" xml:space="preserve">
<g>
	<g>
		<path d="M116.682,229.329c11.286,0,22.195-0.729,32.518-2.086V114.094c-10.322-1.356-21.232-2.085-32.518-2.085    c-64.441,0-116.681,23.693-116.681,52.921v11.477C0.001,205.634,52.241,229.329,116.682,229.329z"/>
		<path d="M116.682,288.411c11.286,0,22.195-0.729,32.518-2.084v-33.166c-10.325,1.356-21.229,2.095-32.518,2.095    c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.124-2.454,10.839v11.477    C0.001,264.718,52.241,288.411,116.682,288.411z"/>
		<path d="M149.199,314.823v-2.578c-10.325,1.356-21.229,2.095-32.518,2.095c-56.25,0-103.199-18.054-114.227-42.082    C0.848,275.757,0,279.381,0,283.096v11.477c0,29.229,52.24,52.922,116.681,52.922c12.887,0,25.282-0.95,36.873-2.7    c-2.873-5.877-4.355-12.075-4.355-18.496V314.823z"/>
		<path d="M284.92,22.379c-64.441,0-116.681,23.693-116.681,52.921v11.477c0,29.228,52.24,52.921,116.681,52.921    c64.44,0,116.681-23.693,116.681-52.921V75.3C401.601,46.072,349.36,22.379,284.92,22.379z"/>
		<path d="M284.92,165.626c-56.25,0-103.199-18.053-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,147.573,341.17,165.626,284.92,165.626z"/>
		<path d="M284.92,224.71c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.499-2.454,7.123-2.454,10.839v11.477    c0,29.229,52.24,52.922,116.681,52.922c64.44,0,116.681-23.693,116.681-52.922v-11.477c0-3.716-0.848-7.34-2.454-10.839    C388.119,206.657,341.17,224.71,284.92,224.71z"/>
		<path d="M284.92,286.983c-56.25,0-103.199-18.054-114.227-42.082c-1.606,3.5-2.454,7.123-2.454,10.838v11.478    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,268.928,341.17,286.983,284.92,286.983z"/>
		<path d="M284.92,346.066c-56.25,0-103.199-18.053-114.227-42.081c-1.606,3.5-2.454,7.125-2.454,10.838V326.3    c0,29.228,52.24,52.921,116.681,52.921c64.44,0,116.681-23.693,116.681-52.921v-11.478c0-3.715-0.848-7.34-2.454-10.838    C388.119,328.012,341.17,346.066,284.92,346.066z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></div>
											</div>
										  <div class="wrap-evolution-chiffre">
											<div class="libele-evolution">En savoir +</div>
											<div class="valeur-evolution"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
											</div>
										  </div>


										</div>

									  </div>

									<div class="wrap-bloc-page" id="wrap-list-user">
									  <div class="bloc-page box-shaldow">
										<div class="wrap-titre-bloc-page">
										  <h2 class="titre-bloc-page">Historique des bénéficiaires de la tontine</h2>
											<a href="#" class="btn-cal-benef">Calendrier des bénéficiaires</a>
										  </div>
										<strong></strong><table width="100%" class="tab-liste" id="table_id">
										  <thead>
											<tr class="head-tab ligne-tab">          
											  <th width="" class="colonne-tab">Date</th>
											  <th width="" class="colonne-tab">Bénéficiaire </th>
											  <th width="" class="colonne-tab">Montant attendu</th>   
											  <th width="" class="colonne-tab">Montant reçu</th>   
											  </tr>
											</thead>

										  <tbody>
											  <tr class="ligne-tab">
												<td class="colonne-tab">Ven. 18 jan 2018</td>
												<td class="colonne-tab">Merleau ponti</td>
												<td class="colonne-tab">100 000 Fcfa</td>
												<td class="colonne-tab">100 000 Fcfa</td>
											  </tr>
											  <tr class="ligne-tab">
												<td class="colonne-tab">Ven. 18 jan 2018</td>
												<td class="colonne-tab">Merleau ponti</td>
												<td class="colonne-tab">100 000 Fcfa</td>
												<td class="colonne-tab">100 000 Fcfa</td>
											  </tr>
											  <tr class="ligne-tab">
												<td class="colonne-tab">Ven. 18 jan 2018</td>
												<td class="colonne-tab">Merleau ponti</td>
												<td class="colonne-tab">100 000 Fcfa</td>
												<td class="colonne-tab">100 000 Fcfa</td>
											  </tr>
											  <tr class="ligne-tab">
												<td class="colonne-tab">Ven. 18 jan 2018</td>
												<td class="colonne-tab">Merleau ponti</td>
												<td class="colonne-tab">100 000 Fcfa</td>
												<td class="colonne-tab">100 000 Fcfa</td>
											  </tr>
											  <tr class="ligne-tab">
												<td class="colonne-tab">Ven. 18 jan 2018</td>
												<td class="colonne-tab">Merleau ponti</td>
												<td class="colonne-tab">100 000 Fcfa</td>
												<td class="colonne-tab">100 000 Fcfa</td>
											  </tr>
											  <tr class="ligne-tab">
												<td class="colonne-tab">Ven. 18 jan 2018</td>
												<td class="colonne-tab">Merleau ponti</td>
												<td class="colonne-tab">100 000 Fcfa</td>
												<td class="colonne-tab">100 000 Fcfa</td>
											  </tr>
											  


										  </tbody></table>
										</div>
									  </div>


									<div class="wrap-bloc-page" id="wrap-last-activite">
									  <div class="bloc-page box-shaldow">
										<div class="wrap-titre-bloc-page">
										  <h2 class="titre-bloc-page">Dernières activités</h2>
										  </div>

										<div class="wrap-list-line-activity">
										  <div class="line-activite done">
											<div class="wrap-date-activite">
											  <div class="date-activite">8h40</div>

											  </div>
											<div class="wrap-info-activite">
											  <div class="titre-activite">Database backup completed!</div>

											  </div>
											</div>

										  <div class="line-activite">
											<div class="wrap-date-activite">
											  <div class="date-activite">il y 1 jour</div>

											  </div>
											<div class="wrap-info-activite">
											  <div class="titre-activite">Database backup completed!</div>

											  </div>
											</div>

										  <div class="line-activite urgent">
											<div class="wrap-date-activite">
											  <div class="date-activite">il y 1 jour</div>

											  </div>
											<div class="wrap-info-activite">
											  <div class="titre-activite">Database backup completed!</div>

											  </div>
											</div>



										  <div class="line-activite soon">
											<div class="wrap-date-activite">
											  <div class="date-activite">il y 1 jour</div>

											  </div>
											<div class="wrap-info-activite">
											  <div class="titre-activite">Database backup completed!</div>

											  </div>
											</div>


										  </div>

										</div>
									  </div>
								  </div>
									</div>
								</div>
								<div class="wrap-contain-onglet-membre" id="tontine-membre">
									<div class="contain-onglet-tontine-membre">
										
										<h2> Membres de la tontine </h2>
										<ul class="wrap-onglet-detail-tontine">
											<li class="onglet-tontine actif" data-id="tab-participant">Participants</li>
											<li class="onglet-tontine" data-id="tab-ajout-participant">Ajouter des participants</li>
											<li class="onglet-tontine" data-id="tab-invitation">Invitations en cours</li>
										</ul>
										
										<div class="conteneur-wrap-tab">
											<div class="contain-tab2" id="tab-participant">
												<h2 class="titre-page">Participants</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Glisser-déposer pour modifier l'ordre de paiement de la tontine ou cliquer sur les flèches haut-bas.</p>


													<table id="liste-participant">
														<thead>
															<tr>
																<th>Participants</th>
																<th>Email</th>
																<th>Téléphone</th>
																<th>Ordre</th>
																<th>Action</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">Merleau Ponti</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>1</td>
																<td>5</td>
																<td><a href="#" class="action-link">detail</a></td>
															</tr>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">Merleau Ponti</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>1</td>
																<td>5</td>
																<td><a href="#" class="action-link">detail</a></td>
															</tr>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">Merleau Ponti</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>1</td>
																<td>5</td>
																<td><a href="#" class="action-link">detail</a></td>
															</tr>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">Merleau Ponti</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>1</td>
																<td>5</td>
																<td><a href="#" class="action-link">detail</a></td>
															</tr>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">Merleau Ponti</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>1</td>
																<td>5</td>
																<td><a href="#" class="action-link">detail</a></td>
															</tr>
														</tbody>
													</table>

												</div>
											</div>


											<div class="contain-tab2" id="tab-invitation">
												<h2 class="titre-page">Invitations en cours</h2>


												<div class="wrap-content-page">


													<table id="liste-participant">
														<thead>
															<tr>
																<th>Invité(e)</th>
																<th>E-mail</th>
																<th>date</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">merleauponti@gmail.com</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>29-JANV.-2019</td>
															</tr>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">merleauponti@gmail.com</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>29-JANV.-2019</td>
															</tr>
															<tr>
																<td>
																	<div class="detail-liste-participant">
																		<img src="images/avatar-4.jpg" alt="">
																		<div class="info-liste-participant">merleauponti@gmail.com</div>
																	</div>
																</td>
																<td>monemail@gmail.com</td>
																<td>29-JANV.-2019</td>
															</tr>
														</tbody>
													</table>

												</div>
											</div>


											<div class="contain-tab2" id="tab-ajout-participant">
												<h2 class="titre-page">Ajouter des participants</h2>
												<p class="accroche-tab">Vous pouvez ajouter des participants à partir de votre liste de d'amis Facebook, liste de contacts, email ou en partageant simplement le lien de la tontine.</p>

												<div class="wrap-content-page">
													<div class="conteneur-bloc-accueil">
												<div class="wrap-bloc-accueil">
													<div class="bloc-accueil">
														<a href="#">
															<i class="fa fa-users" aria-hidden="true"></i>
															 <h3>Membre tontinet</h1>
														</a>
													</div>
												</div>
												<div class="wrap-bloc-accueil">
													<div class="bloc-accueil">
														<a href="#">
															<i class="fa fa-envelope-o" aria-hidden="true"></i>
															 <h3>Par mail</h1>
														</a>
													</div>
												</div>
												<div class="wrap-bloc-accueil">
													<div class="bloc-accueil">
														<a href="#">
															<i class="fa fa-link" aria-hidden="true"></i>
															 <h3>En envoyant un lien</h1>
														</a>
													</div>
												</div>
												<div class="wrap-bloc-accueil">
													<div class="bloc-accueil">
														<a href="#">
															<i class="fa fa-text-width" aria-hidden="true"></i>
															 <h3>Par sms</h1>
														</a>
													</div>
												</div>
											</div>

												</div>
											</div>

										</div>
										
									</div>
								</div>
								<div class="wrap-contain-onglet-membre" id="transaction-membre">
									<div class="contain-onglet-membre"><h2>Historique</h2></div>
								</div>	
								<div class="wrap-contain-onglet-membre" id="activite-membre">
									<div class="contain-onglet-membre"><h2>Activité</h2></div>
								</div>	
							</div>
						</div>
<!-- Resources -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
		<script>
			feather.replace()


    $( 'li.onglet-membre').click( function () {
					$( 'li.onglet-membre' ).removeClass( 'actif' );
					$( '.wrap-contain-onglet-membre').hide();
					$( this ).addClass('actif');
					$( '#'+$( this ).attr('data-id')).show();
				} )
			
			$(".contain-tab").fadeOut("slow");
				  $(".contain-tab2").first().fadeIn("slow");
				  $(".onglet-tontine").click(function(){
				   $(".onglet-tontine").removeClass('actif');
				   $(this).addClass('actif');
				   var id=$(this).attr('data-id');
				  $(".contain-tab2").fadeOut();
				  $("#"+id+"").fadeIn();
				})
				
	  Calendar.setup({
		 inputField     :    "date_debut",   // id of the input field
		 ifFormat       :    "%Y/%m/%d",       // format of the input field
		 showsTime      :    true,
		 timeFormat     :    "24",
	  });
	  Calendar.setup({
		 inputField     :    "date_fin",   // id of the input field
		 ifFormat       :    "%Y/%m/%d",       // format of the input field
		 showsTime      :    true,
		 timeFormat     :    "24",
	  });
	$("#effacer_date_enregistrement").click(function(e) {
        $("#date_debut, #date_fin").val("");
    });
	
	
</script>


<div id="paris" style="display:none " ondblclick="Fermeture()"></div>

<div id="div_recherche" align="left" onclick="Fermeture()" style="position:absolute;left: 0%; top:0%;z-index:1;background-image:url(transparent.png) !important;  background-image:url(no-image); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale src='transparent.png'); display:none; width:100%"></div>							
												</div>
				</div>
			</div>
		</div>



		<div>
			<div></div>
		</div>

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



		<script>
			feather.replace()


			$( document ).ready( function () {
				
				$('#select').multipleSelect({
				  placeholder: 'Selectionnez une date',
				  countSelected : '# of % selectionné(s)',
				  allSelected : 'Tout a été selectioné'
				});
				
				$( '.menu.dropdown' ).click( function () {
					$( '.wrap-smenu-left' ).hide( 'slow' );
					if ( $( this ).find( '.wrap-smenu-left' ).is( ':visible' ) ) {
						$( this ).find( '.wrap-smenu-left' ).hide( 'slow' );
					} else {
						$( this ).find( '.wrap-smenu-left' ).show( 'slow' );
					}
				} )
				
				
				//	Gestion du click sur le menu deroulant du profil utilisateur à gauche de la page.
				
				$( '#user-menu-profil span' ).click( function () {
					if ( $('#menu-profil' ).is( ':visible' ) ) {
						$('#menu-profil' ).slideUp( 'slow' );
					} else {
						$('#menu-profil' ).slideDown( 'slow' );
					}
				} )



				$( '.btn-ajouter' ).click( function () {
					if ( $( '#wrap-form-conteneur' ).is( ':visible' ) ) {
						$( '#wrap-form-conteneur' ).slideUp( 'slow' );
						return false;
					} else {
						$( '#wrap-form-conteneur' ).slideDown( 'slow' );
						return false;
					}
				} )



			} )
		</script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.js"></script>
	
</body>
</html>