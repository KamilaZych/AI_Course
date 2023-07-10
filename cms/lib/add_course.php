<?php

require_once "../../config/connect.php";

session_start();

$name = $_POST['Name'];
$course_level = $_POST['Course_Level'];
$id_user = $_SESSION['id_user'];

$connect = connectToDataBase();

if ($connect->connect_error) {
    die("Błąd połączenia: " . $connect->connect_error);
}

$checkQuery = "INSERT INTO Course (Name, Id_user, Course_Level, Availability) VALUES ('$name', '$id_user', '$course_level', 1)";

if ($connect->query($checkQuery) === TRUE) {
    $connect->close();
    header("Location: ../php/course.php");
    exit;
} else {
    echo "Wystąpił błąd podczas dodawania: " . $connect->error;
}

?>