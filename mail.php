<?php
ob_start(); //output buffering because I like it.

if (isset($_POST['submit'])) {
  // Process the form
  $message = "Thank you for registering! We will respond to your request shortly";
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $PaymentThrough = $_POST['PaymentThrough'];
  $DonationMoney = $_POST['DonationMoney'];
  


$to = "myemail@outlook.com";
$subject = "Registration Submission";
$body = " Donater Name/Name's: $name \n Donater E-mail: $email \n \n";

mail($to,$subject,$body);

}

?>


//redirect
//header("Location:thankyou.html");
    
    
