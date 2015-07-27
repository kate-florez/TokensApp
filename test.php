<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$name = '������';
$mail = 'dsfdsfdsf@ya.ru';
$mess = 'test test';
$phone = '12321213';
$to = 'lebedeva.kait@gmail.com'; 
//$to = 'lebedeva.kait@gmail.com'; 
$message = "
Name: $name <br>
Email: $mail  <br>
Phone: $phone  <br>
mess: $mess  <br>
";


$email = new PHPMailer();
$email->CharSet = 'UTF-8';
$email->IsSMTP();
$email->SMTPDebug = 0;
$email->SMTPAuth = true;
$email->SMTPSecure = "tls";
$email->Host = "smtp.gmail.com";
$email->Port = 587;
$email->IsHTML(true);
$email->Username = "server@adorika.com";
$email->Password = "ador2929";
$email->SetFrom("info@unigent.com");

$email->FromName = 'Unigent';
$email->Subject = 'מייל מצור קשר חיפוש משרה';
$email->Body = $message;
//$email->AddAddress( 'lebedeva.kait@gmail.com' );
$email->AddAddress($to);

$result = $email->Send();

var_dump($result);
exit;

if ($result) {
    $send = true;
    echo "success!!!";
}

?>