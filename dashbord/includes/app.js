/******************** ACCES TABLEAU DE BORD***********************************/
function Acceder_compte(traitement){
	
	var email=trim($("#identifiant").val());
	var password=trim($("#pwd").val()); 
	var error=false;
	$("#pwd").val(CryptoJS.MD5(password));
	
	$( "#form-login input " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
	if(!validateEmail(email) ){
		$("#div-erreur-champ-login").fadeIn("slow");
		error=true;
	}
	
	if(error==false){
		
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-login").serialize(); 
		$("#pwd").val(password);

		Afficher_loader("loader"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requête HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			  //alert(data);
			   var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
					  if(reponse.session=="0"){
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  //alert(password);
						  $("#pwd").val(password);
					      AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","1");
					  }
				   
			   }else{
				     Affichage_contenuLightBox64(reponse.next,'loader');
					// self.location="./accueil/";
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}

function Valider_code_authentification_a_deux_facteurs(traitement){
	
	var error=false; 
	$("#form-validation-code .message-erreur ").fadeOut("slow");
	
	$( ".mandatory-code" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-validation-code").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				    gotoURL(reponse.next,'loader');
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}



function Renvoyer_SMS_connexion_administrateur(traitement){
	
	var error=false; 
	$("#form-validation-code .message-erreur ").fadeOut("slow");
	var token = trim($("#token").val());
	var idadministrateur = trim($("#idadministrateur").val());
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=renvoyer-code-authentification-a-deux-facteurs&idadministrateur="+idadministrateur+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				    AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}


//*************************************FERMER LA SESSION ************************//

function Notification_fermeture_session(traitement, token){
	
	
		AfficherNotification("INFORMATION","loader","Vous êtes sur le point de fermer votre session, voulez vous continuer ?","OUI","javascript:Fermer_session('"+traitement+"', '"+token+"')","ANNULER","","0");

	
}

function Fermer_session(traitement, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   if ( typeof ( history.pushState ) != "undefined" ) {
				var obj = {
				  Page: reponse.page,
				  Url: reponse.next
				};
				history.pushState( obj, obj.Page, obj.Url );
			  }
			   self.location=reponse.next;
			   
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}




/******************** GESTION DES UTULISATEURS***********************************/

function Enregistrer_administrateur(traitement,idadministrateur){
	
	var error=false;
	$("#form-ajout-utilisateur .message-erreur ").fadeOut("slow");
	var password = trim($("#password").val());
	var confirm_password = trim($("#cpassword").val());
	var email = trim($("#email").val());

	
	if (password.length < 8) {
		$("#div-erreur-champ-pasword").fadeIn("slow");
		error = true;
	}

	if (password != confirm_password) {
		$("#div-erreur-champ-cpasword").fadeIn("slow");
		error = true;
	}
	
	if (!validateEmail(email)) {
		$("#div-erreur-champ-email").fadeIn("slow");
		error = true;
	}
	
	$( ".mandatory-administrateur" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-utilisateur").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
				   if(reponse.nboperation==1 && idadministrateur==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idadministrateur!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-administrateur"+idadministrateur ).html( reponse.utilisateur );
						$( "#email-administrateur"+idadministrateur ).html( reponse.email );
						$( "#periode-administrateur"+idadministrateur ).html( reponse.periode );
						$( "#fonction-administrateur"+idadministrateur ).html( reponse.fonction );
						$( "#telephone-administrateur"+idadministrateur ).html( reponse.telephone );
						$( "#ville-administrateur"+idadministrateur ).html( reponse.ville );
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer un autre utilisateur ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 $("#tbody-administrateur").prepend(reponse.administrateur);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-utilisateur").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}


function Notification_suppression_administrateur(traitement, idadministrateur, token, deja_operation){
	
	if(deja_operation==1){
		AfficherNotification("INFORMATION","loader2","Cet utilisayeur a d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer","OK","","","","0");
	}else{
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer cet utilisateur ?","OUI","javascript:Supprimer_administrateur('"+traitement+"', '"+idadministrateur+"', '"+token+"')","ANNULER","","0");
	}
	
}

function Supprimer_administrateur(traitement, idadministrateur, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=supprimer-administrateur&idadministrateur="+idadministrateur+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 // alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else if(reponse.deja_operationnel=="1"){
					      var message="Cet utilisateur contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer";
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbadministrateur=0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","0");
				   }
				   $( "#tr_administrateur"+idadministrateur ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}


function Valider_administrateur(traitement, idadministrateur, token, etat){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=valider-administrateur&idadministrateur="+idadministrateur+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
				  if(reponse.etat==1) $( "#valider-administrateur"+idadministrateur ).addClass("validated");
				  else $( "#valider-administrateur"+idadministrateur ).removeClass("validated");
				   Cacher_loader("loader2"); 
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}



function Select_cirsconscription_utilisateur(traitement, token){
        var niveau_dacces=$("#wrapper-hierachie-donnee-1").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=select_cirsconscription_utilisateur&niveau_dacces="+niveau_dacces+"&token="+token;
		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				    $("#wrapper-hierachie-donnee-2").html(reponse.option);
				   Cacher_loader("loader2"); 
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
	
}

function Enregistrer_doit_daccess(traitement){
	
	var error=false;
	$("#form-ajout-utilisateur .message-erreur ").fadeOut("slow");
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-utilisateur").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						  
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}



/******************** GESTION DES REGIONS***********************************/

function Enregistrer_region(traitement,idregion){
	
	var error=false;
	$("#form-ajout-region .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-region" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-region").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
		//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbregion==1 && idregion==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idregion!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-region"+idregion ).html( reponse.nom );
						$( "#reference-region"+idregion ).html( reponse.reference );
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer un autre region ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-region").prepend(reponse.region);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-region").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}

function Notification_suppression_region(traitement, idregion, token, deja_operation){
	
	if(deja_operation==1){
		AfficherNotification("INFORMATION","loader2","Cette R&eacute;gion contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc la supprimer","OK","","","","0");
	}else{
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer ce d&eacute;partement ?","OUI","javascript:Supprimer_region('"+traitement+"', '"+idregion+"', '"+token+"')","ANNULER","","0");
	}
	
}

function Supprimer_region(traitement, idregion, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=supprimer-region&idregion="+idregion+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 // alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else if(reponse.deja_operationnel=="1"){
					      var message="Cette R&eacute;gion contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc la supprimer";
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbregion=0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","0");
				   }
				   $( "#tr_region"+idregion ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}


function Valider_region(traitement, idregion, token, etat){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=valider-region&idregion="+idregion+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
				  if(reponse.etat==1) $( "#valider-region"+idregion ).addClass("validated");
				  else $( "#valider-region"+idregion ).removeClass("validated");
				   Cacher_loader("loader2"); 
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}



/******************** GESTION DES PROVINCES***********************************/

function Enregistrer_province(traitement,idprovince){
	
	var error=false;
	$("#form-ajout-utilisateur .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-province" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-province").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbprovince==1 && idprovince==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idprovince!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-province"+idprovince ).html( reponse.nom );
						$( "#reference-province"+idprovince ).html( reponse.reference );
						$( "#couleur-province"+idprovince ).html( reponse.couleur );
						$( "#couleur-commune"+idprovince ).css("background-color", reponse.couleur);;
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer une autre province ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-province").prepend(reponse.province);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-province").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}



/******************** GESTION DES DEPARTEMENTS***********************************/

function Enregistrer_departement(traitement,iddepartement){
	
	var error=false;
	$("#form-ajout-utilisateur .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-departement" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-departement").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbdepartement==1 && iddepartement==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(iddepartement!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-departement"+iddepartement ).html( reponse.nom );
						$( "#reference-departement"+iddepartement ).html( reponse.reference );
						$( "#couleur-departement"+iddepartement ).html( reponse.couleur );
						$( "#province-departement"+iddepartement ).html( reponse.province );
						$( "#couleur-departement"+iddepartement ).html( reponse.couleur );
						$( "#couleur-departement"+iddepartement ).css('background-color', reponse.couleur);
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer un autre departement ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-departement").prepend(reponse.departement);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-departement").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}

function Notification_suppression_departement(traitement, iddepartement, token, deja_operation){
	
	if(deja_operation==1){
		AfficherNotification("INFORMATION","loader2","Ce D&eacute;partement contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer","OK","","","","0");
	}else{
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer ce d&eacute;partement ?","OUI","javascript:Supprimer_departement('"+traitement+"', '"+iddepartement+"', '"+token+"')","ANNULER","","0");
	}
	
}

function Supprimer_departement(traitement, iddepartement, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="iddepartement="+iddepartement+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 // alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else if(reponse.deja_operationnel=="1"){
					      var message="Ce D&eacute;partement contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer";
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbdepartement=0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","0");
				   }
				   $( "#tr_departement"+iddepartement ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}




/******************** GESTION DES COMMUNES***********************************/

function Enregistrer_commune(traitement,idcommune){
	
	var error=false;
	$("#form-ajout-utilisateur .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-commune" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-commune").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbcommune==1 && idcommune==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idcommune!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-commune"+idcommune ).html( reponse.nom );
						$( "#reference-commune"+idcommune ).html( reponse.reference );
						$( "#couleur-commune"+idcommune ).html( reponse.couleur );
						$( "#province-commune"+idcommune ).html( reponse.province );
						$( "#couleur-commune"+idcommune ).html( reponse.couleur );
						$( "#couleur-commune"+idcommune ).css("background-color", reponse.couleur);;
						$( "#departement-commune"+idcommune ).html( reponse.departement );
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer un autre commune ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-commune").prepend(reponse.commune);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-commune").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}


function Notification_suppression_commune(traitement, idcommune, token, deja_operation){
	
	if(deja_operation==1){
		AfficherNotification("INFORMATION","loader2","Cette commune contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer","OK","","","","0");
	}else{
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer cette commune ?","OUI","javascript:Supprimer_commune('"+traitement+"', '"+idcommune+"', '"+token+"')","ANNULER","","0");
	}
	
}

function Supprimer_commune(traitement, idcommune, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="idcommune="+idcommune+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			// alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else if(reponse.deja_operationnel=="1"){
					      var message="Cette commune contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer";
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbcommune=0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","0");
				   }
				   $( "#tr_commune"+idcommune ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}



/******************** GESTION DES VILLES***********************************/

function Enregistrer_ville(traitement,idville){
	
	var error=false;
	$("#form-ajout-ville .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-ville" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-ville").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbville==1 && idville==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idville!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-ville"+idville ).html( reponse.nom );
						$( "#reference-ville"+idville ).html( reponse.reference );
						$( "#region-ville"+idville ).html( reponse.region );
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer une autre ville ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-ville").prepend(reponse.ville);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-ville").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}



function Notification_suppression_ville(traitement, idville, token, deja_operation){
	
	if(deja_operation==1){
		AfficherNotification("INFORMATION","loader2","Cette ville contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer","OK","","","","0");
	}else{
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer cette ville ?","OUI","javascript:Supprimer_ville('"+traitement+"', '"+idville+"', '"+token+"')","ANNULER","","0");
	}
	
}

function Supprimer_ville(traitement, idville, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="idville="+idville+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else if(reponse.deja_operationnel=="1"){
					      var message="Cette ville contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer";
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbville=0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","0");
				   }
				   $( "#tr_ville"+idville ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}




function Valider_ville(traitement, idville, token, etat){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=valider-ville&idville="+idville+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
				  if(reponse.etat==1) $( "#valider-ville"+idville ).addClass("validated");
				  else $( "#valider-ville"+idville ).removeClass("validated");
				   Cacher_loader("loader2"); 
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}

/*****************************GESTION DES AGENCES******************************/

function Select_ville_agence(traitement, token){
        var region=$("#region-agence").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=select-ville-agence&idregion="+region+"&token="+token;
		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				    $("#ville-agence").html(reponse.option);
				   Cacher_loader("loader2"); 
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
	
}

function Enregistrer_agence(traitement,idagence){
	
	var error=false;
	$("#form-ajout-agence .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-agence" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-agence").serialize(); 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbagence==1 && idagence==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idagence!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-agence"+idagence ).html( reponse.nom );
						$( "#reference-agence"+idagence ).html( reponse.reference );
						$( "#telephone-agence"+idagence ).html( reponse.telephone );
						$( "#email-agence"+idagence ).html( reponse.email );
						$( "#ville-agence"+idagence ).html( reponse.ville );
						$( "#region-agence"+idagence ).html( reponse.region );
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer une autre agence ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-agence").prepend(reponse.agence);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-agence").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}



function Notification_suppression_agence(traitement, idville, token, deja_operation){
	
	if(deja_operation==1){
		AfficherNotification("INFORMATION","loader2","Cette Agence contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc la supprimer","OK","","","","0");
	}else{
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer cette ville ?","OUI","javascript:Supprimer_ville('"+traitement+"', '"+idville+"', '"+token+"')","ANNULER","","0");
	}
	
}

function Supprimer_agence(traitement, idville, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="idville="+idville+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else if(reponse.deja_operationnel=="1"){
					      var message="Cette ville contient d&eacute;jà des enregistrements connexes,  vous ne pouvez donc le supprimer";
					      AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbville=0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","0");
				   }
				   $( "#tr_ville"+idville ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}




function Valider_agence(traitement, idagence, token, etat){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="traitement=valider-agence&idagence="+idagence+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
				  if(reponse.etat==1) $( "#valider-agence"+idagence ).addClass("validated");
				  else $( "#valider-agence"+idagence ).removeClass("validated");
				   Cacher_loader("loader2"); 
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}

/******************** GESTION DES QUARTIERS***********************************/

function Enregistrer_quartier(traitement,idquartier){
	
	var error=false;
	$("#form-ajout-utilisateur .message-erreur ").fadeOut("slow");
	
	
	$( ".mandatory-quartier" ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-quartier").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbquartier==1 && idquartier==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idquartier!=0){
						 AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						 Cacher_loader("loader"); 
						$( "#nom-quartier"+idquartier ).html( reponse.nom );
						$( "#reference-quartier"+idquartier ).html( reponse.reference );
						$( "#province-quartier"+idquartier ).html( reponse.province );
						$( "#departement-quartier"+idquartier ).html( reponse.departement );
						$( "#commune-quartier"+idquartier ).html( reponse.commune );
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer un autre quartier ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						 
						 $("#tbody-quartier").prepend(reponse.quartier);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-quartier").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}

/*************************************GESTION DES MEMBRES***************************/

function Enregistrement_membre(traitement){
	$(".message-erreur").fadeOut("slow");
	var sexe=trim($("#sexe-membre").val());
	var nom=trim($("#nom-membre").val());
	var prenom=trim($("#prenom-membre").val());	
	var jour=trim($("#jour_nais-membre").val());	
	var mois=trim($("#mois_nais-membre").val());	
	var annee=trim($("#annee_nais-membre").val());	
	
	
	var telephone=trim($("#telephone-membre").val());
	var pays=trim($("#pays-membre").val()); 
	var email=trim($("#email-membre").val());
	var password=trim($("#password-membre").val()); 
	var error=false;
	
	if ($("input[name='type-membre']:checked").length==0) {
		$("#div-erreur-champ-statut-membre").fadeIn("slow");
		error=true; 
	}
	if(!checkdate (mois, jour, annee)){
		$("#div-erreur-champ-jour_nais-membre").fadeIn("slow");
		error=true; 
	}

	
	
	if ($("input[name='ancien-militant']:checked").length==0) {
		$("#div-erreur-champ-ancien-miliant").fadeIn("slow");
		error=true; 
	}else{
		var deja_militant=$("input[name='ancien-militant']:checked").val();
		if(deja_militant==1){
			 $( ".mandatory-mouvement" ).each(function() {
				if(trim($(this).val())==""){
					var conteneur_erreur=$(this).attr("data-error-contener");
					$("#"+conteneur_erreur).fadeIn("slow");
					error=true;
				}
			});
		}
	}
		
	$( ".mandatory " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});

	if(pays=="Gabon"){
		 $( ".mandatory-gabon" ).each(function() {
			if(trim($(this).val())==""){
				var conteneur_erreur=$(this).attr("data-error-contener");
				$("#"+conteneur_erreur).fadeIn("slow");
				error=true;
			}
		});
	}else{
		 $( ".mandatory-autre" ).each(function() {
			if(trim($(this).val())==""){
				var conteneur_erreur=$(this).attr("data-error-contener");
				$("#"+conteneur_erreur).fadeIn("slow");
				error=true;
			}
		});
		
	}
	
	
	
	if(password.length<8){
		$("#div-erreur-champ-password-membre").fadeIn("slow");
		error=true;
	}
	
	
	
	
	if(!validateEmail(email) ){
		$("#div-erreur-champ-email-membre").fadeIn("slow");
		error=true;
	}
    
	
	/*if(error==false && $("#condition-membre").is(':checked')==false){
		AfficherNotification("INFORMATION","loader","Vous devez accepter la charte des valeurs et les règles de fonctionnement du Mouvement Gabon Nouveau.","OK","","","","1");
		error=true;
	}*/
	var country_code=$("#code-pays").val(); 
	var access_key = '059511fea9b0ce49f35f87ed49adf760';
	
   
	if(error==false){
			// verify phone number via AJAX call
		  Afficher_loader('loader2'); 
		$.ajax({
			url: 'http://apilayer.net/api/validate?access_key=' + access_key + '&number=' + telephone+ '&country_code=' +country_code+"&format=1",   
			dataType: 'jsonp',
			success: function(data) {
				if(data.valid==false){
					$("#div-erreur-champ-telephone-membre").fadeIn("slow");
					error= true;
					Cacher_loader('loader2'); 
					AfficherNotification("INFORMATION","loader","Votre <strong>num&eacute;ro de t&eacute;l&eacute;phone</strong> ne semble pas valide. bien vouloir verifier.","OK","","","","1");
				}else{
					$("#div-erreur-champ-telephone-membre").fadeOut("slow");
					error= false;
					var destination_traitement=base64_decode(traitement); 
					var data_to_send=$("#formulaire-adhesion").serialize();

					$.ajax({
						url : destination_traitement,
					   type : 'POST', // Le type de la requête HTTP, ici devenu POST
					   data : data_to_send, 
					   success : function(data, statut){ // success est toujours en place, bien sûr !
						   //alert(data);
						   var reponse = JSON.parse(data); 
						   if(reponse.erreur=="oui"){

								  if(reponse.session=="0"){
									  var message="Votre session a expir&eacute;. Vous devez vous reconnecter.";
									  AfficherNotification("INFORMATION","loader",message,"OK","javascript:location.reload()","","","1");

								  }else{
									  var message="";
									  if(reponse.message_telephone!="OK") message+=reponse.message_telephone;
									  if(reponse.message_email!="OK") message+=reponse.message_email;
									  AfficherNotification("INFORMATION","loader",message,"OK","","","","1");
									  
								  }
							   Cacher_loader("loader2")
						   }else{
									  var message="Enregistrement effectu&eacute; avec succès. Mail et SMS de confirmation envoy&eacute;s à <strong>"+nom+" "+prenom+"</strong>";
									  AfficherNotification("INFORMATION","loader",message,"OK","","","","1");
							          document.getElementById("formulaire-adhesion").reset();
						   } 
						},

						error : function(resultat, statut, erreur){
							alert(erreur);
						}
					});
				} 


			}
		});	

		
	}
}



function Notification_suppression_membre(traitement, idmembre, token){
	
	
		AfficherNotification("INFORMATION","loader2","Voulez vous d&eacute;finitivement supprimer ce membre de la base de donn&eacute;es ?","OUI","javascript:Supprimer_membre('"+traitement+"', '"+idmembre+"', '"+token+"')","ANNULER","","1");
	
}

function Supprimer_membre(traitement, idmembre, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="idmembre="+idmembre+"&token="+token;

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			// alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   if(reponse.nbmembre==0){
					   AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","javascript:location.reload()","","","1");
				   }else{
						 AfficherNotification("INFORMATION","loader2","Suppression effectu&eacute;e avec succ&egrave;s.","OK","","","","1");
				   }
				   $( "#tr_membre"+idmembre ).remove();
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	
	
	
}

//*************************GESTION DU CLICK SUR LA CARTE DU GABON ********************//



function Afficher_departement_province(traitement, province, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="province="+province+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div-datatable").html(reponse.datatable);
						 Affichage_contenuLightBox64(reponse.next,'loader2',initHistogrammeProvinceCarte);
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}

subtitle="";

function initHistogrammeProvinceCarte(){
	
	Highcharts.chart('display-histogramme-province-carte', {
		data: {
			table: 'datatable-province-carte'
		},
		chart: {
			type: 'column'
		},
		title: {
			text: 'Repartition des inscriptions par d&eacute;partement'
		},
	    subtitle: {
		text: subtitle
	    },
		yAxis: {
			allowDecimals: false,
			title: {
				text: 'Nombres Inscriptions'
			}
		},
		tooltip: {
			formatter: function () {
				return '<b>' + this.series.name + '</b><br/>' +
					this.point.y + ' ' + this.point.name.toLowerCase();
			}
		}
	});
}



//*************************GESTION SELECTION PROVINCE HISTOGRAMME ********************//



function Select_province_histogramme(traitement, token){
	
        var province=$("#select-graphe-departement").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="province="+province+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-departement-histogramme").html(reponse.datatable);
						 Highcharts.chart('wrap-graphe-region', {
							data: {
								table: 'datatable-departement-histogramme'
							},
							chart: {
								type: 'column'
							},
							title: {
								text: 'Province de '+reponse.province
							},
							subtitle: {
								text: 'Repartition des inscriptions par d&eacute;partement'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								formatter: function () {
									return '<b>' + this.series.name + '</b><br/>' +
										this.point.y + ' ' + this.point.name.toLowerCase();
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}



//*************************GESTION SELECTION DEPARTEMENT HISTOGRAMME ********************//



function Select_departement_histogramme(traitement, token){
	
        var departement=$("#select-graphe-commune").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="departement="+departement+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-commune-histogramme").html(reponse.datatable);
						 Highcharts.chart('wrap-graphe-departement', {
							data: {
								table: 'datatable-commune-histogramme'
							},
							chart: {
								type: 'column'
							},
							title: {
								text: 'D&eacute;partement de '+reponse.departement
							},
							subtitle: {
								text: 'Repartition des inscriptions par commune'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								formatter: function () {
									return '<b>' + this.series.name + '</b><br/>' +
										this.point.y + ' ' + this.point.name.toLowerCase();
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}


//*************************GESTION SELECTION VILLE HISTOGRAMME ********************//



function Select_ville_histogramme(traitement, token){
	
        var province=$("#select-graphe-ville").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="province="+province+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-ville-histogramme").html(reponse.datatable);
						 Highcharts.chart('wrap-graphe-ville', {
							data: {
								table: 'datatable-ville-histogramme'
							},
							chart: {
								type: 'column'
							},
							title: {
								text: 'Province de '+reponse.province
							},
							subtitle: {
								text: 'Repartition des inscriptions par ville'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								formatter: function () {
									return '<b>' + this.series.name + '</b><br/>' +
										this.point.y + ' ' + this.point.name.toLowerCase();
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}


//*************************GESTION SELECTION COMMUNE HISTOGRAMME ********************//



function Select_commune_histogramme(traitement, token){
	
        var commune=$("#select-graphe-quartier").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="commune="+commune+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-quartier-histogramme").html(reponse.datatable);
						 Highcharts.chart('wrap-graphe-commune', {
							data: {
								table: 'datatable-quartier-histogramme'
							},
							chart: {
								type: 'column'
							},
							title: {
								text: 'Commune de '+reponse.commune
							},
							subtitle: {
								text: 'Repartition des inscriptions par d&eacute;partement'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								formatter: function () {
									return '<b>' + this.series.name + '</b><br/>' +
										this.point.y + ' ' + this.point.name.toLowerCase();
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}


//*************************GESTION SELECTION PROVINCE camembert ********************//



function Select_province_camembert(traitement, token){
	
        var province=$("#select-graphe-departement-camembert").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="province="+province+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-departement-camembert").html(reponse.datatable);
						 Highcharts.chart('wrap-camembert-region', {
							data: {
								table: 'datatable-departement-camembert'
							},
							chart: {
									plotBackgroundColor: null,
									plotBorderWidth: null,
									plotShadow: false,
									type: 'pie'
							},
							title: {
								text: 'Province de '+reponse.province
							},
							subtitle: {
								text: 'Repartition des inscriptions par d&eacute;partement'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %'
									}
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}



//*************************GESTION SELECTION DEPARTEMENT camembert ********************//



function Select_departement_camembert(traitement, token){
	
        var departement=$("#select-graphe-commune-camembert").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="departement="+departement+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-commune-camembert").html(reponse.datatable);
						 Highcharts.chart('wrap-camembert-departement', {
							data: {
								table: 'datatable-commune-camembert'
							},
							chart: {
									plotBackgroundColor: null,
									plotBorderWidth: null,
									plotShadow: false,
									type: 'pie'
							},
							title: {
								text: 'D&eacute;partement de '+reponse.departement
							},
							subtitle: {
								text: 'Repartition des inscriptions par commune'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %'
									}
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}


//*************************GESTION SELECTION VILLE camembert ********************//



function Select_ville_camembert(traitement, token){
	
        var province=$("#select-graphe-ville-camembert").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="province="+province+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-ville-camembert").html(reponse.datatable);
						 Highcharts.chart('wrap-camembert-ville', {
							data: {
								table: 'datatable-ville-camembert'
							},
							chart: {
									plotBackgroundColor: null,
									plotBorderWidth: null,
									plotShadow: false,
									type: 'pie'
							},
							title: {
								text: 'Province de '+reponse.province
							},
							subtitle: {
								text: 'Pourcentage des inscriptions par ville'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %'
									}
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}


//*************************GESTION SELECTION COMMUNE camembert ********************//



function Select_commune_camembert(traitement, token){
	
        var commune=$("#select-graphe-quartier-camembert").val();
		var destination_traitement=base64_decode(traitement); 
		var data_to_send="commune="+commune+"&token="+token; 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0){
					   AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
				   }else{
					     //alert(reponse.datatable)
					     $("#div_datatable-quartier-camembert").html(reponse.datatable);
						 Highcharts.chart('wrap-camembert-commune', {
							data: {
								table: 'datatable-quartier-camembert'
							},
							chart: {
									plotBackgroundColor: null,
									plotBorderWidth: null,
									plotShadow: false,
									type: 'pie'
							},
							title: {
								text: 'Commune de '+reponse.commune
							},
							subtitle: {
								text: 'Pourcentage des inscriptions par quartier'
							},
							yAxis: {
								allowDecimals: false,
								title: {
									text: 'Nombres Inscriptions'
								}
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %'
									}
								}
							}
						});	
					    Cacher_loader("loader2"); 
				   }
				   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
}



/******************** ENREGISTREMENT DE LA PHOTO ***********************************/
function Enregistrer_photo(traitement){
	
	var error=false;
	if( document.getElementById("image-upload").files.length == 0 ){
		error=true;
		AfficherNotification("INFORMATION","loader2",'Veuillez choisir une photo',"OK","","","","0");
	}
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
        var myForm = document.getElementById('photo-profil-compte');
		var data_to_send=new FormData(myForm); 
		Afficher_loader("loader2"); 

		$.ajax({
		   url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   contentType: false,
           cache: false,
           processData:false,
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      AfficherNotification("INFORMATION","loader2",reponse.message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   AfficherNotification("INFORMATION","loader2","<b>F&eacute;licitations</b> <br />! Votre photo a &eacute;t&eacute; mise à jour avec succ&egrave;s","OK","javascript:location.reload()","","","0");
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}

//*****************TRAITEMENT CHOIX  ****************//

function traiementClickOnglet(traitement, element, token){
	

		var destination_traitement=base64_decode(traitement); 
		var data_to_send="element="+element+"&token="+token;  

		$.ajax({
		   url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				  
				  // Cacher_loader("loader2");
//				   if(element=="tab-historique-cotisation"){
//					   Rechercher_cotisation(reponse.next);
//				   }
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});	
}



function choixOnglet(element, typeOnglet){
	
	if(typeOnglet=="songlet"){
		var parent=$("li[data-id='"+element+"']").attr("data-parent");
		$("li[data-id='"+parent+"']").click();
		$("li[data-id='"+element+"']").click();
	}else if(typeOnglet=="onglet"){
		$("li[data-id='"+element+"']").click();
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





function initDatePaiement(){
	
	  if($( '#date-paiement' ).length>0){
		   $( '#date-paiement' ).datepicker( {
				language: 'fr',
				autoClose: true,

			} );    
	  }
	 if($( '#date-fin-operation-lightbox' ).length>0){
		 $( '#date-fin-operation-lightbox' ).datepicker( {
			language: 'fr',
			autoClose: true,

		} );    

		 $( '#date-debut-operation-lightbox' ).datepicker( {
			language: 'fr',
			autoClose: true,

		} );    
	 }
	

}


function initHistogramme(){
	Highcharts.chart('P10', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de l\'Estuaire'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	Highcharts.chart('P20', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Haut-Ogoou&eacute;'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	
	Highcharts.chart('P30', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province du Moyen-Ogoou&eacute;'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	Highcharts.chart('P40', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Ngouni&eacute;'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	Highcharts.chart('P50', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Nyanga'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});

	Highcharts.chart('P60', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Ogoou&eacute;-Ivindo'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	Highcharts.chart('P70', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Ogooue-Lolo'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	Highcharts.chart('P80', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Ogoou&eacute;-Maritime'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
	
	Highcharts.chart('P90', {
	  chart: {
		type: 'column'
	  },
	  title: {
		text: 'Repartition des adh&eacute;sion pour la province de Woleu-Ntem'
	  },
	  subtitle: {
		text: 'Semaine 01 septembre'
	  },
	  xAxis: {
		categories: ['lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Samedi', 'Dim']
	  },
	  yAxis: {
		title: {
		  text: 'Nombres Inscription '
		}
	  },
	  plotOptions: {
		line: {
		  dataLabels: {
			enabled: true
		  },
		  enableMouseTracking: false
		}
	  },
	  series: [{
		name: 'Total',
		data: [10.9, 11.1,15.2, 25, 33.3, 36.5, 42.2],
	//	  color:'#67b7dc'
	  },{
		name: 'Hommes',
		data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2],
	//	  color:'#67b7dc'
	  }, {
		name: 'Femmes',
		data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0],
	//	  color:'#ff0000'
	  }, {
		name: 'Jeunes',
		data: [2, 5, 3, 9.5, 11, 2, 1],
	//	  color:'#ff2390'
	  }]
	});
}


function initSearchSelect(){
	
	/* $.getScript('js/select-search.js', function() {
       alert("select-search ok")
    });*/
	

}



//********************************************************GESTION ONGLET EMPRUNTS***************************************************************//



function Enregistrer_emprunt(traitement,idemprunt){
	
	var error=false;
	$("#form-ajout-emprunt .message-erreur ").fadeOut("slow");
	
	
	$( "#form-ajout-emprunt  input " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	$( "#form-ajout-emprunt  select " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
   
	if(error==false){
		
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-emprunt").serialize();

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			//alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }else{
						  AfficherNotification("INFORMATION","loader2",reponse.message,"OK","","","","0");
					  }
			   }else{
				   
				   if(reponse.nbemprunt==1 && idemprunt==0){
					   AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","javascript:location.reload()","","","0");
				   }else{
				     if(idemprunt!=0){
						 AfficherNotification("INFORMATION","loader","Enregistrement effectu&eacute; avec succ&egrave;s.","OK","","","","0");
						$( "#membreemprunt"+idemprunt ).html( reponse.membre );
						$( "#libele-emprunt"+idemprunt ).html( reponse.objet );
						$( "#montant-emprunt"+idemprunt ).html( reponse.montant );
						$( "#etat-emprunt"+idemprunt ).html( reponse.etat );
						$( "#date-remboursement-emprunt"+idemprunt ).html( reponse.date_remboursement );
						$( "#compte-emprunt"+idemprunt ).html( reponse.compte_debiteur );
						$( "#compte-remboursement"+idemprunt ).html( reponse.compte_interet );
						$( "#taux-emprunt"+idemprunt ).html( reponse.taux );
						Cacher_loader("loader2"); 
					 }else{
						AfficherNotification("INFORMATION","loader2","Enregistrement effectu&eacute; avec succ&egrave;s. voulez vous enregistrer un autre emprunt ?","OUI","javascript:Cacher_loader('loader2');","NON","javascript:Cacher_loader('loader2');Cacher_loader('loader')","0"); 
						//alert(reponse.emprunt);
						 $("#tbody-emprunt").prepend(reponse.emprunt);
					 }
				     
					   
				   }
				   document.getElementById("form-ajout-emprunt").reset();   
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}






function verif_saisie_champs(traitement){
	// verification saisie champs email mot de passe oubli&eacute;
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
				   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
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

//*********EDITION SUIVI DES DEMANDES *************************************//




function Enregistrer_suivi(traitement){
	
	
	var error=false;
	
	$( ".mandatory " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
	
	if(error==false){
		$("#from").val(getIdLastElement('line-msg-follow-up'));
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-ajout-suivi").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			    var reponse = JSON.parse(data); 
			   if(reponse.erreur=="oui"){
					
				   if(reponse.session=="0"){
					 var message=reponse.message;
					 AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
				   }else{
					   if(reponse.pwd=="0"){
						   AfficherNotification("INFORMATION","loader2","Votre mot de passe est incorrect ","OK","","","","0");
					   }
					   else if(reponse.valide_telephone=="0"){
						   AfficherNotification("INFORMATION","loader2","Num&eacute;ro de t&eacute;l&eacute;phone invalide","OK","","","","0");
					   }
				   }
			   } else{
				    Cacher_loader("loader2");
				    $("#conteneur-echange").append(reponse.echange);
				    $("#conteneur-echange").animate({ scrollTop: $("#conteneur-echange")[0].scrollHeight}, 1000);
				    document.getElementById("form-ajout-suivi").reset();
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else{
		var message="Veuillez saisir le message &agrave; envoyer.";
		AfficherNotification("INFORMATION","loader2",message,"OK","","","","1");	
	}
}


		

//*************************************CLOTURE DE DOSSIER *********************************//

function Notification_enregistrer_cloture_dossier(traitement, LeDossierDemandeurEstIlComplet){
	var error=false;
	$("#form-cloture-dossier .message-erreur ").fadeOut("slow");
	
	
	var montant=trim($("#montant-accorde").val());
	if(montant=="")montant=0;
	var duree=$("#duree").val();
	var commentaire=trim($("#commentaire-traitement").val());
	var resultat=$("input[name='etat-credit']:checked").val(); 
	
	if (resultat=="valide" && Number(montant) < 50000) {
		$("#div-erreur-champ-montant-accorde").fadeIn("slow");
		error = true;
	}
	
	if (resultat=="refuse" && commentaire=="") {
		$("#div-erreur-champ-commentaire").fadeIn("slow");
		error = true;
	}

	if(error==false){
		if(LeDossierDemandeurEstIlComplet==1){
			AfficherNotification("CONFIRMATION","loader2","Vous &eacute;tes sur le point de cl&ocirc;turer cette demande de cr&eacute;dit, voulez vous continuer ?. ","OUI, ClOTURER","javascript:Enregistrer_enregistrer_cloture_dossier('"+traitement+"')","ANNULER","","0");			
		}else{
			AfficherNotification("CONFIRMATION","loader2","Ce dossier semble incomplet, le client n'a pas donn&eacute; toutes les informations requises. Voulez vous quand m&ecirc;me cl&ocirc;turer ce dossier ? ","OUI, CLOTURER","javascript:Enregistrer_enregistrer_cloture_dossier('"+traitement+"')","ANNULER","","0");			
		}
	}
	
}


function Enregistrer_enregistrer_cloture_dossier(traitement){
	
	var error=false;
	$("#form-cloture-dossier .message-erreur ").fadeOut("slow");
	
	
	var montant=trim($("#montant-accorde").val());
	if(montant=="")montant=0;
	var duree=$("#duree").val();
	var commentaire=trim($("#commentaire-traitement").val());
	var iddemandeur=trim($("#iddemandeur").val());
	var resultat=$("input[name='etat-credit']:checked").val(); 
	
	if (resultat=="valide" && Number(montant) < 50000) {
		$("#div-erreur-champ-montant-accorde").fadeIn("slow");
		error = true;
	}
	
	if (resultat=="refuse" && commentaire=="") {
		$("#div-erreur-champ-commentaire").fadeIn("slow");
		error = true;
	}

    
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-cloture-dossier").serialize(); 

		Afficher_loader("loader2"); 

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   
				    $("#td-cloture-tout"+iddemandeur).html(reponse.lien_cloture);
				    $("#td-couleur-tout"+iddemandeur).addClass(reponse.newclass);
				    $("#td-couleur-tout"+iddemandeur).addClass("cloture");
				    if(reponse.oldclass!="")$("#td-couleur-tout"+iddemandeur).removeClass(reponse.newclass);
				    $("#td-resume-tout"+iddemandeur).html(reponse.resume);
				    Cacher_loader("loader2");
				     AfficherNotification("INFORMATION","loader","Dossier clôturé avec succès","OK","javascript:location.reload()","","","0");
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}
	
	
}


//************************************************ESPACE CLIENT MON PROFIL *********************************************************************//


function Modifier_compte(traitement){
	
	
	var error=false;
	
	$( "#formulaire-profil input " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	$( "#formulaire-profil select " ).each(function() {
		if(trim($(this).val())=="0"){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	var prenom=$("#prenom").val(); 
	var jour_naissance=$("#jour").val();
	var mois_naissance=$("#mois").val();
	var annee_naissance=$("#annee").val();
	var date_naissance=annee_naissance+"/"+mois_naissance+"/"+jour_naissance; 

	if(!isValidDate2(date_naissance) ){
		error=true;
	}
	
	
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#formulaire-profil").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   //alert(data);
			    var reponse = JSON.parse(data); 
			   if(reponse.erreur=="oui"){
					
				   if(reponse.session=="0"){
					 var message=reponse.message;
					 AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
				   }else{
					   if(reponse.pwd=="0"){
						   AfficherNotification("INFORMATION","loader2","Votre mot de passe est incorrect ","OK","","","","0");
					   }
					   else if(reponse.valide_telephone=="0"){
						   AfficherNotification("INFORMATION","loader2","Num&eacute;ro de t&eacute;l&eacute;phone invalide","OK","","","","0");
					   }
				   }
			   } else{
			   		var message="<strong>"+prenom+"</strong> Votre mise a jour a &eacute;t&eacute; enregistr&eacute;e avec succ&egrave;s.";
			   		AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");	
				    $("#pwdprofil").val("");
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else{
		var message="Veuillez renseigner soigneusement tous les champs.";
		AfficherNotification("INFORMATION","loader",message,"OK","","","","0");	
	}
}



function Modifier_pwd(traitement){
	
	var mdp_actuel=trim($("old-pwd").val()); 
	var nouveau_mot_de_passe=trim($("#new-pwd").val());
	var cnouveau_mot_de_passe=trim($("#confirm-pwd").val());
	var error=false;
	
	$( "#form-modif-pwd input " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	if(nouveau_mot_de_passe.length<8){
		$("#div-erreur-new-pwd").fadeIn("slow");
		error=true;
	}
	
	if(nouveau_mot_de_passe!=cnouveau_mot_de_passe){
		$("#div-erreur-confirm-pwd").fadeIn("slow");
		error=true;
	}
	

	
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-modif-pwd").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
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
			   		var message="<strong>"+reponse.prenom+"</strong> Votre mot de passe a &eacute;t&eacute; modifi&eacute;e avec succ&egrave;s.";
			   		AfficherNotification("INFORMATION","loader",message,"OK","javascript:location.reload()","","","0");	
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else {
		var message="Veuillez renseigner tous les champs.";
		AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");	
	}
}




function Modifier_email(traitement){
	
	var mdp_email=trim($("pwd").val()); 
	var nouveau_email=trim($("#nouvelle-adresse").val());
	var cnouveau_email=trim($("#confirmer-nouvelle-adresse").val());
	var error=false;
	
	$( "#form-modif-email input " ).each(function() {
		if(trim($(this).val())==""){
			var conteneur_erreur=$(this).attr("data-error-contener");
			$("#"+conteneur_erreur).fadeIn("slow");
			error=true;
		}
	});
	
	
	if(nouveau_email!=cnouveau_email){
		$("#div-erreur-nouvelle-adresse").fadeIn("slow");
		error=true;
	}
	
	if(!validateEmail(nouveau_email) ){
		$("#div-erreur-confirmer-nouvelle-adresse").fadeIn("slow");
		error=true;
	}

	
	if(error==false){
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#form-modif-email").serialize();

		Afficher_loader('loader2'); 
		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			   alert(data);
			   var reponse = JSON.parse(data);  
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
			   		var message="<strong>"+reponse.prenom+"</strong> Votre adresse email a &eacute;t&eacute; modifi&eacute;e avec succ&egrave;s.";
			   		AfficherNotification("INFORMATION","loader",message,"OK","javascript:location.reload()","","","0");	
			   } 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
		
	}else {
		var message="Veuillez renseigner tous les champs.";
		AfficherNotification("INFORMATION","loader2",message,"OK","","","","0");	
	}
}




function check_uncheck_all(name, action){
	if(action=="check")$('[name="'+name+'"]').prop( "checked", true );
	else if(action=="uncheck")$('[name="'+name+'"]').prop( "checked", false );
}



function Pagination(traitement,formulaire,conteneur_liste,page_encours,loader){
	
        
		var destination_traitement=base64_decode(traitement); 
		var data_to_send=$("#"+formulaire).serialize()+"&page_encours="+page_encours; 
		if(loader !== undefined)Afficher_loader(loader);

		$.ajax({
			url : destination_traitement,
		   type : 'POST', // Le type de la requ&ecirc;te HTTP, ici devenu POST
		   data : data_to_send, 
		   success : function(data, statut){ // success est toujours en place, bien sûr !
			 //alert(data);
			  var reponse = JSON.parse(data); 
			   
			   if(reponse.erreur=="oui"){
				  
					  if(reponse.session=="0"){
					      var message="Votre jeton de session semble invalide.";
					      AfficherNotification("INFORMATION","loader2",message,"OK","javascript:location.reload()","","","0");
					  }
			   }else{
				   if(reponse.nbreponse==0)$("#"+conteneur_liste).html("AUCUN RESULTAT");
				   else $("#"+conteneur_liste).html(reponse.liste);
				   
				   if(loader !== undefined)Cacher_loader(loader);
				} 
			},

			error : function(resultat, statut, erreur){
				alert(erreur);
			}
		});
	
}


function isIE() {
  ua = navigator.userAgent;
  /* MSIE used to detect old browsers and Trident used to newer ones*/
  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
  
  return is_ie; 
}


