<div class="wrap-contain-onglet-page" id="tab-artiste" style="display: block;">
	<div class="contain-onglet-page">
		<h2 class="titre-tab">Liste des artistes</h2>

		<div id="wrap-table-artiste" class="conteneur-wrap-tab">

			<!--	CONTENU DE L'ONGLET DES PARTICIPANTS		-->
			<div class="contain-tab2" id="tab-artiste" style="display: block">
				<h2 class="titre-page">
					<div class="wrap-btn-plus-tab">
						<a href="" class="btn-filter"><i class="fa fa-filter"></i>Filter</a>
						<a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode(" lightbox/lightbox-ajouter-artiste.php ")?>','loader',initDatePaiement);" class="btn-add"><i class="fa fa-plus"></i>Ajouter un artiste</a>
					</div>
				</h2>
				<?php 
	                   $pagination=7;
	                   $page_encours=1;
	                   $marge=3;
	                   $nbligneparpage=10;
	                   $debut=0;
					   $query_artiste="SELECT * FROM artiste  ";
	                   if($profil=="MEMBRE")$query_artiste.=" AND idmembre='$lemembre[0]'";
	                   $query_artiste.="  ORDER BY idartiste DESC ";
	
	                   $result_artiste=mysql_query($query_artiste);
	                   $nbreponse=mysql_num_rows($result_artiste);
	                   $nbtotalpage=ceil($nbreponse/$nbligneparpage);
					   $query_artiste.=" LIMIT $debut, $nbligneparpage";
					   $result_artiste=mysql_query($query_artiste);
	                   
					   
				?>

				<div class="wrap-content-page">

					<p class="accroche-tab">Ci-dessous la liste des artistes.</p>

					<div class="conteneur-recherche-fiche">
						<form action="" id="form-recherche-artiste" class="formulaire-research form-recherche">
							<div class="form-group">
								<span class="text-recherche">Recherche rapide : </span>
							</div>
							<div class="form-group search-wrapper">
								<div class="libele-periode lib-periode">P&eacute;riode inscription</div>
								<div class="form-control">
									<label for="">
									  <input type="text" class="begening-date search date-debut-search datepicker-here" placeholder="Date d&eacute;but" name="date-debut-operation" id="date-debut-operation" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
									</label>

									<label for=""> 
										<input type="text" class="ending-date search date-fin-search datepicker-here" name="date-fin-operation" id="date-fin-operation" placeholder="Date fin" data-position="top left" data-language="fr" data-date-format="yyyy/mm/dd">
									</label>
								
								</div>
							</div>


							<div class="form-group">
								<label for="">Nom d'artiste<input name="libelle-nom-a" type="text" class="search ref-search" id="libelle-nom-a" placeholder="Ex: Tenor" data-onglet="toute"></label>
							</div>


							<div class="form-group">
								<div class="form-control">
									<label for="">Etat
										<select name="statut" id="statut" type="text" class="search ref-search ref-search-responsive">
											<option value="-1">S&eacute;lectionnez</option>
											<option value="1">Actif</option>
											<option value="0">suspendu</option>
										</select>
									</label>
								</div>
							</div>
							


							<div class="form-group">
								<button type="button" class="btn-search valide-form-search" onclick="Rechercher_artiste('<?php echo base64_encode("traitement_ajax/traitement_recherche_artiste.php")?>','loader');"><i class="fa fa-search"></i></button>
							</div>
                            <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
						</form>
					</div>
                    <div id="liste-artiste">
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
								<td align="left"><?php echo $artiste["nom_dartiste"] ?></td>
								<td align="left"><?php echo $artiste["nom"]?><span class="nationalite-ligne-user">&nbsp;-&nbsp;<?php echo $artiste["pseudo"]?> </span></td>
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
							<?php if($nbtotalpage>1){?>
							<div class="conteneur-pagination">
								<!--<div class="wrap-pagination"><a href="#" class="pagination">Pr&eacute;cedent</a></div>-->
								<?php 
									$page_debut=$page_encours-$marge;
									if($page_debut<=0)$page_debut=1;
									$page_fin=$pagination;
									//$page_fin=$page_encours+$marge;
									if($page_fin>$nbtotalpage)$page_fin=$nbtotalpage;

									for($i=$page_debut; $i<=$page_fin; $i++){
										if($i==$page_encours)$actif="actif";
										else $actif="";

								?>
									<div class="wrap-pagination"><a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/traitement_recherche_artiste.php")?>','form-recherche-artiste','liste-artiste','<?php echo $i?>','loader')" class="pagination <?php echo $actif?>" ><?php echo $i?></a></div>
								<?php }?>

								<div class="wrap-pagination"><a href="javascript:Pagination('<?php echo base64_encode("traitement_ajax/traitement_recherche_artiste.php")?>','form-recherche-artiste','liste-artiste','<?php echo $page_encours+1?>','loader')" class="pagination">Suivant</a></div>
							</div>
							<?php }?>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>