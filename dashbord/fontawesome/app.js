

//************************************************iCREATION TONTINE*********************************************************************//





function Enregistrer_tontine(traitement){
	
	var numero_orange=trim($("#numero-orange").val());
	var cnumero_orange=trim($("#cnumero-orange").val());
	var numero_mtn=trim($("#numero-mtn").val());
	var cnumero_mtn=trim($("#cnumero-mtn").val());
	var paypal=trim($("#paypal").val());
	var cpaypal=trim($("#cpaypal").val());
	var action=trim($("#action").val());
	var error=false;
	$(".message-erreur").fadeOut("slow");
	
    if(numero_orange!="" && numero_orange!=cnumero_orange){
		$("#div-erreur-champ-conf-numero-om").fadeIn("slow");
		error=true;
	}	
	
	
    if(numero_mtn!="" && numero_mtn!=cnumero_mtn){
		$("#div-erreur-champ-conf-numero-momo").fadeIn("slow");
		error=true;
	}	
	
    if(paypal!="" && paypal!=cpaypal){
		$("#div-erreur-champ-paypal").fadeIn("slow");
		error=true;
	}	
	
	
	
	if(paypal!="" && !validateEmail(paypal) ){
		$("#div-erreur-champ-login").fadeIn("slow");
		error=true;
	}
	
	if(error==false){
		
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-tontine").serialize(); 

		Afficher_loader("loader"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				   Cacher_loader("loader"); 
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION",loader,message,"OK","javascript:location.reload()","","","0");
					  }else{
						  if(reponse.tontitne_existe==1){
							  AfficherNotification("INFORMATION","loader","Une de vos tontines du même nom existe d&eacute;j&agrave;. Bien vouloir proposer autre nom.<br>","OK","","","","1");
							  $("#etape-precedente").click();
							  $("#nom-tontine").focus();
							  
						  }
						  if(reponse.valide_numero_orange==0)$("#div-erreur-champ-numero-om").fadeIn("slow");
						  if(reponse.valide_numero_mtn==0)$("#div-erreur-champ-numero-momo").fadeIn("slow");
					  }
			   }else{
				     if(action=="ajout") Affichage_contenuLightBox64(''+reponse.next+'','loader2');
				     else AfficherNotification("INFORMATION","loader","Mise à jour effectuée avec succès","OK","","","","1");
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}

function Verif_saisie(event, element, btn){
			var charCode = (event.which) ? event.which : event.keyCode
			if ( charCode == 13 ) {
				$("#"+btn).click();
			}else{
				var error=false; 
				var conteneur_erreur=$("#"+element).attr("data-error-contener");
				if($("#"+element).val().length==0)error=true;

				if(element=="email" && 	!validateEmail($("#"+element).val()) ){
					error=true;
							if ($("#"+element).val().match(/[^a-zA-Z0-9.@ ]/g)) {
								$("#"+element).val($("#"+element).val().replace(/[^a-zA-Z0-9.@ ]/g, ''));
								if(!validateEmail($("#"+element).val()))error=true;
								else error=false;
							}
				}
				
				if(element=="pwd" && 	$("#"+element).val().length<8){
					error=true;
				}
				
				if(error==true)$("#"+conteneur_erreur).fadeIn("slow");

				else if($("#"+conteneur_erreur).is(':visible')) {
					$("#"+conteneur_erreur).fadeOut("slow");
				}
			}
}



//*********************************************************************GESTION DES INVITATIONS ***************************************************//



function Recherche_membre_pour_invitation(traitement){
	    var mot_cle=trim($("#search-autre-membre").val());
		var destination_traitement=base64_decode(traitement); 
	    
		var data_to_send=$("#form-invitation").serialize(); 
        $('#conteneur-btn-lightbox-invitation-membre').fadeOut('slow');
		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //salert(data);
			    var reponse = JSON.parse(data); 
			    Cacher_loader('loader2'); 
			   if(reponse.erreur=="oui"){
				  var message="Votre jeton de session semble invalide.";
				  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
			   }else{
				  if(reponse.nbreponse>0){
					  $(".wrap-liste-autres-membre").html(reponse.tableau);
					  $('#conteneur-btn-lightbox-invitation-membre').fadeIn('slow');
				  }else $(".wrap-liste-autres-membre").html(reponse.message);
			   }
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
}
	


function Envoyer_invitation__membre_tontinet(traitement){
	    var liste=$(".wrap-liste-autres-membre input:checkbox:checked").map(function(){
					return $(this).val();
				  }).get();
	

	
	    if(liste=="")AfficherNotification("INFORMATION","loader2","Aucun destinataire n\'a été selectionné ","OK","","","","0");
	    else{
			var destination_traitement=base64_decode(traitement); 
            var token=$("#token").val();
            var latontine=$("#latontine").val();
            var lemembre=$("#lemembre").val();
			var data_to_send="liste="+liste+"&token="+token+"&latontine="+latontine+"&lemembre="+lemembre; 

			Afficher_loader('loader2'); 
			$.ajax({
				url : destination_traitement,
			   type : 'POST', // Le type de la requête HTTP, ici devenu POST
			   data : data_to_send, 
			   success : function(data, statut){ // success est toujours en place, bien sûr !
				   //alert(data);
					var reponse = JSON.parse(data); 
				   if(reponse.erreur=="oui"){
					  var message="Votre jeton de session semble invalide.";
					  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
				   }else{
					  if(reponse.nbreponse>1)AfficherNotification("INFORMATION","loader2","Vos invitations, ont été envoyées avec succès. Voulez vous envoyez d'autres ?","OUI","javascript:Cacher_loader('loader2')","NON","javascript:Cacher_loader('loader2');javascript:Cacher_loader('loader')","0");
					  else AfficherNotification("INFORMATION","loader2","Votre invitation, a été envoyée avec succès. Voulez vous envoyez d'autres ?","OUI","javascript:Cacher_loader('loader2')","NON","javascript:Cacher_loader('loader2');javascript:Cacher_loader('loader')","0");
				   }
				},

				error : function(resultat, statut, erreur){
					alert(erreur);
				}
			});
			
		}
		
	
}
	




function Envoyer_invitation_par_email(traitement){
	    var liste_email=trim($("#liste_email").val());
	

	
	    if(liste_email=="")AfficherNotification("INFORMATION","loader2","Veuillez saisir les adresses email de vos proches séparés par des virgules. ","OK","","","","0");
	    else{
			var tab=liste_email.split(",");
			var tab_invalide=new Array();
			
			for(i=0; i<tab.length; i++){
				
				if(!validateEmail(tab[i]))tab_invalide.push(tab[i]);
				
			}
			
			if(tab_invalide.length>0){
				
				AfficherNotification("INFORMATION","loader2","Les adresses email suivantes sont invalides : <br>- "+tab_invalide.join("<br>- "),"OK","","","","0");
			}else{
				
				var destination_traitement=base64_decode(traitement); 
				var token=$("#token").val();
				var latontine=$("#latontine").val();
				var lemembre=$("#lemembre").val();
				var data_to_send="liste_email="+liste_email+"&token="+token+"&latontine="+latontine+"&lemembre="+lemembre; 

				Afficher_loader('loader2'); 
				$.ajax({
					url : destination_traitement,
				   type : 'POST', // Le type de la requête HTTP, ici devenu POST
				   data : data_to_send, 
				   success : function(data, statut){ // success est toujours en place, bien sûr !
					   //alert(data);
						var reponse = JSON.parse(data); 
					   if(reponse.erreur=="oui"){
						  var message="Votre jeton de session semble invalide.";
						  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					   }else{
						  document.getElementById("form-invitation").reset(); 
						  if(reponse.nbreponse>1)AfficherNotification("INFORMATION","loader2","Vos invitations, ont été envoyées avec succès. Voulez vous envoyez d'autres ?","OUI","javascript:Cacher_loader('loader2')","NON","javascript:Cacher_loader('loader2');javascript:Cacher_loader('loader')","0");
						  else AfficherNotification("INFORMATION","loader2","Votre invitation, a été envoyée avec succès. Voulez vous envoyez d'autres ?","OUI","javascript:Cacher_loader('loader2')","NON","javascript:Cacher_loader('loader2');javascript:Cacher_loader('loader')","0");
					   }
					},

					error : function(resultat, statut, erreur){
						alert(erreur);
					}
				});
			}
			
		}
		
	
}

tab_numero=new Array();	
function remove(element) {
  const index = tab_numero.indexOf(element);

  if (index !== -1) {
    tab_numero.splice(index, 1);
  }
  $( "#"+element ).remove();
	if(tab_numero.toString()=="")$(".empty-list-number").fadeIn('slow');
}


function Verifier_numero_telephone_invitation_SMS(){
	
	
	var telephone=trim($("#numero-telephone").val());
	var pays=trim($("#code-pays-invitation").val()); 
	var indicatif=trim($("#indicatif-pays").val()); 
	
	var country_code=$("#code-pays-invitation").val(); 
	var access_key = '059511fea9b0ce49f35f87ed49adf760';
	error=false;
	if(telephone==""){
		AfficherNotification("INFORMATION","loader2","Veuillez saisir un numéro de téléphone valide","OK","","","","1");
	}else{
			// verify phone number via AJAX call
		Afficher_loader('loader2'); 
		$.ajax({
			url: 'http://apilayer.net/api/validate?access_key=' + access_key + '&number=' + telephone+ '&country_code=' +country_code+"&format=1",   
			dataType: 'json',
			success: function(data) {
				//alert(data);
				if(data.valid==false){
					AfficherNotification("INFORMATION","loader2","Le numéro de téléphone <strong>"+indicatif+telephone+"</strong> est valide","OK","","","","1");
				}else{
					tab_numero.push(indicatif+telephone); 
					var element="<span class=\"numero-ajoute\" id=\""+indicatif+telephone+"\">"+indicatif+telephone+" <i class=\"remove-number\" onclick=\"remove( '"+indicatif+telephone+"')\">x</i></span>";
					if($(".empty-list-number").is(":visible"))$(".empty-list-number").fadeOut('slow');
					$(".wrap-liste-numero").prepend( element );
					Cacher_loader('loader2'); 
					$("#numero-telephone").val("");
				} 


			}
		});	

		
	}
}






function Envoyer_invitation_par_sms(traitement){
	    var liste_telephone=tab_numero.toString(); //alert(liste_telephone);
	
	    if(liste_telephone=="")AfficherNotification("INFORMATION","loader2","Veuillez éditer la liste des numéros de téléphone de vos proches en indiquant chaque fois le pays correspondant. . ","OK","","","","0");
	    else{
			
				
				var destination_traitement=base64_decode(traitement); 
				var token=$("#token").val();
				var latontine=$("#latontine").val();
				var lemembre=$("#lemembre").val();
				var data_to_send="liste_telephone="+liste_telephone+"&token="+token+"&latontine="+latontine+"&lemembre="+lemembre; //alert(data_to_send); 

				Afficher_loader('loader2'); 
				$.ajax({
					url : destination_traitement,
				   type : 'POST', // Le type de la requête HTTP, ici devenu POST
				   data : data_to_send, 
				   success : function(data, statut){ // success est toujours en place, bien sûr !
					   //alert(data);
						var reponse = JSON.parse(data); 
					   if(reponse.erreur=="oui"){
						  var message="Votre jeton de session semble invalide.";
						  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					   }else{
						 $(".empty-list-number").fadeIn('slow');
					     $(".wrap-liste-numero").html( "" ); 
						  if(reponse.nbreponse>1)AfficherNotification("INFORMATION","loader2","Vos invitations, ont été envoyées avec succès. Voulez vous envoyez d'autres ?","OUI","javascript:Cacher_loader('loader2')","NON","javascript:Cacher_loader('loader2');javascript:Cacher_loader('loader')","0");
						  else AfficherNotification("INFORMATION","loader2","Votre invitation, a été envoyée avec succès. Voulez vous envoyez d'autres ?","OUI","javascript:Cacher_loader('loader2')","NON","javascript:Cacher_loader('loader2');javascript:Cacher_loader('loader')","0");
					   }
					},

					error : function(resultat, statut, erreur){
						alert(erreur);
					}
				});
			
			
		}
		
	
}
	

function Demande_confirmation_acception_invitation(lemembre, inviteur, tontine,invitation, traitement){
	var message=" <strong>"+lemembre+"</strong>,<br>en cliquant sur <strong>Confirmer</strong>, vous acceptez participer à la tontine <strong>"+tontine+"</strong> qui vous a été recommandée par votre proche <strong>"+inviteur+"</strong>";
	
	AfficherNotification("CONFIRMATION","loader",message,"Confirmer","javascript:Traiter_reponse_invitation('"+traitement+"','"+invitation+"','1')","Annuler","javascript:Cacher_loader('loader');","1");
}


function Demande_confirmation_refus_invitation(lemembre, inviteur, tontine,invitation, traitement){
	var message=" <strong>"+lemembre+"</strong>,<br>en cliquant sur <strong>Confirmer</strong>, vous refusez de ce fait, de participer à la tontine <strong>"+tontine+"</strong> qui vous a été recommandée par votre proche <strong>"+inviteur+"</strong>";
	
	AfficherNotification("CONFIRMATION","loader",message,"Confirmer","javascript:Traiter_reponse_invitation('"+traitement+"','"+invitation+"','0')","Annuler","javascript:Cacher_loader('loader');","1");
}


function Traiter_reponse_invitation(traitement,idinvitation, lareponse){
	    
				var destination_traitement=base64_decode(traitement); 
				var token=$("#token").val();
				var data_to_send="idinvitation="+idinvitation+"&token="+token+"&reponse="+lareponse; //alert(data_to_send); 

				Afficher_loader('loader2'); 
				$.ajax({
					url : destination_traitement,
				   type : 'POST', // Le type de la requête HTTP, ici devenu POST
				   data : data_to_send, 
				   success : function(data, statut){ // success est toujours en place, bien sûr !
					   //alert(data);
						var reponse = JSON.parse(data); 
					   if(reponse.erreur=="oui"){
						  var message="Votre jeton de session semble invalide.";
						  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					   }else{
						   //alert(base64_decode(reponse.next));
							   Affichage_contenuLightBox64(reponse.next,'loader');

						  
						   Cacher_loader('loader2'); 
					   }
					},

					error : function(resultat, statut, erreur){
						alert(erreur);
					}
				});
			
		
	
}
	

//*********************************************************FIN GESTION DES INVITATIONS ********************************************************************************//

//*************************************************** GESTION ONGLET EDITER TONTINE **************************************************************************//


function Enregistrer_mode_attribution_cotisation(traitement){
	    
				var destination_traitement=base64_decode(traitement); 
				var data_to_send=$("#form-mode-attribution").serialize();
	    
	            
                if($("input[name='mode-enchere']:checked").length==0){
					AfficherNotification("INFORMATION","loader","Vous devez choisir un mode d'attribution des cotisations aux bénéficiaires ","OK","","","","0");
				}else{
					var mode=$("input[name='mode-enchere']:checked").val(); 
					var minimum_enchere=trim($("#montant-enchere").val()); 
					if(mode=="enchere"  && minimum_enchere<=0){
						AfficherNotification("INFORMATION","loader","Vous devez renseigner le champs <strong>Minimun enchères</strong> ","OK","","","","0");
					}else{
						Afficher_loader('loader');
						  $.ajax({
						   url : destination_traitement,
						   type : 'POST', // Le type de la requête HTTP, ici devenu POST
						   data : data_to_send, 
						   success : function(data, statut){ // success est toujours en place, bien sûr !
							   alert(data);
								var reponse = JSON.parse(data); 
							   if(reponse.erreur=="oui"){
								  var message="Votre jeton de session semble invalide.";
								  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
							   }else{
								  AfficherNotification("INFORMATION","loader2","Mise à jour enregistrée avec succès","OK","","","","0");
							   }
							},

							error : function(resultat, statut, erreur){
								alert(erreur);
							}
						});
						
					}
				}
				 
			
		
	
}

//********************************************************FIN GESTION ONGLET EDITION TONTINE********************************************************//
function verif_saisie_champs(traitement){
	// verification saisie champs email mot de passe oublié
	//alert("6656");
	$("#email-recup").keyup(function( event ) {  
		if ( event.which == 13 ) {
			Retrouver_pwd(traitement);
		}else{
			var error=false;
			var conteneur_erreur=$(this).attr("data-error-contener");
			if($(this).val().length==0)error=true;

			if(error==true)$("#"+conteneur_erreur).fadeIn("slow");
			
			else if($("#"+conteneur_erreur).is(':visible')) {
				$("#"+conteneur_erreur).fadeOut("slow");
			}
		}

	});
}


function Retrouver_pwd(traitement){
	
	var destination_traitement=base64_decode(traitement); 
	var email=$("#email-recup").val();
	var data_to_send="email="+email;
	var error=false;
		    //alert(data_to_send);
		    if(!validateEmail(email) ){
		    	$("#div-erreur-champ-email-recup").fadeIn("slow");
		    	error=true;
		    }


		    if(error==false){
		    	Afficher_loader('loader2'); 

		    	$.ajax({
		    		url : destination_traitement,
				   type : 'POST', // Le type de la requête HTTP, ici devenu POST
				   data : data_to_send, 
				   success : function(data, statut){ // success est toujours en place, bien sûr !
					   var reponse = eval('(' + data + ')');  //alert(data);
					   Cacher_loader("loader2");
					   if(reponse.erreur=="oui"){
					   	$("#connteneur-erreur-retrouver-pwd").css("display","block");
					   	$("#connteneur-erreur-retrouver-pwd").html(reponse.message); 
					   }else{
					   	Affichage_contenuLightBox("lightbox-confirmation-retrouver-pwd.php",'loader');
					   } 
					},

					error : function(resultat, statut, erreur){
						alert(erreur);
					}
				});
		    }

		}


		function Verif_saisie_identification(event, element){
			var charCode = (event.which) ? event.which : event.keyCode
			if ( charCode == 13 ) {
				$("#btn-valider").click();
			}else{
				var error=false; 
				var conteneur_erreur=$("#"+element).attr("data-error-contener");
				if($("#"+element).val().length==0)error=true;

				if(error==true)$("#"+conteneur_erreur).fadeIn("slow");

				else if($("#"+conteneur_erreur).is(':visible')) {
					$("#"+conteneur_erreur).fadeOut("slow");
				}
			}
			
		}

		function Verif_saisie_inscription(event, element){
			var charCode = (event.which) ? event.which : event.keyCode
			if ( charCode == 13 ) {
				$("#btn-valider").click();
			}else{
				var error=false; 
				var conteneur_erreur=$("#"+element).attr("data-error-contener");
				if($("#"+element).val().length==0)error=true;

				if(error==true)$("#"+conteneur_erreur).fadeIn("slow");

				else if($("#"+conteneur_erreur).is(':visible')) {
					$("#"+conteneur_erreur).fadeOut("slow");
				}
			}
			
		}


//************************************************fin identification*********************************************************************//

//************************************************Adresse de livraison*********************************************************************//
function Traitement_infos_livraison(traitement){
	var ville=trim($("#ville").val()); 
	var quartier=trim($("#quartier").val());
	var localisation_precise=trim($("#localisation-precise").val());
	var telephone_livraison=trim($("#telephone").val());  
	var nom=trim($("#nom").val());  
	var prenom=trim($("#prenom").val());  
	
    if(ville=="" || quartier=="" || localisation_precise=="" || telephone_livraison=="" || nom=="" || prenom==""){
		  var message="Veuillez renseigner tous les champs ";
		  AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");	
	}else{
	  var data_to_send=$("#form-infos-livraison").serialize();
	  var destination_traitement=base64_decode(traitement); 
  
	  Afficher_loader('loader'); 
  
	  $.ajax({
		  url : destination_traitement,
		 type : 'POST', // Le type de la requête HTTP, ici devenu POST
		 data : data_to_send, 
		 success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = eval('(' + data + ')');  //alert(data);
			  if(reponse.session=="0"){
				  var message="Votre jeton de session semble invalide.";
				  AfficherNotification("INFORMATION",loader,message,"OK","javascript:location.reload()","","","0");
			  }else{
				  location.href=reponse.next;
			  }
		  },
  
		  error : function(resultat, statut, erreur){
			  alert(erreur);
		  }
	  });
	}

}


