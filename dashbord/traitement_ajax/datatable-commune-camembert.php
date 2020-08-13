						<table id="datatable-quartier-camembert" style="display: none">
							<thead>
								<tr>
									<th></th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							   <?php 
								$query_quartier="SELECT * FROM quartier WHERE idcommune='$lacommune[0]'  ORDER BY reference ASC ";
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
