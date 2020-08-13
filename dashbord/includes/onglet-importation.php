                               <div class="wrap-contain-onglet-page" id="tab-importation" <?php if(isset($_SESSION["onglet"]) AND $_SESSION["onglet"]=="tab-importation"){?>style="display: block"<?php }?>>
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Importation des données (fichiers excel)</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">
												<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>

										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=editer-importation")?>','loader');" class="btn-add"><i class="fa fa-plus"></i>Nouvelle importation</a>
													</div>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Importation des données permettant de faire correspondre le client à son gestionnaire. </p>
												<?php 
	                                              $page=10;//nombre d'enregistrement à afficher par page
                                                  $debut=0;

												  $query_importation="SELECT * FROM importation_donnees WHERE idimportation!='0' ";

														
												  $nb_enregistrement=mysql_num_rows(mysql_query("$query_importation"));
												  $query_importation.=" ORDER BY idimportation DESC";
												  $query_importation.=" LIMIT $debut, $page";

												  $total=$nb_enregistrement;
												  $nbpage=ceil($total/$page);
												  $nbpage_affiche=5;
												  if($nbpage_affiche>$nbpage)$nbpage_affiche=$nbpage;
												  $page_active=1;

												 ?>
													
													<div class="conteneur-recherche-fiche">
														  <form action="" id="form-recherche-importation" class="formulaire-research form-recherche">
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
																		<label for="">agence
																			<select name="province" id="province" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>agence</option>
																				  <option value="Komo">Komo</option>
																				  <option value="Komo-Mondah">Komo-Mondah</option>
																				  <option value="Komo-Oc&eacute;an">Komo-Oc&eacute;an</option>
																				  <option value="Noya">Noya</option>
																				  <option value="Libreagence">Libreagence</option>

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
															  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
                                                                <input type="hidden" name="form" id="form" value="form-recherche-importation"/>
                                                                <input type="hidden" name="conteneur-resultat" id="conteneur-resultat" value="liste_importation"/>
															  </div>
															  
															</form>
														</div>
                                                 <div id="liste_importation">

													<table id="liste-page">
														<thead>
															<tr>
																<th></th>
																<th></th>
																<th></th>
																<th>Agence</th>
																<th>Numéro compte</th>
																<th>Clé</th>
																<th>Gestionnaire</th>
																<th>Code gestionnaire</th>
																<th>Email gestionnaire</th>
															</tr>
														</thead>

														<tbody id="tbody-agence">
														<?php 
	                                                        $i=0;
															 $result_importation=mysql_query($query_importation);
															 while($importation=mysql_fetch_array($result_importation)){
																  

															if($importation["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($importation["etat"]=="1"){

																$class="validated";
																$title="invalider l'enregistrement ";

															}
																$i++;
																
													      ?>
															
														  <tr id="tr_importation<?php echo $importation[0]?>">
																
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idimportation=$importation[0]&traitement=detail-importation")?>','loader');" data-tooltip="Détails"><i class="fa fa-eye"></i></a></td>
																<td class="colonne-tab <?php echo $class?>" id="valider-importation<?php echo $importation[0]?>"><a href="javascript:Valider_importation('<?php echo base64_encode("traitement_ajax/main.php?traitement=valider-importation")?>', '<?php echo $importation[0]?>', '<?php echo $_SESSION["token"]?>', '<?php echo $importation["etat"]?>')" data-tooltip="<?php echo $title ?>"><i class="fa fa-check-circle"></i></a>
																</td>
																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_importation('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-importation")?>', '<?php echo $importation[0]?>', '<?php echo $_SESSION["token"]?>')" data-tooltip="Supprimer"><i class="fa fa-trash"></i></a>
																</td>
																<td><?php echo $importation["code_agence"]?></td>
																<td><? echo $importation["numero_compte"]; ?></td>
																<td><? echo $importation["cle_compte"]; ?></td>
																<td><? echo $importation["nom_gestionnaire"]; ?></td>
																<td><? echo $importation["code_gestionnaire"]; ?></td>
																<td><? echo $importation["email_gestionnaire"]; ?></td>
																
														  </tr>
                                                         <?php }?>
															
														</tbody>
													</table>
													
													<div class="wrapper-pagination">
														<div class="pagination">
															<div class="wrapper-pagination-left">
																<span class="nb-result"><?php echo $total?></span> r&eacute;sulats - Page <span class="number-page"><?php echo $page_active?></span> sur <span class="total-page"><?php echo $nbpage?></span>
															</div>
															
															<div class="wrapper-pagination-right">
																
																
																<?php if ($nb_enregistrement>$page){ ?>
																    <!--<a href="" class="wrap-pagination">Début</a>
																	<a href="" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>-->
																	<?php 
																		  $active="";
																		  for($i=1; $i<=$nbpage_affiche; $i++){
																			  if($page_active==$i)$active="actif"; else $active="";
																    ?>
																		<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','form-recherche-importation','liste_importation','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
																	<?php }?>
																	<?php if($nbpage>$nbpage_affiche){?>
																<span class="void-pagination">...</span>
																   <?php }?>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','form-recherche-importation','liste_importation','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','form-recherche-importation','liste_importation','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
																<?php }?>																
																
															</div>
														</div>
													</div>
													
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>