function Traitement_infos_retrait(traitement){
	var ville=trim($("#ville-retrait").val()); 
	var quartier=trim($("#quartier-retrait").val());
	var localisation_precise=trim($("#localisation-retrait").val()); 
	var telephone_livraison=trim($("#telephone-retrait").val());  
	var nom=trim($("#nom-retrait").val());  
	var prenom=trim($("#prenom-retrait").val());  
	
    if(ville=="" || quartier=="" || localisation_precise=="" || telephone_livraison=="" || nom=="" || prenom==""){
		  var message="Veuillez renseigner tous les champs ";
		  AfficherNotification("INFORMATION","loader",message,"OK","","","","1");	
	}else{
	  var data_to_send=$("#form-retrait").serialize(); 
	  var destination_traitement=base64_decode(traitement); 
      
	  Afficher_loader('loader'); 
  
	  $.ajax({
		  url : destination_traitement,
		 type : 'POST', // Le type de la requête HTTP, ici devenu POST
		 data : data_to_send, 
		 success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = eval('(' + data + ')');  //alert(data);
			  if(reponse.session=="0"){
				  var message="Votre jeton de session semble invalide.";
				  AfficherNotification("INFORMATION",loader,message,"OK","javascript:location.reload()","","","0");
			  }else{
				  location.href=reponse.next;
			  }
		  },
  
		  error : function(resultat, statut, erreur){
			  alert(erreur);
		  }
	  });
	}

}

