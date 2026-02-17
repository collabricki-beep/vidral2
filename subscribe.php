<?php

$myemail = 'you@yoursite.com';

$subscribeemail   = $_POST['subscribeemail'];

$to                     = $myemail;
$subscribeemail_subject = "Newsletter Subscription";
$subscribeemail_body    = "Newsletter Enquiry. Details are given below.\n Email: $subscribeemail";
$headers                = "From: $subscribeemail";
 
mail($to, $subscribeemail_subject, $subscribeemail_body, $headers);

?>