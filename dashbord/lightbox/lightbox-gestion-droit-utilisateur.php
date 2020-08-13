<?php

@session_start();

include("../connectionbd.php");

include("../mesfonctions.php");



?>

<?php 



	$idadministrateur=mysql_real_escape_string  ($_GET["idadministrateur"]);

	$administrateur=getadministrateurInformations($idadministrateur);
    $droit=getDroitAccesAdministrateur($idadministrateur);

	$ville=getvilleInformations($administrateur["idville"]);



	$createur=getAdministrateurInformations($administrateur["createur"]);

	$modificateur=getAdministrateurInformations($administrateur["modificateur"]);

	$valideur=getAdministrateurInformations($administrateur["valideur"]);

    $url_enregistrer="Enregistrer_doit_daccess('".base64_encode('traitement_ajax/main.php?traitement=enregistrement-droit-utilisateur')."', '$idadministrateur')";

?><!doctype html>

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

		<div class="lightbox" id="lightbox-droit-utilisateur">

			<div class="entete-lightbox">Gestion des accès et droits de : <?php echo utf8_encode($administrateur["nom"]." ".$administrateur["prenom"])?>

				<div class="close-lightbox" onClick="Cacher_loader('loader');">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">

						<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306        C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3        l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/> </svg>

				</div>

			</div>

			<div class="contenu-lightbox" id="conteneur-utilisation">

				<div class="content-form">

					<form action="" id="form-ajout-utilisateur" class="form-ajout" enctype="multipart/form-data">

						<ul class="wrapper-module-user">

							<li class="wrap-module-user">

								<input type="checkbox" id="donne-de-base" name="donne-de-base" class="check-module-user" <?php if($droit!=false AND $droit["donnee_de_base"]==1){?>checked<?php }?> >

								<label for="donne-de-base" class="label-module-user">Données de base</label>

								<ul class="wrapper-menu-user">

									<li class="wrap-menu-user">

										<input type="checkbox" id="region" name="region" class="check-menu-user" <?php if($droit!=false AND $droit["region"]==1){?>checked<?php }?>>

										<label for="region" class="label-menu-user">Les Regions</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="editer-region" name="editer-region" class="check-user-acces" <?php if($droit!=false AND $droit["editer_region"]==1){?>checked<?php }?>>

												<label for="editer-region" class="label-user-acces">Editer</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="valider-region" name="valider-region" class="check-user-acces" <?php if($droit!=false AND $droit["valider_region"]==1){?>checked<?php }?>>

												<label for="valider-region" class="label-user-acces">Valider</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-region" name="supprimer-region" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_region"]==1){?>checked<?php }?>>

												<label for="supprimer-region" class="label-user-acces">Supprimer</label>

											</li>

										</ul>

									</li>

									

									<li class="wrap-menu-user">

										<input type="checkbox" id="ville" name="ville" class="check-menu-user" <?php if($droit!=false AND $droit["ville"]==1){?>checked<?php }?>>

										<label for="ville" class="label-menu-user">Les villes</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="editer-ville" name="editer-ville" class="check-user-acces" <?php if($droit!=false AND $droit["editer_ville"]==1){?>checked<?php }?>>

												<label for="editer-ville" class="label-user-acces">Editer</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="valider-ville" name="valider-ville" class="check-user-acces" <?php if($droit!=false AND $droit["valider_ville"]==1){?>checked<?php }?>>

												<label for="valider-ville" class="label-user-acces">Valider</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-ville" name="supprimer-ville" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_ville"]==1){?>checked<?php }?>>

												<label for="supprimer-ville" class="label-user-acces">Supprimer</label>

											</li>

										</ul>

									</li>

									

									<li class="wrap-menu-user">

										<input type="checkbox" id="agence" name="agence" class="check-menu-user" <?php if($droit!=false AND $droit["agence"]==1){?>checked<?php }?>>

										<label for="agence" class="label-menu-user">Les Agences</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="editer-agence" name="editer-agence" class="check-user-acces" <?php if($droit!=false AND $droit["editer_agence"]==1){?>checked<?php }?>>

												<label for="editer-agence" class="label-user-acces">Editer</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="valider-agence" name="valider-agence" class="check-user-acces" <?php if($droit!=false AND $droit["valider_agence"]==1){?>checked<?php }?>>

												<label for="valider-agence" class="label-user-acces">Valider</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-agence" name="supprimer-agence" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_agence"]==1){?>checked<?php }?>>

												<label for="supprimer-agence" class="label-user-acces">Supprimer</label>

										      </li>

										</ul>

									</li>
									<li class="wrap-menu-user">

										<input type="checkbox" id="agence" name="agence" class="check-menu-user" <?php if($droit!=false AND $droit["agence"]==1){?>checked<?php }?>>

										<label for="agence" class="label-menu-user">Importation des données</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="editer-importation" name="editer-importation" class="check-user-acces" <?php if($droit!=false AND $droit["editer_importation"]==1){?>checked<?php }?>>

												<label for="editer-importation" class="label-user-acces">Editer</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="valider-importation" name="valider-importation" class="check-user-acces" <?php if($droit!=false AND $droit["valider_importation"]==1){?>checked<?php }?>>

												<label for="valider-importation" class="label-user-acces">Valider</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-importation" name="supprimer-importation" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_importation"]==1){?>checked<?php }?>>

												<label for="supprimer-importation" class="label-user-acces">Supprimer</label>

										      </li>

										</ul>

									</li>

								</ul>

							</li>

							

							<li class="wrap-module-user">

								<input type="checkbox" id="suivi-de-demande" name="suivi-de-demande" class="check-module-user" <?php if($droit!=false AND $droit["suivi_des_demandes"]==1){?>checked<?php }?>>

								<label for="suivi-de-demande" class="label-module-user">Suivi des demandes</label>

								<ul class="wrapper-menu-user">

									<li class="wrap-menu-user">


										<label for="menu-user-2-1" class="label-menu-user no-checbox">Hierachie de consultation des données</label>
                                       
										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces wrap-select">
                                              
											    <select name="niveau_dacces" id="wrapper-hierachie-donnee-1" onChange="Select_cirsconscription('<?php echo base64_encode("traitement_ajax/main.php?traitement=select_cirsconscription_utilisateur")?>', '<?php echo $_SESSION["token"]?>')">
											      <option value="Toutes" <?php if($droit!=false AND $droit["niveau_dacces"]=="Toutes"){?>SELECTED<?php }?>>Toutes</option>
											      <option value="zone" <?php if($droit!=false AND $droit["niveau_dacces"]=="zone"){?>SELECTED<?php }?>>Zone</option>
											      <option value="region" <?php if($droit!=false AND $droit["niveau_dacces"]=="region"){?>SELECTED<?php }?>>R&eacute;gion</option>
											      <option value="ville" <?php if($droit!=false AND $droit["niveau_dacces"]=="ville"){?>SELECTED<?php }?>>Ville</option>
											      <option value="agence" <?php if($droit!=false AND $droit["niveau_dacces"]=="agence"){?>SELECTED<?php }?>>Agence</option>
										      </select>
									        										  
									        <label for="wrapper-hierachie-donnee-1" class="label-user-acces select-label-select">Niveau d'accès</label>

											</li>

											

											<li class="wrap-user-acces wrap-select">

												<select name="circonscription" id="wrapper-hierachie-donnee-2">
													<?php
													     if($droit!=false){
															 $niveau_dacces=$droit["niveau_dacces"];
																 if($niveau_dacces=="Toutes"){
																	 $option.="<option value=\"Toutes\">Toutes</option>";
																 }elseif($niveau_dacces=="zone"){
																		 if($droit["circonscription"]=="Maritime") $selected="SELECTED"; else $selected="";
																		 $option.="<option value=\"Maritime\" $selected>Maritime</option>";
																	 
																		 if($droit["circonscription"]=="Centrale") $selected="SELECTED"; else $selected="";
																		 $option.="<option value=\"Centrale\" $selected>Centrale</option>";
																 }elseif($niveau_dacces=="region"){
																	 $query_region="SELECT * FROM region WHERE etat='1' ORDER BY titre ASC";
																	 $result_region=mysql_query($query_region);
																	 $option="";
																	 while($region=mysql_fetch_array($result_region)){
																		 $option.="<option value=\"$region[0]\">".utf8_encode($region["titre"])."</option>";
																	 }
																 }elseif($niveau_dacces=="ville"){
																	 $query_ville="SELECT * FROM ville  ORDER BY titre ASC";
																	 $result_ville=mysql_query($query_ville);
																	 $option="";
																	 while($ville=mysql_fetch_array($result_ville)){
																		 $option.="<option value=\"$ville[0]\">".utf8_encode($ville["titre"])."</option>";
																	 }
																 }elseif($niveau_dacces=="agence"){
																	     $lagence=getAgenceInformations($droit["circonscription"]);
																		 $query_agence="SELECT * FROM agence WHERE idville='".$lagence["idville"]."'  ORDER BY titre ASC";
																		 $result_agence=mysql_query($query_agence);
																		 while($agence=mysql_fetch_array($result_agence)){
																			 if($droit["circonscription"]==$agence[0]) $selected="SELECTED";
																			 else $selected="";
																			 $option.="<option value=\"$agence[0]\" $selected>".($agence["titre"])."</option>";
																		 }
																	
																 }
															 
															 echo $option;
														 }else{
															 echo "<option value=\"Toutes\">Toutes</option>";
														 }
													
													
													?>

												</select>

												<label for="wrapper-hierachie-donnee-2" class="label-user-acces select-label-select">Circonscriptions </label>

											</li>

										</ul>

									</li>

									

									<li class="wrap-menu-user">

										<label for="menu-user-2-2" class="label-menu-user no-checbox">Traitement des demandes</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="affecter-dossier" name="affecter-dossier" class="check-user-acces" <?php if($droit!=false AND $droit["affecter_dossier"]==1){?>checked<?php }?>>

												<label for="affecter-dossier" class="label-user-acces">Peut affecter les dossiers aux gestionnaires</label>

											</li>

											<li class="wrap-user-acces">

												<input type="checkbox" id="acces-piece-jointe" name="acces-piece-jointe" class="check-user-acces" <?php if($droit!=false AND $droit["suivi_des_demandes"]==1){?>checked<?php }?>>

												<label for="acces-piece-jointe" class="label-user-acces">Aperçu des pièces jointes</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="suivi-demande" name="suivi-demande" class="check-user-acces" <?php if($droit!=false AND $droit["consulter_les_echanges"]==1){?>checked<?php }?>>

												<label for="suivi-demande" class="label-user-acces">Peut consulter les échanges avec les clients</label>

											</li>

											<li class="wrap-user-acces">

												<input type="checkbox" id="reponse-demande" name="reponse-demande" class="check-user-acces" <?php if($droit!=false AND $droit["suivi_des_demandes"]==1){?>checked<?php }?>>

												<label for="reponse-demande" class="label-user-acces">Peut échanger avec les clients</label>

											</li>

											

											<li class="wrap-user-acces"> 

												<input type="checkbox" id="cloturer_demande" name="cloturer_demande" class="check-user-acces" <?php if($droit!=false AND $droit["cloturer_demande"]==1){?>checked<?php }?>>

												<label for="cloturer_demande" class="label-user-acces">Peut Cl&ocirc;turer les dossiers</label>

											</li>

											<li class="wrap-user-acces">

												<input type="checkbox" id="mise-corbeille" name="mise-corbeille" class="check-user-acces" <?php if($droit!=false AND $droit["suivi_des_demandes"]==1){?>checked<?php }?>>

												<label for="mise-corbeille" class="label-user-acces">Mettre à la corbeille</label>

											</li>

										</ul>

									</li>

									

								</ul>

							</li>

							

							<li class="wrap-module-user">

								<input type="checkbox" id="administrateur" name="administrateur" class="check-module-user" <?php if($droit!=false AND $droit["utilisateur"]==1){?>checked<?php }?>>

								<label for="administrateur" class="label-module-user">Administrateurs</label>

								<ul class="wrapper-menu-user">

									<li class="wrap-menu-user">

										<input type="checkbox" id="gestion-administrateur" name="gestion-administrateur" class="check-menu-user" <?php if($droit!=false AND $droit["gestion_des_utilisateurs"]==1){?>checked<?php }?>>

										<label for="gestion-administrateur" class="label-menu-user">Gestion des administrateurs</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="editer-administrateur" name="editer-administrateur" class="check-user-acces" <?php if($droit!=false AND $droit["editer_administrateur"]==1){?>checked<?php }?>>

												<label for="editer-administrateur" class="label-user-acces">Editer</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="suspendre-administrateur" name="suspendre-administrateur" class="check-user-acces" <?php if($droit!=false AND $droit["valider_administrateur"]==1){?>checked<?php }?>>

												<label for="suspendre-administrateur" class="label-user-acces">Suspendre</label>

											</li>

											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-administrateur" name="supprimer-administrateur" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_administrateur"]==1){?>checked<?php }?>>

												<label for="supprimer-administrateur" class="label-user-acces">Supprimer</label>

											</li>

										</ul>

									</li>

									

									<li class="wrap-menu-user">

										<input type="checkbox" id="historique-session" name="historique-session" class="check-menu-user" <?php if($droit!=false AND $droit["historique_de_session"]==1){?>checked<?php }?>>

										<label for="historique-session" class="label-menu-user">Historique des sessions</label>
										<ul class="wrapper-user-acces">

											
											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-session" name="supprimer-session" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_visite"]==1){?>checked<?php }?>>

												<label for="supprimer-session" class="label-user-acces">Supprimer</label>

											</li>

										</ul>

									</li>

									

									<li class="wrap-menu-user">

										<input type="checkbox" id="gestion-ip-autorise" name="gestion-ip-autorise" class="check-menu-user" <?php if($droit!=false AND $droit["gestion_ip"]==1){?>checked<?php }?>>

										<label for="gestion-ip-autorise" class="label-menu-user">Gestion des IP autorisées</label>

										<ul class="wrapper-user-acces">

											<li class="wrap-user-acces">

												<input type="checkbox" id="editer-ip-autorise" name="editer-ip-autorise" class="check-user-acces" <?php if($droit!=false AND $droit["editer_ip"]==1){?>checked<?php }?>>

												<label for="editer-ip-autorise" class="label-user-acces">Editer</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="valider-ip-autorise" name="valider-ip-autorise" class="check-user-acces" <?php if($droit!=false AND $droit["valider_ip"]==1){?>checked<?php }?>>

												<label for="valider-ip-autorise" class="label-user-acces">Valider</label>

											</li>

											

											<li class="wrap-user-acces">

												<input type="checkbox" id="supprimer-ip-autorise" name="supprimer-ip-autorise" class="check-user-acces" <?php if($droit!=false AND $droit["supprimer_ip"]==1){?>checked<?php }?>>

												<label for="supprimer-ip-autorise" class="label-user-acces">Supprimer</label>

											</li>

										</ul>

									</li>

								</ul>

							</li>

						</ul>

						<div class="ligne-form ligne-btn fixed"> <input type="button" name="cancel-form" value="Annuler" class="btn-submit cancel" onClick="Cacher_loader('loader');"> <input type="button" name="btn-valider-utilisateur" value="Enregistrer" id="btn-valider-utilisateur" class="btn-submit" onClick="<?php echo $url_enregistrer?>"> <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>"/> 
						<input type="hidden" name="idadministrateur" id="idadministrateur" value="<?php echo $idadministrateur?>"/> 
						<input type="hidden" name="traitement" id="traitement" value="ajouter-droit-adminitrateur"/> 
						</div>

					</form>

				</div>

			</div>

		</div>

</body>

</html>