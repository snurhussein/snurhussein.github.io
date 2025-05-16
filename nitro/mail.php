<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$vehicle = $_POST['category-vehicle'];
$service = $_POST['category-service'];
$formcontent="From: $name \n Message: $message \n Mobile: $mobile \n Vehicle: $vehicle \n Service Required: $service";
$recipient = "safy@modernthings.net";
$subject = "Contact Form from VanCare Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>