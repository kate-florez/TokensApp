




<?php 

$to = 'lebedeva.kait@gmail.com';
$name = $_POST['name'];
$mail = $_POST['email'];
$mess = $_POST['mess'];

// Title of mail
$subject  = "New message TokesApp";
$headers  = "From: " . strip_tags($mail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($mail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Content of mail
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Message from BukuGames</h2>\r\n";
$msg .= "<p><strong>From:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$mail."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$mess."</p>\r\n";

mail($to, $subject, $msg, $headers)

?>