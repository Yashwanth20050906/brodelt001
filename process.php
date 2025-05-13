<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "brodelt.in@gmail.com";
    $subject = "New Fitness Consultation Request";
    
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $fitnessGoal = $_POST['fitnessGoal'];
    $fitnessLevel = $_POST['fitnessLevel'];
    $healthIssues = $_POST['healthIssues'];
    $message = $_POST['message'];
    
    // Create email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Phone: $phone\n";
    $emailContent .= "Age: $age\n";
    $emailContent .= "Height: $height cm\n";
    $emailContent .= "Weight: $weight kg\n";
    $emailContent .= "Fitness Goal: $fitnessGoal\n";
    $emailContent .= "Fitness Level: $fitnessLevel\n";
    $emailContent .= "Health Issues: $healthIssues\n";
    $emailContent .= "Message: $message\n";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email
    mail($to, $subject, $emailContent, $headers);
    
    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
} else {
    // If not a POST request, redirect to the main page
    header("Location: index.html");
    exit();
}
?> 
