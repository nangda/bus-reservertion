<?php 
session_start();
$token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
if(!isset($_SESSION['token'])) $_SESSION['token']= $token;
include("connectionbd.php");
include("mesfonctions.php");

if(isset($_SESSION["compte"]))$ladministrateur=getadministrateurInformations($_SESSION["compte"]);

else echo "<script language=\"javascript\">self.location='../';</script>";

?>	

<html>	



<head>

	<meta charset="utf8">	

   <meta name="robots" content="noindex, nofollow">

	<title><?php echo ucfirst($ladministrateur["prenom"])?> - Tableau de bord - BICEC CRESCO</title>

	<meta name="description" content="<?php echo $ladministrateur["prenom"]?> - DASHBORD BICEC CRESCO">

	<meta name="keywords" content="DASHBORD BICEC CRESCO">

	<meta name="author" content="Marc Merlin BAPPA">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<base href="<?php echo $base?>/bus-booking/dashbord/">

	<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>

	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">

	<link rel="stylesheet" href="css/dashbord.css">

	<link rel="stylesheet" href="css/header.css">

	<link rel="stylesheet" href="css/footer.css">

	<link rel="stylesheet" media="screen and (max-width: 1030px)" href="css/index-min.css">

	<link rel="stylesheet" media="screen and (max-width: 1030px)" href="css/header-min.css">

	<link rel="stylesheet" media="screen and (max-width: 1030px)" href="css/footer-min.css">

	<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



	<!-- Latest compiled and minified CSS -->

	<script src="js/jquery-1.8.2.min.js"></script>

	<script src="js/mesfonctions.js"></script>

	<script src="js/phpjs.js"></script>

	<script src="js/app.js"></script>

</head>



<body>



	

