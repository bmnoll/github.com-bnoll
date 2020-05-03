<?php

// Load basic configuration parameters

require 'application_includes.php';



// Layout code for page

require 'AuthenticationView.php';



// Get authentication class

require_once 'Auth.php';





// Display top of page

require 'header.php';



if ($requestType == 'GET') {

    

    // If a redirect URL is set then capture it to the session

    $_SESSION['from'] = '/index.php';

    if (array_key_exists('from', $_GET)) $_SESSION['from'] = $_GET['from'];

    

    // Display Login Form

    AuthenticationView::loginForm();

    

} elseif ($requestType == 'POST') {

    Auth::login($_POST);

    

    if (Auth::check()){

        echo 'We are logged in';

        

        $redirect = "Location: " . $_SESSION['from'];

        unset($_SESSION['from']);

        

        header($redirect);

    }

    

    if (Auth::guest()){

        echo 'We are not logged in.';

    }

    

    

    

} else {

    echo "Don't know what's going on here....";

}



// Display the footer

require 'footer.php';