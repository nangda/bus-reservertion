function changerIndicateur2(){
			$('#indicatif-pays').val($("#code-pays-invitation").find('option:selected').attr('data-code'));
}
var xhr = null;
function getXhr(){
if(window.XMLHttpRequest) // Firefox et autres
xhr = new XMLHttpRequest(); 
else if(window.ActiveXObject){ // Internet Explorer 
   try {
    xhr = new ActiveXObject("Msxml2.XMLHTTP"); 
   } catch (e) {
     xhr = new ActiveXObject("Microsoft.XMLHTTP"); 
  }
}
else { // XMLHttpRequest non support� par le navigateur 
alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
xhr = false;
}
}

var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
  if(popUpWin)
  {
    if(!popUpWin.closed) popUpWin.close();
  }
  popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,statusbar=false,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+width+',height='+height+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

function isNumberFloat(inputString)

{

  return (!isNaN(parseFloat(inputString))) ? true : false;

}

function removeLeadingAndTrailingChar (inputString, removeChar) 
{
	var returnString = inputString;
	if (removeChar.length)
	{
	  while(''+returnString.charAt(0)==removeChar)
		{
		  returnString=returnString.substring(1,returnString.length);
		}
		while(''+returnString.charAt(returnString.length-1)==removeChar)
	  {
	    returnString=returnString.substring(0,returnString.length-1);
	  }
	}
	return addslashes (returnString);
}
		
		

		
function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}


function isDate(txtDate)
{
	  txtDate=replaceMulti(txtDate, "/", "-");
	  alert(txtDate);
return txtDate.match(/^d\d?\/\d\d?\/\d\d\d\d$/);
}

function isValidDate2(dateString) {
  dateString=replaceMulti(dateString, "/", "-");
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  return dateString.match(regEx) != null;
}

function replaceMulti(haystack, needle, replacement)
{
    return haystack.split(needle).join(replacement);
}




function getScrollXY() {
    var x = 0, y = 0;
    if( typeof( window.pageYOffset ) == 'number' ) {
        // Netscape
        x = window.pageXOffset;
        y = window.pageYOffset;
    } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
        // DOM
        x = document.body.scrollLeft;
        y = document.body.scrollTop;
    } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
        // IE6 standards compliant mode
        x = document.documentElement.scrollLeft;
        y = document.documentElement.scrollTop;
    }
    return  y;
}



function Afficher_information_traitement(div_information){
	document.getElementById("opacite").innerHTML =document.getElementById(div_information).innerHTML;
}

function Afficher_information_traitement2(div_information, div_conteneur){
	document.getElementById(div_conteneur).innerHTML =document.getElementById(div_information).innerHTML;
}


function Cacher_opaciter(div){
	document.getElementByTagName("body").style.overflow="auto";
	document.getElementById(div).style.display="none"; 
	$("#"+div).html("");
}


function Afficher_loader(loader){
	$("#"+loader).html('<div id="div_preloader" ><img src="images/preloader.gif"  /></div>');
	$("#"+loader).fadeIn('slow');
}

function Cacher_loader(loader){
	$("#"+loader).fadeOut('fast');
	/*document.getElementById(div).style.display="none"; */
}


function Afficher_opaciter(div, scrooller){
	var hauteur=document.getElementById("page").offsetHeight;
	if(window.innerHeight>hauteur)hauteur=window.innerHeight;
	document.getElementById(div).style.paddingTop=(getScrollXY())+"px";
	if(scrooller==0)document.getElementById("page").style.overflow="hidden";
	document.getElementById(div).style.height=hauteur+"px";
	document.getElementById(div).style.display="inline";
}


function Affichage_contenuLightBox(fichier,loader, callback){
	 var defaut='<div id="div_preloader"  style="text-align: center"> <img src="images/preloader.gif"  />	</div>';
	 $("#"+loader).html(defaut);

     getXhr();
     // On d�fini ce qu'on va faire quand on aura la r�ponse 
     xhr.onreadystatechange = function(){
     // On ne fait quelque chose que si on a tout re�u et que le serveur est ok
        if(xhr.readyState == 4 && xhr.status == 200){ 
           var leselect = xhr.responseText; 
		      //alert(leselect); 
			  document.getElementById(loader).innerHTML = leselect;
			
				if(callback !== undefined) {
					callback();
				}        
		} 

      }

     // Ici on va voir comment faire du post 
     xhr.open("POST",fichier,true); // ne pas oublier �a pour le post 
     xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	 Afficher_loader(loader); 
	 //Afficher_information_traitement2(traitement, opacite);
     xhr.send("");
}

