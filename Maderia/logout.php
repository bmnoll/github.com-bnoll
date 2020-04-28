<?php

// Load basic configuration parameters

require('./csc206/includes/application_includes.php');



// Get authentication class

require_once(FS_INCLUDES . 'Auth.php');





Auth::logout();



header("Location: /index.php");