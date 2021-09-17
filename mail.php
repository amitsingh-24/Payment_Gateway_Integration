<?php
ob_start(); //output buffering because I like it.

if (isset($_POST['submit'])) {
  // Process the form
  $message = "Thank you for Donating!";
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $PaymentThrough = $_POST['PaymentThrough'];
  $DonationMoney = $_POST['DonationMoney'];

$to = "thisisamitsingh007@gmail.com";
$subject = "Donation Reciept";
$body = " Donater Name/Name's: $fullname \n Donater E-mail: $email \n \n";

mail($to,$subject,$body);

}
?>


//redirect
//header("Location:thankyou.html");
    
    
