								<div class="wrap-contain-onglet-page" id="tab-dossier-attente" <?php if(isset($_SESSION["onglet-suivi"]) AND $_SESSION["onglet-suivi"]=="tab-dossier-attente"){?>style="display: block"<?php }?>>
									<div class="contain-onglet-page">
										<h2 class="titre-tab">Dossiers en attente de traitement </h2>

										<div id="wrap-table-adhesion" class="conteneur-wrap-tab">
											<div class="contain-tab2" id="tab-adhesion" style="display: block">
												<h2 class="titre-page">
													<div class="wrap-btn-plus-tab">
														<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
													</div>
												</h2>
												<div class="wrap-content-page">
													<p class="accroche-tab">Ci-dessous la liste des dossiers en attente de suivi/affectation.</p>
														<div class="conteneur-recherche-fiche">
														  <form action="" id="form-dossier-en-attente" class="formulaire-research form-recherche">
																<div class="form-group">
																	<span class="text-recherche">Recherche rapide : </span>
																</div>
															  <?php if($niveau_dacces=="Toutes"){?>
															  <div class="form-group">
 																	<label class="input-with-search-icon" for="">
 																		Agence
 																		<div class="slect-with-search-icon">
 																			<select name="agence-search" type="text" class="select-compte-operation search ref-search" id="agence-search">
 																			<option value="" desable selected>S&eacute;lectionnez</option>
																		   <?php 
																			$query_region="SELECT * FROM region WHERE etat='1' AND idregion IN (SELECT idregion FROM agence WHERE etat='1' ) ORDER BY titre ASC;";
																			$result_region=mysql_query($query_region);
																			while($region=mysql_fetch_array($result_region)){
																		  ?>
																			 <optgroup label="<?php echo $region["titre"]?>">
																			   <?php 

																				$query_agence="SELECT * FROM agence WHERE etat='1' AND idregion ='$region[0]'  ORDER BY titre ASC;";
																				$result_agence=mysql_query($query_agence);
																				while($agence=mysql_fetch_array($result_agence)){
																					if($demandeur["agence"]==$agence[0])$selected ="SELECTED";
																					else $selected="";
																			  ?>
																			  <option value="<?php echo $agence[0]?>" data-code="<?php echo $agence["reference"]?>" <?php echo $selected?>><?php echo $agence["titre"]?></option>
																			  <?php }?>
																			  </optgroup>
																		  <?php }?>

																			</select>
 																		</div>		
 																	</label>
 																</div>
                                                              <?php }elseif($niveau_dacces=="region" OR $niveau_dacces=="ville" ){?>
                                                              
 															  <div class="form-group">
 																	<label class="input-with-search-icon" for="">
 																		Agence
 																		<div class="slect-with-search-icon">
 																			<select name="agence-search" type="text" class="select-compte-operation search ref-search" id="agence-search">
 																			<option value="" desable selected>S&eacute;lectionnez</option>
																		   
																			   <?php 
																				if($niveau_dacces=="Toutes" )$query_agence="SELECT * FROM agence WHERE etat='1' AND idregion ='$circonscription'  ORDER BY titre ASC;";
																				else $query_agence="SELECT * FROM agence WHERE etat='1' AND idville ='$circonscription'  ORDER BY titre ASC;";
																				$result_agence=mysql_query($query_agence);
																				while($agence=mysql_fetch_array($result_agence)){
																					if($demandeur["agence"]==$agence[0])$selected ="SELECTED";
																					else $selected="";
																			  ?>
																			  <option value="<?php echo $agence[0]?>" data-code="<?php echo $agence["reference"]?>" <?php echo $selected?>><?php echo $agence["titre"]?></option>
																			  <?php }?>
																			  

																			</select>
 																		</div>		
 																	</label>
 																</div>
                                                             
                                                              <?php }?>
                                                              <?php if($niveau_dacces=="region" OR $niveau_dacces=="Toutes" ){?>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Ville agence
																			<select name="ville-agence" id="ville-agence" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>S&eacute;lectionnez</option>
																				  
																				  <?php 
																				    if($niveau_dacces=="Toutes" )$result_ville=mysql_query("SELECT * FROM ville ORDER BY titre ASC");
	                                                                                else $result_ville=mysql_query("SELECT * FROM ville WHERE idregion='$circonscription' ORDER BY titre ASC");
																				    while($ville=mysql_fetch_array($result_ville)){
																				  ?>
                                                                                   
                                                                                  <option value="<?php echo $ville[0]?>"><?php echo $ville["titre"]?> </option>
                                                                                  <?php }?>
																			</select>
																		</label>
																	</div>	
																</div>
                                                               <?php }?>

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

															  	<label for="">Num&eacute;ro compte <input name="libelle-compte" type="text" class="search ref-search" id="libelle-compte" placeholder="" data-onglet="toute"></label>

															  </div>

															  <div class="form-group">

															  	<label for="">Client <input name="libelle-client" type="text" class="search ref-search" id="libelle-client" placeholder="Nom ou pr&eacute;nom " data-onglet="toute"></label>

															  </div>
															  <div class="form-group">
																	<div class="form-control">
																		<label for="">Ville de r&eacute;sidence
																			<select name="ville-client" id="ville-client" type="text" class="search ref-search ref-search-responsive">
																				<option value="" desable selected>S&eacute;lectionnez</option>
																				  
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
															  	<button type="button" class="btn-search valide-form-search" onClick="Rechercher('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-dossiers")?>','form-dossier-en-attente','liste-dossiers-en-attente','loader')"><i class="fa fa-search"></i></button>
                                                                <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
                                                                <input type="hidden" name="form" id="form" value="form-dossier-en-attente"/>
                                                                <input type="hidden" name="etat-dossier" id="etat-dossier" value="En_attente"/>
                                                                <input type="hidden" name="conteneur-resultat" id="conteneur-resultat" value="liste-dossiers-en-attente"/>
															  </div>
 															</form>
 
														</div>
                                               <div id="liste-dossiers-en-attente">

													<table id="liste-page" class="liste-page" cellspacing="1">
 														<thead>
 															<tr style="text-align: left">
 																<th></th>
 																<th></th>
 																<th></th>
 																<?php if($droit_dacces["acces_piece_jointe"]==1){?><th></th><?php }?>
 																<?php if($droit_dacces["consulter_les_echanges"]==1){?><th></th><?php }?>
																<?php  if($droit_dacces["affecter_dossier"]==1){?><th></th><?php }?>
 																<th>R&eacute;f</th>
 																<th>Date</th>
 																<th>Client</th>
 																<th>Montant</th>															
 																<th>Dur&eacute;e</th>
 																<th>Agence</th>
 																<th>ville de r&eacute;sidence</th>
 																<th>T&eacute;l&eacute;phone</th>
 																<th>Resume</th>
 															</tr>
 														</thead>


														<tbody id="tbody-dossier">

												<?php 
	                                              $page=10;//nombre d'enregistrement &agrave; afficher par page
                                                  $debut=0;

												  $query_demandeur="SELECT * FROM demandeur WHERE corbeille='0' AND etat='En_attente' ";


												  if($niveau_dacces=="zone")$query_demandeur.=" AND zone_agence='$circonscription'";
												  elseif($niveau_dacces=="region")$query_demandeur.=" AND region_agence='$circonscription'";

												  elseif($niveau_dacces=="ville")$query_demandeur.=" AND ville_agence='$circonscription'";
												  elseif($niveau_dacces=="agence")$query_demandeur.=" AND agence='$circonscription'";
												  
												  if($ladministrateur["fonction"]=="Gestionnaire") $query_demandeur.=" AND gestionnaire='$ladministrateur[0]'";
														
												  $nb_enregistrement=mysql_num_rows(mysql_query("$query_demandeur"));
												  $query_demandeur.=" ORDER BY iddemandeur DESC";
												  $query_demandeur.=" LIMIT $debut, $page";

												  $total=$nb_enregistrement;
												  $nbpage=ceil($total/$page);
												  $nbpage_affiche=5;
												  if($nbpage_affiche>$nbpage)$nbpage_affiche=$nbpage;
												  $page_active=1;

												  $result_demandeur=mysql_query($query_demandeur);
												  while($demandeur=mysql_fetch_array($result_demandeur)){
													  $agence=getAgenceInformations($demandeur["agence"]);
													  $ville=getvilleInformations($demandeur["ville"]);
													  $class_etat=GetClassEtatDossier($demandeur[0]);
													  $clotureur= getadministrateurinformations($demandeur["cloture_par"]);
															if($droit_dacces["acces_piece_jointe"]==1)$url_justif="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?traitement=piece-justificative&iddemandeur=$demandeur[0]")."','loader');";
															else $url_justif="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";
													  
															if($droit_dacces["consulter_les_echanges"]==1)$url_suivi="javascript:Affichage_contenuLightBox64('". base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=suivi-dossier")."','loader');";
															else $url_suivi="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

															
													  
															if($droit_dacces["cloturer_demande"]==1)$url_cloturer="javascript:Affichage_contenuLightBox64('". base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=cloture-dossier")."','loader');";
															else $url_cloturer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";
													  
													  
													        $affectation=GetInfosAffectationDossier($demandeur[0]);
													        $url_affecter=$affectation["url"];
													        $class_affectation=$affectation["class"];
													        $infobulle_affectation=$affectation["infobulle"];

															
												 ?>
															<tr id="tr_dossier<?php echo $demandeur[0]?>">															
																
																<td class="colonne-tab etat-dossier <?php echo $class_etat?>" id="td-couleur-tout<?php echo $demandeur[0]?>" data-tooltip="<?php  echo strip_tags(GetLibelleEtatDossier($demandeur[0]))?>">
																</td>

																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=detail-demande")?>','loader');" data-tooltip="D&eacute;tails"><i class="fa fa-eye"></i></a></td>	
																
																<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=detail-demande")?>','loader', GetVersionPdf);" data-tooltip="Fiche PDF de <?php echo $demandeur["nom"]." ".$demandeur["prenom"]?>"><i class="fa fa-file-pdf-o" style="color: red"></i></a></td>
																	
																<?php if($droit_dacces["acces_piece_jointe"]==1){?>													
																<td class="colonne-tab detail-line attach"><a href="<?php echo $url_justif?>" data-tooltip="<?php if(LeDossierDemandeurNaAucuneJustif($demandeur[0])==0) echo "Aucune pièce justificative pour ".$demandeur["nom"]." ".$demandeur["prenom"]; else echo"Voir les pièces justificatives de ".$demandeur["nom"]." ".$demandeur["prenom"]?>" ><i class="fa fa-files-o"></i></a></td>	
																<?php }?>													
															
																<?php if($droit_dacces["consulter_les_echanges"]==1){?>															
																<td class="colonne-tab edit-line"><a href="<?php echo $url_suivi?>" data-tooltip="Ecrire &agrave; <?php echo $demandeur["nom"]." ".$demandeur["prenom"]?>"><i class="fa fa-comments-o"></i></a>
																</td>
                                                                <?php }?>

																													
																<?php if($droit_dacces["affecter_dossier"]==1){?>
																<td class="colonne-tab detail-line assign <?php echo $class_affectation?>"><a href="<?php echo $url_affecter?>" data-tooltip="<?php echo $infobulle_affectation?>" ><i class="fa fa-share"></i></a></td>
																<?php }?>
																
																<td>#0<?php echo $demandeur[0]?></td>
 																<td><strong><?php echo getdatedetaille($demandeur["date_creation"], $demandeur["heure_creation"])?></strong></td>
 																<td><strong><?php echo $demandeur["nom"]." ".$demandeur["prenom"] ;?></strong></td>
 																<td><strong><?php echo number_format($demandeur["montant_souhaite"], 0, ',', ' '); ?> </strong></td>
 																<td style="text-align: center"><strong><?php echo $demandeur["duree_credit"]?></strong></td>
 																<td><?php if($agence!=false) echo "<strong>".$agence["titre"]."</strong>"; else echo "Pas encore renseign&eacute;e"?></td>
 																<td><?php if($ville!=false) echo  "<strong>".$ville["titre"]."</strong>"; else echo "Pas encore renseign&eacute;e"?></td>

 																<td><strong><?php echo $demandeur["telephone"]?></strong></td>
 																<td id="td-resume-tout<?php echo $demandeur[0]?>"><?php  echo GetLibelleEtatDossier($demandeur[0])?></td>
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
																		<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-dossiers")?>','form-dossier-en-attente','liste-dossiers-en-attente','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
																	<?php }?>
																	<?php if($nbpage>$nbpage_affiche){?>
																<span class="void-pagination">...</span>
																   <?php }?>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-dossiers")?>','form-dossier-en-attente','liste-dossiers-en-attente','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
																<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-dossiers")?>','form-dossier-en-attente','liste-dossiers-en-attente','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
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
 