<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Hem... some data are missing to send this contact form... Try again!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'amandamartinez1988@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact - UXperiment: $name $email_adress ";
$email_body = "Hi! You received a new message from the contact form on the website UXperiment.\n\n"."Here is the details :\n\Name : $name\n\nEmail : $email_address\n\nMessage :\n$message";
$headers = "From: noreply@uxperiment.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