//************************************************fin adresse de livraison *********************************************************************//


//************************************************gestion recap *********************************************************************//


function Enregistrement_commande(traitement){
	
		var destination_traitement=base64_decode(traitement); 
	    var token=$("#token").val();
		var data_to_send="token="+token; 

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			   var reponse = eval('(' + data + ')'); 
			   if(reponse.erreur=="oui"){
				  var message="Votre jeton de session semble invalide.";
				  AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
			   }else{
				  self.location=reponse.next;
			   }
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
}
	
chrono=50;
interval_Initpayment="";
interval_CheckPayment="";
paiement=0;
echoue=1;
function Initpayment(traitement,montant,operateur, reference_commande){
	echoue=0;
    chrono=50;
    interval_Initpayment="";
    interval_CheckPayment="";
    paiement=0;
	var telephone=trim($("#numero_"+operateur).val()); 
	var ctelephone=trim($("#cnumero_"+operateur).val());
	//alert(telephone);
    if(telephone==""){
		  var message="Numéro de téléphone invalide";
		  AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");	
	}else if(telephone!=ctelephone){
		  var message="Numéro de téléphone mal confirmé";
		  AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");	
	}else{
	  var data_to_send=$("#form-"+operateur).serialize()+"&operateur="+operateur+"&reference_commande="+reference_commande; 
	  var destination_traitement=base64_decode(traitement); 
  
	  Afficher_loader('loader2'); 
  
	  $.ajax({
		  url : destination_traitement,
		 type : 'POST', // Le type de la requête HTTP, ici devenu POST
		 data : data_to_send, 
		 success : function(data, statut){ // success est toujours en place, bien sûr !
		           //alert(data);
				   var reponse = eval('(' + data + ')');
				   if(reponse.erreur=="oui"){
					      var message=reponse.message;
					      if(reponse.session==1) AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
					      else AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","1");
					      clearInterval(interval_Initpayment);
					      clearInterval(interval_CheckPayment); 
				   }else{
					   
					   if(operateur!="orange"){
					      Affichage_contenuLightBox64(''+reponse.next+'','loader2');
						  
						  /*var interval_Initpayment = setInterval(function(){
							  $("#temps").html(chrono);
							  if(chrono === 0  && echoue==0){
								clearInterval(interval_Initpayment);
								clearInterval(interval_CheckPayment); 
								var message="Voulez vous reprendre le processus pour effectuer le paiement de votre commande?";
								AfficherNotification("DELAI D'ATTENTE EXPIRE","loader2",message,"OUI","","NON","../../","0");
								//Cacher_loader("loader2");
							  }
							  chrono--;
							  
						  }, 1000); */
					   }
					  PlacePayment(''+reponse.traitement+'',telephone,operateur, reference_commande);
						  
					   
				   }
		  },
  
		  error : function(resultat, statut, erreur){
			  alert(erreur);
		  }
	  });
	}

}