function Affichage_contenuLightBox64(fichier,loader, callback){
	 var defaut='<div id="div_preloader"  style="text-align: center"> <img src="images/preloader.gif"  />	</div>';
	 $("#"+loader).html(defaut);

	fichier=base64_decode(fichier); 
     getXhr();
     // On d�fini ce qu'on va faire quand on aura la r�ponse 
     xhr.onreadystatechange = function(){
     // On ne fait quelque chose que si on a tout re�u et que le serveur est ok
        if(xhr.readyState == 4 && xhr.status == 200){ 
           var leselect = xhr.responseText; 
		      //alert(leselect); 
			  document.getElementById(loader).innerHTML = leselect;
				if(callback !== undefined) {
					callback();
				}        
        } 

      }

     // Ici on va voir comment faire du post 
     xhr.open("POST",fichier,true); // ne pas oublier �a pour le post 
     xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	 Afficher_loader(loader); 
	 //Afficher_information_traitement2(traitement, opacite);
     xhr.send("");
}

function gotoURL64(page,loader){
	var defaut='<div id="div_preloader"  style="text-align: center"> <img src="images/preloader.gif"  />	</div>';
	$("#"+loader).html(defaut);
	page=base64_decode(page); 
	Afficher_loader(loader); 
	location.href=page;
}

function gotoURL(page,loader){
	
	Afficher_loader(loader); 
	location.href=page;
}


function Affichage_box64(fichier,opacite,traitement, scrooller){
	fichier=base64_decode(fichier);
     getXhr();
     // On d�fini ce qu'on va faire quand on aura la r�ponse 
     xhr.onreadystatechange = function(){
     // On ne fait quelque chose que si on a tout re�u et que le serveur est ok
        if(xhr.readyState == 4 && xhr.status == 200){ 
           var leselect = xhr.responseText; 
		      //alert(leselect); 
			  document.getElementById(opacite).innerHTML = leselect;
        } 

      }

     // Ici on va voir comment faire du post 
     xhr.open("POST",fichier,true); // ne pas oublier �a pour le post 
     xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	 Afficher_opaciter(opacite,scrooller); 
	 Afficher_information_traitement2(traitement, opacite);
     xhr.send("");
}


function Affichage_box(fichier,opacite,traitement, scrooller){
     getXhr();
     // On d�fini ce qu'on va faire quand on aura la r�ponse 
     xhr.onreadystatechange = function(){
     // On ne fait quelque chose que si on a tout re�u et que le serveur est ok
        if(xhr.readyState == 4 && xhr.status == 200){ 
           var leselect = xhr.responseText; 
		      //alert(leselect); 
			  document.getElementById(opacite).innerHTML = leselect;
        } 

      }

     // Ici on va voir comment faire du post 
     xhr.open("POST",fichier,true); // ne pas oublier �a pour le post 
     xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	 Afficher_opaciter(opacite,scrooller); 
	 Afficher_information_traitement2(traitement, opacite);
     xhr.send("");
}





function verifdt(){
	verdat=removeLeadingAndTrailingChar (document.getElementById("date_legalisation").value, " ");
	datej= new Date()
	anneej=datej.getFullYear()+"*";
	anneej=anneej.substring(0,2)
	
	if (verdat.length ==6) {
	verdat=verdat.substring(0,2)+"/"+verdat.substring(4,2)+"/"+anneej+verdat.substring(6,4);
	document.getElementById("date_legalisation").value=verdat
	}
	if (verdat.length ==8) {
	verdat=verdat.substring(0,2)+"/"+verdat.substring(4,2)+"/"+verdat.substring(8,4);
	document.getElementById("date_legalisation").value=verdat;
	
	}
	
	if(!isValidDate(verdat))
	alert("la date de l�galisation n'est pas valide ou n'est pas au bon format.\n format : jj/mm/aaaa");
	else
	document.myform.dateop.value = verdat;


}

	function isValidDate(d) {
		  var dateRegEx = /^((((0?[1-9]|[12]\d|3[01])[\.\-\/](0?[13578]|1[02])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|[12]\d|30)[\.\-\/](0?[13456789]|1[012])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|1\d|2[0-8])[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|(29[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00)))|(((0[1-9]|[12]\d|3[01])(0[13578]|1[02])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|[12]\d|30)(0[13456789]|1[012])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|1\d|2[0-8])02((1[6-9]|[2-9]\d)?\d{2}))|(2902((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00))))$/;
		  return d.match(dateRegEx);
	} 
	




