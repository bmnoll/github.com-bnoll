
<?php

    

// Start Session

session_start();



echo "In session_use.php --> ";





// Read variable from session and print to screen

$name = $_SESSION['person'];

echo $name . "\n\n";



echo $_SESSION['zip'];