								<div class="wrap-contain-onglet-page" id="tab-module" style="display: block">
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Liste des modules</h2>

										<div id="wrap-table-module" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-module" style="display: block">
												<h2 class="titre-page">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
															<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-module.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un module</a>
													</div>
												</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des modules.</p>
                                                
														<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
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
																	<label for="">Langue
																		<select name="langue" id="-search-langue" type="text" class="search ref-search" onchange="">
																			<option value="" desable selected>Choisir une langue</option>
																			 <option value="artiste 1">Francais </option>
																			<option value="artiste 2">Anglais </option>

																		</select>
																	</label>

																</div>

															  
															  <div class="form-group">
															  	<label for="">Nom module<input name="libelle-nom-module" type="text" class="search ref-search" id="libelle-nom-module" placeholder="Ex: Tenor" data-onglet="toute"></label>
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
																<th align="left">Titre </th>
																<th align="left">Rang </th>
																<th align="left">Langue </th>
																<th align="left">URL </th>
															</tr>
														</thead>

														<tbody id="tbody-membre">
															<tr id="tr_membre32">
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i></td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('bGlnaHRib3gvbGlnaHRib3gtZGV0YWlsLW1lbWJyZS5waHA/aWRtZW1icmU9MzI=','loader');"><i class="fa fa-eye"></i></a></td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('bGlnaHRib3gvbGlnaHRib3gtZGVzY3JpcHRpb24tYXJ0aXN0ZS5waHA=','loader');"><i class="fa fa-info-circle"></i></a></td>
																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_membre('dHJhaXRlbWVudF9hamF4L3RyYWl0ZW1lbnRfc3VwcHJpbWVyX21lbWJyZS5waHA=', '32', '177126c6b8186ac7cb96702b9fc04f4016a36c57ccbf01d7e4dc29865e03cfe3')"><i class="fa fa-trash"></i></a></td>
																<td align="left" class="titre-module">Administrations des Utilisateurs</td>
																<td align="left">20</td>
																<td align="left">Francais </td>
																<td align="left" class="wrap-rul-module">#</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
