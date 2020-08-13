<!DOCTYPE html>
<html>
<head>
	<title>BUS BOOKING SYSTEM</title>

	<!-- Responsive/Referencement -->
	<meta charset="utf-8" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="" />
    <meta name="author" content="Jocelyne HAPPI, Landry NANGDA" />
	<!-- !Responsive -->

	<!-- Main css -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- !Main css -->

	<!-- Fontawesomes -->
	<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->
	<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- !Fontawesomes -->

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;523;600;700;800&family=Montserrat:wght@100;200;300;400;500;600&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
	<!-- !Fonts -->



	<!-- Responsive files  -->
	<link rel="stylesheet" type="text/css" href="css/header-footer-mini.css">
	<link rel="stylesheet" type="text/css" href="css/index-mini.css">
	<!-- !Responsive files -->

</head>
<body id="home">

	<div class="page-wrapper">

		<!-- header -->
		<?php include ("includes/header.php") ?>

		<!-- Sliders -->
		<section class="wrapper-sliders">
			<div class="sliders reduced">
				<div class="wrap-sliders">

                    <form class="search-form" method="post" action="">
                    	<div class="wrap-search-form">

	                        <div class="input-container">
	                            <div class="wrap-input-container">
	                                <select type="" name="position" id="position" class="first">
	                                    <option> - From - </option>
	                                    <option>Douala</option>
	                                    <option>Yaounde</option>
	                                    <option>Bafoussam</option>
	                                    <option>Garoua</option>
	                                    <option>Limbe</option>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="input-container two">
	                            <div class="wrap-input-container">
	                                <select type="" name="destination" id="destination">
	                                    <option> - To - </option>
	                                    <option>Douala</option>
	                                    <option>Yaounde</option>
	                                    <option>Bafoussam</option>
	                                    <option>Garoua</option>
	                                    <option>Limbe</option>
	                                </select>
	                            </div>
	                            <div class="wrap-input-container conteteur-2">
	                                <input type="date" name="go-date"  id="go-date">
	                            </div>
	                            <div class="action">
	                                <button class="btn go-form">
	                                    <i class="fa fa-search"></i>
	                                </button>
	                            </div>
	                        </div>

                    	</div>
                    </form>

				</div>
			</div>
		</section>

		<section class="wrapper-choose-us" id="wcu">
			<div class="choose-us reduced">
				<div class="wrap-choose-us">

					<div class="section-title">
						<h2>Why choose us</h2>
						<!-- <p></p> -->
					</div>
					<div class="choose-content">
						<div class="wrap-choose-content flex-4">

							<div class="choose-us-item">
								<div class="choose-us-icon">
									<img src="images/booking.png" alt="choose-us-img">
								</div>
								<div class="content-item-choose">
									<h3>Easy Online Booking</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<div class="choose-us-item">
								<div class="choose-us-icon">
									<img src="images/drivers.png" alt="choose-us-img">
								</div>
								<div class="content-item-choose">
									<h3>Professional Drivers</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<div class="choose-us-item">
								<div class="choose-us-icon">
									<img src="images/payment.png" alt="choose-us-img">
								</div>
								<div class="content-item-choose">
									<h3>Online Payment</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<div class="choose-us-item">
								<div class="choose-us-icon">
									<img src="images/booking.png" alt="choose-us-img">
								</div>
								<div class="content-item-choose">
									<h3>24/7 support</h3>
									<p>Our world class team of bus experts is always here to help.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="wrapper-process" id="hiw">
			<div class="process reduced">
				<div class="wrap-process">

					<div class="section-title center">
						<h2>How it works ?</h2>
					</div>
					<div class="flex-element-of-process">
						<div class="item-element-of-process">
							<div class="img-of-item-process">
								<div class="numerical-zone-process">
									<span>1</span>
								</div>
								<img src="images/hand-process.png" alt="Renseignez et validez vos données personnelles chez la bicec" class="image-75-75">
							</div>
							<div class="bloc-desc-of-item-process">

								<div class="desc-of-item-process">
									<h3>Booking</h3>
									<p>Book Via App Or Web</p>
								</div>
							</div>
						</div>
						<div class="item-element-of-process">
							<div class="img-of-item-process">
								<img src="images/hand-process.png" alt="" class="image-45-45">
							</div>
							<div class="bloc-desc-of-item-process">
								<div class="numerical-zone-process">
									<span>2</span>
								</div>
								<div class="desc-of-item-process">
									Choose Your Ride
								</div>
							</div>
						</div>
					  	<div class="item-element-of-process">
							<div class="img-of-item-process">
								<img src="images/laptop-process.png" alt="" class="image-45-45">
							</div>
							<div class="bloc-desc-of-item-process">
								<div class="numerical-zone-process">
									<span>3</span>
								</div>
								<div class="desc-of-item-process">
									Fill in and validate your personal data
								</div>
							</div>
						</div>
						<div class="item-element-of-process">
							<div class="img-of-item-process">
								<img src="images/enjoy.png" alt="" class="image-45-45">
							</div>
							<div class="bloc-desc-of-item-process">
								<div class="numerical-zone-process">
									<span>4</span>
								</div>
								<div class="desc-of-item-process">
									Enjoy Your Ride
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="" id="">
						<a href="" class="">Book now</a>
				    </div> -->

				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include("includes/footer.php") ?>
		<!-- !Footer -->


	</div>


    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->



	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	   <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element'
            );
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">

        $(document).ready(function(){
            $('body').attr("id","page");
                var anchorName = document.location.hash.substring(1);
                if(anchorName ){
                    $('html, body').animate({
                    scrollTop:$("#"+anchorName).offset().top-85
                    }, 500);
                }
                $('a[href^="#"]').click(function(){
                    var the_id = $(this).attr("href");

                    $('html, body').animate({
                    scrollTop:$(the_id).offset().top-85
                }, 500);
                return false;
            });

        });


    </script>


</body>
</html>
