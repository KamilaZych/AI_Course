<?php

session_start();

//-------------------------FILES-------------------------------------------------//

require_once "../../config/connect.php";
require_once "../../config/config.php";
require_once "login-fn.php";


//-------------------------DEV---------------------------------------------------//

//displayErrors();

$login = $_POST['login'];
$pass = $_POST['pass'];


$connect = connectToDataBase();


try
{
    $listDataOfAccount = user_exist($login,$connect);
    isActive($listDataOfAccount);
    
    verify_pass($listDataOfAccount, $pass);
    isAdmin($listDataOfAccount);
}
catch(Exception $ex)
{

    unset($_SESSION['login']);

    $_SESSION['error'] = $ex->getMessage();
    header('Location: ../../user/login.php');
}

$connect->close();

?>
