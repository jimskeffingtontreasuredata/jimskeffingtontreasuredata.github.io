<?php
session_start(); // Start the session to access session variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted data
    $firstName = htmlspecialchars($_POST['html_first_name']); // Sanitize input

    // Here you can add code to handle the data, like saving it to a database or a file.
    
    // Set a success message in the session
    $_SESSION['success_message'] = "Thank you, $firstName! Your message has been received.";

    // Redirect back to the form page
    header("Location: your_form_page.php"); // Change to the actual name of your form page
    exit();
}
?>
