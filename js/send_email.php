<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Compose the email message
$to = 'raza786.haider@gmail.com';
$headers = "From: $email" . "\r\n";
$message = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage: $message";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>
