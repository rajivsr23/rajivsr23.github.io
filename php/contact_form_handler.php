<?php
	/*From: rajivsr2309@gator4261.hostgator.com*/
	$name=$_POST['name'];
	$email_address = $_POST['email'];
	$subject='Contact Form Replies';
	$phone=$_POST['phone'];
	$message=$_POST['msg'];
	$body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n ".
	"Email: $email_address\n Phone Number: $phone \n Message: $message \n ";
	
	mail('rajivsr2309@gmail.com', $subject, $body);
	$url="http://rajivsr23.github.io/";
	header( "Location: $url" );
	

?> 