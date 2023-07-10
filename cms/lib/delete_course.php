<?php

require_once "../../config/connect.php";

session_start();

$courseId = $_POST['Id_course']; 

$connect = connectToDataBase();

if ($connect->connect_error) {
    die("Błąd połączenia: " . $connect->connect_error);
}

$deleteQuery = "DELETE FROM Course WHERE Id_course = '$courseId'";

if ($connect->query($deleteQuery) === TRUE) {
    $connect->close();
    header("Location: ../php/course.php");
    exit;
} else {
    echo "Nie można usunąć kursu: " . $connect->error;
}

?>
