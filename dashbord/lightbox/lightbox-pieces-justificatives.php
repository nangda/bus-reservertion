<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
?>

<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$url_enregistrer="document.getElementById('zip').click()";
?>


<!doctype html>

<html>

<head>

	<meta charset="utf-8">

	<title>Document sans titre</title>

	<style>

		.wrap-select:after {

			top: 30% !important;

		}

	</style>

</head>



<body>

	<link rel="stylesheet" type="text/css" href="css/lightbox.css">

	<div class="conteneur-lightbox">

		<div class="lightbox" id="lightbox-pieces-justificative">

			<div class="entete-lightbox">Pièces justificatives #0<?php echo $demandeur[0]?>  -  <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?>

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-pieces-justificative">
				
				<div class="wrapper-pieces-justificatives">
					<div class="wrap-bloc-srubrique">
					<?php if(LeDossierDemandeurNaAucuneJustif($iddemandeur)==1){?>
					   
					  <?php if($demandeur["avis"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
							    <?php if($demandeur["statut_professionnel"]=="Employe_secteur_prive"){?>
							    AVIS (Attestation de Virement Irrévocable de Salaire)
							    <?php }elseif($demandeur["statut_professionnel"]=="Fonctionnaire/Agent_public"){?>
							    Attestation de présence effective        
							    <?php }else{?>
								        <?php echo $demandeur["avis"]?>
								<?php }?>
							</div>
							<?php 
							$tab_avis=explode(".", $demandeur["avis"]);
							
							?>
							<div class="wrapper-action-fichier">
								<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["avis"]?>" class="download-file" download="<?php echo $demandeur["avis"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"]; echo ".".end($tab_avis)?>" target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                       <?php }?>
                       <?php if($demandeur["bulletin_de_paie1"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  Bulletin de paie 1
							</div>
							<?php 
							$tab_bulettin1=explode(".", $demandeur["bulletin_de_paie1"]);
							
							?>
							<div class="wrapper-action-fichier">
							<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["bulletin_de_paie1"]?>" class="download-file" download="<?php echo $demandeur["bulletin_de_paie1"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];echo ".".end($tab_bulettin1)?>"  target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                        <?php }?>
                       <?php if($demandeur["statut_professionnel"]=="Employe_secteur_prive" AND $demandeur["bulletin_de_paie2"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  Bulletin de paie 2
							</div>
							<?php 
							$tab_bulettin2=explode(".", $demandeur["bulletin_de_paie2"]);
							
							?>
							<div class="wrapper-action-fichier">
							<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["bulletin_de_paie2"]?>" class="download-file" download="<?php echo $demandeur["bulletin_de_paie2"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];echo ".".end($tab_bulettin2)?>"  target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                        <?php }?>
                       <?php if($demandeur["statut_professionnel"]=="Employe_secteur_prive" AND $demandeur["bulletin_de_paie3"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  Bulletin de paie 3
							</div>
							<?php 
							$tab_bulettin3=explode(".", $demandeur["bulletin_de_paie3"]);
							
							?>
							<div class="wrapper-action-fichier">
							<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["bulletin_de_paie3"]?>" class="download-file" download="<?php echo $demandeur["bulletin_de_paie3"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];echo ".".end($tab_bulettin3)?>"  target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                        <?php }?>
                       <?php if($demandeur["cni_recto"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  CNI RECTO
							</div>
							<?php 
							$tab_cni_recto=explode(".", $demandeur["cni_recto"]);
							
							?>
							<div class="wrapper-action-fichier">
							<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["cni_recto"]?>" class="download-file" download="<?php echo $demandeur["cni_recto"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];echo ".".end($tab_cni_recto)?>"  target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                        <?php }?>
                       <?php if($demandeur["cni_verso"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  CNI VERSO
							</div>
							<?php 
							$tab_cni_verso=explode(".", $demandeur["cni_verso"]);
							
							?>
							<div class="wrapper-action-fichier">
							<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["cni_verso"]?>" class="download-file" download="<?php echo $demandeur["cni_verso"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];echo ".".end($tab_cni_verso)?>"  target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                        <?php }?>
                       <?php if($demandeur["facture"]!=""){?>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  Facture ENEO/CAMWATER
							</div>
							<?php 
							$tab_facture=explode(".", $demandeur["facture"]);
							
							?>
							<div class="wrapper-action-fichier">
							<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/<?php echo $demandeur["facture"]?>" class="download-file" download="<?php echo $demandeur["facture"]?> - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];echo ".".end($tab_facture)?>"  target="_blank"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
                        <?php }?>
						
					  <?php }else{?>
					  
					     <p style="margin:30px; font-size: 20px">Aucune pièce justificative pour le moment.</p>
					     
					  <?php }?>
					</div>
				
				</div>
				<?php if(LeDossierDemandeurAToutesLesJustfis($demandeur[0])==1){?>
				<a href="../espace-client/justifs/demandeur<?php echo base64_encode($demandeur[0])?>/demandeur<?php echo base64_encode($demandeur[0])?>.zip" download="pieces-justificatives - <?php echo $demandeur["nom"]." ".$demandeur["prenom"];?>.zip" id="zip"  target="_blank"></a>
				<?php }?>
				<div class="content-form">
					<form action="" id="form-pieces-justificative" class="form-ajout" enctype="multipart/form-data">
						<div class="ligne-form">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
					  	    <?php if(LeDossierDemandeurNaAucuneJustif($iddemandeur)==1){?>
						  	<input type="button" name="btn-valider-album" value="Télécharger tous les fichiers" id="btn-valider-album" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
						  	<?php }?>
						  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
						  	<input type="hidden" name="idalbum" id="idalbum" value="<?php echo $idalbum?>"/>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>