<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'vkill7595@gmail.com'; // Replace with your email address
  $subject = 'New form submission';
  $body = "Name: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $body)) {
    echo "Thank you for your submission!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
