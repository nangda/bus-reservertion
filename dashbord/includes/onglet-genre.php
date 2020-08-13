								<div class="wrap-contain-onglet-page" id="tab-genre">
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Liste des genres</h2>

										<div id="wrap-table-genre" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-genre" style="display: block">
												<h2 class="titre-page">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
															<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-genre.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un genre</a>
													</div>
												</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des artistes.</p>
                                                
														<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  
															  <div class="form-group">
															  	<label for="">Genre<input name="libelle-genre" type="text" class="search ref-search" id="libelle-genre" placeholder="Ex: Bikutsi" data-onglet="toute"></label>
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
																<th align="left">Vignette </th>
																<th align="left">Banniere</th>
															</tr>
														</thead>

														<tbody id="tbody-membre">
															<tr id="tr_membre32">
																<td class="colonne-tab edit-line"><i class="fa fa-pencil"></i></td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('bGlnaHRib3gvbGlnaHRib3gtZGV0YWlsLW1lbWJyZS5waHA/aWRtZW1icmU9MzI=','loader');"><i class="fa fa-eye"></i></a></td>
																<td class="colonne-tab "><i class="fa fa-check-circle"></i></td>
																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_membre('dHJhaXRlbWVudF9hamF4L3RyYWl0ZW1lbnRfc3VwcHJpbWVyX21lbWJyZS5waHA=', '32', '177126c6b8186ac7cb96702b9fc04f4016a36c57ccbf01d7e4dc29865e03cfe3')"><i class="fa fa-trash"></i></a></td>
																<td align="left">BIkutsi</td>
																<td align="left"><div class="wrap-img"><img src="images/genre.jpg" alt=""></div></td>
																<td align="left"><div class="wrap-img"><img src="images/banniere-genre.jpg" alt=""></div></td>
															
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
