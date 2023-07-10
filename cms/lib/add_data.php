<?php

function add_data($tabela)
{
    require_once "../../config/connect.php";    
    session_start();

    $connect = connectToDataBase();

    if ($connect->connect_error) {
        die("Błąd połączenia: " . $connect->connect_error);
    }

    $sql = "SELECT * FROM $tabela";
    $result = $connect->query($sql);

    $options = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $options[] = [
                'id' => $row["Id"],
                'name' => $row["Name"]
            ];
        }
        foreach ($options as $option) {
            echo "<option value='{$option['id']}'>{$option['name']}</option>";
        }
    }
}

?>
