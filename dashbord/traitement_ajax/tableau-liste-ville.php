<table id="liste-page">
	<thead>
		<tr>
			<?php if($droit_dacces["editer_ville"]==1){?><th></th><?php }?>
			<th></th>
			<?php if($droit_dacces["valider_ville"]==1){?><th></th><?php }?>
			<?php if($droit_dacces["supprimer_ville"]==1){?><th></th><?php }?>
			<th>ville</th>
			<th>R&eacute;ference</th>
			<th>R&eacute;gion</th>
		</tr>
	</thead>

	<tbody id="tbody-ville">
	<?php 
		$i=0;
		 $result_ville=mysql_query($query_ville);
		while($ville=mysql_fetch_array($result_ville)){

		$region=getregioninformations($ville["idregion"]);
		$deja_operationel=villeDejaoperationnel($ville[0]);

		if($ville["etat"]=="0"){

			$class="";
			$title="Valider l'enregistrement";

		}elseif($ville["etat"]=="1"){

			$class="validated";
			$title="d&eacute;j&agrave; valid&eacute; ";

		}
			$i++;
			
			if($droit_dacces["editer_ville"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idville=$ville[0]&traitement=editer-ville")."','loader');";
			else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

			if($droit_dacces["valider_ville"]==1)$url_valider="javascript:Valider_ville('".base64_encode("traitement_ajax/main.php?traitement=valider-ville")."', '$ville[0]', '".$_SESSION["token"]."', '".$ville["etat"]."')";
			else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

			if($droit_dacces["supprimer_ville"]==1)$url_supprimer="javascript:Notification_suppression_ville('". base64_encode("traitement_ajax/main.php?traitement=supprimer-ville")."', '$ville[0]', '".$_SESSION["token"]."',' $deja_operationel')";
			else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";


	  ?>

	  <tr id="tr_ville<?php echo $ville[0]?>">
		<?php if($droit_dacces["editer_ville"]==1){?>
			<td class="colonne-tab edit-line"><a href="<?php echo $url_editer?>"><i class="fa fa-pencil"></i></a>
			</td>
		<?php }?>
			<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idville=$ville[0]&traitement=detail-ville")?>','loader');"><i class="fa fa-eye"></i></a></td>
			<?php if($droit_dacces["valider_ville"]==1){?>
			<td class="colonne-tab <?php echo $class?>" id="valider-ville<?php echo $ville[0]?>"><a href="<?php echo $url_valider?>"><i class="fa fa-check-circle"></i></a>
			</td>
			<?php }?>
			<?php if($droit_dacces["supprimer_ville"]==1){?>
			<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer?>"><i class="fa fa-trash"></i></a>
			</td>
			<?php }?>
			<td id="nom-ville<?php echo $ville[0]?>"><?php echo utf8_decode($ville["titre"])?></td>
			<td id="reference-ville<?php echo $ville[0]?>"><? echo utf8_decode($ville["reference"]); ?></td>
			<td id="region-ville<?php echo $ville[0]?>"><? echo utf8_decode($region["titre"]); ?></td>

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
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','1','loader')" class="wrap-pagination">D&eacute;but</a>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active-1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>
			 <?php }?>
				<?php if($page_debut>1){?>
				<span class="void-pagination">...</span>
				<?php }?>
								
			   <?php 
				  $active="";
				  for($i=$page_debut; $i<=$page_fin; $i++){
					  if($page_active==$i)$active="actif"; else $active="";
				?>
					<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
				<?php }?>
				<?php if($i<=$nbpage){?>
			<span class="void-pagination">...</span>
			   <?php }?>
			 <?php if($page_active<$nbpage){?>  
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-ville")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
			<?php }?>
			<?php }?>																

		</div>
		
	</div>
</div>
		   
