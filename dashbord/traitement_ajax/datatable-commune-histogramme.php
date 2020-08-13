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
								$query_quartier="SELECT * FROM quartier WHERE idcommune='$lacommune[0]'  ORDER BY reference ASC ";
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
