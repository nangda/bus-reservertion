                               <div class="wrap-contain-onglet-page" id="tab-agence" <?php if(isset($_SESSION["onglet"]) AND $_SESSION["onglet"]=="tab-agence"){?>style="display: block"<?php }?>>
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Edition  des agences</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page titre-left">
												<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
                                       <?php if($droit_dacces["editer_agence"]==1){?>
										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=editer-agence")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter une agence</a>
												<?php }?>
													</div>
										</h2>

												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des agences </p>
												<?php 
	                                              $page=10;//nombre d'enregistrement à afficher par page
                                                  $debut=0;

												  $query_agence="SELECT * FROM agence WHERE idagence!='0' ";

														
												  $nb_enregistrement=mysql_num_rows(mysql_query("$query_agence"));
												  $query_agence.=" ORDER BY idagence DESC";
												  $query_agence.=" LIMIT $debut, $page";

												  $total=$nb_enregistrement;
												  $nbpage=ceil($total/$page);
												  $nbpage_affiche=5;
												  if($nbpage_affiche>$nbpage)$nbpage_affiche=$nbpage;
												  $page_active=1;

												 ?>
													
													<div class="conteneur-recherche-fiche">
														  <form action="" id="form-recherche-agence" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Zone
																			<select name="zone-agence" id="zone-agence" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Sélectionnez</option>
																				<option value="Maritime" >Maritime</option>
																				<option value="Centrale" >Centrale</option>
																				  
																				  
																			</select>
																		</label>
																	</div>	
																</div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Ville
																			<select name="ville-agence" id="ville-agence" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>Sélectionnez</option>
																				  
																				  <?php 
																				    $result_ville=mysql_query("SELECT * FROM ville ORDER BY titre ASC");
																				    while($ville=mysql_fetch_array($result_ville)){
																				  ?>
                                                                                   
                                                                                  <option value="<?php echo $ville[0]?>"><?php echo $ville["titre"]?> </option>
                                                                                  <?php }?>
																			</select>
																		</label>
																	</div>	
																</div>
															  	
															  
															  <div class="form-group">
															  	<label for="">Nom Agence<input name="nom-agence" type="text" class="search ref-search" id="nom-agence" placeholder="Ex: Bonanjo" data-onglet="toute"></label>
															  </div>
															  
															  <div class="form-group">
															  	<label for="">Code Agence<input name="code-agence" type="text" class="search ref-search" id="code-agence" placeholder="Ex: 06800" data-onglet="toute"></label>
															  </div>
															  
															  
															  <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" onClick="Rechercher('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','form-recherche-agence','liste_agence','loader')" ><i class="fa fa-search"></i></button>
															  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
                                                                <input type="hidden" name="form" id="form" value="form-recherche-agence"/>
                                                                <input type="hidden" name="conteneur-resultat" id="conteneur-resultat" value="liste_agence"/>
															  </div>
															  
															</form>
														</div>

                                             <div id="liste_agence">
													<table id="liste-page">
														<thead>
															<tr>
																<?php if($droit_dacces["editer_agence"]==1){?><th></th><?php }?>
																<th></th>
																<?php if($droit_dacces["valider_agence"]==1){?><th></th><?php }?>
																<?php if($droit_dacces["supprimer_agence"]==1){?><th></th><?php }?>
																<th>Agence</th>
																<th>R&eacute;ference</th>
																<th>T&eacute;l&eacute;phone</th>
																<th>Email</th>
																<th>Ville</th>
																<th>R&eacute;gion</th>
																<th>ZONE</th>
															</tr>
														</thead>

														<tbody id="tbody-agence">
														<?php 
	                                                        $i=0;
															$result_agence=mysql_query($query_agence);			
															while($agence=mysql_fetch_array($result_agence)){
																
															$region=getregioninformations($agence["idregion"]);
															$ville=getvilleinformations($agence["idville"]);
															$deja_operationel=agenceDejaoperationnel($agence[0]);

															if($agence["etat"]=="0"){

																$class="";
																$title="Valider l'enregistrement";

															}elseif($agence["etat"]=="1"){

																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";

															}
																$i++;
																
															if($droit_dacces["editer_agence"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idagence=$agence[0]&traitement=editer-agence")."','loader');";
															else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															if($droit_dacces["valider_agence"]==1)$url_valider="javascript:Valider_agence('".base64_encode("traitement_ajax/main.php?traitement=valider-agence")."', '$agence[0]', '".$_SESSION["token"]."', '".$agence["etat"]."')";
															else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															if($droit_dacces["supprimer_agence"]==1)$url_supprimer="javascript:Notification_suppression_agence('". base64_encode("traitement_ajax/main.php?traitement=supprimer-agence")."', '$agence[0]', '".$_SESSION["token"]."',' $deja_operationel')";
															else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

																
													      ?>
															
														  <tr id="tr_agence<?php echo $agence[0]?>">
														     <?php if($droit_dacces["editer_agence"]==1){?>
																<td class="colonne-tab edit-line"><a href="<?php echo $url_editer?>"><i class="fa fa-pencil"></i></a>
																</td>
																<?php }?>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idagence=$agence[0]&traitement=detail-agence")?>','loader');"><i class="fa fa-eye"></i></a></td>
																<?php if($droit_dacces["valider_agence"]==1){?>
																<td class="colonne-tab <?php echo $class?>" id="valider-agence<?php echo $agence[0]?>"><a href="<?php echo $url_valider?>"><i class="fa fa-check-circle"></i></a>
																</td>
																<?php }?>
																<?php if($droit_dacces["supprimer_agence"]==1){?>
																<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer?>"><i class="fa fa-trash"></i></a>
																</td>
																<?php }?>
																<td id="nom-agence<?php echo $agence[0]?>"><?php echo $agence["titre"]?></td>
																<td id="reference-agence<?php echo $agence[0]?>"><? echo $agence["reference"]; ?></td>
																<td id="telephone-agence<?php echo $agence[0]?>"><? echo $agence["telephone"]; ?></td>
																<td id="email-agence<?php echo $agence[0]?>"><? echo $agence["email"]; ?></td>
																<td id="ville-agence<?php echo $agence[0]?>"><? echo $ville["titre"]; ?></td>
																<td id="region-agence<?php echo $agence[0]?>"><? echo $region["titre"]; ?></td>
																<td id="zone-agence<?php echo $agence[0]?>"><? echo $agence["zone"]; ?></td>
																
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
																		<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','form-recherche-agence','liste_agence','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
																	<?php }?>
																	<?php if($nbpage>$nbpage_affiche){?>
																<span class="void-pagination">...</span>
																   <?php }?>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','form-recherche-agence','liste_agence','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','form-recherche-agence','liste_agence','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
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

