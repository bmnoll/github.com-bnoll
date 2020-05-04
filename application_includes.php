<?php



// Include the basic configuration elements

require_once 'config.php';



// Include the database connection and query class

require_once 'Database.php';



// Include the HTML layout class

require_once 'layout.php';



// Connect to the database

// $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);



// Initialize variables

$requestType = $_SERVER[ 'REQUEST_METHOD' ];



// Session Start

session_start();



/**

 * Helper function that will format and then dump data to the screen and then either

 * stop execution (by default) or continue program execution.

 *

 * @param $variable

 * @param bool $endNow

 */

function dd($variable, $endNow = true)

{

    echo "<pre>";

    

    if ( is_array($variable) || is_object($variable) ) {

        print_r($variable);

    } else {

        echo $variable;

    }

    

    echo "</pre>";

    

    if ( $endNow ) die();

}