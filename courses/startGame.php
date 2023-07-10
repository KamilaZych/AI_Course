<?php
//require_once("../register/register-fn.php");
require_once("../config/config.php");
require_once("../config/connect.php");

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
$query = "SELECT Name FROM Course";
try {
    $result = do_query($query);

    $courses = []; // Initialize an empty array

    while ($row = $result->fetch_assoc()) {
        $courses[] = $row['Name']; // Add each course name to the array
    }
} catch (Exception $e) {
    // Handle the exception, display an error message, or log the error
}

?>

<!DOCTYPE html>
<html>
<head>
    <br>
    <title>Wybierz kurs</title>
</head>
<body>
    <div class="container"> 
    <h2>Wybierz kurs i rozpocznij naukę!</h2>
    <form method="POST" action="../courses/test.php">
        <style>
        .label {
            display: block;
        }
        .nice-select {
            float:none;
        }
        </style>  
        <label class="label" for="course">Kurs:</label>
        <select id="course" name="course">
            <?php
            foreach ($courses as $course) {
                echo "<option value=\"$course\">$course</option>";
            }
            ?>
         </select><br><br><br>
         <input type="submit" class="btn btn-primary" value="Rozpocznij naukę!"> <br> <br>
    </form>
        </div>
    

    <?php
    if (file_exists("../include/footer.php")) {
        include("../include/footer.php");
    }
    ?>
</body>
</html>
