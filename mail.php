 
<?php
//get data from form
if (isset($_POST['submit'])) {
  $message = "Thank you for Donating.";
  $fullname = $_POST['fullname'];
  $email = $_POST['Email'];
  $PaymentThrough= $_POST['Payment Through'];
  $DonationMoney= $_POST['Donation Money'];
 
$from = "noreply@amitsingh-24.github.io";
$subject = "Mail From Donation website";
$txt ="Name: $fullname  \n  Email: = $Email  \n PaymentThrough: = $PaymentThrough  \n DonationMoney:  $DonationMoney ";
$headers = "From: noreply@amitsingh-24.github.io" . "\r\n" .;


mail($from,$subject,$txt,$headers);

}
//redirect
header("Location:thankyou.html");
?>
    
    
