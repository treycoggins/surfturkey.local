<?php

  if ($_SERVER["REQUEST_METHOD"] === "POST"){
    //collect form data
    $fname = $_POST["first-name"];
    $lname = $_POST["last-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $bizname = $_POST["business-name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zip-code"];
    $comments = $_POST["comments"];


  //configure email
  $to = "info@surfturkey.net";
  $subject = "New Contact Form Submission!";
  $headers = "From: $email";

  //compose email message
  $email_message = "Name: $fname $lname\n";
  $email_message .= "Email: $email\n";
  $email_message .= "Phone Number: $phone\n";
  $email_message .= "Business Name: $bizname\n";
  $email_message .= "Address: $address\n";
  $email_message .= "City: $city\n";
  $email_message .= "State: $state\n";
  $email_message .= "Zip Code: $zipcode\n";
  $email_message .= "Comments: $comments\n";

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