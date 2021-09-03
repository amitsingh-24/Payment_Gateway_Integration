<?php
//get data from form

$name = $_POST['fullname'];
$email= $_POST['Email'];
$PaymentThrough= $_POST['Payment Through'];
$DonationMoney= $_POST['Donation Money']
$to = "yourEmail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $fullname . "\r\n  Email = " . $Email . "\r\n PaymentThrough =" . $PaymentThrough . "\r\n DonationMoney =" . $DonationMoney .;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
