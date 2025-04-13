<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Received POST data: " . json_encode($_POST);
  $name = $_POST["name"];
  $email = $_POST["email"];
  $query = $_POST["query"];

  // Set your email address where you want to receive the form submissions
  $to = "jyash5332@gmail.com";
  $subject = "New Form Submission";

  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Query:\n$query";

  // Additional headers
  $headers = "From: $email";

  // Send email
  mail($to, $subject, $message, $headers);

  // Redirect to a thank-you page
  header("Location: index.html");
  exit;
}

?>
