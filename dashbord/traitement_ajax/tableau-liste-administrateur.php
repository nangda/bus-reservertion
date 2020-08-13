		<table class="liste-page">

				<thead>

					<tr style="text-align: left">

						<th></th>

						<th></th>

						<th></th>

						<th></th>

						<th></th>

						<th>Nom & Pr&eacute;nom</th>

						<th>Profil</th>

						<th>Agence d'affectation</th>

						<th>T&eacute;l&eacute;phone</th>															

						<th>E-mail</th>

						<th>P&eacute;riode</th>
						<th>ACCES AUX DOSSIERS</th>

					</tr>

				</thead>



				<tbody id="tbody-administrateur">

				<?php 

					$i=0;
					$result_administrateur=mysql_query($query_administrateur);			

					while($administrateur=mysql_fetch_array($result_administrateur)){

					   $agence=getagenceInformations($administrateur["idagence"]);
					if($administrateur["etat"]=="0"){
						$class="";

						$title="Valider l'enregistrement";
					}elseif($administrateur["etat"]=="1"){
						$class="validated";
						$title="d&eacute;j&agrave; valid&eacute; ";
					}

						$i++;
						$deja_operationel=0;//administrateurDejaoperationnel($idadministrateur);

					if($droit_dacces["editer_administrateur"]==1)$url_editer="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=editer-administrateur")."','loader');";
					else $url_editer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

					if($droit_dacces["valider_administrateur"]==1)$url_valider="javascript:Valider_administrateur('".base64_encode("traitement_ajax/main.php?traitement=valider-administrateur")."', '$administrateur[0]', '".$_SESSION["token"]."', '".$administrateur["etat"]."')";
					else $url_valider="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

					if($droit_dacces["supprimer_administrateur"]==1)$url_supprimer="javascript:Notification_suppression_administrateur('". base64_encode("traitement_ajax/main.php?traitement=supprimer-administrateur")."', '$administrateur[0]', '".$_SESSION["token"]."',' $deja_operationel')";
					else $url_supprimer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";



				  ?>

					<tr id="tr_administrateur<?php echo $administrateur[0]?>">

						<td class="colonne-tab edit-line"><a href="<?php echo $url_editer ?>"><i class="fa fa-pencil"></i></a>

						</td>

						<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?idadministrateur=$administrateur[0]&traitement=detail-administrateur")?>','loader');"><i class="fa fa-eye"></i></a></td>

						<td class="colonne-tab detail-line"> <a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?traitement=droit-administrateur&idadministrateur=$administrateur[0]")?>','loader',allCheck);">	<i class="fa fa-lock"></i></a></td>

						<td class="colonne-tab <?php echo $class?>" id="valider-administrateur<?php echo $administrateur[0]?>"><a href="<?php echo $url_valider ?>"><i class="fa fa-check-circle"></i></a>

						</td>

						<td class="colonne-tab delete-line"><a href="<?php echo $url_supprimer ?>"><i class="fa fa-trash"></i></a>

						</td>

						<td id="nom-administrateur<?php echo $administrateur[0]?>"><?php echo utf8_decode($administrateur["nom"])?> <?php echo utf8_decode($administrateur["prenom"])?></td>

						<td id="fonction-administrateur<?php echo $administrateur[0]?>">
						  <? if($administrateur["fonction"]!="Charge_daccueil")echo $administrateur["fonction"]; else echo "Charg&eacute;(e) d'accueil" ?>

						  </td>

						<td id="ville-administrateur<?php echo $administrateur[0]?>"><? echo utf8_decode($agence["titre"]); ?></td>

						<td id="telephone-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["telephone"]; ?></td>

						<td id="email-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["email"]; ?></td>

						<td id="periode-administrateur<?php echo $administrateur[0]?>"><? echo $administrateur["date_debut"]; ?> - <? echo $administrateur["date_fin"]; ?></td>

						<td id="acces-administrateur<?php echo $administrateur[0]?>">

							<?php echo utf8_decode(getLibelleDroitAccesDossiers($administrateur[0])) ?> 	
						</td>



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
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','1','loader')" class="wrap-pagination">D&eacute;but</a>
				<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active-1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-left"></i></a>
			 <?php }?>
				<?php if($page_debut>1){?>
				<span class="void-pagination">...</span>
				<?php }?>
								
			   <?php 
				  $active="";
				  for($i=$page_debut; $i<=$page_fin; $i++){
					  if($page_active==$i)$active="actif"; else $active="";
				?>
					<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $i ?>','loader')" class="wrap-pagination <?php echo $active?>"><?php echo $i?></a> 
				<?php }?>
				<?php if($i<=$nbpage){?>
			<span class="void-pagination">...</span>
			   <?php }?>
			 <?php if($page_active<$nbpage){?>  
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $page_active+1 ?>','loader')" class="wrap-pagination"><i class="fa fa-angle-right"></i> </a>
			<a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/main.php?traitement=rechercher-administrateur")?>','<?php echo $idformulaire?>','<?php echo $idconteneur_resultat?>','<? echo $nbpage ?>','loader')" class="wrap-pagination">Fin</a>
			<?php }?>
			<?php }?>																

		</div>
		
	</div>
</div>
