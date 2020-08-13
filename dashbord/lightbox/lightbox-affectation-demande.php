<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");
?>

<?php 
$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
$droit_dacces=getDroitAccesAdministrateur($ladministrateur[0]);
$iddemandeur=mysql_real_escape_string  ($_GET["iddemandeur"]);
$demandeur=getdemandeurInformations($iddemandeur);
$url_enregistrer="document.getElementById('zip').click()";
$agence_dossier=$demandeur["agence"];
$lagence=getAgenceInformations($agence_dossier);

$query_gestionnaire="SELECT * FROM administrateur WHERE (fonction='Gestionnaire' OR fonction='Charge_daccueil' ) AND idagence='$agence_dossier'	ORDER BY nom, prenom ASC";
$result_gestionnaire=mysql_query($query_gestionnaire);
$nbreponse=mysql_num_rows($result_gestionnaire);
?>


<!doctype html>

<html lang="fr">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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

			<div class="entete-lightbox"> #0<?php echo $demandeur[0]?>  -  <?php echo $demandeur["nom"]?> <?php echo $demandeur["prenom"]?> - Affectation à un gestionnaire

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-affectation-demande">
				<div class="content-form">
					<form action="" id="form-affectation" class="form-ajout" enctype="multipart/form-data">
						<p class="accroche-lighbox" style="text-transform: uppercase"><strong>AGENCE <?php echo $lagence["reference"];?> -  <?php echo $lagence["titre"];?></strong></p>
						<?php if($nbreponse==0){?>
						<p class="accroche-lighbox">AUCUN GESTIONNAIRE ASSIGNE A CETTE AGENCE</p>
						<?php }?>
						<div class="wrapper-line-gestionnaire">
							
							<?php 
							  while($gestionnaire=mysql_fetch_array($result_gestionnaire)){
								if($demandeur["gestionnaire"]==$gestionnaire[0])  $checked="CHECKED";
								 else $checked="";
							
							?>

							<div class="line-gestionnaire">
								<input <?php echo $checked?> type="radio" id="gestionnaire-<?php echo $gestionnaire[0]?>" name="gestionnaire" class="check-gestionnaire" value="<?php echo $gestionnaire[0]?>">
								<label for="gestionnaire-<?php echo $gestionnaire[0]?>" class="label-gestionnaire"><?php echo $gestionnaire["nom"]." ".$gestionnaire["prenom"]?></label>
							</div>
							<?php }?>
							

						</div>
						
						<div class="ligne-form">
							<input type="button" name="cancel-form" value="<?php if($demandeur["gestionnaire"]==0){?>Annuler<?php }else{?>Fermer<?php }?>" class="btn-submit cancel" onClick="Cacher_loader('loader');">
							
							
							<?php if($nbreponse>0 AND $droit_dacces["affecter_dossier"]==1 AND $demandeur["etat"]!="valide" AND $demandeur["etat"]!="refuse"){?>
						  	<input type="button" name="btn-valider-affectation" value="Valider" id="btn-valider-affectation" class="btn-submit" onClick="Enregistrer_affectation('<?php echo base64_encode("traitement_ajax/main.php")?>','<?php echo $iddemandeur?>')">
							<?php }?>
							
						  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
						  	<input type="hidden" name="iddemandeur" id="iddemandeur" value="<?php echo $iddemandeur?>"/>
						  	<input type="hidden" name="traitement" id="traitement" value="affecter-dossier"/>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>