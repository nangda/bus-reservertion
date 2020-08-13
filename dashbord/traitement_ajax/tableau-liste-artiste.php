<table id="liste-page">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th align="left">Photo</th>
			<th align="left">Nom d'artiste</th>
			<th align="left">Nom et pr&eacute;nom </th>
			<th align="left">T&eacute;l&eacute;phone</th>
			<th align="left">E-mail</th>
			<th align="left">Nationalit&eacute;</th>
			<th align="left">Site & reseaux sociaux</th>
		</tr>
	</thead>

	<tbody id="tbody-membre">
				<?php 
			$i=0;
			unset($membre);
			while($artiste=mysql_fetch_array($result_artiste)){


				$url_supprimer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-confirmation-suppression-artiste.php?idtontine=$latontine[0]&idoperation=$operation[0]")."','loader');";
				$url_modifier="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/lightbox-ajouter-operation.php?idtontine=$latontine[0]&idoperation=$operation[0]")."','loader', initDatePaiement);";


				$i++;

		  ?>
		<tr id="tr_membre32">
			<td class="colonne-tab edit-line">
			   <a href="<?php echo $url_modifier?>"> <i class="fa fa-pencil"></i></a>
			</td>
			<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-detail-artiste.php?idartiste=$artiste[0]")?>','loader');"><i class="fa fa-eye"></i></a>
			</td>
			<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/lightbox-description-artiste.php?idartiste=$artiste[0]")?>','loader');"><i class="fa fa-info-circle"></i></a>
			</td>
			<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_membre('dHJhaXRlbWVudF9hamF4L3RyYWl0ZW1lbnRfc3VwcHJpbWVyX21lbWJyZS5waHA=', '32', '177126c6b8186ac7cb96702b9fc04f4016a36c57ccbf01d7e4dc29865e03cfe3')"><i class="fa fa-trash"></i></a>
			</td>
			<td align="left">
				<div class="wrap-bloc-artiste">
					<div class="img-artiste">
				  <?php if($artiste["portrait"]!=""){?>
					  <img src="http://www.gilzik.com/images/img_artistes/<?php echo $artiste["portrait"]?>" alt="">
				  <?php }?>
					</div>
				</div>
			</td>
			<td align="left"><?php echo utf8_encode($artiste["nom_dartiste"]) ?></td>
			<td align="left"><?php echo utf8_encode($artiste["nom"])?><span class="nationalite-ligne-user">&nbsp;-&nbsp;<?php echo utf8_encode($artiste["pseudo"])?> </span></td>
			<td align="left"><?php echo $artiste["telephone"]?></td>
			<td align="left"><?php echo $artiste["email"]?></td>
			<td align="left"><?php echo $artiste["nationalite"]?></td>
			<td align="left">
				<div class="wrapper-social">
					<a href=""><i class="fa fa-internet-explorer"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
				</div>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>

<?php 
		$page_debut=$page_encours-$marge;
		if($page_debut<=0)$page_debut=1; 
		$page_fin=$page_debut+$pagination-1;
		//$page_fin=$page_encours+$marge;
		if($page_fin>$nbtotalpage)$page_fin=$nbtotalpage; 
 
        if(($page_fin-$page_debut+1)%$pagination!=0)$page_debut=$page_fin-$pagination+1;
        if($page_debut<=0)$page_debut=1;

?>

<?php if($nbtotalpage>1){?>

<div class="conteneur-pagination">
   <?php if($page_encours>1){?>
	<div class="wrap-pagination"><a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/traitement_recherche_artiste.php")?>','form-recherche-artiste','liste-artiste','<?php echo $page_encours-1?>','loader')" class="pagination">Pr&eacute;cedent</a></div>
	<?php }?>
	<?php 
		for($i=$page_debut; $i<=$page_fin; $i++){
			if($i==$page_encours)$actif="actif";
			else $actif="";

	?>
		<div class="wrap-pagination"><a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/traitement_recherche_artiste.php")?>','form-recherche-artiste','liste-artiste','<?php echo $i?>','loader')" class="pagination <?php echo $actif?>" ><?php echo $i?></a></div>
	<?php }?>
   <?php if($nbtotalpage>$page_encours){?>
	<div class="wrap-pagination"><a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/traitement_recherche_artiste.php")?>','form-recherche-artiste','liste-artiste','<?php echo $page_encours+1?>','loader')" class="pagination">Suivant</a></div>
	<?php }?>
</div>
<?php }?>
