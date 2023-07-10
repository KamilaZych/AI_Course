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

?>

<!DOCTYPE html>
<html>
<head>
    <br>
    <title>Dodaj kurs</title>
</head>
<body>
    
    
<div class="container">
          <h2>Dodaj nowy kurs</h2>
          <form method="POST" action="../courses/addedCourse.php">
            <label class="label" for="name">Nazwa:</label>
            <input type="text" name="name" style="width: 100%; " required><br><br>

            <style>
              .label {
                display: flex;
              }

              .level {
                display: block;
                
  
              }

              .nice-select {
                float:none;
              }
            </style>

            <label class="label" for="level">Poziom językowy:</label>
            <select id="level" name="level">
              <option value="A1">A1</option>
              <option value="A2">A2</option>
              <option value="B1">B1</option>
              <option value="B2">B2</option>
              <option value="C1">C1</option>
              <option value="C2">C2</option>
            </select><br><br>
            <br>
            <input type="submit" class="btn btn-primary" value="Dodaj kurs">
            <br><br>
          </form>
        </div>




    <?php
    if (file_exists("../include/footer.php")) {
        include("../include/footer.php");
    }
    ?>
</body>
</html>
