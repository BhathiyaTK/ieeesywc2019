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
	<link rel="stylesheet" href="css/fontawesome.css">
	<!-- ColorBox -->
	<link rel="stylesheet" href="css/colorbox.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

	<!-- Site Title -->
	<title>PARTNERS | IEEE SLSYWC 2019</title>

	<!-- JQuery Library -->
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

		$(function(){
			$(".request_form").on('submit', function(e1){
				e1.preventDefault();

				var name = $("#name").val();
				var company = $("#company").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var message = $("#message").val();

				$.ajax({
					type: "POST",
					url: "process/form_process/partner.php",
					data: {name:name,company:company,email:email,phone:phone,message:message},
					success: function(result){
						$("#partner-form-msg").html(result);
						$(".request_form")[0].reset();
					}
				});
			});
		});
	</script>

	<!-- NAVBAR SECTION STARTS-->
	<?php require_once 'process/common/headers/partners_navbar.php'?>
	<!-- NAVBAR SECTION ENDS -->

	<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banners/partners.jpg)">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        	<h2>Partners</h2>
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Page Banner end -->

	<section id="partners_sec">
		<div class="container">
			<div class="row partners_titles">
                <h2 class="section_title">Want to partner with us? Let us guide you.</h2>
                <p class="section_subtitle">Know and find everything you need to partner with us.</p>
            </div><!--/ Title row end -->
            <div class="title_divider"></div>

            <div class="row">
            	<div class="col-md-6">
            		<h3 class="title-classic left">Why Partner?</h3>
                    <p class="sppb-cta-text">
                        The world lacks the trust of the leaders. Young people bear the responsibility of restoring this hope and genuinely impact on the society. Therefore the guidance is crucial. It’s all about letting them discover themselves to find their hidden potential. <br><br>We are the youth of our country. We strive for excellence every time. We stop at nothing. We know that the peace and the development of mankind are in our hands. Youth Empowerment is not an option, it’s our responsibility and privilege to guide them to their highest goals and dreams of ensuring a better future. This is not just a congress. This is our dream, our desire to make a positive impact on youth and show to youth that there is a whole world beyond the sea but not just the horizon. That’s why we want to introduce new technologies, new industries, new trends to their line of sight to give them the experience what is beyond. We believe that the experience cannot be learned, it has to be witnessed.
                        <br><br>
                    </p>
                    <blockquote> We cordially invite you to become a part
                        of this project where you might actually
                        change lives for the betterment of the
                        country, for the betterment of the world
                        and for the betterment of the humanity.
                        Come join us to “Advance Technology for
                        Humanity”.
                    </blockquote>
            	</div>
            	<div class="col-md-6">
            		<h3 class="title-classic left"><font color="#b9ce33">Become a Partner</font> </h3>
                    <small><i>You can request our partnership proposal and get to know related stuff.</i> </small><br><br>

                    <form id="contact-form" class="request_form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company/Organization</label>
                                    <input class="form-control form-control-subject" name="subject" id="company" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control form-control-phone" name="phone" id="phone" placeholder="ex: 077xxxxxxx" type="tel" maxlength="10" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Additional Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="Any additional or specific information that you'd like to know from us?" rows="10"></textarea>
                        </div>
                        <br>
                        <div class="text-right">
                            <button class="btn btn-primary solid blank" type="submit" id="partner_req_btn">Request for Information</button>
                        </div>
                    </form>
                    <div id="partner-form-msg" style="margin-top: 20px;"></div>
                    <br><br>
            	</div>
            </div>


            <div class="accordion_sec">
            	<h3 class="title-classic left">Partnering in a Glance</h3>
            	
				<div class="accordion" id="accordionExample">
					<div class="row">
						<div class="col-md-6">
            			<div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          Access to Niche Market
						        </button>
						      </h2>
						    </div>

						    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Interact with the students at the venue and get a better penetration to the highly skilled student market.
						      		</div>
						      	</div>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Top Employer Branding
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Through the interaction with the students, you gain a platform to recruit them as potential employees for your company.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Discuss your company’s vision and values to create interest in students to work with you.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Contribute to training new skills and fostering talents.
						      		</div>
						      	</div>
						      </div>
						    </div>
						</div>
	            	</div>
	            	<div class="col-md-6">
	            		<div class="card">
						    <div class="card-header" id="headingThree">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Brand Visibility and awareness creation
						        </button>
						      </h2>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Media exposure through our media promotional campaigns.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Distribution of company flyers and leaflets to the youth.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Access to the participant database for online messages and promotions.
						      		</div>
						      	</div>
						      </div>
						    </div>
						</div>
						<div class="card">
						    <div class="card-header" id="headingThree">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
						          Why you should partner with IEEE?
						        </button>
						      </h2>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			IEEE Sri Lanka Section is a part of the biggest youth organization in the world.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Our members outperform academically and are technologically rich.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			HR who are aware about global trends and technologies.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			We are the #1 professional organization that offers standardized programs.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			We always stay responsible for all our stakeholders.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Customer centricity is a key aspect to be considered in the rapidly globalizing world. We understand the importance of customer relationship and stakeholder management.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Entrepreneurial and innovative in day to day business challenges.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			With rapidly changing external environment it is vital for organizations to have people who can think out of the box and come up with new ideas to adapt to changes.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			Resilient and progressive in challenging environments.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			The organizers of the conference are volunteers who fight to create a positive change with limited resources. The ability to deliver under challenging environments is very high compared to others with the right resources.
						      		</div>
						      	</div>
						      	<div class="row collapse_content">
						      		<div class="col-sm-1 col-md-1">
						      			<i class="far fa-hand-point-right fa-lg"></i>
						      		</div>
						      		<div class="col-sm-11 col-md-11">
						      			IEEE Sri Lanka Section consists of many techie, energetic and self-driven personalities.
						      		</div>
						      	</div>
						    </div>
						</div>
	            	</div>
				  </div>
					</div>
				</div>
            </div>
            <br><br><br>
            <div class="packages_sec">
            	<center><h3 class="title-classic">Partnership Packages</h3></center>
            	<center><h4>[ Partner packages details will update soon... ]</h4></center>
            	<!--img src="images/custom/packages.png" width="100%"-->
            	<br><br>
            	<center>
            		<a class="packages_download_link" href="#" download><i class="fa fa-download"></i> Download</a>
					</br> </br>
					<small><i>You can download the IEEE SLSYWC '19 - Partnership Packages Inforgraphic as a PDF.</i></small>
				</center>
            </div>
		</div>
	</section>
