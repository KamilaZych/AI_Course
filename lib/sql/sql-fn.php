<?php

require_once "../../config/connect.php";
require_once "../../config/config.php";


function do_query($sql)
{
    $connect = connectToDataBase();
    $result = $connect->query($sql); 

    if(!$result)
    {
        throw new Exception ('Coś poszło nie tak. Spróbuj ponownie później'); // na koniec trzeba zmienic komunikat
    }

    return $result;
}

function do_query_without_result($sql)
{
    $connect = connectToDataBase();
    
    if(!$connect->query($sql))
    {
        throw Exception ('Coś poszło nie tak. Spróbuj ponownie później'); // na koniec trzeba zmienic komunikat
    } 
}




function update_object( $table, $column_to_set, $value_new, $where_column, $id)
{
    $sql = "UPDATE $table SET $column_to_set = '$value_new' WHERE $where_column = '$id'";
    $result = do_query($sql);
}


?>