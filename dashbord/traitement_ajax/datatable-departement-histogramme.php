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
								$query_commune="SELECT * FROM commune WHERE iddepartement='$ladepartement[0]'  ORDER BY reference ASC ";
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
