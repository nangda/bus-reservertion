								<div class="wrap-contain-onglet-page" id="tab-region" <?php if((isset($_SESSION["onglet"]) AND $_SESSION["onglet"]=="tab-region") OR !isset($_SESSION["onglet"])){?>style="display: block"<?php }?>>
									<div class="contain-onglet-page">
										<h2 class="titre-tab ">Edition des R&eacute;gions</h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">

											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
											<div class="contain-tab2" id="stab-province" style="display: block">
												<h2 class="titre-page titre-left">
													<div class="wrap-btn-plus-tab">
<!--														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>-->

										<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-ajouter-region.php")?>','loader');" class="btn-add"><i class="fa fa-plus"></i>Ajouter une r&eacute;gion</a>
													</div>
										</h2>
											<p class="accroche-tab">Ci-dessous la liste des r&eacute;gions</p>
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

													
													<table id="liste-page">
														<thead>
															<tr>
																<?php if($droit_dacces["editer_region"]==1){?><th></th><?php }?>
																<th></th>
																<?php if($droit_dacces["valider_region"]==1){?><th></th><?php }?>
																<?php if($droit_dacces["supprimer_region"]==1){?><th></th><?php }?>
																<th>NOM</th>
																<th>REFERENCE</th>
																<th>ZONE</th>
																
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
																
																if($droit_dacces["editer_region"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idregion=$region[0]&traitement=editer-region")."','loader');";
																else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";
																
																if($droit_dacces["valider_region"]==1)$url_valider="javascript:Valider_region('".base64_encode("traitement_ajax/main.php?traitement=valider-region")."', '$region[0]', '".$_SESSION["token"]."', '".$region["etat"]."')";
																else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";
																
																if($droit_dacces["supprimer_region"]==1)$url_supprimer="javascript:Notification_suppression_region('". base64_encode("traitement_ajax/main.php?traitement=supprimer-region")."', '$region[0]', '".$_SESSION["token"]."',' $deja_operationel')";
																else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";
																
																
																
													      ?>
															<tr id="tr_region<?php echo $region[0]?>">
															  <?php if($droit_dacces["editer_region"]==1){?>
																<td class="colonne-tab edit-line"><a href="<?php echo $url_editer?>"><i class="fa fa-pencil"></i></a>
																</td>
																<?php }?>
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idregion=$region[0]&traitement=detail-region")?>','loader');"><i class="fa fa-eye"></i></a></td>
																<?php if($droit_dacces["valider_region"]==1){?>
																<td class="colonne-tab <?php echo $class?>" id="valider-region<?php echo $region[0]?>"><a href="<?php echo $url_valider ?>"><i class="fa fa-check-circle"></i></a>
																</td>
																<?php }?>
																<?php if($droit_dacces["supprimer_region"]==1){?>
																<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer?>"><i class="fa fa-trash"></i></a>
																</td>
																<?php }?>
																<td id="nom-region<?php echo $region[0]?>"><?php echo $region["titre"]?></td>
																<td id="reference-region<?php echo $region[0]?>"><? echo $region["reference"]; ?></td>
																<td id="zone-region<?php echo $region[0]?>"><? echo $region["zone"]; ?></td>
																
															</tr>
                                                           <?php }?>
															

														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
