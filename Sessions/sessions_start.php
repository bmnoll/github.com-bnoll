<?php

    

// Start Session

session_start();



// Store a variable in the session

$_SESSION['name'] = 'Geneva College';

$_SESSION['person'] = 'Scott Madeira';

$_SESSION['zip'] = '16066';





echo "In session_start.php --> ";



// Read variable from session and print to screen

$name = $_SESSION['name'];

echo $name . "\n\n";