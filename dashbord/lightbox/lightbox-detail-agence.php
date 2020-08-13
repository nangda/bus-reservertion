<?php

@session_start();

include("../connectionbd.php");

include("../mesfonctions.php");



?>

<?php 



	$idagence=mysql_real_escape_string  ($_GET["idagence"]);

	$agence=getagenceInformations($idagence);

	$ville=getvilleInformations($agence["idville"]);

	$region=getregionInformations($agence["idregion"]);



	$createur=getAdministrateurInformations($agence["createur"]);

	$modificateur=getAdministrateurInformations($agence["modificateur"]);

	$valideur=getAdministrateurInformations($agence["valideur"]);



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

    <div class="entete-lightbox"> Détails - <?php echo ($agence["titre"]);?> 

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

				<td class="libele-detail-element">Agence: </td>

				 <td class="value-detail-element"> <?php echo ($agence["titre"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">R&eacute;f&eacute;rence </td>

				 <td class="value-detail-element"> <?php echo ($agence["reference"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">T&eacute;l&eacute;phone </td>

				 <td class="value-detail-element"> <?php echo ($agence["telephone"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Email </td>

				 <td class="value-detail-element"> <?php echo ($agence["email"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Ville </td>

				 <td class="value-detail-element"> <?php echo ($ville["titre"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">R&eacute;gion</td>

				 <td class="value-detail-element"> <?php echo ($region["titre"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Createur : </td> 

				<td class="value-detail-element"><?php echo ($createur["nom"]." ".$createur["prenom"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Date cr&eacute;ation : </td> 

				<td class="value-detail-element"><?php echo getdatedetaille($agence["date_creation"], $agence["heure_creation"])?></td> 

			</tr>

			<?php if($modificateur!=false){?>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Derniere mise à jour le : </td> 

				<td class="value-detail-element"><?php echo getdatedetaille($agence["date_modification"], $agence["heure_modification"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Mis &agrave; jour par  : </td> 

				<td class="value-detail-element"><?php echo ($modificateur["nom"]." ".$modificateur["prenom"])?></td> 

			</tr>

			<?php }?>



			<?php if($valideur!=false){?>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Derniere validation effectu&eacute;e le : </td> 

				<td class="value-detail-element"><?php echo getdatedetaille($agence["date_validation"], $agence["heure_validation"])?></td> 

			</tr>

			<tr class="line-detail-element">

				<td class="libele-detail-element">Mis &agrave; jour par  : </td> 

				<td class="value-detail-element"><?php echo ($valideur["nom"]." ".$valideur["prenom"])?></td> 

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





