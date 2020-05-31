
<?php


$userMessage;


if (isset($_POST['submit'])) {
/*	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$message1 = test_input($_POST["message"]);
	$apartment = $_POST["apartment"];*/



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
	<title>Apartments Radovic | Studio</title>
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
table tr td{

	text-align:center;
}
table tr th{

	text-align:center;
}
.container{

	padding-left:0px;
	padding-right:0px;
}
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container1 {
  position: relative;
  
}

.formRows{

padding-left:10px;
}

/* Hide the images by default */
.mySlides {
  display: none;
  width:70%;
  height:60%;
  text-align:center;
  margin: 0 auto;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

#thumbnailsrow{

	margin-left:0px;
	margin-right:0px;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.caption-container1 {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  
}

/* Container for image text */


.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 14.20%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
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
								<a class="active" href="hotel.html" class="fh5co-sub-ddown">Apartments</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="hotel.php">Apartment 4+0</a></li>
								 	<li><a >Apartment Studio 2+0</a></li>
								</ul></li>		
							
							
							<li><a  href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/studioap/1.jpg); background-position: 0% -120%;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Studio Apartment</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	


	
							

								<div id="fh5co-hotel-section" style="background-color:#1f1d1d; padding-top:10px;">
		<div class="container">
			<div class="row">
			<p class="text-center lead"><i>Studio Apartment - a small apartment which has all you need. Perfect for couples. It consists of a kitchen, double-bed, a small bathroom and a terrace. </i> </p>

				
				


						
  <div class="container1">

  <div class="mySlides">
    <div class="numbertext">1 / 13</div>
      <img src="images/studioap/1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 13</div>
      <img src="images/studioap/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 13</div>
      <img src="images/studioap/3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 13</div>
      <img src="images/studioap/4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 13</div>
      <img src="images/studioap/5.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 13</div>
      <img src="images/studioap/6.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">7 / 13</div>
      <img src="images/studioap/7.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">8 / 13</div>
      <img src="images/studioap/8.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">9 / 13</div>
      <img src="images/studioap/9.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">10 / 13</div>
      <img src="images/studioap/10.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">11 / 13</div>
      <img src="images/studioap/11.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">12 / 13</div>
      <img src="images/studioap/12.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">13 / 13</div>
      <img src="images/studioap/13.jpg" style="width:100%">
  </div>
  

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
 
  

  <!-- Thumbnail images -->
  <div class="row" id="thumbnailsrow" style="margin-top:5px">
    <div class="column">
      <img class="demo cursor" src="images/studioap/1.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/studioap/2.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/studioap/3.jpg" style="width:100%" onclick="currentSlide(3)"  >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/studioap/4.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/studioap/5.jpg" style="width:100%" onclick="currentSlide(5)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/studioap/6.jpg" style="width:100%" onclick="currentSlide(6)" >
	</div>
	<div class="column">
		<img class="demo cursor" src="images/studioap/7.jpg" style="width:100%" onclick="currentSlide(7)">
	  </div>
	  <div class="column">
		<img class="demo cursor" src="images/studioap/8.jpg" style="width:100%" onclick="currentSlide(8)" >
	  </div>
	  <div class="column">
		<img class="demo cursor" src="images/studioap/9.jpg" style="width:100%" onclick="currentSlide(9)" >
	  </div>
	  <div class="column">
		<img class="demo cursor" src="images/studioap/10.jpg" style="width:100%" onclick="currentSlide(10)" >
	  </div>
	  <div class="column">
		<img class="demo cursor" src="images/studioap/11.jpg" style="width:100%" onclick="currentSlide(11)" >
	  </div>
	  <div class="column">
		<img class="demo cursor" src="images/studioap/12.jpg" style="width:100%" onclick="currentSlide(12)">
	  </div>
	  <div class="column">
		<img class="demo cursor" src="images/studioap/13.jpg" style="width:100%" onclick="currentSlide(13)" >
	  </div>
	  
  </div>
</div>
	</div>
	<hr>
	<div class="container">
			<div class="row facilities">
			
			<div class="col-md-12">
			
							<p style="text-decoration: underline; font-family:Helvetica;">Property surroundings:</p>

			</div>
				<div class="col-md-6">
				
					
				<ul class="list-group listasadrzaja">
				
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" ><img class="iconImage" src="https://img.icons8.com/android/24/000000/restaurant.png"/>Restaurant Tina <span class="badge">0.4km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/material-rounded/24/000000/shopping-cart-loaded.png"/>Mini-market Jedinstvo <span class="badge">0.8km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/restaurant.png"/>Restaurant Kvarner <span class="badge">0.8km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage"src="https://img.icons8.com/android/24/000000/restaurant.png"/>Velo-Caffe bar & restaurant <span class="badge">0.8km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/restaurant.png"/>Pizzeria Napoli <span class="badge">0.8km</span></li>
				</ul>

							
				</div>
				
				
				<div class="col-md-6">
					
				<ul class="list-group listasadrzaja">
				
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" ><img class="iconImage" src="https://img.icons8.com/material-rounded/24/000000/shopping-cart-loaded.png"/>Supermarket Lidl <span class="badge">2.5km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/material-rounded/24/000000/shopping-cart-loaded.png"/>Supermarket Spar <span class="badge">3 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/material-rounded/24/000000/shopping-cart-loaded.png"/>Supermarket Konzum <span class="badge">3.7 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/material-rounded/24/000000/shopping-cart-loaded.png"/>Supermarket Plodine <span class="badge">4.3km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/material-rounded/24/000000/shopping-cart-loaded.png"/>Labin town market <span class="badge">2.2 km</span></li>
				</ul>

				
				
				</div>
				
				
			</div>	
			
	</div>

	<div class="container">
			<div class="row facilities">
			
			
				<div class="col-md-6">
				
					
				<ul class="list-group listasadrzaja">
				
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/swimming.png"/>Rabac beaches <span class="badge">5 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/swimming.png"/>Duga Luka <span class="badge">3 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/swimming.png"/>Sv.Marina camping and beaches <span class="badge">5 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/swimming.png"/>Ravni <span class="badge">8 km</span></li>
				</ul>

							
				</div>
				
				
				<div class="col-md-6">
					
				<ul class="list-group listasadrzaja">
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" ><img class="iconImage" src="https://img.icons8.com/android/24/000000/airport.png"/>Pula airport <span class="badge">40 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" ><img class="iconImage" src="https://img.icons8.com/android/24/000000/ferry.png"/>Brestova ferry port <span class="badge">20 km</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/bus.png"/>Nearest bus-stop  <span class="badge">400 m</span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;"><img class="iconImage" src="https://img.icons8.com/android/24/000000/survival-bag.png"/>Health-care<span class="badge">3 km</span></li>
						
				</ul>

				
				
				</div>
				
				
			</div>	
	</div>

	<hr>
	<div class="container">
			<div class="row facilities">
			
			<div class="col-md-12">
			
							<p style="text-decoration: underline;">Property facilities:</p>

			</div>
				<div class="col-md-6">
				
					
				<ul class="list-group">
				
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" >Sun terrace <span class="badge ok"> <span class="glyphicon glyphicon-ok"></span></span></li>
<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" >Barbeque <span class="badge ok"> <span class="glyphicon glyphicon-ok"></span></span></li>						
<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" >Free parking <span class="badge ok"> <span class="glyphicon glyphicon-ok"></span></span></li>						
<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" >Pets allowed <span style="font-size: 12px;">*requires additional fee</span> <span class="badge ok"> <span class="glyphicon glyphicon-ok"></span></span></li>						
				</ul>

							
				</div>
				
				
				
				<div class="col-md-6">
					
				<ul class="list-group">
				
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" >Free WIFI<span class="badge ok"> <span class="glyphicon glyphicon-ok"></span></span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;">Satellite FTA channels<span style="font-size: 12px;"> *astra & hotbird sattellites</span> <span class="badge ok"><span class="glyphicon glyphicon-ok"></span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;">Air-conditioning <span style="font-size: 12px;">*requires additional fee</span><span class="badge ok "><span class="glyphicon glyphicon-ok"></span></li>
						<li class="list-group-item list-group-item-warning" style="height: 40px; padding: 5px 15px; font-size: 16px;" >Laundry machine<span class="badge ok"> <span class="glyphicon glyphicon-ok"></span></span></li>

						
				</ul>

				
				
				</div>
				
				
			</div>	
	</div>
	<hr>

	<div class="container">
			<div class="row">	
				<div class="col-md-12" >
					
						<p style="color: #848484;"  class="checkIncheckOut" >Check-in time: 15:00 - 22:30 </br>
							Check-out time: 10:00					
						</p>




				</div>
			</div>
		</div>

		<hr>

		<div class="container">
			<div class="row">	
				<div class="col-md-12" >
					
				<table class="table table-sm pricesTable" style="color:white; width:100%: ">
  <thead>
	  <tr>
		  <th colspan="6" style="text-align:center;">Prices season 2020</th>
	  </tr>
    <tr style="text-align:center;">
     
      <th scope="col">01.01. - 01.06.</th>
      <th scope="col">01.06. - 30.06.</th>
	  <th scope="col">01.07. - 20.07.</th>
	  <th scope="col">21.07. - 31.08..</th>
	  <th scope="col">01.09. - 30.09..</th>
	  <th scope="col">01.10. - 31.12.</th>
	



    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>30 &euro;</td>
      <td>35 &euro;</td>
	  <td>40 &euro;</td>
	  <td>45 &euro;</td>
      <td>35 &euro;</td>
      <td>30 &euro;</td>
    </tr>
   
  </tbody>
</table>

					</div>

				
			</div>
		</div>
		<hr>

		<div class="col-md-12">
			<div class="row">
				<h1 style="color:white; margin-bottom:10px;" class="contactUs">Contact us</h1> <h6 class="contactUs" style="color:#848484">Do you want to book this apartment, please contact us and we will get in touch with you as soon as possible</h6>
				<div class="col-md-6 formRows">
				
				<form action="<?php $_SERVER["PHP_SELF"];?>" method="post" id="form2">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name" required>
					</div>
				</div>
				<div class="col-md-6 formRows">
					<div class="form-group">
						<input type="text" name="email"  class="form-control" placeholder="Email"  required>
					</div>
				</div>
				<div class="col-md-6 formRows">
					<div class="form-group">
						<input type="text" name="apartment" class="form-control" value="Studio 2+0" placeholder="Apartment 4+0" readonly>
					</div>
				</div>

				<div class="col-md-12 formRows">
					<div class="form-group">
						<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
					</div>
				</div>
				<div class="col-md-12 formRows">
					<div class="form-group">
						<input id="btn3" type="submit" value="Send Message" name="submit" class="btn btn-primary">
					</div>
				</div>
				</form>
			

			</div>
			<span style="color:white;"><?php echo $userMessage ?></span>

		</div>
	</div>
	
	
	
	
	
	

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="copyright">
						<p><small>&copy;  <br> All Rights Reserved. <br>
						<a href=hotel.php" target="_blank">Apartment 4+0</a> <br> <a href="studio.php" target="_blank">Apartment Studio 2+0</a><br><a href="contact.php" target="_blank">Contact us</a></small></p>
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

	<script src="js/custom.js"></script>
	<script>



var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

	</script>
</body>
</html>