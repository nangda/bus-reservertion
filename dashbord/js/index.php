<?php 
include("panel/connectionbd.php");
include("panel/mesfonctions.php");
$offre=getblocOffreinformations();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Consultations, Endoscopie, Imagerie médicale, Médécine du travail, Hospitalisations, Expertise médicale, partenariats">
	<meta name="keywords" content="Consultations, Endoscopie, Imagerie médicale, Médécine du travail, Hospitalisations, Expertise médicale, partenariats">
	<meta name="author" content="Marc Merlin BAPPA">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>CMC-Yaoundé</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
	<link href="owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
	<link href="css/loading.css" rel="stylesheet" type="text/css">
	<link href="layerslider/css/layerslider.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="slick/slick.min.js"></script>
	<script src="layerslider/js/greensock.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script src="owl-carousel/owl.carousel.min.js"></script>
	<script src="js/mesfonctions.js"></script>
	<script src="js/slick.min.js"></script>
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="dist/css/magnific-popup.css">
	<link rel="stylesheet" href="dist/css/magnific-annimation.css">
	<link href="css/css_select.css" rel="stylesheet" type="text/css">
	<link href="css/responsive_ under720px.css" rel="stylesheet" type="text/css">
	<!-- Magnific Popup core JS file -->
	<script src="dist/js/jquery.magnific-popup.js"></script>
	<!--<script src="js/select.js"></script>-->
</head>

<body>
	
<!-- bloc entete-->
<?php 
	//include("includes/header.php"); 
?>

	<div id="conteneur-banniere">
		<div id="bloc-banniere">
			<img src="images/bannieres/banniere.jpg"/>
			<div class="conteneur-texte-banniere">
				<h2 class="titre-banniere">Centre Medical la Cathedrale </h2>
				<p class="accroche-banniere">Centre Medical la Cathedrale propose l’ensemble des services indispensables pour maintenir son informatique pleinement opérationnelle.</p>
				<a href="#" class="btn-banniere">En savoir +</a>
			</div>
		</div>
		<div id="bloc-banniere">
			<img src="images/bannieres/banniere.jpg"/>
			<div class="conteneur-texte-banniere">
				<h2 class="titre-banniere">Centre Medical la Cathedrale </h2>
				<p class="accroche-banniere">Centre Medical la Cathedrale propose l’ensemble des services indispensables pour maintenir son informatique pleinement opérationnelle.</p>
				<a href="#" class="btn-banniere">En savoir +</a>
			</div>
		</div>
		<div id="bloc-banniere">
			<img src="images/bannieres/banniere.jpg"/>
			<div class="conteneur-texte-banniere">
				<h2 class="titre-banniere">Centre Medical la Cathedrale </h2>
				<p class="accroche-banniere">Centre Medical la Cathedrale propose l’ensemble des services indispensables pour maintenir son informatique pleinement opérationnelle.</p>
				<a href="#" class="btn-banniere">En savoir +</a>
			</div>
		</div>

	</div>
	
<!-- Rubrique à propos	-->
<!--
	<div id="conteneur-apropos">
		<div id="apropos">
		  <div id="bloc-apropos-left">
			<h1>Bienvenu au Centre médical la cathédrale</h1>
			<p>L&rsquo;histoire commence le 1er octobre 1985, date à laquelle  Le Dr TAGNI-SARTRE crée le Cabinet Médical la Cathédrale (Autorisation N°270/CAB/PR du 04/04/85) en face de la Cathédrale de Yaoundé d'ou le nom "Cabinet Médical la Cathérale".</p>
			<p>Le Cabinet a évolué et a su se faire un nom dans le domaine de la santé notamment par le professionalisme, la rigueur et l'éfficacité de de son personnel soignant.</p>
			<p>Il est situé au Quartier <strong>MFANDENA Omnisport</strong> après le Mansel Hôtel, rue 1129 Route de Ngousso, <strong>face Ancien SNEC Omnisport de Yaoundé.</strong></p>
			  
			  <p>
			  	<a href="#" class="btn-apropos">En savoir +</a>
			  </p>
            </div>
			<div id="bloc-apropos-center"><img src="images/img-apropos.png" alt=""></div>
			<div id="bloc-apropos-right">
				<div class="service mod-block">
					<h3><img src="images/horaire.png" alt="">Un service prolongé</h3>
					<p>Afin de se rapprocher des patients, nous etendons nos heures d'ouvertures jusqu'a 21h00 en semaine et 15h le samedi</p>
				</div>
				
				<div class="assurance mod-block">
					<h3><img src="images/assurance.png" alt="">Assurance Santé</h3>
					<p>Profitez de nos partenariat avec les sociétés d'assurances et obtenez des réductions sur les coûts de santé</p>
				</div>
				
				<div class="stethoscope mod-block">
					<h3><img src="images/irm.png" alt="">Imagerie Médicale</h3>
					<p>Pour une imagerie médicale plus précise et un diagnostic plus clair, Optez pour le premier IRM 1.5T d'Afrique centrale</p>
				</div>
			</div>
		</div>
	</div>
-->

	
<!-- Gestion des services	-->
	<div id="conteneur-service">
		<div id="services">
			<h2 id="titre-service">Nos Prestations</h2>
			<p class="accroche-rubrique">Le CMC est un Centre Médical pluridisciplinaire qui offre des consultations suivantes</p>
			<div id="wrap-service">
				<ul class="contain-onglet">
					<li class="onglet" data-id="1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;" xml:space="preserve">
<g>
	<path d="M404.272,125.623c-10.663-10.657-23.605-15.987-38.834-15.987c-15.222,0-28.164,5.33-38.828,15.987   c-10.656,10.66-15.984,23.601-15.984,38.831c0,11.8,3.377,22.366,10.133,31.689c6.762,9.329,15.561,15.986,26.412,19.985v112.776   c0,20.177-8.949,37.404-26.837,51.678c-17.891,14.273-39.396,21.412-64.524,21.412c-25.122,0-46.632-7.139-64.525-21.412   c-17.89-14.273-26.837-31.501-26.837-51.678v-37.686c31.217-3.805,57.292-15.991,78.231-36.549   c20.937-20.553,31.408-44.537,31.408-71.949V36.547c0-4.948-1.813-9.233-5.428-12.85c-3.613-3.612-7.904-5.424-12.854-5.424   c-1.136,0-2.662,0.193-4.564,0.572c-3.238-5.713-7.707-10.275-13.422-13.706C232.118,1.711,225.927,0,219.266,0   c-10.085,0-18.698,3.573-25.837,10.706c-7.139,7.139-10.707,15.752-10.707,25.841c0,10.085,3.568,18.699,10.707,25.837   s15.752,10.707,25.837,10.707c6.281,0,12.37-1.711,18.272-5.139v114.772c0,20.179-8.945,37.402-26.836,51.68   c-17.893,14.271-39.403,21.406-64.525,21.406c-25.122,0-46.632-7.136-64.524-21.406c-17.89-14.274-26.837-31.498-26.837-51.68   V67.952c5.898,3.427,11.993,5.139,18.273,5.139c10.085,0,18.699-3.568,25.837-10.707c7.137-7.139,10.704-15.752,10.704-25.837   c0-10.088-3.567-18.702-10.704-25.841C91.787,3.573,83.173,0,73.088,0c-6.663,0-12.85,1.711-18.56,5.139   c-5.708,3.427-10.183,7.992-13.417,13.706c-1.906-0.378-3.427-0.572-4.57-0.572c-4.952,0-9.233,1.812-12.85,5.424   c-3.615,3.617-5.424,7.902-5.424,12.85v146.178c0,27.408,10.466,51.386,31.405,71.945c20.938,20.558,47.014,32.744,78.229,36.553   v37.685c0,30.266,12.515,56.103,37.546,77.512c25.031,21.413,55.15,32.117,90.358,32.117c35.221,0,65.336-10.704,90.366-32.117   c25.036-21.409,37.541-47.246,37.541-77.512V216.128c10.854-3.999,19.656-10.657,26.412-19.985   c6.762-9.324,10.144-19.89,10.144-31.689C420.265,149.229,414.937,136.282,404.272,125.623z M378.299,177.301   c-3.621,3.617-7.905,5.424-12.854,5.424s-9.227-1.807-12.847-5.424c-3.614-3.616-5.421-7.898-5.421-12.847   c0-4.948,1.807-9.233,5.421-12.85c3.62-3.612,7.898-5.424,12.847-5.424s9.232,1.812,12.854,5.424   c3.614,3.617,5.421,7.902,5.421,12.85C383.72,169.406,381.913,173.685,378.299,177.301z" fill="#FFFFFF"/>
