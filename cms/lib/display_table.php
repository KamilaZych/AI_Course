<?php
function display_table($warunek)
{
    ini_set('display_errors', 'On');
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
    
    require_once "../../config/connect.php";
    session_start();

    $connect = connectToDataBase();

    if ($connect->connect_error) {
        die("Błąd połączenia: " . $connect->connect_error);
    }
    $sql = "SELECT A.*, L.login AS Login FROM Application_user AS A, Login AS L WHERE $warunek AND A.id_login_FK=L.id_login";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        echo
            "<thead>
            <tr>
                <td>ID</td>
                <td>Imię</td>
                <td>Nazwisko</td>
                <td>Email</td>
                <td>Login</td>
                <td>Status</td>
                <td></td>
            </tr>
        <tbody>";
        while ($row = $result->fetch_assoc()) {

            echo "<tr>
            <td data-title=\"ID:\">" . $row["Id_user"] . "</td>
            <td data-title=\"Imię:\">" . $row["Name"] . "</td>
            <td data-title=\"Nazwisko:\">" . $row["Last_name"] . "</td>
            <td data-title=\"Email:\">" . $row["Email"] . "</td>
            <td data-title=\"Login:\">" . $row["Login"] . "</td>
            <td data-title=\"Status:\">";

            if ($row["Is_active"] == 1) {
                echo "Aktywny";
            } else {
                echo "Nieaktywny";
            }

            echo "</td> 
            <td> 
            <form action=\"../lib/change_status.php\" method=\"POST\">
            <input type=\"hidden\" name=\"user_Id\" value=\"" . $row["Id_user"] . "\">
            <button type=\"submit\" class=\"btn btn-primary m-1\" name=\"changeStatus\">Zmień status</button>
            </form>
            </td>
            </tr> ";
        }
        echo "</tbody>";
    } else {
        echo "<div class=\"alert alert-primary\" role=\"alert\">Brak danych do wyświetlenia.</div>";
    }

    $connect->close();
}

function display_course()
{
    ini_set('display_errors', 'On');
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);

    require_once "../../config/connect.php";
    session_start();

    $connect = connectToDataBase();

    if ($connect->connect_error) {
        die("Błąd połączenia: " . $connect->connect_error);
    }

    $sql = "SELECT C.*, L.login AS Login FROM Course AS C, Application_user AS A, Login AS L 
            WHERE Availability=1 
            AND C.Id_user=A.Id_user 
            AND A.id_login_FK=L.id_login";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        echo
            "<thead>
            <tr>
                <td>ID</td>
                <td>Nazwa</td>
                <td>Poziom kursu</td>
                <td>Utworzony przez</td>
                <td></td>
            </tr>
        </thead>";
        while ($row = $result->fetch_assoc()) {
            echo
                "<tbody>
            <tr>
                <td data-title=ID>" . $row["Id_course"] . "</td>
                <td data-title=Nazwa>" . $row["Name"] . "</td>
                <td data-title=Poziom kursu>" . $row["Course_Level"] . "</td>
                <td data-title=Utworzony przez>" . $row["Login"] . "</td>
                <td> 
            <form action=\"edit_course.php\" method=\"POST\">
            <input type=\"hidden\" name=\"Id_course\" value=" . $row["Id_course"] . ">
            <button type=\"submit\" class=\"btn btn-primary m-1\" style=\"width: 99%;\" name=\"edit\">Edytuj</button>
            </form>
            <form action=\"../lib/delete_course.php\" method=\"POST\">
            <input type=\"hidden\" name=\"Id_course\" value=" . $row["Id_course"] . ">
            <button type=\"submit\" class=\"btn btn-primary m-1\" style=\"width: 99%;\" name=\"delete\">Usuń</button>
            </form>
            </td> </tr> </tbody>";
        }
    } else {
        echo "<div class=\"alert alert-primary\" role=\"alert\">Brak danych do wyświetlenia.</div>";
    }

    $connect->close();
}
?>