<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$subject = $_POST['subject'];

    // Email details
    $to = "kushalsah5546@gmail.com";
    $subject1 = $subject;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject1, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
