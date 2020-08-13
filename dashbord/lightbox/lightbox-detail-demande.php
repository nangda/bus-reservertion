<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
?>

<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
	 $agence=getagenceinformations($demandeur["agence"]);
	 $ville=getvilleInformations($demandeur["ville"]);
if($demandeur["civilite"]=="Mme")$naissance="N&eacute;e le "; else $naissance="N&eacute; le "
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

		<div class="lightbox" id="lightbox-droit-utilisateur">

			<div class="entete-lightbox"> #0<?php echo $demandeur[0]?> - <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?>

				<div class="close-lightbox" onclick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"></path>
					</svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-suivi">

				<div class="wrapper-line-msg-follow-up" id="conteneur-echange" style="margin-bottom: 30px">
					<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" id="detail-demandeur">
					 <?php if($demandeur["photo"]!=""){?>
						<tr>
						  <td height="85" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03; border-bottom: 2px solid #D7D7D7"><img src="../images/logo.png" alt="" height="80"></td>
					  </tr>
						<tr>
						  <td height="21" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;"><table width="100%" border="0">
						    <tbody>
						      <tr>
						        <td width="16%"><img src="<?php echo $demandeur["photo"]?>" alt=""  height="120"></td>
						        <td width="84%"><table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
						         
						          <tr>
						            <td width="18%" height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">&nbsp;</td>
						            <td width="82%" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase"><strong> <?php echo $demandeur["nom"]." ".$demandeur["prenom"] ?>&nbsp;</strong></td>
					              </tr>
						          <tr>
						            <td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">&nbsp;</td>
						            <td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase"><strong> <?php echo $naissance;  echo madate2($demandeur["date_naissance"]) ?> &agrave; <?php echo $demandeur["lieu_naissance"] ?></strong></td>
					              </tr>
						          <tr>
						            <td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">&nbsp;</td>
						            <td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase"><strong> tél: <?php echo $demandeur["telephone"] ?> <?php if($demandeur["telephone2"]!="") echo " / ".$demandeur["telephone2"] ?></strong></td>
					              </tr>
						          <tr>
						            <td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">&nbsp;</td>
						            <td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase"><strong>Email : <?php echo $demandeur["email"] ?></strong></td>
					              </tr>
						          <?php if($demandeur["telephone2"]!=""){?>
						          <?php }?>
						          <?php if($demandeur["telephone2_conjoint"]!=""){?>
						          <?php }?>
					            </table></td>
					          </tr>
					        </tbody>
						    </table><br>
						  </td>
					  </tr>
					  <?php }?>
						<tr>
							<td height="29" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;border-bottom: 2px dashed #D7D7D7 ">Etat actuel :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo GetLibelleEtatDossier($demandeur[0]) ?></strong>
							</td>
						</tr>
						<tr>
							<td height="29" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03; border-bottom: 2px dashed #D7D7D7">Date d'enregistrement :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo getdatedetaille($demandeur["date_creation"], $demandeur["heure_creation"]) ?> </strong>
							</td>
						</tr>
						<?php if($demandeur["signature"]=="1"){?>
						<tr>
							<td height="29" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">Date de soumission :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo getdatedetaille($demandeur["date_soumission"], $demandeur["heure_soumission"]) ?>
								</strong>
							</td>
						</tr>
						<?php }?>
						<?php if($demandeur["gestionnaire"]!="0"){?>
						<?php 
						  $gestionnaire=getAdministrateurInformations($demandeur["gestionnaire"]);
						  $affecte_par=getAdministrateurInformations($demandeur["affecte_par"]);
						
						?>
						<tr>
							<td height="27" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">Gestionnaire :</td>
							<td align="left" valign="middle" style=" text-transform: uppercase;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $gestionnaire["nom"]." ".$gestionnaire["prenom"] ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="27" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">Date d'affectation au gestionnaire :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo getdatedetaille($demandeur["date_affectation"], $demandeur["heure_affectation"]) ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="27" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">Affectation effectuée par :</td>
							<td align="left" valign="middle" style=" text-transform: uppercase;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $affecte_par["nom"]." ".$affecte_par["prenom"] ?>
								</strong>
							</td>
						</tr>
						<?php }?>
						<?php if($demandeur["cloture"]=="1"){?>
						<?php 
						  $cloture_par=getAdministrateurInformations($demandeur["cloture_par"]);
						
						?>
						<tr>
							<td height="27" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">Date de clôture:</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo getdatedetaille($demandeur["date_cloture"], $demandeur["heure_cloture"]) ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="27" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">Dossier clôturé par :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#e37b03;; border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $cloture_par["nom"]." ".$cloture_par["prenom"] ?>
								</strong>
							</td>
						</tr>
						<?php }?>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">Montant  souhait&eacute; :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo number_format($demandeur["montant_souhaite"], 0, ',', ' ') ?> Fcfa</strong>
									
									<?php if($demandeur["montant_accorde"]!=0 AND $demandeur["montant_souhaite"]!=$demandeur["montant_accorde"]){?>
									// <span style="color: #e37b03;"><strong>  <?php echo number_format($demandeur["montant_accorde"], 0, ',', ' ') ?> Fcfa</strong> Accordé</span>
									<?php }?>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">Dur&eacute;e  souhait&eacute;e :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["duree_credit"] ?> mois</strong>
							</td>
						</tr>
						<?php if($demandeur["duree_credit"]=="11"){?>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">Mois de diff&eacute;r&eacute; :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["mois_de_suspension"] ?>
								</strong>
							</td>
						</tr>
						<?php }?>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">Agence :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $agence["titre"]; ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">Num&eacute;ro de compte :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["numero_compte"] ?> &nbsp;&nbsp;
									<?php echo $demandeur["cle"] ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Ville :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7"><strong><?php echo $ville["titre"] ?></strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Adresse/Quartier :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["adresse"] ?>
								</strong>
							</td>
						</tr>
						<?php if($demandeur["telephone2"]!=""){?>
						<?php }?>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Email :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["email"] ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Statut Professionnel :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["statut_professionnel"] ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Employeur :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["employeur"] ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Date d'embauche :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo madate2($demandeur["date_embauche"]) ?>
								</strong>
							</td>
						</tr>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Profession :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["profession"] ?>
								</strong>
							</td>
						
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">Personne à contacter  :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;text-transform: uppercase;border-bottom: 2px dashed #D7D7D7"><strong><?php echo $demandeur["nom_personne_a_contacter"]." ".$demandeur["prenom_personne_a_contacter"] ?></strong>
							</td>
						</tr>
						<tr>
							<td width="31%" height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">T&eacute;l&eacute;phone 1 :</td>
							<td width="66%" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["telephone1_personne_a_contacter"] ?>&nbsp;</strong>
							</td>
						</tr>
						<?php if($demandeur["telephone2_personne_a_contacter"]!=""){?>
						<tr>
							<td height="21" align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">T&eacute;l&eacute;phone 2 :</td>
							<td align="left" valign="middle" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;;border-bottom: 2px dashed #D7D7D7">
								<strong>
									<?php echo $demandeur["telephone1_personne_a_contacter"] ?>
								</strong>
							</td>
						</tr>
						<?php }?>
						</tr>
					</table>

			  </div>

				<div class="content-form" style="margin-right: 20px; margin-left: 20px; border-top: 1pxsolid gray">
					<div class="ligne-form">
						<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
					  <input type="button" name="btn-version-pdf" value="Version PDF" id="btn-version-pdf"  class="btn-submit" onClick="Dossier_en_pdf('detail-demandeur', '<?php echo valideChaine($demandeur["nom"]."_".$demandeur["prenom"])?>.pdf');">
					  <?php if($demandeur["etat"]!="Incomplet" AND $demandeur["etat"]!="valide" AND $demandeur["etat"]!="refuse"){?>
					  <input type="button" name="btn-version-pdf" value="Déverrouiller " id="btn-version-pdf"  class="btn-submit" onClick="Affichage_contenuLightBox64('<?php echo base64_encode("lightbox/main.php?iddemandeur=$demandeur[0]&traitement=deverouiller-dossier")?>','loader2');">
					  <?php }?>
					</div>

				</div>

			</div>

		</div>

</body>

</html>