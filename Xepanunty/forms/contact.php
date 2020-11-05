<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'xepanunty@gmail.com';


$to      = $receiving_email_address;
$subject = $_POST['subject'];
$message =$_POST['message'];
$headers = "From:". $_POST['email'] . "-" .  $_POST['name'] . "\r\n" .
    'Reply-To: webmaster@xepanunty.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$result =  mail($to, $subject, $message, $headers);
if ($result) {
    echo "OK";
}else {
    echo "Erro inesperado!";
}
?>
