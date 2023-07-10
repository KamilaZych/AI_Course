<?php
function data_course($kolumna)
{
    require_once "../../config/connect.php";
    if (isset($_POST['Id_course'])) {
        $courseId = $_POST['Id_course'];

        $connect = connectToDataBase();

        if ($connect->connect_error) {
            die("Błąd połączenia: " . $connect->connect_error);
        }

        $checkQuery = "SELECT $kolumna FROM Course WHERE Id_Course = $courseId";
        $checkResult = $connect->query($checkQuery);

        if ($checkResult && $checkResult->num_rows > 0) {
            $row = $checkResult->fetch_assoc();
            return $row[$kolumna]; 
        } else {
            return "Błąd"; 
        }
    }
}
?>