function PlacePayment(traitement,telephone,operateur,reference_commande){
	
	  var token=$("#token").val();
	  var data_to_send="telephone="+telephone+"&reference_commande="+reference_commande+"&token="+token;
	  var destination_traitement=base64_decode(traitement); 
    
	  $.ajax({
		  url : destination_traitement,
		 type : 'POST', // Le type de la requête HTTP, ici devenu POST
		 data : data_to_send, 
		 success : function(data, statut){ // success est toujours en place, bien sûr !
		           alert(data);
				   var reponse = eval('(' + data + ')');
				   if(reponse.erreur=="oui"){
					      var message=reponse.message;
					      if(reponse.session==1) AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
					      else AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","1");
					      clearInterval(interval_CheckPayment);
						  learInterval(interval_Initpayment);
				   }else{
					   
					   if(reponse.status=="REQUEST_ACCEPTED"){

							if(operateur=="orange"){
								payment_url=reponse.payment_url;
								Affichage_contenuLightBox64(''+reponse.next+'','loader2');
							}else{
								  var interval_CheckPayment = setInterval(function(){
									  $("#temps").html(chrono);
									  if(chrono === 0  && echoue==0){
										clearInterval(interval_Initpayment);
										clearInterval(interval_CheckPayment); 
										var message="Voulez vous reprendre le processus pour effectuer le paiement de votre commande?";
										AfficherNotification("DELAI D'ATTENTE EXPIRE","loader2",message,"OUI","","NON","../../","0");
										//Cacher_loader("loader2");
									  }else{
										chrono--;	

										if(paiement==0 && echoue==0){
											CheckPayment(reponse.traitement,reponse.paymentId,operateur, reference_commande);
										}else if(paiement==1){
											clearInterval(interval_CheckPayment);
											clearInterval(interval_Initpayment);
										}
									  }
								}, 1000);
							}
					   }else{
						   clearInterval(interval_CheckPayment);
						   var message="Le paiement a échoué. <br> Veuillez vous rassurer de la validité du numéro de téléphone ainsi que le solde du compte.";
						   AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
					   }
				   }
		  },
  
		  error : function(resultat, statut, erreur){
			  alert(erreur);
		  }
	  });

}



