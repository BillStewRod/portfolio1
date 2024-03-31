<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'billstewrod@icloud.com';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nSubject: $subject\n\nMessage:\n$message";

    mail($to, $subject, $body, $headers);
}
?>