<?php

function connectToDataBase()
{
    session_start();
    require_once("config.php");

    $host = $GLOBALS['host']; 
    $user = $GLOBALS['user'];
    $password = $GLOBALS['password'];
    $dbname = $GLOBALS['dbname'];

    // Create connection
    $link = new mysqli($host, $user, $password, $dbname);
    return $link;
}


$dev = true;

function displayErrors()
{
    global $dev;
    if($dev == true)
    {
        ini_set( 'display_errors', 'On' );
        error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
    }
}

?>


