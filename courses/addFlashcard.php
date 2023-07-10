<?php
//require_once("../register/register-fn.php");
require_once("../config/config.php");
require_once("../config/connect.php");
include("../users/list.php");


session_start();
//display_errors();
$_SESSION['location'] = '../';

if (!isset($_SESSION['login'])) {
    header("Location: ../user/login.php");
}

if (file_exists("../lib/login/is_login.php")) {
    include("../lib/login/is_login.php");
}
if (file_exists("../include/logIN_top.php")) {
    include("../include/logIN_top.php");
}
 // to ci nic nie da
//require_once("../courses/list.php")

function do_query($sql)
{
    $connect = connectToDataBase();
    $result = $connect->query($sql);

    if (!$result) {
        throw new Exception($sql);
    }
    return $result;
}

// Retrieve courses from the database
$id_user = $_SESSION['id_user'];

$query = "SELECT Name FROM Course WHERE Id_user = '$id_user'";
try {
    $result = do_query($query);

    $courses = []; 

    while ($row = $result->fetch_assoc()) {
        $courses[] = $row['Name']; 
    }
} catch (Exception $e) {
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <br>
    <title>Dodaj nową fiszkę</title>
</head>
<body>
    <div class="container"> <h2>Dodaj nową fiszkę</h2>
    <form method="POST" action="../courses/addedFlashcard.php">
        <label class="label" for="first-word">Słówko po angielsku:</label>
        <input type="text" id="first-word" name="first-word" style="width: 100%;" required><br><br>

        <label class="label" for="second-word" >Tłumaczenie:</label>
        <input type="text" id="second-word" name="second-word" style="width: 100%; " required><br><br>

        <style>
        .label {
            display: block;
        }
        .nice-select {
            float:none;
        }


        </style>

        <label class="label" for="category">Kategoria:</label>
        <select id="category" name="category">
            <option value="Animals">Animals</option>
            <option value="Food">Food</option>
            <option value="School">School</option>
            <option value="Nature">Nature</option>
            <option value="Work">Work</option>
        </select> <br><br>
        
        <label class="label" for="course">Kurs:</label>
        <select id="course" name="course" style="width: 100%; ">
            <?php
            foreach ($courses as $course) {
                echo "<option value=\"$course\">$course</option>";
            }
            ?>
         </select><br><br><br>
         <input type="submit" class="btn btn-primary" value="Dodaj fiszkę"> <br><br>
    </form></div>
   

    <?php
    if (file_exists("../include/footer.php")) {
        include("../include/footer.php");
    }
    ?>
</body>
</html>
