<?php
 

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'thisisamitsingh007@gmail.com';

  
  $contact->to = $receiving_email_address;
  $contact->fullname = $_POST['fullname'];
  $contact->email = $_POST['email'];
  $contact->PaymentThrough = $_POST['PaymentThrough'];
  $contact->DonationMoney = $_POST['DonationMoney'];

  $contact->add_message( $_POST['fullname'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['PaymentThrough'], 'PaymentThrough' );
  $contact->add_message( $_POST['DonationMoney'], 'DonationMoney');

  echo $contact->send();
?>

//redirect
//header("Location:thankyou.html");
    
    
