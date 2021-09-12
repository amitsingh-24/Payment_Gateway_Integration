 
<?php
ob_start();
//get data from form
if (isset($_POST['submit'])){
 $subject = $_POST['Mail From Donation website'];
 $message = $_POST['Thank you for Donating.'];
 $fullname = $_POST['fullname'];
 $email = $_POST['Email'];
 $PaymentThrough= $_POST['PaymentThrough'];
 $DonationMoney= $_POST['DonationMoney'];
 $headers = 'From:'. $email2 . "rn"; // Sender's Email
 $headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
 
 
 mail("thisisamitsingh007@gmail.com", $subject, $message, $fullname, $email, $Paymentthrough, $DonationMoney, $headers);
 
 
} 
 
//$to = "thisisamitsingh007@gmail.com";
//$subject = "Mail From Donation website";
//$txt ="Name: $fullname  \n  Email: $email  \n Payment Through:  $PaymentThrough  \n Donation Money:  $DonationMoney ";
//$headers = "From: noreply@amitsingh-24.github.io" . "\r\n" .;

//mail($to,$subject,$txt);


//redirect
//header("Location:thankyou.html");
?>
    
    
