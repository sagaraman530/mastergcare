<?php
function sendEmail($to, $subject, $message, $from) {
    $headers = "From: $from";
    return mail($to, $subject, $message, $headers);
}

function redirectBack() {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
        exit();
    } else {
        // Fallback URL if referer is not available
        header("Location: /");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "amanakhil336@gmail.com";
    $subject = "Test Email from PHP";
    $message = "This is a test email sent from PHP script.";
    $from = "sagaraman530@gmail.com";

    // Send the email
    if (sendEmail($to, $subject, $message, $from)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }

    // Redirect to the referring page
    redirectBack();
}
?>
