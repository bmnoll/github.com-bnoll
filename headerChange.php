<?php
    if (empty($_SESSION['user']))
    {
?>
		<style type="text/css">#login
			{
                display:inherit;
            }
		</style>
<?php
    }
    if (isset($_SESSION['user']))
    {
?>
        <style type="text/css">#login
            {
                display:none;
            }
        </style>
<?php
        echo <<< logout
            <li class="nav-item active">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        logout;
    }
?>