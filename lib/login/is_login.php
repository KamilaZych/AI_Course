<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

$location = $_SESSION['location'];

if(isset($_SESSION['login']) && $_SESSION['login'])
{
        include($location."include/header_login.php"); 
}
else
{
    if(file_exists($location."include/header_logout.php"))
    {
        include($location."include/header_logout.php"); 
    }
}

?>