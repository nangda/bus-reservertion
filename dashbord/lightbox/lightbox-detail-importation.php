<?php

@session_start();

include("../connectionbd.php");

include("../mesfonctions.php");



?>

<?php 



	$idimportation=mysql_real_escape_string  ($_GET["idimportation"]);

	$importation=getimportationInformations($idimportation);



	$createur=getAdministrateurInformations($importation["createur"]);

	$valideur=getAdministrateurInformations($importation["valideur"]);



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

    <div class="entete-lightbox"> Détails - <?php echo utf8_encode($importation["numero_compte"]);?> 

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

				<td class="libele-detail-element">Code Agence: </td>

				 <td class="value-detail-element"> <?php echo utf8_encode($importation["code_agence"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Numéro de compte </td>

				 <td class="value-detail-element"> <?php echo utf8_encode($importation["numero_compte"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Clé </td>

				 <td class="value-detail-element"> <?php echo utf8_encode($importation["cle_compte"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Gestionnaire </td>

				 <td class="value-detail-element"> <?php echo utf8_encode($importation["nom_gestionnaire"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Code gestionnaire </td>

				 <td class="value-detail-element"> <?php echo utf8_encode($importation["code_gestionnaire"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Email gestionnaire</td>

				 <td class="value-detail-element"> <?php echo utf8_encode($importation["email_gestionnaire"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Createur : </td> 

				<td class="value-detail-element"><?php echo utf8_encode($createur["nom"]." ".$createur["prenom"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Date cr&eacute;ation : </td> 

				<td class="value-detail-element"><?php echo getdatedetaille($importation["date_creation"], $importation["heure_creation"])?></td> 

			</tr>

			


			<?php if($valideur!=false){?>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Derniere validation effectu&eacute;e le : </td> 

				<td class="value-detail-element"><?php echo getdatedetaille($importation["date_validation"], $importation["heure_validation"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Par  : </td> 

				<td class="value-detail-element"><?php echo utf8_encode($valideur["nom"]." ".$valideur["prenom"])?></td> 

			</tr>

			<?php }?>



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





