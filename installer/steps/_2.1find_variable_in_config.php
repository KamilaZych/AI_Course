<?php

function find_variable_in_config():bool
{
    session_start();
    $file = $_SESSION['location'].'config/config.php';

    $variable = array();
    $variable[] = 'host';
    $variable[] = 'user';
    $variable[] = 'dbname';

    $content = file_get_contents($file);

    foreach($variable as $var)
    {
        if(stripos($content, $var) === false) 
        {
            file_put_contents($file, '');
            return false;
        } 
    }

    return true;

}


?>