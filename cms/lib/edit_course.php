<?php
require_once "../../config/connect.php";

session_start();

$name = $_POST['Name'];
$course_level = $_POST['Course_Level'];
$course_id=$_POST['Id_course'];

$connect = connectToDataBase();

if ($connect->connect_error) {
    die("Błąd połączenia: " . $connect->connect_error);
}

$checkQuery = "UPDATE Course SET Name = ?, Course_Level = ? WHERE Id_course = $course_id";
$stmt = $connect->prepare($checkQuery);
$stmt->bind_param("ss", $name, $course_level);

if ($stmt->execute()) {
    $stmt->close();
    $connect->close();
    header("Location: ../php/course.php");
    exit;
} else {
    echo "Wystąpił błąd podczas edytowania: " . $connect->error;
}

?>
