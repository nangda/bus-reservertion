								  <div class="bloc-page  bloc-graphe  bloc-graphe-mois box-shaldow" id="tab-camembert">


									  <ul class="wrap-songlet-tab">
										  <li class="songlet-tab actif" data-id="wrap-chart-camembert">Accueil</li>
										  <li class="songlet-tab" data-id="stab-camembert-region">Province</li>
										  <li class="songlet-tab" data-id="stab-camembert-departement">D&eacute;partement</li>
										  <li class="songlet-tab" data-id="stab-camembert-ville">Ville</li>
										  <li class="songlet-tab" data-id="stab-camembert-commune">Commune</li>
										  <li class="songlet-tab" data-id="stab-camembert-autre">Hors du Gabon</li>
										  <li class="songlet-tab" data-id="stab-camembert-nationalite">Nationalit&eacute;s</li>
									  </ul>
									  <div class="stab-onglet " id="wrap-chart-camembert" style="display: block">

									  </div>

									  <div class="stab-onglet" id="stab-camembert-region">
											<div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-departement-camembert" class="select-graphe" id="select-graphe-departement-camembert" onChange="Select_province_camembert('<?php echo base64_encode("traitement_ajax/traitement-camembert-province.php")?>','<?php echo $_SESSION["token"] ?>');">
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
											  <div class="wrap-content-graphe"  id="wrap-camembert-region"></div>
										  </div>
									  </div>
									  <div class="stab-onglet" id="stab-camembert-departement">
										<div class="wrap-content-tab" >
											   <div class="wrap-select"><select name="select-graphe-commune-camembert" class="select-graphe" id="select-graphe-commune-camembert" onChange="Select_departement_camembert('<?php echo base64_encode("traitement_ajax/traitement-camembert-departement.php")?>','<?php echo $_SESSION["token"] ?>');">
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
											  <div class="wrap-content-graphe" id="wrap-camembert-departement"></div>
										  </div>
									  </div>
									  <div class="stab-onglet" id="stab-camembert-ville">
											<div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-ville-camembert" class="select-graphe" id="select-graphe-ville-camembert" onChange="Select_ville_camembert('<?php echo base64_encode("traitement_ajax/traitement-camembert-ville.php")?>','<?php echo $_SESSION["token"] ?>');">
												  <?php 
													$query_commune=mysql_query("SELECT * FROM province ORDER BY titre ASC");
													while($commune=mysql_fetch_array($query_commune)){
												  ?>
													<option value="<?= $commune['reference'] ?>"><?= $commune['titre'] ?></option>
												  <?php } ?>
											  </select></div>
											  <div class="wrap-content-graphe" id="wrap-camembert-ville"></div>
										  </div>
									  </div>
									  <div class="stab-onglet" id="stab-camembert-commune">
										 <div class="wrap-content-tab" >
											  <div class="wrap-select"><select name="select-graphe-quartier-camembert" class="select-graphe" id="select-graphe-quartier-camembert" onChange="Select_commune_camembert('<?php echo base64_encode("traitement_ajax/traitement-camembert-commune.php")?>','<?php echo $_SESSION["token"] ?>');">
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
											  <div class="wrap-content-graphe" id="wrap-camembert-commune"></div>
										  </div>
									  </div>
									  <div class="stab-onglet" id="stab-camembert-autre">

									  </div>
									  <div class="stab-onglet" id="stab-camembert-nationalite">

									  </div>

								  </div>

									<table id="datatable-province-camembert" style="display: none">
										<thead>
											<tr>
												<th></th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
										   <?php 
											$query_province="SELECT * FROM province ORDER BY reference ASC ";
											$result_province=mysql_query($query_province);
											while($province=mysql_fetch_array($result_province)){

												$total=GetNombreMembreProvinceIndicateur("total", $province[0]);
										   ?>
											<tr>
												<th><?php echo ($province["titre"])?></th>
												<td><?php echo $total?></td>
											</tr>
											<?php }?>

										</tbody>
									</table>
									<div id="div_datatable-departement-camembert" style="display: none">
										<table id="datatable-departement-camembert">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_departement="SELECT * FROM departement WHERE idprovince='$id_defaut_province' ORDER BY reference ASC ";
												$result_departement=mysql_query($query_departement);
												while($departement=mysql_fetch_array($result_departement)){

													$total=GetNombreMembreDepartementIndicateur("total", $departement[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($departement["titre"])?></th>
													<td><?php echo $total?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
									<div id="div_datatable-commune-camembert" style="display: none">
										<table id="datatable-commune-camembert">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_commune="SELECT * FROM commune WHERE iddepartement='$id_defaut_departement' ORDER BY reference ASC ";
												$result_commune=mysql_query($query_commune);
												while($commune=mysql_fetch_array($result_commune)){

													$total=GetNombreMembrecommuneIndicateur("total", $commune[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($commune["titre"])?></th>
													<td><?php echo $total?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
									<div id="div_datatable-ville-camembert" style="display: none">
										<table id="datatable-ville-camembert">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_ville="SELECT * FROM ville WHERE idprovince='$id_defaut_province' ORDER BY reference ASC ";
												$result_ville=mysql_query($query_ville);
												while($ville=mysql_fetch_array($result_ville)){

													$total=GetNombreMembrevilleIndicateur("total", $ville[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($ville["titre"])?></th>
													<td><?php echo $total?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>

									<div id="div_datatable-quartier-camembert" style="display: none">
										<table id="datatable-quartier-camembert">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_quartier="SELECT * FROM quartier WHERE idcommune='$id_defaut_commune' ORDER BY reference ASC ";
												$result_quartier=mysql_query($query_quartier);
												while($quartier=mysql_fetch_array($result_quartier)){

													$total=GetNombreMembrequartierIndicateur("total", $quartier[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($quartier["titre"])?></th>
													<td><?php echo $total?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
									</div>
										<table id="datatable-hors-gabon-camembert" style="display: none">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_pays="SELECT DISTINCT pays FROM  membre WHERE pays!='GABON' ORDER BY pays ASC ";
												$result_pays=mysql_query($query_pays);
												while($pays=mysql_fetch_array($result_pays)){

													$total=GetNombreMembrePaysIndicateur("total", $pays[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($pays[0])?></th>
													<td><?php echo $total?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>
										<table id="datatable-nationalite-camembert" style="display: none">
											<thead>
												<tr>
													<th></th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											   <?php 
												$query_nationalite="SELECT DISTINCT nationalite FROM  membre  ORDER BY nationalite ASC ";
												$result_nationalite=mysql_query($query_nationalite);
												while($nationalite=mysql_fetch_array($result_nationalite)){

													$total=GetNombreMembrenationaliteIndicateur("total", $nationalite[0]);
											   ?>
												<tr>
													<th><?php echo utf8_encode($nationalite[0])?></th>
													<td><?php echo $total?></td>
												</tr>
												<?php }?>

											</tbody>
										</table>

