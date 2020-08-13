								<div class="wrap-contain-onglet-page" id="tab-visite" <?php if((isset($_SESSION["onglet-utilisateur"]) AND $_SESSION["onglet-utilisateur"]=="tab-visite")){?>style="display: block"<?php }?>>

									<div class="contain-onglet-page">

										<h2 class="titre-tab">Historique des connexions</h2>



										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">



											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->

											<div class="contain-tab2" id="tab-adhesion" style="display: block">

												<h2 class="titre-page">

													<div class="wrap-btn-plus-tab">

														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>


                                                       
													</div>

												</h2>



												<div class="wrap-content-page">

													<p class="accroche-tab">Historique de visites de la plateforme - Client et Administrateurs - (Date, Adresse IP,...)</p>

												<?php 
	                                              $page=10;//nombre d'enregistrement à afficher par page
                                                  $debut=0;

												  $query_visite="SELECT * FROM visite WHERE idvisite!='0'  ";

														
												  $nb_enregistrement=mysql_num_rows(mysql_query("$query_visite"));
												  $query_visite.=" ORDER BY idvisite DESC";
												  $query_visite.=" LIMIT $debut, $page";

												  $total=$nb_enregistrement;
												  $nbpage=ceil($total/$page);
												  $nbpage_affiche=5;
												  if($nbpage_affiche>$nbpage)$nbpage_affiche=$nbpage;
												  $page_active=1;

												 ?>

														<div class="conteneur-recherche-fiche">

														  <form action="" id="form-recherche-visite" class="formulaire-research form-recherche">

																<div class="form-group">

																	<span class="text-recherche">Recherche rapide : </span>

																</div>
																
																<div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">P&eacute;riode</div>
																	<div class="form-control">
																		<label for="">
																		  <input type="text" class="begening-date search date-debut-search datepicker-here" placeholder="Date d&eacute;but" name="date-debut-operation" id="date-debut-operation" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>

																		<label for=""> 
																			<input type="text" class="ending-date search date-fin-search datepicker-here" name="date-fin-operation" id="date-fin-operation" placeholder="Date fin" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
																		</label>

																	</div>
																</div>



															  <div class="form-group">

															  	<label for="">Nom / Pr&eacute;nom<input name="libelle-nom" type="text" class="search ref-search" id="libelle-nom" placeholder="" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">Adresse IP<input name="ip" type="text" class="search ref-search" id="ip" placeholder="" data-onglet="toute"></label>

															  </div>


																<div class="form-group search-wrapper">
																	<div class="libele-periode lib-periode">Op&eacute;ration</div>
																	<div class="form-control">
																		<label for="">
																		  <select name="operation-search" id="operation-search" type="text" class="search ref-search ref-search-responsive">
																				<option value="" >Sélectionner</option>
																				<option value="Lecture" >Lecture</option>
																			      <option value="Ecriture" >Ecriture</option>
																			      <option value="Validation">Validation</option>
																			      <option value="Suppression" >Suppression</option>
																			</select>
																		</label>

																		
																	</div>
																</div>
															  

															  

															   <div class="form-group">
															  	<button type="button" class="btn-search valide-form-search" onClick="Rechercher('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','form-recherche-visite','liste_visite','loader')" ><i class="fa fa-search"></i></button>
															  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
                                                                <input type="hidden" name="form" id="form" value="form-recherche-visite"/>
                                                                <input type="hidden" name="conteneur-resultat" id="conteneur-resultat" value="liste_visite"/>
															  </div>

															  

															</form>

														</div>

												<div id="liste_visite">

													<table class="liste-page">

														<thead>

															<tr style="text-align: left">
																<th></th>
																<th></th>
																<th>TYPE</th>
																<th>Nom et pr&eacute;nom</th>
																<th>Date de visite</th>
																<th>Adresse IP</th>
																<th>Page visit&eacute;e</th>
																<th>Operation</th>
																<th>Libellé</th>
															</tr>

														</thead>



														<tbody id="tbody-visite">

														<?php 

	                                                        $i=0;
															$result_visite=mysql_query($query_visite);			

															while($visite=mysql_fetch_array($result_visite)){

															   $ville=getvilleInformations($visite["idville"]);
															
																$i++;

															
															if($droit_dacces["supprimer_visite"]==1)$url_supprimer="javascript:Notification_suppression_visite('". base64_encode("traitement_ajax/main.php?traitement=supprimer-visite")."', '$visite[0]', '".$_SESSION["token"]."')";
															else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'visite','OK','','','','1');";
                                                            
															

													      ?>

															<tr id="tr_visite<?php echo $visite[0]?>" style="text-align: left">

																<td class="colonne-tab edit-line"><?php echo $i ?></a>

																</td>

																

																<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer ?>"><i class="fa fa-trash"></i></a>

																</td>

																<td id="nom-visite<?php echo $visite[0]?>"><?php echo $visite["type"]?></td>
																<td id="nom-visite<?php echo $visite[0]?>"><?php echo $visite["compte"]?></td>

																<td id="fonction-visite<?php echo $visite[0]?>"><? echo getdatedetaille($visite["date"],$visite["heure"] ); ?></td>

																<td id="ville-visite<?php echo $visite[0]?>"><? echo $visite["ip"]; ?></td>

																<td id="telephone-visite<?php echo $visite[0]?>"><? echo $visite["page"]; ?></td>

																<td id="email-visite<?php echo $visite[0]?>"><? echo $visite["operation"]; ?></td>
																<td id="email-visite<?php echo $visite[0]?>"><? echo $visite["libelle"]; ?></td>

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
																		<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','form-recherche-visite','liste_visite','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
																	<?php }?>
																	<?php if($nbpage>$nbpage_affiche){?>
																<span class="void-pagination">...</span>
																   <?php }?>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','form-recherche-visite','liste_visite','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','form-recherche-visite','liste_visite','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
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

