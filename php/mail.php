<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Email: $email \n Message: $message";
$recipient = "simplyeatinghelp@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! <br/> <a href='../contact.php'>Go Back</a>";
?>