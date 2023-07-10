<?php

session_start();
$_SESSION['location'] = '../';

if(!isset($_SESSION['login']))
{
    header("Location: login.php");
}

if(file_exists("../lib/login/is_login.php"))include("../lib/login/is_login.php"); 
if(file_exists("../include/logIN_top.php")) include("../include/logIN_top.php");
if(file_exists("../include/account_middle.php")) include("../include/account_middle.php");
if(file_exists("../include/footer.php")) include("../include/footer.php");

?>