</g>
</svg> Consultation</li>
					<li class="onglet" data-id="2"><svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="-154 0 512 512" width="15px"><path d="m196.265625 452.265625h-51.199219c-4.710937 0-8.53125-3.8125-8.53125-8.53125v-34.132813c0-4.71875 3.820313-8.535156 8.53125-8.535156h51.199219c4.710937 0 8.535156 3.816406 8.535156 8.535156v34.132813c0 4.71875-3.824219 8.53125-8.535156 8.53125zm-42.664063-17.066406h34.132813v-17.066407h-34.132813zm0 0" fill="#FFFFFF"/><path d="m196.265625 349.867188h-51.199219c-4.710937 0-8.53125-3.816407-8.53125-8.535157v-34.132812c0-4.71875 3.820313-8.53125 8.53125-8.53125h51.199219c4.710937 0 8.535156 3.8125 8.535156 8.53125v34.132812c0 4.71875-3.824219 8.535157-8.535156 8.535157zm-42.664063-17.066407h34.132813v-17.066406h-34.132813zm0 0" fill="#FFFFFF"/><path d="m170.667969 512c-18.824219 0-34.132813-15.308594-34.132813-34.132812v-213.332032h-128c-4.710937 0-8.535156-3.816406-8.535156-8.535156v-34.132812c0-4.71875 3.824219-8.535157 8.535156-8.535157h128v-162.132812h-128c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-34.132813c0-4.722656 3.824219-8.535156 8.535156-8.535156h153.597656c23.527344 0 42.667969 19.140625 42.667969 42.667969v435.199219c0 18.824218-15.308593 34.132812-34.132812 34.132812zm-153.601563-264.535156h128c4.710938 0 8.535156 3.816406 8.535156 8.535156v221.867188c0 9.410156 7.652344 17.066406 17.066407 17.066406 9.410156 0 17.066406-7.65625 17.066406-17.066406v-435.199219c0-14.117188-11.488281-25.601563-25.601563-25.601563h-145.066406v17.066406h128c4.710938 0 8.535156 3.816407 8.535156 8.535157v179.199219c0 4.71875-3.824218 8.53125-8.535156 8.53125h-128zm0 0" fill="#FFFFFF"/><path d="m59.734375 230.398438h-34.132813c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-34.132813c0-4.71875 3.824219-8.535156 8.535156-8.535156h34.132813c4.710937 0 8.53125 3.816406 8.53125 8.535156v34.132813c0 4.71875-3.820313 8.53125-8.53125 8.53125zm-25.601563-17.066407h17.066407v-17.066406h-17.066407zm0 0" fill="#FFFFFF"/><path d="m59.734375 85.332031h-34.132813c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-34.132812c0-4.71875 3.824219-8.535157 8.535156-8.535157h34.132813c4.710937 0 8.53125 3.816407 8.53125 8.535157v34.132812c0 4.71875-3.820313 8.53125-8.53125 8.53125zm-25.601563-17.066406h17.066407v-17.066406h-17.066407zm0 0" fill="#FFFFFF"/><path d="m42.667969 196.265625c-4.710938 0-8.535157-3.8125-8.535157-8.53125v-110.933594c0-4.71875 3.824219-8.535156 8.535157-8.535156 4.710937 0 8.53125 3.816406 8.53125 8.535156v110.933594c0 4.71875-3.820313 8.53125-8.53125 8.53125zm0 0" fill="#FFFFFF"/></svg> Endoscopie</li>
					<li class="onglet" data-id="3"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="15px" height="15px">
<g>
	<g>
		<path d="M255.5,0c-133.511,0-225,105.682-225,225v212c0,24.813,20.187,45,45,45h76.509c-0.988,4.848-1.509,9.864-1.509,15    c0,8.284,6.716,15,15,15h181c8.284,0,15-6.716,15-15c0-5.136-0.521-10.152-1.509-15H436.5c24.813,0,45-20.187,45-45V225    C481.5,101.313,380.653,0,255.5,0z M391.5,225c0,20.463-4.504,40.21-13.155,58.237c-7.101-7.119-16.566-11.877-27.103-12.986    c6.694-14.01,10.258-29.438,10.258-45.251c0-57.897-47.552-105-106-105c-57.897,0-105,47.103-105,105    c0,15.814,3.564,31.241,10.258,45.251c-10.542,1.109-20.01,5.871-27.112,12.995c-12.831-26.687-16.446-56.919-10.107-87.401    C135.648,137.621,188.223,89.934,255.5,90.049C331.202,90.179,391.5,151.128,391.5,225z M150.5,330v-15    c0-8.271,6.729-15.1,15-15.1c6.815,0,164.968,0,181,0c8.271,0,15,6.829,15,15.1v15C336.45,330,175.48,330,150.5,330z M271.5,360    v62h-31v-62H271.5z M180.5,225c0-41.355,33.645-75,75-75c41.906,0,76,33.645,76,75c0,16.319-5.293,32.066-15.006,45H195.506    C185.793,257.066,180.5,241.319,180.5,225z M165.541,452H75.5c-8.271,0-15-6.729-15-15V225c0-94.061,67.561-186.093,180-194.352    V60.7c-75.364,6.557-132.551,62.771-146.332,129.037c-9.647,46.391-0.292,92.398,26.332,130.145V345c0,8.284,6.716,15,15,15h75    v63.509C192.235,427.231,176.365,437.614,165.541,452z M183.07,482c6.19-17.461,22.873-30,42.43-30h61    c19.557,0,36.239,12.539,42.43,30H183.07z M451.5,437c0,8.271-6.729,15-15,15h-90.041c-10.824-14.386-26.694-24.768-44.959-28.491    V360h75c8.284,0,15-6.716,15-15v-25.122c19.64-27.864,30-60.553,30-94.878c0-85.569-65.865-156.581-151-164.263V30.66    c103.644,7.766,181,94.458,181,194.34V437z" fill="#FFFFFF"/>
	</g>
</g>
</svg> Imagerie médicale</li>
					<li class="onglet" data-id="4"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 448.25 448.25" style="enable-background:new 0 0 448.25 448.25;" xml:space="preserve" width="15px" height="15px">
<g>
	<g>
		<path d="M352.992,23.661C341.84,13.165,327.568,8.125,313.184,8.125c-16.192,0-32.544,6.384-44.736,18.592l-5.232,5.232    l-5.232-5.248C245.792,14.509,229.44,8.125,213.248,8.125c-14.384,0-28.656,5.04-39.808,15.536    c-24.528,23.088-24.96,61.712-1.312,85.36l91.088,91.088l91.088-91.088C377.952,85.373,377.52,46.749,352.992,23.661z" fill="#FFFFFF"/>
	</g>
</g>
<g>
	<g>
		<path d="M442.4,246.493c-14-9.488-30.496-6.8-45.104,1.632c-14.608,8.432-98.48,80.144-98.48,80.144l-82.56,0.016    c-3.84,0-8-4.32-8-8.144c0-4.496,3.92-8,8-8h50.512c17.68,0,37.472-11.52,37.472-32c0-21.76-19.792-32-37.472-32    c-30.672,0-36.64,0.128-36.64,0.128c-12.288,0-24.752-0.736-34.352-5.872c-12.8-6.56-27.552-10.272-43.296-10.272    c-26.432,0-50.096,10.544-66.32,27.168L0,344.125l96,96l32-32h162.032c16.128,0,31.696-5.92,43.744-16.624l109.712-123.072    C450.192,262.477,449.808,251.533,442.4,246.493z" fill="#FFFFFF"/>
	</g>
</g>
</svg> Médécine du travail</li>
					<li class="onglet" data-id="5"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
<g>
	<g>
		<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4    c0,8.399-0.5,16.8-1.6,25H789.1z" fill="#FFFFFF"/>
		<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3    C273.4,293.5,223.1,263.7,165.9,263.7z" fill="#FFFFFF"/>
		<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9    c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172    C0,718,13.4,731.5,30,731.5z" fill="#FFFFFF"/>
	</g>
</g>
</svg> Hospitalisation de jour</li>
					<li class="onglet" data-id="6"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
<g>
	<g>
		<path d="M42.531,0v512h426.938V0H42.531z M222.663,90.072h186.77v30h-186.77V90.072z M102.567,90.072h30.036V60.036h30v30.036    h30.036v30h-30.036v30.036h-30v-30.036h-30.036V90.072z M330.552,450.336H181.448v-30h149.104V450.336z M409.433,390.288H102.567    v-30h306.866V390.288z M409.433,330.24H102.567v-30h306.866V330.24z M409.433,270.192H102.567v-30h306.866V270.192z     M409.433,210.144H102.567v-30h306.866V210.144z" fill="#FFFFFF"/>
	</g>
</g>
</svg> Bilan de santé</li>
				</ul>
				
				<div id="contain-tab-services">
				<div class="tab-service" id="service-1">
					<div class="img-tab-service"><img img src="images/service-consultation.jpg"></div>
					<div class="service-preview-content">
						<h4 class="titre-tab-service">Consultation</h4>
						<p>Le Centre Médical de la Cathédrale est un Centre Médical pluridisciplinaire qui offre des consultations suivantes.</p>
						<ol>
						<li> Médécine générale</li>
						<li> Médécine spécialisée en :</li>
						</ol>
						<div class="btn-wraper">
							<a href="#" class="btn btn-tab-service">En savoir +</a>
						</div>
					</div>
				</div>

				<div class="tab-service" id="service-2">
					<div class="img-tab-service"><img src="images/endoscope-cmc.jpg"></div>
					<div class="service-preview-content">
						<h4 class="titre-tab-service">Endoscopie</h4>
						
						<p>Le CMC est l’un des Centres les mieux dotés en matière d’Imagerie Médicale, le domaine Endo-Gastrologie fait partie des spécialités du centre avec les Professionnels reconnus tels que Dr SARTRE Michèle Dr NGATCHA et Dr DANG.</p>
						
						<div class="btn-wraper">
							<a href="#" class="btn btn-tab-service">En savoir +</a>
						</div>
					</div>
				</div>

				<div class="tab-service" id="service-3">
					<div class="img-tab-service"><img img src="images/imagerie-medicale-cmc.jpg"></div>
					<div class="service-preview-content">
						<h4 class="titre-tab-service">Imagerie médicale</h4>
						<ul>
						<li>IRM ou Imagerie par Résonance Magnétique  1.5T ;</li>
						<li>Radiographie numérisée (Générale, Spécialisée, Mammographie, Dentaire) ;</li>
						<li>Scanner 128 barrettes ;</li>
						<li>Echographie (Générale, Doppler, Spécialisée, Gynéco-obstétrique) ;</li>
						</ul>
						<div class="btn-wraper">
							<a href="#" class="btn btn-tab-service">En savoir +</a>
						</div>
						
					</div>
				</div>
				<div class="tab-service" id="service-4">
					<div class="img-tab-service"><img img src="images/medecine-travail.jpg"></div>
					<div class="service-preview-content">
						<h4 class="titre-tab-service">Médécine du Travail </h4>
						<p>Agrément du Docteur TAGNI SARTRE Michèle, conformément aux dispositions légales et réglementaires en vigueur.</p>
						<p>Agrément N°1MTPS/mt du 02/0186 du Ministère du Travail et de la Prévoyance Sociale.</p>
						<div class="btn-wraper">
							<a href="#" class="btn btn-tab-service">En savoir +</a>
						</div>
					</div>
				</div>
				<div class="tab-service" id="service-5">
					<div class="img-tab-service"><img img src="images/Hospitalisation.jpg"></div>
					<div class="service-preview-content">
						<h4 class="titre-tab-service">Hospitalisation de jour </h4>
						<p>Nos chambres sont spacieuses et peuvent accueillir plus d'une dizaine de patients. Nous assurons des hospitalisations de jour au sein du CMC et en cas d'hospitalisation de nuit ou de longue durée.</p>
						<div class="btn-wraper">
							<a href="#" class="btn btn-tab-service">En savoir +</a>
						</div>
					</div>
				</div>
				<div class="tab-service" id="service-6">
					<div class="img-tab-service"><img img src="images/bilan-sante-cmc.jpg"></div>
					<div class="service-preview-content">
						<h4 class="titre-tab-service">Bilan de santé</h4>
						
						<p>Le bilan de santé est un examen médical préventif et périodique dont le contenu est adapté à chaque personne en fonction de son âgé, de son sexe, des facteurs de risques liés à son environnement social et professionnel.</p>
						<div class="btn-wraper">
							<a href="#" class="btn btn-tab-service">En savoir +</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
				
	</div>
	
	<div id="conteneur-pourquoi">
		<div id="pourquoi">
			<div id="img-pourquoi"><img src="images/img-apropos.png" alt=""></div>
			<div id="texte-pourquoi">
				<h2 id="titre-pourquoi">Pourquoi nous choisir?</h2>
				<div class="accroche-rubrique">Nos qualités font de nous le partenaire idéal pour vous accompagner dans le domaine médical.</div>
				<div id="conteneur-bloc-pourquoi">
					<div class="bloc-pourquoi">
						<div class="img-pourquoi">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 367.509 367.509" style="enable-background:new 0 0 367.509 367.509;" xml:space="preserve" width="36px" height="36px">
