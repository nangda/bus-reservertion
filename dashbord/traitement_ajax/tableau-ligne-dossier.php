<?php 

	      $demandeur=getdemandeurInformations($iddemandeur);
		  $agence=getAgenceInformations($demandeur["agence"]);
		  $ville=getvilleInformations($demandeur["ville"]);
		  $class_etat=GetClassEtatDossier($demandeur[0]);
		  $clotureur= getadministrateurinformations($demandeur["cloture_par"]);
	
			if($droit_dacces["acces_piece_jointe"]==1)$url_justif="javascript:Affichage_contenuLightBox64('".base64_encode("lightbox/main.php?traitement=piece-justificative&iddemandeur=$demandeur[0]")."','loader');";
			else $url_justif="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";

			if($droit_dacces["consulter_les_echanges"]==1)$url_suivi="javascript:Affichage_contenuLightBox64('". base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=suivi-dossier")."','loader');";
			else $url_suivi="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";



			if($droit_dacces["cloturer_demande"]==1)$url_cloturer="javascript:Affichage_contenuLightBox64('". base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=cloture-dossier")."','loader');";
			else $url_cloturer="javascript:AfficherNotification('INFORMATION','loader','Vous n\'avez pas le droit d\'effectuer cette action. Pour en savoir plus, veuillez contacter l\'administrateur','OK','','','','1');";


			$affectation=GetInfosAffectationDossier($demandeur[0]);
			$url_affecter=$affectation["url"];
			$class_affectation=$affectation["class"];
			$infobulle_affectation=$affectation["infobulle"];


?>




		<td class="colonne-tab etat-dossier <?php echo $class_etat?>" id="td-couleur-tout<?php echo $demandeur[0]?>" data-tooltip="<?php  echo strip_tags(GetLibelleEtatDossier($demandeur[0]))?>">
		</td>

		<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=detail-demande")?>','loader');" data-tooltip="D&eacute;tails"><i class="fa fa-eye"></i></a></td>	

		<td class="colonne-tab detail-line"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=detail-demande")?>','loader', GetVersionPdf);" data-tooltip="Fiche PDF de <?php echo $demandeur["nom"]." ".$demandeur["prenom"]?>"><i class="fa fa-file-pdf-o" style="color: red"></i></a></td>


		<td class="colonne-tab detail-line attach"><a href="<?php echo $url_justif?>" data-tooltip="<?php if(LeDossierDemandeurNaAucuneJustif($demandeur[0])==0) echo "Aucune pièce justificative pour ".$demandeur["nom"]." ".$demandeur["prenom"]; else echo"Voir les pièces justificatives de ".$demandeur["nom"]." ".$demandeur["prenom"]?>" ><i class="fa fa-files-o"></i></a></td>	

		<td class="colonne-tab detail-line assign <?php echo $class_affectation?>"><a href="<?php echo $url_affecter?>" data-tooltip="<?php echo $infobulle_affectation?>" ><i class="fa fa-share"></i></a></td>

		<td class="colonne-tab edit-line"><a href="<?php echo $url_suivi?>" data-tooltip="Ecrire &agrave; <?php echo $demandeur["nom"]." ".$demandeur["prenom"]?>"><i class="fa fa-comments-o"></i></a>
		</td>
		<?php if($demandeur["cloture"]==0){?>
		<td class="colonne-tab fermeture-dossier" id="td-cloture-tout<?php echo $demandeur[0]?>"><a href="<?php echo $url_cloturer?>" data-tooltip="Cl&ocirc;turer le dossier"><i class="fa fa-unlock-alt"></i></a></td>
		<?php }else{?>
		<td class="colonne-tab fermeture-dossier cloture" id="td-cloture-tout<?php echo $demandeur[0]?>"><a href="javascript:Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=cloture-dossier")?>','loader');" data-tooltip="Dossier cl&ocirc;tur&eacute; par <?php echo $clotureur["nom"]." ".$clotureur["prenom"]?> "><i class="fa fa-lock"></i></a></td>
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
