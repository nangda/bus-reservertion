<?php
@session_start();
include("../connectionbd.php");
include("../mesfonctions.php");

$idprovince=mysql_real_escape_string  ($_GET["idprovince"]);
$laprovince=getprovinceInformations($idprovince);

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
  <div class="lightbox">
    <div class="entete-lightbox"> Province: <?php echo utf8_encode($laprovince["titre"]);?>
      <div class="close-lightbox" onClick="Cacher_loader('loader2');">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

        <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3
        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/>

      </svg>
    </div>
  </div>
  <div class="contenu-lightbox">
    <div class="content-form">
      	
		<div class="wrap-graphe-lightbox" id="display-histogramme-province-carte">
		
		</div>
      </div>

    </div>
  </div>
</body>
</html>

