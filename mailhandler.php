<?php
	if(isset($_POST['submit'])){
	$email=$_POST['email'];

	$to='info@mitchconstruction.com';
	$subject='Newsletter Subscription';
	$message="$email;
	$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Message Sent Successfully! Thank you, We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
	}
}
?>