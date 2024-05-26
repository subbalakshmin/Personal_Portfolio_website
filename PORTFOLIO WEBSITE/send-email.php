<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $POST['subject'];
$msg= $_POST['msg'];
$to = "210701263@rajalakshmi.edu.in";
$subject = "Mail From Portfolio enquiry";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message = " . $msg;
$headers = "From: noreply@Subbuxyz.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>