 
<?php
ob_start();
//get data from form
if (isset($_POST['submit'])){ 
 $message = "Thank you for Donating.";
 $fullname = $_POST['fullname'];
 $email = $_POST['Email'];
 $PaymentThrough= $_POST['PaymentThrough'];
 $DonationMoney= $_POST['DonationMoney'];
 
$to = "thisisamitsingh007@gmail.com";
$subject = "Mail From Donation website";
$txt ="Name: $fullname  \n  Email: $email  \n Payment Through:  $PaymentThrough  \n Donation Money:  $DonationMoney ";
//$headers = "From: noreply@amitsingh-24.github.io" . "\r\n" .;


mail($to,$subject,$txt);

}
//redirect
//header("Location:thankyou.html");
?>
    
    
