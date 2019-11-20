<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<!-- Mobile Specific Metas ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	<meta name="keywords" content="IEEESLSYWC19, IEEE Student YP WIE Congress Sri Lanka, Sri Lanka IEEE Congress, IEEE SL Section, IEEE ORG, IEEE, ieee.org, ieee.lk, Sri Lanka Section, Sri Lanka" >
  	<meta name="description" content="The IEEE Sri Lanka Section, for the 10th consecutive year, is getting ready to present the Sri Lankan IEEE enthusiasts with yet another memorable episode of the Sri Lanka Section Students / Young Professional / Women in Engineering Congress for 2019." >
	
  	<meta name="msapplication-TileColor" content="#ffffff">
  	<meta name="msapplication-TileImage" content="">
  	<meta name="url" content="https://sywc.ieee.lk" />
  	<meta name="owner" content="IEEE SLSYWC 2019" />
  	<meta name="author" content="Bhathiya Kariyawasam - IEEE SLSYWC Dev Team" />
  	<meta name="copyright" content="IEEE SLSYWC, 2019" />
  	<meta name="creation_Date" content="30/09/2019" />
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
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../../css/fontAwesome/fontawesome.css">
	<!-- ColorBox -->
	<link rel="stylesheet" href="../../css/colorbox.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="../../css/animate.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

	<!-- Javascript =========================================== -->

  	<!-- JQuery Library -->
	<script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<!-- Counterup JQuery -->
	<script type="text/javascript" src="../../js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="../../js/jquery.waypoints.min.js"></script>
	<!-- ColorBox -->
	<script type="text/javascript" src="../../js/jquery.colorbox.js"></script>

	<!-- Custom js -->
	<script type="text/javascript" src="../../js/custom.js"></script>

	<title>Registration Status | IEEE SYW CONGRESS 2019</title>

	<style>
		.reg-msg{
			height: 100vh;
			padding: 60px 0;
			background-image: linear-gradient(to right bottom, #b9ce33, #1d6738);
		}
		.reg-container{
			width: 65%;
			margin: 0 auto;
			border: 1px solid #ccc;
			border-radius: 10px;
			padding: 40px 40px 20px;
			box-shadow: 1px 4px 15px 1px rgba(0,0,0,0.5);
			background-color: #fff;
		}
		.img-div{
			text-align: center;
		}
		.reg-content-msg{
			font-family: Open Sans;
			text-align: center;
			font-size: 14px;
		}
		.home-btn{
			margin-top: 20px;
			text-align: center;
		}
	</style>
</head>
<body>

	<script>
		$(window).on("load", function() {
			$(".se-pre-con").fadeOut("slow");
		});
	</script>

<?php

require_once '../../db/db_config.php';

$name = mysqli_real_escape_string($conn,$_POST["name"]);
$gender = mysqli_real_escape_string($conn,$_POST["gender"]);
$nic = mysqli_real_escape_string($conn,$_POST["nic"]);
$uni = mysqli_real_escape_string($conn,$_POST["uni"]);
$faculty = mysqli_real_escape_string($conn,$_POST["faculty"]);
$academic = mysqli_real_escape_string($conn,$_POST["academic"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$phone = mysqli_real_escape_string($conn,$_POST["phone"]);
$tsize = mysqli_real_escape_string($conn,$_POST["tsize"]);
$food = mysqli_real_escape_string($conn,$_POST["food"]);
$os = mysqli_real_escape_string($conn,$_POST["os"]);
$member = mysqli_real_escape_string($conn,$_POST["member"]);
$mem_no = mysqli_real_escape_string($conn,$_POST["mem_no"]);
$syw = mysqli_real_escape_string($conn,$_POST["syw"]);
$joined = mysqli_real_escape_string($conn,$_POST["joined"]);
$year = mysqli_real_escape_string($conn,$_POST["year"]);
$exp = mysqli_real_escape_string($conn,$_POST["exp"]);
$track = mysqli_real_escape_string($conn,$_POST["track"]);
$message = mysqli_real_escape_string($conn,$_POST["message"]);

$sql = "INSERT INTO deligates(name,gender,nic,university,faculty,academic,email,mobile,tshirt_size,member,member_no,syw,joined,year,exp,track,message,food,os) VALUES('$name','$gender','$nic','$uni','$faculty','$academic','$email','$phone','$tsize','$member','$mem_no','$syw','$joined','$year','$exp','$track','$message','$food','$os')";

if ($conn->query($sql)) {

?>
	<section class="reg-msg">
		<div class="reg-container">
			<div class="img-div">
				<img src="../../images/SLSYWC19Logo-Dark.png" width="12%">
			</div>
			<br>
			<div class="alert alert-success" style="text-align: center; font-family: Open Sans; padding-top: 20px;"><h5><i class="fas fa-check-circle fa-lg"></i> <b>Registration successfully completed!</b></h5></div>
			<div class="reg-content-msg">
				<h6 class="mt-4 mb-3">Hello <b><?php echo $name; ?></b>!</h6>
				Thank you for your registration as a delegate in IEEE Sri Lanka section Student/ Young Professionals/ Women in Engineering Congress 2019. We will send you the confirmation mail after the selection process.<br><br>
				Stay tuned!<br><br>
				<small>Regards,<br>IEEE SL SYW Congress'19 Organizing Committee</small>
			</div>
			<hr>
			<div class="home-btn">
				<a class="btn btn-primary btn-sm" href="../../index.php">Go back to Home</a>
			</div>
		</div>
	</section>
<?php
	
	$headers = "From: hello@sywc.ieee.lk \r\n";
    $headers .= "Reply-To: hello@sywc.ieee.lk \r\n";
    $headers .= "To: $email \r\n";
    $headers .= "X-Mailer: PHP/" . PHP_VERSION;

    $to = "$email";
    $subject = "IEEE SL SYW Congress 2019";
    $body =  "Hello,\n\nThank you for your registration as a delegate in IEEE Sri Lanka section Student/ Young Professionals/ Women in Engineering Congress 2019. We will send you the confirmation mail after the selection process. \nStay tuned!\n\n
Regards,\n
IEEE SL SYW Congress'19 Organizing Committee";

    mail($to, $subject, $body, $headers);
    
}else{

?>
	<section class="reg-msg">
	<br><br>
		<div class="reg-container">
			<div class="img-div">
				<img src="../../images/SLSYWC19Logo-Dark.png" width="12%">
			</div>
			<br>
			<div class="alert alert-danger" style="text-align: center; font-family: Open Sans; padding-top: 20px;"><h5><i class="fas fa-times-circle fa-lg"></i> <b>Registration Failed!</b></h5></div>
			<div class="reg-content-msg">
				Something went wrong due to higher accessibility of IEEE Sri Lanka section Student/ Young Professionals/ Women in Engineering Congress 2019 website. <b>Please try again</b>.<br><br>
				<small>Regards,<br>IEEE SL SYW Congress'19 Organizing Committee</small>
			</div>
			<hr>
			<div class="home-btn">
				<a class="btn btn-primary btn-sm" href="../../register.php">Go back to Registration</a>
			</div>
		</div>
	</section>

<?php
}

?>

</body>
<div class="se-pre-con"></div>
</html>

