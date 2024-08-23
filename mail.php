<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number= $_POST['mobile'];

$to = "kamo.mokoteli4@gmail.com";

$subject = "Quotation From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message .
"\r\n Mobile number =" . $number;

$headers = "From: noreply@Ineffablegardenservice.co.za" . "\r\n" .
"CC: Pontshonicholas@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>