<?php

// Load basic configuration parameters

require('./csc206/includes/application_includes.php');



// Get authentication class

require_once(FS_INCLUDES . 'RegisterClass.php');

require_once(FS_INCLUDES . 'Auth.php');



/**

 *

 * Note that we have no templates to view here because this is a non-display

 * action.  We delete and then return to the listing of users

 *

 */



if ($requestType == 'GET') {

    

    // Got here in an invalid way so redirect

    header("Location: /listUsers.php");

    

} elseif ($requestType == 'POST') {

    

    // Delete User

    $res = RegisterClass::delete($_POST['id']);

    

    // Redirect to Login

    header('Location: /listUsers.php');

    

} else {

    echo "Don't know what's going on here....";

}