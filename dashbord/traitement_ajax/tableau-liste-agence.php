<table id="liste-page">
	<thead>
		<tr>
			<?php if($droit_dacces["editer_agence"]==1){?><th></th><?php }?>
			<th></th>
			<?php if($droit_dacces["valider_agence"]==1){?><th></th><?php }?>
			<?php if($droit_dacces["supprimer_agence"]==1){?><th></th><?php }?>
			<th>Agence</th>
			<th>R&eacute;ference</th>
			<th>T&eacute;l&eacute;phone</th>
			<th>Email</th>
			<th>Ville</th>
			<th>R&eacute;gion</th>
			<th>zone</th>
		</tr>
	</thead>

	<tbody id="tbody-agence">
	<?php 
		$i=0;
		$result_agence=mysql_query($query_agence);			
		while($agence=mysql_fetch_array($result_agence)){

		$region=getregioninformations($agence["idregion"]);
		$ville=getvilleinformations($agence["idville"]);
		$deja_operationel=agenceDejaoperationnel($agence[0]);

		if($agence["etat"]=="0"){

			$class="";
			$title="Valider l'enregistrement";

		}elseif($agence["etat"]=="1"){

			$class="validated";
			$title="d&eacute;j&agrave; valid&eacute; ";

		}
			$i++;
			
		if($droit_dacces["editer_agence"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idagence=$agence[0]&traitement=editer-agence")."','loader');";
		else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

		if($droit_dacces["valider_agence"]==1)$url_valider="javascript:Valider_agence('".base64_encode("traitement_ajax/main.php?traitement=valider-agence")."', '$agence[0]', '".$_SESSION["token"]."', '".$agence["etat"]."')";
		else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

		if($droit_dacces["supprimer_agence"]==1)$url_supprimer="javascript:Notification_suppression_agence('". base64_encode("traitement_ajax/main.php?traitement=supprimer-agence")."', '$agence[0]', '".$_SESSION["token"]."',' $deja_operationel')";
		else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";


	  ?>

	  <tr id="tr_agence<?php echo $agence[0]?>">
		 <?php if($droit_dacces["editer_agence"]==1){?>
			<td class="colonne-tab edit-line"><a href="<?php echo $url_editer?>"><i class="fa fa-pencil"></i></a>
			</td>
			<?php }?>
			<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idagence=$agence[0]&traitement=detail-agence")?>','loader');"><i class="fa fa-eye"></i></a></td>
			<?php if($droit_dacces["valider_agence"]==1){?>
			<td class="colonne-tab <?php echo $class?>" id="valider-agence<?php echo $agence[0]?>"><a href="<?php echo $url_valider?>"><i class="fa fa-check-circle"></i></a>
			</td>
			<?php }?>
			<?php if($droit_dacces["supprimer_agence"]==1){?>
			<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer?>"><i class="fa fa-trash"></i></a>
			</td>
			<?php }?>
			<td id="nom-agence<?php echo $agence[0]?>"><?php echo utf8_decode($agence["titre"])?></td>
			<td id="reference-agence<?php echo $agence[0]?>"><? echo $agence["reference"]; ?></td>
			<td id="telephone-agence<?php echo $agence[0]?>"><? echo $agence["telephone"]; ?></td>
			<td id="email-agence<?php echo $agence[0]?>"><? echo $agence["email"]; ?></td>
			<td id="ville-agence<?php echo $agence[0]?>"><? echo utf8_decode($ville["titre"]); ?></td>
			<td id="region-agence<?php echo $agence[0]?>"><? echo utf8_decode($region["titre"]); ?></td>
			<td id="zone-agence<?php echo $agence[0]?>"><? echo utf8_decode($agence["zone"]); ?></td>

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
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','1','loader')" class="wrap-pagination">D&eacute;but</a>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active-1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>
			 <?php }?>
				<?php if($page_debut>1){?>
				<span class="void-pagination">...</span>
				<?php }?>
								
			   <?php 
				  $active="";
				  for($i=$page_debut; $i<=$page_fin; $i++){
					  if($page_active==$i)$active="actif"; else $active="";
				?>
					<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
				<?php }?>
				<?php if($i<=$nbpage){?>
			<span class="void-pagination">...</span>
			   <?php }?>
			 <?php if($page_active<$nbpage){?>  
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-agence")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
			<a href="" class="wrap-pagination">Fin</a>
			<?php }?>
			<?php }?>																

		</div>
		
	</div>
</div>
