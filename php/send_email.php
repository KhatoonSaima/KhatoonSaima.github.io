<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sksaima9097@gmail.com";
    $subject = $_POST["subject"] ?? "Contact Form Submission";
    $message = "Name: " . $_POST["name"] . "\n" .
               "Email: " . $_POST["email"] . "\n\n" .
               $_POST["message"];
    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent!";
    } else {
        echo "Failed to send message.";
    }
}
?>
