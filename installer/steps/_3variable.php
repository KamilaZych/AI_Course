<?php

//ini_set( 'display_errors', 'On' );
//error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);


     try {
        $host = $_POST['adres'];
        $dbname = $_POST['database'];
        $user = $_POST['login'];
        $password = $_POST['password'];
        

        if (strlen($host) < 5 || strlen($host) > 20) {
            throw new Exception('Nazwa lub adres serwera musi mieć od 5 do 50 znaków.');
        }

        $config_file = '../../config/config.php';

        $file = fopen($config_file, "w");
        $config = "<?php
                    \$GLOBALS['host']=\"" . $host . "\";
                    \$GLOBALS['user']=\"" . $user . "\";
                    \$GLOBALS['password']=\"" . $password . "\";
                    \$GLOBALS['dbname']=\"" . $dbname . "\";
                    \$link = mysqli_connect(\$host, \$user, \$password, \$dbname);\n?>";

        if (!fwrite($file, $config)) {
            $error = "Nie mogę zapisać do pliku ($file)";
            $_SESSION['error'] = $error;
            header("Location: ../view/info_form.php");
        }
        
        $error = "Krok 2 zakończony: Plik konfiguracyjny utworzony";
        $_SESSION['error'] = $error;

        fclose($file);
        header("Location: ../instal.php");

    } catch (Exception $ex) {
        $error = $ex->getMessage();
        $_SESSION['error'] = $error;
        header("Location: ../view/info_form.php");
    }

    session_start();
    session_unset();
?>