<g>
	<path d="M329.451,166.652h38.058c-2.292-24.808-9.51-48.194-20.671-69.199l-20.59,11.9l-6.852-11.851   l20.476-11.827c-14.656-23.231-34.286-42.951-57.469-57.68l-12.063,20.72l-11.827-6.885l12.144-20.85   C249.507,9.64,225.909,2.341,200.873,0.024V38.66H166.66V0.016c-25.036,2.317-48.633,9.616-69.784,20.947l12.144,20.85   l-11.827,6.885l-12.063-20.72c-23.183,14.729-42.813,34.449-57.469,57.68l20.476,11.827l-6.852,11.851l-20.59-11.9   c-11.161,21.004-18.379,44.39-20.671,69.207h38.058v34.213H0c2.292,24.808,9.51,48.194,20.671,69.207l20.598-11.9l6.852,11.851   L27.645,281.85c14.656,23.231,34.286,42.951,57.469,57.68l12.063-20.72l11.827,6.885l-12.144,20.85   c21.151,11.331,44.748,18.639,69.784,20.947v-38.635h34.213v38.635c25.036-2.317,48.633-9.616,69.784-20.947l-12.144-20.85   l11.827-6.885l12.063,20.72c23.183-14.729,42.813-34.441,57.469-57.68l-20.476-11.827l6.852-11.851l20.59,11.9   c11.161-21.004,18.379-44.39,20.671-69.207h-38.058v-34.213H329.451z M179.739,234.152c0,7.681-6.251,13.932-13.932,13.932H82.936   c-4.056,0-7.933-1.813-10.364-4.845c-2.26-2.821-3.105-6.462-2.325-10.014c1.219-5.487,3.333-10.722,6.275-15.558   c4.463-8.535,14.68-17.379,31.084-26.759c13.111-7.527,21.646-12.933,25.369-16.07c4.999-4.276,7.446-8.698,7.446-13.485   c0-3.739-1.236-6.747-3.78-9.177c-2.601-2.495-6.422-3.707-11.705-3.707c-7.178,0-11.786,1.87-14.111,5.706   c-0.764,1.276-1.39,3.146-1.845,5.552c-1.211,6.43-7.527,11.274-14.68,11.274h-9.73c-4.024,0-7.755-1.707-10.234-4.69   c-2.309-2.78-3.251-6.43-2.585-10.023c1.219-6.552,3.398-12.258,6.495-16.981c8.657-13.185,23.898-19.874,45.309-19.874   c16.639,0,30.181,3.829,40.22,11.38c10.461,7.836,15.769,18.395,15.769,31.352c0,10.006-3.739,18.964-11.12,26.654   c-4.682,4.918-11.965,10.144-22.24,15.973l-11.681,6.633c-4.934,2.812-8.803,5.088-11.575,6.812h42.895   c7.682,0,13.932,6.251,13.932,13.932v1.983H179.739z M284.516,222.528c-2.057,0-3.731,2.089-3.731,4.641v6.982   c0,7.681-6.251,13.932-13.932,13.932h-9.933c-7.682,0-13.932-6.251-13.932-13.932v-6.982c0-2.56-2.081-4.641-4.641-4.641h-40.074   c-7.681,0-13.932-6.251-13.932-13.932v-1.829c0-6.17,2.804-14.55,6.527-19.492l43.268-57.282c3.983-5.267,11.973-9.25,18.59-9.25   h14.119c7.682,0,13.932,6.251,13.932,13.932v55.648c0,2.561,1.674,4.641,3.731,4.641c7.186,0,13.022,6.178,13.022,13.778   C297.538,216.342,291.702,222.528,284.516,222.528z" fill="#FFFFFF"/>
	<path d="M219.74,194.964c0.065,0,0.13,0,0.203,0h18.411c2.56,0,4.641-2.089,4.641-4.641v-27.531   l-23.142,32.01C219.813,194.858,219.78,194.915,219.74,194.964z" fill="#FFFFFF"/>
</g>
</svg></div>
						<div class="wrap-texte-bloc">
							<h3 class="titre-bloc-pourquoi">Un Service Prolongé</h3>
							<p>Afin de se rapprocher des patients, nous etendons nos heures d'ouvertures jusqu'a 21h00 en semaine et 15h le samedi. </p>
						</div>
					</div>
					
					<div class="bloc-pourquoi">
						<div class="img-pourquoi">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="36px" height="36px">
<g>
	<g>
		<path d="M438.386,70.124c-66.931,0-131.516-24.656-181.418-69.259L256,0l-0.968,0.865    C205.129,45.468,140.544,70.124,73.614,70.124h-40.54V178.19c0,140.337,81.369,267.943,208.607,327.146L256,512l14.319-6.663    c127.238-59.203,208.607-186.81,208.607-327.146V70.124H438.386z M359.455,302.147h-55.411v55.411h-96.088v-55.411h-55.411V206.06    h55.411v-55.411h96.088v55.411h55.411V302.147z" fill="#FFFFFF"/>
	</g>
</g>
<g>
	<g>
		<polygon points="274.044,236.06 274.044,180.648 237.956,180.648 237.956,236.06 182.545,236.06 182.545,272.147 237.956,272.147     237.956,327.559 274.044,327.559 274.044,272.147 329.455,272.147 329.455,236.06   " fill="#FFFFFF"/>
	</g>
</g>
</svg></div>
						<div class="wrap-texte-bloc">
							<h3 class="titre-bloc-pourquoi">Assurance Santé</h3>
							<p>Profitez de nos partenariat avec les sociétés d'assurances et obtenez des réductions sur les coûts de santé. </p>
						</div>
					</div>
					
					<div class="bloc-pourquoi">
						<div class="img-pourquoi">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="36px" height="36px">
<g>
	<g>
		<path d="M255.5,0c-133.511,0-225,105.682-225,225v212c0,24.813,20.187,45,45,45h76.509c-0.988,4.848-1.509,9.864-1.509,15    c0,8.284,6.716,15,15,15h181c8.284,0,15-6.716,15-15c0-5.136-0.521-10.152-1.509-15H436.5c24.813,0,45-20.187,45-45V225    C481.5,101.313,380.653,0,255.5,0z M391.5,225c0,20.463-4.504,40.21-13.155,58.237c-7.101-7.119-16.566-11.877-27.103-12.986    c6.694-14.01,10.258-29.438,10.258-45.251c0-57.897-47.552-105-106-105c-57.897,0-105,47.103-105,105    c0,15.814,3.564,31.241,10.258,45.251c-10.542,1.109-20.01,5.871-27.112,12.995c-12.831-26.687-16.446-56.919-10.107-87.401    C135.648,137.621,188.223,89.934,255.5,90.049C331.202,90.179,391.5,151.128,391.5,225z M150.5,330v-15    c0-8.271,6.729-15.1,15-15.1c6.815,0,164.968,0,181,0c8.271,0,15,6.829,15,15.1v15C336.45,330,175.48,330,150.5,330z M271.5,360    v62h-31v-62H271.5z M180.5,225c0-41.355,33.645-75,75-75c41.906,0,76,33.645,76,75c0,16.319-5.293,32.066-15.006,45H195.506    C185.793,257.066,180.5,241.319,180.5,225z M165.541,452H75.5c-8.271,0-15-6.729-15-15V225c0-94.061,67.561-186.093,180-194.352    V60.7c-75.364,6.557-132.551,62.771-146.332,129.037c-9.647,46.391-0.292,92.398,26.332,130.145V345c0,8.284,6.716,15,15,15h75    v63.509C192.235,427.231,176.365,437.614,165.541,452z M183.07,482c6.19-17.461,22.873-30,42.43-30h61    c19.557,0,36.239,12.539,42.43,30H183.07z M451.5,437c0,8.271-6.729,15-15,15h-90.041c-10.824-14.386-26.694-24.768-44.959-28.491    V360h75c8.284,0,15-6.716,15-15v-25.122c19.64-27.864,30-60.553,30-94.878c0-85.569-65.865-156.581-151-164.263V30.66    c103.644,7.766,181,94.458,181,194.34V437z" fill="#FFFFFF"/>
	</g>
