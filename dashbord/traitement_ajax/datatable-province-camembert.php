						<table id="datatable-departement-camembert">
							<thead>
								<tr>
									<th></th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							   <?php 
								$query_departement="SELECT * FROM departement WHERE idprovince='$laprovince[0]'  ORDER BY reference ASC ";
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
