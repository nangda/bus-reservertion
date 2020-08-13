
<?php //include '../models/bus.php';
 // 	$bus= new bus();
	// $sql = "SELECT * FROM bus";
	// $all_buses = $bus->getData($sql);
	// $numrows = $bus->getNum_rows();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking Bus - BUS BOOKING</title>

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
		<section class="wrapper-sliders booking">
			<div class="sliders reduced">
				<div class="wrap-sliders">
                   
				</div>
			</div>
		</section>

		<section class="wrapper-booking-page">
			<div class="booking-page reduced">
				<div class="section-title"> 
					<h2>Booking </h2>
				</div>
				<div class="wrap-booking-page">
					
					<form class="wrapper-book-panel-group">
						<div class="book-panel-group">
							
							<div class="book-panel-item" id="seat-selection">
								<div class="wrap-book-panel-item">
									<div class="section-title booking">
										<h2>seat selection</h2>
										<i class="fa fa-seat"></i>
									</div>
									<div class="selecting-seat">
										<div class="wrap-selecting-seat">

											<div class="left-selecting">
												<div class="wrap-left-selecting">

													<div class="row-seats">
														
														<div class="single-seat-blank">
														</div>
														<div class="single-seat-blank">
														</div>
														<div class="single-seat-blank">
														</div>
														<div class="single-seat-blank">
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|1" value="1">
															</div>
															<span>1</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|2" value="2">
															</div>
															<span>2</span>
														</div>
													</div>
													<div class="row-seats">
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|1" value="1">
															</div>
															<span>3</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|2" value="2">
															</div>
															<span>4</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|3" value="3">
															</div>
															<span>5</span>
														</div>
														<div class="single-seat-blank">
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|4" value="4">
															</div>
															<span>6</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|5" value="5">
															</div>
															<span>7</span>
														</div>
													</div>
													<div class="row-seats">
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|6" value="6">
															</div>
															<span>6</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|7" value="7">
															</div>
															<span>7</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|8" value="8">
															</div>
															<span>8</span>
														</div>
														<div class="single-seat-blank">
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|9" value="9">
															</div>
															<span>9</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|10" value="10">
															</div>
															<span>10</span>
														</div>
													</div>
													<div class="row-seats">
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|6" value="6">
															</div>
															<span>6</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|7" value="7">
															</div>
															<span>7</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|8" value="8">
															</div>
															<span>8</span>
														</div>
														<div class="single-seat-blank">
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|9" value="9">
															</div>
															<span>9</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|10" value="10">
															</div>
															<span>10</span>
														</div>
													</div>
													<div class="row-seats">
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|6" value="6">
															</div>
															<span>6</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|7" value="7">
															</div>
															<span>7</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|8" value="8">
															</div>
															<span>8</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|9" value="9">
															</div>
															<span>9</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|9" value="9">
															</div>
															<span>9</span>
														</div>
														<div class="single-seat">
															<div class="available-seat">
																<input type="checkbox" name="chkseat" id="BUS|10" value="10">
															</div>
															<span>10</span>
														</div>
													</div>

													<div class="seat-note">
										                <div class="seat-logo">
										                    <div class="available-seat"></div>
										                    <span>Available</span>
										                </div>
										                <div class="seat-logo">
										                    <div class="blocked-seat"></div>
										                    <span>Busy</span>
										                </div>
										                <div class="seat-logo">
										                    <div class="booked-seat"></div>
										                    <span>Booked</span>
										                </div>
										                <div class="seat-logo">
										                    <div class="selected-seat"></div>
										                    <span>Selected</span>
										                </div>
										            </div>
												</div>
											</div>
											<div class="right-selecting">
												<div class="wrap-right-selecting">
													<div class="form-group-seats">
														<label>Selected seat</label>
														<input type="text" name="txtselectedseat" id="txtselectedseat" readonly="true">
													</div>
													<div class="form-group-seats">
														<label>Total seat</label>
														<input type="text" name="txttotalseats" id="txttotalseats" readonly="true" value="0">
													</div>
												</div>
											</div>

										</div>
									</div>			
								</div>

							</div>
						</div>
					</form>

					<div class="wrapper-right-trip-info">
						<div class="right-trip-info">
							<div class="section-title booking">
								<h2>Trip summary</h2>
							</div>
							<div class="trip-infos">
								<div class="wrap-trip-infos">
									
									<div class="roow-item-trip-info">
										<div class="wrap-row-item-trip-info">
											<div class="libelle-row-info">Direction</div>
											<div class="value-row-info">
												<span class="lbloriigin">Bepanda</span> to
												<span class="lbldestination">Mvan</span>
											</div>
										</div>
									</div>
									<div class="roow-item-trip-info">
										<div class="wrap-row-item-trip-info">
											<div class="libelle-row-info">Departure	</div>
											<div class="value-row-info">
												<span class="lbldeparture">July 20, 2020 9:45 Am</span>
											</div>
										</div>
									</div>
									<div class="roow-item-trip-info">
										<div class="wrap-row-item-trip-info">
											<div class="libelle-row-info">Bus Company</div>
											<div class="value-row-info">
												<span class="lbloperator">Buca Voyage</span>
											</div>
										</div>
									</div>
									<div class="roow-item-trip-info">
										<div class="wrap-row-item-trip-info">
											<div class="libelle-row-info">Type</div>
											<div class="value-row-info">
												<span class="lblbustype">VIP</span>
											</div>
										</div>
									</div>
									<div class="roow-item-trip-info">
										<div class="wrap-row-item-trip-info">
											<div class="libelle-row-info">Number of passengers</div>
											<div class="value-row-info">
												<span class="lblpassengers">2</span>
											</div>
										</div>
									</div>
									<div class="roow-item-trip-info">
										<div class="wrap-row-item-trip-info">
											<div class="libelle-row-info">Total</div>
											<div class="value-row-info">
												<span class="lbltotal">6000 FCFA</span>
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

	</script>	

</body>
</html>