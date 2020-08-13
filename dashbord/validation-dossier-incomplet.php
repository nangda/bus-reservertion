    <div class="container">

		<div class="conteneur-form-evenement">

		<form action="" id="form-signature">

			<h1 class="titre-page">Soumettre ma demande</h1>

			<div class="conteneur-rubrique-form">

				<div class="wrap-icon-rubrique-form"><svg viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3c-1.1 0-2 .9-2 2H2v16h17.8c1.1 0 2.1-.9 2.1-2V5c.1-1.1-.8-2-1.9-2zm-.2 17H3V6h15v13h1c0-.6.4-1 1-1 .5 0 .9.4 1 .9-.1.6-.6 1.1-1.2 1.1zm1.2-2.7c-.3-.2-.6-.3-1-.3s-.7.1-1 .3V5c0-.6.4-1 1-1s1 .4 1 1v12.3z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.8 12.7l.7-.7-1.1-1 1.1-1-.7-.7-1.1 1-1-1-.7.7 1 1-1 1 .7.7 1-1zM12 10h2v1h-2zM15 12h1v2h-1zM12 15h2v1h-2zM8 15h2v1H8z"></path></svg></div>

				

				<div class="wrap-titre-rubrique-form">

					<h2 class="titre-rubrique-form">Votre dossier semble incomplet, vous ne pouvez donc pas le soumettre.</h2>
					<p class="accroche-srubrique">
						Veuillez complèter les éléments suivants: 
					</p>

				</div>
					
				<div class="wrapper-srubrique">
					<?php if($demandeur["montant_souhaite"]==0 OR $demandeur["duree_credit"]==0) {?>
					<div class="wrap-srubrique">
						<div class="srubrique">
							<div class="wrap-titre-srubrique">
								<h3 class="titre-srubrique">Montant et durée souhaités</h3>
								<span class="update-srubrique"><a href="javascript:gotoURL('<?php echo Getbaseurl()?>mon-credit/','loader')"><i class="fa fa-pencil"></i>Complèter</a> </span>
							</div>
							<p class="accroche-srubrique">
								Vouos devez indiquer le montant que vous souhaité ainsi la durée du crédit.
							</p>
						</div>
					</div>
					<?php } ?>

					<?php if($demandeur["numero_compte"]=="") {?>
					<div class="wrap-srubrique">
						<div class="srubrique">
							<div class="wrap-titre-srubrique">
								<h3 class="titre-srubrique">Informations personnelles</h3>
								<span class="update-srubrique"><a href="javascript:gotoURL('<?php echo Getbaseurl()?>infos-personnelles/','loader')"><i class="fa fa-pencil"></i>Complèter</a> </span>
							</div>
							<p class="accroche-srubrique">
								Veuillez renseigner toutes vos informations personnelles réquises.
							</p>
						</div>
					</div>
					<?php } ?>

					<?php if($demandeur["avis"]=="" OR $demandeur["bulletin_de_paie1"]=="" OR $demandeur["bulletin_de_paie2"]=="" OR $demandeur["bulletin_de_paie3"]=="" OR $demandeur["cni_recto"]=="" OR $demandeur["cni_verso"]=="" OR $demandeur["facture"]==""){ ?>
					<div class="wrap-srubrique">
						<div class="srubrique">
							<div class="wrap-titre-srubrique">
								<h3 class="titre-srubrique">Pièces justificatives</h3>
								<span class="update-srubrique"><a href="javascript:gotoURL('<?php echo Getbaseurl()?>pieces-justificatives/','loader')"><i class="fa fa-pencil"></i>Complèter </a></span>
							</div>
							<p class="accroche-srubrique">
								Veuillez complèter votre dossier avec les pièces justificatives suivantes :
							</p>
							
							<div class="wrap-bloc-srubrique">
								<?php if($demandeur["avis"]==""){ ?>
								<div class="line-elt-srubrique">
									<div class="elt-srubrique">
										  <?php if($demandeur["statut_professionnel"]=="Fonctionnaire/Agent_public"){?>
					  					     Attestation de présence effective
					  					  <?php }elseif($demandeur["statut_professionnel"]=="Employe_secteur_prive"){?>
                                             AVIS (Attestation de Virement Irrévocable de Salaire)
					  					  <?php }else{?>
                                             AVIS ou Attestation de présence effective
					  					   <?php } ?>
					  				</div>
								</div>
								<?php } ?>


                                <?php if($demandeur["statut_professionnel"]=="Fonctionnaire/Agent_public"){ ?>

									<?php if($demandeur["bulletin_de_paie1"]=="" ){ ?>
									<div class="line-elt-srubrique">
										<div class="elt-srubrique">
						  					  Veuillez joindre votre dernier bulletin de paie 
						  				</div>
									</div>
									<?php } ?>


                                <?php }else{ ?>

									<?php if($demandeur["bulletin_de_paie1"]=="" OR $demandeur["bulletin_de_paie2"]=="" OR $demandeur["bulletin_de_paie3"]==""){ ?>
									<div class="line-elt-srubrique">
										<div class="elt-srubrique">
						  					  Vos trois derniers bulletins de paie 
						  				</div>
									</div>
									<?php } ?>

                                <?php } ?>

								<?php if($demandeur["cni_recto"]=="" OR $demandeur["cni_verso"]==""){ ?>
								<div class="line-elt-srubrique">
									<div class="elt-srubrique">
					  					  Votre carte nationale d'identité  resto et  verso 
					  				</div>
								</div>
								<?php } ?>
								
                                <?php if($demandeur["facture"]==""){ ?>
									<div class="line-elt-srubrique">
										<div class="elt-srubrique">
						  					 Une facture récente d'ENEO ou de CAMWATER
						  				</div>
									</div>
							    <?php } ?>
							</div>
						</div>
					</div>
				   <?php } ?>
				</div>
				
			</div>

			


	  </form>

	  </div>

    </div>
