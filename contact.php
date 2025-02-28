<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $query = $_POST['query'];

    // Validate input fields
    if (empty($name) || empty($email) || empty($query)) {
        echo "All fields are required.";
    } else {
        // Email receiver (change this to your email address)
        $to = "ambekarshraddhad2001@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nContact: $contact\n\nQuery: $query";

        // Email headers
        $headers = "From: $email\r\nReply-To: $email\r\n";

        if (mail($to, $subject, $body)) {
            echo "Message sent successfully!";
        } else {
            echo "Oops! Something went wrong.";
        }
      
    }
}
?>
