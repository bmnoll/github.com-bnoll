<?php

// Load basic configuration parameters

require 'application_includes.php';



// Layout code for page





require 'RegisterView.php';



// Get authentication class

require_once 'RegisterClass.php';

require_once 'Auth.php';





// Display top of page

require 'header.php';



if ($requestType == 'GET') {

    

    // If already logged in then do not show this form

    if (Auth::check()) {

        echo '<h1 style="color:red">Already Logged in.  You cannot register</h1>';

    }

    

    // If data was previously entered, get it here

    $data = null;

    if (array_key_exists('regFormData', $_SESSION)) {

        $data = $_SESSION['regFormData'];

    }

    

    // Display Login Form

    RegisterView::registrationForm($data);

    

    

} elseif ($requestType == 'POST') {

    

    // Create User

    $res = RegisterClass::register($_POST);

    

    // Redirect to Login

    header('Location: /login.php');

    

} else {

    echo "Don't know what's going on here....";

}



// Display the footer

require 'footer.php';