<?php

if(file_exists("include/header.php")) include("include/header.php");

if($count_error>0){
    echo "<div class='container py-5'>\n";
    for($e = 0; $e < $count_error; $e++){
        echo "<p class='alert alert-warning'>".$error[$e]."</p>\n";
    }
    echo "</div>\n";
} 
else {
    if(file_exists("include/about.php"))include("include/about.php");
    if(file_exists("include/services.php"))include("include/services.php");
    if(file_exists("include/learn.php"))include("include/learn.php");
    if(file_exists("include/top.php"))include("include/top.php");
    if(file_exists("include/info.php"))include("include/info.php");
    if(file_exists("include/team.php"))include("include/team.php");
}

if(file_exists("include/footer.php")) include("include/footer.php");

//  if($_GET[w]=="wynik") {
//     include("wynik.php");
//  } else {
//     include("middle.php");
//  }

//  include("footer.php")
?>
