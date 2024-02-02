<?php

var_dump($_POST);

  if ($_SERVER['REQUEST_METHOD'] === "POST"){
    //collect form data
    $interests = $_POST["interests"];
    $company_size = $_POST["company-size"];
    $name = $_POST["full-name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $message = $_POST["message"];



  //configure email
  $to = "info@surfturkey.net";
  $subject = "New Contact Form Submission!";
  $headers = "From: $email";

  //compose email message
  $email_message = "Selected interests: " . implode(", ", $interests) . "\n";
  $email_message .= "Company size: $company_size\n";
  $email_message .= "Full name: $name\n";
  $email_message .= "Email address: $email\n";
  $email_message .= "Web address: $website\n";
  $email_message .= "Message:  $message\n";


  //send the mail
  $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
      header("Location: http://{$_SERVER['HTTP_HOST']}/form-response");
      die();
    } else {
      echo "I'm sorry, something went wrong. Please try again later.";
    }

  } else {
    echo "Invalid request.";
  }


?>