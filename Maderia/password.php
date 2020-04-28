<?php

// Load basic configuration parameters

require('./csc206/includes/application_includes.php');



// Layout code for page

require(FS_TEMPLATES . 'header.php');

require(FS_TEMPLATES . 'footer.php');



// Get featured resorts from the database

require_once(FS_INCLUDES . 'Auth.php');

$auth = new AuthenticationClass();



// Display top of page

header::render();





$hash = password_hash('qwerqwer', PASSWORD_DEFAULT);



echo 'Hash: ' . $hash . "<br><br>";



echo 'Try password asdfasdf --> ';

echo password_verify('asadfasdf', $hash) ? "TRUE" : "FALSE"; echo "<br><br>";



echo 'Try password qwerqwer --> ';

echo password_verify('qwerqwer', $hash) ? "TRUE" : "FALSE"; echo "<br><br>";



// Display the footer

footer::render();