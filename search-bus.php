
<?php //include '../models/bus.php';
 // 	$bus= new bus();
	// $sql = "SELECT * FROM bus";
	// $all_buses = $bus->getData($sql);
	// $numrows = $bus->getNum_rows();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Bus - BUS BOOKING</title>

	<!-- Responsive/Referencement -->
	<meta charset="utf-8" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Bus Booking System to ease booking and queue in agencies" />
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

		<section class="wrapper-display-search">
			<div class="display-search reduced">
				<div class="wrap-display-search">
					
					<div class="wrapper-to-filter">
						<div class="to-filter">

							<div class="wrap-to-filter">
								<div class="item-filter">below the list of agencies</div>
								<div class="item-filter">
									<div class="filter-text">
										<i class="fa fa-filter"></i>
										<p class="">Filter</p>
									</div>
								</div>
							</div>
							<div class="wrap-to-filter under-part hidden" id="fil-div">
								<div class="input-item-fiter">
									<label>Bus Company</label>
									<select class="select-item-filter">
										<option>Buca</option>
										<option>General</option>
										<option>Touristique</option>
									</select>
								</div>
								<div class="input-item-fiter">
									<label>Agency</label>
									<select class="select-item-filter">
										<option>Bepanda</option>
										<option>Akwa</option>
										<option>Bonaberi</option>
									</select>
								</div>
								<div class="input-item-fiter">
									<label>Agency</label>
									<select class="select-item-filter">
										<option>Bepanda</option>
										<option>Akwa</option>
										<option>Bonaberi</option>
									</select>
								</div>
								<div class="input-item-fiter">
									<label>Bus Type</label>
									<select class="select-item-filter">
										<option>VIP</option>
										<option>Classic</option>
									</select>
								</div>
								<div class="input-item-fiter search-dis">
									<i class="fa fa-search"></i>
								</div>	
							</div>
						</div>
					</div>

					<div class="for-display">
						<div class="wrap-for-display">
							
							<div class="single-display">
								<div class="wrap-single-display">

									<div class="left-side-single-display">
										<div class="wrap-left-side-single-display">

											<div class="toptop-display">
												<div class="item-single-display">
													<div class="logo">
														<img class="img-65-65" src="images/comp-logo.png"></img>
													</div>
													<div class="name">Buca Voyage</div>
												</div>

												<div class="item-single-display w-80">
													<div class="departure-wrapper">
														<div class="time departure">9:45 AM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Douala, Bepanda</span>
														</div>
													</div>
													<div class="duration-wrapper">
														<div class="duration-placeholder">
															<i class="fa fa-bus"></i>
														</div>
														<div class="duration-time-container">
															<span class="item-1 duration">Duration</span>
															<span class="item-1 details">Direct</span>
														</div>
													</div>
													<div class="destination-wrapper">
														<div class="time arrival">02:00 PM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Yaounde, Mvan</span>
														</div>
													</div>
												</div>
											</div>

											<div class="bottom-details">
												<div class="wrap-bottom-display">
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Total seats : 70</p>
													</div>
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Seat Available : 40</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="right-side-single-display">
										<div class="wrap-right-side-single-display">
											<div class="item-bloc-pricing">
												<div class="bus-type">Classic</div>
												<div class="instant">Instant book</div>
											</div>
											<div class="item-bloc-pricing">
												<div class="fonts pricing">
													<!-- <i class="fa fa-wifi"></i> -->
												</div>
											</div>
											<div class="item-bloc-pricing-center">
												<div class="price-journey center">Fcfa 2500</div>
											</div>
											<div class="item-bloc-pricing-center">
												<button class="btn book">
													<a href="booking.php">Book now</a>
												</button>
											</div>


										</div>
									</div>		

								</div>
							</div>
							<div class="single-display">
								<div class="wrap-single-display">

									<div class="left-side-single-display">
										<div class="wrap-left-side-single-display">

											<div class="toptop-display">
												<div class="item-single-display">
													<div class="logo">
														<img class="img-65-65" src="images/comp-logo1.png"></img>
													</div>
													<div class="name">Fitness</div>
												</div>

												<div class="item-single-display w-80">
													<div class="departure-wrapper">
														<div class="time departure">8:00 AM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Douala, Akawa</span>
														</div>
													</div>
													<div class="duration-wrapper">
														<div class="duration-placeholder">
															<i class="fa fa-bus"></i>
														</div>
														<div class="duration-time-container">
															<span class="item-1 duration">Duration</span>
															<span class="item-1 details">Direct</span>
														</div>
													</div>
													<div class="destination-wrapper">
														<div class="time arrival">02:25 PM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Yaounde, Mvan</span>
														</div>
													</div>
												</div>
											</div>

											<div class="bottom-details">
												<div class="wrap-bottom-display">
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Total seats : 70</p>
													</div>
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Seat Available : 23</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="right-side-single-display">
										<div class="wrap-right-side-single-display">
											<div class="item-bloc-pricing">
												<div class="bus-type">VIP</div>
												<div class="instant">Instant book</div>
											</div>
											<div class="item-bloc-pricing">
												<div class="fonts pricing">
													<i class="fa fa-water-bottle"></i>
													<i class="fa fa-wifi"></i>
												</div>
											</div>
											<div class="item-bloc-pricing-center">
												<div class="price-journey center">Fcfa 6000</div>
											</div>
											<div class="item-bloc-pricing-center">
												<button class="btn book">
													<a href="booking.php">Book now</a>
												</button>
											</div>


										</div>
									</div>		

								</div>
							</div>
							<div class="single-display">
								<div class="wrap-single-display">

									<div class="left-side-single-display">
										<div class="wrap-left-side-single-display">

											<div class="toptop-display">
												<div class="item-single-display">
													<div class="logo">
														<img class="img-65-65" src="images/comp-logo2.png"></img>
													</div>
													<div class="name">General</div>
												</div>

												<div class="item-single-display w-80">
													<div class="departure-wrapper">
														<div class="time departure">11:45 AM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Douala, Bepanda</span>
														</div>
													</div>
													<div class="duration-wrapper">
														<div class="duration-placeholder">
															<i class="fa fa-bus"></i>
														</div>
														<div class="duration-time-container">
															<span class="item-1 duration">Duration</span>
															<span class="item-1 details">Direct</span>
														</div>
													</div>
													<div class="destination-wrapper">
														<div class="time arrival">05:00 PM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Yaounde, Mvan</span>
														</div>
													</div>
												</div>
											</div>

											<div class="bottom-details">
												<div class="wrap-bottom-display">
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Total seats : 70</p>
													</div>
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Seat Available : 5</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="right-side-single-display">
										<div class="wrap-right-side-single-display">
											<div class="item-bloc-pricing">
												<div class="bus-type">Classic</div>
												<div class="instant">Instant book</div>
											</div>
											<div class="item-bloc-pricing">
												<div class="fonts pricing">
													<i class="fa fa-wifi"></i>
												</div>
											</div>
											<div class="item-bloc-pricing-center">
												<div class="price-journey center">Fcfa 3000</div>
											</div>
											<div class="item-bloc-pricing-center">
												<button class="btn book">
													<a href="booking.php">Book now</a>
												</button>
											</div>


										</div>
									</div>		

								</div>
							</div>
							<div class="single-display">
								<div class="wrap-single-display">

									<div class="left-side-single-display">
										<div class="wrap-left-side-single-display">

											<div class="toptop-display">
												<div class="item-single-display">
													<div class="logo">
														<img class="img-65-65" src="images/comp-logo.png"></img>
													</div>
													<div class="name">Buca Voyage</div>
												</div>

												<div class="item-single-display w-80">
													<div class="departure-wrapper">
														<div class="time departure">9:45 AM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Douala, Bepanda</span>
														</div>
													</div>
													<div class="duration-wrapper">
														<div class="duration-placeholder">
															<i class="fa fa-bus"></i>
														</div>
														<div class="duration-time-container">
															<span class="item-1 duration">Duration</span>
															<span class="item-1 details">Direct</span>
														</div>
													</div>
													<div class="destination-wrapper">
														<div class="time arrival">02:00 PM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Yaounde, Mvan</span>
														</div>
													</div>
												</div>
											</div>

											<div class="bottom-details">
												<div class="wrap-bottom-display">
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Total seats : 70</p>
													</div>
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Seat Available : 40</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="right-side-single-display">
										<div class="wrap-right-side-single-display">
											<div class="item-bloc-pricing">
												<div class="bus-type">Classic</div>
												<div class="instant">Instant book</div>
											</div>
											<div class="item-bloc-pricing">
												<div class="fonts pricing">
													<!-- <i class="fa fa-wifi"></i> -->
												</div>
											</div>
											<div class="item-bloc-pricing-center">
												<div class="price-journey center">Fcfa 2500</div>
											</div>
											<div class="item-bloc-pricing-center">
												<button class="btn book">
													<a href="booking.php">Book now</a>
												</button>
											</div>


										</div>
									</div>		

								</div>
							</div>
							<div class="single-display">
								<div class="wrap-single-display">

									<div class="left-side-single-display">
										<div class="wrap-left-side-single-display">

											<div class="toptop-display">
												<div class="item-single-display">
													<div class="logo">
														<img class="img-65-65" src="images/comp-logo1.png"></img>
													</div>
													<div class="name">Fitness</div>
												</div>

												<div class="item-single-display w-80">
													<div class="departure-wrapper">
														<div class="time departure">8:00 AM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Douala, Akawa</span>
														</div>
													</div>
													<div class="duration-wrapper">
														<div class="duration-placeholder">
															<i class="fa fa-bus"></i>
														</div>
														<div class="duration-time-container">
															<span class="item-1 duration">Duration</span>
															<span class="item-1 details">Direct</span>
														</div>
													</div>
													<div class="destination-wrapper">
														<div class="time arrival">02:25 PM</div>
														<div class="station-wrapper">
															<i class="fa fa-map-marker"></i>
															<span class="station-name">Yaounde, Mvan</span>
														</div>
													</div>
												</div>
											</div>

											<div class="bottom-details">
												<div class="wrap-bottom-display">
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Total seats : 70</p>
													</div>
													<div class="item-bottom">
														<img class="image-30-30" src="images/seat.png"></img>
														<p class="text">Seat Available : 23</p>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="right-side-single-display">
										<div class="wrap-right-side-single-display">
											<div class="item-bloc-pricing">
												<div class="bus-type">VIP</div>
												<div class="instant">Instant book</div>
											</div>
											<div class="item-bloc-pricing">
												<div class="fonts pricing">
													<i class="fa fa-water-bottle"></i>
													<i class="fa fa-wifi"></i>
												</div>
											</div>
											<div class="item-bloc-pricing-center">
												<div class="price-journey center">Fcfa 6000</div>
											</div>
											<div class="item-bloc-pricing-center">
												<button class="btn book">
													<a href="booking.php">Book now</a>
												</button>
											</div>


										</div>
									</div>		

								</div>
							</div>

						</div>
					</div>

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

		 // Toggle div display
	    // $(".filter-text").click(function(){
	    // 	if ($("#fil-div").hasClass('hidden')) {
	    // 		$("#fil-div").removeClass('hidden').addClass('show');
	    // 	}
	    // 	else ($("#fil-div").hasClass('show')) {
	    // 		$("#fil-div").removeClass('show').addClass('hidden');
	    // 	}
	        
	    // });


		 // Toggle div display
	    $(".filter-text").click(function(){
	    	$("#fil-div").toggle()	        
	    });

	</script>	

</body>
</html>