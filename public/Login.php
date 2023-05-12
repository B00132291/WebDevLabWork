<?php require_once('login.php'); ?>


<?php
require_once ('config.php'):
?>


<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/signin.css">
   <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Sign in</title>
</head>

<body>

<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

 //if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
{
    echo 'Success';
    /* Success: Set session variables and redirect to protected page */
    $_SESSION['Username'] = $Username;
    $_SESSION['Active'] = true; //remember we can call a session what we like e.g. $_SESSION["newsession"]=$value;
    header("location:index.php"); /* 'header() is used to redirect the browser */
    exit;
}
else
    echo 'Incorrect Username or Password';

//unsure why not working

<body>
<div class="container">

    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me

            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
        <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
    </form>

<?php
if(isset($_POST['Submit']))
{
    if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
    {
        echo 'Success';
    }
    else
        echo 'Incorrect Username or Password';
}
?>


</div>
</body>
</html>

