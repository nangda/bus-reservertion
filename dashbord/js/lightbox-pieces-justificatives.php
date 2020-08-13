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

			<div class="entete-lightbox">Pièces justificatives

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-pieces-justificative">
				
				<div class="wrapper-pieces-justificatives">
					<div class="wrap-bloc-srubrique">
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  AVIS ou Attestation de présence effective
							</div>
							<div class="wrapper-action-fichier">
<!--								<a href="" class="view-file"><i class="fa fa-eye"></i> Aperçu</a>-->
								<a href="" class="download-file"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>

						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  Veuillez joindre vos bulletins de paie
							</div>
							<div class="wrapper-action-fichier">
<!--								<a href="" class="view-file"><i class="fa fa-eye"></i> Aperçu</a>-->
								<a href="" class="download-file"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>

						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								  CNI (RECTO / VERSO)
							</div>
							<div class="wrapper-action-fichier">
<!--								<a href="" class="view-file"><i class="fa fa-eye"></i> Aperçu</a>-->
								<a href="" class="download-file"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
						<div class="line-elt-srubrique">
							<div class="elt-srubrique">
								 Facture ENEO/CAMWATER
							</div>
							<div class="wrapper-action-fichier">
<!--								<a href="" class="view-file"><i class="fa fa-eye"></i> Aperçu</a>-->
								<a href="" class="download-file"><i class="fa fa-download"></i> Télécharger</a>
							</div>
						</div>
					</div>
				
				</div>
				
				<div class="content-form">
					<form action="" id="form-pieces-justificative" class="form-ajout" enctype="multipart/form-data">
						<div class="ligne-form">
							<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
						  	<input type="button" name="btn-valider-album" value="Télécharger tous les fichiers" id="btn-valider-album" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
						  	<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
						  	<input type="hidden" name="idalbum" id="idalbum" value="<?php echo $idalbum?>"/>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>