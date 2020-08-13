		<html lang="fr">

		<head>

			<meta charset="iso-8859-1">

			<meta name="description" content="TontiNet">
			<meta name="keywords" content="TontiNet">
			<meta name="author" content="Marc Merlin BAPPA">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<title>Liste des adhésions Gabon Nouveau</title>
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
							  <h1 id="title-page">GESTION DES ADHESIONS</h1>
							  <ul id="fil-arian">
								  <li><a href="./"><i class="fa fa-home"></i></a>
								  </li>
								  <li><a href="">Liste des adhésions</a>
								  </li>
							  </ul>
						  </div>

						<ul id="conteneur-onglet-page">
							<li class="onglet-page actif" data-id="tab-adhesion">Liste des adhésions</li>
							 <li class="onglet-page " data-id="tab-nouvelle-adhesion">Nouvelle adhésion</li>
							 <li class="onglet-page" data-id="tab-region">Province</li>
							 <li class="onglet-page" data-id="tab-departement">Département</li>
							 <li class="onglet-page" data-id="tab-commune">Commune</li>
							 <li class="onglet-page" data-id="ville">Ville</li>
						</ul>

						<div id="wrap-content-right">
							<!--		Gestion des enregistrement de la page		-->
							<div id="conteneur-page">
								<div class="wrap-contain-onglet-page" id="tab-adhesion" style="display: block;">
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Liste des adhésions</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page">Adhérents</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des adhésions au mouvement Gabon Nouveau.</p>
														<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
																<div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">Période d'adhesion</div>
																	<div class="form-control">
																		<label for="">
																		  <input type="text" class="begening-date search date-debut-search datepicker-here" placeholder="Date début" name="date-debut-operation" id="date-debut-operation" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>


																		<label for=""> 
																			<input type="text" class="ending-date search date-fin-search datepicker-here" name="date-fin-operation" id="date-fin-operation" placeholder="Date fin" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>
																	</div>		
																</div>

																<div class="form-group">
																	<div class="form-control">
																		<label for="">Statut
																			<select name="statut" id="statut" type="text" class="search ref-search ref-search-responsive">
																				<option value="0">Sélectionnez</option>
																				<option value="adherent">Adherent</option>
																				<option value="Sympatisant">Sympatisant</option>

																			</select>
																		</label>
																	</div>	
																</div>
																<div class="form-group">
																	<label for="">Pays
																		<select name="pays" id="-search-pays" type="text" class="search ref-search" onchange="">
																			<option value="" desable selected>Pays de résidence</option>
											  <option value="Afghanistan">Afghanistan </option>
											<option value="Afrique_Centrale">Afrique_Centrale </option>
											<option value="Afrique_du_sud">Afrique_du_Sud </option> 
											<option value="Albanie">Albanie </option>
											<option value="Algerie">Algerie </option>
											<option value="Allemagne">Allemagne </option>
											<option value="Andorre">Andorre </option>
											<option value="Angola">Angola </option>
											<option value="Anguilla">Anguilla </option>
											<option value="Arabie_Saoudite">Arabie_Saoudite </option>
											<option value="Argentine">Argentine </option>
											<option value="Armenie">Armenie </option> 
											<option value="Australie">Australie </option>
											<option value="Autriche">Autriche </option>
											<option value="Azerbaidjan">Azerbaidjan </option>

											<option value="Bahamas">Bahamas </option>
											<option value="Bangladesh">Bangladesh </option>
											<option value="Barbade">Barbade </option>
											<option value="Bahrein">Bahrein </option>
											<option value="Belgique">Belgique </option>
											<option value="Belize">Belize </option>
											<option value="Benin">Benin </option>
											<option value="Bermudes">Bermudes </option>
											<option value="Bielorussie">Bielorussie </option>
											<option value="Bolivie">Bolivie </option>
											<option value="Botswana">Botswana </option>
											<option value="Bhoutan">Bhoutan </option>
											<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
											<option value="Bresil">Bresil </option>
											<option value="Brunei">Brunei </option>
											<option value="Bulgarie">Bulgarie </option>
											<option value="Burkina_Faso">Burkina_Faso </option>
											<option value="Burundi">Burundi </option>

											<option value="Caiman">Caiman </option>
											<option value="Cambodge">Cambodge </option>
											<option value="Cameroun">Cameroun </option>
											<option value="Canada">Canada </option>
											<option value="Canaries">Canaries </option>
											<option value="Cap_vert">Cap_Vert </option>
											<option value="Chili">Chili </option>
											<option value="Chine">Chine </option> 
											<option value="Chypre">Chypre </option> 
											<option value="Colombie">Colombie </option>
											<option value="Comores">Colombie </option>
											<option value="Congo">Congo </option>
											<option value="Congo_democratique">Congo_democratique </option>
											<option value="Cook">Cook </option>
											<option value="Coree_du_Nord">Coree_du_Nord </option>
											<option value="Coree_du_Sud">Coree_du_Sud </option>
											<option value="Costa_Rica">Costa_Rica </option>
											<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
											<option value="Croatie">Croatie </option>
											<option value="Cuba">Cuba </option>

											<option value="Danemark">Danemark </option>
											<option value="Djibouti">Djibouti </option>
											<option value="Dominique">Dominique </option>

											<option value="Egypte">Egypte </option> 
											<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
											<option value="Equateur">Equateur </option>
											<option value="Erythree">Erythree </option>
											<option value="Espagne">Espagne </option>
											<option value="Estonie">Estonie </option>
											<option value="Etats_Unis">Etats_Unis </option>
											<option value="Ethiopie">Ethiopie </option>

											<option value="Falkland">Falkland </option>
											<option value="Feroe">Feroe </option>
											<option value="Fidji">Fidji </option>
											<option value="Finlande">Finlande </option>
											<option value="France">France </option>

											<option value="Gabon" selected>Gabon </option>
											<option value="Gambie">Gambie </option>
											<option value="Georgie">Georgie </option>
											<option value="Ghana">Ghana </option>
											<option value="Gibraltar">Gibraltar </option>
											<option value="Grece">Grece </option>
											<option value="Grenade">Grenade </option>
											<option value="Groenland">Groenland </option>
											<option value="Guadeloupe">Guadeloupe </option>
											<option value="Guam">Guam </option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernesey">Guernesey </option>
											<option value="Guinee">Guinee </option>
											<option value="Guinee_Bissau">Guinee_Bissau </option>
											<option value="Guinee equatoriale">Guinee_Equatoriale </option>
											<option value="Guyana">Guyana </option>
											<option value="Guyane_Francaise ">Guyane_Francaise </option>

											<option value="Haiti">Haiti </option>
											<option value="Hawaii">Hawaii </option> 
											<option value="Honduras">Honduras </option>
											<option value="Hong_Kong">Hong_Kong </option>
											<option value="Hongrie">Hongrie </option>

											<option value="Inde">Inde </option>
											<option value="Indonesie">Indonesie </option>
											<option value="Iran">Iran </option>
											<option value="Iraq">Iraq </option>
											<option value="Irlande">Irlande </option>
											<option value="Islande">Islande </option>
											<option value="Israel">Israel </option>
											<option value="Italie">italie </option>

											<option value="Jamaique">Jamaique </option>
											<option value="Jan Mayen">Jan Mayen </option>
											<option value="Japon">Japon </option>
											<option value="Jersey">Jersey </option>
											<option value="Jordanie">Jordanie </option>

											<option value="Kazakhstan">Kazakhstan </option>
											<option value="Kenya">Kenya </option>
											<option value="Kirghizstan">Kirghizistan </option>
											<option value="Kiribati">Kiribati </option>
											<option value="Koweit">Koweit </option>

											<option value="Laos">Laos </option>
											<option value="Lesotho">Lesotho </option>
											<option value="Lettonie">Lettonie </option>
											<option value="Liban">Liban </option>
											<option value="Liberia">Liberia </option>
											<option value="Liechtenstein">Liechtenstein </option>
											<option value="Lituanie">Lituanie </option> 
											<option value="Luxembourg">Luxembourg </option>
											<option value="Lybie">Lybie </option>

											<option value="Macao">Macao </option>
											<option value="Macedoine">Macedoine </option>
											<option value="Madagascar">Madagascar </option>
											<option value="Madère">Madère </option>
											<option value="Malaisie">Malaisie </option>
											<option value="Malawi">Malawi </option>
											<option value="Maldives">Maldives </option>
											<option value="Mali">Mali </option>
											<option value="Malte">Malte </option>
											<option value="Man">Man </option>
											<option value="Mariannes du Nord">Mariannes du Nord </option>
											<option value="Maroc">Maroc </option>
											<option value="Marshall">Marshall </option>
											<option value="Martinique">Martinique </option>
											<option value="Maurice">Maurice </option>
											<option value="Mauritanie">Mauritanie </option>
											<option value="Mayotte">Mayotte </option>
											<option value="Mexique">Mexique </option>
											<option value="Micronesie">Micronesie </option>
											<option value="Midway">Midway </option>
											<option value="Moldavie">Moldavie </option>
											<option value="Monaco">Monaco </option>
											<option value="Mongolie">Mongolie </option>
											<option value="Montserrat">Montserrat </option>
											<option value="Mozambique">Mozambique </option>

											<option value="Namibie">Namibie </option>
											<option value="Nauru">Nauru </option>
											<option value="Nepal">Nepal </option>
											<option value="Nicaragua">Nicaragua </option>
											<option value="Niger">Niger </option>
											<option value="Nigeria">Nigeria </option>
											<option value="Niue">Niue </option>
											<option value="Norfolk">Norfolk </option>
											<option value="Norvege">Norvege </option>
											<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
											<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

											<option value="Oman">Oman </option>
											<option value="Ouganda">Ouganda </option>
											<option value="Ouzbekistan">Ouzbekistan </option>

											<option value="Pakistan">Pakistan </option>
											<option value="Palau">Palau </option>
											<option value="Palestine">Palestine </option>
											<option value="Panama">Panama </option>
											<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
											<option value="Paraguay">Paraguay </option>
											<option value="Pays_Bas">Pays_Bas </option>
											<option value="Perou">Perou </option>
											<option value="Philippines">Philippines </option> 
											<option value="Pologne">Pologne </option>
											<option value="Polynesie">Polynesie </option>
											<option value="Porto_Rico">Porto_Rico </option>
											<option value="Portugal">Portugal </option>

											<option value="Qatar">Qatar </option>

											<option value="Republique_Dominicaine">Republique_Dominicaine </option>
											<option value="Republique_Tcheque">Republique_Tcheque </option>
											<option value="Reunion">Reunion </option>
											<option value="Roumanie">Roumanie </option>
											<option value="Royaume_Uni">Royaume_Uni </option>
											<option value="Russie">Russie </option>
											<option value="Rwanda">Rwanda </option>

											<option value="Sahara Occidental">Sahara Occidental </option>
											<option value="Sainte_Lucie">Sainte_Lucie </option>
											<option value="Saint_Marin">Saint_Marin </option>
											<option value="Salomon">Salomon </option>
											<option value="Salvador">Salvador </option>
											<option value="Samoa_Occidentales">Samoa_Occidentales</option>
											<option value="Samoa_Americaine">Samoa_Americaine </option>
											<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
											<option value="Senegal">Senegal </option> 
											<option value="Seychelles">Seychelles </option>
											<option value="Sierra Leone">Sierra Leone </option>
											<option value="Singapour">Singapour </option>
											<option value="Slovaquie">Slovaquie </option>
											<option value="Slovenie">Slovenie</option>
											<option value="Somalie">Somalie </option>
											<option value="Soudan">Soudan </option> 
											<option value="Sri_Lanka">Sri_Lanka </option> 
											<option value="Suede">Suede </option>
											<option value="Suisse">Suisse </option>
											<option value="Surinam">Surinam </option>
											<option value="Swaziland">Swaziland </option>
											<option value="Syrie">Syrie </option>

											<option value="Tadjikistan">Tadjikistan </option>
											<option value="Taiwan">Taiwan </option>
											<option value="Tonga">Tonga </option>
											<option value="Tanzanie">Tanzanie </option>
											<option value="Tchad">Tchad </option>
											<option value="Thailande">Thailande </option>
											<option value="Tibet">Tibet </option>
											<option value="Timor_Oriental">Timor_Oriental </option>
											<option value="Togo">Togo </option> 
											<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
											<option value="Tristan da cunha">Tristan de cuncha </option>
											<option value="Tunisie">Tunisie </option>
											<option value="Turkmenistan">Turmenistan </option> 
											<option value="Turquie">Turquie </option>

											<option value="Ukraine">Ukraine </option>
											<option value="Uruguay">Uruguay </option>

											<option value="Vanuatu">Vanuatu </option>
											<option value="Vatican">Vatican </option>
											<option value="Venezuela">Venezuela </option>
											<option value="Vierges_Americaines">Vierges_Americaines </option>
											<option value="Vierges_Britanniques">Vierges_Britanniques </option>
											<option value="Vietnam">Vietnam </option>

											<option value="Wake">Wake </option>
											<option value="Wallis et Futuma">Wallis et Futuma </option>

											<option value="Yemen">Yemen </option>
											<option value="Yougoslavie">Yougoslavie </option>

											<option value="Zambie">Zambie </option>
											<option value="Zimbabwe">Zimbabwe </option>

																		</select>
																	</label>

																</div>
															  
															  
															  	<div class="form-group">
																	<div class="form-control">
																		<label for="">Province
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Province</option>
																				  <option value="Estuaire ">Estuaire </option>
																				  <option value="Haut-Ogooué">Haut-Ogooué</option>
																				  <option value="Moyen-Ogooué">Moyen-Ogooué</option>
																				  <option value="Ngounié">Ngounié</option>
																				  <option value="Nyanga">Nyanga</option>
																				  <option value="Ogooué-Ivindo">Ogooué-Ivindo</option>
																				  <option value="Ogooué-Lolo">Ogooué-Lolo</option>
																				  <option value="Ogooué-Maritime">Ogooué-Maritime</option>
																				  <option value="Woleu-Ntem">Woleu-Ntem</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  
															  	<div class="form-group">
																	<div class="form-control">
																		<label for="">Département
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Département</option>
																				  <option value="Komo">Komo</option>
																				  <option value="Komo-Mondah">Komo-Mondah</option>
																				  <option value="Komo-Océan">Komo-Océan</option>
																				  <option value="Noya">Noya</option>
																				  <option value="Libreville">Libreville</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  	<div class="form-group">
																	<label class="input-with-search-icon" for="">
																		Ville
																		<div class="slect-with-search-icon">
																			<select name="ville" type="text" class="select-ville search ref-search" id="ville">
																				<option value="0">Sélectionnez</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>


																			</select>
																		</div>		
																	</label>
																</div>
															  
															  	<div class="form-group">
																	<label class="input-with-search-icon" for="">
																		Commune
																		<div class="slect-with-search-icon">
																			<select name="compte-search-operation" type="text" class="select-compte-operation search ref-search" id="compte-search-operation">
																				<option value="0">Sélectionnez</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>


																			</select>
																		</div>		
																	</label>
																</div>
															  
															  <div class="form-group">
															  	<label for="">Matricule<input name="libelle-matricule" type="text" class="search ref-search" id="libelle-matricule" placeholder="Ex: #12345678" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
															  	<label for="">Nom<input name="libelle-nom" type="text" class="search ref-search" id="libelle-nom" placeholder="Ex: Jocktane" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
																	<label class="input-with-search-icon" for="">
																		Sexe
																		<div class="slect-with-search-icon">
																			<select name="compte-search-operation" type="text" class="select-compte-operation search ref-search" id="compte-search-operation">
																				<option value="0">Sexe</option>
																				  <option value="Homme">Homme</option>
																				  <option value="Femme">Femme</option>


																			</select>
																		</div>		
																	</label>
																</div>
															  
															  <div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">Tranche d'âge</div>
																	<div class="form-control">
																		<div class="slect-with-search-icon">
																			<select name="age-debut" type="text" class="sage-debut search ref-search" id="age-debut">
																				<option value="0">Age min</option>
																				  <option value="25">25</option>
																				  <option value="26">26</option>


																			</select>
																		</div>


																		<div class="slect-with-search-icon">
																			<select name="age-fin" type="text" class="sage-fin search ref-search" id="age-fin">
																				<option value="0">Age max</option>
																				  <option value="25">25</option>
																				  <option value="26">26</option>


																			</select>
																		</div>
																	</div>		
																</div>
															  
															  <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" ><i class="fa fa-search"></i></button>
															  </div>
															  
															</form>
														</div>

													<table id="liste-page">
														<thead>
															<tr>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th>Date d'adhésion</th>
																<th>Statut</th>
																<th>Matricule</th>
																<th>Adherant</th>
																<th>Nationalité</th>
																<th>Age</th>
																<th>Pays</th>
																<th>Ville</th>
																<th>Commune</th>
																<th>Email</th>
																<th>Téléphone</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i></td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i></td>
																<td class="colonne-tab delete-line"><i class="fa fa-trash"></i></td>
																<td>Ven. 02 Août 2019</td>
																<td>Adhérent</td>
																<td>A300819</td>
																<td>
																	<div class="detail-liste-page">
																		<div class="info-liste-page">&nbsp;
																		  <a href="#" class="link-detail-ref">M. Mike JOCKTANE</a>
																		</div>
																	</div>
																</td>
																<td>Gabonaise</td>
																<td>55 ans</td>
																<td>Gabon</td>
																<td>Oyem</td>
																<td>Libreville</td>
																<td>pierre.tsala@luxwebservices.net	</td>
																<td>697488100</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="wrap-contain-onglet-page" id="tab-nouvelle-adhesion" >
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Nouvelle Adhésion</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page">Ajouter un adhérent</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Le formulaire suivant vous permet d'ajouter un adherent</p>
													<div class="conteneur-formulaire">
														<form action="../index.html" method="GET">
															<div class="wrap-rubrique-form">
																<h3 class="wrap-titre-rubrique-form">Vous souhaitez devenir un :</h3>
																<div class="rubrique-form">
																	<div class="wrap-field middle">									
																		<div class="field-form">
																		  <input type="radio" required=" " class="form-check-input" name="membre" id="adherant-membre" data-error-contener="div-erreur-champ-adherant-membre" onkeyup="Verif_saisie(event, 'adherant-membre', 'btn-valider')">
																		  <label class="libele-form form-check-label" for="adherant-membre">Membre adhérent</label>
																		</div>


																		<div class="field-form">
																		  <input type="radio" required=" " class="form-check-input" name="membre" id="sympatisant-membre" data-error-contener="div-erreur-champ-sympatisant-membre" onkeyup="Verif_saisie(event, 'sympatisant-membre', 'btn-valider')">
																		  <label class="libele-form form-check-label" for="sympatisant-membre">Membre sympatisant</label>
																		</div>
																	</div>
																</div>
															</div>
															<div class="wrap-rubrique-form">
																<h3 class="wrap-titre-rubrique-form">Informations Personnelles</h3>
																<div class="rubrique-form">
																	<div class="wrap-field full">									
																		<div class="field-form">
																			<select name="sexe" id="sexe-membre"  required>
																				  <option value="" desable selected>Vous êtes</option>
																				  <option value="M">Homme</option>
																				  <option value="Mme">Femme</option>
																			</select>
																		</div>
																	</div>

																	<div class="wrap-field middle">
																		<div class="field-form">
																			<input type="text" required name="nom" id="nom-membre" data-error-contener="div-erreur-champ-nom-membre" onKeyup ="Verif_saisie(event, 'nom-membre', 'btn-valider')">
																			<label class="libele-form">Nom</label>
																			<div class="message-erreur" id="div-erreur-champ-nom-membre"> Veuillez saisir votre nom.</div>
																		</div>
																		<div class="field-form">
																			<input type="text" required name="prenom"  id="prenom-membre" data-error-contener="div-erreur-champ-prenom-membre" onKeyup ="Verif_saisie(event, 'prenom-membre', 'btn-valider')">
																			<label class="libele-form">Prénom</label>
																			<div class="message-erreur" id="div-erreur-champ-prenom-membre"> Veuillez saisir votre pr&eacute;nom.</div>
																		</div>
																	</div>

																	<div class="wrap-field middle">
																		<div class="field-form">
																			<select name="pays"> 

																				<option class="libele-form" selected>Nationalité</option>
																				<option value="Afghanistan">Afghanistan </option>
																				<option value="Afrique_Centrale">Afrique_Centrale </option>
																				<option value="Afrique_du_sud">Afrique_du_Sud </option> 
																				<option value="Albanie">Albanie </option>
																				<option value="Algerie">Algerie </option>
																				<option value="Allemagne">Allemagne </option>
																				<option value="Andorre">Andorre </option>
																				<option value="Angola">Angola </option>
																				<option value="Anguilla">Anguilla </option>
																				<option value="Arabie_Saoudite">Arabie_Saoudite </option>
																				<option value="Argentine">Argentine </option>
																				<option value="Armenie">Armenie </option> 
																				<option value="Australie">Australie </option>
																				<option value="Autriche">Autriche </option>
																				<option value="Azerbaidjan">Azerbaidjan </option>

																				<option value="Bahamas">Bahamas </option>
																				<option value="Bangladesh">Bangladesh </option>
																				<option value="Barbade">Barbade </option>
																				<option value="Bahrein">Bahrein </option>
																				<option value="Belgique">Belgique </option>
																				<option value="Belize">Belize </option>
																				<option value="Benin">Benin </option>
																				<option value="Bermudes">Bermudes </option>
																				<option value="Bielorussie">Bielorussie </option>
																				<option value="Bolivie">Bolivie </option>
																				<option value="Botswana">Botswana </option>
																				<option value="Bhoutan">Bhoutan </option>
																				<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
																				<option value="Bresil">Bresil </option>
																				<option value="Brunei">Brunei </option>
																				<option value="Bulgarie">Bulgarie </option>
																				<option value="Burkina_Faso">Burkina_Faso </option>
																				<option value="Burundi">Burundi </option>

																				<option value="Caiman">Caiman </option>
																				<option value="Cambodge">Cambodge </option>
																				<option value="Cameroun">Cameroun </option>
																				<option value="Canada">Canada </option>
																				<option value="Canaries">Canaries </option>
																				<option value="Cap_vert">Cap_Vert </option>
																				<option value="Chili">Chili </option>
																				<option value="Chine">Chine </option> 
																				<option value="Chypre">Chypre </option> 
																				<option value="Colombie">Colombie </option>
																				<option value="Comores">Colombie </option>
																				<option value="Congo">Congo </option>
																				<option value="Congo_democratique">Congo_democratique </option>
																				<option value="Cook">Cook </option>
																				<option value="Coree_du_Nord">Coree_du_Nord </option>
																				<option value="Coree_du_Sud">Coree_du_Sud </option>
																				<option value="Costa_Rica">Costa_Rica </option>
																				<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
																				<option value="Croatie">Croatie </option>
																				<option value="Cuba">Cuba </option>

																				<option value="Danemark">Danemark </option>
																				<option value="Djibouti">Djibouti </option>
																				<option value="Dominique">Dominique </option>

																				<option value="Egypte">Egypte </option> 
																				<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
																				<option value="Equateur">Equateur </option>
																				<option value="Erythree">Erythree </option>
																				<option value="Espagne">Espagne </option>
																				<option value="Estonie">Estonie </option>
																				<option value="Etats_Unis">Etats_Unis </option>
																				<option value="Ethiopie">Ethiopie </option>

																				<option value="Falkland">Falkland </option>
																				<option value="Feroe">Feroe </option>
																				<option value="Fidji">Fidji </option>
																				<option value="Finlande">Finlande </option>
																				<option value="France">France </option>

																				<option value="Gabon">Gabon </option>
																				<option value="Gambie">Gambie </option>
																				<option value="Georgie">Georgie </option>
																				<option value="Ghana">Ghana </option>
																				<option value="Gibraltar">Gibraltar </option>
																				<option value="Grece">Grece </option>
																				<option value="Grenade">Grenade </option>
																				<option value="Groenland">Groenland </option>
																				<option value="Guadeloupe">Guadeloupe </option>
																				<option value="Guam">Guam </option>
																				<option value="Guatemala">Guatemala</option>
																				<option value="Guernesey">Guernesey </option>
																				<option value="Guinee">Guinee </option>
																				<option value="Guinee_Bissau">Guinee_Bissau </option>
																				<option value="Guinee equatoriale">Guinee_Equatoriale </option>
																				<option value="Guyana">Guyana </option>
																				<option value="Guyane_Francaise ">Guyane_Francaise </option>

																				<option value="Haiti">Haiti </option>
																				<option value="Hawaii">Hawaii </option> 
																				<option value="Honduras">Honduras </option>
																				<option value="Hong_Kong">Hong_Kong </option>
																				<option value="Hongrie">Hongrie </option>

																				<option value="Inde">Inde </option>
																				<option value="Indonesie">Indonesie </option>
																				<option value="Iran">Iran </option>
																				<option value="Iraq">Iraq </option>
																				<option value="Irlande">Irlande </option>
																				<option value="Islande">Islande </option>
																				<option value="Israel">Israel </option>
																				<option value="Italie">italie </option>

																				<option value="Jamaique">Jamaique </option>
																				<option value="Jan Mayen">Jan Mayen </option>
																				<option value="Japon">Japon </option>
																				<option value="Jersey">Jersey </option>
																				<option value="Jordanie">Jordanie </option>

																				<option value="Kazakhstan">Kazakhstan </option>
																				<option value="Kenya">Kenya </option>
																				<option value="Kirghizstan">Kirghizistan </option>
																				<option value="Kiribati">Kiribati </option>
																				<option value="Koweit">Koweit </option>

																				<option value="Laos">Laos </option>
																				<option value="Lesotho">Lesotho </option>
																				<option value="Lettonie">Lettonie </option>
																				<option value="Liban">Liban </option>
																				<option value="Liberia">Liberia </option>
																				<option value="Liechtenstein">Liechtenstein </option>
																				<option value="Lituanie">Lituanie </option> 
																				<option value="Luxembourg">Luxembourg </option>
																				<option value="Lybie">Lybie </option>

																				<option value="Macao">Macao </option>
																				<option value="Macedoine">Macedoine </option>
																				<option value="Madagascar">Madagascar </option>
																				<option value="Madère">Madère </option>
																				<option value="Malaisie">Malaisie </option>
																				<option value="Malawi">Malawi </option>
																				<option value="Maldives">Maldives </option>
																				<option value="Mali">Mali </option>
																				<option value="Malte">Malte </option>
																				<option value="Man">Man </option>
																				<option value="Mariannes du Nord">Mariannes du Nord </option>
																				<option value="Maroc">Maroc </option>
																				<option value="Marshall">Marshall </option>
																				<option value="Martinique">Martinique </option>
																				<option value="Maurice">Maurice </option>
																				<option value="Mauritanie">Mauritanie </option>
																				<option value="Mayotte">Mayotte </option>
																				<option value="Mexique">Mexique </option>
																				<option value="Micronesie">Micronesie </option>
																				<option value="Midway">Midway </option>
																				<option value="Moldavie">Moldavie </option>
																				<option value="Monaco">Monaco </option>
																				<option value="Mongolie">Mongolie </option>
																				<option value="Montserrat">Montserrat </option>
																				<option value="Mozambique">Mozambique </option>

																				<option value="Namibie">Namibie </option>
																				<option value="Nauru">Nauru </option>
																				<option value="Nepal">Nepal </option>
																				<option value="Nicaragua">Nicaragua </option>
																				<option value="Niger">Niger </option>
																				<option value="Nigeria">Nigeria </option>
																				<option value="Niue">Niue </option>
																				<option value="Norfolk">Norfolk </option>
																				<option value="Norvege">Norvege </option>
																				<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
																				<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

																				<option value="Oman">Oman </option>
																				<option value="Ouganda">Ouganda </option>
																				<option value="Ouzbekistan">Ouzbekistan </option>

																				<option value="Pakistan">Pakistan </option>
																				<option value="Palau">Palau </option>
																				<option value="Palestine">Palestine </option>
																				<option value="Panama">Panama </option>
																				<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
																				<option value="Paraguay">Paraguay </option>
																				<option value="Pays_Bas">Pays_Bas </option>
																				<option value="Perou">Perou </option>
																				<option value="Philippines">Philippines </option> 
																				<option value="Pologne">Pologne </option>
																				<option value="Polynesie">Polynesie </option>
																				<option value="Porto_Rico">Porto_Rico </option>
																				<option value="Portugal">Portugal </option>

																				<option value="Qatar">Qatar </option>

																				<option value="Republique_Dominicaine">Republique_Dominicaine </option>
																				<option value="Republique_Tcheque">Republique_Tcheque </option>
																				<option value="Reunion">Reunion </option>
																				<option value="Roumanie">Roumanie </option>
																				<option value="Royaume_Uni">Royaume_Uni </option>
																				<option value="Russie">Russie </option>
																				<option value="Rwanda">Rwanda </option>

																				<option value="Sahara Occidental">Sahara Occidental </option>
																				<option value="Sainte_Lucie">Sainte_Lucie </option>
																				<option value="Saint_Marin">Saint_Marin </option>
																				<option value="Salomon">Salomon </option>
																				<option value="Salvador">Salvador </option>
																				<option value="Samoa_Occidentales">Samoa_Occidentales</option>
																				<option value="Samoa_Americaine">Samoa_Americaine </option>
																				<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
																				<option value="Senegal">Senegal </option> 
																				<option value="Seychelles">Seychelles </option>
																				<option value="Sierra Leone">Sierra Leone </option>
																				<option value="Singapour">Singapour </option>
																				<option value="Slovaquie">Slovaquie </option>
																				<option value="Slovenie">Slovenie</option>
																				<option value="Somalie">Somalie </option>
																				<option value="Soudan">Soudan </option> 
																				<option value="Sri_Lanka">Sri_Lanka </option> 
																				<option value="Suede">Suede </option>
																				<option value="Suisse">Suisse </option>
																				<option value="Surinam">Surinam </option>
																				<option value="Swaziland">Swaziland </option>
																				<option value="Syrie">Syrie </option>

																				<option value="Tadjikistan">Tadjikistan </option>
																				<option value="Taiwan">Taiwan </option>
																				<option value="Tonga">Tonga </option>
																				<option value="Tanzanie">Tanzanie </option>
																				<option value="Tchad">Tchad </option>
																				<option value="Thailande">Thailande </option>
																				<option value="Tibet">Tibet </option>
																				<option value="Timor_Oriental">Timor_Oriental </option>
																				<option value="Togo">Togo </option> 
																				<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
																				<option value="Tristan da cunha">Tristan de cuncha </option>
																				<option value="Tunisie">Tunisie </option>
																				<option value="Turkmenistan">Turmenistan </option> 
																				<option value="Turquie">Turquie </option>

																				<option value="Ukraine">Ukraine </option>
																				<option value="Uruguay">Uruguay </option>

																				<option value="Vanuatu">Vanuatu </option>
																				<option value="Vatican">Vatican </option>
																				<option value="Venezuela">Venezuela </option>
																				<option value="Vierges_Americaines">Vierges_Americaines </option>
																				<option value="Vierges_Britanniques">Vierges_Britanniques </option>
																				<option value="Vietnam">Vietnam </option>

																				<option value="Wake">Wake </option>
																				<option value="Wallis et Futuma">Wallis et Futuma </option>

																				<option value="Yemen">Yemen </option>
																				<option value="Yougoslavie">Yougoslavie </option>

																				<option value="Zambie">Zambie </option>
																				<option value="Zimbabwe">Zimbabwe </option>

																			</select>
																			<div class="message-erreur" id="div-erreur-champ-nationalite-membre"> Veuillez saisir votre nationalite.</div>
																		</div>
																		<div class="field-form">
																			<span class="titre-line">Date de naissance</span>
																			<div class="wrap-field third">
																				  <div class="field-form">
																					  <select name="jour_nais" id="jour_nais-membre"  required>
																						  <option value="" desable selected>Jour</option>
																						  <?php
																							for($i=0; $i<=31; $i++){
																								echo '<option value="'.$i.'" desable selected>'.$i.'</option>';
																							}
																						  ?>
																					</select>
																					  <div class="message-erreur" id="div-erreur-champ-jour_nais-membre" style="display: none;"> Jour.</div>
																				  </div>

																				<div class="field-form">
																					 <select name="mois_nais" id="mois_nais-membre"  required>
																						  <option value="" selected>Mois</option>
																						  <?php
																							for($i=1; $i<='12'; $i++){
																								echo '<option value="'.$tab_mois[$i].'" >'.$tab_mois[$i].'</option>';
																							}
																						  ?>
																					</select>
																					  <div class="message-erreur" id="div-erreur-champ-mois_nais-membre" style="display: none;"> Jour.</div>
																				  </div>

																				<div class="field-form">
																					  <select name="annee_nais" id="annee_nais-membre"  required>
																						  <option value="" selected>Année</option>
																						  <?php
																							for($i=date('Y')-18; $i>date('Y'); $i--){
																								echo '<option value="'.$i.'"  >'.$i.'</option>';
																							}
																						  ?>
																					</select>
																					  <div class="message-erreur" id="div-erreur-champ-jour_nais-membre" style="display: none;"> Jour.</div>
																				  </div>
																			</div>
																		</div>
																	</div>

																	<div class="wrap-field middle">

																		<div class="field-form" id="wrap-numero">
																			<input type="text" readonly id="indicatif" value="+241" name="indicatif">
																			<div class="wrap-select-code-pays">
																			  <select type="select" id="code-pays" name="shortCountryCode" aria-required="true" role="combobox" aria-multiline="false" aria-labelledby="country-code-lbl-aria">
																				<option role="option" data-code="+93" value="AF">Afghanistan (+93)</option>
																				<option role="option" data-code="+355" value="AL">Albanie (+355)</option>
																				<option role="option" data-code="+213" value="DZ">Algérie (+213)</option>
																				<option role="option" data-code="+1" value="AS">Samoa américaines (+1)</option>
																				<option role="option" data-code="+376" value="AD">Andorre (+376)</option>
																				<option role="option" data-code="+244" value="AO">Angola (+244)</option>
																				<option role="option" data-code="+1" value="AI">Anguilla (+1)</option>
																				<option role="option" data-code="+1" value="AG">Antigua et Barbuda (+1)</option>
																				<option role="option" data-code="+54" value="AR">Argentine (+54)</option>
																				<option role="option" data-code="+374" value="AM">Arménie (+374)</option>
																				<option role="option" data-code="+297" value="AW">Aruba (+297)</option>
																				<option role="option" data-code="+247" value="AC">Ascension (+247)</option>
																				<option role="option" data-code="+61" value="AU">Australie (+61)</option>
																				<option role="option" data-code="+672" value="AX">Territoires australiens extérieurs (+672)</option>
																				<option role="option" data-code="+43" value="AT">Autriche (+43)</option>
																				<option role="option" data-code="+994" value="AZ">Azerbaïdjan (+994)</option>
																				<option role="option" data-code="+1" value="BS">Bahamas (+1)</option>
																				<option role="option" data-code="+973" value="BH">Bahreïn (+973)</option>
																				<option role="option" data-code="+880" value="BD">Bangladesh (+880)</option>
																				<option role="option" data-code="+1" value="BB">Barbade (+1)</option>
																				<option role="option" data-code="+375" value="BY">Bélarus (+375)</option>
																				<option role="option" data-code="+32" value="BE">Belgique (+32)</option>
																				<option role="option" data-code="+501" value="BZ">Belize (+501)</option>
																				<option role="option" data-code="+229" value="BJ">Bénin (+229)</option>
																				<option role="option" data-code="+1" value="BM">Bermudes (+1)</option>
																				<option role="option" data-code="+975" value="BT">Bhoutan (+975)</option>
																				<option role="option" data-code="+591" value="BO">Bolivie (+591)</option>
																				<option role="option" data-code="+387" value="BA">Bosnie-Herzégovine (+387)</option>
																				<option role="option" data-code="+267" value="BW">Botswana (+267)</option>
																				<option role="option" data-code="+55" value="BR">Brésil (+55)</option>
																				<option role="option" data-code="+1" value="VG">Îles Vierges britanniques (+1)</option>
																				<option role="option" data-code="+673" value="BN">Brunei Darussalam (+673)</option>
																				<option role="option" data-code="+359" value="BG">Bulgarie (+359)</option>
																				<option role="option" data-code="+226" value="BF">Burkina Faso (+226)</option>
																				<option role="option" data-code="+257" value="BI">Burundi (+257)</option>
																				<option role="option" data-code="+855" value="KH">Cambodge (+855)</option>
																				<option role="option" data-code="+237" value="CM">Cameroun (+237)</option>
																				<option role="option" data-code="+1" value="CA">Canada (+1)</option>
																				<option role="option" data-code="+238" value="CV">Cap-Vert (+238)</option>
																				<option role="option" data-code="+1" value="KY">Îles Caïmans (+1)</option>
																				<option role="option" data-code="+236" value="CF">République centrafricaine (+236)</option>
																				<option role="option" data-code="+235" value="TD">Tchad (+235)</option>
																				<option role="option" data-code="+56" value="CL">Chili (+56)</option>
																				<option role="option" data-code="+86" value="CN">Chine (+86)</option>
																				<option role="option" data-code="+57" value="CO">Colombie (+57)</option>
																				<option role="option" data-code="+269" value="KM">Comores (+269)</option>
																				<option role="option" data-code="+242" value="CG">Congo (+242)</option>
																				<option role="option" data-code="+682" value="CK">Îles Cook (+682)</option>
																				<option role="option" data-code="+506" value="CR">Costa Rica (+506)</option>
																				<option role="option" data-code="+225" value="CI">Côte d'Ivoire (+225)</option>
																				<option role="option" data-code="+385" value="HR">Croatie (+385)</option>
																				<option role="option" data-code="+53" value="CU">Cuba (+53)</option>
																				<option role="option" data-code="+357" value="CY">Chypre (+357)</option>
																				<option role="option" data-code="+420" value="CZ">République tchèque (+420)</option>
																				<option role="option" data-code="+243" value="CD">République démocratique du Congo (+243)</option>
																				<option role="option" data-code="+45" value="DK">Danemark (+45)</option>
																				<option role="option" data-code="+246" value="DG">Diego Garcia (+246)</option>
																				<option role="option" data-code="+253" value="DJ">Djibouti (+253)</option>
																				<option role="option" data-code="+1" value="DM">Dominique (+1)</option>
																				<option role="option" data-code="+1" value="DO">République Dominicaine (+1)</option>
																				<option role="option" data-code="+670" value="TL">Timor oriental (+670)</option>
																				<option role="option" data-code="+593" value="EC">Équateur (+593)</option>
																				<option role="option" data-code="+20" value="EG">Égypte (+20)</option>
																				<option role="option" data-code="+503" value="SV">Salvador (+503)</option>
																				<option role="option" data-code="+240" value="GQ">Guinée équatoriale (+240)</option>
																				<option role="option" data-code="+291" value="ER">Érythrée (+291)</option>
																				<option role="option" data-code="+372" value="EE">Estonie (+372)</option>
																				<option role="option" data-code="+251" value="ET">Éthiopie (+251)</option>
																				<option role="option" data-code="+500" value="FK">Îles Malouines (+500)</option>
																				<option role="option" data-code="+298" value="FO">Îles Féroé (+298)</option>
																				<option role="option" data-code="+679" value="FJ">Fidji (+679)</option>
																				<option role="option" data-code="+358" value="FI">Finlande (+358)</option>
																				<option role="option" data-code="+33" value="FR">France (+33)</option>
																				<option role="option" data-code="+594" value="GF">Guyane française (+594)</option>
																				<option role="option" data-code="+689" value="PF">Polynésie française (+689)</option>
																				<option role="option" data-code="+241" value="GA" selected="selected">Gabon (+241)</option>
																				<option role="option" data-code="+220" value="GM">Gambie (+220)</option>
																				<option role="option" data-code="+995" value="GE">Géorgie (+995)</option>
																				<option role="option" data-code="+49" value="DE">Allemagne (+49)</option>
																				<option role="option" data-code="+233" value="GH">Ghana (+233)</option>
																				<option role="option" data-code="+350" value="GI">Gibraltar (+350)</option>
																				<option role="option" data-code="+30" value="GR">Grèce (+30)</option>
																				<option role="option" data-code="+299" value="GL">Groenland (+299)</option>
																				<option role="option" data-code="+1" value="GD">Grenade (+1)</option>
																				<option role="option" data-code="+590" value="GP">Guadeloupe (+590)</option>
																				<option role="option" data-code="+1" value="GU">Guam (+1)</option>
																				<option role="option" data-code="+502" value="GT">Guatemala (+502)</option>
																				<option role="option" data-code="+224" value="GN">Guinée (+224)</option>
																				<option role="option" data-code="+245" value="GW"> (+245)</option>
																				<option role="option" data-code="+592" value="GY">Guyane (+592)</option>
																				<option role="option" data-code="+509" value="HT">Haïti (+509)</option>
																				<option role="option" data-code="+504" value="HN">Honduras (+504)</option>
																				<option role="option" data-code="+852" value="HK">Hong Kong (+852)</option>
																				<option role="option" data-code="+36" value="HU">Hongrie (+36)</option>
																				<option role="option" data-code="+354" value="IS">Islande (+354)</option>
																				<option role="option" data-code="+91" value="IN">Inde (+91)</option>
																				<option role="option" data-code="+62" value="ID">Indonésie (+62)</option>
																				<option role="option" data-code="+98" value="IR">Iran (+98)</option>
																				<option role="option" data-code="+964" value="IQ">Irak (+964)</option>
																				<option role="option" data-code="+353" value="IE">Irlande (+353)</option>
																				<option role="option" data-code="+972" value="IL">Israël (+972)</option>
																				<option role="option" data-code="+39" value="IT">Italie (+39)</option>
																				<option role="option" data-code="+1" value="JM">Jamaïque (+1)</option>
																				<option role="option" data-code="+81" value="JP">Japon (+81)</option>
																				<option role="option" data-code="+962" value="JO">Jordanie (+962)</option>
																				<option role="option" data-code="+7" value="KZ">Kazakhstan (+7)</option>
																				<option role="option" data-code="+254" value="KE">Kenya (+254)</option>
																				<option role="option" data-code="+686" value="KI">Kiribati (+686)</option>
																				<option role="option" data-code="+965" value="KW">Koweït (+965)</option>
																				<option role="option" data-code="+996" value="KG">Kirghizistan (+996)</option>
																				<option role="option" data-code="+856" value="LA">Laos (+856)</option>
																				<option role="option" data-code="+371" value="LV">Lettonie (+371)</option>
																				<option role="option" data-code="+961" value="LB">Liban (+961)</option>
																				<option role="option" data-code="+266" value="LS">Lesotho (+266)</option>
																				<option role="option" data-code="+231" value="LR">Libéria (+231)</option>
																				<option role="option" data-code="+218" value="LY">Libye (+218)</option>
																				<option role="option" data-code="+423" value="LI">Liechtenstein (+423)</option>
																				<option role="option" data-code="+370" value="LT">Lituanie (+370)</option>
																				<option role="option" data-code="+352" value="LU">Luxembourg (+352)</option>
																				<option role="option" data-code="+853" value="MO">Macao (+853)</option>
																				<option role="option" data-code="+389" value="MK">Macédoine (+389)</option>
																				<option role="option" data-code="+261" value="MG">Madagascar (+261)</option>
																				<option role="option" data-code="+265" value="MW">Malawi (+265)</option>
																				<option role="option" data-code="+60" value="MY">Malaisie (+60)</option>
																				<option role="option" data-code="+960" value="MV">Maldives (+960)</option>
																				<option role="option" data-code="+223" value="ML">Mali (+223)</option>
																				<option role="option" data-code="+356" value="MT">Malte (+356)</option>
																				<option role="option" data-code="+692" value="MH">Îles Marshall (+692)</option>
																				<option role="option" data-code="+596" value="MQ">Martinique (+596)</option>
																				<option role="option" data-code="+222" value="MR">Mauritanie (+222)</option>
																				<option role="option" data-code="+230" value="MU">Île Maurice (+230)</option>
																				<option role="option" data-code="+52" value="MX">Mexique (+52)</option>
																				<option role="option" data-code="+691" value="FM">Micronésie (+691)</option>
																				<option role="option" data-code="+373" value="MD">Moldavie (+373)</option>
																				<option role="option" data-code="+377" value="MC">Monaco (+377)</option>
																				<option role="option" data-code="+976" value="MN">Mongolie (+976)</option>
																				<option role="option" data-code="+382" value="ME">Monténégro (+382)</option>
																				<option role="option" data-code="+1" value="MS">Montserrat (+1)</option>
																				<option role="option" data-code="+212" value="MA">Maroc (+212)</option>
																				<option role="option" data-code="+258" value="MZ">Mozambique (+258)</option>
																				<option role="option" data-code="+95" value="MM">Myanmar (+95)</option>
																				<option role="option" data-code="+264" value="NA">Namibie (+264)</option>
																				<option role="option" data-code="+674" value="NR">Nauru (+674)</option>
																				<option role="option" data-code="+977" value="NP">Népal (+977)</option>
																				<option role="option" data-code="+31" value="NL">Pays-Bas (+31)</option>
																				<option role="option" data-code="+599" value="AN"> (+599)</option>
																				<option role="option" data-code="+687" value="NC">Nouvelle-Calédonie (+687)</option>
																				<option role="option" data-code="+64" value="NZ">Nouvelle-Zélande (+64)</option>
																				<option role="option" data-code="+505" value="NI">Nicaragua (+505)</option>
																				<option role="option" data-code="+227" value="NE">Niger (+227)</option>
																				<option role="option" data-code="+234" value="NG">Nigéria (+234)</option>
																				<option role="option" data-code="+683" value="NU">Niue (+683)</option>
																				<option role="option" data-code="+850" value="KP">Corée du Nord (+850)</option>
																				<option role="option" data-code="+1" value="MP">Îles Mariannes du Nord (+1)</option>
																				<option role="option" data-code="+47" value="NO">Norvège (+47)</option>
																				<option role="option" data-code="+968" value="OM">Oman (+968)</option>
																				<option role="option" data-code="+92" value="PK">Pakistan (+92)</option>
																				<option role="option" data-code="+680" value="PW">Palau (+680)</option>
																				<option role="option" data-code="+970" value="PS">Palestine (+970)</option>
																				<option role="option" data-code="+507" value="PA">Panama (+507)</option>
																				<option role="option" data-code="+675" value="PG">Papouasie-Nouvelle-Guinée (+675)</option>
																				<option role="option" data-code="+595" value="PY">Paraguay (+595)</option>
																				<option role="option" data-code="+51" value="PE">Pérou (+51)</option>
																				<option role="option" data-code="+63" value="PH">Philippines (+63)</option>
																				<option role="option" data-code="+48" value="PL">Pologne (+48)</option>
																				<option role="option" data-code="+351" value="PT">Portugal (+351)</option>
																				<option role="option" data-code="+1" value="PR">Porto Rico (+1)</option>
																				<option role="option" data-code="+974" value="QA">Qatar (+974)</option>
																				<option role="option" data-code="+262" value="RE">Réunion (+262)</option>
																				<option role="option" data-code="+40" value="RO">Roumanie (+40)</option>
																				<option role="option" data-code="+7" value="RU">Russie (+7)</option>
																				<option role="option" data-code="+250" value="RW">Rwanda (+250)</option>
																				<option role="option" data-code="+290" value="SH">Sainte-Hélène (+290)</option>
																				<option role="option" data-code="+1" value="KN">Saint-Kitts-et-Nevis (+1)</option>
																				<option role="option" data-code="+1" value="LC">Sainte-Lucie (+1)</option>
																				<option role="option" data-code="+508" value="PM">Saint-Pierre-et-Miquelon (+508)</option>
																				<option role="option" data-code="+1" value="VC">Saint-Vincent-et-les-Grenadines (+1)</option>
																				<option role="option" data-code="+685" value="WS">Samoa (+685)</option>
																				<option role="option" data-code="+378" value="SM">Saint-Marin (+378)</option>
																				<option role="option" data-code="+239" value="ST">Sao Tomé-et-Principe (+239)</option>
																				<option role="option" data-code="+966" value="SA">Arabie Saoudite (+966)</option>
																				<option role="option" data-code="+221" value="SN">Sénégal (+221)</option>
																				<option role="option" data-code="+381" value="RS">Serbie (+381)</option>
																				<option role="option" data-code="+248" value="SC">Seychelles (+248)</option>
																				<option role="option" data-code="+232" value="SL">Sierra Leone (+232)</option>
																				<option role="option" data-code="+65" value="SG">Singapour (+65)</option>
																				<option role="option" data-code="+421" value="SK">Slovaquie (+421)</option>
																				<option role="option" data-code="+386" value="SI">Slovénie (+386)</option>
																				<option role="option" data-code="+677" value="SB">Îles Salomon (+677)</option>
																				<option role="option" data-code="+252" value="SO">Somalie (+252)</option>
																				<option role="option" data-code="+27" value="ZA">Afrique du Sud (+27)</option>
																				<option role="option" data-code="+82" value="KR">Corée du Sud (+82)</option>
																				<option role="option" data-code="+34" value="ES">Espagne (+34)</option>
																				<option role="option" data-code="+94" value="LK">Sri Lanka (+94)</option>
																				<option role="option" data-code="+249" value="SD">Soudan (+249)</option>
																				<option role="option" data-code="+597" value="SR">Surinam (+597)</option>
																				<option role="option" data-code="+268" value="SZ">Swaziland (+268)</option>
																				<option role="option" data-code="+46" value="SE">Suède (+46)</option>
																				<option role="option" data-code="+41" value="CH">Suisse (+41)</option>
																				<option role="option" data-code="+963" value="SY">Syrie (+963)</option>
																				<option role="option" data-code="+886" value="TW">Taïwan (+886)</option>
																				<option role="option" data-code="+992" value="TJ">Tadjikistan (+992)</option>
																				<option role="option" data-code="+255" value="TZ">Tanzanie (+255)</option>
																				<option role="option" data-code="+66" value="TH">Thaïlande (+66)</option>
																				<option role="option" data-code="+228" value="TG">Togo (+228)</option>
																				<option role="option" data-code="+690" value="TK">Tokelau (+690)</option>
																				<option role="option" data-code="+676" value="TO">Tonga (+676)</option>
																				<option role="option" data-code="+1" value="TT">Trinité-et-Tobago (+1)</option>
																				<option role="option" data-code="+216" value="TN">Tunisie (+216)</option>
																				<option role="option" data-code="+90" value="TR">Turquie (+90)</option>
																				<option role="option" data-code="+993" value="TM">Turkménistan (+993)</option>
																				<option role="option" data-code="+1" value="TC">Îles Turks et Caïcos (+1)</option>
																				<option role="option" data-code="+688" value="TV">Tuvalu (+688)</option>
																				<option role="option" data-code="+1" value="VI">Îles Vierges américaines (+1)</option>
																				<option role="option" data-code="+256" value="UG">Ouganda (+256)</option>
																				<option role="option" data-code="+380" value="UA">Ukraine (+380)</option>
																				<option role="option" data-code="+971" value="AE">Émirats Arabes Unis (+971)</option>
																				<option role="option" data-code="+44" value="GB">Royaume-Uni (+44)</option>
																				<option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX">États-Unis (+1)</option>
																				<option role="option" data-code="+598" value="UY">Uruguay (+598)</option>
																				<option role="option" data-code="+998" value="UZ">Ouzbékistan (+998)</option>
																				<option role="option" data-code="+678" value="VU">Vanuatu (+678)</option>
																				<option role="option" data-code="+379" value="VA">Cité du Vatican (+379)</option>
																				<option role="option" data-code="+58" value="VE">Venezuela (+58)</option>
																				<option role="option" data-code="+84" value="VN">Vietnam (+84)</option>
																				<option role="option" data-code="+681" value="WF">Wallis et Futuna (+681)</option>
																				<option role="option" data-code="+967" value="YE">Yémen (+967)</option>
																				<option role="option" data-code="+260" value="ZM">Zambie (+260)</option>
																				<option role="option" data-code="+263" value="ZW">Zimbabwe (+263)</option>
																			  </select>
																			</div>
																			<input type="text" required="" name="telephone" id="telephone-membre" data-error-contener="div-erreur-champ-telephone-membre" onkeyup="Verif_saisie(event, 'telephone-membre', 'btn-valider')">
																			<label class="libele-form">Numéro de téléphone</label>
																		<div class="message-erreur" id="div-erreur-champ-telephone-membre"> Veuillez saisir votre numéro.</div>
																		</div>

																		<div class="field-form" id="wrap-numero-whatsapp">
																			<input type="text" readonly id="indicatif-whatsapp" value="+241" name="indicatif">
																			<div class="wrap-select-code-pays">
																			  <select type="select" id="code-pays-whatsapp" name="shortCountryCode" aria-required="true" role="combobox" aria-multiline="false" aria-labelledby="country-code-lbl-aria">
																				<option role="option" data-code="+93" value="AF">Afghanistan (+93)</option>
																				<option role="option" data-code="+355" value="AL">Albanie (+355)</option>
																				<option role="option" data-code="+213" value="DZ">Algérie (+213)</option>
																				<option role="option" data-code="+1" value="AS">Samoa américaines (+1)</option>
																				<option role="option" data-code="+376" value="AD">Andorre (+376)</option>
																				<option role="option" data-code="+244" value="AO">Angola (+244)</option>
																				<option role="option" data-code="+1" value="AI">Anguilla (+1)</option>
																				<option role="option" data-code="+1" value="AG">Antigua et Barbuda (+1)</option>
																				<option role="option" data-code="+54" value="AR">Argentine (+54)</option>
																				<option role="option" data-code="+374" value="AM">Arménie (+374)</option>
																				<option role="option" data-code="+297" value="AW">Aruba (+297)</option>
																				<option role="option" data-code="+247" value="AC">Ascension (+247)</option>
																				<option role="option" data-code="+61" value="AU">Australie (+61)</option>
																				<option role="option" data-code="+672" value="AX">Territoires australiens extérieurs (+672)</option>
																				<option role="option" data-code="+43" value="AT">Autriche (+43)</option>
																				<option role="option" data-code="+994" value="AZ">Azerbaïdjan (+994)</option>
																				<option role="option" data-code="+1" value="BS">Bahamas (+1)</option>
																				<option role="option" data-code="+973" value="BH">Bahreïn (+973)</option>
																				<option role="option" data-code="+880" value="BD">Bangladesh (+880)</option>
																				<option role="option" data-code="+1" value="BB">Barbade (+1)</option>
																				<option role="option" data-code="+375" value="BY">Bélarus (+375)</option>
																				<option role="option" data-code="+32" value="BE">Belgique (+32)</option>
																				<option role="option" data-code="+501" value="BZ">Belize (+501)</option>
																				<option role="option" data-code="+229" value="BJ">Bénin (+229)</option>
																				<option role="option" data-code="+1" value="BM">Bermudes (+1)</option>
																				<option role="option" data-code="+975" value="BT">Bhoutan (+975)</option>
																				<option role="option" data-code="+591" value="BO">Bolivie (+591)</option>
																				<option role="option" data-code="+387" value="BA">Bosnie-Herzégovine (+387)</option>
																				<option role="option" data-code="+267" value="BW">Botswana (+267)</option>
																				<option role="option" data-code="+55" value="BR">Brésil (+55)</option>
																				<option role="option" data-code="+1" value="VG">Îles Vierges britanniques (+1)</option>
																				<option role="option" data-code="+673" value="BN">Brunei Darussalam (+673)</option>
																				<option role="option" data-code="+359" value="BG">Bulgarie (+359)</option>
																				<option role="option" data-code="+226" value="BF">Burkina Faso (+226)</option>
																				<option role="option" data-code="+257" value="BI">Burundi (+257)</option>
																				<option role="option" data-code="+855" value="KH">Cambodge (+855)</option>
																				<option role="option" data-code="+237" value="CM">Cameroun (+237)</option>
																				<option role="option" data-code="+1" value="CA">Canada (+1)</option>
																				<option role="option" data-code="+238" value="CV">Cap-Vert (+238)</option>
																				<option role="option" data-code="+1" value="KY">Îles Caïmans (+1)</option>
																				<option role="option" data-code="+236" value="CF">République centrafricaine (+236)</option>
																				<option role="option" data-code="+235" value="TD">Tchad (+235)</option>
																				<option role="option" data-code="+56" value="CL">Chili (+56)</option>
																				<option role="option" data-code="+86" value="CN">Chine (+86)</option>
																				<option role="option" data-code="+57" value="CO">Colombie (+57)</option>
																				<option role="option" data-code="+269" value="KM">Comores (+269)</option>
																				<option role="option" data-code="+242" value="CG">Congo (+242)</option>
																				<option role="option" data-code="+682" value="CK">Îles Cook (+682)</option>
																				<option role="option" data-code="+506" value="CR">Costa Rica (+506)</option>
																				<option role="option" data-code="+225" value="CI">Côte d'Ivoire (+225)</option>
																				<option role="option" data-code="+385" value="HR">Croatie (+385)</option>
																				<option role="option" data-code="+53" value="CU">Cuba (+53)</option>
																				<option role="option" data-code="+357" value="CY">Chypre (+357)</option>
																				<option role="option" data-code="+420" value="CZ">République tchèque (+420)</option>
																				<option role="option" data-code="+243" value="CD">République démocratique du Congo (+243)</option>
																				<option role="option" data-code="+45" value="DK">Danemark (+45)</option>
																				<option role="option" data-code="+246" value="DG">Diego Garcia (+246)</option>
																				<option role="option" data-code="+253" value="DJ">Djibouti (+253)</option>
																				<option role="option" data-code="+1" value="DM">Dominique (+1)</option>
																				<option role="option" data-code="+1" value="DO">République Dominicaine (+1)</option>
																				<option role="option" data-code="+670" value="TL">Timor oriental (+670)</option>
																				<option role="option" data-code="+593" value="EC">Équateur (+593)</option>
																				<option role="option" data-code="+20" value="EG">Égypte (+20)</option>
																				<option role="option" data-code="+503" value="SV">Salvador (+503)</option>
																				<option role="option" data-code="+240" value="GQ">Guinée équatoriale (+240)</option>
																				<option role="option" data-code="+291" value="ER">Érythrée (+291)</option>
																				<option role="option" data-code="+372" value="EE">Estonie (+372)</option>
																				<option role="option" data-code="+251" value="ET">Éthiopie (+251)</option>
																				<option role="option" data-code="+500" value="FK">Îles Malouines (+500)</option>
																				<option role="option" data-code="+298" value="FO">Îles Féroé (+298)</option>
																				<option role="option" data-code="+679" value="FJ">Fidji (+679)</option>
																				<option role="option" data-code="+358" value="FI">Finlande (+358)</option>
																				<option role="option" data-code="+33" value="FR" >France (+33)</option>
																				<option role="option" data-code="+594" value="GF">Guyane française (+594)</option>
																				<option role="option" data-code="+689" value="PF">Polynésie française (+689)</option>
																				<option role="option" data-code="+241" value="GA" selected="selected">Gabon (+241)</option>
																				<option role="option" data-code="+220" value="GM">Gambie (+220)</option>
																				<option role="option" data-code="+995" value="GE">Géorgie (+995)</option>
																				<option role="option" data-code="+49" value="DE">Allemagne (+49)</option>
																				<option role="option" data-code="+233" value="GH">Ghana (+233)</option>
																				<option role="option" data-code="+350" value="GI">Gibraltar (+350)</option>
																				<option role="option" data-code="+30" value="GR">Grèce (+30)</option>
																				<option role="option" data-code="+299" value="GL">Groenland (+299)</option>
																				<option role="option" data-code="+1" value="GD">Grenade (+1)</option>
																				<option role="option" data-code="+590" value="GP">Guadeloupe (+590)</option>
																				<option role="option" data-code="+1" value="GU">Guam (+1)</option>
																				<option role="option" data-code="+502" value="GT">Guatemala (+502)</option>
																				<option role="option" data-code="+224" value="GN">Guinée (+224)</option>
																				<option role="option" data-code="+245" value="GW"> (+245)</option>
																				<option role="option" data-code="+592" value="GY">Guyane (+592)</option>
																				<option role="option" data-code="+509" value="HT">Haïti (+509)</option>
																				<option role="option" data-code="+504" value="HN">Honduras (+504)</option>
																				<option role="option" data-code="+852" value="HK">Hong Kong (+852)</option>
																				<option role="option" data-code="+36" value="HU">Hongrie (+36)</option>
																				<option role="option" data-code="+354" value="IS">Islande (+354)</option>
																				<option role="option" data-code="+91" value="IN">Inde (+91)</option>
																				<option role="option" data-code="+62" value="ID">Indonésie (+62)</option>
																				<option role="option" data-code="+98" value="IR">Iran (+98)</option>
																				<option role="option" data-code="+964" value="IQ">Irak (+964)</option>
																				<option role="option" data-code="+353" value="IE">Irlande (+353)</option>
																				<option role="option" data-code="+972" value="IL">Israël (+972)</option>
																				<option role="option" data-code="+39" value="IT">Italie (+39)</option>
																				<option role="option" data-code="+1" value="JM">Jamaïque (+1)</option>
																				<option role="option" data-code="+81" value="JP">Japon (+81)</option>
																				<option role="option" data-code="+962" value="JO">Jordanie (+962)</option>
																				<option role="option" data-code="+7" value="KZ">Kazakhstan (+7)</option>
																				<option role="option" data-code="+254" value="KE">Kenya (+254)</option>
																				<option role="option" data-code="+686" value="KI">Kiribati (+686)</option>
																				<option role="option" data-code="+965" value="KW">Koweït (+965)</option>
																				<option role="option" data-code="+996" value="KG">Kirghizistan (+996)</option>
																				<option role="option" data-code="+856" value="LA">Laos (+856)</option>
																				<option role="option" data-code="+371" value="LV">Lettonie (+371)</option>
																				<option role="option" data-code="+961" value="LB">Liban (+961)</option>
																				<option role="option" data-code="+266" value="LS">Lesotho (+266)</option>
																				<option role="option" data-code="+231" value="LR">Libéria (+231)</option>
																				<option role="option" data-code="+218" value="LY">Libye (+218)</option>
																				<option role="option" data-code="+423" value="LI">Liechtenstein (+423)</option>
																				<option role="option" data-code="+370" value="LT">Lituanie (+370)</option>
																				<option role="option" data-code="+352" value="LU">Luxembourg (+352)</option>
																				<option role="option" data-code="+853" value="MO">Macao (+853)</option>
																				<option role="option" data-code="+389" value="MK">Macédoine (+389)</option>
																				<option role="option" data-code="+261" value="MG">Madagascar (+261)</option>
																				<option role="option" data-code="+265" value="MW">Malawi (+265)</option>
																				<option role="option" data-code="+60" value="MY">Malaisie (+60)</option>
																				<option role="option" data-code="+960" value="MV">Maldives (+960)</option>
																				<option role="option" data-code="+223" value="ML">Mali (+223)</option>
																				<option role="option" data-code="+356" value="MT">Malte (+356)</option>
																				<option role="option" data-code="+692" value="MH">Îles Marshall (+692)</option>
																				<option role="option" data-code="+596" value="MQ">Martinique (+596)</option>
																				<option role="option" data-code="+222" value="MR">Mauritanie (+222)</option>
																				<option role="option" data-code="+230" value="MU">Île Maurice (+230)</option>
																				<option role="option" data-code="+52" value="MX">Mexique (+52)</option>
																				<option role="option" data-code="+691" value="FM">Micronésie (+691)</option>
																				<option role="option" data-code="+373" value="MD">Moldavie (+373)</option>
																				<option role="option" data-code="+377" value="MC">Monaco (+377)</option>
																				<option role="option" data-code="+976" value="MN">Mongolie (+976)</option>
																				<option role="option" data-code="+382" value="ME">Monténégro (+382)</option>
																				<option role="option" data-code="+1" value="MS">Montserrat (+1)</option>
																				<option role="option" data-code="+212" value="MA">Maroc (+212)</option>
																				<option role="option" data-code="+258" value="MZ">Mozambique (+258)</option>
																				<option role="option" data-code="+95" value="MM">Myanmar (+95)</option>
																				<option role="option" data-code="+264" value="NA">Namibie (+264)</option>
																				<option role="option" data-code="+674" value="NR">Nauru (+674)</option>
																				<option role="option" data-code="+977" value="NP">Népal (+977)</option>
																				<option role="option" data-code="+31" value="NL">Pays-Bas (+31)</option>
																				<option role="option" data-code="+599" value="AN"> (+599)</option>
																				<option role="option" data-code="+687" value="NC">Nouvelle-Calédonie (+687)</option>
																				<option role="option" data-code="+64" value="NZ">Nouvelle-Zélande (+64)</option>
																				<option role="option" data-code="+505" value="NI">Nicaragua (+505)</option>
																				<option role="option" data-code="+227" value="NE">Niger (+227)</option>
																				<option role="option" data-code="+234" value="NG">Nigéria (+234)</option>
																				<option role="option" data-code="+683" value="NU">Niue (+683)</option>
																				<option role="option" data-code="+850" value="KP">Corée du Nord (+850)</option>
																				<option role="option" data-code="+1" value="MP">Îles Mariannes du Nord (+1)</option>
																				<option role="option" data-code="+47" value="NO">Norvège (+47)</option>
																				<option role="option" data-code="+968" value="OM">Oman (+968)</option>
																				<option role="option" data-code="+92" value="PK">Pakistan (+92)</option>
																				<option role="option" data-code="+680" value="PW">Palau (+680)</option>
																				<option role="option" data-code="+970" value="PS">Palestine (+970)</option>
																				<option role="option" data-code="+507" value="PA">Panama (+507)</option>
																				<option role="option" data-code="+675" value="PG">Papouasie-Nouvelle-Guinée (+675)</option>
																				<option role="option" data-code="+595" value="PY">Paraguay (+595)</option>
																				<option role="option" data-code="+51" value="PE">Pérou (+51)</option>
																				<option role="option" data-code="+63" value="PH">Philippines (+63)</option>
																				<option role="option" data-code="+48" value="PL">Pologne (+48)</option>
																				<option role="option" data-code="+351" value="PT">Portugal (+351)</option>
																				<option role="option" data-code="+1" value="PR">Porto Rico (+1)</option>
																				<option role="option" data-code="+974" value="QA">Qatar (+974)</option>
																				<option role="option" data-code="+262" value="RE">Réunion (+262)</option>
																				<option role="option" data-code="+40" value="RO">Roumanie (+40)</option>
																				<option role="option" data-code="+7" value="RU">Russie (+7)</option>
																				<option role="option" data-code="+250" value="RW">Rwanda (+250)</option>
																				<option role="option" data-code="+290" value="SH">Sainte-Hélène (+290)</option>
																				<option role="option" data-code="+1" value="KN">Saint-Kitts-et-Nevis (+1)</option>
																				<option role="option" data-code="+1" value="LC">Sainte-Lucie (+1)</option>
																				<option role="option" data-code="+508" value="PM">Saint-Pierre-et-Miquelon (+508)</option>
																				<option role="option" data-code="+1" value="VC">Saint-Vincent-et-les-Grenadines (+1)</option>
																				<option role="option" data-code="+685" value="WS">Samoa (+685)</option>
																				<option role="option" data-code="+378" value="SM">Saint-Marin (+378)</option>
																				<option role="option" data-code="+239" value="ST">Sao Tomé-et-Principe (+239)</option>
																				<option role="option" data-code="+966" value="SA">Arabie Saoudite (+966)</option>
																				<option role="option" data-code="+221" value="SN">Sénégal (+221)</option>
																				<option role="option" data-code="+381" value="RS">Serbie (+381)</option>
																				<option role="option" data-code="+248" value="SC">Seychelles (+248)</option>
																				<option role="option" data-code="+232" value="SL">Sierra Leone (+232)</option>
																				<option role="option" data-code="+65" value="SG">Singapour (+65)</option>
																				<option role="option" data-code="+421" value="SK">Slovaquie (+421)</option>
																				<option role="option" data-code="+386" value="SI">Slovénie (+386)</option>
																				<option role="option" data-code="+677" value="SB">Îles Salomon (+677)</option>
																				<option role="option" data-code="+252" value="SO">Somalie (+252)</option>
																				<option role="option" data-code="+27" value="ZA">Afrique du Sud (+27)</option>
																				<option role="option" data-code="+82" value="KR">Corée du Sud (+82)</option>
																				<option role="option" data-code="+34" value="ES">Espagne (+34)</option>
																				<option role="option" data-code="+94" value="LK">Sri Lanka (+94)</option>
																				<option role="option" data-code="+249" value="SD">Soudan (+249)</option>
																				<option role="option" data-code="+597" value="SR">Surinam (+597)</option>
																				<option role="option" data-code="+268" value="SZ">Swaziland (+268)</option>
																				<option role="option" data-code="+46" value="SE">Suède (+46)</option>
																				<option role="option" data-code="+41" value="CH">Suisse (+41)</option>
																				<option role="option" data-code="+963" value="SY">Syrie (+963)</option>
																				<option role="option" data-code="+886" value="TW">Taïwan (+886)</option>
																				<option role="option" data-code="+992" value="TJ">Tadjikistan (+992)</option>
																				<option role="option" data-code="+255" value="TZ">Tanzanie (+255)</option>
																				<option role="option" data-code="+66" value="TH">Thaïlande (+66)</option>
																				<option role="option" data-code="+228" value="TG">Togo (+228)</option>
																				<option role="option" data-code="+690" value="TK">Tokelau (+690)</option>
																				<option role="option" data-code="+676" value="TO">Tonga (+676)</option>
																				<option role="option" data-code="+1" value="TT">Trinité-et-Tobago (+1)</option>
																				<option role="option" data-code="+216" value="TN">Tunisie (+216)</option>
																				<option role="option" data-code="+90" value="TR">Turquie (+90)</option>
																				<option role="option" data-code="+993" value="TM">Turkménistan (+993)</option>
																				<option role="option" data-code="+1" value="TC">Îles Turks et Caïcos (+1)</option>
																				<option role="option" data-code="+688" value="TV">Tuvalu (+688)</option>
																				<option role="option" data-code="+1" value="VI">Îles Vierges américaines (+1)</option>
																				<option role="option" data-code="+256" value="UG">Ouganda (+256)</option>
																				<option role="option" data-code="+380" value="UA">Ukraine (+380)</option>
																				<option role="option" data-code="+971" value="AE">Émirats Arabes Unis (+971)</option>
																				<option role="option" data-code="+44" value="GB">Royaume-Uni (+44)</option>
																				<option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX">États-Unis (+1)</option>
																				<option role="option" data-code="+598" value="UY">Uruguay (+598)</option>
																				<option role="option" data-code="+998" value="UZ">Ouzbékistan (+998)</option>
																				<option role="option" data-code="+678" value="VU">Vanuatu (+678)</option>
																				<option role="option" data-code="+379" value="VA">Cité du Vatican (+379)</option>
																				<option role="option" data-code="+58" value="VE">Venezuela (+58)</option>
																				<option role="option" data-code="+84" value="VN">Vietnam (+84)</option>
																				<option role="option" data-code="+681" value="WF">Wallis et Futuna (+681)</option>
																				<option role="option" data-code="+967" value="YE">Yémen (+967)</option>
																				<option role="option" data-code="+260" value="ZM">Zambie (+260)</option>
																				<option role="option" data-code="+263" value="ZW">Zimbabwe (+263)</option>
																			  </select>
																			</div>
																			<input type="text" required="" name="telephone-whatsapp" id="telephone-whatsapp-membre" data-error-contener="div-erreur-champ-telephone-whatsapp-membre" onkeyup="Verif_saisie(event, 'telephone-whatsapp-membre', 'btn-valider')">
																			<label class="libele-form">Numéro whatsapp</label>
																		<div class="message-erreur" id="div-erreur-champ-telephone-whatsapp-membre"> Veuillez saisir votre numéro whatsapp.</div>
																		</div>
																	</div>


																	<div class="wrap-field middle">

																		<div class="field-form">
																			<input type="mail" required name="email" placeholder="" data-error-contener="div-erreur-champ-email-membre" onKeyup ="Verif_saisie(event, 'email-membre', 'btn-valider')" id="email-membre">
																			<label class="libele-form">E-mail</label>
																			<div class="message-erreur" id="div-erreur-champ-email-membre"> Veuillez saisir votre email.</div>
																		</div>
																		<div class="field-form">
																			<input type="password" required name="password" id="password-membre" data-error-contener="div-erreur-champ-password-membre" onKeyup ="Verif_saisie(event, 'password-membre', 'btn-valider')">
																			<label class="libele-form">Mot de passe</label>
																			<div class="message-erreur" id="div-erreur-champ-password-membre"> Veuillez saisir votre Mot de passe.</div>
																		</div>
									<!--
																		<div class="field-form">
																			<input type="password" required name="confirm_password" placeholder="" data-error-contener="div-erreur-champ-confirm-password-membre" onKeyup ="Verif_saisie(event, 'confirm-password-membre', 'btn-valider')" id="confirm-password-membre">
																			<label class="libele-form">Confirmation mot de passe</label>
																			<div class="message-erreur" id="div-erreur-champ-confirm-password-membre"> Veuillez confirmez votre Mot de passe.</div>
																		</div>
									-->
																	</div>

																</div>
															</div>


															<div class="wrap-rubrique-form">
																<h3 class="wrap-titre-rubrique-form">Adresse</h3>
																<div class="rubrique-form">
																	<div class="wrap-field middle">
																		<div class="field-form">
																			<select name="pays" id="pays-membre"  required>
																				  <option value="" desable selected>Pays de résidence</option>
																				  <option value="Afghanistan">Afghanistan </option>
																				<option value="Afrique_Centrale">Afrique_Centrale </option>
																				<option value="Afrique_du_sud">Afrique_du_Sud </option> 
																				<option value="Albanie">Albanie </option>
																				<option value="Algerie">Algerie </option>
																				<option value="Allemagne">Allemagne </option>
																				<option value="Andorre">Andorre </option>
																				<option value="Angola">Angola </option>
																				<option value="Anguilla">Anguilla </option>
																				<option value="Arabie_Saoudite">Arabie_Saoudite </option>
																				<option value="Argentine">Argentine </option>
																				<option value="Armenie">Armenie </option> 
																				<option value="Australie">Australie </option>
																				<option value="Autriche">Autriche </option>
																				<option value="Azerbaidjan">Azerbaidjan </option>

																				<option value="Bahamas">Bahamas </option>
																				<option value="Bangladesh">Bangladesh </option>
																				<option value="Barbade">Barbade </option>
																				<option value="Bahrein">Bahrein </option>
																				<option value="Belgique">Belgique </option>
																				<option value="Belize">Belize </option>
																				<option value="Benin">Benin </option>
																				<option value="Bermudes">Bermudes </option>
																				<option value="Bielorussie">Bielorussie </option>
																				<option value="Bolivie">Bolivie </option>
																				<option value="Botswana">Botswana </option>
																				<option value="Bhoutan">Bhoutan </option>
																				<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
																				<option value="Bresil">Bresil </option>
																				<option value="Brunei">Brunei </option>
																				<option value="Bulgarie">Bulgarie </option>
																				<option value="Burkina_Faso">Burkina_Faso </option>
																				<option value="Burundi">Burundi </option>

																				<option value="Caiman">Caiman </option>
																				<option value="Cambodge">Cambodge </option>
																				<option value="Cameroun">Cameroun </option>
																				<option value="Canada">Canada </option>
																				<option value="Canaries">Canaries </option>
																				<option value="Cap_vert">Cap_Vert </option>
																				<option value="Chili">Chili </option>
																				<option value="Chine">Chine </option> 
																				<option value="Chypre">Chypre </option> 
																				<option value="Colombie">Colombie </option>
																				<option value="Comores">Colombie </option>
																				<option value="Congo">Congo </option>
																				<option value="Congo_democratique">Congo_democratique </option>
																				<option value="Cook">Cook </option>
																				<option value="Coree_du_Nord">Coree_du_Nord </option>
																				<option value="Coree_du_Sud">Coree_du_Sud </option>
																				<option value="Costa_Rica">Costa_Rica </option>
																				<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
																				<option value="Croatie">Croatie </option>
																				<option value="Cuba">Cuba </option>

																				<option value="Danemark">Danemark </option>
																				<option value="Djibouti">Djibouti </option>
																				<option value="Dominique">Dominique </option>

																				<option value="Egypte">Egypte </option> 
																				<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
																				<option value="Equateur">Equateur </option>
																				<option value="Erythree">Erythree </option>
																				<option value="Espagne">Espagne </option>
																				<option value="Estonie">Estonie </option>
																				<option value="Etats_Unis">Etats_Unis </option>
																				<option value="Ethiopie">Ethiopie </option>

																				<option value="Falkland">Falkland </option>
																				<option value="Feroe">Feroe </option>
																				<option value="Fidji">Fidji </option>
																				<option value="Finlande">Finlande </option>
																				<option value="France">France </option>

																				<option value="Gabon" selected>Gabon </option>
																				<option value="Gambie">Gambie </option>
																				<option value="Georgie">Georgie </option>
																				<option value="Ghana">Ghana </option>
																				<option value="Gibraltar">Gibraltar </option>
																				<option value="Grece">Grece </option>
																				<option value="Grenade">Grenade </option>
																				<option value="Groenland">Groenland </option>
																				<option value="Guadeloupe">Guadeloupe </option>
																				<option value="Guam">Guam </option>
																				<option value="Guatemala">Guatemala</option>
																				<option value="Guernesey">Guernesey </option>
																				<option value="Guinee">Guinee </option>
																				<option value="Guinee_Bissau">Guinee_Bissau </option>
																				<option value="Guinee equatoriale">Guinee_Equatoriale </option>
																				<option value="Guyana">Guyana </option>
																				<option value="Guyane_Francaise ">Guyane_Francaise </option>

																				<option value="Haiti">Haiti </option>
																				<option value="Hawaii">Hawaii </option> 
																				<option value="Honduras">Honduras </option>
																				<option value="Hong_Kong">Hong_Kong </option>
																				<option value="Hongrie">Hongrie </option>

																				<option value="Inde">Inde </option>
																				<option value="Indonesie">Indonesie </option>
																				<option value="Iran">Iran </option>
																				<option value="Iraq">Iraq </option>
																				<option value="Irlande">Irlande </option>
																				<option value="Islande">Islande </option>
																				<option value="Israel">Israel </option>
																				<option value="Italie">italie </option>

																				<option value="Jamaique">Jamaique </option>
																				<option value="Jan Mayen">Jan Mayen </option>
																				<option value="Japon">Japon </option>
																				<option value="Jersey">Jersey </option>
																				<option value="Jordanie">Jordanie </option>

																				<option value="Kazakhstan">Kazakhstan </option>
																				<option value="Kenya">Kenya </option>
																				<option value="Kirghizstan">Kirghizistan </option>
																				<option value="Kiribati">Kiribati </option>
																				<option value="Koweit">Koweit </option>

																				<option value="Laos">Laos </option>
																				<option value="Lesotho">Lesotho </option>
																				<option value="Lettonie">Lettonie </option>
																				<option value="Liban">Liban </option>
																				<option value="Liberia">Liberia </option>
																				<option value="Liechtenstein">Liechtenstein </option>
																				<option value="Lituanie">Lituanie </option> 
																				<option value="Luxembourg">Luxembourg </option>
																				<option value="Lybie">Lybie </option>

																				<option value="Macao">Macao </option>
																				<option value="Macedoine">Macedoine </option>
																				<option value="Madagascar">Madagascar </option>
																				<option value="Madère">Madère </option>
																				<option value="Malaisie">Malaisie </option>
																				<option value="Malawi">Malawi </option>
																				<option value="Maldives">Maldives </option>
																				<option value="Mali">Mali </option>
																				<option value="Malte">Malte </option>
																				<option value="Man">Man </option>
																				<option value="Mariannes du Nord">Mariannes du Nord </option>
																				<option value="Maroc">Maroc </option>
																				<option value="Marshall">Marshall </option>
																				<option value="Martinique">Martinique </option>
																				<option value="Maurice">Maurice </option>
																				<option value="Mauritanie">Mauritanie </option>
																				<option value="Mayotte">Mayotte </option>
																				<option value="Mexique">Mexique </option>
																				<option value="Micronesie">Micronesie </option>
																				<option value="Midway">Midway </option>
																				<option value="Moldavie">Moldavie </option>
																				<option value="Monaco">Monaco </option>
																				<option value="Mongolie">Mongolie </option>
																				<option value="Montserrat">Montserrat </option>
																				<option value="Mozambique">Mozambique </option>

																				<option value="Namibie">Namibie </option>
																				<option value="Nauru">Nauru </option>
																				<option value="Nepal">Nepal </option>
																				<option value="Nicaragua">Nicaragua </option>
																				<option value="Niger">Niger </option>
																				<option value="Nigeria">Nigeria </option>
																				<option value="Niue">Niue </option>
																				<option value="Norfolk">Norfolk </option>
																				<option value="Norvege">Norvege </option>
																				<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
																				<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

																				<option value="Oman">Oman </option>
																				<option value="Ouganda">Ouganda </option>
																				<option value="Ouzbekistan">Ouzbekistan </option>

																				<option value="Pakistan">Pakistan </option>
																				<option value="Palau">Palau </option>
																				<option value="Palestine">Palestine </option>
																				<option value="Panama">Panama </option>
																				<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
																				<option value="Paraguay">Paraguay </option>
																				<option value="Pays_Bas">Pays_Bas </option>
																				<option value="Perou">Perou </option>
																				<option value="Philippines">Philippines </option> 
																				<option value="Pologne">Pologne </option>
																				<option value="Polynesie">Polynesie </option>
																				<option value="Porto_Rico">Porto_Rico </option>
																				<option value="Portugal">Portugal </option>

																				<option value="Qatar">Qatar </option>

																				<option value="Republique_Dominicaine">Republique_Dominicaine </option>
																				<option value="Republique_Tcheque">Republique_Tcheque </option>
																				<option value="Reunion">Reunion </option>
																				<option value="Roumanie">Roumanie </option>
																				<option value="Royaume_Uni">Royaume_Uni </option>
																				<option value="Russie">Russie </option>
																				<option value="Rwanda">Rwanda </option>

																				<option value="Sahara Occidental">Sahara Occidental </option>
																				<option value="Sainte_Lucie">Sainte_Lucie </option>
																				<option value="Saint_Marin">Saint_Marin </option>
																				<option value="Salomon">Salomon </option>
																				<option value="Salvador">Salvador </option>
																				<option value="Samoa_Occidentales">Samoa_Occidentales</option>
																				<option value="Samoa_Americaine">Samoa_Americaine </option>
																				<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
																				<option value="Senegal">Senegal </option> 
																				<option value="Seychelles">Seychelles </option>
																				<option value="Sierra Leone">Sierra Leone </option>
																				<option value="Singapour">Singapour </option>
																				<option value="Slovaquie">Slovaquie </option>
																				<option value="Slovenie">Slovenie</option>
																				<option value="Somalie">Somalie </option>
																				<option value="Soudan">Soudan </option> 
																				<option value="Sri_Lanka">Sri_Lanka </option> 
																				<option value="Suede">Suede </option>
																				<option value="Suisse">Suisse </option>
																				<option value="Surinam">Surinam </option>
																				<option value="Swaziland">Swaziland </option>
																				<option value="Syrie">Syrie </option>

																				<option value="Tadjikistan">Tadjikistan </option>
																				<option value="Taiwan">Taiwan </option>
																				<option value="Tonga">Tonga </option>
																				<option value="Tanzanie">Tanzanie </option>
																				<option value="Tchad">Tchad </option>
																				<option value="Thailande">Thailande </option>
																				<option value="Tibet">Tibet </option>
																				<option value="Timor_Oriental">Timor_Oriental </option>
																				<option value="Togo">Togo </option> 
																				<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
																				<option value="Tristan da cunha">Tristan de cuncha </option>
																				<option value="Tunisie">Tunisie </option>
																				<option value="Turkmenistan">Turmenistan </option> 
																				<option value="Turquie">Turquie </option>

																				<option value="Ukraine">Ukraine </option>
																				<option value="Uruguay">Uruguay </option>

																				<option value="Vanuatu">Vanuatu </option>
																				<option value="Vatican">Vatican </option>
																				<option value="Venezuela">Venezuela </option>
																				<option value="Vierges_Americaines">Vierges_Americaines </option>
																				<option value="Vierges_Britanniques">Vierges_Britanniques </option>
																				<option value="Vietnam">Vietnam </option>

																				<option value="Wake">Wake </option>
																				<option value="Wallis et Futuma">Wallis et Futuma </option>

																				<option value="Yemen">Yemen </option>
																				<option value="Yougoslavie">Yougoslavie </option>

																				<option value="Zambie">Zambie </option>
																				<option value="Zimbabwe">Zimbabwe </option>
																			</select>
																			<div class="message-erreur" id="div-erreur-champ-pays-membre"> Veuillez saisir votre Pays.</div>
																		</div>
																		<div class="field-form">
																			<select name="region" id="region-membre"  required>
																				  <option value="" desable selected>Province</option>
																				  <option value="Estuaire ">Estuaire </option>
																				  <option value="Haut-Ogooué">Haut-Ogooué</option>
																				  <option value="Moyen-Ogooué">Moyen-Ogooué</option>
																				  <option value="Ngounié">Ngounié</option>
																				  <option value="Nyanga">Nyanga</option>
																				  <option value="Ogooué-Ivindo">Ogooué-Ivindo</option>
																				  <option value="Ogooué-Lolo">Ogooué-Lolo</option>
																				  <option value="Ogooué-Maritime">Ogooué-Maritime</option>
																				  <option value="Woleu-Ntem">Woleu-Ntem</option>
																			</select>
																			<div class="message-erreur" id="div-erreur-champ-region-membre"> Veuillez saisir votre région.</div>
																		</div>
																	</div>

																	<div class="wrap-field middle">
																		<div class="field-form">
																			<select name="arrondissement" id="arrondissement-membre"  required>
																				  <option value="" desable selected>Arrondissement</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>
																			</select>
																			<div class="message-erreur" id="div-erreur-champ-arrondissement-membre"> Veuillez saisir votre arrondissement.</div>
																		</div>

																		<div class="field-form">
																			<select name="quartier" id="quartier-membre"  required>
																				  <option value="" desable selected>Votre ville</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>
																			</select>
																			<div class="message-erreur" id="div-erreur-champ-quartier-membre"> Veuillez saisir votre quartier.</div>
																		</div>
																	</div>

																	<div class="wrap-field full">
																		<div class="field-form">
																			<input type="text" required name="adresse_precise" placeholder="" data-error-contener="div-erreur-champ-adresse_precise-membre" onKeyup ="Verif_saisie(event, 'adresse_precise', 'btn-valider')" id="adresse_precise-membre">
																			<label class="libele-form">Adresse précise</label>
																			<div class="message-erreur" id="div-erreur-champ-adresse_precise-membre"> Veuillez saisir votre adresse.</div>
																		</div>
																	</div>
																</div>
															</div>

															<div class="wrap-rubrique-form">
																<h3 class="wrap-titre-rubrique-form">Votre proposition pour le Gabon</h3>
																<div class="rubrique-form">
																	<div class="wrap-field ">
																		<div class="field-form">
																			<textarea type="text" required name="proposition" placeholder="" data-error-contener="div-erreur-champ-proposition-membre" onKeyup ="Verif_saisie(event, 'proposition', 'btn-valider')" id="proposition-membre"></textarea>
																			<div class="message-erreur" id="div-erreur-champ-adresse_precise-membre"> Veuillez saisir votre adresse.</div>
																		</div>
																	</div>
																</div>
															</div>

															<div class="wrap-rubrique-form rubrique-acceptation">
																<div class="rubrique-form">
																	<div class="wrap-field ">									
																		<div class="field-form">
																		  <input type="checkbox" required=" " class="form-check-input" name="condition" id="condition-membre" data-error-contener="div-erreur-champ-condition-membre" onkeyup="Verif_saisie(event, 'condition-membre', 'btn-valider')">
																		  <label class="libele-form form-check-label" for="condition-membre">Oui, j'adhère à la charte des valeurs, aux statuts et aux règles de fonctionnement du Mouvement Gabon Nouveau, ainsi qu'aux conditions générales d'utilisation du site et à la politique de protection des données à caractère personnel du site</label>
																		</div>
																	</div>


																	<div class="wrap-field ">									
																		<div class="field-form">
																		  <input type="checkbox" required=" " class="form-check-input" name="actu-mouvement" id="actu-mouvement-membre" data-error-contener="div-erreur-champ-actu-mouvement-membre" onkeyup="Verif_saisie(event, 'actu-mouvement-membre', 'btn-valider')">
																		  <label class="libele-form form-check-label" for="actu-mouvement-membre">Je souhaite être informé(e) de l'actualité du Mouvement Gabon Nouveau par e-mail (optionnel)</label>
																		</div>
																	</div>


																	<div class="wrap-field ">									
																		<div class="field-form">
																		  <input type="checkbox" required=" " class="form-check-input" name="info-militant" id="info-militant-membre" data-error-contener="div-erreur-champ-info-militant-membre" onkeyup="Verif_saisie(event, 'info-militant-membre', 'btn-valider')">
																		  <label class="libele-form form-check-label" for="info-militant-membre">Je souhaite recevoir des informations sur les actions militantes du mouvement par SMS (optionnel)</label>
																		</div>
																	</div>
																</div>
															</div>

															  <div class="form-group">
																  <button type="submit" class="btn btn-inscription">Enregistrer</button>
															  </div>
														</form>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="wrap-contain-onglet-page" id="tab-region">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Liste des Provinces</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="stab-province" style="display: block">
												<h2 class="titre-page titre-left">Province
										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-province.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une province</a>
										</h2>
													<p class="accroche-tab">Ci-dessous la liste des provinces du Gabon</p>

												<div class="wrap-content-page">

													<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Province
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Province</option>
																				  <option value="Estuaire ">Estuaire </option>
																				  <option value="Haut-Ogooué">Haut-Ogooué</option>
																				  <option value="Moyen-Ogooué">Moyen-Ogooué</option>
																				  <option value="Ngounié">Ngounié</option>
																				  <option value="Nyanga">Nyanga</option>
																				  <option value="Ogooué-Ivindo">Ogooué-Ivindo</option>
																				  <option value="Ogooué-Lolo">Ogooué-Lolo</option>
																				  <option value="Ogooué-Maritime">Ogooué-Maritime</option>
																				  <option value="Woleu-Ntem">Woleu-Ntem</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  <div class="form-group">
															  	<label for="">Réference<input name="libelle-reference" type="text" class="search ref-search" id="libelle-reference" placeholder="Ex: #12345678" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
															  	<label for="">Couleur<input name="libelle-couleur" type="color" class="search ref-search" id="libelle-nom" placeholder="Ex: #ff0000" data-onglet="toute"></label>
															  </div>
															  <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" ><i class="fa fa-search"></i></button>
															  </div>
															  
															</form>
														</div>
													<table id="liste-page">
														<thead>
															<tr>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th>Réference</th>
																<th>Titre</th>
																<th>Couleur</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>P100</td>
																<td>Gabonaise</td>
																<td style="background-color: #4CD88B" >#4CD88B</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="wrap-contain-onglet-page" id="tab-departement">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Liste des départements</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">Départements
										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-departement.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un département</a>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des départements du Gabon</p>
													
													<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Province
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Province</option>
																				  <option value="Estuaire ">Estuaire </option>
																				  <option value="Haut-Ogooué">Haut-Ogooué</option>
																				  <option value="Moyen-Ogooué">Moyen-Ogooué</option>
																				  <option value="Ngounié">Ngounié</option>
																				  <option value="Nyanga">Nyanga</option>
																				  <option value="Ogooué-Ivindo">Ogooué-Ivindo</option>
																				  <option value="Ogooué-Lolo">Ogooué-Lolo</option>
																				  <option value="Ogooué-Maritime">Ogooué-Maritime</option>
																				  <option value="Woleu-Ntem">Woleu-Ntem</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  	<div class="form-group">
																	<div class="form-control">
																		<label for="">Département
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Département</option>
																				  <option value="Komo">Komo</option>
																				  <option value="Komo-Mondah">Komo-Mondah</option>
																				  <option value="Komo-Océan">Komo-Océan</option>
																				  <option value="Noya">Noya</option>
																				  <option value="Libreville">Libreville</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  <div class="form-group">
															  	<label for="">Réference<input name="libelle-reference" type="text" class="search ref-search" id="libelle-reference" placeholder="Ex: #12345678" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
															  	<label for="">Couleur<input name="libelle-couleur" type="color" class="search ref-search" id="libelle-nom" placeholder="Ex: #ff0000" data-onglet="toute"></label>
															  </div>
															  <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" ><i class="fa fa-search"></i></button>
															  </div>
															  
															</form>
														</div>


													<table id="liste-page">
														<thead>
															<tr>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th>Réference</th>
																<th>Titre</th>
																<th>Province</th>
																<th>Couleur</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>D100</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B" >#4CD88B</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="wrap-contain-onglet-page" id="tab-commune">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Liste des Communes</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">Communes
										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-commune.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une commune</a>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des communes du Gabon</p>
													
													<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Province
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Province</option>
																				  <option value="Estuaire ">Estuaire </option>
																				  <option value="Haut-Ogooué">Haut-Ogooué</option>
																				  <option value="Moyen-Ogooué">Moyen-Ogooué</option>
																				  <option value="Ngounié">Ngounié</option>
																				  <option value="Nyanga">Nyanga</option>
																				  <option value="Ogooué-Ivindo">Ogooué-Ivindo</option>
																				  <option value="Ogooué-Lolo">Ogooué-Lolo</option>
																				  <option value="Ogooué-Maritime">Ogooué-Maritime</option>
																				  <option value="Woleu-Ntem">Woleu-Ntem</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Département
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Département</option>
																				  <option value="Komo">Komo</option>
																				  <option value="Komo-Mondah">Komo-Mondah</option>
																				  <option value="Komo-Océan">Komo-Océan</option>
																				  <option value="Noya">Noya</option>
																				  <option value="Libreville">Libreville</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Commune
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Commune</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>
																				  <option value="Libreville">Libreville</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  <div class="form-group">
															  	<label for="">Réference<input name="libelle-reference" type="text" class="search ref-search" id="libelle-reference" placeholder="Ex: #12345678" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
															  	<label for="">Couleur<input name="libelle-couleur" type="color" class="search ref-search" id="libelle-nom" placeholder="Ex: #ff0000" data-onglet="toute"></label>
															  </div>
															  <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" ><i class="fa fa-search"></i></button>
															  </div>
															  
															</form>
														</div>


													<table id="liste-page">
														<thead>
															<tr>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th></th>
																<th>Réference</th>
																<th>Titre</th>
																<th>Département</th>
																<th>Province</th>
																<th>Couleur</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B">#4CD88B</td>
															</tr>

															<tr>
																<td class="colonne-tab">1</td>
																<td class="colonne-tab">
																	<label class="check-task">
																		<input type="checkbox" class="case" name="case" value="1">
																		<span class="cr">
																		<i data-feather="check"></i>
																		</span>
																	</label>

																</td>
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td>C100</td>
																<td>Mimongo</td>
																<td>Libreville</td>
																<td>Estuaire</td>
																<td style="background-color: #4CD88B" >#4CD88B</td>
															</tr>
														</tbody>
													</table>
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