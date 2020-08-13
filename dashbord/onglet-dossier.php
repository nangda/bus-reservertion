								<div class="wrap-contain-onglet-page" id="tab-dossier" style="display: block;">

									<div class="contain-onglet-page">

										<h2 class="titre-tab">Liste des dossiers</h2>



										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">



											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->

											<div class="contain-tab2" id="tab-adhesion" style="display: block">

												<h2 class="titre-page">

													<div class="wrap-btn-plus-tab">

														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>



														<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-gestion-droit-utilisateur.php")?>','loader',allCheck);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un dossier</a>
<!--														<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=editer-dossier")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un utilisateur</a>-->

													</div>

												</h2>



												<div class="wrap-content-page">

													<p class="accroche-tab">Ci-dessous la liste des dossier client.</p>

														<div class="conteneur-recherche-fiche">
														  <form action="" id="" class="formulaire-research form-recherche">

																<div class="form-group">

																	<span class="text-recherche">Recherche rapide : </span>

																</div>

																<div class="form-group search-wrapper">

																	<div class="libele-periode lib-periode">P&eacute;riode de soumission</div>

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

															  	<label for="">Refence dossier<input name="libelle-ref" type="text" class="search ref-search" id="libelle-ref" placeholder="Ex: #1234566" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">Nom client<input name="libelle-nom" type="text" class="search ref-search" id="libelle-nom" placeholder="Ex: Jocktane" data-onglet="toute"></label>

															  </div>


															  <div class="form-group">

															  	<label for="">N° compte<input name="libelle-compte" type="text" class="search ref-search" id="libelle-compte" placeholder="060606000" data-onglet="toute"></label>

															  </div>

															  


															  

															  <div class="form-group">

																	<label class="input-with-search-icon" for="">

																		Agence

																		<div class="slect-with-search-icon">

																			<select name="compte-search-operation" type="text" class="select-compte-operation search ref-search" id="compte-search-operation">

																				<option value="0">Agence</option>

																				  <option value="Agence">Agence</option>

																				  <option value="Agence">Agence</option>
																			</select>

																		</div>		

																	</label>

																</div>

															  <div class="form-group">

															  	<button type="button" class="btn-search valide-form-search" ><i class="fa fa-search"></i></button>

															  </div>

															  

															</form>

														</div>



													<table id="liste-page">



														<thead>



															<tr style="text-align: left">



																<th></th>



																<th></th>



																<th></th>



																<th></th>



																<th></th>
																
																<th></th>



																<th>Référence</th>



																<th>Date</th>



																<th>Client</th>



																<th>Agence</th>															



																<th>Montant</th>



																<th>Durée</th>

																<th>Resume</th>



															</tr>



														</thead>







														<tbody id="tbody-dossier">

															<tr id="tr_dossier1">															
																
																<td class="colonne-tab etat-dossier <?php echo $class?>" id="valider-dossier<?php echo $dossier[0]?>">
																</td>

																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=detail-dossier")?>','loader');"><i class="fa fa-eye"></i></a></td>														
																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=editer-dossier")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>

																<td class="colonne-tab fermeture-dossier"><a href=""><i class="fa fa-unlock-alt"></i></a></td>
																
																<td class="colonne-tab detail-line attach"><a href=""><i class="fa fa-files-o"></i></a></td>


																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_dossier('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-dossier")?>', '<?php echo $dossier[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>
																</td>



																<td id="ref-dossier<?php echo $dossier[0]?>">#12345678</td>



																<td id="date-dossier<?php echo $dossier[0]?>">02-05-2020</td>



																<td id="ville-dossier<?php echo $dossier[0]?>">Marc Merlin</td>



																<td id="telephone-dossier<?php echo $dossier[0]?>">Bonanjo</td>



																<td id="email-dossier<?php echo $dossier[0]?>">800000</td>



																<td id="periode-dossier<?php echo $dossier[0]?>">8 mois</td>

																<td id="periode-dossier<?php echo $dossier[0]?>"><a href="" class="link" algn="left">Voir les pièces-jointes</a></td>



																



														  </tr>



															<tr id="tr_dossier1">
																
																
																<td class="colonne-tab etat-dossier encours <?php echo $class?>" id="valider-dossier<?php echo $dossier[0]?>">
																</td>
																
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=detail-dossier")?>','loader');"><i class="fa fa-eye"></i></a></td>
																
																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=editer-dossier")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>

																
																<td class="colonne-tab fermeture-dossier"><a href=""><i class="fa fa-unlock-alt"></i></a></td>
																
																<td class="colonne-tab attach"><a href=""></a><i class="fa fa-files-o"></i></td>

																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_dossier('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-dossier")?>', '<?php echo $dossier[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>

																</td>

																<td id="ref-dossier<?php echo $dossier[0]?>">#12345678</td>

																<td id="date-dossier<?php echo $dossier[0]?>">02-05-2020</td>

																<td id="ville-dossier<?php echo $dossier[0]?>">Marc Merlin</td>

																<td id="telephone-dossier<?php echo $dossier[0]?>">Bonanjo</td>

																<td id="email-dossier<?php echo $dossier[0]?>">800000</td>

																<td id="periode-dossier<?php echo $dossier[0]?>">8 mois</td>

																<td id="periode-dossier<?php echo $dossier[0]?>"><a href="" class="link" algn="left">Voir les pièces-jointes</a></td>

														  </tr>



															<tr id="tr_dossier1">


																<td class="colonne-tab etat-dossier rejete <?php echo $class?>" id="valider-dossier<?php echo $dossier[0]?>">
																</td>
																
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=detail-dossier")?>','loader');"><i class="fa fa-eye"></i></a></td>															

																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=editer-dossier")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>

																<td class="colonne-tab fermeture-dossier"><a href=""><i class="fa fa-unlock-alt"></i></a></td>
																
																<td class="colonne-tab detail-line attach"><a href=""><i class="fa fa-files-o"></i></a></td>

																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_dossier('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-dossier")?>', '<?php echo $dossier[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>
																</td>

																<td id="ref-dossier<?php echo $dossier[0]?>">#12345678</td>

																<td id="date-dossier<?php echo $dossier[0]?>">02-05-2020</td>

																<td id="ville-dossier<?php echo $dossier[0]?>">Marc Merlin</td>

																<td id="telephone-dossier<?php echo $dossier[0]?>">Bonanjo</td>

																<td id="email-dossier<?php echo $dossier[0]?>">800000</td>

																<td id="periode-dossier<?php echo $dossier[0]?>">8 mois</td>

																<td id="periode-dossier<?php echo $dossier[0]?>"><a href="" class="link" algn="left">Voir les pièces-jointes</a></td>							
														  </tr>
															

														<tr id="tr_dossier1">

																
																<td class="colonne-tab etat-dossier accepte <?php echo $class?>" id="valider-dossier<?php echo $dossier[0]?>">
																</td>
															
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=detail-dossier")?>','loader');"><i class="fa fa-eye"></i></a></td>														

																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=editer-dossier")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>


																<td class="colonne-tab fermeture-dossier ferme"><a href=""><i class="fa fa-lock"></i></a></td>
																
																<td class="colonne-tab  attach"><a href=""><i class="fa fa-files-o"></i></a></td>

																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_dossier('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-dossier")?>', '<?php echo $dossier[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>

																</td>

																<td id="ref-dossier<?php echo $dossier[0]?>">#12345678</td>

																<td id="date-dossier<?php echo $dossier[0]?>">02-05-2020</td>

																<td id="ville-dossier<?php echo $dossier[0]?>">Marc Merlin</td>

																<td id="telephone-dossier<?php echo $dossier[0]?>">Bonanjo</td>

																<td id="email-dossier<?php echo $dossier[0]?>">800000</td>

																<td id="periode-dossier<?php echo $dossier[0]?>">8 mois</td>

																<td id="periode-dossier<?php echo $dossier[0]?>"><a href="" class="link" algn="left">Voir les pièces-jointes</a></td>
														  </tr>

														<tr id="tr_dossier1">

																
																<td class="colonne-tab etat-dossier incomplet <?php echo $class?>" id="valider-dossier<?php echo $dossier[0]?>">
																</td>
															
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=detail-dossier")?>','loader');"><i class="fa fa-eye"></i></a></td>														

																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddossier=$dossier[0]&traitement=editer-dossier")?>','loader');"><i class="fa fa-pencil"></i></a>
																</td>


																<td class="colonne-tab fermeture-dossier ferme"><a href=""><i class="fa fa-lock"></i></a></td>
																
																<td class="colonne-tab  attach"><a href=""><i class="fa fa-files-o"></i></a></td>

																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_dossier('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-dossier")?>', '<?php echo $dossier[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>

																</td>

																<td id="ref-dossier<?php echo $dossier[0]?>">#12345678</td>

																<td id="date-dossier<?php echo $dossier[0]?>">02-05-2020</td>

																<td id="ville-dossier<?php echo $dossier[0]?>">Marc Merlin</td>

																<td id="telephone-dossier<?php echo $dossier[0]?>">Bonanjo</td>

																<td id="email-dossier<?php echo $dossier[0]?>">800000</td>

																<td id="periode-dossier<?php echo $dossier[0]?>">8 mois</td>

																<td id="periode-dossier<?php echo $dossier[0]?>"><a href="" class="link" algn="left">Voir les pièces-jointes</a></td>
														  </tr>

														</tbody>



													</table>

												</div>

											</div>

										</div>

									</div>

								</div>

