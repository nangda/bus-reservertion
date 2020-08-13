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
								$query_ville="SELECT * FROM ville WHERE idprovince='$laprovince[0]'  ORDER BY reference ASC ";
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
