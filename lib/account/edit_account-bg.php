<?php
session_start();

include_once("../../config/config.php");
include_once("../../config/connect.php");

require_once("../sql/sql-fn.php");
include_once("../objects/Application_user.php");

include_once("../objects/Login.php");

//displayErrors();

try 
{
    Update_Application_user();
    header("Location: ../../user/change-data.php");

} catch (Exception $ex) 
{
    $error = $ex->getMessage();
    $_SESSION['error'] = $error; 
    header("Location: ../../user/account.php");
}
?>