<div id="grand-conteneur-page">

			<?php include("includes/header-cpt.php"); ?>

			<?php include("includes/menu-cpt.php"); ?>
       <script>	
		   Fermeture_session_explicite('<?php echo base64_encode("lightbox/lightbox-notification-expiration-session.php")?>','<?php echo time()?>', '<?php echo $lastvisit["time"]?>')
       </script>

		<div id="wrap-section-right">

			  <div id="section-right">

				  <div id="wrap-entete-page">

					  <h1 id="title-page">Dashbord</h1>

					  <ul id="fil-arian">

						  <li><a href="./"><i class="fa fa-home"></i></a>

						  </li>

						  <li><a href="">Dashbord</a></a>

						  </li>

					  </ul>

				  </div>





				  <div id="wrap-content-right">

					  <!--		Gestion des enregistrement de la page		-->

					  <div id="conteneur-page">

						  <div class="wrap-bloc-page" id="bloc-graphe" >

							  <ul class="wrap-onglet-graphe">
							  	<li class="onglet-graphe actif" data-id="bloc-graphe-bref">En bref</li>
                                <?php if($niveau_dacces!="agence"){?>
							  	<li class="onglet-graphe" data-id="bloc-graphe-jour">Jour</li>
							  	<li class="onglet-graphe" data-id="bloc-graphe-semaine">Semaine</li>
							  	<li class="onglet-graphe" data-id="bloc-graphe-mois">Mois</li>
							  	<li class="onglet-graphe" data-id="bloc-graphe-mois-evolution">Evolution mensuelle</li>
                                <?php }else{?>
							  	<li class="onglet-graphe" data-id="bloc-graphe-semaine-agence">Semaine</li>
							  	<li class="onglet-graphe" data-id="bloc-graphe-mois-agence">Mois</li>
                                <?php }?>
							  </ul>
							  <div class="bloc-page  bloc-graphe bloc-graphe-jour box-shaldow" style="display: block" id="bloc-graphe-bref">
								  <div id="wrap-chart-bref">
								  </div>
							  </div>
                              <?php if($niveau_dacces!="agence"){?>

							  <div class="bloc-page  bloc-graphe bloc-graphe-jour box-shaldow"  id="bloc-graphe-jour">
								  <div id="wrap-chart">
								  </div>
							  </div>

							  <div class="bloc-page  bloc-graphe  bloc-graphe-semaine box-shaldow" id="bloc-graphe-semaine">
								  <div id="wrap-chart-semaine">
								  </div>
							  </div>
							  <div class="bloc-page  bloc-graphe  bloc-graphe-mois box-shaldow" id="bloc-graphe-mois">
								  <div id="wrap-chart-mois">
								  </div>
							  </div>
							  <div class="bloc-page  bloc-graphe  bloc-graphe-mois box-shaldow" id="bloc-graphe-mois-evolution">
								  <div id="wrap-chart-mois-evolution">
								  </div>
							  </div>
							  <?php }else{?>
							  <div class="bloc-page  bloc-graphe  bloc-graphe-semaine box-shaldow" id="bloc-graphe-semaine-agence">
								  <div id="wrap-chart-semaine-agence">
								  </div>
							  </div>

							  <div class="bloc-page  bloc-graphe  bloc-graphe-mois box-shaldow" id="bloc-graphe-mois-agence">
								  <div id="wrap-chart-mois-agence">
								  </div>
							  </div>
							  <?php }?>
						  </div>

						  

						  



						  <div class="wrap-bloc-page" id="bloc-chiffre-stat" >

							  <div class="wrap-list-bloc">

								  <div class="bloc-page box-shaldow wrap-bloc-chiffre">
									  <div class="bloc-chiffre">
										  <div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre"><?php echo GetNombreDossierParIndicateur("All", $niveau_dacces, $circonscription, $profil)?></h4>
											  <h6 class="libele-bloc-chiffre">Total des demandes</h6>
										  </div>
										  <div class="img-bloc-chiffre"><i class="fa fa-files-o"></i></div>
									  </div>
									  <div class="wrap-evolution-chiffre" onclick="GotoOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', 'tab-dossier', '<?php echo $_SESSION["token"]?>') ">
										<div class="libele-evolution">Voir d&eacute;tail</div> 
										  <div class="valeur-evolution"><i data-feather="trending-up"></i></div>
									  </div>
								  </div>
                                
								  <div class="bloc-page box-shaldow wrap-bloc-chiffre" <?php if($profil=="Gestionnaire"){?>style="display:none"<?php }else ?>>
									  <div class="bloc-chiffre">
										  <div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre"><?php echo GetNombreDossierParIndicateur("Incomplet", $niveau_dacces, $circonscription, $profil)?></h4>
											  <h6 class="libele-bloc-chiffre">Dossiers incomplets</h6>
										  </div>
										  <div class="img-bloc-chiffre"><i class="fa fa-files-o"></i></div>
									  </div>
									  <div class="wrap-evolution-chiffre" onclick="GotoOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', 'tab-dossier-incomplet', '<?php echo $_SESSION["token"]?>') ">
										<div class="libele-evolution">Voir d&eacute;tail</div>
										  <div class="valeur-evolution"><i data-feather="trending-up"></i></div>
									  </div>
								  </div>
                                  
								  <div class="bloc-page box-shaldow wrap-bloc-chiffre" <?php if($profil=="Gestionnaire"){?>style="display:none"<?php }?>>
									  <div class="bloc-chiffre">
										  <div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre"><?php echo GetNombreDossierParIndicateur("En_attente", $niveau_dacces, $circonscription, $profil)?></h4>
											  <h6 class="libele-bloc-chiffre">En attente de traitement</h6>
										  </div>
										  <div class="img-bloc-chiffre"><i class="fa fa-files-o"></i></div>
									  </div>
									  <div class="wrap-evolution-chiffre" onclick="GotoOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', 'tab-dossier-attente', '<?php echo $_SESSION["token"]?>') ">
										<div class="libele-evolution">Voir d&eacute;tail</div>
										  <div class="valeur-evolution"><i data-feather="trending-up"></i></div>
									  </div>
								  </div>

                                 

								  <div class="bloc-page box-shaldow wrap-bloc-chiffre">
									  <div class="bloc-chiffre">
										  <div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre"><?php echo GetNombreDossierParIndicateur("En_cours", $niveau_dacces, $circonscription, $profil)?></h4>
											  <h6 class="libele-bloc-chiffre"><?php if($profil!="Gestionnaire") echo"En cours de traitement"; else echo"En attente de traitement"?></h6>
										  </div>
										  <div class="img-bloc-chiffre"> <i class="fa fa-files-o"></i></div>
									  </div>

									  <div class="wrap-evolution-chiffre" onclick="GotoOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', 'tab-dossier-encours', '<?php echo $_SESSION["token"]?>') ">
										<div class="libele-evolution">Voir d&eacute;tail</div>
										  <div class="valeur-evolution"><i data-feather="trending-up"></i></div>
									  </div>

								  </div>



								  <div class="bloc-page box-shaldow wrap-bloc-chiffre">
									  <div class="bloc-chiffre">
										  <div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre"><?php echo GetNombreDossierParIndicateur("Valide", $niveau_dacces, $circonscription,$profil)?></h4>
											  <h6 class="libele-bloc-chiffre">Valid&eacute;s</h6>
										  </div>
										  <div class="img-bloc-chiffre"><i class="fa fa-files-o"></i></div>
									  </div>
									  <div class="wrap-evolution-chiffre" onclick="GotoOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', 'tab-dossier-valide', '<?php echo $_SESSION["token"]?>') ">
										<div class="libele-evolution">Voir d&eacute;tail</div>
										  <div class="valeur-evolution"><i data-feather="trending-up"></i></div>
									  </div>
								  </div>



								  <div class="bloc-page box-shaldow wrap-bloc-chiffre">
									  <div class="bloc-chiffre">
										  <div class="info-bloc-chiffre">
											  <h4 class="valeur-bloc-chiffre"><?php echo GetNombreDossierParIndicateur("Refuse", $niveau_dacces, $circonscription, $profil)?></h4>
											  <h6 class="libele-bloc-chiffre">Rejet&eacute;s</h6>
										  </div>
										  <div class="img-bloc-chiffre"><i class="fa fa-files-o"></i></div>
									  </div>
									  <div class="wrap-evolution-chiffre" onclick="GotoOnglet('<?php echo base64_encode("traitement_ajax/main.php?traitement=select-onglet&module=onglet-suivi")?>', 'tab-dossier-rejete', '<?php echo $_SESSION["token"]?>') ">
										<div class="libele-evolution">Voir d&eacute;tail</div>
										  <div class="valeur-evolution"><i data-feather="trending-up"></i></div>
									  </div>
								  </div>

							  </div>



						  </div>



						  <div class="wrap-bloc-page" id="wrap-list-user">

							  <div class="bloc-page box-shaldow">

								  <div class="wrap-titre-bloc-page">

									  <h2 class="titre-bloc-page">10 DERNIERES DEMANDES ENREGISTREES</h2>
									  <a class="link-all" href="suivi-des-demandes/">Voir toutes les d&eacute;mandes <i class="fa fa-long-arrow-right"></i></a>

								  </div>
									<table width="100%" class="tab-liste" id="table_id">
									  <thead>
										  <tr class="head-tab ligne-tab">
										      <th width=""></th>
											  <th width="" class="colonne-tab">Date</th>
											  <th width="" class="colonne-tab">R&eacute;F. </th>
											  <th width="" class="colonne-tab">CLIENT</th>
											  <th width="" class="colonne-tab" style="text-align: right">MONTANT</th>
											  <th width="" class="colonne-tab">DUR&eacute;E</th>
											  <th width="" class="colonne-tab">AGENCE </th>
											  <th width="" class="colonne-tab">VILLE DE RESIDENCE</th>
											  <th width="" class="colonne-tab">RESUME</th>
										  </tr>
									  </thead>
									  <tbody>
										<?php 
										  $query_demandeur="SELECT * FROM demandeur WHERE corbeille='0' ";
												  
										  if($niveau_dacces=="zone")$query_demandeur.=" AND zone_agence='$circonscription'";
										  if($niveau_dacces=="region")$query_demandeur.=" AND region_agence='$circonscription'";
										  elseif($niveau_dacces=="ville")$query_demandeur.=" AND ville_agence='$circonscription'";
										  elseif($niveau_dacces=="agence")$query_demandeur.=" AND agence='$circonscription'";
										  $query_demandeur.=" ORDER BY iddemandeur DESC LIMIT 0,10";
												  
										  $result_demandeur=mysql_query($query_demandeur);
										  while($demandeur=mysql_fetch_array($result_demandeur)){
											  $agence=getAgenceInformations($demandeur["agence"]);
											  $ville=getvilleInformations($demandeur["ville"]);
											  $class_etat=GetClassEtatDossier($demandeur[0]);
										 ?>
                                          <tr class="ligne-tab">
                                          <td class="colonne-tab etat-dossier <?php echo $class_etat?>"></td>
										  <td class="colonne-tab"><strong><?php echo getdatedetaille($demandeur["date_creation"], $demandeur["heure_creation"])?></strong></td>
										  <td class="colonne-tab"><strong>#0<?php echo $demandeur[0]?></strong></td>
										  <td class="colonne-tab"><strong><?php echo $demandeur["nom"]." ".$demandeur["prenom"] ;?></strong></td>
										  <td class="colonne-tab" style="text-align: right"><strong><?php echo number_format($demandeur["montant_souhaite"], 0, ',', ' '); ?> Fcfa</strong></td>
										  <td class="colonne-tab" style="text-align: right"><strong><?php echo $demandeur["duree_credit"]?> mois</strong></td>
										  <td class="colonne-tab"><?php if($agence!=false) echo "<strong>".$agence["titre"]."</strong>"; else echo "Pas encore renseign&eacute;e"?></td>
										  <td class="colonne-tab"><?php if($ville!=false) echo  "<strong>".$ville["titre"]."</strong>"; else echo "Pas encore renseign&eacute;e"?></td>
										  <td class="colonne-tab"><?php  echo GetLibelleEtatDossier($demandeur[0])?></td>
										</tr>
									     <?php }?>
										  
										  

								  </tbody></table>

							  </div>

						  </div>





						<?php 

							$tabhorairedebut=array("00:00:00","06:00:00","12:00:00","18:00:00");

							$tabhorairefin=array("05:59:00","11:59:00","17:59:00","23:59:00");

							$tabhoraire=array("00h-05h59","06h-11h59","12h-17h59","18h-23h59");

							$tabjoursemaine=array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");

	                        $jour=date("Y/m/d");

							$tabDatesemaine=dateDansLaSemaine($jour);

						?>
						<table id="datatable-bref">
							<thead>
								<tr>
									<th></th>
									<th>Nombre de demandes</th>
								</tr>
							</thead>

							<tbody>
								<tr>
								    <th>Incomplets</th>
									<th><?php echo GetNombreDossierParIndicateur("Incomplet", $niveau_dacces, $circonscription,$profil)?></th>
								</tr>
								<tr>
								    <th>En attente</th>
									<th><?php echo GetNombreDossierParIndicateur("En_attente", $niveau_dacces, $circonscription,$profil)?></th>
								</tr>
								<tr>
								    <th>En cours de traitement</th>
									<th><?php echo GetNombreDossierParIndicateur("En_cours", $niveau_dacces, $circonscription,$profil)?></th>
								</tr>
								<tr>
								    <th>Validés</th>
									<th><?php echo GetNombreDossierParIndicateur("valide", $niveau_dacces, $circonscription,$profil)?></th>
								</tr>
								<tr>
								    <th>Rejet&eacute;s</th>
									<th><?php echo GetNombreDossierParIndicateur("refuse", $niveau_dacces, $circonscription, $profil)?></th>
								</tr>
							</tbody>

						</table>
						
        <?php if($niveau_dacces!="agence"){?>
						<table id="datatable">
							<thead>
								<tr>
									<th></th>
									<th>Nombre de demandes</th>
								</tr>
							</thead>

							<tbody>
							   <?php 
								$arrX = array(6, 7,8, 9);
								$jour=date("Y/m/d");
								$query_agence="SELECT * FROM agence WHERE etat='1' ";
								if($niveau_dacces=="zone")$query_agence.=" AND zone='$circonscription'";
								elseif($niveau_dacces=="region")$query_agence.=" AND idregion='$circonscription'";
								elseif($niveau_dacces=="ville")$query_agence.=" AND idville='$circonscription'";
	                            $query_agence.=" ORDER BY titre ASC";
								$result_agence=mysql_query($query_agence);
                                
								while($agence=mysql_fetch_array($result_agence)){
                                    $nbdossier=GetNombreDossierParJourParAgence($jour,$agence[0], $niveau_dacces, $circonscription);
							   ?>
								<tr>
								    <th><?php echo $agence["titre"]?></th>
									<th><?php echo $nbdossier?></th>
								</tr>
								<?php }?>
							</tbody>

						</table>

						<table id="datatable-semaine">

							<thead>
								<tr>
									<th></th>
									<th>Nombre de demandes</th>
								</tr>
							</thead>

							<tbody>

							   <?php 
								
								$jour=date("Y-m-d");
								$time = strtotime($jour);

								$first_day_of_week = date('Y/m/d', strtotime('Last Monday', $time));
								$last_day_of_week = date('Y/m/d', strtotime('Next Sunday', $time));
								
								$query_agence="SELECT * FROM agence WHERE etat='1' ";
								if($niveau_dacces=="zone")$query_agence.=" AND zone='$circonscription'";
								elseif($niveau_dacces=="region")$query_agence.=" AND idregion='$circonscription'";
								elseif($niveau_dacces=="ville")$query_agence.=" AND idville='$circonscription'";
	                            $query_agence.=" ORDER BY titre ASC";
								$result_agence=mysql_query($query_agence);
                                
								while($agence=mysql_fetch_array($result_agence)){
                                    $nbdossier=GetNombreDossierParPeriodeParAgence($first_day_of_week,$last_day_of_week,$agence[0], $niveau_dacces, $circonscription);
							   ?>
								<tr>
								    <th><?php echo $agence["titre"]?></th>
									<th><?php echo $nbdossier?></th>
								</tr>
								<?php }?>



							</tbody>

						</table>
						

						<table id="datatable-mois">

							<thead>
								<tr>
									<th></th>
									<th>Nombre de demandes </th>
								</tr>
							</thead>

							<tbody>

							   <?php 
								
								$jour=date("Y-m-d");
								$time = strtotime($jour);

								$first_day_of_month = date('Y/m/01');
								$last_day_of_month = date('Y/m/t');
								
								$query_agence="SELECT * FROM agence WHERE etat='1' ";
								if($niveau_dacces=="zone")$query_agence.=" AND zone='$circonscription'";
								elseif($niveau_dacces=="region")$query_agence.=" AND idregion='$circonscription'";
								elseif($niveau_dacces=="ville")$query_agence.=" AND idville='$circonscription'";
	                            $query_agence.=" ORDER BY titre ASC";
								$result_agence=mysql_query($query_agence);
                                
								while($agence=mysql_fetch_array($result_agence)){
                                    $nbdossier=GetNombreDossierParPeriodeParAgence($first_day_of_month,$last_day_of_month,$agence[0], $niveau_dacces, $circonscription);
							   ?>
								<tr>
								    <th><?php echo $agence["titre"]?></th>
									<th><?php echo $nbdossier?></th>
								</tr>
								<?php }?>



							</tbody>

						</table>
						<table id="datatable-mois-evolution">
							<thead>
								<tr>
									<th></th>
								   <?php 

								$query_agence="SELECT * FROM agence WHERE etat='1' ";
								if($niveau_dacces=="zone")$query_agence.=" AND zone='$circonscription'";
								elseif($niveau_dacces=="region")$query_agence.=" AND idregion='$circonscription'";
								elseif($niveau_dacces=="ville")$query_agence.=" AND idville='$circonscription'";
	                            $query_agence.=" ORDER BY titre ASC";
									$result_agence=mysql_query($query_agence);

									while($agence=mysql_fetch_array($result_agence)){
										
								   ?>
									<th><?php echo $agence["titre"]?></th>
								   <?php }?>
								</tr>
							</thead>
							<tbody>
							   <?php 
								for($i=1; $i<=31; $i++){
									if($i<10)$j="0".$i; else $j=$i;
									$ladate=date("Y/m/").$j;
									
									
							   ?>
							   <?php if(checkdate ( date("m") , $j , date("Y") )){?>
									<tr>
							         <th><?php echo $j?></th>
								   <?php 

								$query_agence="SELECT * FROM agence WHERE etat='1' ";
								if($niveau_dacces=="zone")$query_agence.=" AND zone='$circonscription'";
								elseif($niveau_dacces=="region")$query_agence.=" AND idregion='$circonscription'";
								elseif($niveau_dacces=="ville")$query_agence.=" AND idville='$circonscription'";
	                            $query_agence.=" ORDER BY titre ASC";
									$result_agence=mysql_query($query_agence);

									while($agence=mysql_fetch_array($result_agence)){
									$nbdossier=GetNombreDossierParJourParAgence($ladate,$agence[0], $niveau_dacces, $circonscription);	
								   ?>
							   
										
										<td><?php echo $nbdossier;?></td>
									
									<?php }?>
									</tr>
								<?php }?>
                              <?php }?>
							</tbody>
						</table>
					<?php }else{?>	
						<table id="datatable-semaine-agence">

							<thead>
								<tr>
									<th></th>
									<th>Nombre de demandes</th>
								</tr>
							</thead>

							<tbody>

							   <?php 
								
								$jour=date("Y/m/d");
								$time = strtotime($jour);
                                $week=getweek_first_last_date($jour);
								$first_day_of_week = $week['first_day_of_week'];
								$last_day_of_week = $week['last_day_of_week'];
								$weekdays=getdatesoftheweek($first_day_of_week);
								$first_day_of_month = date('Y/m/01');
								$last_day_of_month = date('Y/m/t');
								
								
                                $idagence=$circonscription;
								foreach($weekdays as $clef => $valeur){
                                    $nbdossier=GetNombreDossierParJourParAgence($valeur,$idagence, $niveau_dacces, $circonscription);
							   ?>
								<tr>
								    <th><?php echo ucfirst($clef)?></th>
									<th><?php echo $nbdossier?></th>
								</tr>
								<?php }?>



							</tbody>

						</table>
						<table id="datatable-mois-agence">
							<thead>
								<tr>
									<th></th>
									<th>Nombre de demandes </th>
								</tr>
							</thead>
							<tbody>
							   <?php 
								for($i=1; $i<=31; $i++){
									if($i<10)$j="0".$i; else $j=$i;
									$ladate=date("Y/m/").$j;
							   ?>
							   <?php if(checkdate ( date("m") , $j , date("Y") )){?>
									<tr>
							         <th>  <?php echo $j?></th>
								   <?php 
									 $nbdossier=GetNombreDossierParJourParAgence($ladate,$idagence, $niveau_dacces, $circonscription);
								   ?>
										<td><?php echo $nbdossier;?></td>
									
									</tr>
								<?php }?>
                              <?php }?>
							</tbody>
						</table>
					<?php }?>
					  </div>
				  </div>
			  </div>
			</div>
	</div>

		</div>
		<div>

			<div></div>

		</div>



