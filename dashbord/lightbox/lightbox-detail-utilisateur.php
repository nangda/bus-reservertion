
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
    <div class="entete-lightbox"> Détail utilisateur 
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
				<td class="libele-detail-element">Civilité </td>
				 <td class="value-detail-element">Monsieur</td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Nom et prénom: </td>
				 <td class="value-detail-element">Mike Jocktane</td> 
			</tr>
		  	<tr class="line-detail-element">
				<td class="libele-detail-element">Nationalité </td> 
				<td class="value-detail-element">Camerounaise</td> 
			</tr>
			  <tr class="line-detail-element">
				<td class="libele-detail-element">Date de naissance </td> 
				<td class="value-detail-element">18 janvier 1980</td> 
			</tr>
			  <tr class="line-detail-element">
				<td class="libele-detail-element">Prefession </td> 
				<td class="value-detail-element">Evèque</td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Numero de téléphone </td> 
				<td class="value-detail-element">12345645</td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Numero de whatsapp </td> 
				<td class="value-detail-element">12345645</td> 
			</tr>
			  
			<tr class="line-detail-element">
				<td class="libele-detail-element">Pays de résidence : </td> 
				<td class="value-detail-element">Gabon </td> 
			</tr>
			  
			<tr class="line-detail-element">
				<td class="libele-detail-element">Ville: </td> 
				<td class="value-detail-element">Libreville </td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Arrondissement : </td> 
				<td class="value-detail-element">Libreville </td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Quartier : </td> 
				<td class="value-detail-element">Libreville </td> 
			</tr>
			<tr class="line-detail-element">
				<td class="libele-detail-element">Adresse précise</td> 
				<td class="value-detail-element">12345678 </td> 
			</tr>
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
		  </table>
		  
			<div class="ligne-form ligne-btn">
				<input type="button" name="cancel-form" value="Fermer" class="btn-submit cancel" onClick="Cacher_loader('loader')">
<!--				<input type="button" id="btn-valider-element" name="valider-form" class="btn-submit"  value="Modifez cette opération" onClick="Enregistrer_element('<?php echo base64_encode('traitement_ajax/traitement_enregistrement_element.php')?>', '<?php echo $idelement ?>')">-->
				<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />     
				<input type="hidden" name="idelement" id="idelement" value="<?php echo $idelement ?>" />     
				<input type="hidden" name="idtontine" id="idtontine" value="<?php echo $latontine[0]?>"/>
			</div>		

		</form>
      </div>

    </div>
  </div>
</body>
</html>


