<!DOCTYPE html>
<html>
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
		});
	</script>
</head>
<body>
	<!-- Preloader -->
	<script>
		$(window).on("load", function() {
			$(".se-pre-con").fadeOut("slow");
		});

		$(function(){
			$(".contact_form").on('submit',function(e2){
				e2.preventDefault();

				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var issue = $("#issue").val();
				var subject = $("#subject").val();
				var message = $("#message").val();

				$.ajax({
					type: "POST",
					url: "process/form_process/contacts.php",
					data: {name:name,email:email,phone:phone,issue:issue,subject:subject,message:message},
					success: function(data){
						$("#contact-msg").html(data);
						$(".contact_form")[0].reset();
					}
				});
			});
		});
	</script>

	<!-- NAVBAR SECTION STARTS-->
	<?php require_once 'process/common/headers/contact_navbar.php'?>
	<!-- NAVBAR SECTION ENDS -->

	<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banners/contact.jpg)">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        	<h2>Contact</h2>
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Page Banner end -->

	<!-- FOOTER SECTION STARTS-->
	<?php require_once 'process/common/sections/contact-content.php'?>
	<!-- FOOTER SECTION ENDS -->

	<!-- FOOTER SECTION STARTS-->
	<?php require_once 'process/common/headers/footer.php'?>
	<!-- FOOTER SECTION ENDS -->

	<!-- FACEBOOK PLUGIN SECTION STARTS-->
	<?php require_once 'process/common/custom/facebook.php'?>
	<!-- FACEBOOK PLUGIN SECTION ENDS -->

</body>
<div class="se-pre-con"></div>
</html>