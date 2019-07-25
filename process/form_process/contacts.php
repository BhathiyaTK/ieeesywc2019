<?php

$name = $_POST["name"];
$subject1 = $_POST["subject"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$issue = $_POST["issue"];
$message = $_POST["message"];

if (($name!=='')&&($subject1!=='')&&($email!=='')&&($phone!=='')&&($issue!=='')) {
	
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Inquiry has been sent successfully.</b></div>';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "To: hello@sywc.ieee.lk \r\n";
    $headers .= "X-Mailer: PHP/" . PHP_VERSION;

    $to = "hello@sywc.ieee.lk";
    $subject = "$subject1";
    $body =  "From : $name\n\nIssue : $issue\n\n$message\n\nTel : $phone\nEmail : $message";

    mail($to, $subject, $body, $headers);

}else{
	echo'<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> All the fields are required!</b></div>';
}

?>