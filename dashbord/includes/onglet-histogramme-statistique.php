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
											   <div class="wrap-select">
											   <select name="select-graphe-commune" class="select-graphe" id="select-graphe-commune" onChange="Select_departement_histogramme('<?php echo base64_encode("traitement_ajax/traitement-histogramme-departement.php")?>','<?php echo $_SESSION["token"] ?>');">
												  <?php 
												    $defaut_departement="";
												    $id_defaut_departement="";
													$query_departement=mysql_query("SELECT * FROM departement ORDER BY titre ASC");
													while($departement=mysql_fetch_array($query_departement)){
														if($defaut_departement==""){
															$defaut_departement=$departement['titre'];
															$id_defaut_departement=$departement[0];
														}
												  ?>
													<option value="<?= $departement['reference'] ?>"><?= $departement['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-graphe-departement"></div>
										  </div>
									  </div>

									  <div class="stab-onglet" id="stab-bande-ville" >
										  <div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-ville" class="select-graphe" id="select-graphe-ville" onChange="Select_ville_histogramme('<?php echo base64_encode("traitement_ajax/traitement-histogramme-ville.php")?>','<?php echo $_SESSION["token"] ?>');">
												  <?php 
													$query_province=mysql_query("SELECT * FROM province ORDER BY titre ASC");
													while($province=mysql_fetch_array($query_province)){
												  ?>
													<option value="<?= $province['reference'] ?>"><?= $province['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-graphe-ville"></div>
										  </div>
									  </div>

									  <div class="stab-onglet" id="stab-bande-commune" >
										  <div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-quartier" class="select-graphe" id="select-graphe-quartier" onChange="Select_commune_histogramme('<?php echo base64_encode("traitement_ajax/traitement-histogramme-commune.php")?>','<?php echo $_SESSION["token"] ?>');">
												  <?php 
												    $defaut_commune="";
												    $id_defaut_commune="";
													$query_commune=mysql_query("SELECT * FROM commune ORDER BY titre ASC");
													while($commune=mysql_fetch_array($query_commune)){
														if($defaut_commune==""){
															$defaut_commune=$commune['titre'];
															$id_defaut_commune=$commune[0];
														}
												  ?>
													<option value="<?= $commune['reference'] ?>"><?= $commune['titre'] ?></option>
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
								  
									<table id="datatable-province-histogramme" style="display: none">
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
									<div id="div_datatable-departement-histogramme" style="display: none">
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
									<div id="div_datatable-commune-histogramme" style="display: none">
										<table id="datatable-commune-histogramme">
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
												$query_commune="SELECT * FROM commune WHERE iddepartement='$id_defaut_departement' ORDER BY reference ASC ";
												$result_commune=mysql_query($query_commune);
												while($commune=mysql_fetch_array($result_commune)){

													$total=GetNombreMembrecommuneIndicateur("total", $commune[0]);
													$homme=GetNombreMembrecommuneIndicateur("homme", $commune[0]);
													$femme=GetNombreMembrecommuneIndicateur("femme", $commune[0]);
													$jeune=GetNombreMembrecommuneIndicateur("jeune", $commune[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($commune["titre"])?></th>
													<td><?php echo $total?></td>
													<td><?php echo $homme?></td>
													<td><?php echo $femme?></td>
													<td><?php echo $jeune?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
									<div id="div_datatable-ville-histogramme" style="display: none">
										<table id="datatable-ville-histogramme">
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
												$query_ville="SELECT * FROM ville WHERE idprovince='$id_defaut_province' ORDER BY reference ASC ";
												$result_ville=mysql_query($query_ville);
												while($ville=mysql_fetch_array($result_ville)){

													$total=GetNombreMembrevilleIndicateur("total", $ville[0]);
													$homme=GetNombreMembrevilleIndicateur("homme", $ville[0]);
													$femme=GetNombreMembrevilleIndicateur("femme", $ville[0]);
													$jeune=GetNombreMembrevilleIndicateur("jeune", $ville[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($ville["titre"])?></th>
													<td><?php echo $total?></td>
													<td><?php echo $homme?></td>
													<td><?php echo $femme?></td>
													<td><?php echo $jeune?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
									<div id="div_datatable-quartier-histogramme" style="display: none">
										<table id="datatable-quartier-histogramme">
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
												$query_quartier="SELECT * FROM quartier WHERE idcommune='$id_defaut_commune' ORDER BY reference ASC ";
												$result_quartier=mysql_query($query_quartier);
												while($quartier=mysql_fetch_array($result_quartier)){

													$total=GetNombreMembrequartierIndicateur("total", $quartier[0]);
													$homme=GetNombreMembrequartierIndicateur("homme", $quartier[0]);
													$femme=GetNombreMembrequartierIndicateur("femme", $quartier[0]);
													$jeune=GetNombreMembrequartierIndicateur("jeune", $quartier[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($quartier["titre"])?></th>
													<td><?php echo $total?></td>
													<td><?php echo $homme?></td>
													<td><?php echo $femme?></td>
													<td><?php echo $jeune?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
										<table id="datatable-hors-gabon-histogramme" style="display: none">
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
												$query_pays="SELECT DISTINCT pays FROM  membre WHERE pays!='GABON' ORDER BY pays ASC ";
												$result_pays=mysql_query($query_pays);
												while($pays=mysql_fetch_array($result_pays)){

													$total=GetNombreMembrePaysIndicateur("total", $pays[0]);
													$homme=GetNombreMembrePaysIndicateur("homme", $pays[0]);
													$femme=GetNombreMembrePaysIndicateur("femme", $pays[0]);
													$jeune=GetNombreMembrePaysIndicateur("jeune", $pays[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($pays[0])?></th>
													<td><?php echo $total?></td>
													<td><?php echo $homme?></td>
													<td><?php echo $femme?></td>
													<td><?php echo $jeune?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
										<table id="datatable-nationalite-histogramme" style="display: none">
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
												$query_nationalite="SELECT DISTINCT nationalite FROM  membre  ORDER BY nationalite ASC ";
												$result_nationalite=mysql_query($query_nationalite);
												while($nationalite=mysql_fetch_array($result_nationalite)){

													$total=GetNombreMembrenationaliteIndicateur("total", $nationalite[0]);
													$homme=GetNombreMembrenationaliteIndicateur("homme", $nationalite[0]);
													$femme=GetNombreMembrenationaliteIndicateur("femme", $nationalite[0]);
													$jeune=GetNombreMembrenationaliteIndicateur("jeune", $nationalite[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($nationalite[0])?></th>
													<td><?php echo $total?></td>
													<td><?php echo $homme?></td>
													<td><?php echo $femme?></td>
													<td><?php echo $jeune?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
