		<?php 
			$tab_mois = array( "", "Janvier", "F&eacute;vrier.", "Mars", "Avril", "Mai", "Juin", "Juillet", "Ao&ucirc;t", "Septembre.", "Octobre", "Novembre", "D&eacute;cembre" );
		?>

								<div class="wrap-contain-onglet-page" id="tab-nouvelle-adhesion" >
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Nouvelle Adh&eacute;sion</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<div class="wrap-content-page">
													<p class="accroche-tab">Le formulaire suivant vous permet d'ajouter un adh&eacute;rent</p>
													<div class="conteneur-formulaire">
														<form action="" method="" id="formulaire-adhesion">
								<div class="wrap-rubrique-form">
									<h3 class="wrap-titre-rubrique-form">Vous souhaitez devenir un :</h3>
									<div class="rubrique-form">
										<div class="wrap-field middle">									
											<div class="field-form">
											  <input type="radio"  class="form-check-input" value="Adherent" name="type-membre" id="adherant-membre" data-error-contener="div-erreur-champ-statut-membre" onkeyup="Verif_saisie(event, 'statut-membre', 'btn-valider')">
											  <label class="libele-form form-check-label" for="adherant-membre">Membre adh&eacute;rent</label>
											
												<div class="message-erreur" id="div-erreur-champ-statut-membre"> Veuillez indiquer votre choix.</div>
											</div>


											<div class="field-form">
											  <input type="radio" value="Sympatisant"  class="form-check-input" name="type-membre" id="sympatisant-membre" data-error-contener="div-erreur-champ-statut-membre" onkeyup="Verif_saisie(event, 'statut-membre', 'btn-valider')">
											  <label class="libele-form form-check-label" for="sympatisant-membre">Membre sympatisant</label>
											</div>
										</div>
									</div>
								</div>
								<div class="wrap-rubrique-form">
									<h3 class="wrap-titre-rubrique-form">Informations Personnelles</h3>
									<div class="rubrique-form">
										<div class="wrap-field middle">									
											<div class="field-form">
												<select name="sexe-membre" id="sexe-membre" class="mandatory"  data-error-contener="div-erreur-champ-sexe-membre">
													  <option value="" selected>Vous &ecirc;tes</option>	
													  <option value="Homme">Un Homme</option>
													  <option value="Femme">Une Femme.</option>
												</select>
												<div class="message-erreur" id="div-erreur-champ-sexe-membre"> Veuillez faire un choix.</div>
											</div>
											<div class="field-form">
												<input type="text"  class="mandatory" placeholder=" " name="nom-membre" id="nom-membre" data-error-contener="div-erreur-champ-nom-membre" onKeyup ="Verif_saisie(event, 'nom-membre', 'btn-valider')">
												<span class="libele-form">Nom</span>
												<div class="message-erreur" id="div-erreur-champ-nom-membre"> Veuillez saisir un nom.</div>
											</div>
										</div>

										<div class="wrap-field middle">
											<div class="field-form">
												<input type="text"  class="mandatory" placeholder=" "  name="prenom-membre"  id="prenom-membre" data-error-contener="div-erreur-champ-prenom-membre" onKeyup ="Verif_saisie(event, 'prenom-membre', 'btn-valider')">
												<span class="libele-form">Pr&eacute;nom</span>
												<div class="message-erreur" id="div-erreur-champ-prenom-membre"> Veuillez saisir un pr&eacute;nom.</div>
											</div>
											<div class="field-form">
												<select class="search-select mandatory" name="nationalite" data-error-contener="div-erreur-champ-nationalite-membre"> 
                                                    <option value="" desable selected>Nationalit&eacute;</option>	
													<option value="Afghane">Afghane (Afghanistan)</option>
													<option value="Albanaise">Albanaise (Albanie)</option>
													<option value="Algerienne">Alg&eacute;rienne (Alg&eacute;rie)</option>
													<option value="Allemande">Allemande (Allemagne)</option>
													<option value="Americaine">Americaine (&Eacute;tats-Unis)</option>
													<option value="Andorrane">Andorrane (Andorre)</option>
													<option value="Angolaise">Angolaise (Angola)</option>
													<option value="Antiguaise-et-Barbudienne">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
													<option value="Argentine">Argentine (Argentine)</option>
													<option value="Armenienne">Armenienne (Arm&eacute;nie)</option>
													<option value="Australienne">Australienne (Australie)</option>
													<option value="Autrichienne">Autrichienne (Autriche)</option>
													<option value="Azerbaidjanaise">Azerba&iuml;djanaise (Azerba&iuml;djan)</option>
													<option value="Bahamienne">Bahamienne (Bahamas)</option>
													<option value="Bahreinienne">Bahreinienne (Bahre&iuml;n)</option>
													<option value="Bangladaise">Bangladaise (Bangladesh)</option>
													<option value="Barbadienne">Barbadienne (Barbade)</option>
													<option value="Belge">Belge (Belgique)</option>
													<option value="Belizienne">Belizienne (Belize)</option>
													<option value="Beninoise">B&eacute;ninoise (B&eacute;nin)</option>
													<option value="Bhoutanaise">Bhoutanaise (Bhoutan)</option>
													<option value="Bielorusse">Bi&eacute;lorusse (Bi&eacute;lorussie)</option>
													<option value="Birmane">Birmane (Birmanie)</option>
													<option value="Bissau-Guineenne">Bissau-Guin&eacute;enne (Guin&eacute;e-Bissau)</option>
													<option value="Bolivienne">Bolivienne (Bolivie)</option>
													<option value="Bosnienne">Bosnienne (Bosnie-Herz&eacute;govine)</option>
													<option value="Botswanaise">Botswanaise (Botswana)</option>
													<option value="Bresilienne">Br&eacute;silienne (Br&eacute;sil)</option>
													<option value="Britannique">Britannique (Royaume-Uni)</option>
													<option value="Bruneienne">Brun&eacute;ienne (Brun&eacute;i)</option>
													<option value="Bulgare">Bulgare (Bulgarie)</option>
													<option value="Burkinabee">Burkinab&eacute;e (Burkina)</option>
													<option value="Burundaise">Burundaise (Burundi)</option>
													<option value="Cambodgienne">Cambodgienne (Cambodge)</option>
													<option value="Camerounaise">Camerounaise (Cameroun)</option>
													<option value="Canadienne">Canadienne (Canada)</option>
													<option value="Cap-verdienne">Cap-verdienne (Cap-Vert)</option>
													<option value="Centrafricaine">Centrafricaine (Centrafrique)</option>
													<option value="Chilienne">Chilienne (Chili)</option>
													<option value="Chinoise">Chinoise (Chine)</option>
													<option value="Chypriote">Chypriote (Chypre)</option>
													<option value="Colombienne">Colombienne (Colombie)</option>
													<option value="Comorienne">Comorienne (Comores)</option>
													<option value="Congolaise-Brazzaville">Congolaise (Congo-Brazzaville)</option>
													<option value="Congolaise-Kinshasa">Congolaise (Congo-Kinshasa)</option>
													<option value="Cookienne">Cookienne (&Icirc;les Cook)</option>
													<option value="Costaricaine">Costaricaine (Costa Rica)</option>
													<option value="Croate">Croate (Croatie)</option>
													<option value="Cubaine">Cubaine (Cuba)</option>
													<option value="Danoise">Danoise (Danemark)</option>
													<option value="Djiboutienne">Djiboutienne (Djibouti)</option>
													<option value="Dominicaine">Dominicaine (R&eacute;publique dominicaine)</option>
													<option value="Dominiquaise">Dominiquaise (Dominique)</option>
													<option value="Egyptienne">&eacute;gyptienne (&eacute;gypte)</option>
													<option value="Emirienne ">&eacute;mirienne (&eacute;mirats arabes unis)</option>
													<option value="Equato-guineenne">&eacute;quato-guineenne (Guin&eacute;e &eacute;quatoriale)</option>
													<option value="Equatorienne">&eacute;quatorienne (&eacute;quateur)</option>
													<option value="Erythr&eacute;enne">&eacute;rythr&eacute;enne (&eacute;rythr&eacute;e)</option>
													<option value="Espagnole">Espagnole (Espagne)</option>
													<option value="Est-timoraise">Est-timoraise (Timor-Leste)</option>
													<option value="Estonienne">Estonienne (Estonie)</option>
													<option value="Ethiopienne">&eacute;thiopienne (&eacute;thiopie)</option>
													<option value="Fidjienne">Fidjienne (Fidji)</option>
													<option value="Finlandaise">Finlandaise (Finlande)</option>
													<option value="Francaise">Fran&ccedil;aise (France)</option>
													<option value="Gabonaise">Gabonaise (Gabon)</option>
													<option value="Gambienne">Gambienne (Gambie)</option>
													<option value="Georgienne">Georgienne (G&eacute;orgie)</option>
													<option value="Ghaneenne">Ghan&eacute;enne (Ghana)</option>
													<option value="Grenadienne">Grenadienne (Grenade)</option>
													<option value="Guatemalteque">Guat&eacute;malt&egrave;que (Guatemala)</option>
													<option value="Guineenne">Guin&eacute;enne (Guin&eacute;e)</option>
													<option value="Guyanienne">Guyanienne (Guyana)</option>
													<option value="Haitienne">Ha&iuml;tienne (Ha&iuml;ti)</option>
													<option value="Hellenique">Hell&eacute;nique (Gr&egrave;ce)</option>
													<option value="Hondurienne">Hondurienne (Honduras)</option>
													<option value="Hongroise">Hongroise (Hongrie)</option>
													<option value="Indienne">Indienne (Inde)</option>
													<option value="Indonesienne">Indon&eacute;sienne (Indon&eacute;sie)</option>
													<option value="Irakienne">Irakienne (Iraq)</option>
													<option value="Iranienne">Iranienne (Iran)</option>
													<option value="Irlandaise">Irlandaise (Irlande)</option>
													<option value="Islandaise">Islandaise (Islande)</option>
													<option value="Israelienne">Isra&eacute;lienne (Isra&euml;l)</option>
													<option value="Italienne">Italienne (Italie)</option>
													<option value="Ivoirienne ">Ivoirienne (C&ocirc;te d'Ivoire)</option>
													<option value="Jamaicaine">Jama&iuml;caine (Jama&iuml;que)</option>
													<option value="Japonaise">Japonaise (Japon)</option>
													<option value="Jordanienne">Jordanienne (Jordanie)</option>
													<option value="Kazakhstanaise">Kazakhstanaise (Kazakhstan)</option>
													<option value="Kenyane">Kenyane (Kenya)</option>
													<option value="Kirghize">Kirghize (Kirghizistan)</option>
													<option value="Kiribatienne">Kiribatienne (Kiribati)</option>
													<option value="Kittitienne-et-Nevicienne">Kittitienne et N&eacute;vicienne (Saint-Christophe-et-Ni&eacute;v&egrave;s)</option>
													<option value="Koweitienne">Kowe&iuml;tienne (Kowe&iuml;t)</option>
													<option value="Laotienne">Laotienne (Laos)</option>
													<option value="Lesothane">Lesothane (Lesotho)</option>
													<option value="Lettone">Lettone (Lettonie)</option>
													<option value="Libanaise">Libanaise (Liban)</option>
													<option value="Liberienne">Lib&eacute;rienne (Lib&eacute;ria)</option>
													<option value="Libyenne">Libyenne (Libye)</option>
													<option value="Liechtensteinoise">Liechtensteinoise (Liechtenstein)</option>
													<option value="Lituanienne">Lituanienne (Lituanie)</option>
													<option value="Luxembourgeoise">Luxembourgeoise (Luxembourg)</option>
													<option value="Macedonienne">Mac&eacute;donienne (Mac&eacute;doine)</option>
													<option value="Malaisienne">Malaisienne (Malaisie)</option>
													<option value="Malawienne">Malawienne (Malawi)</option>
													<option value="Maldivienne">Maldivienne (Maldives)</option>
													<option value="Malgache">Malgache (Madagascar)</option>
													<option value="Malienne">Malienne (Mali)</option>
													<option value="Maltaise">Maltaise (Malte)</option>
													<option value="Marocaine">Marocaine (Maroc)</option>
													<option value="Marshallaise">Marshallaise (&Icirc;les Marshall)</option>
													<option value="Mauricienne">Mauricienne (Maurice)</option>
													<option value="Mauritanienne">Mauritanienne (Mauritanie)</option>
													<option value="Mexicaine">Mexicaine (Mexique)</option>
													<option value="Micronesienne">Micron&eacute;sienne (Micron&eacute;sie)</option>
													<option value="Moldave">Moldave (Moldovie)</option>
													<option value="Monegasque">Monegasque (Monaco)</option>
													<option value="Mongole">Mongole (Mongolie)</option>
													<option value="Montenegrine">Mont&eacute;n&eacute;grine (Mont&eacute;n&eacute;gro)</option>
													<option value="Mozambicaine">Mozambicaine (Mozambique)</option>
													<option value="Namibienne">Namibienne (Namibie)</option>
													<option value="Nauruane">Nauruane (Nauru)</option>
													<option value="Neerlandaise">N&eacute;erlandaise (Pays-Bas)</option>
													<option value="Neo-Zelandaise">N&eacute;o-Z&eacute;landaise (Nouvelle-Z&eacute;lande)</option>
													<option value="Nepalaise">N&eacute;palaise (N&eacute;pal)</option>
													<option value="Nicaraguayenne">Nicaraguayenne (Nicaragua)</option>
													<option value="Nigeriane">Nig&eacute;riane (Nig&eacute;ria)</option>
													<option value="Nig&eacute;rienne">Nig&eacute;rienne (Niger)</option>
													<option value="Niueenne">Niu&eacute;enne (Niue)</option>
													<option value="Nord-coreenne">Nord-cor&eacute;enne (Cor&eacute;e du Nord)</option>
													<option value="Norvegienne">Norv&eacute;gienne (Norv&egrave;ge)</option>
													<option value="Omanaise">Omanaise (Oman)</option>
													<option value="Ougandaise">Ougandaise (Ouganda)</option>
													<option value="Ouzbeke">Ouzb&eacute;ke (Ouzb&eacute;kistan)</option>
													<option value="Pakistanaise">Pakistanaise (Pakistan)</option>
													<option value="Palaosienne">Palaosienne (Palaos)</option>
													<option value="Palestinienne">Palestinienne (Palestine)</option>
													<option value="Panameenne">Panam&eacute;enne (Panama)</option>
													<option value="Papouane-Neo-Guineenne">Papouane-N&eacute;o-Guin&eacute;enne (Papouasie-Nouvelle-Guin&eacute;e)</option>
													<option value="Paraguayenne">Paraguayenne (Paraguay)</option>
													<option value="Peruvienne">P&eacute;ruvienne (P&eacute;rou)</option>
													<option value="Philippine">Philippine (Philippines)</option>
													<option value="Polonaise">Polonaise (Pologne)</option>
													<option value="Portugaise">Portugaise (Portugal)</option>
													<option value="Qatarienne">Qatarienne (Qatar)</option>
													<option value="Roumaine">Roumaine (Roumanie)</option>
													<option value="Russe">Russe (Russie)</option>
													<option value="Rwandaise">Rwandaise (Rwanda)</option>
													<option value="Saint-Lucienne">Saint-Lucienne (Sainte-Lucie)</option>
													<option value="Saint-Marinaise">Saint-Marinaise (Saint-Marin)</option>
													<option value="Saint-Vincentaise-et-Grenadine">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
													<option value="Salomonaise">Salomonaise (&Icirc;les Salomon)</option>
													<option value="Salvadorienne">Salvadorienne (Salvador)</option>
													<option value="Samoane">Samoane (Samoa)</option>
													<option value="Saotomeenne">Saotom&eacute;enne (Sao Tom&eacute;-et-Principe)</option>
													<option value="Saoudienne">Saoudienne (Arabie saoudite)</option>
													<option value="Senegalaise">S&eacute;n&eacute;galaise (S&eacute;n&eacute;gal)</option>
													<option value="Serbe">Serbe (Serbie)</option>
													<option value="Seychelloise">Seychelloise (Seychelles)</option>
													<option value="Sierra-Leonaise">Sierra-L&eacute;onaise (Sierra Leone)</option>
													<option value="Singapourienne ">Singapourienne (Singapour)</option>
													<option value="Slovaque">Slovaque (Slovaquie)</option>
													<option value="Slovene">Slov&egrave;ne (Slov&eacute;nie)</option>
													<option value="Somalienne">Somalienne (Somalie)</option>
													<option value="Soudanaise">Soudanaise (Soudan)</option>
													<option value="Sri-Lankaise">Sri-Lankaise (Sri Lanka)</option>
													<option value="Sud-Africaine">Sud-Africaine (Afrique du Sud)</option>
													<option value="Sud-Coreenne">Sud-Cor&eacute;enne (Cor&eacute;e du Sud)</option>
													<option value="Sud-Soudanaise">Sud-Soudanaise (Soudan du Sud)</option>
													<option value="Suedoise">Su&eacute;doise (Su&egrave;de)</option>
													<option value="Suisse">Suisse (Suisse)</option>
													<option value="Surinamaise">Surinamaise (Suriname)</option>
													<option value="Swazie">Swazie (Swaziland)</option>
													<option value="Syrienne">Syrienne (Syrie)</option>
													<option value="Tadjike">Tadjike (Tadjikistan)</option>
													<option value="Tanzanienne">Tanzanienne (Tanzanie)</option>
													<option value="Tchadienne">Tchadienne (Tchad)</option>
													<option value="Tcheque">Tch&egrave;que (Tch&eacute;quie)</option>
													<option value="Thailandaise">Tha&iuml;landaise (Tha&iuml;lande)</option>
													<option value="Togolaise">Togolaise (Togo)</option>
													<option value="Tonguienne">Tonguienne (Tonga)</option>
													<option value="Trinidadienne">Trinidadienne (Trinit&eacute;-et-Tobago)</option>
													<option value="Tunisienne">Tunisienne (Tunisie)</option>
													<option value="Turkmene">Turkm&egrave;ne (Turkm&eacute;nistan)</option>
													<option value="Turque">Turque (Turquie)</option>
													<option value="Tuvaluane">Tuvaluane (Tuvalu)</option>
													<option value="Ukrainienne">Ukrainienne (Ukraine)</option>
													<option value="Uruguayenne">Uruguayenne (Uruguay)</option>
													<option value="Vanuatuane">Vanuatuane (Vanuatu)</option>
													<option value="Vaticane">Vaticane (Vatican)</option>
													<option value="Venezuelienne">V&eacute;n&eacute;zu&eacute;lienne (Venezuela)</option>
													<option value="Vietnamienne">Vietnamienne (Vi&ecirc;t Nam)</option>
													<option value="Yemenite">Y&eacute;m&eacute;nite (Y&eacute;men)</option>
													<option value="Zambienne">Zambienne (Zambie)</option>
													<option value="Zimbabweenne">Zimbabw&eacute;enne (Zimbabwe)</option>

												</select>
												<div class="message-erreur" id="div-erreur-champ-nationalite-membre"> Veuillez indiquer la nationalit&eacute;.</div>
											</div>
										</div>

										<div class="wrap-field middle">
											<div class="field-form">
												<span class="titre-line">Date de naissance</span>
												<div class="wrap-field third" id="conteneur-date-naissance">
													  <div class="field-form">
														  <select name="jour_nais" id="jour_nais-membre">
															  <option value="" desable selected>Jour</option>
															  <?php
																for($i=0; $i<=31; $i++){
																	echo '<option value="'.$i.'" desable selected>'.$i.'</option>';
																}
															  ?>
														</select>
													  </div>

													<div class="field-form">
														 <select name="mois_nais" id="mois_nais-membre">
															  <option value="" selected>Mois</option>
															  <?php
																for($i=1; $i<='12'; $i++){
																	if($i<10)$j="0".$i; else $j=$i;
																	echo '<option value="'.$j.'" >'.$tab_mois[$i].'</option>';
																}
															  ?>
														</select>
													  </div>

													<div class="field-form">
														  <select name="annee_nais" id="annee_nais-membre">
															  <option value="" selected>Ann&eacute;e</option>
															  <?php
																for($i=date('Y')-15; $i>1899; $i--){
																	echo '<option value="'.$i.'"  >'.$i.'</option>';
																}
															  ?>
														</select>
													  </div>
													
													
														  <div class="message-erreur" id="div-erreur-champ-jour_nais-membre" style="display: none;"> Veuillez indiquer une date de naissance valide</div>
												</div>
											</div>

											<div class="field-form">
												<input type="text"  class="mandatory" placeholder=" "  name="profession-membre" id="profession-membre" data-error-contener="div-erreur-champ-profession-membre" onKeyup ="Verif_saisie(event, 'profession-membre', 'btn-valider')">
												<span class="libele-form">Profession</span>
												<div class="message-erreur" id="div-erreur-champ-profession-membre"> Veuillez saisir une profession.</div>
											</div>
										</div>

										<div class="wrap-field middle">

											<div class="field-form" id="wrap-numero">
												<input type="text" readonly id="indicatif" value="+241" name="indicatif">
												<div class="wrap-select-code-pays">
												  <select type="select" id="code-pays" name="indicatif-telephone" aria-required="true" role="combobox" aria-multiline="false" aria-labelledby="country-code-lbl-aria">
													<option role="option" data-code="+93" value="AF">Afghanistan (+93)</option>
													<option role="option" data-code="+355" value="AL">Albanie (+355)</option>
													<option role="option" data-code="+213" value="DZ">Alg&eacute;rie (+213)</option>
													<option role="option" data-code="+1" value="AS">Samoa am&eacute;ricaines (+1)</option>
													<option role="option" data-code="+376" value="AD">Andorre (+376)</option>
													<option role="option" data-code="+244" value="AO">Angola (+244)</option>
													<option role="option" data-code="+1" value="AI">Anguilla (+1)</option>
													<option role="option" data-code="+1" value="AG">Antigua et Barbuda (+1)</option>
													<option role="option" data-code="+54" value="AR">Argentine (+54)</option>
													<option role="option" data-code="+374" value="AM">Arm&eacute;nie (+374)</option>
													<option role="option" data-code="+297" value="AW">Aruba (+297)</option>
													<option role="option" data-code="+247" value="AC">Ascension (+247)</option>
													<option role="option" data-code="+61" value="AU">Australie (+61)</option>
													<option role="option" data-code="+672" value="AX">Territoires australiens ext&eacute;rieurs (+672)</option>
													<option role="option" data-code="+43" value="AT">Autriche (+43)</option>
													<option role="option" data-code="+994" value="AZ">Azerba&iuml;djan (+994)</option>
													<option role="option" data-code="+1" value="BS">Bahamas (+1)</option>
													<option role="option" data-code="+973" value="BH">Bahre&iuml;n (+973)</option>
													<option role="option" data-code="+880" value="BD">Bangladesh (+880)</option>
													<option role="option" data-code="+1" value="BB">Barbade (+1)</option>
													<option role="option" data-code="+375" value="BY">B&eacute;larus (+375)</option>
													<option role="option" data-code="+32" value="BE">Belgique (+32)</option>
													<option role="option" data-code="+501" value="BZ">Belize (+501)</option>
													<option role="option" data-code="+229" value="BJ">B&eacute;nin (+229)</option>
													<option role="option" data-code="+1" value="BM">Bermudes (+1)</option>
													<option role="option" data-code="+975" value="BT">Bhoutan (+975)</option>
													<option role="option" data-code="+591" value="BO">Bolivie (+591)</option>
													<option role="option" data-code="+387" value="BA">Bosnie-Herz&eacute;govine (+387)</option>
													<option role="option" data-code="+267" value="BW">Botswana (+267)</option>
													<option role="option" data-code="+55" value="BR">Br&eacute;sil (+55)</option>
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
													<option role="option" data-code="+236" value="CF">R&eacute;publique centrafricaine (+236)</option>
													<option role="option" data-code="+235" value="TD">Tchad (+235)</option>
													<option role="option" data-code="+56" value="CL">Chili (+56)</option>
													<option role="option" data-code="+86" value="CN">Chine (+86)</option>
													<option role="option" data-code="+57" value="CO">Colombie (+57)</option>
													<option role="option" data-code="+269" value="KM">Comores (+269)</option>
													<option role="option" data-code="+242" value="CG">Congo (+242)</option>
													<option role="option" data-code="+682" value="CK">Îles Cook (+682)</option>
													<option role="option" data-code="+506" value="CR">Costa Rica (+506)</option>
													<option role="option" data-code="+225" value="CI">C&ocirc;te d'Ivoire (+225)</option>
													<option role="option" data-code="+385" value="HR">Croatie (+385)</option>
													<option role="option" data-code="+53" value="CU">Cuba (+53)</option>
													<option role="option" data-code="+357" value="CY">Chypre (+357)</option>
													<option role="option" data-code="+420" value="CZ">R&eacute;publique tch&egrave;que (+420)</option>
													<option role="option" data-code="+243" value="CD">R&eacute;publique d&eacute;mocratique du Congo (+243)</option>
													<option role="option" data-code="+45" value="DK">Danemark (+45)</option>
													<option role="option" data-code="+246" value="DG">Diego Garcia (+246)</option>
													<option role="option" data-code="+253" value="DJ">Djibouti (+253)</option>
													<option role="option" data-code="+1" value="DM">Dominique (+1)</option>
													<option role="option" data-code="+1" value="DO">R&eacute;publique Dominicaine (+1)</option>
													<option role="option" data-code="+670" value="TL">Timor oriental (+670)</option>
													<option role="option" data-code="+593" value="EC">&eacute;quateur (+593)</option>
													<option role="option" data-code="+20" value="EG">&eacute;gypte (+20)</option>
													<option role="option" data-code="+503" value="SV">Salvador (+503)</option>
													<option role="option" data-code="+240" value="GQ">Guin&eacute;e &eacute;quatoriale (+240)</option>
													<option role="option" data-code="+291" value="ER">&eacute;rythr&eacute;e (+291)</option>
													<option role="option" data-code="+372" value="EE">Estonie (+372)</option>
													<option role="option" data-code="+251" value="ET">&eacute;thiopie (+251)</option>
													<option role="option" data-code="+500" value="FK">Îles Malouines (+500)</option>
													<option role="option" data-code="+298" value="FO">Îles F&eacute;ro&eacute; (+298)</option>
													<option role="option" data-code="+679" value="FJ">Fidji (+679)</option>
													<option role="option" data-code="+358" value="FI">Finlande (+358)</option>
													<option role="option" data-code="+33" value="FR">France (+33)</option>
													<option role="option" data-code="+594" value="GF">Guyane fran&ccedil;aise (+594)</option>
													<option role="option" data-code="+689" value="PF">Polyn&eacute;sie fran&ccedil;aise (+689)</option>
													<option role="option" data-code="+241" value="GA" selected="selected">Gabon (+241)</option>
													<option role="option" data-code="+220" value="GM">Gambie (+220)</option>
													<option role="option" data-code="+995" value="GE">G&eacute;orgie (+995)</option>
													<option role="option" data-code="+49" value="DE">Allemagne (+49)</option>
													<option role="option" data-code="+233" value="GH">Ghana (+233)</option>
													<option role="option" data-code="+350" value="GI">Gibraltar (+350)</option>
													<option role="option" data-code="+30" value="GR">Gr&egrave;ce (+30)</option>
													<option role="option" data-code="+299" value="GL">Groenland (+299)</option>
													<option role="option" data-code="+1" value="GD">Grenade (+1)</option>
													<option role="option" data-code="+590" value="GP">Guadeloupe (+590)</option>
													<option role="option" data-code="+1" value="GU">Guam (+1)</option>
													<option role="option" data-code="+502" value="GT">Guatemala (+502)</option>
													<option role="option" data-code="+224" value="GN">Guin&eacute;e (+224)</option>
													<option role="option" data-code="+245" value="GW"> (+245)</option>
													<option role="option" data-code="+592" value="GY">Guyane (+592)</option>
													<option role="option" data-code="+509" value="HT">Ha&iuml;ti (+509)</option>
													<option role="option" data-code="+504" value="HN">Honduras (+504)</option>
													<option role="option" data-code="+852" value="HK">Hong Kong (+852)</option>
													<option role="option" data-code="+36" value="HU">Hongrie (+36)</option>
													<option role="option" data-code="+354" value="IS">Islande (+354)</option>
													<option role="option" data-code="+91" value="IN">Inde (+91)</option>
													<option role="option" data-code="+62" value="ID">Indon&eacute;sie (+62)</option>
													<option role="option" data-code="+98" value="IR">Iran (+98)</option>
													<option role="option" data-code="+964" value="IQ">Irak (+964)</option>
													<option role="option" data-code="+353" value="IE">Irlande (+353)</option>
													<option role="option" data-code="+972" value="IL">Isra&euml;l (+972)</option>
													<option role="option" data-code="+39" value="IT">Italie (+39)</option>
													<option role="option" data-code="+1" value="JM">Jama&iuml;que (+1)</option>
													<option role="option" data-code="+81" value="JP">Japon (+81)</option>
													<option role="option" data-code="+962" value="JO">Jordanie (+962)</option>
													<option role="option" data-code="+7" value="KZ">Kazakhstan (+7)</option>
													<option role="option" data-code="+254" value="KE">Kenya (+254)</option>
													<option role="option" data-code="+686" value="KI">Kiribati (+686)</option>
													<option role="option" data-code="+965" value="KW">Kowe&iuml;t (+965)</option>
													<option role="option" data-code="+996" value="KG">Kirghizistan (+996)</option>
													<option role="option" data-code="+856" value="LA">Laos (+856)</option>
													<option role="option" data-code="+371" value="LV">Lettonie (+371)</option>
													<option role="option" data-code="+961" value="LB">Liban (+961)</option>
													<option role="option" data-code="+266" value="LS">Lesotho (+266)</option>
													<option role="option" data-code="+231" value="LR">Lib&eacute;ria (+231)</option>
													<option role="option" data-code="+218" value="LY">Libye (+218)</option>
													<option role="option" data-code="+423" value="LI">Liechtenstein (+423)</option>
													<option role="option" data-code="+370" value="LT">Lituanie (+370)</option>
													<option role="option" data-code="+352" value="LU">Luxembourg (+352)</option>
													<option role="option" data-code="+853" value="MO">Macao (+853)</option>
													<option role="option" data-code="+389" value="MK">Mac&eacute;doine (+389)</option>
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
													<option role="option" data-code="+691" value="FM">Micron&eacute;sie (+691)</option>
													<option role="option" data-code="+373" value="MD">Moldavie (+373)</option>
													<option role="option" data-code="+377" value="MC">Monaco (+377)</option>
													<option role="option" data-code="+976" value="MN">Mongolie (+976)</option>
													<option role="option" data-code="+382" value="ME">Mont&eacute;n&eacute;gro (+382)</option>
													<option role="option" data-code="+1" value="MS">Montserrat (+1)</option>
													<option role="option" data-code="+212" value="MA">Maroc (+212)</option>
													<option role="option" data-code="+258" value="MZ">Mozambique (+258)</option>
													<option role="option" data-code="+95" value="MM">Myanmar (+95)</option>
													<option role="option" data-code="+264" value="NA">Namibie (+264)</option>
													<option role="option" data-code="+674" value="NR">Nauru (+674)</option>
													<option role="option" data-code="+977" value="NP">N&eacute;pal (+977)</option>
													<option role="option" data-code="+31" value="NL">Pays-Bas (+31)</option>
													<option role="option" data-code="+599" value="AN"> (+599)</option>
													<option role="option" data-code="+687" value="NC">Nouvelle-Cal&eacute;donie (+687)</option>
													<option role="option" data-code="+64" value="NZ">Nouvelle-Z&eacute;lande (+64)</option>
													<option role="option" data-code="+505" value="NI">Nicaragua (+505)</option>
													<option role="option" data-code="+227" value="NE">Niger (+227)</option>
													<option role="option" data-code="+234" value="NG">Nig&eacute;ria (+234)</option>
													<option role="option" data-code="+683" value="NU">Niue (+683)</option>
													<option role="option" data-code="+850" value="KP">Cor&eacute;e du Nord (+850)</option>
													<option role="option" data-code="+1" value="MP">Îles Mariannes du Nord (+1)</option>
													<option role="option" data-code="+47" value="NO">Norv&egrave;ge (+47)</option>
													<option role="option" data-code="+968" value="OM">Oman (+968)</option>
													<option role="option" data-code="+92" value="PK">Pakistan (+92)</option>
													<option role="option" data-code="+680" value="PW">Palau (+680)</option>
													<option role="option" data-code="+970" value="PS">Palestine (+970)</option>
													<option role="option" data-code="+507" value="PA">Panama (+507)</option>
													<option role="option" data-code="+675" value="PG">Papouasie-Nouvelle-Guin&eacute;e (+675)</option>
													<option role="option" data-code="+595" value="PY">Paraguay (+595)</option>
													<option role="option" data-code="+51" value="PE">P&eacute;rou (+51)</option>
													<option role="option" data-code="+63" value="PH">Philippines (+63)</option>
													<option role="option" data-code="+48" value="PL">Pologne (+48)</option>
													<option role="option" data-code="+351" value="PT">Portugal (+351)</option>
													<option role="option" data-code="+1" value="PR">Porto Rico (+1)</option>
													<option role="option" data-code="+974" value="QA">Qatar (+974)</option>
													<option role="option" data-code="+262" value="RE">R&eacute;union (+262)</option>
													<option role="option" data-code="+40" value="RO">Roumanie (+40)</option>
													<option role="option" data-code="+7" value="RU">Russie (+7)</option>
													<option role="option" data-code="+250" value="RW">Rwanda (+250)</option>
													<option role="option" data-code="+290" value="SH">Sainte-H&eacute;l&egrave;ne (+290)</option>
													<option role="option" data-code="+1" value="KN">Saint-Kitts-et-Nevis (+1)</option>
													<option role="option" data-code="+1" value="LC">Sainte-Lucie (+1)</option>
													<option role="option" data-code="+508" value="PM">Saint-Pierre-et-Miquelon (+508)</option>
													<option role="option" data-code="+1" value="VC">Saint-Vincent-et-les-Grenadines (+1)</option>
													<option role="option" data-code="+685" value="WS">Samoa (+685)</option>
													<option role="option" data-code="+378" value="SM">Saint-Marin (+378)</option>
													<option role="option" data-code="+239" value="ST">Sao Tom&eacute;-et-Principe (+239)</option>
													<option role="option" data-code="+966" value="SA">Arabie Saoudite (+966)</option>
													<option role="option" data-code="+221" value="SN">S&eacute;n&eacute;gal (+221)</option>
													<option role="option" data-code="+381" value="RS">Serbie (+381)</option>
													<option role="option" data-code="+248" value="SC">Seychelles (+248)</option>
													<option role="option" data-code="+232" value="SL">Sierra Leone (+232)</option>
													<option role="option" data-code="+65" value="SG">Singapour (+65)</option>
													<option role="option" data-code="+421" value="SK">Slovaquie (+421)</option>
													<option role="option" data-code="+386" value="SI">Slov&eacute;nie (+386)</option>
													<option role="option" data-code="+677" value="SB">Îles Salomon (+677)</option>
													<option role="option" data-code="+252" value="SO">Somalie (+252)</option>
													<option role="option" data-code="+27" value="ZA">Afrique du Sud (+27)</option>
													<option role="option" data-code="+82" value="KR">Cor&eacute;e du Sud (+82)</option>
													<option role="option" data-code="+34" value="ES">Espagne (+34)</option>
													<option role="option" data-code="+94" value="LK">Sri Lanka (+94)</option>
													<option role="option" data-code="+249" value="SD">Soudan (+249)</option>
													<option role="option" data-code="+597" value="SR">Surinam (+597)</option>
													<option role="option" data-code="+268" value="SZ">Swaziland (+268)</option>
													<option role="option" data-code="+46" value="SE">Su&egrave;de (+46)</option>
													<option role="option" data-code="+41" value="CH">Suisse (+41)</option>
													<option role="option" data-code="+963" value="SY">Syrie (+963)</option>
													<option role="option" data-code="+886" value="TW">Ta&iuml;wan (+886)</option>
													<option role="option" data-code="+992" value="TJ">Tadjikistan (+992)</option>
													<option role="option" data-code="+255" value="TZ">Tanzanie (+255)</option>
													<option role="option" data-code="+66" value="TH">Tha&iuml;lande (+66)</option>
													<option role="option" data-code="+228" value="TG">Togo (+228)</option>
													<option role="option" data-code="+690" value="TK">Tokelau (+690)</option>
													<option role="option" data-code="+676" value="TO">Tonga (+676)</option>
													<option role="option" data-code="+1" value="TT">Trinit&eacute;-et-Tobago (+1)</option>
													<option role="option" data-code="+216" value="TN">Tunisie (+216)</option>
													<option role="option" data-code="+90" value="TR">Turquie (+90)</option>
													<option role="option" data-code="+993" value="TM">Turkm&eacute;nistan (+993)</option>
													<option role="option" data-code="+1" value="TC">Îles Turks et Caïcos (+1)</option>
													<option role="option" data-code="+688" value="TV">Tuvalu (+688)</option>
													<option role="option" data-code="+1" value="VI">Îles Vierges am&eacute;ricaines (+1)</option>
													<option role="option" data-code="+256" value="UG">Ouganda (+256)</option>
													<option role="option" data-code="+380" value="UA">Ukraine (+380)</option>
													<option role="option" data-code="+971" value="AE">&eacute;mirats Arabes Unis (+971)</option>
													<option role="option" data-code="+44" value="GB">Royaume-Uni (+44)</option>
													<option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX">&eacute;tats-Unis (+1)</option>
													<option role="option" data-code="+598" value="UY">Uruguay (+598)</option>
													<option role="option" data-code="+998" value="UZ">Ouzb&eacute;kistan (+998)</option>
													<option role="option" data-code="+678" value="VU">Vanuatu (+678)</option>
													<option role="option" data-code="+379" value="VA">Cit&eacute; du Vatican (+379)</option>
													<option role="option" data-code="+58" value="VE">Venezuela (+58)</option>
													<option role="option" data-code="+84" value="VN">Vietnam (+84)</option>
													<option role="option" data-code="+681" value="WF">Wallis et Futuna (+681)</option>
													<option role="option" data-code="+967" value="YE">Y&eacute;men (+967)</option>
													<option role="option" data-code="+260" value="ZM">Zambie (+260)</option>
													<option role="option" data-code="+263" value="ZW">Zimbabwe (+263)</option>
												  </select>
												</div>
												<input type="text" class="mandatory" placeholder=" " name="telephone-membre" id="telephone-membre" data-error-contener="div-erreur-champ-telephone-membre" onkeyup="Verif_saisie(event, 'telephone-membre', 'btn-valider')" oninput="this.value = this.value.replace(/[^0-9()+. ]/g, '').replace(/(\..*)\./g, '$1');">
												<span class="libele-form">Num&eacute;ro de t&eacute;l&eacute;phone</span>
											<div class="message-erreur" id="div-erreur-champ-telephone-membre"> Veuillez saisir votre num&eacute;ro de t&eacute;l&eacute;phone</div>
											</div>

											<div class="field-form" id="wrap-numero-whatsapp">
												<input type="text" readonly id="indicatif-whatsapp" value="+241" name="indicatif-whatsapp">
												<div class="wrap-select-code-pays">
												  <select type="select" id="code-pays-whatsapp" name="code-pays-whatsapp" aria-required="true" role="combobox" aria-multiline="false" aria-labelledby="country-code-lbl-aria">
													<option role="option" data-code="+93" value="AF">Afghanistan (+93)</option>
													<option role="option" data-code="+355" value="AL">Albanie (+355)</option>
													<option role="option" data-code="+213" value="DZ">Alg&eacute;rie (+213)</option>
													<option role="option" data-code="+1" value="AS">Samoa am&eacute;ricaines (+1)</option>
													<option role="option" data-code="+376" value="AD">Andorre (+376)</option>
													<option role="option" data-code="+244" value="AO">Angola (+244)</option>
													<option role="option" data-code="+1" value="AI">Anguilla (+1)</option>
													<option role="option" data-code="+1" value="AG">Antigua et Barbuda (+1)</option>
													<option role="option" data-code="+54" value="AR">Argentine (+54)</option>
													<option role="option" data-code="+374" value="AM">Arm&eacute;nie (+374)</option>
													<option role="option" data-code="+297" value="AW">Aruba (+297)</option>
													<option role="option" data-code="+247" value="AC">Ascension (+247)</option>
													<option role="option" data-code="+61" value="AU">Australie (+61)</option>
													<option role="option" data-code="+672" value="AX">Territoires australiens ext&eacute;rieurs (+672)</option>
													<option role="option" data-code="+43" value="AT">Autriche (+43)</option>
													<option role="option" data-code="+994" value="AZ">Azerba&iuml;djan (+994)</option>
													<option role="option" data-code="+1" value="BS">Bahamas (+1)</option>
													<option role="option" data-code="+973" value="BH">Bahre&iuml;n (+973)</option>
													<option role="option" data-code="+880" value="BD">Bangladesh (+880)</option>
													<option role="option" data-code="+1" value="BB">Barbade (+1)</option>
													<option role="option" data-code="+375" value="BY">B&eacute;larus (+375)</option>
													<option role="option" data-code="+32" value="BE">Belgique (+32)</option>
													<option role="option" data-code="+501" value="BZ">Belize (+501)</option>
													<option role="option" data-code="+229" value="BJ">B&eacute;nin (+229)</option>
													<option role="option" data-code="+1" value="BM">Bermudes (+1)</option>
													<option role="option" data-code="+975" value="BT">Bhoutan (+975)</option>
													<option role="option" data-code="+591" value="BO">Bolivie (+591)</option>
													<option role="option" data-code="+387" value="BA">Bosnie-Herz&eacute;govine (+387)</option>
													<option role="option" data-code="+267" value="BW">Botswana (+267)</option>
													<option role="option" data-code="+55" value="BR">Br&eacute;sil (+55)</option>
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
													<option role="option" data-code="+236" value="CF">R&eacute;publique centrafricaine (+236)</option>
													<option role="option" data-code="+235" value="TD">Tchad (+235)</option>
													<option role="option" data-code="+56" value="CL">Chili (+56)</option>
													<option role="option" data-code="+86" value="CN">Chine (+86)</option>
													<option role="option" data-code="+57" value="CO">Colombie (+57)</option>
													<option role="option" data-code="+269" value="KM">Comores (+269)</option>
													<option role="option" data-code="+242" value="CG">Congo (+242)</option>
													<option role="option" data-code="+682" value="CK">Îles Cook (+682)</option>
													<option role="option" data-code="+506" value="CR">Costa Rica (+506)</option>
													<option role="option" data-code="+225" value="CI">C&ocirc;te d'Ivoire (+225)</option>
													<option role="option" data-code="+385" value="HR">Croatie (+385)</option>
													<option role="option" data-code="+53" value="CU">Cuba (+53)</option>
													<option role="option" data-code="+357" value="CY">Chypre (+357)</option>
													<option role="option" data-code="+420" value="CZ">R&eacute;publique tch&egrave;que (+420)</option>
													<option role="option" data-code="+243" value="CD">R&eacute;publique d&eacute;mocratique du Congo (+243)</option>
													<option role="option" data-code="+45" value="DK">Danemark (+45)</option>
													<option role="option" data-code="+246" value="DG">Diego Garcia (+246)</option>
													<option role="option" data-code="+253" value="DJ">Djibouti (+253)</option>
													<option role="option" data-code="+1" value="DM">Dominique (+1)</option>
													<option role="option" data-code="+1" value="DO">R&eacute;publique Dominicaine (+1)</option>
													<option role="option" data-code="+670" value="TL">Timor oriental (+670)</option>
													<option role="option" data-code="+593" value="EC">&eacute;quateur (+593)</option>
													<option role="option" data-code="+20" value="EG">&eacute;gypte (+20)</option>
													<option role="option" data-code="+503" value="SV">Salvador (+503)</option>
													<option role="option" data-code="+240" value="GQ">Guin&eacute;e &eacute;quatoriale (+240)</option>
													<option role="option" data-code="+291" value="ER">&eacute;rythr&eacute;e (+291)</option>
													<option role="option" data-code="+372" value="EE">Estonie (+372)</option>
													<option role="option" data-code="+251" value="ET">&eacute;thiopie (+251)</option>
													<option role="option" data-code="+500" value="FK">Îles Malouines (+500)</option>
													<option role="option" data-code="+298" value="FO">Îles F&eacute;ro&eacute; (+298)</option>
													<option role="option" data-code="+679" value="FJ">Fidji (+679)</option>
													<option role="option" data-code="+358" value="FI">Finlande (+358)</option>
													<option role="option" data-code="+33" value="FR" >France (+33)</option>
													<option role="option" data-code="+594" value="GF">Guyane fran&ccedil;aise (+594)</option>
													<option role="option" data-code="+689" value="PF">Polyn&eacute;sie fran&ccedil;aise (+689)</option>
													<option role="option" data-code="+241" value="GA" selected="selected">Gabon (+241)</option>
													<option role="option" data-code="+220" value="GM">Gambie (+220)</option>
													<option role="option" data-code="+995" value="GE">G&eacute;orgie (+995)</option>
													<option role="option" data-code="+49" value="DE">Allemagne (+49)</option>
													<option role="option" data-code="+233" value="GH">Ghana (+233)</option>
													<option role="option" data-code="+350" value="GI">Gibraltar (+350)</option>
													<option role="option" data-code="+30" value="GR">Gr&egrave;ce (+30)</option>
													<option role="option" data-code="+299" value="GL">Groenland (+299)</option>
													<option role="option" data-code="+1" value="GD">Grenade (+1)</option>
													<option role="option" data-code="+590" value="GP">Guadeloupe (+590)</option>
													<option role="option" data-code="+1" value="GU">Guam (+1)</option>
													<option role="option" data-code="+502" value="GT">Guatemala (+502)</option>
													<option role="option" data-code="+224" value="GN">Guin&eacute;e (+224)</option>
													<option role="option" data-code="+245" value="GW"> (+245)</option>
													<option role="option" data-code="+592" value="GY">Guyane (+592)</option>
													<option role="option" data-code="+509" value="HT">Ha&iuml;ti (+509)</option>
													<option role="option" data-code="+504" value="HN">Honduras (+504)</option>
													<option role="option" data-code="+852" value="HK">Hong Kong (+852)</option>
													<option role="option" data-code="+36" value="HU">Hongrie (+36)</option>
													<option role="option" data-code="+354" value="IS">Islande (+354)</option>
													<option role="option" data-code="+91" value="IN">Inde (+91)</option>
													<option role="option" data-code="+62" value="ID">Indon&eacute;sie (+62)</option>
													<option role="option" data-code="+98" value="IR">Iran (+98)</option>
													<option role="option" data-code="+964" value="IQ">Irak (+964)</option>
													<option role="option" data-code="+353" value="IE">Irlande (+353)</option>
													<option role="option" data-code="+972" value="IL">Isra&euml;l (+972)</option>
													<option role="option" data-code="+39" value="IT">Italie (+39)</option>
													<option role="option" data-code="+1" value="JM">Jama&iuml;que (+1)</option>
													<option role="option" data-code="+81" value="JP">Japon (+81)</option>
													<option role="option" data-code="+962" value="JO">Jordanie (+962)</option>
													<option role="option" data-code="+7" value="KZ">Kazakhstan (+7)</option>
													<option role="option" data-code="+254" value="KE">Kenya (+254)</option>
													<option role="option" data-code="+686" value="KI">Kiribati (+686)</option>
													<option role="option" data-code="+965" value="KW">Kowe&iuml;t (+965)</option>
													<option role="option" data-code="+996" value="KG">Kirghizistan (+996)</option>
													<option role="option" data-code="+856" value="LA">Laos (+856)</option>
													<option role="option" data-code="+371" value="LV">Lettonie (+371)</option>
													<option role="option" data-code="+961" value="LB">Liban (+961)</option>
													<option role="option" data-code="+266" value="LS">Lesotho (+266)</option>
													<option role="option" data-code="+231" value="LR">Lib&eacute;ria (+231)</option>
													<option role="option" data-code="+218" value="LY">Libye (+218)</option>
													<option role="option" data-code="+423" value="LI">Liechtenstein (+423)</option>
													<option role="option" data-code="+370" value="LT">Lituanie (+370)</option>
													<option role="option" data-code="+352" value="LU">Luxembourg (+352)</option>
													<option role="option" data-code="+853" value="MO">Macao (+853)</option>
													<option role="option" data-code="+389" value="MK">Mac&eacute;doine (+389)</option>
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
													<option role="option" data-code="+691" value="FM">Micron&eacute;sie (+691)</option>
													<option role="option" data-code="+373" value="MD">Moldavie (+373)</option>
													<option role="option" data-code="+377" value="MC">Monaco (+377)</option>
													<option role="option" data-code="+976" value="MN">Mongolie (+976)</option>
													<option role="option" data-code="+382" value="ME">Mont&eacute;n&eacute;gro (+382)</option>
													<option role="option" data-code="+1" value="MS">Montserrat (+1)</option>
													<option role="option" data-code="+212" value="MA">Maroc (+212)</option>
													<option role="option" data-code="+258" value="MZ">Mozambique (+258)</option>
													<option role="option" data-code="+95" value="MM">Myanmar (+95)</option>
													<option role="option" data-code="+264" value="NA">Namibie (+264)</option>
													<option role="option" data-code="+674" value="NR">Nauru (+674)</option>
													<option role="option" data-code="+977" value="NP">N&eacute;pal (+977)</option>
													<option role="option" data-code="+31" value="NL">Pays-Bas (+31)</option>
													<option role="option" data-code="+599" value="AN"> (+599)</option>
													<option role="option" data-code="+687" value="NC">Nouvelle-Cal&eacute;donie (+687)</option>
													<option role="option" data-code="+64" value="NZ">Nouvelle-Z&eacute;lande (+64)</option>
													<option role="option" data-code="+505" value="NI">Nicaragua (+505)</option>
													<option role="option" data-code="+227" value="NE">Niger (+227)</option>
													<option role="option" data-code="+234" value="NG">Nig&eacute;ria (+234)</option>
													<option role="option" data-code="+683" value="NU">Niue (+683)</option>
													<option role="option" data-code="+850" value="KP">Cor&eacute;e du Nord (+850)</option>
													<option role="option" data-code="+1" value="MP">Îles Mariannes du Nord (+1)</option>
													<option role="option" data-code="+47" value="NO">Norv&egrave;ge (+47)</option>
													<option role="option" data-code="+968" value="OM">Oman (+968)</option>
													<option role="option" data-code="+92" value="PK">Pakistan (+92)</option>
													<option role="option" data-code="+680" value="PW">Palau (+680)</option>
													<option role="option" data-code="+970" value="PS">Palestine (+970)</option>
													<option role="option" data-code="+507" value="PA">Panama (+507)</option>
													<option role="option" data-code="+675" value="PG">Papouasie-Nouvelle-Guin&eacute;e (+675)</option>
													<option role="option" data-code="+595" value="PY">Paraguay (+595)</option>
													<option role="option" data-code="+51" value="PE">P&eacute;rou (+51)</option>
													<option role="option" data-code="+63" value="PH">Philippines (+63)</option>
													<option role="option" data-code="+48" value="PL">Pologne (+48)</option>
													<option role="option" data-code="+351" value="PT">Portugal (+351)</option>
													<option role="option" data-code="+1" value="PR">Porto Rico (+1)</option>
													<option role="option" data-code="+974" value="QA">Qatar (+974)</option>
													<option role="option" data-code="+262" value="RE">R&eacute;union (+262)</option>
													<option role="option" data-code="+40" value="RO">Roumanie (+40)</option>
													<option role="option" data-code="+7" value="RU">Russie (+7)</option>
													<option role="option" data-code="+250" value="RW">Rwanda (+250)</option>
													<option role="option" data-code="+290" value="SH">Sainte-H&eacute;l&egrave;ne (+290)</option>
													<option role="option" data-code="+1" value="KN">Saint-Kitts-et-Nevis (+1)</option>
													<option role="option" data-code="+1" value="LC">Sainte-Lucie (+1)</option>
													<option role="option" data-code="+508" value="PM">Saint-Pierre-et-Miquelon (+508)</option>
													<option role="option" data-code="+1" value="VC">Saint-Vincent-et-les-Grenadines (+1)</option>
													<option role="option" data-code="+685" value="WS">Samoa (+685)</option>
													<option role="option" data-code="+378" value="SM">Saint-Marin (+378)</option>
													<option role="option" data-code="+239" value="ST">Sao Tom&eacute;-et-Principe (+239)</option>
													<option role="option" data-code="+966" value="SA">Arabie Saoudite (+966)</option>
													<option role="option" data-code="+221" value="SN">S&eacute;n&eacute;gal (+221)</option>
													<option role="option" data-code="+381" value="RS">Serbie (+381)</option>
													<option role="option" data-code="+248" value="SC">Seychelles (+248)</option>
													<option role="option" data-code="+232" value="SL">Sierra Leone (+232)</option>
													<option role="option" data-code="+65" value="SG">Singapour (+65)</option>
													<option role="option" data-code="+421" value="SK">Slovaquie (+421)</option>
													<option role="option" data-code="+386" value="SI">Slov&eacute;nie (+386)</option>
													<option role="option" data-code="+677" value="SB">Îles Salomon (+677)</option>
													<option role="option" data-code="+252" value="SO">Somalie (+252)</option>
													<option role="option" data-code="+27" value="ZA">Afrique du Sud (+27)</option>
													<option role="option" data-code="+82" value="KR">Cor&eacute;e du Sud (+82)</option>
													<option role="option" data-code="+34" value="ES">Espagne (+34)</option>
													<option role="option" data-code="+94" value="LK">Sri Lanka (+94)</option>
													<option role="option" data-code="+249" value="SD">Soudan (+249)</option>
													<option role="option" data-code="+597" value="SR">Surinam (+597)</option>
													<option role="option" data-code="+268" value="SZ">Swaziland (+268)</option>
													<option role="option" data-code="+46" value="SE">Su&egrave;de (+46)</option>
													<option role="option" data-code="+41" value="CH">Suisse (+41)</option>
													<option role="option" data-code="+963" value="SY">Syrie (+963)</option>
													<option role="option" data-code="+886" value="TW">Ta&iuml;wan (+886)</option>
													<option role="option" data-code="+992" value="TJ">Tadjikistan (+992)</option>
													<option role="option" data-code="+255" value="TZ">Tanzanie (+255)</option>
													<option role="option" data-code="+66" value="TH">Tha&iuml;lande (+66)</option>
													<option role="option" data-code="+228" value="TG">Togo (+228)</option>
													<option role="option" data-code="+690" value="TK">Tokelau (+690)</option>
													<option role="option" data-code="+676" value="TO">Tonga (+676)</option>
													<option role="option" data-code="+1" value="TT">Trinit&eacute;-et-Tobago (+1)</option>
													<option role="option" data-code="+216" value="TN">Tunisie (+216)</option>
													<option role="option" data-code="+90" value="TR">Turquie (+90)</option>
													<option role="option" data-code="+993" value="TM">Turkm&eacute;nistan (+993)</option>
													<option role="option" data-code="+1" value="TC">Îles Turks et Caïcos (+1)</option>
													<option role="option" data-code="+688" value="TV">Tuvalu (+688)</option>
													<option role="option" data-code="+1" value="VI">Îles Vierges am&eacute;ricaines (+1)</option>
													<option role="option" data-code="+256" value="UG">Ouganda (+256)</option>
													<option role="option" data-code="+380" value="UA">Ukraine (+380)</option>
													<option role="option" data-code="+971" value="AE">&eacute;mirats Arabes Unis (+971)</option>
													<option role="option" data-code="+44" value="GB">Royaume-Uni (+44)</option>
													<option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX">&eacute;tats-Unis (+1)</option>
													<option role="option" data-code="+598" value="UY">Uruguay (+598)</option>
													<option role="option" data-code="+998" value="UZ">Ouzb&eacute;kistan (+998)</option>
													<option role="option" data-code="+678" value="VU">Vanuatu (+678)</option>
													<option role="option" data-code="+379" value="VA">Cit&eacute; du Vatican (+379)</option>
													<option role="option" data-code="+58" value="VE">Venezuela (+58)</option>
													<option role="option" data-code="+84" value="VN">Vietnam (+84)</option>
													<option role="option" data-code="+681" value="WF">Wallis et Futuna (+681)</option>
													<option role="option" data-code="+967" value="YE">Y&eacute;men (+967)</option>
													<option role="option" data-code="+260" value="ZM">Zambie (+260)</option>
													<option role="option" data-code="+263" value="ZW">Zimbabwe (+263)</option>
												  </select>
												</div>
												<input type="text" name="telephone-whatsapp" placeholder=" " id="telephone-whatsapp-membre" data-error-contener="div-erreur-champ-telephone-whatsapp-membre" onkeyup="Verif_saisie(event, 'telephone-whatsapp-membre', 'btn-valider')" oninput="this.value = this.value.replace(/[^0-9()+. ]/g, '').replace(/(\..*)\./g, '$1');">
												<span class="libele-form">Num&eacute;ro whatsapp</span>
											<div class="message-erreur" id="div-erreur-champ-telephone-whatsapp-membre"> Veuillez saisir votre num&eacute;ro whatsapp.</div>
											</div>
										</div>


										<div class="wrap-field middle">

											<div class="field-form">
												<input type="mail"  class="mandatory"   name="email-membre" placeholder=" " data-error-contener="div-erreur-champ-email-membre" onKeyup ="Verif_saisie(event, 'email-membre', 'btn-valider')" id="email-membre">
												<span class="libele-form">E-mail</span>
												<div class="message-erreur" id="div-erreur-champ-email-membre"> Veuillez saisir votre email.</div>
											</div>
											<div class="field-form">
												<input type="password"  class="mandatory" placeholder=" "  name="password" id="password-membre" data-error-contener="div-erreur-champ-password-membre" onKeyup ="Verif_saisie(event, 'password-membre', 'btn-valider')">
												<span class="libele-form">Mot de passe</span>
												<div class="message-erreur" id="div-erreur-champ-password-membre"> Veuillez saisir votre Mot de passe.</div>
											</div>
		
										</div>

									</div>
								</div>


								<div class="wrap-rubrique-form">
									<h3 class="wrap-titre-rubrique-form">Adresse</h3>
									<div class="rubrique-form">
										<div class="wrap-field middle">
											<div class="field-form" id="wrap-select-pays">
												<select class="search-select mandatory" name="pays-membre" id="pays-membre" >
													<option value="" desable>Pays de r&eacute;sidence</option>
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
													<option value="Cote_d_Ivoire">C&ocirc;te_d_Ivoire </option>
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
													<option value="Madère">Mad&egrave;re </option>
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
												<div class="message-erreur" id="div-erreur-champ-pays-membre"> Veuillez saisir un Pays.</div>
											</div>

											<div class="field-form" id="div_ville">
												<select name="ville-membre"  class="search-select mandatory-gabon" id="ville-membre"  data-error-contener="div-erreur-champ-ville-membre">
													  <option value="" desable selected>Ville de r&eacute;sidence</option>
														<?php 
															$query_ville="SELECT * FROM ville  ORDER BY titre ASC";
															$result_ville=mysql_query($query_ville);
															while($ville=mysql_fetch_array($result_ville)){
														 ?>
														<option value="<?php echo $ville[0]?>"><?php echo ($ville["titre"])?></option>
														<?php }?>

												</select>
												<div class="message-erreur" id="div-erreur-champ-ville-membre"> Veuillez indiquer une ville.</div>
											</div>
											
											<div class="field-form" id="ville-saisi" name="ville-saisi" style="display: none" >
												<input type="text"  class="mandatory-autre"  name="ville-saisi" placeholder=" " data-error-contener="div-erreur-champ-adresse_ville-saisi" onKeyup ="Verif_saisie(event, 'adresse_ville-saisi', 'btn-valider')" id="adresse_ville-saisi">
												<span class="libele-form">Votre ville</span>
												<div class="message-erreur" id="div-erreur-champ-adresse_ville-saisi"> Veuillez saisir une ville.</div>
											</div>
											
											

										</div>

										<div class="wrap-field middle" id="circonscription">
											<div class="field-form">
												<select name="arrondissement-membre" class="mandatory-gabon search-select" id="arrondissement-membre" data-error-contener="div-erreur-champ-arrondissement-membre">
													  <option value="" desable selected>Arrondissement</option>
														<?php 
															$query_arrondissement="SELECT * FROM commune  ORDER BY titre ASC";
															$result_arrondissement=mysql_query($query_arrondissement);
															while($arrondissement=mysql_fetch_array($result_arrondissement)){
														 ?>
														<option value="<?php echo $arrondissement[0]?>"><?php echo ($arrondissement["titre"])?></option>
														<?php }?>

												</select>
												<div class="message-erreur" id="div-erreur-champ-arrondissement-membre"> Veuillez saisir un arrondissement.</div>
											</div>
											
											
											<div class="field-form">
												<select name="quartier-membre"  class="mandatory-gabon search-select" id="quartier-membre"  data-error-contener="div-erreur-champ-quartier-membre">
													  <option value=""  selected>Quartier</option>
														<?php 
															$query_quartier="SELECT * FROM quartier  ORDER BY titre ASC";
															$result_quartier=mysql_query($query_quartier);
															while($quartier=mysql_fetch_array($result_quartier)){
														 ?>
														<option value="<?php echo $quartier[0]?>"><?php echo ($quartier["titre"])?></option>
														<?php }?>
												</select>
												<div class="message-erreur" id="div-erreur-champ-quartier-membre"> Veuillez saisir un quartier.</div>
											</div>
										</div>

										<div class="wrap-field full">
											<div class="field-form">
												<input type="text"  class="mandatory"  name="adresse-membre" id="adresse-membre" placeholder=" " data-error-contener="div-erreur-champ-adresse_precise-membre" onKeyup ="Verif_saisie(event, 'adresse-membre', 'btn-valider')">
												<span class="libele-form">Adresse pr&eacute;cise</span>
												<div class="message-erreur" id="div-erreur-champ-adresse_precise-membre"> Veuillez saisir une adresse.</div>
											</div>
										</div>
									</div>
								</div>

								<div class="wrap-rubrique-form">
									<h3 class="wrap-titre-rubrique-form">Proposition pour le Gabon</h3>
									<div class="rubrique-form">
										<div class="wrap-field ">
											<div class="field-form">
												<textarea type="text"  class="mandatory" required name="proposition-membre" placeholder=" " data-error-contener="div-erreur-champ-proposition-membre" onKeyup ="Verif_saisie(event, 'proposition-membre', 'btn-valider')" id="proposition-membre"></textarea>
												<div class="message-erreur" id="div-erreur-champ-proposition-membre"> Veuillez saisir la proposition pour la transformation du Gabon.</div>
											</div>
										</div>
									</div>
								</div>
								
								

								<div class="wrap-rubrique-form">
									<h3 class="wrap-titre-rubrique-form">D&eacute;j&agrave; adh&eacute;r&eacute; &agrave; un parti ou &agrave; un mouvement politique ?</h3>
									<div class="rubrique-form" id="rubrique-form-old-mov">
										<div class="wrap-field middle">									
											<div class="field-form">
											  <input type="radio" placeholder=" "   value="1" class="form-check-input" name="ancien-militant" id="ancien-miliant-oui" data-error-contener="div-erreur-champ-ancien-miliant" onkeyup="Verif_saisie(event, 'ancien-miliant-oui', 'btn-valider')">
											  <label class="libele-form form-check-label" for="ancien-miliant-oui">Oui</label>
											</div>


											<div class="field-form">
											  <input type="radio" placeholder=" "  value="0" class="form-check-input" name="ancien-militant" id="ancien-miliant-non" data-error-contener="div-erreur-champ-ancien-miliant" onkeyup="Verif_saisie(event, 'ancien-miliant-non', 'btn-valider')">
											  <label class="libele-form form-check-label" for="ancien-miliant-non">Non</label>
											</div>
											
											
														  <div class="message-erreur" id="div-erreur-champ-ancien-miliant" style="display: none;"> Veuillez repondre &agrave; la question.</div>
										</div>
									</div>
								</div>
								
								
								<div class="wrap-field middle" id="bloc-deja-membre" style="display: none">

											<div class="field-form">
												<input type="text"  class="mandatory-mouvement"  name="ancien-mouvement" placeholder=" " data-error-contener="div-erreur-champ-nom_ancien_membre" onKeyup ="Verif_saisie(event, 'ancien-mouvement', 'btn-valider')" id="ancien-mouvement">
												<span class="libele-form">Nom du dernier Parti/Mouvement</span>
												<div class="message-erreur" id="div-erreur-champ-nom_ancien_membre"> Veuillez saisir le nom de votre ancien parti ou mouvement.</div>
											</div>
											<div class="field-form">
												<input type="text"  class="mandatory-mouvement" placeholder=" " name="date_ancienne_adhesion" id="date_ancienne_adhesion" data-error-contener="div-erreur-champ-date_ancienne_adhesion" onKeyup ="Verif_saisie(event, 'date_ancienne_adhesion', 'btn-valider')" data-position="bottom left" data-language="fr" data-date-format="yyyy/mm/dd">
												<span class="libele-form">date d'adh&eacute;sion</span>
												<div class="message-erreur" id="div-erreur-champ-date_ancienne_adhesion"> Veuillez indiquer la date d'adh&eacute;sion &agrave; ce dernier.</div>
											</div>
		
										</div>

								<div class="wrap-rubrique-form rubrique-acceptation">
									<div class="rubrique-form">
										<div class="wrap-field ">									
											<div class="field-form">
											  <input type="checkbox" placeholder=" "   class="form-check-input" name="condition-membre" id="condition-membre" data-error-contener="div-erreur-champ-condition-membre" onkeyup="Verif_saisie(event, 'condition-membre', 'btn-valider')">
											  <label class="libele-form form-check-label" for="condition-membre">Oui, j'adh&egrave;re &agrave; la charte des valeurs, aux statuts et aux r&egrave;gles de fonctionnement du Mouvement Gabon Nouveau, ainsi qu'aux conditions g&eacute;n&eacute;rales d'utilisation du site et &agrave; la politique de protection des donn&eacute;es &agrave; caract&egrave;re personnel du site</label>
											  <div class="message-erreur" id="div-erreur-champ-condition"> Veuillez indiquer la date d'adh&eacute;sion &agrave; ce dernier.</div>
											</div>
										</div>


										<div class="wrap-field ">									
											<div class="field-form">
											  <input type="checkbox" placeholder=" "  value="1"  class="form-check-input" name="actu-email" id="actu-mouvement-membre" data-error-contener="div-erreur-champ-actu-mouvement-membre" >
											  <label class="libele-form form-check-label" for="actu-mouvement-membre">Je souhaite &ecirc;tre inform&eacute;(e) de l'actualit&eacute; du Mouvement Gabon Nouveau par e-mail (optionnel)</label>
											</div>
										</div>


										<div class="wrap-field ">									
											<div class="field-form">
											  <input type="checkbox" placeholder=" " value="1" class="form-check-input" name="info-sms" id="info-militant-membre" data-error-contener="div-erreur-champ-info-militant-membre">
											  <label class="libele-form form-check-label" for="info-militant-membre">Je souhaite recevoir des informations sur les actions militantes du mouvement par SMS (optionnel)</label>
											</div>
										</div>
									</div>
								</div>

								  <div class="form-group">
									  <button type="button" class="btn btn-inscription">Enregistrer</button>
								  </div>
								  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />
							</form>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
								
							<script language="javascript">
								 $(".btn-inscription").click(function(){
									Enregistrement_membre('<?php echo base64_encode('traitement_ajax/traitement_enregistrement_inscription.php')?>');
								 })
                            </script>