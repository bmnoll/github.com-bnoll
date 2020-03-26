<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]=="")
{
    if ($_POST["email"]=="")
    {
        if ($_POST["description"]=="")
        {
            echo "Fill All Fields..";
        }
    }
}
else
{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['designName'];
$message = $_POST['description'];
$headers = 'From:'. $email . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("brandon.noll@icloud.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your request!";
}
}
}
?>