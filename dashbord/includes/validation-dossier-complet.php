    <div class="container">

		<div class="conteneur-form-evenement">

		<form action="" id="form-signature">

			<h1 class="titre-page">Soumettre ma demande</h1>

			<div class="conteneur-rubrique-form">

				<div class="wrap-icon-rubrique-form"><svg viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3c-1.1 0-2 .9-2 2H2v16h17.8c1.1 0 2.1-.9 2.1-2V5c.1-1.1-.8-2-1.9-2zm-.2 17H3V6h15v13h1c0-.6.4-1 1-1 .5 0 .9.4 1 .9-.1.6-.6 1.1-1.2 1.1zm1.2-2.7c-.3-.2-.6-.3-1-.3s-.7.1-1 .3V5c0-.6.4-1 1-1s1 .4 1 1v12.3z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.8 12.7l.7-.7-1.1-1 1.1-1-.7-.7-1.1 1-1-1-.7.7 1 1-1 1 .7.7 1-1zM12 10h2v1h-2zM15 12h1v2h-1zM12 15h2v1h-2zM8 15h2v1H8z"></path></svg></div>

				

				<div class="wrap-titre-rubrique-form">

					<h2 class="titre-rubrique-form">Veuillez accepter les conditions ci-dessous, puis soumettez votre demande.</h2>

				</div>

				

				<div class="wrap-field">

				  <div class="field-form">

					  <input type="checkbox" required=" " name="souscription-assurance" placeholder=" " data-error-contener="div-erreur-champ-souscription-assurance"  id="souscription-assurance" class="mandatory"  value="1" <?php if($demandeur["signature"]!=""){?>CHECKED<?php }?>>

					  <label for="souscription-assurance" class="libele-form label-check-box">J'accepte la souscription à l'assurance liée à mon crédit </label>

					  <div class="message-erreur" id="div-erreur-champ-souscription-assurance" style="display: none;"> Veuillez accepter la souscription à l'assurance liée à votre crédit.</div>

				  </div>

				</div>

				<div class="wrap-field">

				  <div class="field-form">

					  <input type="checkbox" required=" " name="condition-vente" placeholder=" " data-error-contener="div-erreur-champ-condition-vente"  id="condition-vente" class="mandatory" value="1" <?php if($demandeur["signature"]!=""){?>CHECKED<?php }?>>

					  <label class="libele-form label-check-box" for="condition-vente">J'accepte les conditions générales de vente en vigueur </label>

					  <div class="message-erreur" id="div-erreur-champ-condition-vente" style="display: none;"> Veuillez accepter les conditions générales de vente en vigueur.</div>

				  </div>

				</div>

				<div class="wrap-field">

				  <div class="field-form">

					  <input type="checkbox" required=" " name="condition-utilisation" placeholder=" " data-error-contener="div-erreur-champ-condition-utilisation"  id="condition-utilisation" class="mandatory" value="1"  <?php if($demandeur["signature"]!=""){?>CHECKED<?php }?>>

					  <label class="libele-form label-check-box" for="condition-utilisation">J'accepte les conditions générales d'utilisation en vigueur </label>

					  <div class="message-erreur" id="div-erreur-champ-condition-utilisation" style="display: none;"> Veuillez accepter les conditions générales d'utilisation en vigueur.</div>

				  </div>

				</div>



			</div>

			<p style="padding: 13px 15px; background-color: rgba(227, 123, 3, 0.12); text-align: left; position: relative; margin-bottom: 30px">
			     <span style="position: absolute; top:-14px; font-size: 18px"><strong>Bon &aacute; savoir</strong></span>
				   En soumettant votre demande, vous n'aurez plus la possibilité de modifier les informations saisies. <br>
				   Veuillez vous rassurer que les informations saisies sont conformes avant de soumettre votre demande.
			</p>		


		  <div class="form-group">

			  <button type="button" class="btn btn-annuler" id="btn-annuler">Annuler</button>

			  <button type="button" class="btn btn-connexion" id="btn-valider" onClick="Notification_soumettre_demande('<?php echo base64_encode("traitement_ajax/main.php") ?>','<?php echo $demandeur["montant_souhaite"]?>','<?php echo $demandeur["duree_credit"]?>')">Soumettre ma demande <i class="fa fa-long-arrow-right"></i> </button>
			  <!--<button type="button" class="btn" id="btn-suivant" onClick="">Soumettre ma demande <i class="fa fa-long-arrow-right"></i></button>-->

	      </div>

		  <input type="hidden" name="token" id="token" value="<?php echo $_SESSION["token"] ?>" />   
		  <input type="hidden" name="iddemandeur" id="iddemandeur" value="<?php echo $demandeur[0] ?>" />   
		  <input type="hidden" name="traitement" id="traitement" value="enregistrer-signature" />   

	  </form>

	  </div>

    </div>
    
    <script>

    $( ".mandatory" ).change(function() {
		
		if($(this). prop("checked") == false){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
		}else{
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeOut("slow");
			
		}
	});
    </script>
