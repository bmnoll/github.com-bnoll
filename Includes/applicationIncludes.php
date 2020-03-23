
<?php



// Include the basic configuration elements

require_once($_SERVER['DOCUMENT_ROOT'].'/csc206/includes/config.php');



// Include the database connection and query class

require_once(FS_INCLUDES . 'Database.php');



// Include the HTML layout class

require_once(FS_TEMPLATES . 'layout.php');



// Connect to the database

// $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);



// Initialize variables

$requestType = $_SERVER[ 'REQUEST_METHOD' ];



// Session Start

session_start();