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

$id_course = $_GET['id_course'];
$id_user = $_SESSION['id_user'];

// Sprawdź, czy użytkownik ma dostęp do kursu
$sql_check_access = "SELECT Id_course FROM Course WHERE Id_user = '$id_user' AND Availability = 0 AND Id_course = '$id_course'";
$result_check_access = do_query($sql_check_access);

if ($result_check_access->num_rows === 0) {
    $accessDenied = true;
} else {
    $accessDenied = false;
}


// Jeśli użytkownik ma dostęp, wykonaj zapytanie
$sql = "SELECT Id_card, First_Word, Second_Word FROM Card WHERE Id_course = '$id_course'";
$result = do_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Wyniki zapytania</title>
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
        h2{
            text-align: center;
        }
        .invisible-column {
            visibility: hidden;
            width: 0;
            padding: 0;
            border: none;
        }
        .last-column {
            max-width: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <br>
<h2>Lista fiszek w wybranym kursie:</h2>
<table>
    <tr>
        <th class="invisible-column"></th>
        <th>Słówko</th>
        <th>Tłumaczenie</th>
        <th></th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Wyświetlanie danych z zapytania w tabeli
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='invisible-column'>" . $row['Id_card'] . "</td>";
            echo "<td>" . $row['First_Word'] . "</td>";
            echo "<td>" . $row['Second_Word'] . "</td>";
            if ($accessDenied) {
                echo "<td class='last-column'><button disabled style='background-color: gray; color: white; padding: 5px 10px; text-decoration: none; cursor: not-allowed;'>Usuń</button></td>";
            } else {
                echo "<td class='last-column'><a href='deletedFlashcard.php?id_card=" . $row['Id_card'] . "' style='background-color: purple; color: white; padding: 5px 10px; text-decoration: none;'>Usuń</a></td>";
            }
                        echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Brak wyników.</td></tr>";
    }
    ?>
    <br>
</table>
<br>

<?php
if (file_exists("../include/footer.php")) {
    include("../include/footer.php");
}
?>
</body>
</html>
