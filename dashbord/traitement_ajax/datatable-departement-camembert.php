						<table id="datatable-commune-camembert">
							<thead>
								<tr>
									<th></th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							   <?php 
								$query_commune="SELECT * FROM commune WHERE iddepartement='$ladepartement[0]'  ORDER BY reference ASC ";
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
