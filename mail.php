<?php 
 $name = $_POST['name'];
 $email = $_POST['emailaddress'];
 $message = $_POST['message'];
 $number = $_POST['mobile'];

 $to = " serviceni8k@gmail.com  ";

 $subject = "Mail From codeconia";
 $txt = "Name = ". $name . "/r/n Email = " . $email . "/r/n Message = " . $message . "/r/n Mobile number =". $number;  

 $headers = "From: noreply@tkouti5.github.io/simo/contact.html.com " . "/r/n" .
 "CC: somebodyelse@example.com";
 if($email!=NULL){
    mail ($to,$subject,$txt,$headers);
    headers ("location:thankyou.html")
 }


?>