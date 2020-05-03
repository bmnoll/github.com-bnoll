<?php

// Load basic configuration parameters

require 'application_includes.php';



// Get authentication class

require_once 'Auth.php';





Auth::logout();



header("Location: /index.php");