								<div class="wrap-contain-onglet-page" id="tab-administrateur" style="display: block;">

									<div class="contain-onglet-page">

										<h2 class="titre-tab">Liste des utilisateurs</h2>



										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">



											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->

											<div class="contain-tab2" id="tab-adhesion" style="display: block">

												<h2 class="titre-page">

													<div class="wrap-btn-plus-tab">

														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>


                                                       <?php if($droit_dacces["editer_administrateur"]==1){ ?>
														<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=editer-administrateur")?>','loader',allCheck);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un utilisateur</a>
       													<?php } ?>
													</div>

												</h2>



												<div class="wrap-content-page">

													<p class="accroche-tab">Ci-dessous la liste des utilisateur de la plateforme.</p>

												<?php 
	                                              $page=2;//nombre d'enregistrement à afficher par page
                                                  $debut=0;

												  $query_administrateur="SELECT * FROM administrateur WHERE idadministrateur!='0' ";

														
												  $nb_enregistrement=mysql_num_rows(mysql_query("$query_administrateur"));
												  $query_administrateur.=" ORDER BY idadministrateur DESC";
												  $query_administrateur.=" LIMIT $debut, $page";

												  $total=$nb_enregistrement;
												  $nbpage=ceil($total/$page);
												  $nbpage_affiche=5;
												  if($nbpage_affiche>$nbpage)$nbpage_affiche=$nbpage;
												  $page_active=1;

												 ?>

														<div class="conteneur-recherche-fiche">

														  <form action="" id="form-recherche-administrateur" class="formulaire-research form-recherche">

																<div class="form-group">

																	<span class="text-recherche">Recherche rapide : </span>

																</div>


															  <div class="form-group">

															  	<label for="">Nom<input name="libelle-nom" type="text" class="search ref-search" id="libelle-nom" placeholder="" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">Pr&eacute;nom<input name="libelle-prenom" type="text" class="search ref-search" id="libelle-prenom" placeholder="" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">T&eacute;l&eacute;phone<input name="libelle-telephone" type="text" class="search ref-search" id="libelle-telephone" placeholder="" data-onglet="toute"></label>

															  </div>

															  

															  <div class="form-group">

															  	<label for="">E-mail<input name="libelle-email" type="text" class="search ref-search" id="libelle-email" placeholder="" data-onglet="toute"></label>

															  </div>
															  

																<div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">Niveau d'accès aux dossiers</div>
																	<div class="form-control">
																		<label for="">
																		  <select name="niveau_dacces" id="niveau_dacces" type="text" class="search ref-search ref-search-responsive">
																				<option value="" >Sélectionner</option>
																				<option value="Toutes" >Toutes</option>
																			      <option value="region" >R&eacute;gion</option>
																			      <option value="ville">Ville</option>
																			      <option value="agence" >Agence</option>
																			</select>
																		</label>

																		<label for=""> 
																			<select name="circonscription" id="circonscription" type="text" class="search ref-search ref-search-responsive">
																				<option value="">----------</option>
																			      
																			</select>
																		</label>
																	
																	</div>
																</div>
															  

															  

															   <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" onClick="Rechercher('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','form-recherche-administrateur','liste_administrateur','loader')" ><i class="fa fa-search"></i></button>
															  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
                                                                <input type="hidden" name="form" id="form" value="form-recherche-administrateur"/>
                                                                <input type="hidden" name="conteneur-resultat" id="conteneur-resultat" value="liste_administrateur"/>
															  </div>

															  

															</form>

														</div>

												<div id="liste_administrateur">

													<table class="liste-page">

														<thead>

															<tr style="text-align: left">

																<th></th>

																<th></th>

																<th></th>

																<th></th>

																<th></th>

																<th>Nom & Pr&eacute;nom</th>

																<th>Fonction &agrave; la banque</th>

																<th>Ville de r&eacute;sidence</th>

																<th>T&eacute;l&eacute;phone</th>															

																<th>E-mail</th>

																<th>P&eacute;riode</th>
																<th>Niveau d'accès</th>

															</tr>

														</thead>



														<tbody id="tbody-administrateur">

														<?php 

	                                                        $i=0;
															$result_administrateur=mysql_query($query_administrateur);			

															while($administrateur=mysql_fetch_array($result_administrateur)){

															   $ville=getvilleInformations($administrateur["idville"]);
															if($administrateur["etat"]=="0"){
																$class="";

																$title="Valider l'enregistrement";
															}elseif($administrateur["etat"]=="1"){
																$class="validated";
																$title="d&eacute;j&agrave; valid&eacute; ";
															}

																$i++;
																$deja_operationel=0;//administrateurDejaoperationnel($idadministrateur);

															if($droit_dacces["editer_administrateur"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=editer-administrateur")."','loader');";
															else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															if($droit_dacces["valider_administrateur"]==1)$url_valider="javascript:Valider_administrateur('".base64_encode("traitement_ajax/main.php?traitement=valider-administrateur")."', '$administrateur[0]', '".$_SESSION["token"]."', '".$administrateur["etat"]."')";
															else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															if($droit_dacces["supprimer_administrateur"]==1)$url_supprimer="javascript:Notification_suppression_administrateur('". base64_encode("traitement_ajax/main.php?traitement=supprimer-administrateur")."', '$administrateur[0]', '".$_SESSION["token"]."',' $deja_operationel')";
															else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";
                                                            
															$acces=getDroitAccesAdministrateur($administrateur[0]);
															$niv_dacces=$acces["niveau_dacces"];
															$cir=$acces["circonscription"];

													      ?>

															<tr id="tr_administrateur<?php echo $administrateur[0]?>">

																<td class="colonne-tab edit-line"><a href="<?php echo $url_editer ?>"><i class="fa fa-pencil"></i></a>

																</td>

																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=detail-administrateur")?>','loader');"><i class="fa fa-eye"></i></a></td>

																<td class="colonne-tab detail-line"> <a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=droit-administrateur&idadministrateur=$administrateur[0]")?>','loader',allCheck);">	<i class="fa fa-lock"></i></a></td>

																<td class="colonne-tab <?php echo $class?>" id="valider-administrateur<?php echo $administrateur[0]?>"><a href="<?php echo $url_valider ?>"><i class="fa fa-check-circle"></i></a>

																</td>

																<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer ?>"><i class="fa fa-trash"></i></a>

																</td>

																<td id="nom-administrateur<?php echo $administrateur[0]?>"><?php echo $administrateur["nom"]?> <?php echo $administrateur["prenom"]?></td>

																<td id="fonction-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["fonction"]; ?></td>

																<td id="ville-administrateur<?php echo $administrateur[0]?>"><? echo $ville["titre"]; ?></td>

																<td id="telephone-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["telephone"]; ?></td>

																<td id="email-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["email"]; ?></td>

																<td id="periode-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["date_debut"]; ?> - <? echo $administrateur["date_fin"]; ?></td>
																
																<td id="acces-administrateur<?php echo $administrateur[0]?>">
																	
																	<?php if($acces!=false){ ?>
																	  <?php echo ucfirst($niv_dacces)?>
																	
																	<?php }?>
																</td>

																

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
																		<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','form-recherche-administrateur','liste_administrateur','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
																	<?php }?>
																	<?php if($nbpage>$nbpage_affiche){?>
																<span class="void-pagination">...</span>
																   <?php }?>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','form-recherche-administrateur','liste_administrateur','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','form-recherche-administrateur','liste_administrateur','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
																<?php }?>																
																
															</div>
														</div>
														
												</div>
												</div>

											</div>

										</div>

									</div>

								</div>

