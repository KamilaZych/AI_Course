<?php

function user_exist($login, $connect)
{
    session_start();

    $sql = "SELECT * FROM Login WHERE login='$login'";
    $result = $connect->query($sql);

    error_with_connect($sql, $connect);

    if ($result->num_rows == 0)
    {
        throw new Exception("Niepoprawny login");
    } 

    $listDataOfAccount = $result->fetch_assoc();
    $id_FK = $listDataOfAccount['id_login'];

    $sql = "SELECT * FROM Application_user WHERE id_login_FK='$id_FK'";
    $result = $connect->query($sql);

    $list = $result->fetch_assoc();

    $_SESSION['login'] = $listDataOfAccount['login'];
    $_SESSION['Name'] = $list['Name'];

    $_SESSION['Last_name'] = $list['Last_name'];
    $_SESSION['Email'] = $list['Email'];

    $_SESSION['id_login_FK'] = $list['id_login_FK'];
    $_SESSION['id_user'] = $list['Id_user'];
    
    $_SESSION['admin'] = $list['Admin'];
    $_SESSION['Is_active'] = $list['Is_active'];

    return $listDataOfAccount;
}

function isActive($listDataOfAccount)
{
    $isActive = $_SESSION['Is_active'];

    if($isActive == 0)
    {
        throw new Exception('Użytkownik został usunięty.');
    }
}


function verify_pass($listDataOfAccount, $pass)
{
    $passDB = trim($listDataOfAccount['login_Password']);
    $pass = trim($pass);
    $hs_pass = hash('sha256',$pass);

    $_SESSION["DBpass"] = $passDB;
    $_SESSION["PostPass"] = $hs_pass;


    if($passDB != $hs_pass)
    {
        throw new Exception ("Niepoprawny login lub hasło.");
    }
}


function error_with_connect($sql, $connect)
{
    if (!$result = $connect->query($sql))
    {
        throw new Exception("Problem z połączeniem. Spróbuj później.");
    }
}

function isAdmin($listDataOfAccount)
{
    $isAdmin = $_SESSION['admin'];

    if($isAdmin == false || $isAdmin === 0)
    {
        header('Location: ../../user/account.php');
    }
    
    if($isAdmin == true || $isAdmin === 1)
    {
        header('Location: ../../cms/php/dashboard.php');
    }
}
?>