<?php

// Author and Purpose of the code: Arvinder Kaur. To send email to client. 

	$thankyouurl = "index.html" ;  // User will be redirected to this page after successful submission.
	$to = "jill@aggrowconsulting.com";  // Email of Morey Doner where message will be sent.

	$subject = "Hi Jill, someone contacted you on your Website AgScouter's App"; // Subject line of email.


	$fname = $_POST['fname'];  // Will save first name in the variable.

$body = "Email: $fname\n  ";
// This will be the body of the email.
$headers .= 'From: <kaura64@mcmaster.ca>' . "\r\n";  // This will be the from email.
mail($to, $subject, $body , $headers); // mail() function used to accuplish this.
header( "Location: $thankyouurl" ); // Header of the email.

exit

?>
