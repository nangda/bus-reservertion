								  <div class="bloc-page  bloc-graphe  bloc-graphe-semaine box-shaldow" id="tab-diagramme-bande">
									  <ul class="wrap-songlet-tab">
										  <li class="songlet-tab actif" data-id="wrap-chart-bande">Accueil</li>
										  <li class="songlet-tab" data-id="stab-bande-region">Province</li>
										  <li class="songlet-tab" data-id="stab-bande-departement">D&eacute;partement</li>
										  <li class="songlet-tab" data-id="stab-bande-ville">Ville</li>
										  <li class="songlet-tab" data-id="stab-bande-commune">Commune</li>
										  <li class="songlet-tab" data-id="stab-bande-autre">Hors du Gabon</li>
										  <li class="songlet-tab" data-id="stab-bande-nationalite">Nationalit&eacute;s</li>
									  </ul>
									  <div class="stab-onglet" id="wrap-chart-bande" >

									  </div>

									  <div class="stab-onglet" id="stab-bande-region" >
										  <div class="wrap-content-tab" >
											  <div class="wrap-select">
											  <select name="select-graphe-departement" class="select-graphe" id="select-graphe-departement" onChange="Select_province_histogramme('<?php echo base64_encode("traitement_ajax/traitement-histogramme-province.php")?>','<?php echo $_SESSION["token"] ?>');">
												  <?php 
												    $defaut_province="";
												    $id_defaut_province="";
													$query_province=mysql_query("SELECT * FROM province ORDER BY titre ASC");
													while($province=mysql_fetch_array($query_province)){
														if($defaut_province==""){
															$defaut_province=$province['titre'];
															$id_defaut_province=$province[0];
														}
												  ?>
													<option value="<?= $province['reference'] ?>"><?= $province['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-graphe-region"></div>
										  </div>
									  </div>

									  <div class="stab-onglet" id="stab-bande-departement" >
										  <div class="wrap-content-tab" >
											   <div class="wrap-select"><select name="select-graphe-ville" class="select-graphe" id="select-graphe-ville">
												  <?php 
													$query_ville=mysql_query("SELECT * FROM ville ORDER BY titre ASC");
													while($ville=mysql_fetch_array($query_ville)){
												  ?>
													<option value="<?= $ville['reference'] ?>"><?= $ville['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-graphe-departement"></div>
										  </div>
									  </div>

									  <div class="stab-onglet" id="stab-bande-ville" >
										  <div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-commune" class="select-graphe" id="select-graphe-commune">
												  <?php 
													$query_commune=mysql_query("SELECT * FROM province ORDER BY titre ASC");
													while($commune=mysql_fetch_array($query_commune)){
												  ?>
													<option value="<?= $commune['reference'] ?>"><?= $commune['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-graphe-ville"></div>
										  </div>
									  </div>

									  <div class="stab-onglet" id="stab-bande-commune" >
										  <div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-quartier" class="select-graphe" id="select-graphe-quartier">
												  <?php 
													$query_quartier=mysql_query("SELECT * FROM quartier ORDER BY titre ASC");
													while($quartier=mysql_fetch_array($query_quartier)){
												  ?>
													<option value="<?= $quartier['reference'] ?>"><?= $quartier['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-graphe-commune"></div>
										  </div>
									  </div>
									  <div class="stab-onglet" id="stab-bande-autre" >
										  <div class="wrap-content-tab" >
											  
											  <div class="wrap-content-graphe" id="wrap-graphe-autre"></div>
										  </div>
									  </div>
									  <div class="stab-onglet" id="stab-bande-nationalite" >
										  <div class="wrap-content-tab" >
											  
											  <div class="wrap-content-graphe" id="wrap-graphe-nationalite"></div>
										  </div>
									  </div>

								  </div>
								  
									<table id="datatable-province-histogramme">
										<thead>
											<tr>
												<th></th>
												<th>Total</th>
												<th>Hommes</th>
												<th>Femmes</th>
												<th>Jeunes</th>
											</tr>
										</thead>
										<tbody>
										   <?php 
											$query_province="SELECT * FROM province ORDER BY reference ASC ";
											$result_province=mysql_query($query_province);
											while($province=mysql_fetch_array($result_province)){

												$total=GetNombreMembreProvinceIndicateur("total", $province[0]);
												$homme=GetNombreMembreProvinceIndicateur("homme", $province[0]);
												$femme=GetNombreMembreProvinceIndicateur("femme", $province[0]);
												$jeune=GetNombreMembreProvinceIndicateur("jeune", $province[0]);
										   ?>
											<tr>
												<th><?php echo utf8_encode($province["titre"])?></th>
												<td><?php echo $total?></td>
												<td><?php echo $homme?></td>
												<td><?php echo $femme?></td>
												<td><?php echo $jeune?></td>
											</tr>
											<?php }?>

										</tbody>
									</table>
									<div id="div_datatable-departement-histogramme">
										<table id="datatable-departement-histogramme">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
													<th>Hommes</th>
													<th>Femmes</th>
													<th>Jeunes</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_departement="SELECT * FROM departement WHERE idprovince='$id_defaut_province' ORDER BY reference ASC ";
												$result_departement=mysql_query($query_departement);
												while($departement=mysql_fetch_array($result_departement)){

													$total=GetNombreMembreDepartementIndicateur("total", $departement[0]);
													$homme=GetNombreMembreDepartementIndicateur("homme", $departement[0]);
													$femme=GetNombreMembreDepartementIndicateur("femme", $departement[0]);
													$jeune=GetNombreMembreDepartementIndicateur("jeune", $departement[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($departement["titre"])?></th>
													<td><?php echo $total?></td>
													<td><?php echo $homme?></td>
													<td><?php echo $femme?></td>
													<td><?php echo $jeune?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
