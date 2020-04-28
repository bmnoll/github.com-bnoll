<?php

// Load basic configuration parameters

require('./csc206/includes/application_includes.php');



// Get authentication class

require_once(FS_INCLUDES . 'UploadClass.php');

require_once(FS_INCLUDES . 'Auth.php');



// Layout code for page

require(FS_TEMPLATES . 'header.php');

require(FS_TEMPLATES . 'footer.php');

require(FS_TEMPLATES . 'UploadView.php');



// Require that you be logged in to see this page

if (Auth::guest()) header("Location: /login.php?from=" . $_SERVER['SCRIPT_NAME']);



// Display top of page

header::render();



if ($requestType == 'GET') {

    

    // Show the file upload form

    

} elseif ($requestType == 'POST') {

    

    // Get data from the form

    $data = $_POST;



    $file = $_FILES;

   

    // Redirect to list of users

    header('Location: /listUsers.php');

    

} else {

    echo "Don't know what's going on here....";

}



// Display the footer

footer::render();