</g>
</svg></div>
						<div class="wrap-texte-bloc">
							<h3 class="titre-bloc-pourquoi">Imagerie Médicale</h3>
							<p>Pour une imagerie médicale plus précise et un diagnostic plus clair, Optez pour le premier IRM 1.5T d'Afrique centrale. </p>
						</div>
					</div>
					
					<div class="bloc-pourquoi">
						<div class="img-pourquoi">
							<svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -60 512 512" width="36px">
								<path d="m375.464844 256.003906h-25.597656c-4.710938 0-8.535157-3.8125-8.535157-8.53125s3.824219-8.535156 8.535157-8.535156h25.597656c4.710937 0 8.535156 3.816406 8.535156 8.535156s-3.824219 8.53125-8.535156 8.53125zm0 0" fill="#FFFFFF"/><path d="m409.601562 392.539062c-32.941406 0-59.734374-26.804687-59.734374-59.734374 0-32.929688 26.792968-59.734376 59.734374-59.734376 32.9375 0 59.730469 26.804688 59.730469 59.734376 0 32.929687-26.792969 59.734374-59.730469 59.734374zm0-102.402343c-23.527343 0-42.667968 19.140625-42.667968 42.667969 0 23.527343 19.140625 42.667968 42.667968 42.667968 23.523438 0 42.664063-19.140625 42.664063-42.667968 0-23.527344-19.140625-42.667969-42.664063-42.667969zm0 0" fill="#FFFFFF"/><path d="m418.3125 358.40625h-17.425781c-9.308594 0-16.886719-7.570312-16.886719-16.878906v-17.433594c0-9.3125 7.578125-16.890625 16.886719-16.890625h17.425781c9.308594 0 16.886719 7.578125 16.886719 16.890625v17.433594c0 9.308594-7.578125 16.878906-16.886719 16.878906zm-.179688-34.3125-17.246093.179688.179687 17.253906 17.066406-.1875zm.179688 17.246094" fill="#FFFFFF"/><path d="m102.398438 392.539062c-32.9375 0-59.730469-26.804687-59.730469-59.734374 0-32.929688 26.792969-59.734376 59.730469-59.734376 32.941406 0 59.734374 26.804688 59.734374 59.734376 0 32.929687-26.792968 59.734374-59.734374 59.734374zm0-102.402343c-23.523438 0-42.664063 19.140625-42.664063 42.667969 0 23.527343 19.140625 42.667968 42.664063 42.667968 23.527343 0 42.667968-19.140625 42.667968-42.667968 0-23.527344-19.140625-42.667969-42.667968-42.667969zm0 0" fill="#FFFFFF"/><path d="m111.113281 358.40625h-17.425781c-9.308594 0-16.886719-7.570312-16.886719-16.878906v-17.433594c0-9.3125 7.578125-16.890625 16.886719-16.890625h17.425781c9.308594 0 16.886719 7.578125 16.886719 16.890625v17.433594c0 9.308594-7.578125 16.878906-16.886719 16.878906zm-.179687-34.3125-17.246094.179688.179688 17.253906 17.066406-.1875zm.179687 17.246094" fill="#FFFFFF"/><path d="m315.734375 290.136719h-307.199219c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-213.34375c0-18.816407 15.308594-34.125 34.125-34.125h256.015625c18.816406 0 34.125 15.308593 34.125 34.125v213.34375c0 4.71875-3.820313 8.53125-8.53125 8.53125zm-298.667969-17.066407h290.132813v-204.808593c0-9.402344-7.652344-17.058594-17.058594-17.058594h-256.015625c-9.402344 0-17.058594 7.65625-17.058594 17.058594zm0 0" fill="#FFFFFF"/><path d="m443.734375 196.273438h-93.867187c-4.710938 0-8.535157-3.816407-8.535157-8.535157v-42.667969c0-4.71875 3.824219-8.53125 8.535157-8.53125h93.261718c4.222656 0 7.804688 3.078126 8.4375 7.261719.375 2.484375.699219 4.855469.699219 7.3125v36.625c0 4.71875-3.820313 8.535157-8.53125 8.535157zm-85.335937-17.070313h76.800781v-25.597656h-76.800781zm0 0" fill="#FFFFFF"/><path d="m503.464844 324.273438h-45.644532c-3.617187 0-6.832031-2.28125-8.046874-5.683594-6.015626-17.015625-22.167969-28.453125-40.171876-28.453125-18.007812 0-34.160156 11.4375-40.183593 28.453125-1.203125 3.410156-4.429688 5.683594-8.039063 5.683594h-45.644531c-4.710937 0-8.535156-3.816407-8.535156-8.535157v-204.800781c0-4.71875 3.824219-8.53125 8.535156-8.53125h87.824219c26.855468 0 48.707031 21.851562 48.707031 48.707031v53.691407h8.535156c28.226563 0 51.199219 22.964843 51.199219 51.199218v59.734375c0 4.71875-3.824219 8.535157-8.535156 8.535157zm-39.941406-17.070313h31.410156v-51.199219c0-18.824218-15.308594-34.132812-34.132813-34.132812h-17.066406c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-62.226563c0-17.449219-14.199219-31.640625-31.640625-31.640625h-79.292969v187.730469h31.414063c9.804687-20.640625 30.761718-34.132813 53.921874-34.132813 23.15625 0 44.117188 13.492188 53.921876 34.132813zm0 0" fill="#FFFFFF"/><path d="m54.179688 324.273438h-45.644532c-4.710937 0-8.535156-3.816407-8.535156-8.535157v-34.132812c0-4.71875 3.824219-8.535157 8.535156-8.535157h93.863282c4.710937 0 8.535156 3.816407 8.535156 8.535157s-3.824219 8.53125-8.535156 8.53125c-18.003907 0-34.15625 11.4375-40.183594 28.453125-1.203125 3.410156-4.425782 5.683594-8.035156 5.683594zm-37.113282-17.070313h31.410156c3.066407-6.449219 7.21875-12.210937 12.1875-17.066406h-43.597656zm0 0" fill="#FFFFFF"/><path d="m315.734375 324.273438h-165.113281c-3.617188 0-6.835938-2.28125-8.046875-5.683594-6.015625-17.015625-22.167969-28.453125-40.175781-28.453125-4.707032 0-8.53125-3.8125-8.53125-8.53125s3.824218-8.535157 8.53125-8.535157h213.335937c4.710937 0 8.53125 3.816407 8.53125 8.535157v34.132812c0 4.71875-3.820313 8.535157-8.53125 8.535157zm-159.414063-17.070313h150.878907v-17.066406h-163.0625c4.964843 4.867187 9.121093 10.617187 12.183593 17.066406zm0 0" fill="#FFFFFF"/><path d="m503.464844 290.136719h-34.132813c-4.710937 0-8.53125-3.8125-8.53125-8.53125v-34.132813c0-4.71875 3.820313-8.535156 8.53125-8.535156h33.273438c4.0625 0 7.558593 2.859375 8.363281 6.84375.679688 3.371094 1.03125 6.808594 1.03125 10.222656v25.601563c0 4.71875-3.824219 8.53125-8.535156 8.53125zm-25.597656-17.066407h17.066406v-17.066406h-17.066406zm0 0" fill="#FFFFFF"/><path d="m162.132812 256.003906c-51.753906 0-93.867187-42.109375-93.867187-93.867187 0-51.753907 42.113281-93.863281 93.867187-93.863281 51.753907 0 93.867188 42.109374 93.867188 93.863281 0 51.757812-42.113281 93.867187-93.867188 93.867187zm0-170.664062c-42.351562 0-76.800781 34.449218-76.800781 76.796875 0 42.351562 34.449219 76.800781 76.800781 76.800781 42.351563 0 76.800782-34.449219 76.800782-76.800781 0-42.347657-34.449219-76.796875-76.800782-76.796875zm0 0" fill="#FFFFFF"/><path d="m179.199219 221.871094h-34.132813c-4.710937 0-8.53125-3.8125-8.53125-8.53125v-25.601563h-25.601562c-4.710938 0-8.535156-3.816406-8.535156-8.535156v-34.132813c0-4.71875 3.824218-8.53125 8.535156-8.53125h25.601562v-25.601562c0-4.71875 3.820313-8.53125 8.53125-8.53125h34.132813c4.710937 0 8.535156 3.8125 8.535156 8.53125v25.601562h25.597656c4.710938 0 8.535157 3.8125 8.535157 8.53125v34.132813c0 4.71875-3.824219 8.535156-8.535157 8.535156h-25.597656v25.601563c0 4.71875-3.824219 8.53125-8.535156 8.53125zm-25.597657-17.066406h17.066407v-25.601563c0-4.71875 3.820312-8.53125 8.53125-8.53125h25.601562v-17.066406h-25.601562c-4.710938 0-8.53125-3.816407-8.53125-8.535157v-25.597656h-17.066407v25.597656c0 4.71875-3.824218 8.535157-8.535156 8.535157h-25.601562v17.066406h25.601562c4.710938 0 8.535156 3.8125 8.535156 8.53125zm0 0" fill="#FFFFFF"/><path d="m392.535156 119.472656h-34.136718c-4.707032 0-8.53125-3.816406-8.53125-8.535156v-25.597656c0-14.117188 11.484374-25.601563 25.597656-25.601563 14.117187 0 25.601562 11.484375 25.601562 25.601563v25.597656c0 4.71875-3.824218 8.535156-8.53125 8.535156zm-25.601562-17.066406h17.066406v-17.066406c0-4.710938-3.824219-8.535156-8.535156-8.535156-4.707032 0-8.53125 3.824218-8.53125 8.535156zm0 0" fill="#FFFFFF"/><path d="m375.464844 42.671875c-4.707032 0-8.53125-3.816406-8.53125-8.535156v-25.597657c0-4.71875 3.824218-8.53515575 8.53125-8.53515575 4.710937 0 8.535156 3.81640575 8.535156 8.53515575v25.597657c0 4.71875-3.824219 8.535156-8.535156 8.535156zm0 0" fill="#FFFFFF"/><path d="m409.589844 42.671875c-1.628906 0-3.265625-.46875-4.726563-1.433594-3.917969-2.621093-4.984375-7.910156-2.363281-11.835937l17.066406-25.601563c2.621094-3.914062 7.917969-4.964843 11.835938-2.363281 3.917968 2.621094 4.984375 7.910156 2.363281 11.835938l-17.066406 25.601562c-1.644531 2.464844-4.351563 3.796875-7.109375 3.796875zm0 0" fill="#FFFFFF"/><path d="m341.34375 42.671875c-2.757812 0-5.464844-1.332031-7.109375-3.796875l-17.066406-25.601562c-2.613281-3.925782-1.554688-9.214844 2.363281-11.835938 3.917969-2.617188 9.222656-1.5625 11.835938 2.363281l17.066406 25.601563c2.609375 3.925781 1.550781 9.214844-2.363282 11.835937-1.460937.972657-3.105468 1.433594-4.726562 1.433594zm0 0" fill="#FFFFFF"/>
							</svg></div>
						<div class="wrap-texte-bloc">
							<h3 class="titre-bloc-pourquoi">Service d'urgence</h3>
							<p>Lorem ipsum dolor sit amet,elit. Cum sit ullam. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
