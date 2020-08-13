<?php 
session_start();
header("Access-Control-Allow-Origin:*", true);
header("Access-Control-Allow-Headers: x-requested-with", true);
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest' AND isset($_SESSION['token']) AND isset($_POST['token']) AND !empty($_SESSION['token']) AND !empty($_POST['token'])) {

	// On v&eacute;rifie que les deux correspondent
    if ($_SESSION['token'] == $_POST['token']) { 


		include("../connectionbd.php");
		include("../mesfonctions.php");
		
		$ladministrateur=getadministrateurInformations($_SESSION["compte"]);
		$admin=$ladministrateur[0];
		

        $response=array();
		$email=mysql_real_escape_string  ($_POST["email-membre"]);
		$pwd=base64_encode ($_POST["password"]);

		$type_membre=mysql_real_escape_string  ($_POST["type-membre"]);
		$nom=mysql_real_escape_string  (utf8_decode($_POST["nom-membre"]));
		$prenom=mysql_real_escape_string(utf8_decode($_POST["prenom-membre"]));
		$sexe=mysql_real_escape_string($_POST["sexe-membre"]);
		$nationalite=mysql_real_escape_string($_POST["nationalite"]);
		$profession=mysql_real_escape_string(utf8_decode($_POST["profession-membre"]));
		$annee_nais=mysql_real_escape_string($_POST["annee_nais"]);
		$jour_nais=mysql_real_escape_string($_POST["jour_nais"]);
		$mois_nais=mysql_real_escape_string($_POST["mois_nais"]);
		$telephone=mysql_real_escape_string($_POST["telephone-membre"]);
		$indicatif =mysql_real_escape_string(preg_replace("/[^0-9]/","",$_POST["indicatif"]));
		$telephone_whatsapp=mysql_real_escape_string($_POST["telephone-whatsapp"]);
		$indicatif_whatsapp =mysql_real_escape_string(preg_replace("/[^0-9]/","",$_POST["indicatif-whatsapp"]));
		
		$pays =mysql_real_escape_string($_POST["pays-membre"]);
		$ville =mysql_real_escape_string($_POST["ville-membre"]);
		if($pays!="Gabon")$ville=mysql_real_escape_string(utf8_decode($_POST["ville-saisi"]));
		
		$arrondissement =mysql_real_escape_string($_POST["arrondissement-membre"]);
		$quartier =mysql_real_escape_string($_POST["quartier-membre"]);
		$adresse =mysql_real_escape_string(utf8_decode($_POST["adresse-membre"]));
		
		$commune=getcommuneInformations($arrondissement);
		if($commune!=false){
			$departement=$commune["iddepartement"];
			$province=$commune["idprovince"];
		}else{
		    $departement=0;	
		    $province=0;	
		} 
		
		$proposition =mysql_real_escape_string(utf8_decode($_POST["proposition-membre"]));
		
		$deja_militant =mysql_real_escape_string($_POST["ancien-militant"]);
		if($deja_militant==1){
			$dernier_mouvement =mysql_real_escape_string(utf8_decode($_POST["ancien-mouvement"]));
			$date_adhesion_dernier_mouvement =mysql_real_escape_string(utf8_decode($_POST["date_ancienne_adhesion"]));
		}else{
			$dernier_mouvement ="";
			$date_adhesion_dernier_mouvement ="";
		}
		
		if(isset($_POST["actu-email"]))$recevoir_actualite_par_email =1;
		else $recevoir_actualite_par_email=0;
		
		if(isset($_POST["info-sms"]))$recevoir_information_par_sms =1;
		else $recevoir_information_par_sms=0;

		$date_naissance=$annee_nais."/".$mois_nais."/".$jour_nais; 
		$age=date("Y")-$annee_nais;

		$error="";

		$trouve=false;

		if(mysql_num_rows(mysql_query("SELECT * FROM membre WHERE telephone='$telephone' AND indicatif='$indicatif' "))>0){ 
			$trouve=true;
			$response["message_telephone"] = "- Un autre Membre est d&eacute;j&agrave; enregistr&eacute; avec <strong>le num&eacute;ro de t&eacute;l&eacute;phone</strong> que vous avez donn&eacute;.<br>";
		}else{
			$response["message_telephone"]="OK";
		}
		if(mysql_num_rows(mysql_query("SELECT * FROM membre WHERE email='$email' "))>0){ 
			$trouve=true;
			$response["message_email"] = "- Un autre Membre est d&eacute;j&agrave; enregistr&eacute; avec <strong>cet email</strong> que vous avez donn&eacute;.";
		}else{
			$response["message_email"]="OK";
		}
		if(mysql_num_rows(mysql_query("SELECT * FROM membre WHERE nom='$nom' AND prenom='$prenom' AND date_naissance='$date_naissance' "))>0){ 
			$trouve=true;
			$response["message_email"] = "- Un autre Membre est d&eacute;j&agrave; enregistr&eacute; avec <strong>le m&ecirc;me nom, le m&ecirc;me pr&eacute;nom et la m&ecirc;me date de naissance</strong> que vous avez donn&eacute;.";
		}else{
			$response["message_email"]="OK";
		}

        $code_activation=randomize_integer(4);
		$url_to_go="validation-compte.php";
		
 		$h=gmdate("H")+1;
		if($h<10)$h="0".$h;
		$heure_creation=$h.":".gmdate("i:s");
		$heure_modification="";
		$date_validation="";
		$heure_validaton="";
		$date_modification="";
		$valide_inscription=0;
		$createur="ONLINE";
		$modificateur="";
		$etat=0;
		$photo="";
        
        $nbmembre=mysql_num_rows(mysql_query("SELECT * FROM membre "))+1;
		$matricule=date("y")."GN".formatdequatrechiffre($nbmembre);

      
		if($trouve==false){ 
			mysql_query("INSERT INTO membre VALUE('0','$nom','$prenom','$sexe','$date_naissance','$age','$nationalite','$profession','$indicatif','$telephone','$indicatif_whatsapp','$telephone_whatsapp','$email', '$pwd', '$pays', '$ville','$province','$departement','$arrondissement', '$quartier', '$adresse', '$type_membre','$matricule', '$deja_militant', '$dernier_mouvement', '$date_adhesion_dernier_mouvement' ,'$recevoir_actualite_par_email', '$recevoir_information_par_sms', '$admin', '$modificateur', '".date("Y/m/d")."', '$date_modification', '$heure_creation', '$heure_modification', '$date_validation', '$heure_validaton', '$code_activation','$valide_inscription','$etat')") OR die(mysql_error());

			 $membre=getmembreinformations(mysql_insert_id());
			
		 	 $indicatif=$membre["indicatif"];
			 $telephone=$membre["telephone"];
			 $email=$membre["email"];
			 $prenom=$membre["prenom"];
			 $date=gmdate("Y/m/d");
			 $heure=gmdate("H")+1;
			 $heure=$heure.gmdate(":i:s");
			 
		     ob_start();
		     include("mail-confirmation-adhesion.php");
		     $tableau_detail_membre = ob_get_clean();
		     ob_end_clean();

		     ob_start();
		     include("mail-admin-confirmation-adhesion.php");
		     $tableau_detail_admin = ob_get_clean();
		     ob_end_clean();
			
			
			 mail_simple("merleauponti@luxwebservices.net", "GABON NOUVEAU - NOUVELLE ADHESION" ,$tableau_detail_admin, "GABON NOUVEAU<contact@gabonnouveau.org>");
			 /*mail_simple("isaac.ngock@luxwebservices.net", "GABON NOUVEAU - NOUVELLE ADHESION" ,$tableau_detail_admin, "GABON NOUVEAU<contact@gabonnouveau.org>");
			 mail_simple("mike.jocktane@crn-int.org", "GABON NOUVEAU - NOUVELLE ADHESION" ,$tableau_detail_admin, "GABON NOUVEAU<contact@gabonnouveau.org>");
			 mail_simple("claudeoussou@scientia-gabon.com", "GABON NOUVEAU - NOUVELLE ADHESION" ,$tableau_detail_admin, "GABON NOUVEAU<contact@gabonnouveau.org>");*/
			 mail_simple($email, "GABON NOUVEAU - VALIDATION DE VOTRE INSCRIPTION",$tableau_detail_membre, "GABON NOUVEAU<contact@gabonnouveau.org>");
			
			
			 $message_sms="$prenom, vous êtes désormais membre de la grande famille du mouvement GABON NOUVEAU. Vous serez régulièrement informé des activités du mouvement et nous restons ouvert aux propositions pour la transformation du GABON.";
			
		     $fields = array(
				"apiKey"=>"5d3bed5dec7cb80887ae1d8f7f0f8b3c38112908",
				"phoneNumbers"=>"+".$indicatif.$telephone,
				"message"=>"$message_sms. www.gabonnouveau.org",
				"sender" => "GABONNOUV"
		       );
		     //$result = $smspartner->sendSms($fields);
			
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL,'https://api.smspartner.fr/v1/send');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 10);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS,json_encode($fields));

			$result = curl_exec($curl);
			curl_close($curl);
			

			$response["erreur"] = "non";
			$response["session"] = "1";
			$response["next"] = "$url_to_go";
			$response["url_activation_sms"] = base64_encode("lightbox/lightbox-activation-compte.php?idmembre=$membre[0]");

			
		$response["session"] = $result;	
		}else{
			 $response["erreur"] = "oui";
			 $response["session"] = "1";
		}
		  
	}else{
		$error=" Votre jeton de session semble invalide";
		$response["erreur"] = "oui";
		$response["session"] = "0";
		$response["message"] = "$error";
	}
	
}else{
	$error=" Votre jeton de session semble invalide";
	$response["erreur"] = "oui";
	$response["session"] = "0";
	$response["message"] = "$error";
}

echo json_encode($response);
?>