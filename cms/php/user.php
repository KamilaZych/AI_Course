<?php

session_start();

if (empty($_SESSION['login'])) {
    header('Location: ../../user/login.php');
    exit;
}

if(file_exists("include/header.php"))include("include/header.php"); 
if(file_exists("include/user_table.php")) include("include/user_table.php");

?>
