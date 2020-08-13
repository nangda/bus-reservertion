<table class="liste-page">

	<thead>

		<tr style="text-align: left">
			<th></th>
			<th></th>
			<th>TYPE</th>
			<th>Nom et pr&eacute;nom</th>
			<th>Date de visite</th>
			<th>Adresse IP</th>
			<th>Page visit&eacute;e</th>
			<th>Operation</th>
			<th>Libell&eacute;</th>
		</tr>

	</thead>

<?php //echo $qury_visite?>

	<tbody id="tbody-visite">

	<?php 

		$i=$debut;
		$result_visite=mysql_query($query_visite);			

		while($visite=mysql_fetch_array($result_visite)){


			$i++;


		if($droit_dacces["supprimer_visite"]==1)$url_supprimer="javascript:Notification_suppression_visite('". base64_encode("traitement_ajax/main.php?traitement=supprimer-visite")."', '$visite[0]', '".$_SESSION["token"]."',' $deja_operationel')";
		else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'visite','OK','','','','1');";



	  ?>

		<tr id="tr_visite<?php echo $visite[0]?>" style="text-align: left">

			<td class="colonne-tab edit-line"><?php echo $i ?></a>

			</td>



			<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer ?>"><i class="fa fa-trash"></i></a>

			</td>

			<td id="nom-visite<?php echo $visite[0]?>"><?php echo utf8_decode($visite["type"])?></td>
			<td id="nom-visite<?php echo $visite[0]?>"><?php echo utf8_decode($visite["compte"])?></td>

			<td id="fonction-visite<?php echo $visite[0]?>"><? echo getdatedetaille($visite["date"],$visite["heure"] ); ?></td>

			<td id="visite-visite<?php echo $visite[0]?>"><? echo $visite["ip"]; ?></td>

			<td id="telephone-visite<?php echo $visite[0]?>"><? echo $visite["page"]; ?></td>

			<td id="email-visite<?php echo $visite[0]?>"><? echo $visite["operation"]; ?></td>
			<td id="email-visite<?php echo $visite[0]?>"><? echo utf8_decode($visite["libelle"]); ?></td>

	  </tr>



	<?php }?>

	</tbody>


</table>

		<div class="wrapper-pagination">
		<div class="pagination">
			<div class="wrapper-pagination-left">
				<span class="nb-result"><?php echo $total?></span> r&eacute;sulats - Page <span class="number-page"><?php echo $page_active?></span> sur <span class="total-page"><?php echo $nbpage?></span>
			</div>
															
	
		<div class="wrapper-pagination-right">

			<?php if ($total>$nbligneparpage){ ?>
			  <?php if($page_active>1){?>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','1','loader')" class="wrap-pagination">D&eacute;but</a>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active-1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>
			 <?php }?>
				<?php if($page_debut>1){?>
				<span class="void-pagination">...</span>
				<?php }?>
								
			   <?php 
				  $active="";
				  for($i=$page_debut; $i<=$page_fin; $i++){
					  if($page_active==$i)$active="actif"; else $active="";
				?>
					<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
				<?php }?>
				<?php if($i<=$nbpage){?>
			<span class="void-pagination">...</span>
			   <?php }?>
			 <?php if($page_active<$nbpage){?>  
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-visite")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
			<?php }?>
			<?php }?>																

		</div>
		
	</div>
</div>
		   
