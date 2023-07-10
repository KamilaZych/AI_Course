<?php

function countRecords($warunek)
{
    session_start();
    ini_set( 'display_errors', 'On' );
    error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
    
    require_once "../../config/connect.php";

    $connect = connectToDataBase();

    if(!$connect)
    {
        throw new Exception("połączenie nie działa");
    }

    if ($connect->connect_error) {
        header("Location: fff");
        die("Błąd połączenia: " . $connect->connect_error);
        
    }

    $sql = "SELECT COUNT(1) AS recordCount FROM $warunek";
    
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['recordCount'];
   } else {
       return 0;
    }
}
