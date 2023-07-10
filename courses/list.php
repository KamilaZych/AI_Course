<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("../config/config.php");
require_once("../config/connect.php");
/*
function connectToDataBase()
{
    $host = "localhost";
    $user = "2024_nhanczka";
    $password = "Niebo.164";
    $dbname = "2024_nhanczka";

    // Create connection
    $link = new mysqli($host, $user, $password, $dbname);
    return $link;
}
*/
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

<!-- ... -->

<select id="course" name="course">
            <?php
            foreach ($courses as $course) {
                echo "<option value=\"$course\">$course</option>";
            }
            ?>
 </select>

<!-- ... -->
