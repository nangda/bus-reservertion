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

		<div class="lightbox" id="lightbox-droit-utilisateur">

			<div class="entete-lightbox">Suivi du dossier

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-suivi">
				
				<div class="wrapper-line-msg-follow-up">
					<div class="line-msg-follow-up customer">
						<div class="wrap-msg-follow-up">
							<div class="wrap-img-user-msg"><img src="images/admin.png" alt=""></div>
							<div class="wrap-msg-user">							
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius vestibulum tempus. Proin dignissim auctor venenatis. Fusce ultricies mi massa, in posuere enim porta in.
							</div>
						</div>
					</div>
					
					<div class="line-msg-follow-up admin">
						<div class="wrap-msg-follow-up">
							<div class="wrap-img-user-msg"><img src="images/admin.png" alt=""></div>
							<div class="wrap-msg-user">							
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius vestibulum tempus. Proin dignissim auctor venenatis. Fusce ultricies mi massa, in posuere enim porta in.
							</div>
						</div>
					</div>
					<div class="line-msg-follow-up admin">
						<div class="wrap-msg-follow-up">
							<div class="wrap-img-user-msg"><img src="images/admin.png" alt=""></div>
							<div class="wrap-msg-user">							
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius vestibulum tempus. Proin dignissim auctor venenatis. Fusce ultricies mi massa, in posuere enim porta in.
							</div>
						</div>
					</div>
					<div class="line-msg-follow-up customer">
						<div class="wrap-msg-follow-up">
							<div class="wrap-img-user-msg"><img src="images/admin.png" alt=""></div>
							<div class="wrap-msg-user">							
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius vestibulum tempus. Proin dignissim auctor venenatis. Fusce ultricies mi massa, in posuere enim porta in.
							</div>
						</div>
					</div>
					<div class="line-msg-follow-up customer">
						<div class="wrap-msg-follow-up">
							<div class="wrap-img-user-msg"><img src="images/admin.png" alt=""></div>
							<div class="wrap-msg-user">							
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius vestibulum tempus. Proin dignissim auctor venenatis. Fusce ultricies mi massa, in posuere enim porta in.
							</div>
						</div>
					</div>
				</div>

				<div class="content-form">
					<form action="" id="form-ajout-suivi" class="form-ajout" enctype="multipart/form-data">
                      	
						<div class="ligne-form">

							<div class="wrap-field-form middle">
								<textarea name="commentaire-traitement" placeholder="votre message ici" class="mandatory-album" id="commentaire-traitement" cols="30" rows="10" data-error-contener="div-erreur-champ-nom-a" onKeyup="Verif_saisie(event, 'nom-a', 'btn-valider')"> </textarea>
							</div>
							<div class="wrap-field-form middle">
								<div class="ligne-form ligne-btn">
									<input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');">
									<input type="button" name="btn-valider-album" value="Envoyer" id="btn-valider-album" class="btn-submit" onClick="<?php echo $url_enregistrer?>">
									<input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/>
									<input type="hidden" name="idalbum" id="idalbum" value="<?php echo $idalbum?>"/>
								</div>
							</div>
						</div>
						

					</form>

				</div>

			</div>

		</div>

</body>

</html>