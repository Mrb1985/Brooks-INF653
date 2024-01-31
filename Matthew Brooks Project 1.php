<?php

// filter parameters for XSS attacks
$firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

// Check if parameters exist
if (empty($firstname) || empty($lastname) || empty($age)) {
  echo '<h1>Missing parameters</h1>';
  exit;
}

// Calculate days
$days = $age * 365;

// Current date
$date = date('Y-m-d');


// Output name
echo 'Hello, my name is ' . $firstname . ' ' . $lastname . '.';

// Output age along with string
if ($age >= 18) {
  echo ' I am ' . $age . ' years old and I am old enough to vote in the United States.';
} else {
  echo ' I am ' . $age . ' years old and I am not old enough to vote in the United States.';
}



// Output number of days

echo   $days . ' days.';


// Output date

echo 'The date is ' . $date . '.';


?>

