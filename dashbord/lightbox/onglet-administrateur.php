								<div class="wrap-contain-onglet-page" id="tab-administrateur" style="display: block;">

									<div class="contain-onglet-page">

										<h2 class="titre-tab">Liste des utilisateurs</h2>



										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">



											<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->

											<div class="contain-tab2" id="tab-adhesion" style="display: block">

												<h2 class="titre-page">

													<div class="wrap-btn-plus-tab">

														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>



														<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=editer-administrateur")?>','loader',allCheck);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un utilisateur</a>

													</div>

												</h2>



												<div class="wrap-content-page">

													<p class="accroche-tab">Ci-dessous la liste des utilisateur de la plateforme.</p>

                                                <?php 

												   $pagination=7;

												   $page_encours=1;

												   $marge=3;

												   $nbligneparpage=10;

												   $debut=0;

												   $query_administrateur="SELECT * FROM administrateur ORDER BY idadministrateur DESC";

												   $result_administrateur=mysql_query($query_administrateur);

												   $nbreponse=mysql_num_rows($result_administrateur);

												   $nbtotalpage=ceil($nbreponse/$nbligneparpage);

												   $query_administrateur.=" LIMIT $debut, $nbligneparpage";

												   $result_administrateur=mysql_query($query_administrateur);

												?>

														<div class="conteneur-recherche-fiche">

														  <form action="" id="" class="formulaire-research form-recherche">

																<div class="form-group">

																	<span class="text-recherche">Recherche rapide : </span>

																</div>

																<div class="form-group search-wrapper">

																	<div class="libele-periode lib-periode">P&eacute;riode d'adhesion</div>

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

															  	<label for="">Nom<input name="libelle-nom" type="text" class="search ref-search" id="libelle-nom" placeholder="Ex: Jocktane" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">Pr&eacute;nom<input name="libelle-prenom" type="text" class="search ref-search" id="libelle-prenom" placeholder="Ex: Mike" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">T&eacute;l&eacute;phone<input name="libelle-telephone" type="text" class="search ref-search" id="libelle-telephone" placeholder="1234567" data-onglet="toute"></label>

															  </div>

															  

															  <div class="form-group">

															  	<label for="">E-mail<input name="libelle-email" type="text" class="search ref-search" id="libelle-email" placeholder="Ex: mike@gn.org" data-onglet="toute"></label>

															  </div>

															  

															  <div class="form-group">

																	<label class="input-with-search-icon" for="">

																		Sexe

																		<div class="slect-with-search-icon">

																			<select name="compte-search-operation" type="text" class="select-compte-operation search ref-search" id="compte-search-operation">

																				<option value="0">Sexe</option>

																				  <option value="Homme">Homme</option>

																				  <option value="Femme">Femme</option>





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

																<th>Nom & Pr&eacute;nom</th>

																<th>Fonction &agrave; la banque</th>

																<th>Ville de r&eacute;sidence</th>

																<th>T&eacute;l&eacute;phone</th>															

																<th>E-mail</th>

																<th>P&eacute;riode</th>

															</tr>

														</thead>



														<tbody id="tbody-administrateur">

														<?php 

	                                                        $i=0;

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

													      ?>

															<tr id="tr_administrateur<?php echo $administrateur[0]?>">

																<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=editer-administrateur")?>','loader');"><i class="fa fa-pencil"></i></a>

																</td>

																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=detail-administrateur")?>','loader');"><i class="fa fa-eye"></i></a></td>

																<td class="colonne-tab detail-line"> <a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=droit-administrateur&idadministrateur=$administrateur[0]")?>','loader',allCheck);">	<i class="fa fa-lock"></i></a></td>

																<td class="colonne-tab <?php echo $class?>" id="valider-administrateur<?php echo $administrateur[0]?>"><a href="javascript:Valider_administrateur('<?php echo base64_encode("traitement_ajax/main.php?traitement=valider-administrateur")?>', '<?php echo $administrateur[0]?>', '<?php echo $_SESSION["token"]?>', '<?php echo $administrateur["etat"]?>')"><i class="fa fa-check-circle"></i></a>

																</td>

																<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_administrateur('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-administrateur")?>', '<?php echo $administrateur[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')"><i class="fa fa-trash"></i></a>

																</td>

																<td id="nom-administrateur<?php echo $administrateur[0]?>"><?php echo $administrateur["nom"]?> <?php echo $administrateur["prenom"]?></td>

																<td id="fonction-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["fonction"]; ?></td>

																<td id="ville-administrateur<?php echo $administrateur[0]?>"><? echo $ville["titre"]; ?></td>

																<td id="telephone-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["telephone"]; ?></td>

																<td id="email-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["email"]; ?></td>

																<td id="periode-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["date_debut"]; ?> - <? echo $administrateur["date_fin"]; ?></td>

																

														  </tr>



														<?php }?>

														</tbody>

													</table>

												</div>

											</div>

										</div>

									</div>

								</div>

