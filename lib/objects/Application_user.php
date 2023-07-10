<?php
require_once("../sql/sql-fn.php");
require_once("../../config/connect.php");
    
    function Update_Application_user()
    {
        session_start();

        $new_email = $_SESSION['new_email'];
        $new_name = $_SESSION['new_name'];
        $new_lastname = $_SESSION['new_lastname'];

        $id_user = $_SESSION['id_user'];

        $email = $_SESSION['Email'];
        $name = $_SESSION['Name'];
        $lastname = $_SESSION['Last_name'];

        if($new_email != $email)
        {
            update_object('Application_user', 'Email', $new_email, 'Id_user', $id_user);
            $_SESSION['Email'] = $new_email;
        }
        if($new_name != $name)
        {
            update_object('Application_user', 'Name', $new_name, 'Id_user', $id_user);
            $_SESSION['Name'] = $new_name;
        }
        if($new_lastname != $lastname)
        {
            update_object('Application_user', 'Last_name', $new_lastname, 'Id_user', $id_user);
            $_SESSION['Last_name'] = $new_lastname;
        }
    }
?>
