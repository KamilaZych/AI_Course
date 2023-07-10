<?php

session_start();
$_SESSION['location'] = '';

if(!file_exists("config/config.php"))
{
    echo "Utwórz plik config.php w katalogu config, następnie odśwież stronę.";
    die();
}

require_once("installer/steps/_2.1find_variable_in_config.php");

$isEmpty = find_variable_in_config();

if($isEmpty == false)
{
    if(!is_writable("config/config.php"))
    {
        echo 'Zmień uprawnienia pliku config.php, aby był możliwy do zapisu.';
        die();
    }
    else
    {
        header("Location: installer/instal.php");
    }
    
    
}

if(file_exists("config/config.php"))include("config/config.php"); 
if(file_exists("lib/login/is_login.php"))include("lib/login/is_login.php"); 
if(file_exists("include/main.php"))include("include/main.php");
if(file_exists("include/footer.php")) include("include/footer.php");


?>
