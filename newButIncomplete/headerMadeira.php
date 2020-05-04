<?php



require_once 'Auth.php';



class header

{

    public static $content = <<<header

        <!doctype html>

        <html lang="en">

        <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap -->
            <link href="css\bootstrap-4.3.1.css" rel="stylesheet">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href="index.php" class="pull-left"><img src="logo\logo.png"></a> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="menu-main-nav" class="navbar-nav nav-fill w-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="request.php">Request a Custom Design</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="portfolio.php">Portfolio</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="adminIndex.php">Admin</a>
                            </li>

                            {{LOGIN_STATUS}}

                        </ul>
                    </div>
                </div>
            </nav>
header;

    

    /**

     * Custom render method to handle the need to manage login/logout options

     *

     * @param string $titleString

     */

    public static function render($titleString = '')

    {

        // Generates HTML for the navbar that reflects the login status

        $login_status = self::buildLogin();

    

        static::$content = str_replace('{{LOGIN_STATUS}}', $login_status, static::$content);

        

        static::$content = str_replace('{{TITLE_STRING}}', $titleString, static::$content);

		echo static::$content;

    }

    

    /**

     * Build the HTML for logged in vs logged out status

     * @return string

     */

    private static function buildLogin()

    {

        if (Auth::check()){

            $firstname = $_SESSION['user']['firstname'];



            $loginStatus = <<<Loggedin

                <li class="nav-item">

                        <a class="nav-link" href="logout.php">Logout</a>

                    </li>

Loggedin;

        

        } else {

            $loginStatus = <<<notLoggedin

                <li class="nav-item">

                    <a class="nav-link" href="login.php">Login</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="register.php">Register</a>

                </li>

notLoggedin;

        }



        return $loginStatus;

    }





}