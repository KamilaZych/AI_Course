<?php

function create_file()
{
    $config_file = 'config/config.php';

    $obecnyKatalog = __DIR__;
    echo $obecnyKatalog;


    if (!file_exists($config_file)) 
    {
        //chmod($config_file , 755);
        chmod("/config" , 755);
        touch($config_file);
        echo "Plik został utworzony.";
    } else {
        echo "Plik już istnieje.";
    }

}

?>