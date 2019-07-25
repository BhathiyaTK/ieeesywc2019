<?php

$name = $_POST["name"];
$company = $_POST["company"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

if (($name!=='')&&($company!=='')&&($email!=='')&&($phone!=='')) {
	
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Request has been sent successfully.</b></div>';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "To: hello@sywc.ieee.lk \r\n";
    $headers .= "X-Mailer: PHP/" . PHP_VERSION;

    $to = "hello@sywc.ieee.lk";
    $subject = "Information request from a partner";
    $body =  "From : $name, $company\n\n$message\n\nTel : $phone\nEmail : $message";

    mail($to, $subject, $body, $headers);

}else{
	echo'<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Red color fields are required!</b></div>';
}

?>