<?php
session_start();

require_once "../sql/sql-fn.php";
require_once "../../config/connect.php";
require_once "../../config/config.php";

function deactive_Application_user()
{
    $login = $_SESSION['login'];

    $dataListOfLogin = findLoginByLogin($login);

    $id = $dataListOfLogin['id_login'];
    
    $sql = "UPDATE Application_user SET Is_active = 0 WHERE id_login_FK = '$id';";
    
    do_query_without_result($sql);
    
}



function findLoginByLogin($login)
{

    $sql = "SELECT * FROM Login WHERE login = '$login'; ";

    $result = do_query($sql);

    $list = $result->fetch_assoc();
    
    return $list;
}


?>