<?php

session_start();

require_once("../../lib//register/register-fn.php");
require_once "../../config/connect.php";
require_once("../../lib/sql/sql-fn.php");

displayErrors();

$new_name = $_POST['name'];
$new_lastname = $_POST['lastname'];
$new_email = $_POST['email'];

try {
    validate_email($new_email);
    validate_last_name($new_lastname);
    validate_name($new_name);


    $id_user = $_SESSION['id_user'];

    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];

    if ($new_email != $email) {
        update_object('Application_user', 'Email', $new_email, 'Id_user', $id_user);
        $_SESSION['Email'] = $new_email;

    }
    if ($new_name != $name) {
        update_object('Application_user', 'Name', $new_name, 'Id_user', $id_user);
        $_SESSION['Name'] = $new_name;
    }
    if ($new_lastname != $lastname) {
        update_object('Application_user', 'Last_name', $new_lastname, 'Id_user', $id_user);
        $_SESSION['Last_name'] = $new_lastname;
    }

    header("Location: ../php/profile.php");

} catch (Exception $ex) {
    $_SESSION['error'] = $ex->getMessage();
    header('Location: ../php/edit_profile.php');
}


?>