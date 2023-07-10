<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("../config/config.php");
require_once("../config/connect.php");

//display_errors();


if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

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

try {

    $id_user = $_SESSION['id_user'];

    $sql = "SELECT Name, Course_Level FROM Course WHERE Id_user = '$id_user'";
    $result = do_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabela Course</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Tabela Course:</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Course Level</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Course_Level'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
} catch (Exception $e) {
    echo "Błąd: " . $e->getMessage();
}
?>
