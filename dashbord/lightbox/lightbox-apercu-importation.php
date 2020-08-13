

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

		<div class="lightbox" id="lightbox-droit-utilisateur" style="width: 80%">

			<div class="entete-lightbox"> APERCU DE L' IMPORTATION

				<div class="close-lightbox" onclick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"></path>
					</svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-suivi">

				<div class="wrapper-line-msg-follow-up" id="conteneur-echange">
					<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">
						<tr>
							<td width="2%" height="35" align="center" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"></td>
							<td width="14%" height="35" align="center" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">CODE AGENCE</td>
							<td width="15%" align="center" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">NUMERO DE COMPTE</td>
							<td width="3%" align="center" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">CLE</td>
							<td width="24%" align="left" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">GESTIONNAIRE</td>
							<td width="12%" align="center" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">CODE GESTIONNAIRE</td>
							<td width="30%" align="left" valign="middle" bgcolor="#ecf0f5" style="font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;">EMAIL GESTIONNAIRE</td>
						</tr>
	<?php 
          $url_enregistrer="Enregistrer_importation('".base64_encode('traitement_ajax/main.php?traitement=enregistrer-importation')."')";
						
		  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){
		      $highestRow = $worksheet->getHighestRow();
			  for($row=2; $row<=$highestRow; $row++){ 
				  
				  $code_agence= mysql_real_escape_string  (strip_tags(trim ($worksheet->getCellBycolumnAndRow(0, $row)->getValue())));
				  $numero_compte= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(1, $row)->getValue())));
				  $cle_compte= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(2, $row)->getValue())));
				  $gestionnaire= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(3, $row)->getValue())));
				  // $prix=preg_replace('/s/', '', $prix);
				  
				  $code_gestionnaire= mysql_real_escape_string  (strip_tags(trim($worksheet->getCellBycolumnAndRow(4, $row)->getValue())));
				  $email_gestionnaire= mysql_real_escape_string  (strip_tags(trim(($worksheet->getCellBycolumnAndRow(5, $row)->getValue()))));
				  
				  if($code_agence!="" AND filter_var($email_gestionnaire, FILTER_VALIDATE_EMAIL) AND $cle_compte!="" AND $code_agence!="" AND $code_gestionnaire!="" AND $gestionnaire!="" AND $numero_compte!=""){
					  
					  /*$sql= "INSERT INTO importation_donnees VALUES ('0', '$code_agence','$numero_compte','$cle_compte','$gestionnaire','$code_gestionnaire' ,'$email_gestionnaire' ,'$contenance' ,'$prix','$marque','$description','$conseil','$indication','$composition')";
					mysql_query($sql)or die (mysql_error());*/
					  $i=$row-1;
					  $importation=getImportationInformationsByNumeroCompte($numero_compte); 
					  if($importation!=false)$note="<br><span style=\"color:red; font-size:10px\"><strong>Compte  déjà importé</strong></span> "; else $note="";
				  				
?>					
					  
				<tr style="border-bottom: 1px solid #CCC">
						  <td height="21" align="center" valign="middle" style="border-bottom:1px solid #ccc; font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"><?php echo $i?></td>
						  <td height="21" align="center" valign="middle" style="border-bottom:1px solid #ccc; font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"><?php echo $code_agence?></td>
						  <td align="center" valign="middle" style="border-bottom:1px solid #ccc;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"><?php echo $numero_compte?><?php echo $note?></td>
						  <td align="center" valign="middle" style="border-bottom:1px solid #ccc;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"><?php echo $cle_compte?></td>
						  <td align="left" valign="middle" style="border-bottom:1px solid #ccc;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"> <?php echo $gestionnaire ?></td>
						  <td align="center" valign="middle" style="border-bottom:1px solid #ccc;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"><?php echo $code_gestionnaire ?></td>
						  <td align="left" valign="middle" style="border-bottom:1px solid #ccc;font-size:12px;	font-family:Arial, Helvetica, sans-serif ;	color:#000000;"><?php echo $email_gestionnaire?></td>
				    </tr>
				<?php }?>
		<?php }?>
	<?php }?>					                                               
					</table>

			  </div>

				<div class="content-form" style="margin-right: 20px; margin-left: 20px; border-top: 1pxsolid gray">
					<div class="ligne-form">
						<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader2');">
					  <input type="button" name="btn-valider-album" value="Valider et enregistrer" id="btn-valider-album"  class="btn-submit" onClick="<?php echo $url_enregistrer?>">
					</div>

				</div>

			</div>

		</div>

</body>

</html>