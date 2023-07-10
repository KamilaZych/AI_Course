<?php

session_start();

require_once("../register/register-fn.php");
require_once("../../config/config.php");
require_once("../../config/connect.php");

//displayErrors();

$new_name = $_POST['name'];
$new_lastname = $_POST['lastname'];
$new_email = $_POST['email'];

try
{
    validate_email($new_email);
    validate_last_name($new_lastname);
    validate_name($new_name);

    $_SESSION['new_name'] = $new_name;
    $_SESSION['new_lastname'] = $new_lastname;
    $_SESSION['new_email'] = $new_email;

    header('Location: edit_account-bg.php');

}
catch(Exception $ex)
{
    $_SESSION['error'] = $ex->getMessage();
    header('Location: ../../user/account.php');
}


?>