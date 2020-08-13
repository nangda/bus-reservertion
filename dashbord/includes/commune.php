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
																				  <option value="Haut-Ogoou&eacute;">Haut-Ogoou&eacute;</option>
																				  <option value="Moyen-Ogoou&eacute;">Moyen-Ogoou&eacute;</option>
																				  <option value="Ngouni&eacute;">Ngouni&eacute;</option>
																				  <option value="Nyanga">Nyanga</option>
																				  <option value="Ogoou&eacute;-Ivindo">Ogoou&eacute;-Ivindo</option>
																				  <option value="Ogoou&eacute;-Lolo">Ogoou&eacute;-Lolo</option>
																				  <option value="Ogoou&eacute;-Maritime">Ogoou&eacute;-Maritime</option>
																				  <option value="Woleu-Ntem">Woleu-Ntem</option>

																			</select>
																		</label>
																	</div>	
																</div>
															  
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">D&eacute;partement
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>D&eacute;partement</option>
																				  <option value="Komo">Komo</option>
																				  <option value="Komo-Mondah">Komo-Mondah</option>
																				  <option value="Komo-Oc&eacute;an">Komo-Oc&eacute;an</option>
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
															  	<label for="">R&eacute;ference<input name="libelle-reference" type="text" class="search ref-search" id="libelle-reference" placeholder="Ex: #12345678" data-onglet="toute"></label>
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
																<th>R&eacute;ference</th>
																<th>Titre</th>
																<th>D&eacute;partement</th>
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
