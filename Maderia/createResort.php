
<?php

// Load basic configuration parameters

require('./csc206/includes/application_includes.php');



// Layout code for page

require(FS_TEMPLATES . 'header.php');

require(FS_TEMPLATES . 'footer.php');

require(FS_TEMPLATES . 'createform.php');



// Get authentication class

require_once(FS_INCLUDES . 'ResortsClass.php');

require_once(FS_INCLUDES . 'Auth.php');



// Require that you be logged in to see this page

if (Auth::guest()) header("Location: /login.php?from=" . $_SERVER['SCRIPT_NAME']);



// Display top of page

header::render();



if ($requestType == 'GET') {

 

    // show the form

    createform::render();

} else {

    // Process the form - assuming this is a POST request

    

    // Show the field data that was POSTed to the server

    // dd($_POST, false);

    // Show the information about the image that was POSTed to the server

    // dd($_FILES, true);

    

    // Save the field information (metadata) to the database

    $resorts = new ResortsClass();

    $resorts->saveResort();

    

    // Save the image file

    $resorts->saveImage();

    

    header('Location: /listResorts.php');

}



footer::render();

?>