<hr>
	<section id="ts-sponsors" class="ts-sponsors">
	    <div class="container">
	        <div class="row partner_titles">
	            <h2 class="section_title">Partners</h2>
	            <p class="section_subtitle">We thank these organizations that make this event possible and grand.</p>
	        </div><!--/ Title row end -->
	        <div class="title_divider"></div>
	        <div class="row sponser_row">
	            <div class="col-md-4">
	                <h3 class="sponsor-title"><font color="#444444">Platinum Partner</font></h3>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <h3 class="sponsor-title"><font color="#444444">Gold Partner</font></h3>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <h3 class="sponsor-title"><font color="#444444">Silver Partner</font></h3>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	        </div>
	        <br><br>
	        <div class="row sponser_row">
	            <div class="col-md-3">
	                <h4 class="sponsor-title"><font color="#444444">Patriot Partner</font></h4>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <h4 class="sponsor-title"><font color="#444444">Venue Partner</font></h4>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <h4 class="sponsor-title"><font color="#444444">Gift Partner</font></h4>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <h4 class="sponsor-title"><font color="#444444">Outreach Partner</font></h4>
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	        </div>
	        <br><br>
	        <h4 class="sponsor-title"><font color="#444444">Event Partner</font></h4>
	        <div class="row sponser_row">
	            <div class="col-md-3">
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="sponsor_content">
	                	<a href="#" target="_blank" class="img-thumbnail">
		                  <img class="img-responsive" src="images/partners/sponsor.jpg" width="100%" alt="" title="Sponsor's Name"  />
		                </a>
		                <div class="sponsor-details">
		                	<h4 class="sponsor-name">Sponsor's Name</h4>
			                <p>
			                	Sponsor's description will be gone here...
			                </p>
			                <div class="sponsor-web-link">
								<a href="http://ieee.lk/" target="_blank"><i class="fas fa-globe-asia"></i></a>
								<a href="https://www.facebook.com/IEEESriLanka/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/company/sri-lanka-technological-campus/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="https://twitter.com/IEEEINSL" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/ieeeinsl/" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
		                </div>
	                </div>
	            </div>
	        </div>
	        <!--div class="row sponser_row">
	            <div class="col-md-3" style="margin: 0 auto;">
	                <a href="http://iasuom.org/" target="_blank" class="img-thumbnail">
	                    <img class="img-responsive" src="images/partners/iasuom.jpg" width="100%" alt="" title="IEEE Industry Application Society - University of Moratuwa" />
	                </a>
	                <div class="sponsor-details">
	                	<h4 class="sponsor-name">IEEE Industry Application Society - University of Moratuwa</h4>
		                <p>
		                	IAS University of Moratuwa student branch chapter is a special interest group within the IEEE University of Moratuwa student branch which focuses on bridging the gap between academia and industry. IAS UOM has more than 40 IAS student members from the Faculty of Engineering and the Faculty of Information Technology, University of Moratuwa.
		                </p>
		                <div class="sponsor-web-link">
							<a href="http://iasuom.org/" target="_blank"><i class="fas fa-globe-asia"></i></a>
						</div>
	                </div>
	            </div>
	        </div-->
	    </div><!--/ Container end -->
	</section><!-- Sponsors end -->

	<!-- FOOTER SECTION STARTS-->
	<?php require_once 'process/common/headers/footer.php'?>
	<!-- FOOTER SECTION ENDS -->

	<!-- FACEBOOK PLUGIN SECTION STARTS-->
	<?php require_once 'process/common/custom/facebook.php'?>
	<!-- FACEBOOK PLUGIN SECTION ENDS -->
</body>
<div class="se-pre-con"></div>
</html>