<!--Gestion de l'équipe	-->

<div class="conteneur_confiance">
  <div class="confiance">
    <h2 class="titre-equipe">Nos médecins</h2>
    <div class="content-list-retaurateur">
      <div class="bloc-restaurateur-wrapper">
        <div class="bloc-restaurateur">
          <div class="image-restaurateur"><img src="images/medecin.jpg" alt=""></div> 
          <div class="content-information-restaurateur visible">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">Dr SARTRE Michèle</div>
               <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
          <div class="content-information-restaurateur survol" style="display: block;">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">Dr SARTRE Michèle</div>
              <div class="content-description-restaurateur">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, culpa, natus? Nobis ducimus numquam itaque, fuga qui sunt quam, praesentium rem ullam officia fugit enim harum quo, ipsum suscipit quidem!</div>
              <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </div>
      
      <div class="bloc-restaurateur-wrapper">
        <div class="bloc-restaurateur">
          <div class="image-restaurateur"><img src="images/medecin.jpg" alt=""></div> 
          <div class="content-information-restaurateur visible">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">Dr NGATCHA</div>
               <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
          <div class="content-information-restaurateur survol" style="display: block;">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">Dr NGATCHA</div>
              <div class="content-description-restaurateur">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, culpa, natus? Nobis ducimus numquam itaque, fuga qui sunt quam, praesentium rem ullam officia fugit enim harum quo, ipsum suscipit quidem!</div>
              <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </div>
      
      <div class="bloc-restaurateur-wrapper">
        <div class="bloc-restaurateur">
          <div class="image-restaurateur"><img src="images/medecin.jpg" alt=""></div> 
          <div class="content-information-restaurateur visible">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">Dr DANG</div>
               <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
          <div class="content-information-restaurateur survol" style="display: block;">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">Dr DANG</div>
              <div class="content-description-restaurateur">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, culpa, natus? Nobis ducimus numquam itaque, fuga qui sunt quam, praesentium rem ullam officia fugit enim harum quo, ipsum suscipit quidem!</div>
              <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </div>
      
      <div class="bloc-restaurateur-wrapper">
        <div class="bloc-restaurateur">
          <div class="image-restaurateur"><img src="images/medecin.jpg" alt=""></div> 
          <div class="content-information-restaurateur visible">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">shaun murphy</div>
               <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
          <div class="content-information-restaurateur survol" style="display: block;">
             <div class="titre-restaurateur">Chirugien</div>  
              <div class="nom-restaurateur">shaun murphy</div>
              <div class="content-description-restaurateur">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, culpa, natus? Nobis ducimus numquam itaque, fuga qui sunt quam, praesentium rem ullam officia fugit enim harum quo, ipsum suscipit quidem!</div>
              <div class="content-reseau-socio">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </div>
      
    </div>
  </div>
</div>
	
	
	<div id="conteneur-chiffre">
		<div id="chiffre">
			<div class="bloc-chiffre">
				<div class="img-chiffre"><svg xmlns="http://www.w3.org/2000/svg" height="44px" viewBox="0 -60 512 512" width="44px">
								<path d="m375.464844 256.003906h-25.597656c-4.710938 0-8.535157-3.8125-8.535157-8.53125s3.824219-8.535156 8.535157-8.535156h25.597656c4.710937 0 8.535156 3.816406 8.535156 8.535156s-3.824219 8.53125-8.535156 8.53125zm0 0" fill="#FFFFFF"/><path d="m409.601562 392.539062c-32.941406 0-59.734374-26.804687-59.734374-59.734374 0-32.929688 26.792968-59.734376 59.734374-59.734376 32.9375 0 59.730469 26.804688 59.730469 59.734376 0 32.929687-26.792969 59.734374-59.730469 59.734374zm0-102.402343c-23.527343 0-42.667968 19.140625-42.667968 42.667969 0 23.527343 19.140625 42.667968 42.667968 42.667968 23.523438 0 42.664063-19.140625 42.664063-42.667968 0-23.527344-19.140625-42.667969-42.664063-42.667969zm0 0" fill="#FFFFFF"/><path d="m418.3125 358.40625h-17.425781c-9.308594 0-16.886719-7.570312-16.886719-16.878906v-17.433594c0-9.3125 7.578125-16.890625 16.886719-16.890625h17.425781c9.308594 0 16.886719 7.578125 16.886719 16.890625v17.433594c0 9.308594-7.578125 16.878906-16.886719 16.878906zm-.179688-34.3125-17.246093.179688.179687 17.253906 17.066406-.1875zm.179688 17.246094" fill="#FFFFFF"/><path d="m102.398438 392.539062c-32.9375 0-59.730469-26.804687-59.730469-59.734374 0-32.929688 26.792969-59.734376 59.730469-59.734376 32.941406 0 59.734374 26.804688 59.734374 59.734376 0 32.929687-26.792968 59.734374-59.734374 59.734374zm0-102.402343c-23.523438 0-42.664063 19.140625-42.664063 42.667969 0 23.527343 19.140625 42.667968 42.664063 42.667968 23.527343 0 42.667968-19.140625 42.667968-42.667968 0-23.527344-19.140625-42.667969-42.667968-42.667969zm0 0" fill="#FFFFFF"/><path d="m111.113281 358.40625h-17.425781c-9.308594 0-16.886719-7.570312-16.886719-16.878906v-17.433594c0-9.3125 7.578125-16.890625 16.886719-16.890625h17.425781c9.308594 0 16.886719 7.578125 16.886719 16.890625v17.433594c0 9.308594-7.578125 16.878906-16.886719 16.878906zm-.179687-34.3125-17.246094.179688.179688 17.253906 17.066406-.1875zm.179687 17.246094" fill="#FFFFFF"/><path d="m315.734375 290.136719h-307.199219c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-213.34375c0-18.816407 15.308594-34.125 34.125-34.125h256.015625c18.816406 0 34.125 15.308593 34.125 34.125v213.34375c0 4.71875-3.820313 8.53125-8.53125 8.53125zm-298.667969-17.066407h290.132813v-204.808593c0-9.402344-7.652344-17.058594-17.058594-17.058594h-256.015625c-9.402344 0-17.058594 7.65625-17.058594 17.058594zm0 0" fill="#FFFFFF"/><path d="m443.734375 196.273438h-93.867187c-4.710938 0-8.535157-3.816407-8.535157-8.535157v-42.667969c0-4.71875 3.824219-8.53125 8.535157-8.53125h93.261718c4.222656 0 7.804688 3.078126 8.4375 7.261719.375 2.484375.699219 4.855469.699219 7.3125v36.625c0 4.71875-3.820313 8.535157-8.53125 8.535157zm-85.335937-17.070313h76.800781v-25.597656h-76.800781zm0 0" fill="#FFFFFF"/><path d="m503.464844 324.273438h-45.644532c-3.617187 0-6.832031-2.28125-8.046874-5.683594-6.015626-17.015625-22.167969-28.453125-40.171876-28.453125-18.007812 0-34.160156 11.4375-40.183593 28.453125-1.203125 3.410156-4.429688 5.683594-8.039063 5.683594h-45.644531c-4.710937 0-8.535156-3.816407-8.535156-8.535157v-204.800781c0-4.71875 3.824219-8.53125 8.535156-8.53125h87.824219c26.855468 0 48.707031 21.851562 48.707031 48.707031v53.691407h8.535156c28.226563 0 51.199219 22.964843 51.199219 51.199218v59.734375c0 4.71875-3.824219 8.535157-8.535156 8.535157zm-39.941406-17.070313h31.410156v-51.199219c0-18.824218-15.308594-34.132812-34.132813-34.132812h-17.066406c-4.710937 0-8.535156-3.8125-8.535156-8.53125v-62.226563c0-17.449219-14.199219-31.640625-31.640625-31.640625h-79.292969v187.730469h31.414063c9.804687-20.640625 30.761718-34.132813 53.921874-34.132813 23.15625 0 44.117188 13.492188 53.921876 34.132813zm0 0" fill="#FFFFFF"/><path d="m54.179688 324.273438h-45.644532c-4.710937 0-8.535156-3.816407-8.535156-8.535157v-34.132812c0-4.71875 3.824219-8.535157 8.535156-8.535157h93.863282c4.710937 0 8.535156 3.816407 8.535156 8.535157s-3.824219 8.53125-8.535156 8.53125c-18.003907 0-34.15625 11.4375-40.183594 28.453125-1.203125 3.410156-4.425782 5.683594-8.035156 5.683594zm-37.113282-17.070313h31.410156c3.066407-6.449219 7.21875-12.210937 12.1875-17.066406h-43.597656zm0 0" fill="#FFFFFF"/><path d="m315.734375 324.273438h-165.113281c-3.617188 0-6.835938-2.28125-8.046875-5.683594-6.015625-17.015625-22.167969-28.453125-40.175781-28.453125-4.707032 0-8.53125-3.8125-8.53125-8.53125s3.824218-8.535157 8.53125-8.535157h213.335937c4.710937 0 8.53125 3.816407 8.53125 8.535157v34.132812c0 4.71875-3.820313 8.535157-8.53125 8.535157zm-159.414063-17.070313h150.878907v-17.066406h-163.0625c4.964843 4.867187 9.121093 10.617187 12.183593 17.066406zm0 0" fill="#FFFFFF"/><path d="m503.464844 290.136719h-34.132813c-4.710937 0-8.53125-3.8125-8.53125-8.53125v-34.132813c0-4.71875 3.820313-8.535156 8.53125-8.535156h33.273438c4.0625 0 7.558593 2.859375 8.363281 6.84375.679688 3.371094 1.03125 6.808594 1.03125 10.222656v25.601563c0 4.71875-3.824219 8.53125-8.535156 8.53125zm-25.597656-17.066407h17.066406v-17.066406h-17.066406zm0 0" fill="#FFFFFF"/><path d="m162.132812 256.003906c-51.753906 0-93.867187-42.109375-93.867187-93.867187 0-51.753907 42.113281-93.863281 93.867187-93.863281 51.753907 0 93.867188 42.109374 93.867188 93.863281 0 51.757812-42.113281 93.867187-93.867188 93.867187zm0-170.664062c-42.351562 0-76.800781 34.449218-76.800781 76.796875 0 42.351562 34.449219 76.800781 76.800781 76.800781 42.351563 0 76.800782-34.449219 76.800782-76.800781 0-42.347657-34.449219-76.796875-76.800782-76.796875zm0 0" fill="#FFFFFF"/><path d="m179.199219 221.871094h-34.132813c-4.710937 0-8.53125-3.8125-8.53125-8.53125v-25.601563h-25.601562c-4.710938 0-8.535156-3.816406-8.535156-8.535156v-34.132813c0-4.71875 3.824218-8.53125 8.535156-8.53125h25.601562v-25.601562c0-4.71875 3.820313-8.53125 8.53125-8.53125h34.132813c4.710937 0 8.535156 3.8125 8.535156 8.53125v25.601562h25.597656c4.710938 0 8.535157 3.8125 8.535157 8.53125v34.132813c0 4.71875-3.824219 8.535156-8.535157 8.535156h-25.597656v25.601563c0 4.71875-3.824219 8.53125-8.535156 8.53125zm-25.597657-17.066406h17.066407v-25.601563c0-4.71875 3.820312-8.53125 8.53125-8.53125h25.601562v-17.066406h-25.601562c-4.710938 0-8.53125-3.816407-8.53125-8.535157v-25.597656h-17.066407v25.597656c0 4.71875-3.824218 8.535157-8.535156 8.535157h-25.601562v17.066406h25.601562c4.710938 0 8.535156 3.8125 8.535156 8.53125zm0 0" fill="#FFFFFF"/><path d="m392.535156 119.472656h-34.136718c-4.707032 0-8.53125-3.816406-8.53125-8.535156v-25.597656c0-14.117188 11.484374-25.601563 25.597656-25.601563 14.117187 0 25.601562 11.484375 25.601562 25.601563v25.597656c0 4.71875-3.824218 8.535156-8.53125 8.535156zm-25.601562-17.066406h17.066406v-17.066406c0-4.710938-3.824219-8.535156-8.535156-8.535156-4.707032 0-8.53125 3.824218-8.53125 8.535156zm0 0" fill="#FFFFFF"/><path d="m375.464844 42.671875c-4.707032 0-8.53125-3.816406-8.53125-8.535156v-25.597657c0-4.71875 3.824218-8.53515575 8.53125-8.53515575 4.710937 0 8.535156 3.81640575 8.535156 8.53515575v25.597657c0 4.71875-3.824219 8.535156-8.535156 8.535156zm0 0" fill="#FFFFFF"/><path d="m409.589844 42.671875c-1.628906 0-3.265625-.46875-4.726563-1.433594-3.917969-2.621093-4.984375-7.910156-2.363281-11.835937l17.066406-25.601563c2.621094-3.914062 7.917969-4.964843 11.835938-2.363281 3.917968 2.621094 4.984375 7.910156 2.363281 11.835938l-17.066406 25.601562c-1.644531 2.464844-4.351563 3.796875-7.109375 3.796875zm0 0" fill="#FFFFFF"/><path d="m341.34375 42.671875c-2.757812 0-5.464844-1.332031-7.109375-3.796875l-17.066406-25.601562c-2.613281-3.925782-1.554688-9.214844 2.363281-11.835938 3.917969-2.617188 9.222656-1.5625 11.835938 2.363281l17.066406 25.601563c2.609375 3.925781 1.550781 9.214844-2.363282 11.835937-1.460937.972657-3.105468 1.433594-4.726562 1.433594zm0 0" fill="#FFFFFF"/>
							</svg></div>
				<div class="content-bloc-chiffre">
					<h3 class="valeur-chiffre">03</h3>
					<h4 class="libele-chiffre">Ambulances</h4>
				</div>
			</div>
			
			<div class="bloc-chiffre">
				<div class="img-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 33 33" style="enable-background:new 0 0 33 33;" xml:space="preserve" width="44px" height="44px">
