
<?php

    

// Start Session

session_start();



// Store a variable in the session

$_SESSION['name'] = 'Geneva College';





// Read variable from session and print to screen

$name = $_SESSION['name'];

echo $name . "\n\n";



// Destroy all session variables

session_unset();



// Try to get name again

$name = $_SESSION['name'];

echo $name;