<?php 
//------------------------------files----------------------------------//

require_once ("../../config/config.php");
require_once ("../../config/connect.php");

//------------------------------auxiliary functions--------------------//
function length_of_text_between_min_and_max($text, $min_value = 8 , $max_value = 20)
{
    if (mb_strlen($text) > $max_value || mb_strlen($text) < $min_value )
    {
        return false;
    }
    else return true;
}

function text_contain_only_letters($text)
{
    if(!ctype_alpha($text))
    {
        return false;
    }
    else return true;
}

//--------------------------Validate-----------------------------------//

function validate_name($name)
{
    if(!length_of_text_between_min_and_max($name,2) || !text_contain_only_letters($name))
    {
        throw new Exception ('Niepoprawne imię. Imię musi zawierać tylko litery oraz ilość znaków z przedziału 2 - 20.');
    }    
}

function validate_last_name($last_name)
{
    if(!length_of_text_between_min_and_max($last_name,2) || !text_contain_only_letters($last_name))
    {
        throw new Exception ('Niepoprawne nazwisko. Nazwisko musi zawierać tylko litery oraz ilość znaków z przedziału 2 - 20.');
    }
}


function validate_pass($pass, $pass_Confirm)
{
    if($pass != $pass_Confirm) 
    {
        throw new Exception('Podane hasła nie są takie same.');
    }

    if(!length_of_text_between_min_and_max($pass))
    {
        throw new Exception('Hasło musi zawierać ilość znaków z przedziału 8 - 20.');
    }
}

function validate_email($email)
{
    if(!length_of_text_between_min_and_max($email,5,40))
    {
        throw new Exception ("Email musi zawierać ilość znaków z zakresu 8 - 40.");
    }
}


function validate_login($login)
{
    if(!length_of_text_between_min_and_max($login,1))
    {
        throw new Exception ('Login musi zawierać maksymanie 20 znaków');
    }

    $sql = "SELECT * FROM `Login` WHERE login = '$login'";

    $connect = connectToDataBase();

    $result = $connect->query($sql);

    if($result->num_rows !=0)
    {
        throw new Exception ("Podany login jest zajęty.");
    }
}


function hash_pass($pass)
{
    // $salt = random_bytes();
    $hs_pass = hash('sha256',$pass);

    return $hs_pass;
}

function add_login_to_data_base($connect)
{
    session_start();
    $login = $_SESSION['login'];
    $pass = $_SESSION['pass'];

    $hs_pass = hash_pass($pass);
    
    //add
    $sql = "INSERT INTO `Login`(`login`, `login_Password`) VALUES ('$login', '$hs_pass')";
    $connect -> query($sql);
         
    //find
    $sql = "SELECT * FROM `Login` WHERE login = '$login'";
    $result = $connect -> query($sql);

    $_SESSION['login'] = $login;

    if($result)
    {
        return $listDataOfAccount = $result->fetch_assoc();
    }
    else
    {
        throw new Exception("Ups. Coś poszło źle. Spróbuj ponownie później.");
    }   
}

function add_ADMIN_to_database($connect,$id_fk)
{
    session_start();

    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    
    $sql = "INSERT INTO `Application_user`(`Name`, `Last_name`, `Email`,`Admin`,`id_login_FK`) 
    VALUES ('$name','$lastname','$email',1,'$id_fk')";

    $result = $connect -> query($sql);

    if(!$result)
    {
        throw new Exception("Ups. Coś poszło źle. Spróbuj ponownie później.");
    }

    $sql = "SELECT * FROM `Application_user` WHERE id_login_FK = '$id_fk'";
    $result = $connect -> query($sql);
    if(!$result)
    {
        throw new Exception("Coś poszło nie po naszej myśli, spróbuj ponowie później");
    }

    $list = $result->fetch_assoc();
    
    $_SESSION['Name'] = $name;

    $_SESSION['Last_name'] = $lastname;
    $_SESSION['Email'] = $email;

    $_SESSION['id_login_FK'] = $id_fk;
    $_SESSION['id_user'] = $list['Id_user'];
    
    $_SESSION['admin'] = $list['Admin'];;

}


function add_user_to_database($connect,$id_fk)
{
    session_start();

    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    
    $sql = "INSERT INTO `Application_user`(`Name`, `Last_name`, `Email`,`id_login_FK`) 
    VALUES ('$name','$lastname','$email','$id_fk')";

    $result = $connect -> query($sql);

    if(!$result)
    {
        throw new Exception("Ups. Coś poszło źle. Spróbuj ponownie później.");
    }

    $sql = "SELECT * FROM `Application_user` WHERE id_login_FK = '$id_fk'";
    $result = $connect -> query($sql);
    if(!$result)
    {
        throw new Exception("Coś poszło nie po naszej myśli, spróbuj ponowie później");
    }

    $list = $result->fetch_assoc();
    
    $_SESSION['Name'] = $name;

    $_SESSION['Last_name'] = $lastname;
    $_SESSION['Email'] = $email;

    $_SESSION['id_login_FK'] = $id_fk;
    $_SESSION['id_user'] = $list['Id_user'];
    
    $_SESSION['admin'] = $list['Admin'];;

}

?>