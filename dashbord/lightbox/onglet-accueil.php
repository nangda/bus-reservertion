								<div class="wrap-contain-onglet-page" id="tab-accueil">
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Liste des rubriques en page d'accueil</h2>

										<div id="wrap-table-accueil" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-accueil" style="display: block">
												<h2 class="titre-page">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
															<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-accueil.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une rubrique</a>
													</div>
												</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des rubriques en page d'accueil.</p>
                                                
														<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  
															  <div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">P&eacute;riode d'affichage</div>
																	<div class="form-control">
																		<label for="">
																		  <input type="text" class="begening-date search date-debut-search datepicker-here" placeholder="Date d&eacute;but" name="date-debut-operation" id="date-debut-operation" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>


																		<label for=""> 
																			<input type="text" class="ending-date search date-fin-search datepicker-here" name="date-fin-operation" id="date-fin-operation" placeholder="Date fin" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>
																	</div>		
																</div>
															  
															  <div class="form-group">
															  	<label for="">Titre<input name="libelle-accueil" type="text" class="search ref-search" id="libelle-accueil" placeholder="Ex: Promotion" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
															  	<label for="">Albums<input name="libelle-album" type="text" class="search ref-search" id="libelle-album" placeholder="Ex: Eclipse" data-onglet="toute"></label>
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
																<th align="left">Titre</th>
																<th align="left">ALBUMS - TITRES LIES </th>
																<th align="left">P&eacute;riode</th>
																<th align="left">Rang</th>
															</tr>
														</thead>

														<tbody id="tbody-membre">
															<tr id="tr_membre32">
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i></td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('bGlnaHRib3gvbGlnaHRib3gtZGV0YWlsLW1lbWJyZS5waHA/aWRtZW1icmU9MzI=','loader');"><i class="fa fa-eye"></i></a></td>
																<td class="colonne-tab "><i class="fa fa-check-circle"></i></td>
																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_membre('dHJhaXRlbWVudF9hamF4L3RyYWl0ZW1lbnRfc3VwcHJpbWVyX21lbWJyZS5waHA=', '32', '177126c6b8186ac7cb96702b9fc04f4016a36c57ccbf01d7e4dc29865e03cfe3')"><i class="fa fa-trash"></i></a></td>
																<td align="left">Promotion</td>
																<td align="left" class="wrap-rubrique-accueil"><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=69')">ON VEUT TOUS CROQUER</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=107')">E NGUINGUILA YE</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=79')">LA GO CI</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=82')">wea loba</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=63')">coeur de lion peaux de panth&egrave;res</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=65')">FORME O</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=55')">ECLIPSE</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=74')">GENERATION AFRICAINE</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=35')">au fond du coeur</a><a href="javascript:Affichage_page('formulaire_detail_album.php?idalbum=36')">Du fond de l'AFRIQUE</a></td>
																<td align="left">Du 2019/04/18 au 2019/12/28</td>
																<td align="left">5</td>
															
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
