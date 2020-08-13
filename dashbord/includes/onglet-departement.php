<div class="wrap-contain-onglet-page" id="tab-departement">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Liste des d&eacute;partements</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">
												<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>

										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-departement.php")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une d&eacute;partement</a>
													</div>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des d&eacute;partements du Gabon</p>
                                                <?php 
												   $pagination=7;
												   $page_encours=1;
												   $marge=3;
												   $nbligneparpage=100;
												   $debut=0;
												   $query_departement="SELECT * FROM departement  ORDER BY iddepartement DESC";
												   $result_departement=mysql_query($query_departement);
												   $nbreponse=mysql_num_rows($result_departement);
												   $nbtotalpage=ceil($nbreponse/$nbligneparpage);
												   $query_departement.=" LIMIT $debut, $nbligneparpage";
												   $result_departement=mysql_query($query_departement);
												?>
													
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
																<th>D&eacute;partement</th>
																<th>R&eacute;ference</th>
																<th>Province</th>
																<th>Couleur</th>
															</tr>
														</thead>

														<tbody id="tbody-departement">
														<?php 
	                                                        $i=0;
															while($departement=mysql_fetch_array($result_departement)){
															$deja_operationel=departementDejaoperationnel($departement[0]);	
															$province=getprovinceinformations($departement["idprovince"]);

															if($departement["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($departement["etat"]=="1"){

																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";

															}
																$i++;
															$url_supprimer="javascript:Notification_suppression_departement('".base64_encode("traitement_ajax/traitement_supprimer_departement.php")."', '$departement[0]', '".$_SESSION["token"]."', '$deja_operationel')";
													      ?>
															<tr id="tr_departement<?php echo $departement[0]?>">
																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-departement.php?iddepartement=$departement[0]")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>
																<td class="colonne-tab detail-line"><i class="fa fa-eye"></i></td>
																<td class="colonne-tab"><i class="fa fa-check-circle"></i>
																</td>
																<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer?>"> <i class="fa fa-trash"></i></a>
																</td>
																<td id="nom-departement<?php echo $departement[0]?>"><?php echo $departement["titre"]?></td>
																<td id="reference-departement<?php echo $departement[0]?>"><? echo $departement["reference"]; ?></td>
																<td id="province-departement<?php echo $departement[0]?>"><? echo $province["titre"]; ?></td>
																<td id="couleur-departement<?php echo $departement[0]?>" style="background-color: <? echo $departement["couleur"]; ?>"><? echo $departement["couleur"]; ?></td>
															</tr>
                                                          <?php }?>
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>

