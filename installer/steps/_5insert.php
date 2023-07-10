<?php
$filename = "_5.1_insert_value.php";

if (file_exists($filename)) {
    include($filename);

    echo "<p>Wstawiam dane do tabel bazy: ".$dbname.".</p>\n";
    
    mysqli_select_db($link, $dbname) or die(mysqli_error($link));
    
    for($i = 0; $i < count($insert); $i++) {
        echo "<p>".$i.". <code>".$insert[$i]."</code></p>\n";
        mysqli_query($link, $insert[$i]);
    }
}
?>