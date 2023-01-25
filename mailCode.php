<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST['send'])) {
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $fullname = $firstname . ' ' . $lastname;
  $number = $_POST['number'];
  $email = $_POST['email'];
  $message = $_POST['message'];

// echo $firstname;
  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'khatribk10@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'anrsatviaolnucot'; // Gmail address Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom('khatribk10@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('khatribk10@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received ';
    $mail->Body = "<h3>Name : $fullname <br>Email: $email <br>Phone Number: $number <br> Message: $message</h3>";

    if($mail->send()){
      echo "Success"; // write success code here

    }else{
//write failedd code here
      header('Failed');
    }
    
  } catch (Exception $e) {
    //echo $e->getMessage();
  }
}
?>