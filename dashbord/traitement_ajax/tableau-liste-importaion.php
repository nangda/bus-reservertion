		<table id="liste-page">
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th>Agence</th>
					<th>Num&eacute;ro compte</th>
					<th>Cl&eacute;</th>
					<th>Gestionnaire</th>
					<th>Code gestionnaire</th>
					<th>Email gestionnaire</th>
				</tr>
			</thead>

			<tbody id="tbody-agence">
			<?php 
				$i=0;
				 $result_importation=mysql_query($query_importation);
				 while($importation=mysql_fetch_array($result_importation)){


				if($importation["etat"]=="0"){

					$class="";
					$title="Valider l'enregistrement";

				}elseif($importation["etat"]=="1"){

					$class="validated";
					$title="d&eacute;j&agrave; valid&eacute; ";

				}
					$i++;

			  ?>

			  <tr id="tr_importation<?php echo $importation[0]?>">

					<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idimportation=$importation[0]&traitement=detail-importation")?>','loader');" data-tooltip="Détails"><i class="fa fa-eye"></i></a></td>
					<td class="colonne-tab <?php echo $class?>" id="valider-importation<?php echo $importation[0]?>"><a href="javascript:Valider_importation('<?php echo base64_encode("traitement_ajax/main.php?traitement=valider-importation")?>', '<?php echo $importation[0]?>', '<?php echo $_SESSION["token"]?>', '<?php echo $importation["etat"]?>')" data-tooltip="<?php echo $title ?>"><i class="fa fa-check-circle"></i></a>
					</td>
					<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_importation('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-importation")?>', '<?php echo $importation[0]?>', '<?php echo $_SESSION["token"]?>')" data-tooltip="Supprimer"><i class="fa fa-trash"></i></a>
					</td>
					<td><?php echo $importation["code_agence"]?></td>
					<td><? echo $importation["numero_compte"]; ?></td>
					<td><? echo $importation["cle_compte"]; ?></td>
					<td><? echo $importation["nom_gestionnaire"]; ?></td>
					<td><? echo $importation["code_gestionnaire"]; ?></td>
					<td><? echo $importation["email_gestionnaire"]; ?></td>

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

			<?php if ($total>$page){ ?>
			  <?php if($page_active>1){?>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','1','loader')" class="wrap-pagination">D&eacute;but</a>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active-1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>
			 <?php }?>
				<?php if($page_debut>1){?>
				<span class="void-pagination">...</span>
				<?php }?>
								
			   <?php 
				  $active="";
				  for($i=$page_debut; $i<=$page_fin; $i++){
					  if($page_active==$i)$active="actif"; else $active="";
				?>
					<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
				<?php }?>
				<?php if($i<=$nbpage){?>
			<span class="void-pagination">...</span>
			   <?php }?>
			 <?php if($page_active<$nbpage){?>  
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-importation")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
			<?php }?>
			<?php }?>																

		</div>
		
	</div>
</div>
		   