<!-- Resources -->

<script src="js/highcharts.js"></script>

<script src="js/exporting.js"></script>

<script src="js/export-data.js"></script>

<script src="js/data.js"></script>

		<script>

Highcharts.chart('wrap-chart-bref', {

    data: {
        table: 'datatable-bref'
    },

     chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },

    title: {
        text: 'Etat général des dossiers au <?php echo getdatedetaille(date("Y/m/d"),"");?>'
    },
	accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
   plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            },
            showInLegend: true
        }
    },

    //colors: ['#491d05', '#ff5252', '#background-color: #e37b03;','#910000', '#9ccc65','#fe2d01'],
	colors: ['#491d05', '#F9C70C', '#E37B03', '#50B432', '#FE2D01', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
    tooltip: {
        formatter: function () {
            return '<b>' + ucfirst(this.point.name.toLowerCase()) + '</b><br/>' +
                this.point.y + ' Demandes';
        }
    }
});	
			
			//feather.replace()
<?php if($niveau_dacces!="agence"){?>

			
Highcharts.chart('wrap-chart', {

    data: {
        table: 'datatable'
    },

    chart: {
        type: 'column'
    },

    title: {
        text: '<?php echo getdatedetaille(date("Y/m/d"),"");?>'
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Nombres de demandes'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + ucfirst(this.point.name.toLowerCase()) + '</b><br/>' +
                this.point.y + ' Demandes';
        }
    }
});			

			

