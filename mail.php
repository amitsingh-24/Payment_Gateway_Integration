  <?php 
  if(isset($_POST['submit'])){
      $to = "thisisamitsingh007@gmail.com"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $fullname = $_POST['fullname'];
      $PaymentThrough= $_POST['PaymentThrough'];
      $DonationMoney= $_POST['DonationMoney'];
      $subject = "Donation Money";
      $subject2 = "Copy of your Donation Receipt";
      $message = $fullname . " " . "\n\n" . $PaymentThrough .  "\n\n" .  $DonationMoney . "\n\n" .  $_POST['message'];
      $message2 = "Here is a copy of your message " .  $fullname . " " . "\n\n" . $PaymentThrough .  "\n\n" .  $DonationMoney . "\n\n" . $_POST['message'];
  
      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo "Mail Sent. Thank you " . $fullnmae . ",Thanks for Donating.";.
      }
  ?>


//redirect
//header("Location:thankyou.html");
    
    
