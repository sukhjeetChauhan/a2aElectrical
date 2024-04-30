<?php

if(empty($errors))
{
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];

$mailheader= "From:".$name."<".$email.">\r\n";

$recipient = "aeles786@gmail.com";

$subject = "New Job from $name";

$body = "Here are the details:\n Name:$name \n".
"Email: $email\n Phone Number: $phone\n Message: $message";

mail($recipient, $subject, $body);
header('Location: thankyou.html');
}

?>