function CheckPayment(traitement,paymentId,operateur, reference_commande){
	  
	  var data_to_send="paymentId="+paymentId+"&operateur="+operateur+"&reference_commande="+reference_commande;  
	  var destination_traitement=base64_decode(traitement); 
    
	  $.ajax({
		  url : destination_traitement,
		 type : 'POST', // Le type de la requête HTTP, ici devenu POST
		 data : data_to_send, 
		 success : function(data, statut){ // success est toujours en place, bien sûr !
		           //alert(data); 
				   var reponse = eval('(' + data + ')');
				   if(reponse.erreur=="non"){
					      paiement=1;
					      self.location=reponse.next;
				   }else{
					   if(reponse.status=="-1"  || reponse.status=="2" && echoue=="0"){
						  var message=reponse.message; 
						  AfficherNotification("INFORMATION","loader2",message,"OK","","","","1"); 
						  clearInterval(interval_Initpayment);
						  clearInterval(interval_CheckPayment);
						  echoue=1;
						  chrono=0;
					   }else if(chrono == 0){
					      var message=reponse.message; 
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
						  clearInterval(interval_Initpayment);
						  clearInterval(interval_CheckPayment);
					   }
				   }
	
		  },
  
		  error : function(resultat, statut, erreur){
			 // alert(erreur);
		  }
	  });

}


