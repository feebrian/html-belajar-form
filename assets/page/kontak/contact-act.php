<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {

  $mail   = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'adamaditama293@gmail.com'; //gmail account goes here
  $mail->Password = 'jultjfkezbvyxadb'; // app password goes here
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('adamaditama293@gmail.com'); //gmail account goes here

  $mail->addAddress($_POST['email']);

  $mail->isHTML(true);

  $mail->Subject  = $_POST['subject'];
  $mail->Body = $_POST['message']; 

  $mail->send();

  echo 
  "
  <script>
  alert('Pesan telah berhasil dikirim');
  document.location.href  = 'kontak.php';
  </script>
  ";

}