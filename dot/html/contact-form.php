<?php
$to="email@demomail.com";/*Your Email*/

$subject="Message from the website";

$date=date("l, F jS, Y");
$time=date("h:i A");
$firstName=$_REQUEST['first-name'];
$lastName=$_REQUEST['last-name'];
$email=$_REQUEST['email'];
$website=$_REQUEST['website'];
$message=$_REQUEST['message'];
$msg="
	Message sent from website on date  $date, hour: $time.\n	
	First Name: $firstName\n
	Last Name: $lastName\n	
	Email: $email\n	
	Website: $website\n
	message: $message
	";
if($email=="" or $firstName=="" or $message=="") {
echo "<div class='alert alert-error'>
		  <a class='close' data-dismiss='alert'>×</a>
		  <strong>Warning!</strong> Please fill all the fields.
	  </div>";
} else {
mail($to,$subject,$msg,"From:".$email);
echo "<div class='alert alert-success'>
		  <a class='close' data-dismiss='alert'>×</a>
		  <strong>Thank you for your message!</strong>
	  </div>";
}
?>