//************************************************fin recap *********************************************************************//


//************************************************gestion code promo *********************************************************************//




function Verification_code_promo(traitement){
	  var code=trim($("#code_promo").val());
	  if(code=="")AfficherNotification("INFORMATION","loader","VEUILLEZ SAISIR LE CODE PROMO ","OK","","","","0");
	  else{
		var data_to_send=$("#form-code-promo").serialize();  
		var destination_traitement=base64_decode(traitement); 
		Afficher_loader('loader'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
					 
					 var reponse = eval('(' + data + ')');
					 if(reponse.erreur=="non"){
						     $("#annuler_code_promo").css("display","inline");
							 var message=reponse.message;
							 AfficherNotification("INFORMATION","loader",message,"OK","","","","0");
							 var total_commande=parseInt($("#montant_total_commande").attr("data-valeur"));
							 var total_remise=parseInt((reponse.valeur*total_commande)/100); 
							 $("#montant_code_promo").html(formatNumber2(total_remise)+" Fcfa");
							 $("#montant_code_promo").attr("data-valeur",total_remise);
							 Calcul_total_commande();
							
					 }else{
							var message=reponse.message; 
							AfficherNotification("INFORMATION","loader",message,"OK","","","","1");
							$("#annuler_code_promo").css("display","none");
					 }
	  
			},
	
			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		  
	  }

}


