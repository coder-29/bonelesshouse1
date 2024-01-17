<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace 'your_email@example.com' with your actual email address
    $to = 'ahmadsharkawi29@gmail.com';
    $subject = 'New Message from Contact Form';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mailBody = "Username: $username<br>";
    $mailBody .= "Email: $email<br>";
    $mailBody .= "Message: $message<br>";

    // Send email
    mail($to, $subject, $mailBody, $headers);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit();
}

?>
