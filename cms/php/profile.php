<?php

session_start();

if (empty($_SESSION['login'])) {
    header('Location: ../../user/login.php');
    exit;
}

if(file_exists("include/header.php"))include("include/header.php"); 
if(file_exists("include/my_profile.php")) include("include/my_profile.php");

?>
