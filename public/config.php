<?php
<?php session_start(); ?>
/* Define username and password */

if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
{
    echo 'Success';
    /* Success: Set session variables and redirect to protected page */
    $_SESSION['Username'] = $Username; //store Username to the session
}
else
    echo 'Incorrect Username or Password';

$Username = "Steve";
$Password = "pass";
