<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/form-style.css">    
</head>

<body>
    <form name="edit_account" action="../lib/account/edit_account-validate.php" method="POST">
            <div>
                <label class="tt-input" for="name">Imię</label><br>
                <input class="input-style" type="text" name="name" placeholder="Imię" required value = <?php session_start(); echo $_SESSION['Name'];?>>
            </div>
            <div>
                <label class="tt-input" for="name">Nazwisko</label><br>
                <input class="input-style" type="text" name="lastname" placeholder="Nazwisko" required value = <?php session_start(); echo $_SESSION['Last_name'];?>>
            </div>
            <div>
                <label class="tt-input" for="name">Email</label><br>
                <input class="input-style" type="email" name="email" placeholder="Email" required value = <?php session_start(); echo $_SESSION['Email'];?>> 
            </div>
            <div>
                <input class="btn-edit" type="submit" name="submit" value="Edytuj"><br>
                <h5 class="error"> <?php session_start(); echo $_SESSION['error'];unset($_SESSION['error']);?> </h5>
            </div>
    </form>
    <div><h3 class="btn-edit"><a href="accept.php">Usuń konto</a></h3></div>
</body>

