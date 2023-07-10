<?php

//-------------------------FILES------------------------------------------------//

require_once("register-validate.php");
require_once("register-fn.php");
require_once("../../config/config.php");

//-------------------------DEV---------------------------------------------------//

//displayErrors();

//-------------------------SESSION-----------------------------------------------//

session_start();

//-------------------------LOGIN DATA--------------------------------------------//

$name = $_POST['name'];
$lastname = $_POST['lastname'];

$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$pass_Confirm = $_POST['passConfirm'];

//-------------------------Validate values-------------------------------------------//

try
{
    $_SESSION['name'] = $name;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['login'] = $login;
    $_SESSION['pass'] = $pass;


    validate_name($name);
    validate_last_name($lastname);
    
    validate_email($email);
    validate_login($login);

    validate_pass($pass,$pass_Confirm);
    unset($_SESSION['error']);

    header('Location: register-bg.php');

}
catch(Exception $ex)
{
    $_SESSION['error'] = $ex->getMessage();
    header('Location: ../../user/register.php');
}

?>