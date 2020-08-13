<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Document sans titre</title>



<style>

	

	.close-lightbox path {

		fill: rgba(0,0,0,0.5);

}



.close-lightbox{

	background:#FFFFFF

}

	

		

</style>

 <link rel="stylesheet" type="text/css" href="../css/lightbox.css"> 

</head>

<body>

<div class="conteneur-lightbox">

	<div class="lightbox" id="notification-expiration-session">

	  <div class="entete-lightbox"> Information

	    

	  </div>

        <div class="contenu-lightbox" id="conteneur-notification-expiration-session">

			  <p class="accroche-indicateur notification">

			  Votre session est arrivée à expiration <strong>après plus de 15 minutes d'inactivité</strong>. Vous avez été déconnecté. </p>

			 <form id="forget-pass-form" action="" method="post"> 

                

                <div class="conteneur-btn-lightbox">

                <button type="button" onclick="self.location='./'" class="btn btn-connexion" id="btn-fermer-session">Se connecter</button>     

            <!--     <a href="javascript:Cacher_loader('loader');" class="btn-lightbox-reservation" id="btn-payer-plus-tard">Payer plus tard</a>    

             -->  </div>

            </form>

              </div>

	</div>

</div>



</body>

</html>