<?php

session_start();

require_once("../../config/config.php");
require_once("../../config/connect.php");


//displayErrors();

$_SESSION['location'] = '../';


require_once("../register/register-fn.php");

require_once("../../lib/sql/sql-fn.php");


//connectToDataBase();
//if($_SERVER['REQUEST_METHOD'] === 'POST'){ // to ma być w pliku do którego odsyłasz po wypełnieniu formularza, wtedy je łapiesz, tu nie masz co łapać
    
    $name = $_POST["name"];
    $level = $_POST["level"];
    $id_user = $_SESSION['id_user'];
    
    $sql = "INSERT INTO Course 
    (Name, Id_user, Course_Level, Availability) VALUES ('$name', '$id_user', '$level', 0)";
    do_query_without_result($sql);
//}
//else
//{

//}

if(file_exists("../lib/login/is_login.php"))include("../lib/login/is_login.php"); 
if(file_exists("../include/logIN_top.php")) include("../include/logIN_top.php");

if(file_exists("../include/footer.php")) include("../include/footer.php");

?>
