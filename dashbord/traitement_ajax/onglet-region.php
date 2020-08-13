								<div class="wrap-contain-onglet-page" id="tab-region" style="display: block">
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Edition des r&eacute;gions</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="stab-province" style="display: block">
												<h2 class="titre-page titre-left">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>

										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-region.php")?>','loader');" class="btn-add"><i class="fa fa-plus"></i>Ajouter une r&eacute;gion</a>
													</div>
										</h2>
											<p class="accroche-tab">Ci-dessous la liste des r&eacute;gion</p>
                                                <?php 
												   $pagination=7;
												   $page_encours=1;
												   $marge=3;
												   $nbligneparpage=10;
												   $debut=0;
												   $query_region="SELECT * FROM region  ORDER BY idregion DESC";
												   $result_region=mysql_query($query_region);
												   $nbreponse=mysql_num_rows($result_region);
												   $nbtotalpage=ceil($nbreponse/$nbligneparpage);
												   $query_region.=" LIMIT $debut, $nbligneparpage";
												   $result_region=mysql_query($query_region);
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
																
															</tr>
														</thead>

														<tbody id="tbody-region">
														<?php 
	                                                        $i=0;
															while($region=mysql_fetch_array($result_region)){
                                                            $deja_operationel=RegionDejaoperationnel($region[0]);
															if($region["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($region["etat"]=="1"){

																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";

															}
																$i++;
													      ?>
															<tr id="tr_region<?php echo $region[0]?>">
																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idregion=$region[0]&traitement=editer-region")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idregion=$region[0]&traitement=detail-region")?>','loader');"><i class="fa fa-eye"></i></a></td>
																<td class="colonne-tab <?php echo $class?>" id="valider-region<?php echo $region[0]?>"><a href="javascript:Valider_region('<?php echo base64_encode("traitement_ajax/main.php?traitement=valider-region")?>', '<?php $region[0]?>', '<?php echo $_SESSION["token"]?>', '<?php echo $region["etat"]?>')"><i class="fa fa-check-circle"></i></a>
																</td>
																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_region('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-region")?>', '<?php echo $region[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>
																</td>
																<td id="nom-region<?php echo $region[0]?>"><?php echo $region["titre"]?></td>
																<td id="reference-region<?php echo $region[0]?>"><? echo $region["reference"]; ?></td>
																
															</tr>
                                                           <?php }?>
															

														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
