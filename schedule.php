<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<!-- Mobile Specific Metas
	================================================== -->
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

	<!-- Site Title -->
	<title>SCHEDULE | IEEE SLSYWC 2019</title>

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
	</script>

	<!-- NAVBAR SECTION STARTS-->
	<?php require_once 'process/common/headers/schedule_navbar.php'?>
	<!-- NAVBAR SECTION ENDS -->

	<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banners/schedule.jpg)">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        	<h2>Schedule</h2>
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Page Banner end -->

	<section id="schedule-section" class="main-container">
		<div class="container">
			<div class="row schedule_titles">
				<h2 class="section_title">Agenda</h2>
				<p class="section_subtitle">Don't Miss any Session Throughout All 3 Days</p>
				<!--p class="section-sub-title"><font color="#D50B0E"><i>Last Update.</i></font></p-->
			</div><!--/ Title row end -->
			<div class="title_divider"></div>
			<br><br>
			<div class="row">
				<div class="schedule_tabs">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
						    <a class="nav-link active" id="pills-day1-tab" data-toggle="pill" href="#pills-day1" role="tab" aria-controls="pills-day1" aria-selected="true">Day One</a>
						</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="pills-day2-tab" data-toggle="pill" href="#pills-day2" role="tab" aria-controls="pills-day2" aria-selected="false">Day Two</a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="pills-day3-tab" data-toggle="pill" href="#pills-day3" role="tab" aria-controls="pills-day3" aria-selected="false">Day Three</a>
					  	</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">

						<!-- TAB PANE ONE ENDS -->
                        <?php require_once 'process/schedule/tab1.php'?>
                        <!-- TAB PANE ONE ENDS -->


                        <!-- TAB PANE TWO STARTS -->
                        <?php require_once 'process/schedule/tab2.php'?>
                         <!-- TAB PANE TWO ENDS -->


                        <!-- TAB PANE THREE STARTS -->
                        <?php require_once 'process/schedule/tab3.php'?>
                        <!-- TAB PANE THREE ENDS -->

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER SECTION STARTS-->
	<?php require_once 'process/common/headers/footer.php'?>
	<!-- FOOTER SECTION ENDS -->

	<!-- FACEBOOK PLUGIN SECTION STARTS-->
	<?php require_once 'process/common/custom/facebook.php'?>
	<!-- FACEBOOK PLUGIN SECTION ENDS -->
</body>
<div class="se-pre-con"></div>
</html>