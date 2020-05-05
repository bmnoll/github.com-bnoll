<?php
require_once 'Auth.php';
class header
{
    private static function buildLogin()
    {
        if (Auth::check())
        {
            $firstname = $_SESSION['user']['firstname'];
            $loginStatus = <<<Loggedin
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            Loggedin;
        } 
        else 
        {
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
?>