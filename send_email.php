<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your-email@example.com"; // Replace with your email
    $subject = "Message from $name";
    $body = "You received a new message from $name ($email):\n\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for reaching out! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again.";
    }
}
?>