<g>
	<path d="M16.5,33C7.402,33,0,25.598,0,16.5S7.402,0,16.5,0S33,7.402,33,16.5S25.598,33,16.5,33z M16.5,1C7.953,1,1,7.953,1,16.5   S7.953,32,16.5,32S32,25.047,32,16.5S25.047,1,16.5,1z" fill="#FFFFFF"/>
	<path d="M16.499,24.089c-2.378,0-4.755-0.652-6.876-1.958l-0.396-0.244c-0.235-0.146-0.308-0.453-0.164-0.688   s0.452-0.308,0.688-0.163l0.396,0.244c3.919,2.413,8.786,2.414,12.704-0.001l0.396-0.245c0.235-0.144,0.544-0.072,0.688,0.163   c0.145,0.235,0.072,0.543-0.163,0.688l-0.397,0.245C21.255,23.436,18.877,24.089,16.499,24.089z" fill="#FFFFFF"/>
	<g>
		<path d="M14.132,13.35c-0.128,0-0.256-0.049-0.354-0.146l-1.968-1.968l-1.968,1.968c-0.195,0.195-0.512,0.195-0.707,0    s-0.195-0.512,0-0.707l2.321-2.321c0.195-0.195,0.512-0.195,0.707,0l2.321,2.321c0.195,0.195,0.195,0.512,0,0.707    C14.388,13.301,14.26,13.35,14.132,13.35z" fill="#FFFFFF"/>
		<path d="M23.511,13.35c-0.128,0-0.256-0.049-0.354-0.146l-1.968-1.968l-1.968,1.968c-0.195,0.195-0.512,0.195-0.707,0    s-0.195-0.512,0-0.707l2.321-2.321c0.195-0.195,0.512-0.195,0.707,0l2.321,2.321c0.195,0.195,0.195,0.512,0,0.707    C23.767,13.301,23.639,13.35,23.511,13.35z" fill="#FFFFFF"/>
	</g>
</g>
</svg></div>
				<div class="content-bloc-chiffre">
					<h3 class="valeur-chiffre">1000</h3>
					<h4 class="libele-chiffre">Patients soignés</h4>
				</div>
			</div>
			
			
			<div class="bloc-chiffre">
				<div class="img-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve" width="44px" height="44px">
<g>
	<g>
		<polygon points="248,56 248,32 232,32 232,56 208,56 208,72 232,72 232,96 248,96 248,72 272,72 272,56   " fill="#FFFFFF"/>
	</g>
</g>
<g>
	<g>
		<path d="M360,320h-64v-29.944c39.236-20.869,63.825-61.616,64-106.056v-56c4.418,0,8-3.582,8-8V72    c-0.044-39.746-32.254-71.956-72-72H184c-39.746,0.044-71.956,32.254-72,72v48c0,4.418,3.582,8,8,8v56    c0.171,44.439,24.762,85.186,64,106.048V320h-64C53.757,320.075,0.075,373.757,0,440v32c0,4.418,3.582,8,8,8h464    c4.418,0,8-3.582,8-8v-32C479.925,373.757,426.243,320.075,360,320z M128,72c0.04-30.911,25.089-55.96,56-56h112    c30.911,0.04,55.96,25.089,56,56v40H128V72z M136,184v-56h208v56c-0.003,57.438-46.568,103.997-104.006,103.994    c-7.668,0-15.313-0.849-22.794-2.53c-7.514-1.663-14.814-4.175-21.76-7.488C159.234,260.653,136.137,224.136,136,184z M200,320    v-22.824c0.168,0.064,0.352,0.104,0.52,0.16c0.632,0.224,1.28,0.384,1.92,0.592c3.099,1.024,6.235,1.917,9.408,2.68    c1.432,0.344,2.872,0.632,4.312,0.92c2.488,0.496,4.984,0.912,7.504,1.248c1.544,0.216,3.08,0.44,4.632,0.584    c3.28,0.32,6.576,0.488,9.872,0.544c0.616,0,1.216,0.096,1.832,0.096c0.616,0,1.216-0.088,1.832-0.096    c3.296-0.056,6.592-0.224,9.872-0.544c1.552-0.144,3.096-0.376,4.64-0.584c2.507-0.336,5-0.752,7.48-1.248    c1.448-0.288,2.904-0.576,4.344-0.92c3.136-0.752,6.232-1.635,9.288-2.648c0.68-0.224,1.368-0.392,2.04-0.624    c0.168-0.064,0.336-0.096,0.504-0.16V320H200z M280,336v8c0,13.255-10.745,24-24,24h-32c-13.255,0-24-10.745-24-24v-8H280z     M120,408c4.418,0,8,3.582,8,8s-3.582,8-8,8s-8-3.582-8-8S115.582,408,120,408z M464,464H16v-24    c0.087-54.283,41.881-99.382,96-103.592v57.064c-12.497,4.418-19.046,18.131-14.627,30.627    c4.418,12.497,18.131,19.046,30.627,14.627s19.046-18.131,14.627-30.627c-2.416-6.835-7.793-12.211-14.627-14.627V336h56v8    c0.026,22.08,17.92,39.974,40,40h32c22.08-0.026,39.974-17.92,40-40v-8h56v40.72c-23.066,3.919-39.957,23.883-40,47.28v8    c0,4.418,3.582,8,8,8h16v-16h-8c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32h-8v16h16c4.418,0,8-3.582,8-8v-8    c-0.043-23.397-16.934-43.361-40-47.28v-40.312c54.119,4.21,95.913,49.309,96,103.592V464z" fill="#FFFFFF"/>
	</g>
</g>
</svg></div>
				<div class="content-bloc-chiffre">
					<h3 class="valeur-chiffre">20</h3>
					<h4 class="libele-chiffre">Médécins Spécialistes</h4>
				</div>
			</div>
			
			
			<div class="bloc-chiffre">
				<div class="img-chiffre"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="44px" height="44px">
