<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<!-- Mobile Specific Metas ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	<meta name="keywords" content="IEEESLSYWC18, IEEE Student YP WIE Congress Sri Lanka, Sri Lanka IEEE Congress, IEEE SL Section, IEEE ORG, IEEE, ieee.org, ieee.lk, Sri Lanka Section, Sri Lanka" >
  	<meta name="description" content="The IEEE Sri Lanka Section, for the 7th consecutive year, is getting ready to present the Sri Lankan IEEE enthusiasts with yet another memorable episode of the Sri Lanka Section Students / Young Professional / Women in Engineering Congress for 2018." >
	
  	<meta name="msapplication-TileColor" content="#ffffff">
  	<meta name="msapplication-TileImage" content="">
  	<meta name="url" content="https://sywc.ieee.lk" />
  	<meta name="owner" content="IEEE SLSYWC 2018" />
  	<meta name="author" content="Bhathiya Kariyawasam - IEEE SLSYWC Dev Team" />
  	<meta name="copyright" content="IEEE SLSYWC, 2018" />
  	<meta name="creation_Date" content="12/08/2018" />
  	<meta name="robots" content="all" />
  	<meta name="robots" content="follow" />
  	<meta name="google-translate-customization" content="">
  	<meta name="google-site-verification" content="" />
   
  	<!-- OG Properties -->
	
  	<meta property="og:locale" content="en_US" />
  	<meta property="og:type" content="website" />
  	<meta property="og:street-address" content=""/>
  	<meta name="og:locality" content=""/>
  	<meta name="og:region" content=""/>
  	<meta name="og:postal-code" content=""/>
  	<meta name="og:country-name" content="SRI LANKA"/>
	
  	<meta property="og:url" content="https://sywc.ieee.lk" />   
  	<meta property="og:site_name" content=" IEEE CONGRESS SRI LANKA SECTION" />
  	<meta property="og:title" content="IEEE Student|YP|WIE Congress 2019 | Sri Lanka Section" />
  	<meta property="og:description" content="The IEEE Sri Lanka Section, for the 10th consecutive year, is getting ready to present the Sri Lankan IEEE enthusiasts with yet another memorable episode of the Sri Lanka Section Students / Young Professional / Women in Engineering Congress for 2019." />

  	<!--Favicon-->
	<link rel="shortcut icon" href="images/SLSYWC19Logo-Dark.png" type="image/x-icon">
	<link rel="icon" href="images/SLSYWC19Logo-Dark.png" type="image/x-icon">

	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- CSS ================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Sponsor logo slider -->
	<link rel="stylesheet" href="css/infinite-slider.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="css/fontAwesome/fontawesome.css">
	<!-- ColorBox -->
	<link rel="stylesheet" href="css/colorbox.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

	<!-- Javascript =========================================== -->

  	<!-- JQuery Library -->
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	<!-- Slick -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<!-- Countdown JQuery -->
	<script type="text/javascript" src="js/jquery.jCounter-0.1.4.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Counterup JQuery -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<!-- ColorBox -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>

	<!-- Custom js -->
	<script type="text/javascript" src="js/custom.js"></script>

	<title>IEEE SYW CONGRESS 2019 | Sri Lanka Section</title>

	<script>
		$(document).ready(function(){
			$('.counter').counterUp();

			$(".countdown").jCounter({
				date: '28 December 2019 12:00:00',
				timezone: "Asia/Colombo",
			  	fallback: function() { console.log("count finished!") }
			});

			/* ----------------------------------------------------------- */
			/* Sponsor slider 
			/* ----------------------------------------------------------- */

			$('.customer-logos').slick({
			    slidesToShow: 4,
			    slidesToScroll: 1,
			    autoplay: true,
			    autoplaySpeed: 1000,
			    arrows: false,
			    dots: false,
			    pauseOnHover: true,
			    responsive: [{
			      	breakpoint: 768,
			      	settings: {
			        	slidesToShow: 4
			      	}
			    }, {
			      	breakpoint: 520,
			      	settings: {
			        	slidesToShow: 1
			      }
			    }]
	  		});
		});
		
	</script>
</head>
<body>
	<!-- Preloader -->
	<script>
		$(window).on("load", function() {
			$(".se-pre-con").fadeOut("slow");
		});
	</script>

	<!-- NAVBAR SECTION STARTS-->
	<?php require_once 'process/common/headers/index_navbar.php'?>
	<!-- NAVBAR SECTION ENDS -->

	<!-- HEADER SECTION STARTS-->
	<?php require_once 'process/common/sections/slider.php'?>
	<!-- HEADER SECTION ENDS -->

	<!-- INTRO SECTION STARTS-->
	<?php require_once 'process/common/sections/intro.php'?>
	<!-- INTRO SECTION ENDS -->

	<!-- FACTS SECTION STARTS-->
	<?php require_once 'process/common/sections/facts.php'?>
	<!-- FACTS SECTION ENDS -->

	<!-- GALLERY SECTION STARTS-->
	<?php require_once 'process/common/sections/gallery.php'?>
	<!-- GALLERY SECTION ENDS -->
	<div class="container"><hr></div>
	<!-- SPEAKERS SECTION STARTS-->
	<?php require_once 'process/common/sections/speakers.php'?>
	<!-- SPEAKERS SECTION ENDS -->
	<div style=" background-color: #eee;"><div class="container"><hr style="margin: 0;"></div></div>
	<!-- PARTNERS SECTION STARTS-->
	<?php require_once 'process/common/sections/partners.php'?>
	<!-- PARTNERS SECTION ENDS -->

	<!-- DELEGATES SECTION STARTS-->
	<?php require_once 'process/common/sections/regbg.php'?>
	<!-- DELEGATES SECTION ENDS -->

	<!-- NEWS SECTION STARTS-->
	<?php require_once 'process/common/sections/news.php'?>
	<!-- NEWS SECTION ENDS -->

	<!-- NEWSLETTER SECTION STARTS-->
	<?php #require_once 'process/common/sections/newsletter.php'?>
	<!-- NEWSLETTER SECTION ENDS -->

	<!-- VENUE SECTION STARTS-->
	<?php require_once 'process/common/sections/venue.php'?>
	<!-- VENUE SECTION ENDS -->

	<!-- FOOTER SECTION STARTS-->
	<?php require_once 'process/common/headers/footer.php'?>
	<!-- FOOTER SECTION ENDS -->

	<!-- FACEBOOK PLUGIN SECTION STARTS-->
	<?php require_once 'process/common/custom/facebook.php'?>
	<!-- FACEBOOK PLUGIN SECTION ENDS -->

	<!-- SPEAKERS MODALS BEGIN -->
	<?php require_once 'process/common/custom/speaker_modals.php'; ?>
	<!-- SPEAKERS MODALS ENDS -->
	
</body>
<div class="se-pre-con"></div>
</html>