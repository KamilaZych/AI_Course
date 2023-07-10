<?php
require_once("../sql/sql-fn.php");
require_once("../../config/connect.php");
    
    function Update_Login()
    {
        session_start();

        $new_login = $_POST['login'];
        $new_password = $_POST['password'];

        $id_user = $_SESSION['id_user'];

        $login = $_SESSION['login'];
        $password = $_SESSION['password'];

        if($new_login != $login)
        {            
            $sql = "UPDATE Login SET login = '$new_login' WHERE id_login = (SELECT id_login_FK FROM Application_user WHERE $id_user = Id_user)";
            $result = do_query($sql);
            $_SESSION['login'] = $new_login;

        }
        if($new_password != $password)
        {
            $sql = "UPDATE Login SET login = '$new_password' WHERE id_login = (SELECT id_login_FK FROM Application_user WHERE $id_user = Id_user)";
            $result = do_query($sql);
            $_SESSION['password'] = $new_password;
        }

    }
?>