<g>
	<g>
		<path d="M438.386,70.124c-66.931,0-131.516-24.656-181.418-69.259L256,0l-0.968,0.865    C205.129,45.468,140.544,70.124,73.614,70.124h-40.54V178.19c0,140.337,81.369,267.943,208.607,327.146L256,512l14.319-6.663    c127.238-59.203,208.607-186.81,208.607-327.146V70.124H438.386z M359.455,302.147h-55.411v55.411h-96.088v-55.411h-55.411V206.06    h55.411v-55.411h96.088v55.411h55.411V302.147z" fill="#FFFFFF"/>
	</g>
</g>
<g>
	<g>
		<polygon points="274.044,236.06 274.044,180.648 237.956,180.648 237.956,236.06 182.545,236.06 182.545,272.147 237.956,272.147     237.956,327.559 274.044,327.559 274.044,272.147 329.455,272.147 329.455,236.06   " fill="#FFFFFF"/>
	</g>
</g>
</svg></div>
				<div class="content-bloc-chiffre">
					<h3 class="valeur-chiffre">24</h3>
					<h4 class="libele-chiffre">Sociétés couvertes</h4>
				</div>
			</div>
		</div>
	</div>
	
	
<div id="conteneur-rdv">
	<div id="rdv">
		<h2 id="titre-rdv">Prendre rendez-vous</h2>
		<p class="accroche-rubrique">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, culpa, natus? Nobis ducimus numquam itaque, fuga qui sunt quam, praesentium rem ullam officia fugit enim harum quo, ipsum suscipit quidem!</p>
	
	
	<div id="wrap-bloc-rdv">
		<div id="bloc-form">
			<h3>Nous Ecrire</h3>
			<form action="">
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom">
				<label for="email">Email</label>
				<input type="email" name="email" id="email">
				<div class="full-column">
					<div class="middle-column">
						<label for="date">Date</label>
						<input type="date" name="date" id="date">
					</div>
					<div class="middle-column">
						<label for="telephone">Téléphone</label>
						<input type="text" name="telephone" id="telephone">
					</div>
				</div>
				<label for="message">Message</label>
				<textarea name="message" id="message" cols="30" rows="10"></textarea>
				<input type="submit" value="Envoyer">
			</form>
		</div>
		
		
		<div id="img-rdv"><img src="images/img-rdv.png" alt=""></div>
	</div>

		</div>
	</div>
	
	
<!--	Bloc actualites-->
	
	<div id="conteneur-actualite">
	  <div class="content-activite">
		  
		  <h2 id="titre-actualite">Dernières actualités</h2>
		  
	    <div class="prev prev-partenaire slick-arrow" aria-disabled="false" style="display: flex;"><i class="fa fa-angle-left"></i></div>  
	    <div class="next next-partenaire slick-arrow slick-disabled" style="display: flex;" aria-disabled="true"><i class="fa fa-angle-right"></i></div>
	    <div class="bloc-activite-wrapper-interne " id="content-activite">
  <div class="bloc-actualite-wrappe" >
    <div class="bloc-actualite">
      <div class="image-actualite">
        <img src="images/pediatre.jpg">
        </div>
      <div class="content-bloc-text-actualite-wrapper">
        <div class="content-text">
          <div class="header-actualite">
            <div class="date-actualite">
              <div class="jour"> 05</div>
              <div class="mois"> Octobre</div>
              </div>
            <h3 class="titre-actualite"><a href="#" tabindex="-1">Campagne de pédiatrie  </a></h3>
            <div class="info-detail-actualite">
              <div class="info-bloc">
                <div class="icone-act">
                  <i class="fa fa-calendar" arial-hidden="true"></i>
                  </div>
                <div class="libelle-info-act">
                  Publié le 05 Octobre 2018
                  </div>
                </div>
              <!--<div class="info-bloc">
										<div class="icone-act">
											<i class="fa fa-eye" arial-hidden="true"></i>
										</div>
										<div class="libelle-info-act">
											 vues
										</div>
									</div>
									<div class="info-bloc">
										<div class="icone-act">
											<i class="fa fa-comments" arial-hidden="true"></i>
										</div>
										<div class="libelle-info-act">
											0 commentaires
										</div>
									</div>-->
              
              </div>
            </div>
          <div class="body-actualite">
            <p>Le lancement  officiel de la &nbsp;Fondation CMC a eu  lieu le vendredi 05 Octoble à Yaoundé, devant les Ministres de la Santé et de  la Population&nbsp;</p>
            <div class="btn-en-savoir">
              <a href="detail_actualite.php?idactualite=47" target="_blank" tabindex="-1">En savoir +</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	      
	      <div class="bloc-actualite-wrapper wow">
	        <div class="bloc-actualite">
	          <div class="image-actualite">
	            <img src="images/pediatre.jpg">
	            </div>
	          <div class="content-bloc-text-actualite-wrapper">
	            <div class="content-text">
	              <div class="header-actualite">
	                <div class="date-actualite">
	                  <div class="jour"> 05</div>
	                  <div class="mois"> Octobre</div>
	                  </div>
	                <h3 class="titre-actualite"><a href="#" tabindex="0">Campagne de pédiatrie </a></h3>
	                <div class="info-detail-actualite">
	                  <div class="info-bloc">
	                    <div class="icone-act">
	                      <i class="fa fa-calendar" arial-hidden="true"></i> 
	                      </div>
	                    <div class="libelle-info-act">
	                      Publié le 05 Octobre 2018
	                      </div>
	                    </div>
	                  
	                  </div>
	                </div>
	              <div class="body-actualite">
	                <p>Le lancement  officiel de la &nbsp;Fondation CMC a eu  lieu le vendredi 05 Octoble à Yaoundé, devant les Ministres de la Santé et de  la Population&nbsp;</p>
	                <div class="btn-en-savoir">
	                  <a href="javascript:getPhotoAlbum('16')" tabindex="0">Voir +</a>
	                  </div>
                  </div>
	              </div>
	            </div>
            </div>
          </div> 
	      </div>
	    </div>
</div>
	
	
	<div class="conteneur-temoignage">
	<div class="temoignage  wow fadeInUp animated" data-wow-delay=".5s">
		<div class="content-text-temoignage">
			<div class="titre-temoignage"><h2>Nos patients en parlent</h2></div>
			<p class="accroche-rubrique">Les compliments et encouragements reçus de ceux  qui nous ont sollicité,  sont une source  de motivation galvanisante.</p>
		</div>

		<div id="temoignage">
			<div class="bloc-temoignage-wrapper  wow fadeInUp animated" data-wow-delay=".6s">
				<div class="bloc-temoignage">
					<div class="image-temoignage">
						<img src="images/c4.jpg">
					</div>
					<div class="text-temoignage"><p>Chaque trois mois je fais mon bilan médical complet au Centre Médical de la Cathédrale, ils ont un matériel de pointe et sont professionnels. </p></div>
					<div class="nom-temoin">
						<h3>
							Ernest Jabea <br>
							<span>D&eacute;veloppeur et Int&eacute;grateur Web</span>
						</h3>
					</div>
				</div>
			</div>
			<div class="bloc-temoignage-wrapper  wow fadeInUp animated" data-wow-delay=".9s">
				<div class="bloc-temoignage">
					<div class="image-temoignage">
						<img src="images/c4.jpg">
					</div>
					<div class="text-temoignage"><p>Grâce au matériel dernière génératio que dispose le CMC, j'ai pu faire un check-Up et aujourd'hui je suis suivi par un Spécialiste de CMC.</p></div>
					<div class="nom-temoin">
						<h3>
							Ernest Jabea <br>	
							<span>D&eacute;veloppeur et Int&eacute;grateur Web</span>
						</h3>
					</div>
				</div>
			</div>
			<div class="bloc-temoignage-wrapper  wow fadeInLeft animated" data-wow-delay=".1.2s">
				<div class="bloc-temoignage">
					<div class="image-temoignage">
						<img src="images/c4.jpg">
					</div>
					<div class="text-temoignage"><p>Mon fils avait une violente indigestion, grâce à l'Endoscope de CMC, on apu exactement comprendre ce qui se passait dans son intestin et maintenant il va bien. </p></div>

					<div class="nom-temoin">
						<h3>
							Ernest Jabea <br>
							<span>D&eacute;veloppeur et Int&eacute;grateur Web</span>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<!-- HTML pour la newsletter	-->
	
	<div class="conteneur-newsletter wow fadeInUp animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
    
    <div class="newsletter">
    <div class="logo-newletter"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 370.88 370.88" style="enable-background:new 0 0 370.88 370.88;" xml:space="preserve">

		<path d="M355.6,66.16H15.28C6.841,66.16,0,73.001,0,81.44v208c0,8.439,6.841,15.28,15.28,15.28H355.6
			c8.439,0,15.28-6.841,15.28-15.28v-208C370.88,73.001,364.039,66.16,355.6,66.16z M15.28,78.16H355.6
			c1.436,0.007,2.7,0.947,3.12,2.32L185.44,188.72L12.16,80.48C12.58,79.107,13.844,78.167,15.28,78.16z M12,94.16L136.64,172
			L12,270.88V94.16z M358.88,289.36c0,1.812-1.469,3.28-3.28,3.28H15.28c-1.811,0-3.28-1.469-3.28-3.28v-3.2l135.44-107.04
			l34.8,21.76c1.955,1.233,4.445,1.233,6.4,0l34.8-21.76l135.44,107.04V289.36z M358.88,270.88l-124.96-98.56l124.96-77.44V270.88z"></path>
	
</svg></div> 
    <div class="content-form">
      <div class="content-text-left--">
          <div class="titre--newsletter">NEWSLETTER </div>
          <span>Laissez-nous votre adresse email et soyez parmi les premiers à recevoir nos publications et offres.</span>
      </div>
      <form action="" method="post" id="newsletter-form">
          <div id="result-newsletter"></div>
          <div class="content-form-elt-footer" style="position: relative">
            <input type="email" name="email_newsletter" placeholder="Votre adresse e-mail" required="">
          <button id="btn-newslleter" type="submit">Souscrire</button>
          </div>
      </form>
    </div>
  </div>    
