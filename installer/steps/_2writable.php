<?php

function file_is_writable(): bool
{
    // sprawdza czy jest możliwy do zapisywania
    $config_file = 'config/config.php';
    if (is_writable_file($config_file)) {
        //echo "Plik jest możliwy do zapisu.";
        return true;
    } else {
        //echo "Plik nie jest możliwy do zapisu.";
        return false;
    }
}

function make_writable()
{
    // zmienia uprawnienia 
    $config_file = 'config/config.php';
    $permissions = 0666;

    if (file_exists($config_file)) {
        chmod($config_file, $permissions);
        echo "Zmieniono uprawnienia pliku.";
    } else {
        throw new Exception("Błąd przy zmianie uprawnień");
    }
}

?>