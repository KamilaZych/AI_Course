<?php

session_start();

require_once("../../config/config.php");
require_once("../../config/connect.php");


//displayErrors();

$_SESSION['location'] = '../';


require_once("../register/register-fn.php");

require_once("../../lib/sql/sql-fn.php");


    
    $fw = $_POST["first-word"];
    $sw = $_POST["second-word"];
    $category = $_POST["category"];
    $course = $_POST["course"];

    $id_user = $_SESSION['id_user'];
    
    $sql = "INSERT INTO Card (First_Word, Second_Word, Id_category, Id_language, Id_user, Id_Course) 
    VALUES ('$fw', '$sw', 
    (SELECT Id_category FROM Category WHERE Name = '$category'), 
    1, 
    '$id_user', 
    (SELECT Id_course FROM Course WHERE Name = '$course'))";
    do_query_without_result($sql);


if(file_exists("../lib/login/is_login.php"))include("../lib/login/is_login.php"); 
if(file_exists("../include/logIN_top.php")) include("../include/logIN_top.php");

if(file_exists("../include/footer.php")) include("../include/footer.php");

?>
