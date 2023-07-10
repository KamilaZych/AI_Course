<?php

if(file_exists("include/header.php")) include("include/header.php");

if($count_error>0){
    echo "<div class='container py-5'>\n";
    for($e = 0; $e < $count_error; $e++){
        echo "<p class='alert alert-warning'>".$error[$e]."</p>\n";
    }
    echo "</div>\n";
}  
 else{
    if(file_exists("include/contact.php"))include("include/contact.php");
    if(file_exists("include/map.php"))include("include/map.php");
    if(file_exists("include/form.php"))include("include/form.php");
}

if(file_exists("include/footer.php")) include("include/footer.php");

//  if($_GET[w]=="wynik") {
//     include("wynik.php");
//  } else {
//     include("middle.php");
//  }

//  include("footer.php")
?>
