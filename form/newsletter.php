<?php

if(isset($_POST['action']) == 'newsletter_send') {


$first_name = $_POST['sender-firstname'];
$last_name = $_POST['sender-lastname'];
$email_address = $_POST['sender-email'];

$to = "admin@instafashion.io, gurpreetavatar@gmail.com";
$subject = 'Sign up from INSTAFASHION';
$from    = "From:".$email_address;
$message = "<table width=100% cellpadding='0' cellspacing='0' style='border:#aaaaaa solid 1px;'>";
$message .= "<tr><td style='background: rgba(251,243,234,1); color: #404040; font-size:24px; font-family:Arial, Helvetica, sans-serif; padding-top:15px; padding-bottom:15px; text-align:center;'>INSTAFASHION</td></tr>";
$message .= "<tr><td style='border-bottom:#f7931e solid 6px; background: #fff; padding:15px; color: #444444; font-size:14px; font-family:Arial, Helvetica, sans-serif;'>
<p style='font-size:14px; font-family:Arial, Helvetica, sans-serif; color: #444444; margin:0 0 10px 0; line-height:19px;'><strong>First Name:</strong> $first_name </p>
<p style='font-size:14px; font-family:Arial, Helvetica, sans-serif; color: #444444; margin:0 0 10px 0; line-height:19px;'><strong>First Name:</strong> $last_name </p>
<p style='font-size:14px; font-family:Arial, Helvetica, sans-serif; color: #444444; margin:0 0 10px 0; line-height:19px;'><strong>Email Address:</strong> $email_address </p></td></tr>";
$message .= "</table>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
$headers .= 'From:  ' . $first_name . ' <' . $email_address .'>' . " \r\n" .
            'Reply-To: '.  $email_address . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$params = '-f ' . $email_address;
if (mail ($to, $subject, $message, $headers, $params)) { 
          //  echo 'Your message has been sent!';

$HTTP_REFERER = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

		if($HTTP_REFERER == null)
			
			die("Invalid Referer. Output Message: {$hash}");

		header("Location: {$HTTP_REFERER}{$hash}#contact_alert_success");
	header("Location: {$HTTP_REFERER}#contact_alert_success");
		exit;
        } else { 
            echo '
 
Something went wrong, go back and try again!
 
'; 
        }
  
die();
}
?>