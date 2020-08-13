								<div class="wrap-contain-onglet-page" id="tab-actualite" style="display: block">
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Liste des actualit&eacute;s</h2>

										<div id="wrap-table-actualite" class="conteneur-wrap-tab">
											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-actualite" style="display: block">
												<h2 class="titre-page">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
															<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-actualite.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une actualit&eacute;</a>
													</div>
												</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des actualités.</p>
                                                
														<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
																<div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">P&eacute;riode sortie</div>
																	<div class="form-control">
																		<label for="">
																		  <input type="text" class="begening-date search date-debut-search datepicker-here" placeholder="Date d&eacute;but" name="date-debut-operation" id="date-debut-operation" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>


																		<label for=""> 
																			<input type="text" class="ending-date search date-fin-search datepicker-here" name="date-fin-operation" id="date-fin-operation" placeholder="Date fin" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>
																	</div>		
																</div>
															  
															  <div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">Prix compris</div>
																	<div class="form-control">
																		<label for="">
																		  <input type="text" class="begening-date search " placeholder="" name="prix-min" id="prix-min" data-position="top left">
																		</label>


																		<label for=""> 
																			
																		  <input type="text" class="begening-date search " placeholder="" name="prix-max" id="prix-max" data-position="top left">
																		</label>
																	</div>		
																</div>

																<div class="form-group">
																	<div class="form-control">
																		<label for="">Etat
																			<select name="statut" id="statut" type="text" class="search ref-search ref-search-responsive">
																				<option value="0">S&eacute;lectionnez</option>
																				<option value="adherent">Actif</option>
																				<option value="Sympatisant">suspendu</option>

																			</select>
																		</label>
																	</div>	
																</div>
																<div class="form-group">
																	<label for="">Artiste
																		<select name="pays" id="-search-pays" type="text" class="search ref-search" onchange="">
																			<option value="" desable selected>Choisir un artiste</option>
																			 <option value="artiste 1">artiste 1 </option>
																			<option value="artiste 2">artiste 2 </option>

																		</select>
																	</label>

																</div>
															  
															  <div class="form-group">
															  	<label for="">Nom actualite<input name="libelle-nom-a" type="text" class="search ref-search" id="libelle-nom-a" placeholder="Ex: Tenor" data-onglet="toute"></label>
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
																<th align="left">Vignette</th>
																<th align="left">Titre </th>
																<th align="left">Rang </th>
																<th align="left">Artiste </th>
																<th align="left">Lien page d&eacute;tail</th>
																<th align="left">libell&eacute; lien </th>
																<th align="left">Rubrique news?</th>
															</tr>
														</thead>

														<tbody id="tbody-membre">
															<tr id="tr_membre32">
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i></td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('bGlnaHRib3gvbGlnaHRib3gtZGV0YWlsLW1lbWJyZS5waHA/aWRtZW1icmU9MzI=','loader');"><i class="fa fa-eye"></i></a></td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('bGlnaHRib3gvbGlnaHRib3gtZGVzY3JpcHRpb24tYXJ0aXN0ZS5waHA=','loader');"><i class="fa fa-info-circle"></i></a></td>
																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_membre('dHJhaXRlbWVudF9hamF4L3RyYWl0ZW1lbnRfc3VwcHJpbWVyX21lbWJyZS5waHA=', '32', '177126c6b8186ac7cb96702b9fc04f4016a36c57ccbf01d7e4dc29865e03cfe3')"><i class="fa fa-trash"></i></a></td>
																<td align="left">
																	<div class="wrap-bloc-artiste">
																		<div class="img-artiste"><img src="images/artiste.jpg" alt=""></div>
																	</div>
																</td>
																<td align="left" class="wrap-titre-actu">Quand Niska d&eacute;voile le maillot de l'&eacute;quipe de France pour la coupe du monde 2018!</td>
																<td align="left">10</td>
																<td align="left">Niska</td>
																<td align="left" class="wrap-lien-detail">https://hiphopcorner.fr/quand-niska-devoile-le-maillot-de-lequipe-de-france-pour-la-coupe-du-monde-2018/ </td>
																<td align="left">En savoir+</td>
																<td align="left">Non</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
