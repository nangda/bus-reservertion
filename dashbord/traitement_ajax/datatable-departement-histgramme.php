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
								$query_departement="SELECT * FROM departement WHERE idprovince='$laprovince[0]'  ORDER BY reference ASC ";
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
