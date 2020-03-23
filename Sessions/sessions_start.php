
<?php

    

// Start Session

session_start();



// Store a variable in the session

if (isset($_POST['userid'])&& isset($_POST['password']))
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $db_conn = new mysqli('localhost','webauth','webauth','auth');

    if (mysqli_connect_errno()) {
        echo 'Connection to databasefailed:'.mysqli_connect_error();
        exit();
    }
    $query="select * from authorized_users where
    name='".$userid."' and
    password=shal ('".$password."')";
    $result = $db_conn->query($query);
    if ($result->num_rows)
    {
        $_SESSION ['valid_user'] = $userid;
    }
    $db_conn->close();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title> Home page </Title>
    <style type = "text/css">
    fieldset {
        width: 50%;
        border: 2px solid #ff0000;
    }
    legend {
        font-weight: bold;
        font-size: 125%;
    }
    label {
        width: 125px;
        float: left;
        text-align: left;
        font-weight: bold;
    }
    input {
        border: 1px solid #000;
        padding: 3px;
    }
    button {
        margin-top: 12px;
    }
    </style>
    </head>
    <body>
    <h1>Home Page</h1>
    <?php
    if (isset($_SESSION['valid_user']))
    {
    echo '<p> You are logged in as: '.$_SESSION['valid_user'].' <br/>';
    echo '<a href="logout.php"> Log out</a></p>';
    }
    else
    {
        if (isset ($userid))
        {
            echo '<p>You are not an Admin</p>';
        }
        echo '<form action="authmain.php" method="post">';
        echo '<fieldset>';
        echo '<legend>Login</legend>';
        echo '<p><label for ="userid"> User ID;</label>';
        echo '<input type="text" name="userid" id="userid" size="30"/></p>';
        echo '<p><label for="password"> Password:</label>';
        echo '<input type="password" name= "password" id="password" size ="30"/></p>';
        echo '</fieldset>';
        echo '<button type = "submit" name = "login">Login</button>';
        echo '</form>';

    }
    ?>
    <p><a href ="session_use.php"> Add a new design</a></p>
    </body>
    <html>