<?php

// Clean the input parameters to prevent XSS attacks
$firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

// Check if all required parameters are present
if (empty($firstname) || empty($lastname) || empty($age)) {
  // Display an error message if any of the required parameters are missing
  echo '<h1>Missing required parameters</h1>';
  exit;
}

// Calculate the days based on the number given for age
$days = $age * 365;

// Add the current date to the page
$date = date('Y-m-d');

// Output the two sentences

echo 'Hello, my name is ' . $firstname . ' ' . $lastname . '.';

// Output the conditional statement based on the age parameter
if ($age >= 18) {
  echo ' I am ' . $age . ' years old and I am old enough to vote in the United States.';
} else {
  echo ' I am ' . $age . ' years old and I am not old enough to vote in the United States.';
}

echo '</p>';

// Output the third sentence
echo '<p>';
echo   $days . ' days.';
echo '</p>';

// Output the current date
echo '<p>';
echo 'The current date is ' . $date . '.';
echo '</p>';

?>