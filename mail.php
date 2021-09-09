<html>
<body>
    
<?php
//get data from form
if(isset($_POST['Submit'])){
    $fullname = $_POST['fullname'];
    $to = $_POST['Email'];
    $PaymentThrough= $_POST['Payment Through'];
    $DonationMoney= $_POST['Donation Money'];
    $from = "noreply@amitsingh-24.github.io";
    $subject = "Mail From Donation website";
    $txt ="Name = ". $fullname . "\r\n  Email = " . $Email . "\r\n PaymentThrough =" . $PaymentThrough . "\r\n DonationMoney =" . $DonationMoney .;
    $headers = "From: noreply@amitsingh-24.github.io" . "\r\n" .;
}
if($email!=NULL){
    mail($from,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
    
</body>
</html>
    
