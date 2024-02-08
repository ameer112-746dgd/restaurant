<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve the form data
  $name = $_POST["name"];
  $phone = $_POST["phone"];

  // Validate the form data
  if (empty($name) || empty($phone)) {
    // Handle empty fields
    echo "Please fill in all the required fields.";
  } elseif (!is_numeric($phone)) {
    // Handle invalid phone number
    echo "Please enter a valid phone number.";
  } else {
    // All checks passed, process the form data
    // ... Perform any necessary actions with the data (e.g., store it in a database, send an email, etc.)
    echo "Thank you for submitting the form!";
  }
} else {
  // Handle non-POST requests
  echo "Invalid request method.";
// Handle invalid phone number
echo "Oops! It seems like the phone number you entered is not valid. Please try again.";
}
?>