<?php
// Author and Purpose of the code: Arvinder Kaur. To send email to client(Contact Form).

	$thankyouurl = "index.html" ;  // User will be redirected to this page after successful submission.
	$to = "jill@aggrowconsulting.com";  // Email of Morey Doner where message will be sent.

	$subject = "Hi Jill, someone contacted you on Contact Form"; // Subject line of email.


	$fname = $_POST['name'];  // Will save first name in the variable.
	$email = $_POST['email']; // Will save last name in the variable.
	$subjectf = $_POST['subject']; // Will save subject in the variable.
	$message = $_POST['message'];


$body = "Name: $fname\nEmail: $email\nSubject: $subjectf\nMessage: $message\n  ";
// This will be the body of the email.
$headers .= 'From: <kaura64@mcmaster.ca>' . "\r\n";  // This will be the from email.
mail($to, $subject, $body , $headers); // mail() function used to accuplish this.
header( "Location: $thankyouurl" ); // Header of the email.

exit

?>
