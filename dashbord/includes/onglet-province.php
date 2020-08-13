								<div class="wrap-contain-onglet-page" id="tab-region">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Liste des Provinces</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="stab-province" style="display: block">
												<h2 class="titre-page titre-left">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>

										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-province.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une province</a>
													</div>
										</h2>
											<p class="accroche-tab">Ci-dessous la liste des provinces du Gabon</p>
                                                <?php 
												   $pagination=7;
												   $page_encours=1;
												   $marge=3;
												   $nbligneparpage=10;
												   $debut=0;
												   $query_province="SELECT * FROM province  ORDER BY idprovince DESC";
												   $result_province=mysql_query($query_province);
												   $nbreponse=mysql_num_rows($result_province);
												   $nbtotalpage=ceil($nbreponse/$nbligneparpage);
												   $query_province.=" LIMIT $debut, $nbligneparpage";
												   $result_province=mysql_query($query_province);
												?>

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
																<th>NOM</th>
																<th>REFERENCE</th>
																<th>Couleur</th>
															</tr>
														</thead>

														<tbody id="tbody-province">
														<?php 
	                                                        $i=0;
															while($province=mysql_fetch_array($result_province)){

															if($province["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($province["etat"]=="1"){

																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";

															}
																$i++;
													      ?>
															<tr id="tr_province<?php echo $province[0]?>">
																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-province.php?idprovince=$province[0]")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><i <i class="fa fa-trash"></i></i>
																</td>
																<td id="nom-province<?php echo $province[0]?>"><?php echo $province["titre"]?></td>
																<td id="reference-province<?php echo $province[0]?>"><? echo $province["reference"]; ?></td>
																<td id="couleur-province<?php echo $province[0]?>" style="background-color: <? echo $province["couleur"]; ?>"><? echo $province["couleur"]; ?></td>
															</tr>
                                                           <?php }?>
															

														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