Highcharts.chart('wrap-chart-semaine', {

    data: {
        table: 'datatable-semaine'
    },
    chart: {
        type: 'column'
    },

    title: {
        text: 'Du <?php echo getdatedetaille($first_day_of_week,"")?> au <?php echo getdatedetaille($last_day_of_week,"")?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Nombres de demandes'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + ucfirst(this.point.name.toLowerCase()) + '</b><br/>' +
                this.point.y + ' Demandes';
        }
    }
});	

Highcharts.chart('wrap-chart-mois', {

    data: {
        table: 'datatable-mois'
    },
    chart: {
        type: 'column'
    },

    title: {
        text: 'Du <?php echo getdatedetaille($first_day_of_month,"")?> au <?php echo getdatedetaille($last_day_of_month,"")?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Nombres de demandes'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + ucfirst(this.point.name.toLowerCase()) + '</b><br/>' +
                this.point.y + ' Demandes';
        }
    }   

});	
	
Highcharts.chart('wrap-chart-mois-evolution', {
    data: {
        table: 'datatable-mois-evolution'
    },
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Evolution des demandes par agence durant le mois en cours'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Nombres de demandes'
        }
    },
   
    tooltip: {
        crosshairs: true,
        shared: true
    }
   
});		
			
<?php }else{?>			
Highcharts.chart('wrap-chart-semaine-agence', {

    data: {
        table: 'datatable-semaine-agence'
    },
    chart: {
        type: 'column'
    },

    title: {
        text: 'Du <?php echo getdatedetaille($first_day_of_week,"")?> au <?php echo getdatedetaille($last_day_of_week,"")?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Nombres de demandes'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }    
	}
});	

