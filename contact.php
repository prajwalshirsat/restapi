<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $email_subject = $_POST["email_subject"];
    $message = $_POST["message"];

    // Your email address
    $to = "prajwalshirsat2105@gmail.com";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Email content
    $email_content = "Full Name: $full_name<br>";
    $email_content .= "Email: $email<br>";
    $email_content .= "Mobile Number: $mobile_number<br>";
    $email_content .= "Email Subject: $email_subject<br><br>";
    $email_content .= "Message:<br>$message";

    // Send the email
    mail($to, $email_subject, $email_content, $headers);

    // Redirect back to your website after sending the email
    header("Location: your-thank-you-page.html");
}
?>
