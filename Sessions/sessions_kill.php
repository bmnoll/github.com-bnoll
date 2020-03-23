<?php

    

// Start Session

session_start();



echo "In session_kill.php --> ";

session_destroy();



sleep(2);



// Read variable from session and print to screen



if (array_key_exists('name', $_SESSION)) {

    $name = $_SESSION['name'];

    echo $name . "\n\n";

} else {

    echo "Session variable not found...\n";

}    