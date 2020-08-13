<div class="wrap-contain-onglet-page" id="tab-quartier">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Liste des quartiers</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">
												<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>

										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-quartier.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une quartier</a>
													</div>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des quartiers du Gabon</p>
                                                <?php 
												   $pagination=7;
												   $page_encours=1;
												   $marge=3;
												   $nbligneparpage=10;
												   $debut=0;
												   $query_quartier="SELECT * FROM quartier  ORDER BY idquartier DESC";
												   $result_quartier=mysql_query($query_quartier);
												   $nbreponse=mysql_num_rows($result_quartier);
												   $nbtotalpage=ceil($nbreponse/$nbligneparpage);
												   $query_quartier.=" LIMIT $debut, $nbligneparpage";
												   $result_quartier=mysql_query($query_quartier);
												?>
													
													<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">commune
																			<select name="commune" id="commune" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>commune</option>
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
																		<label for="">quartier
																			<select name="commune" id="commune" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>quartier</option>
																				  <option value="Komo">Komo</option>
																				  <option value="Komo-Mondah">Komo-Mondah</option>
																				  <option value="Komo-Oc&eacute;an">Komo-Oc&eacute;an</option>
																				  <option value="Noya">Noya</option>
																				  <option value="Librequartier">Librequartier</option>

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
																<th>Quartier</th>
																<th>R&eacute;ference</th>
																<th>Commune</th>
																<th>D&eacute;partement</th>
																<th>Province</th>
															</tr>
														</thead>

														<tbody id="tbody-quartier">
														<?php 
	                                                        $i=0;
															while($quartier=mysql_fetch_array($result_quartier)){
																
															$commune=getcommuneinformations($quartier["idcommune"]);
															$departement=getdepartementinformations($quartier["iddepartement"]);
															$province=getprovinceinformations($quartier["idprovince"]);

															if($quartier["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($quartier["etat"]=="1"){

																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";

															}
																$i++;
													      ?>
															<tr id="tr_quartier<?php echo $quartier[0]?>">
																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-quartier.php?idquartier=$quartier[0]")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i class="fa fa-trash"></i></i>
																</td>
																<td id="nom-quartier<?php echo $quartier[0]?>"><?php echo $quartier["titre"]?></td>
																<td id="reference-quartier<?php echo $quartier[0]?>"><? echo $quartier["reference"]; ?></td>
																<td id="commune-quartier<?php echo $quartier[0]?>"><? echo $commune["titre"]; ?></td>
																<td id="departement-quartier<?php echo $quartier[0]?>"><? echo $departement["titre"]; ?></td>
																<td id="province-quartier<?php echo $quartier[0]?>"><? echo $province["titre"]; ?></td>
															</tr>
                                                          <?php }?>
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>