Highcharts.chart('wrap-chart-mois-agence', {

    data: {
        table: 'datatable-mois-agence'
    },
    chart: {
        type: 'column'
    },

    title: {
        text: 'Du <?php echo getdatedetaille($first_day_of_month,"")?> au <?php echo getdatedetaille($last_day_of_month,"")?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Nombres de demandes'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>Le ' + (this.point.x) + '</b><br/>' +
                this.point.y + ' Demandes';
        }
    }   

});	

<?php }?>

			$( document ).ready( function () {
				$( '.menu.dropdown' ).click( function () {

					$( '.wrap-smenu-left' ).hide( '' );

					if ( $( this ).find( '.wrap-smenu-left' ).is( ':visible' ) ) {

						$( this ).find( '.wrap-smenu-left' ).hide( '' );

					} else {

						$( this ).find( '.wrap-smenu-left' ).show( '' );

					}

				} )


			} )

		</script>







		<script>

			//feather.replace()





			$( document ).ready( function () {

				$(".contain-tab").fadeOut("slow");

				  $(".contain-tab").first().fadeIn("slow");

				  $(".onglet-tontine").click(function(){

				   $(".onglet-tontine").removeClass('actif');

				   $(this).addClass('actif');

				   var id=$(this).attr('data-id');

		;		  $(".contain-tab").fadeOut();

				  $("#"+id+"").fadeIn();

				})

				  $(".onglet-graphe").click(function(){

				   $(".onglet-graphe").removeClass('actif');

				   $(this).addClass('actif');

				   var id=$(this).attr('data-id');

		;		  $(".bloc-graphe").css({'display':'none'});

				  $("#"+id+"").css({'display':'block'});

				})

				

				

				$( '.menu.dropdown' ).click( function () {

					$( '.wrap-smenu-left' ).hide( 'slow' );

					if ( $( this ).find( '.wrap-smenu-left' ).is( ':visible' ) ) {

						$( this ).find( '.wrap-smenu-left' ).hide( 'slow' );

					} else {

						$( this ).find( '.wrap-smenu-left' ).show( 'slow' );

					}

				} )


				$( '.btn-ajouter' ).click( function () {

					if ( $( '#wrap-form-conteneur' ).is( ':visible' ) ) {

						$( '#wrap-form-conteneur' ).slideUp( 'slow' );

						return false;

					} else {

						$( '#wrap-form-conteneur' ).slideDown( 'slow' );

						return false;
					}

				} )
				$( "#btn-cancel-form" ).click( function () {

					$( "#form-page" )[ 0 ].reset();

					$( '.btn-ajouter' ).click();

				} )
			} )

		</script>
<?php 
if(time()-$lastvisit["time"]>1200){
	// unset($_SESSION["compte"]);
}else{

	$compte=$ladministrateur["nom"]." ".$ladministrateur["prenom"];
	$idcompte=$ladministrateur[0];
	$page="Dashbord";
	$operation="Lecture";
	$requete=$query_region;
	$libelle="Acc&egrave;s &agrave; la page DASHBORD";
	$type="Admin";
	Enregistrer_visite($compte, $idcompte=0,$page,$operation,$requete, $libelle, $type);
}

?>	
	</body>

</html>