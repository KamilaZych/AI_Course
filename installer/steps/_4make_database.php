<?php
// ini_set( 'display_errors', 'On' );
// error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);

require_once("../../config/connect.php");
$link = connectToDataBase();


if ($link->connect_error) {
    die("Błąd połączenia: " . $link->connect_error);
}

$filename = "_4.1_sql.php";



if (file_exists($filename)) {
    include($filename);

    echo "Tworzę tabele bazy: ".$dbname.".<br>\n";
    
    require_once("_4.1_sql.php");
    require_once("_5.1_insert_value.php");
    require_once("_6admin.php");

    mysqli_select_db($link, $dbname) or die(mysqli_error($link));
    
    for($i = 0; $i < count($create); $i++) 
    {    
        // if(!mysqli_query($link, $create[$i]))
        // {
        //     throw new Exception("Connecting error");
        // }
    }

    for($i = 0; $i < count($insert); $i++) {
        
        // if(!mysqli_query($link, $insert[$i]))
        // {
        //     throw new Exception("Connecting error"); 
        // }


    }
    
    header("Location: ../view/admin_form.php");
}



?>