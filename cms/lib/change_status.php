<?php
require_once "../../config/connect.php";
session_start();

$connect = connectToDataBase();

if ($connect->connect_error) {
    die("Błąd połączenia: " . $connect->connect_error);
}
 echo $_POST['user_Id'];
if (isset($_POST['user_Id'])) {
    $user_id = $_POST['user_Id'];

    $sql = "SELECT * FROM Application_user WHERE Id_user = $user_id";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['Admin'] == 0) {
            $update_sql = "UPDATE Application_user SET Admin = 1 WHERE Id_user = $user_id";
            if ($connect->query($update_sql) === TRUE) {
                header('Location: ../php/user.php');
            } else {
                echo "Błąd podczas zmiany statusu" . $connect->error;
            }
        } else {
            $update_sql = "UPDATE Application_user SET Admin = 0 WHERE Id_user = $user_id";
            if ($connect->query($update_sql) === TRUE) {
                header('Location: ../php/admin.php');
            } else {
                echo "Błąd podczas zmiany statusu" . $connect->error;
            }
        }
    } else {
        echo "Nie znaleziono rekordu o podanym ID.";
    }
}
?>