</div>
	
	
	
<div class="conteneur-document">
	<div class="document">
		<div class="text-left wow fadeInLeft animated animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
			Espace Client
		  <p>Acceder à votre compte et consultez vos résultats en ligne	</p>
		</div>
		<div class="content-btn-telecharger  wow fadeInLeft animated animated" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeInLeft;">
			<a href="" download="brochure-pdf">Connexion</a>
		</div>
	</div>
</div>
	
	
	
	
<!--Client entreprises-->
	
	<div id="conteneur-partenaire">
		<div id="partenaire">
			<h2 id="titre-partenaire">Les entreprises prises en charges</h2>
			<p class="accroche-rubrique">Les compliments et encouragements reçus de ceux  qui nous ont sollicité,  sont une source  de motivation galvanisante.</p>
          <div id="conteneur-bloc-partenaire">
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
            <div class="bloc-partenaire">
              <img src="images/oracle.png">
              </div>
          </div>
		</div>
	</div>
	
<!-- HTML du pied de page	-->
	
	<div id="conteneur-footer">
		<div id="footer">
			<div id="bloc-left-footer">
				<div id="logo-footer"><img src="images/logo.png">
					<h3>Centre medicale la cathedrale</h3>
				</div>
				<div id="desc-footer">
					Le Centre médical la Cathédrale est un centre de référence qui s'appuie sur un plateau technique complet de haute technologie, au service de l'exigence de ses praticiens. 
				</div>
				<a href="#" class="plus-footer">En savoir +</a>
			</div>

			<div id="bloc-right-footer">
				<div class="bloc-footer">
					<h3>Nos Prestations</h3>
					<ul class="services-list">
						<li><a href="#">Consultation</a></li>
						<li><a href="#">Endoscopie </a></li>
						<li><a href="#">Imagerie médicale</a></li>
						<li><a href="#">Médécine du travail</a></li>
						<li><a href="#">Hospitalisation de jour</a></li>
						<li><a href="#">Bilan de santé</a></li>
					</ul>
				</div>
				<div class="bloc-footer">
					<h3>Inscrivez-Vous</h3>             
					<div class="subscribe-form">
						<p>Inscrivez vous à notre newsletter pour recevoir nos affres en temps réel!</p> 
						<form action="#" accept-charset="utf-8">
							<input type="hidden" id="uri2" name="uri" value="themeforest">
							<input name="email" placeholder="Entrer Votre Email..." type="text">
							<button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</form>
					</div>
					<ul class="footer-social-links">

						<li><a title="Facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

						<li><a title="Twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

						<li><a title="Google Plus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

						<li><a title="Linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="bloc-footer">
					<h3>Contact Infos</h3>                
					<ul class="footer-contact-info">
						<li>
							<div class="icon-holder">
								<span class="flaticon-home-page"></span>
							</div>
							<div class="text-holder">
								<h5><span>Localisation</span><br> Quartier Fouda Omnisport, Yaoundé</h5>
							</div>
						</li>
						<li>
							<div class="icon-holder">
								<span class="flaticon-call-answer"></span>
							</div>
							<div class="text-holder">
								<h5><span>Appelez Nous</span><br>(+237) 242 656 972 / 698 492 020
  </h5>
							</div>
						</li>
						<li>
							<div class="icon-holder">
								<span class="flaticon-envelope"></span>
							</div>
							<div class="text-holder">
								<h5><span>Nous Ecrire</span><br>accueil@centremedicallacathedrale.com</h5>
							</div>
						</li>
						<li>
							<div class="icon-holder">
								<span class="flaticon-clock"></span>
							</div>
							<div class="text-holder">
								<h5><span>Boite Postale</span><br>B.P: 12246 Yaoundé </h5>
							</div>
						</li>
					</ul>
				</div>
			</div>



		</div>
	</div>
	
	<script type="text/javascript">
$('#temoignages').slick({
   dots: false,
  infinite: false,
	centerPadding: '0px',
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  centerMode:true,
 prevArrow:'<div class="prev prev-service"><i class="fa fa-chevron-left"></i></div>',
 nextArrow:'<div class="next next-service"><i class="fa fa-chevron-right"></i></div>',
  responsive: [ {
      breakpoint: 1100,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    }, {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows:false
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false
      }
    },

    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false
      }
    }
  ]
});
		$('#layerslider').layerSlider( {
			responsiveUnder: 1200,
			layersContainer: 1200,
			skinsPath: 'layerslider/skins/',
			pager: true,
			controls: true,
			auto: true,
			adaptiveHeight: true,
			pause: 10000,
			autoHover: true
		} );

    //--------------slide banniere----------------

    $( "#conteneur-banniere" ).owlCarousel( {
    	loop: true,
    	responsiveClass: true,
    	autoWidth: true,
    	autoPlay: 10000,
    	autoplayHoverPause: true,
    	singleItem:true,
    	pagination: false,
    	navigation: false,
    	items: 1,
    	autoplayTimeout:5000,
    } );

    var banniere = $("#conteneur-banniere").data('owlCarousel');

    $('.owl-banniere-prev').click(function ( e ) {
				banniere.prev() // Go to previous slide
			} );

    $('.owl-banniere-next').click(function ( e ) {
				banniere.next() // Go to next slide
			} );



    $('.owl-banniere-next').click(function ( e ) {
				banniere.next() // Go to next slide
			} );
//--------------slide realisation----------------

		$( "#conteneur-bloc-realisation" ).owlCarousel( {
			loop: true,
			responsiveClass: true,
			autoWidth: true,
			autoPlay: true,
			autoplayHoverPause: true,
			pagination: false,
			navigation: false,
			items: 4,
			itemsDesktop: [ 1200, 3 ],
			itemsDesktopSmall: [ 1100, 2 ],
			itemsDesktopSmall: [ 900, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 1100, 2 ],
			itemsTablet: [ 900, 3 ],
			itemsTablet: [ 1200, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 600, 1 ],
			itemsMobile: [ 600, 1 ]
		} );

		var action = $( "#conteneur-bloc-realisation" ).data( 'owlCarousel' );

		$( '.prev-bloc-realisation' ).click( function ( e ) {
				action.prev() // Go to previous slide
			} );

		$( '.next-bloc-realisation' ).click( function ( e ) {
				action.next() // Go to next slide
			} );

		//--------------slide temoignage----------------

		$( "#conteneur-bloc-temoignage" ).owlCarousel( {
			loop: true,
			responsiveClass: true,
			autoWidth: true,
			autoPlay: true,
			autoplayHoverPause: true,
			pagination: false,
			navigation: false,
			items: 3,
			itemsDesktop: [ 1200, 3 ],
			itemsDesktopSmall: [ 1100, 2 ],
			itemsDesktopSmall: [ 900, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 1100, 2 ],
			itemsTablet: [ 900, 3 ],
			itemsTablet: [ 1200, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 600, 1 ],
			itemsMobile: [ 600, 1 ]
		} );

		var temoignage = $("#conteneur-bloc-temoignage").data('owlCarousel');

		$('.owl-prev').click(function(e){
				temoignage.prev() // Go to previous slide
			} );

		$('.owl-prev').click(function(e){
				temoignage.next() // Go to next slide
			} );


		
		//--------------slide temoignage----------------

		$( "#content-activite" ).owlCarousel( {
			loop: true,
			responsiveClass: true,
			autoWidth: true,
			autoPlay: true,
			autoplayHoverPause: true,
			pagination: false,
			navigation: false,
			items: 1,
			itemsDesktop: [ 1200, 3 ],
			itemsDesktopSmall: [ 1100, 2 ],
			itemsDesktopSmall: [ 900, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 1100, 2 ],
			itemsTablet: [ 900, 3 ],
			itemsTablet: [ 1200, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 600, 1 ],
			itemsMobile: [ 600, 1 ]
		} );

		var actualite = $("#content-activite").data('owlCarousel');

		$('.owl-prev').click(function(e){
				actualite.prev() // Go to previous slide
			} );

		$('.owl-prev').click(function(e){
				actualite.next() // Go to next slide
			} );


		
		
		//--------------slide services----------------

		$( "#conteneur-bloc-partenaire" ).owlCarousel( {
			loop: true,
			responsiveClass: true,
			autoWidth: true,
			autoPlay: true,
			autoplayHoverPause: true,
			pagination: false,
			navigation: false,
			items: 5,
			itemsDesktopSmall: [ 900, 2 ],
			itemsTablet: [ 760, 2 ],
			itemsTablet: [ 1100, 2 ],
			itemsTablet: [ 900, 3 ],
		} );


		

		
		currentService=0;
		$('.tab-service').hide();
		$('.onglet').eq(currentService).addClass('active');
		initialTab=$('.onglet').eq(currentService).attr('data-id');
		$('#service-'+initialTab).fadeIn('slow');
		$('.onglet').eq(currentService).addClass('active');
		initialTab=$('.onglet').eq(currentService).attr('data-id');
		$('#service-'+initialTab).fadeIn('slow');

		$('.onglet').click(function(){
			$('.onglet').removeClass('active');
			$(this).addClass('active');
			cible=$(this).attr('data-id');
			$('.tab-service').hide();
			$('#service-'+cible).fadeIn('slow');
		})
		
		currentTemoignage=3;
		$('.tab-temoignage').hide();
		$('.onglet-photo').eq(currentTemoignage).addClass('active');
		initialTab2=$('.onglet-photo').eq(currentTemoignage).attr('data-temoin');
		$('#temoignage-'+initialTab2).fadeIn('slow');
		$('.onglet-photo').eq(currentTemoignage).addClass('active');
		initialTab2=$('.onglet-photo').eq(currentTemoignage).attr('data-temoin');
		$('#temoignage-'+initialTab2).fadeIn('slow');

		$('.onglet-photo').click(function(){
			$('.onglet-photo').removeClass('active');
			$(this).addClass('active');
			cible=$(this).attr('data-temoin');
			$('.tab-temoignage').hide();
			$('#temoignage-'+cible).fadeIn('slow');
		})
		
		


	</script>
	
</body>
</html>
