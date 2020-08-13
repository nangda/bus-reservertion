
		<?php 
			$tab_mois = array( "", "Janvier", "F&eacute;vrier.", "Mars", "Avril", "Mai", "Juin", "Juillet", "Ao&ucirc;t", "Septembre.", "Octobre", "Novembre", "D&eacute;cembre" );
            unset($_SESSION["login_membre"]);
		?>
		<!doctype html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>CONFIRMATION DU NUMERO DE TELEPHONE .::GABON NOUVEAU::.</title>
			<meta name="description" content="Identification à l'espace membre du Mouvement Gabon Nouveau">
			<meta name="keywords" content="Mouvement, Gabon, Nouveau, Adh&eacute;sion">
			<meta name="author" content="Marc Merlin BAPPA">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
			<link href="http://luxwebhostingservices.net/gn/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		</head>

		<body>

		<div class="wrap-container" style="font-family: 'Open Sans', sans-serif;; min-height: 100vh;position: relative;text-align: center;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: flex;justify-content: flex-start;align-items: center;box-sizing:border-box;flex-direction: column;  padding-top: 100px;">
			<div class="container validation-compte" style="display: flex;justify-content: center;overflow: hidden;flex-direction: column;align-items: center;box-shadow: 1px 1px 20px 0px #e0e0e0;border-radius: 5px;max-width: 90%;padding: 50px 0 30px;width: 500px;">
			<div class="wrap-img"><img style="max-width: 110px;" src="http://luxwebhostingservices.net/gn/images/logo-vert.png" alt=""></div>
				<h3 class="titre-confirmation" style="margin: 15px 0 0 0;font-size: 17px;font-weight: 300;"><strong><?php echo utf8_decode($membre["prenom"]) ?>, <?php echo utf8_encode($membre["sexe"]) ?> de <?php echo utf8_encode($membre["age"]) ?> ans</strong> <br>vient de re joindre le mouvement <strong>Gabon Nouveau</strong>.</h3>
				<div class="content-form" style="padding: 25px 50px 0;width: 100%;text-align: left;box-sizing: border-box;">
					<table class="wrap-content-detail-element" style="margin-bottom: 25px;width: 100%;">
						<tbody>
						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">Nom et pr&eacute;nom: </td>
							   <td style="font-style: italic;"><?php echo utf8_encode($membre["nom"]) ?>&nbsp;<?php echo utf8_encode($membre["prenom"]) ?></td> 
						  </tr>
							<tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">Date de naissance </td>
							   <td style="font-style: italic;"><?php echo convertir_date_francais($membre["date_naissance"]) ?></td> 
							</tr>
						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">Nationalit&eacute; </td> 
							  <td style="font-style: italic;"><?php echo utf8_encode($membre["natinalite"]) ?></td> 
						  </tr>
						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							<td style="width: 32%;font-weight: 600">Profession </td> 
							<td style="font-style: italic;"><?php echo utf8_encode($membre["profession"]) ?></td> 
						  </tr>
						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">T&eacute;l&eacute;phone </td> 
							  <td style="font-style: italic;"><?php echo utf8_encode($indicatif.$telephone) ?></td> 
						  </tr>

						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">Pays de r&eacute;sidence : </td> 
							  <td style="font-style: italic;"><?php echo utf8_encode($membre["pays"]) ?> </td> 
						  </tr>

						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">Ville: </td> 
							  <td style="font-style: italic;"><?php echo utf8_encode($membre["ville"]) ?> </td> 
						  </tr>
						  <tr style="display: flex; align-items: center; padding: 8px 0; font-size: 13px; border-bottom: 1px dotted gray;">
							  <td style="width: 32%;font-weight: 600">Adresse pr&eacute;cise</td> 
							  <td style="font-style: italic;"><?php echo utf8_encode($membre["adresse"]) ?> </td> 
						  </tr>
						 
						</tbody>
					</table>		
      			</div>
				
				<div class="redirection" style="display: flex;align-items: center;justify-content: center;width: 100%;margin-top: 15px;border-top: 1px solid #d2d2d2;padding-top: 15px;"><strong>NOUS SUIVRE :</strong> 
				<ul class="social-list clearfix" style="display: flex;list-style: none;margin: 0 0 0 10px;padding: 0;justify-content: center;">
                        <li><a style="text-decoration:none; color:inherit;" href="https://www.facebook.com/LeGABONNOUVEAU/" target="_blank"><i style="margin: 0 0 0 10px;background-color:green;height:30px;width:30px;display:flex;align-items:center;justify-content:center; color:#fff; font-size:12px; border-radius:50%;background-color: #4267B2;" class="fa fa-facebook"></i></a></li>
                        <li><a style="text-decoration:none; color:inherit;" href="https://twitter.com/GabonNouveau" target="_blank"><i style="margin: 0 0 0 10px;background-color:green;height:30px;width:30px;display:flex;align-items:center;justify-content:center; color:#fff; font-size:12px; border-radius:50%;background-color: #1DA1F2;" class="fa fa-twitter"></i></a></li>
                        <li><a style="text-decoration:none; color:inherit;" href="#"><i style="margin: 0 0 0 10px;background-color:green;height:30px;width:30px;display:flex;align-items:center;justify-content:center; color:#fff; font-size:12px; border-radius:50%;background-color: #db3236;" class="fa fa-google-plus"></i></a></li>
                        <li><a style="text-decoration:none; color:inherit;" href="#"><i style="margin: 0 0 0 10px;background-color:green;height:30px;width:30px;display:flex;align-items:center;justify-content:center; color:#fff; font-size:12px; border-radius:50%;    background-color: #0077B5;" class="fa fa-linkedin"></i></a></li>
                    </ul></div>
				<div class="site" style="font-size: 14px;color: #25A76E;text-decoration: underline;margin-top: 8px;">www.gabonnouveau.org</div>
			</div>
		</div>
		
		</body>
		</html>