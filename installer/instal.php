<?php

ini_set( 'display_errors', 'On' );
error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);


session_start();

if(isset($_SESSION['login']) && $_SESSION['login'])
{
    header('Location: ../user/login.php'); 
}

$_SESSION['location'] = '../';

require_once("steps/_2.1find_variable_in_config.php");


if (!find_variable_in_config())
{
    echo 4;
    header("Location: view/info_form.php");
    
}
else
{
    header("Location: steps/_4make_database.php");
}

























































// require_once("installer/steps/_1create_file.php");
// require_once("installer/steps/_2writable.php");
// require_once("installer/steps/_2.1find_variable_in_config.php");
// require_once("installer/steps/_4make_database.php");
// require_once("installer/steps/_4.1_sql.php");
// require_once("installer/steps/_5insert_value.php");
// require_once("installer/steps/_6admin.php");


// $config_directory = 'config';
// $parent_directory = dirname(__DIR__);
// $catalog = $parent_directory . "/AI_Course/" . $config_directory.'/';



// if(!is_writable("config/config.php"))
// {
//     //echo' zmieniamy uprawnienia aby można było pisać \n ';
//     $isWritable = file_is_writable();  
    
//     if(!$isWritable)
//     {
//         echo 'nie jest zapisywalny \n';
//         make_writable();
//         echo 'przeszło funkcę make_writable \n';
//     }

//     //header("Refresh: 0");

// }

// if(is_writable("config/config.php"))
// {
//     // sprawdzamy czy dane localhost itp istnieją
//     if (!find_variable_in_config())
//     {
//         //header("Loaction: installer/view/info_farm.php");

//         // jak nie - pobieramy dane - tworzymy formularz, który pobiera te dane
//             // tworzymy strukturę danych w bazie
//             // umieszczamy dane w bazie - przykładowe dane, chyba tylko w naszym przypadku sens mają domyślne kursy
//             // krok 5, nazwa firmy, data założenia, wersja itp., adres serwisu, DANE ADMINA
//             // gratuluje ukończyłeś instalowanie aplikacji!
//     }

//     // jak tak - otwieramy normalnie stronę

//}

?>