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



$id_user = $_SESSION['id_user'];

    $sql = "SELECT Id_course, Name, Course_Level
    FROM Course
    WHERE Availability = 1 OR (Id_user = '$id_user' AND Availability = 0)";
    $result = do_query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Twoje kursy:</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            border: 1px solid grey;
            padding: 14px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            font-size: 24px;
        }

        .invisible-column {
            visibility: hidden;
            width: 0;
            padding: 0;
            border: none;
        }

        .button {
            width: 90%;
            text-align: right;
            margin-right: auto;
            cursor: pointer;
            color: black;
        }

        button {
            color: white;
            background-color: purple;
            border: 0px;
            cursor: pointer;
            height: 35px
        }

        .last-column {
            max-width: 60px; 
            white-space: nowrap; 
            text-align: center;
        }
    </style>
</head>
<body>
    <br>
    <h2>Twoje kursy:</h2>
    <div class="button">
        <a href="../courses/addCourse.php">
            <button>Dodaj kurs</button>
        </a>
        <a href="../courses/addFlashcard.php">
            <button>Dodaj fiszkę</button>
        </a>
    </div>
    <br>

    <table>
        <tr>
            <th class="invisible-column"></th>
            <th>Name</th>
            <th>Course Level</th>
            <th></th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='invisible-column'>" . $row['Id_course'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Course_Level'] . "</td>";
            echo "<td class='last-column'><a href='displayFlashcards.php?id_course=" . $row['Id_course'] . "' style='background-color: purple; color: white; padding: 5px 10px; text-decoration: none;'>Wyświetl</a></td>";

            echo "</tr>";
        }
        ?>

    </table>
    <br> <br>
    <?php
    if (file_exists("../include/footer.php")) {
        include("../include/footer.php");
    }
    ?>
</body>
</html>



