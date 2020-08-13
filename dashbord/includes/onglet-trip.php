                               <div class="wrap-contain-onglet-page" id="tab-trip" <?php if(isset($_SESSION["onglet"]) AND $_SESSION["onglet"]=="tab-trip"){?>style="display: block"<?php }?>>
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Update trips</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">
												<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
                                         <?php if($droit_dacces["editer_ville"]==1){?>
										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=editer-ville")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une ville</a>
												<?php }?>
													</div>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des villes </p>
												<?php 
	                                              $page=10;//nombre d'enregistrement à afficher par page
                                                  $debut=0;

												  $query_ville="SELECT * FROM ville WHERE idville!='0' ";

														
												  $nb_enregistrement=mysql_num_rows(mysql_query("$query_ville"));
												  $query_ville.=" ORDER BY idville DESC";
												  $query_ville.=" LIMIT $debut, $page";

												  $total=$nb_enregistrement;
												  $nbpage=ceil($total/$page);
												  $nbpage_affiche=5;
												  if($nbpage_affiche>$nbpage)$nbpage_affiche=$nbpage;
												  $page_active=1;

												 ?>
													
													<div class="conteneur-recherche-fiche">
														  <form action="" id="form-recherche-ville" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Région
																			<select name="region-ville" id="region-ville" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Sélectionnez</option>
																				  
																				  <?php 
																				    $result_region=mysql_query("SELECT * FROM region ORDER BY reference ASC");
																				    while($region=mysql_fetch_array($result_region)){
																				  ?>
                                                                                   
                                                                                  <option value="<?php echo $region[0]?>"><?php echo $region["titre"]?> </option>
                                                                                  <?php }?>
																			</select>
																		</label>
																	</div>	
																</div>
															  
															  <div class="form-group">
															  	<label for="">Nom de la ville<input name="titre-ville" type="text" class="search ref-search" id="titre-ville" placeholder="Ex: Douala" data-onglet="toute"></label>
															  </div>
															  
															  
															  <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" onClick="Rechercher('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','form-recherche-ville','liste_ville','loader')" ><i class="fa fa-search"></i></button>
															  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
                                                                <input type="hidden" name="form" id="form" value="form-recherche-ville"/>
                                                                <input type="hidden" name="conteneur-resultat" id="conteneur-resultat" value="liste_ville"/>
															  </div>
															  
															</form>
														</div>
                                                 <div id="liste_ville">

													<table id="liste-page">
														<thead>
															<tr>
																<?php if($droit_dacces["editer_ville"]==1){?><th></th><?php }?>
																<th></th>
																<?php if($droit_dacces["valider_ville"]==1){?><th></th><?php }?>
																<?php if($droit_dacces["supprimer_ville"]==1){?><th></th><?php }?>
																<th>ville</th>
																<th>R&eacute;ference</th>
																<th>R&eacute;gion</th>
															</tr>
														</thead>

														<tbody id="tbody-ville">
														<?php 
	                                                        $i=0;
															 $result_ville=mysql_query($query_ville);
															while($ville=mysql_fetch_array($result_ville)){
																
															$region=getregioninformations($ville["idregion"]);
															$deja_operationel=villeDejaoperationnel($ville[0]);

															if($ville["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($ville["etat"]=="1"){

																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";

															}
																$i++;
															if($droit_dacces["editer_ville"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idville=$ville[0]&traitement=editer-ville")."','loader');";
															else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															if($droit_dacces["valider_ville"]==1)$url_valider="javascript:Valider_ville('".base64_encode("traitement_ajax/main.php?traitement=valider-ville")."', '$ville[0]', '".$_SESSION["token"]."', '".$ville["etat"]."')";
															else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															if($droit_dacces["supprimer_ville"]==1)$url_supprimer="javascript:Notification_suppression_ville('". base64_encode("traitement_ajax/main.php?traitement=supprimer-ville")."', '$ville[0]', '".$_SESSION["token"]."',' $deja_operationel')";
															else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

																
																
													      ?>
															
														  <tr id="tr_ville<?php echo $ville[0]?>">
														    <?php if($droit_dacces["editer_ville"]==1){?>
																<td class="colonne-tab edit-line"><a href="<?php echo $url_editer?>"><i class="fa fa-pencil"></i></a>
																</td>
															<?php }?>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idville=$ville[0]&traitement=detail-ville")?>','loader');"><i class="fa fa-eye"></i></a></td>
																<?php if($droit_dacces["valider_ville"]==1){?>
																<td class="colonne-tab <?php echo $class?>" id="valider-ville<?php echo $ville[0]?>"><a href="<?php echo $url_valider?>"><i class="fa fa-check-circle"></i></a>
																</td>
																<?php }?>
																<?php if($droit_dacces["supprimer_ville"]==1){?>
																<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer?>"><i class="fa fa-trash"></i></a>
																</td>
																<?php }?>
																<td id="nom-ville<?php echo $ville[0]?>"><?php echo $ville["titre"]?></td>
																<td id="reference-ville<?php echo $ville[0]?>"><? echo $ville["reference"]; ?></td>
																<td id="region-ville<?php echo $ville[0]?>"><? echo $region["titre"]; ?></td>
																
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
																		<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','form-recherche-ville','liste_ville','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
																	<?php }?>
																	<?php if($nbpage>$nbpage_affiche){?>
																<span class="void-pagination">...</span>
																   <?php }?>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','form-recherche-ville','liste_ville','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','form-recherche-ville','liste_ville','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
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