function Annulation_code_promo(traitement){
	  var code=trim($("#code_promo").val());
	  if(code=="")AfficherNotification("INFORMATION","loader","VEUILLEZ SAISIR LE CODE PROMO ","OK","","","","0");
	  else{
		var data_to_send=$("#form-code-promo").serialize();  
		var destination_traitement=base64_decode(traitement); 
		Afficher_loader('loader'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
							
							AfficherNotification("INFORMATION","loader",data,"OK","javascript:location.reload()","","","0");
							$("#annuler_code_promo").css("display","none");
			},
	
			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		  
	  }

}



//************************************************fin recap *********************************************************************//


//************************************************ESPACE CLIENT *********************************************************************//


function Modifier_compte(traitement){
	
	
	var error=false;
	
	$( "#form-compte input " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
	if($("#sexe").val()==""){
		$("#div-erreur-sexe").fadeIn("slow");
		error=true;
	}else $("#div-erreur-sexe").fadeOut("slow");
	
	
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-compte").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			   var reponse = eval('(' + data + ')'); 
			   if(reponse.erreur=="oui"){
					var message=reponse.message;
					AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
			   } else{
			   		var message="<strong>"+prenom+"</strong> Votre mise a jour a &eacute;t&eacute; enregistr&eacute;e avec succès.";
			   		AfficherNotification("INFORMATION","loader",message,"OK","","","","0");	
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else{
		var message="Veuillez renseigner tous les champs.";
		AfficherNotification("INFORMATION","loader",message,"OK","","","","0");	
	}
}



function Modifier_pwd(traitement){
	
	var mdp_actuel=trim($("mdp_actuel").val()); 
	var nouveau_mot_de_passe=trim($("#nouveau_mot_de_passe").val());
	var cnouveau_mot_de_passe=trim($("#cnouveau_mot_de_passe").val());
	var error=false;
	
	$( "#form-mdp input " ).each(function() {
		if(trim($(this).val())==""){
			/*var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");*/
			error=true;
		}
	});
	
	if(nouveau_mot_de_passe.length<8){
		//$("#div-erreur-champ-mot-pass").fadeIn("slow");
		error=true;
	}
	
	if(nouveau_mot_de_passe!=cnouveau_mot_de_passe){
		//$("#div-erreur-champ-confirm-pass").fadeIn("slow");
		error=true;
	}
	

	
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-mdp").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			   var reponse = eval('(' + data + ')'); 
			   if(reponse.erreur=="oui"){
				   
					  if(reponse.session=="0"){
					      var message=reponse.message;
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
					      var message=reponse.message;
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
					  }
			   	
			   } else{
			   	
			   		Cacher_loader('loader2');
			   		var message="<strong>"+prenom+"</strong> Votre mot de passe a &eacute;t&eacute; modifi&eacute;e avec succès.";
			   		AfficherNotification("INFORMATION","loader",message,"OK","javascript:location.reload()","","","0");	
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else {
		var message="Veuillez renseigner tous les champs.";
		AfficherNotification("INFORMATION","loader",message,"OK","","","","0");	
	}
}




function Modifier_email(traitement){
	
	var mdp_email=trim($("mdp_email").val()); 
	var nouveau_email=trim($("#nouveau_email").val());
	var cnouveau_email=trim($("#cnouveau_email").val());
	var error=false;
	
	$( "#form-email input " ).each(function() {
		if(trim($(this).val())==""){
			/*var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");*/
			error=true;
		}
	});
	
	
	if(nouveau_email!=cnouveau_email){
		//$("#div-erreur-champ-confirm-pass").fadeIn("slow");
		error=true;
	}
	
	if(!validateEmail(nouveau_email) ){
		//$("#div-erreur-champ-email").fadeIn("slow");
		error=true;
	}

	
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-email").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			   var reponse = eval('(' + data + ')'); 
			   if(reponse.erreur=="oui"){
				   
					  if(reponse.session=="0"){
					      var message=reponse.message;
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
					      var message=reponse.message;
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
					  }
			   	
			   } else{
			   	
			   		Cacher_loader('loader2');
			   		var message="<strong>"+prenom+"</strong> Votre adresse email a &eacute;t&eacute; modifi&eacute;e avec succès.";
			   		AfficherNotification("INFORMATION","loader",message,"OK","javascript:location.reload()","","","0");	
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else {
		var message="Veuillez renseigner tous les champs.";
		AfficherNotification("INFORMATION","loader",message,"OK","","","","0");	
	}
}




function Envoyer_ordonnance(traitement){
	
        var myForm = document.getElementById('form-ordonnance');
	    
		var data_to_send=new FormData(myForm); 
		var destination_traitement=base64_decode(traitement); 

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   contentType: false,
           cache: false,
           processData:false,
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			   var reponse = eval('(' + data + ')'); 
			   if(reponse.erreur=="oui"){
				   
					  if(reponse.session=="0"){
					      var message=reponse.message;
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
					      var message=reponse.message;
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");
					  }
			   	
			   } else{
			   	
			   		Affichage_contenuLightBox('lightbox/lightbox-confirmation-envoi-ordonnance.php','loader2');
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
}



function Continuer(suivant){
	self.location=suivant;
}

