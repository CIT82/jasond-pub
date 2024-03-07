<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
// Email information
$to = "example@example.com"; // Change this to your email address
$subject = "New Signup";
$message = "Username: " . $username . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Password: " . $password . "\n";
// Send email
if (mail($to, $subject, $message)) {
echo "Thank you for signing up! We will get in touch with you shortly.";
} else {
echo "Oops! Something went wrong and we couldn't send your message.";
}
} else {
// If the form is not submitted, redirect back to the form page
header("Location: index.html");
exit;
}
?>
