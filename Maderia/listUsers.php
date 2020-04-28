<?php

    // Load basic configuration parameters

    require('./csc206/includes/application_includes.php');

    

    // Layout code for page

    require(FS_TEMPLATES . 'header.php');

    require(FS_TEMPLATES . 'RegisterView.php');

    require(FS_TEMPLATES . 'footer.php');

    

    // Resorts data class

    require_once(FS_INCLUDES . 'RegisterClass.php');

    require_once(FS_INCLUDES . 'Auth.php');



    // print_r($_SERVER); die();



    // Require that you be logged in to see this page

    if (Auth::guest()) header("Location: /login.php?from=" . $_SERVER['SCRIPT_NAME']);

    

    // Display top of page and pass in section title

    header::render('Users List');

    

    // Get resorts

    $r = new RegisterClass();

    $users = $r->getUsers();

    

    // Display the list of resorts

    RegisterView::renderUserList($users);

    

    // Display the page footer

    footer::render(); ?>