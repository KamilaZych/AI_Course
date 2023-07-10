<?php
session_start();


//-------------------------FILES-------------------------------------------------//

require_once "../../config/connect.php";
require_once "../../config/config.php";
require_once "register-fn.php";

//-------------------------DEV---------------------------------------------------//

//displayErrors();

//-------------------------CONNECT-----------------------------------------------//

$connect = connectToDataBase();

//-------------------------SQL---------------------------------------------------//

try
{
    $listDataOfAccount = add_login_to_data_base($connect);
    $id_fk = $listDataOfAccount['id_login'];

    add_user_to_database($connect, $id_fk);
    header("Location: ../../user/account.php");
} 
catch(Exception $ex)
{
    $_SESSION['error'] = $ex->getMessage();
}
finally
{
    $connect->close();
}

?>
