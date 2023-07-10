<?php

//-------------------------FILES------------------------------------------------//

require_once("../../lib/register/register-fn.php");

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
$password_Confirm = $_POST['passwordConfirm'];

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

    validate_pass($pass,$password_Confirm);
    unset($_SESSION['error']);

    $connect = connectToDataBase();

    $listDataOfAccount = add_login_to_data_base($connect);
    $id_fk = $listDataOfAccount['id_login'];

    add_ADMIN_to_database($connect,$id_fk);
    
    header('Location: ../../cms/php/dashboard.php');

}
catch(Exception $ex)
{
    $_SESSION['error'] = $ex->getMessage();
    header('Location: ../view/admin_form.php');
}

?>