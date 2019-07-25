jQuery(function($) {
  "use strict";

  	/* ----------------------------------------------------------- */
	/*  Preload
	/* ----------------------------------------------------------- */

	function handlePreloader() {

		if($('.preload').length){
			$('.preload').delay(220).fadeOut(500);
		}
	}


	/* ----------------------------------------------------------- */
	/*  Mobile Menu
	/* ----------------------------------------------------------- */

	jQuery(".nav.navbar-nav li a").on("click", function() { 
		jQuery(this).parent("li").find(".dropdown-menu").slideToggle();
		jQuery(this).find("i").toggleClass("fa-angle-down fa-angle-up");
	});


	/* ----------------------------------------------------------- */
	/*  Main slideshow
	/* ----------------------------------------------------------- */

		$('#main-slide').carousel({
			pause: true,
			interval: 100000,
		});


	/* ----------------------------------------------------------- */
	/*  Gallery popup
	/* ----------------------------------------------------------- */

	$(document).ready(function(){

	  	var width = $(window).width();

	  	if (width <= 750) {
	  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"190"});
	  	}else if((width > 750)&&(width <= 1024)){
	  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"400"});
	  	}else{
	  		$(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"950", innerHeight:"535"});
	  	}

		$(".popup").colorbox({iframe:true, innerWidth:950, innerHeight:550});

	});



	/* ----------------------------------------------------------- */
	/*  Counter
	/* ----------------------------------------------------------- */

		$('.counterUp').counterUp({
		 delay: 10,
		 time: 1000
		});


	
	/* ----------------------------------------------------------- */
	/*  Contact form
	/* ----------------------------------------------------------- */

	$('#contact-form').submit(function(){

		var $form = $(this),
			$error = $form.find('.error-container'),
			action  = $form.attr('action');

		$error.slideUp(750, function() {
			$error.hide();

			var $name = $form.find('.form-control-name'),
				$email = $form.find('.form-control-email'),
                $phone = $form.find('.form-control-phone'),
                $issue = $form.find('.form-control-issue'),
				$subject = $form.find('.form-control-subject'),
				$message = $form.find('.form-control-message');

			$.post(action, {
					name: $name.val(),
					email: $email.val(),
                    phone: $phone.val(),
                    issue: $issue.val(),
					subject: $subject.val(),
					message: $message.val()
				},
				function(data){
					$error.html(data);
					$error.slideDown('slow');

					if (data.match('success') != null) {
						$name.val('');
						$email.val('');
						$phone.val('');
						$issue.val('');
						$subject.val('');
						$message.val('');
					}
				}
			);

		});

		return false;

	});


	/* ----------------------------------------------------------- */
	/*  Back to top
	/* ----------------------------------------------------------- */

		$(window).scroll(function () {
			if ($(this).scrollTop() > 80) {
				 $('#back-to-top').fadeIn();
			} else {
				 $('#back-to-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-to-top').on('click', function () {
			 $('#back-to-top').tooltip('hide');
			 $('body,html').animate({
				  scrollTop: 0
			 }, 1000);
			 return false;
		});
		
		$('#back-to-top').tooltip('hide');

		
		/* Preloade */

		$(window).on('load', function() {
			handlePreloader();
		});


});