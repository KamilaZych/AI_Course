<?php

session_start();
//-------------------------FILES-------------------------------------------------//

require_once "../../config/connect.php";
require_once "../../config/config.php";
require_once "deactive-fn.php";
//-------------------------DEV---------------------------------------------------//

//displayErrors();

try
{
    deactive_Application_user();
    session_unset();
    header("Location: ../../index.php");
}
catch(Exception $ex)
{
    $_SESSION['error'] = $ex->getMessage(); 
    echo $ex->getMessage();
}


?>