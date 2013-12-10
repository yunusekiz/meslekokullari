<?php
$to="email@demomail.com";/*Your Email*/
/*Your Email*/
$subject="Recuest showing from the website";
/*Issue*/
$date=date("l, F jS, Y");
$time=date("h:i A");
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$telephone=$_REQUEST['telephone'];
$date=$_REQUEST['date'];
$msg="
	
	Message sent from website on date  $date, hour: $time.\n
	
	Name: $name\n
	Email: $email\n
	Telephone: $telephone\n
	Showing Date: $date\n
	";
if($email=="" or $name=="" or $telephone=="" or $date=="") {
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