function verif_date_valide(date_pas_sure){
    var format = /^(\d{1,2}\/){2}\d{4}$/;
    if(!format.test(date_pas_sure)){alert('Date non valable !')}
    else{
        var date_temp = date_pas_sure.split('/');
        date_temp[1] -=1;        // On rectifie le mois !!!
        var ma_date = new Date();
        ma_date.setFullYear(date_temp[2]);
        ma_date.setMonth(date_temp[1]);
        ma_date.setDate(date_temp[0]);
        if(ma_date.getFullYear()==date_temp[2] && ma_date.getMonth()==date_temp[1] && ma_date.getDate()==date_temp[0]){
            return true;
        }
        else{
            return false;
        }
    }
}


function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		
		if (charCode > 31 && (charCode < 48 || charCode > 57 || charCode == 48))return false;
		return true;
}
	
function incrementValue(idelement)
{
	var value = parseInt(document.getElementById(''+idelement+'').value, 10);
	value = isNaN(value) ? 0 : value;
	value++;
	document.getElementById(''+idelement+'').value = value;
	//totalPrix()
}
	 
	function decrementValue(idelement)
	{
		var value = parseInt(document.getElementById(''+idelement+'').value, 10);
		value = isNaN(value) ? 1 : value;
		value--;
		if(value == 0) value=1;
		document.getElementById(''+idelement+'').value = value;
		//totalPrix()
	}
	
	
	function totalPrix()
	{
		var quantite= $('#nbre-produit').val(); 
		var prix_unitaire=$('#prix_unitaire').val() ; 
		
		$("#prix_total").html(formatNumber2(total));
	}
	
   function formatNumber2(number) {
    return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, ' ');
   }

  function Remove_all_white_space(string){
	  return string.replace(/\s/g, "");
  }



// Fonction affichant les notification en lightbox

	function AfficherNotification(titrelightbox,loader,texteNotification,bouton1,actionbouton1,bouton2,actionbouton2,fermeture){
	 var defaut='<div id="div_preloader"  style="text-align: center"> <img src="images/preloader.gif"  />	</div>';
	 $("#"+loader).html(defaut);
	 Afficher_loader(loader);
		$("#div_preloader").hide();
		var notification = '<div class="lightbox-notification" id="lightbox-notification"></div>';
		var enteteNotification ='<div class="entete-lightbox-notification" id="entete-lightbox-notification"> <span id="titre-lightbox"></span><span id="close-lightbox"></span></div>';
		var closeNotification='<div class="close-lightbox-notification" onclick="Cacher_loader(\''+loader+'\')"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">	<path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306 C474.995,612,612,474.995,612,306z M168.3,424.032L286.333,306L168.3,187.967l19.667-19.667L306,286.333L424.032,168.3 l19.668,19.667L325.667,306L443.7,424.032L424.032,443.7L306,325.667L187.967,443.7L168.3,424.032z"/></svg></div>';
		var contenuNotification='<div class="contenu-lightbox-notification" id="contenu-lightbox-notification"></div>'
		var conteneurBtnNotification='<div class="conteneur-btn-lightbox-notification"></div>';
		var btnNotification1 = '<a href="#" class="btn-lightbox-notification" id="btn1-lightbox"></a>';
		var btnNotification2 = '<a href="#" class="btn-lightbox-notification" id="btn2-lightbox"></a>';
		
		$("#"+loader+"").empty();
		$("#"+loader+"").prepend(notification);
		$("#lightbox-notification").prepend(enteteNotification);
		if(typeof titrelightbox != 'undefined')$("#titre-lightbox").html(titrelightbox);
		if((typeof fermeture != 'undefined') && (fermeture == '1')){
			$("#entete-lightbox-notification").append(closeNotification);
		}
		
		
		$("#lightbox-notification").append(contenuNotification);
		if(typeof texteNotification != 'undefined') {
		  $("#contenu-lightbox-notification").html(texteNotification);
		}else $("#contenu-lightbox-notification").html('Alert notification');
		
		
		if((typeof bouton1 != 'undefined') || (typeof bouton2 != 'undefined'))$("#lightbox-notification").append(conteneurBtnNotification);
		
		if((typeof bouton1 != 'undefined') && (bouton1 != '')){
			$(".conteneur-btn-lightbox-notification").append(btnNotification1);
			$("#btn1-lightbox").html(bouton1);
			if((typeof actionbouton1 != 'undefined') && (actionbouton1 != '')){
				$("#btn1-lightbox").attr("href", actionbouton1);
			}else $("#btn1-lightbox").attr("href", "javascript:Cacher_loader('"+loader+"')");
		}
		
		if((typeof bouton2 != 'undefined') && (bouton2 !='')){
			$(".conteneur-btn-lightbox-notification").append(btnNotification2);
			$("#btn2-lightbox").html(bouton2);
			if((typeof actionbouton2 != 'undefined') && (actionbouton2 != '')){
				$("#btn2-lightbox").attr("href", actionbouton2);
			}else $("#btn2-lightbox").attr("href", "javascript:Cacher_loader('"+loader+"')");
			
		}
		
	}

