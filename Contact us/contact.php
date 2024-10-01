<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Send email
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Contact Us Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Contact saved successfully and email sent!";
    } else {
        echo "There was a problem sending the email.";
    }
}
?>
