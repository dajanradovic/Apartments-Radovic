
<?php


$userMessage;


if (isset($_POST['submit'])) {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$message1 = test_input($_POST["message"]);
	


/*	$to_email = 'dajo1986@gmail.com';
	$subject = 'Testing PHP Mail';
	$message = $message1;
	$headers = 'From:'. $email;
	mail($to_email,$subject,$message,$headers);*/
	
	$userMessage="Thank you for contacting us. We will get in touch with you shortly";
}

else{

	
	$userMessage='';
}
	
	


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Apartments Radovic | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Apartments Radovic Presika Labin Rent" />
	<meta name="keywords" content="apartment, labin, rent, apartments" />
	<meta name="author" content="dajan" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<style>
.container{

padding-left:0px;
padding-right:0px;
}

body{

	background-color:black !important;
}


@media only screen and (max-width:480px){

	iframe{

		width:100% !important;
		height:200px !important;
	}

	#afterMap{

		margin-top:20px;
	}
}

</style>

<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Apartments Radovic</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="hotel.html" class="fh5co-sub-ddown">Apartments</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="hotel.php">Apartment 4+0</a></li>
								 	<li><a href="studio.php">Apartment Studio 2+0</a></li>
								</ul></li>		
														
							<li><a class="active" href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/prtlog.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Contact Us</h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	

		
				
			
	

	
		<div class="row" style="padding-top: 30px;">
			<div class="col-md-6">
				<div  class="fh5co-map" style="width:100%; padding-left:10%; padding-right:10%;" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d704.3344457451284!2d14.118818488106415!3d45.07894299868723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDA0JzQ0LjIiTiAxNMKwMDcnMDkuNyJF!5e0!3m2!1sen!2shr!4v1565417416111!5m2!1sen!2shr" width="100%" height="600px" frameborder="0" style="border: 2px solid orange;" allowfullscreen></iframe></div>
			</div>
			<div class="col-md-6" id="afterMap">
				<div class="col-md-12">
					<h3 style="color: #848484;">Our Address</h3>
					
					<ul class="contact-info">
						<li><i style="color: #848484;" class="ti-map"></i>Presika 88c, 52220 Labin, Istria, Croatia</li>
						<li><i style="color: #848484;" class="ti-mobile"></i>+ 385 (0) 91 254 66 00</li>
						<li><i style="color: #848484;" class="ti-envelope"></i><a style="color: #848484;" href="mailto:dorjano.radovic@pu.t-com.hr">dorjano.radovic@pu.t-com.hr</a></li>
						<li><i style="color: #848484;" class="ti-home"></i><a style="color: #848484;" href="index.html">Homepage</a></li>
					</ul>
				</div>
				
				<div class="col-md-12" >
					<div class="row">
						<div class="col-md-6" >
						
						<form action="<?php $_SERVER["PHP_SELF"];?>" method="post" id="form2" >
							<div class="form-group">
								<input type="text" class="form-control" required name="name" placeholder="Name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input id="btn3" type="submit" name="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
						</form>
					</div>
					<span style="color:white;"><?php echo $userMessage ?></span>

				</div>

			</div>
		</div>
	</div>
	

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="copyright">
						<p><small>&copy;  <br> All Rights Reserved. <br>
						<a href="hotel.php" target="_blank">Apartment 4+0</a> <br> <a href="studio.php" target="_blank">Apartment Studio 2+0</a><br><a href="contact.php" target="_blank">Contact us</a></small></p>
					</div>
				</div>
	</div>
			</div>
		</div>

		</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/custom.js"></script>
	
	<script type="text/javascript"> 
		$(document).ready(function(){
			
			$('#jq').animate({opacity: 0});
			
			
			$('#jq').on("mouseover", function (){
			
					$('#jq').animate({opacity: 1}, 1000);
			
			});
			
			$('#strelica').on("mouseover", function (){
			
					
					$('#strelica').animate({opacity: 1}, 1000);
			});
			
			$('#strelica2').on("mouseover", function (){
			
					
					$('#strelica2').animate({opacity: 1}, 1000);
			});
		

			$('#btn3').click(function(){        
        $('#form2').submit()
			});	
		

		});


	
	
	</script>

</body>
</html>