function connaitre_operateur(numero){
	   var id_operateur="";
	   
	   if(/^242[0-9]{6}$/.test(numero) || /^243[0-9]{6}$/.test(numero)){
			 id_operateur="CAMTEL";
	   }else if(/^67[0-9]{7}$/.test(numero) || /^65[0-4][0-9]{6}$/.test(numero) || /^68[0-1][0-9]{6}$/.test(numero)){
			 id_operateur="MTN";
	   }else if(/^69[0-9]{7}$/.test(numero) || /^65[5-9][0-9]{6}$/.test(numero)){
			 id_operateur="ORANGE";
	   }else if(/^66[0-9]{7}$/.test(numero) || /^64[5-9][0-9]{6}$/.test(numero)){
			 id_operateur="NEXTEL";
	   }else{
			return false;
	   }
	   
	   return id_operateur;
}
// fin de la fonction de notification


//************************************Faire une recherche************************//


function recherche(traitement){
	var search=trim($("#mot-cle").val()); 
	var error=false;
	$(".message-erreur").fadeOut("slow");
	if(trim(search.length)<3){
		error=true;
	}else error = false;
	
	if(error==false){
		
		var destination_traitement=base64_decode(traitement); 
		window.location.href=destination_traitement+'?search='+search;
		
		
	}else{
		AfficherNotification("INFORMATION","loader","Vous rechercher un mot avec plus de 2 caract�res.","OK","","","","1");
	}
	
	
}

function fullsearch(){
	var search=trim($("#search").val()); 
	var error=false;
	if(trim(search.length)<3){
		error=true;
	}else error = false;
	
	if(error==false){
		window.location.href='resultats-recherche.php?search='+search;
	}else{
		AfficherNotification("INFORMATION","loader","Vous rechercher un mot avec plus de 2 caract�res.","OK","","","","1");
	}
}

function isCamerounNumber(number) 
{    
	var nombreCaractere = number.length 

	// on prend le code op�rateur TROIS PREMIERS CHIFFRE POUR CAMTEL .... DEUX PREMIERS CHIFFRES POUR LES AUTRES///
	var premiersCaracteresForeignOperator = number.substr(0, 2) 
	var premiersCaracteresLocalOperator = number.substr(0, 3) 
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////

	var isCamtel = false 
	var isCmrNumber = false 

	if (premiersCaracteresLocalOperator == "222") { isCamtel = true } 


	if (nombreCaractere == '9') 
	{ 
		if ( premiersCaracteresForeignOperator == '65' || premiersCaracteresForeignOperator == '66' || premiersCaracteresForeignOperator == '67' || premiersCaracteresForeignOperator == '68' || premiersCaracteresForeignOperator == '69' || isCamtel == true) 
		{ 
			isCmrNumber = true; 
		} 
	}

	return isCmrNumber ; 

}
