<?php

    // Load basic configuration parameters

    require('./csc206/includes/application_includes.php');

    

    // Layout code for page

    require(FS_TEMPLATES . 'header.php');

    require(FS_TEMPLATES . 'ResortsView.php');

    require(FS_TEMPLATES . 'footer.php');

    require(FS_TEMPLATES . 'otherStuff.php');

    

    // Get featured resorts from the database

    require(FS_INCLUDES . 'ResortsClass.php');

    $r = new ResortsClass();

    $resorts = $r->getFeaturedResorts();

    

    // Display top of page

    header::render();

 

    //Display the featured resorts

    ResortsView::renderMultipleFeatured($resorts);



    // Display other stuff on the page

    otherStuff::render();

 

    // Display the footer

    footer::render();