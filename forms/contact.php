if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email address where the form data will be sent
    $to = "gentilityisworthwhile@gmail.com";

    // Subject of the email
    $subject = "Contact Form Submission";

    // Compose the email message
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    $mailResult = mail($to, $subject, $messageBody, $headers);

    // Check if the email was sent successfully
    if ($mailResult) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}