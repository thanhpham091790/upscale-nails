<?php 
$ToEmail = 'thanhpham091790@gmail.com'; 
$EmailSubject = $_POST["subject"]; 

$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

$MESSAGE_BODY = "Customer name: ".$_POST["name"]." send to you a message from website upscalenailsdenver.com. "; 
$MESSAGE_BODY .= "The customer's email is : ".$_POST["email"].", and "; 
$MESSAGE_BODY .= "the message is : ".nl2br($_POST["comment"]).""; 

if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)){
    echo "Your message has successfully sent to us. We'll connect again soon. <a href='http://www.upscalenailsdenver.com/'>Return website</a>";
}else{
    echo "Failure";
}

