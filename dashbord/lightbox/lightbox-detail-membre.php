<?php
@session_start();
		include("../connectionbd.php");
		include("../mesfonctions.php");

?>
<?php 

	$idmembre=mysql_real_escape_string  ($_GET["idmembre"]);
	$membre=getmembreInformations($idmembre);

	$ville=getvilleInformations($membre["ville"]);

    if($ville==false)$ville=$membre["ville"];
    else $ville=$ville["titre"];

	$departement=getdepartementInformations($membre["departement"]);
	$commune=getcommuneInformations($membre["commune"]);
	$quartier=getquartierInformations($membre["quartier"]);
    if($membre["sexe"]=="Homme")$civilite="M."; else $civilite="Mme.";

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
  <div class="lightbox" id="lightbox-detail-element">
    <div class="entete-lightbox"> Détails - <?php echo $membre["nom"]." ".$membre["prenom"];?> 
      <div class="close-lightbox" onClick="Cacher_loader('loader');">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

        <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

      </svg>
    </div>
  </div>
  <div class="contenu-lightbox" id="conteneur-creation-compte">
    <div class="content-form">
		
      <form action="" id="form-confirmation-element" class="form-confirmation-element"> 
		
		  <table class="wrap-content-detail-element">
			
			<tr class="line-detail-element">
				<td class="libele-detail-element">Type Membre: </td>
				 <td class="value-detail-element"> <?php echo $membre["type_membre"]?></td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Nom et prénom: </td>
				 <td class="value-detail-element"><?php echo $civilite;?> <?php echo utf8_encode($membre["nom"]." ".$membre["prenom"])?></td> 
			</tr>
		  	<tr class="line-detail-element">
				<td class="libele-detail-element">Nationalité </td> 
				<td class="value-detail-element"><?php echo utf8_encode($membre["nationalite"])?></td> 
			</tr>
			  <tr class="line-detail-element">
				<td class="libele-detail-element">Date de naissance </td> 
				<td class="value-detail-element"><?php echo Madate2($membre["date_naissance"])?></td> 
			</tr>
			  <tr class="line-detail-element">
				<td class="libele-detail-element">Prefession </td> 
				<td class="value-detail-element"><?php echo utf8_encode($membre["profession"])?></td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Numero de téléphone </td> 
				<td class="value-detail-element"><?php echo $membre["indicatif"].$membre["telephone"]?></td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Numero de whatsapp </td> 
				<td class="value-detail-element"><?php echo $membre["indicatif_whatsapp"].$membre["telephone_whatsapp"]?></td> 
			</tr>
			  
			<tr class="line-detail-element">
				<td class="libele-detail-element">Pays de résidence : </td> 
				<td class="value-detail-element"><?php echo utf8_encode($membre["pays"])?> </td> 
			</tr>
			  
			<tr class="line-detail-element">
				<td class="libele-detail-element">Ville: </td> 
				<td class="value-detail-element"><?php echo utf8_encode($ville)?> </td> 
			</tr>
			<?php if($departement!=false){?>
			<tr class="line-detail-element">
				<td class="libele-detail-element">D&eacute;partement : </td> 
				<td class="value-detail-element"><?php echo utf8_encode($departement["titre"]);?> </td> 
			</tr>
			<?php }?>
			<?php if($commune!=false){?>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Arrondissement : </td> 
				<td class="value-detail-element"><?php echo utf8_encode($commune["titre"]);?> </td> 
			</tr>
			<?php }?>
			<?php if($quartier!=false){?>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Quartier : </td> 
				<td class="value-detail-element"><?php echo utf8_encode($quartier["titre"]);?> </td> 
			</tr>
			<?php }?>
			<?php if($membre["deja_militant"]==1){?>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Dernier Parti/Mouvement Politique : </td> 
				<td class="value-detail-element"><?php echo utf8_encode($membre["dernier_mouvement"]);?> - le <?php echo Convertir_date_francais($membre["date_adhesion_dernier_mouvement"])?> </td> 
			</tr>
			<?php }?>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Adresse</td> 
				<td class="value-detail-element"><?php echo utf8_encode($membre["adresse"])?> </td> 
			</tr>
<!--
			<tr class="line-detail-element">
				<td class="libele-detail-element">Createur : </td> 
				<td class="value-detail-element">Marc Merlin</td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Derniere mise à jour le : </td> 
				<td class="value-detail-element">02/09/2019</td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Mise &agrave; jour par  : </td> 
				<td class="value-detail-element">Marc Merlin</td> 
			</tr>
-->
		  </table>
		  
			<div class="ligne-form ligne-btn">
				<input type="button" name="cancel-form" value="Fermer" class="btn-submit cancel" onClick="Cacher_loader('loader')">
			</div>		

		</form>
      </div>

    </div>
  </div>
</body>
</html>


