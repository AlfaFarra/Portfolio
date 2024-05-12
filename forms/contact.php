<?php
  
  $receiving_email_address = 'ffligutom@gmail.com';
  $headers[] = $_POST['name'];
  $headers[] = $_POST['email'];


  $to = $receiving_email_address;
  $subject = $_POST['subject'];
  $message = $_POST['message'];

if(mail($to, $subject, $message, implode("\r\n", $headers))) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}

?>
