		<table id="liste-page" class="liste-page" cellspacing="1">
			<thead>
				<tr style="text-align: left">
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>

					<th></th>
					<th>R&eacute;f</th>
					<th>Date</th>
					<th>Client</th>
					<th>Montant</th>															
					<th>Dur&eacute;e</th>
					<th>Agence</th>
					<th>ville de r&eacute;sidence</th>
					<th>T&eacute;l&eacute;phone</th>
					<th>Resume</th>
				</tr>
			</thead>


			<tbody id="tbody-dossier">

	<?php 

	  while($demandeur=mysql_fetch_array($result_demandeur)){
		  $agence=getAgenceInformations($demandeur["agence"]);
		  $ville=getvilleInformations($demandeur["ville"]);
		  $class_etat=GetClassEtatDossier($demandeur[0]);
		  $clotureur= getadministrateurinformations($demandeur["cloture_par"]);
	 ?>
				<tr id="tr_dossier1">															

					<td class="colonne-tab etat-dossier <?php echo $class_etat?>" id="td-couleur-tout<?php echo $demandeur[0]?>">
					</td>

					<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=detail-demande")?>','loader');" data-tooltip="D&eacute;tails"><i class="fa fa-eye"></i></a></td>	

					<td class="colonne-tab detail-line attach"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=piece-justificative&iddemandeur=$demandeur[0]")?>','loader');" data-tooltip="<?php if(LeDossierDemandeurNaAucuneJustif($demandeur[0])==0) echo "Aucune pièce justificative"; else echo"Voir les pièces justificatives "?>"><i class="fa fa-files-o"></i></a></td>	

					<td class="colonne-tab edit-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=suivi-dossier")?>','loader');" data-tooltip="Ecrire à <?php echo $demandeur["nom"]." ".$demandeur["prenom"]?>"><i class="fa fa-comments-o"></i></a>
					</td>
					<?php if($demandeur["cloture"]==0){?>
					<td class="colonne-tab fermeture-dossier" id="td-cloture-tout<?php echo $demandeur[0]?>"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=cloture-dossier")?>','loader');" data-tooltip="Clôturer le dossier"><i class="fa fa-unlock-alt"></i></a></td>
					<?php }else{?>
					<td class="colonne-tab fermeture-dossier cloture" id="td-cloture-tout<?php echo $demandeur[0]?>"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=cloture-dossier")?>','loader');" data-tooltip="Dossier clôtur&eacute; par <?php echo $clotureur["nom"]." ".$clotureur["prenom"]?> "><i class="fa fa-lock"></i></a></td>
					<?php }?>
					<td class="colonne-tab delete-line"><a href="javascript:Notification_suppression_dossier('<?php echo base64_encode("traitement_ajax/main.php?traitement=supprimer-dossier")?>', '<?php echo $demandeur[0]?>', '<?php echo $_SESSION["token"]?>','<?php echo $deja_operationel?>')" data-tooltip="Mettre dans la corbeille"><i class="fa fa-trash"></i></a>
					</td>
					<td>#0<?php echo $demandeur[0]?></td>
					<td><strong><?php echo getdatedetaille($demandeur["date_creation"], $demandeur["heure_creation"])?></strong></td>
					<td><strong><?php echo $demandeur["nom"]." ".$demandeur["prenom"] ;?></strong></td>
					<td><strong><?php echo number_format($demandeur["montant_souhaite"], 0, ',', ' '); ?> </strong></td>
					<td style="text-align: center"><strong><?php echo $demandeur["duree_credit"]?></strong></td>
					<td><?php if($agence!=false) echo "<strong>".$agence["titre"]."</strong>"; else echo "Pas encore renseign&eacute;e"?></td>
					<td><?php if($ville!=false) echo  "<strong>".$ville["titre"]."</strong>"; else echo "Pas encore renseign&eacute;e"?></td>
					<td><strong><?php echo $demandeur["telephone"]?></strong></td>
					<td id="td-resume-tout<?php echo $demandeur[0]?>"><?php  echo GetLibelleEtatDossier($demandeur[0])?></td>
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
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-tous-dossiers")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','1','loader')" class="wrap-pagination">D&eacute;but</a>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-tous-dossiers")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active-1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>
			 <?php }?>
				<?php if($page_debut>1){?>
				<span class="void-pagination">...</span>
				<?php }?>
								
			   <?php 
				  $active="";
				  for($i=$page_debut; $i<=$page_fin; $i++){
					  if($page_active==$i)$active="actif"; else $active="";
				?>
					<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-tous-dossiers")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
				<?php }?>
				<?php if($i<=$nbpage){?>
			<span class="void-pagination">...</span>
			   <?php }?>
			 <?php if($page_active<$nbpage){?>  
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-tous-dossiers")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
			<a href="" class="wrap-pagination">Fin</a>
			<?php }?>
			<?php }?>																

		</div>
		
	</div>
</div>
		   
