<?php

$create[] .= "CREATE TABLE `Application_user` (
    `Id_user` int(11) NOT NULL,
    `Name` varchar(20) NOT NULL,
    `Last_name` varchar(20) NOT NULL,
    `Email` varchar(40) NOT NULL,
    `Admin` bit(1) DEFAULT b'0',
    `id_login_FK` int(11) NOT NULL,
    `Is_active` bit(1) NOT NULL DEFAULT b'1'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";


$create[] .= "CREATE TABLE `Card` (
    `Id_card` int(11) NOT NULL,
    `First_Word` varchar(200) NOT NULL,
    `Second_Word` varchar(200) NOT NULL,
    `Id_category` int(11) NOT NULL,
    `Id_language` int(11) NOT NULL,
    `Id_user` int(11) NOT NULL,
    `Id_course` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";


  

  $create[] .="CREATE TABLE `Card_Language` (
    `Id_language` int(11) NOT NULL,
    `Name` varchar(20) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
  


  $create[] .= "CREATE TABLE `Category` (
    `Id_category` int(11) NOT NULL,
    `Name` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";



  $create[] .= "CREATE TABLE `Course` (
    `Id_course` int(11) NOT NULL,
    `Name` varchar(120) NOT NULL,
    `Id_user` int(11) NOT NULL,
    `Course_Level` char(2) NOT NULL,
    `Availability` bit(1) NOT NULL DEFAULT b'0'
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";



  $create[] .= "CREATE TABLE `Login` (
    `id_login` int(11) NOT NULL,
    `login` varchar(20) NOT NULL,
    `login_Password` binary(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";



  $create[] .= "ALTER TABLE `Application_user`
  ADD PRIMARY KEY (`Id_user`),
  ADD UNIQUE KEY `id_login_FK` (`id_login_FK`);";



  $create[] .= "ALTER TABLE `Card`
  ADD PRIMARY KEY (`Id_card`),
  ADD KEY `Id_category` (`Id_category`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_course` (`Id_course`);";


$create[] .= "ALTER TABLE `Card_Language`
ADD PRIMARY KEY (`Id_language`);";

$create[] .= "ALTER TABLE `Category`
ADD PRIMARY KEY (`Id_category`);";
$create[] .= "ALTER TABLE `Course`
ADD PRIMARY KEY (`Id_course`),
ADD KEY `Id_user` (`Id_user`);";

$create[] .= "ALTER TABLE `Login`
ADD PRIMARY KEY (`id_login`),
ADD UNIQUE KEY `login` (`login`);";

$create[] .= "ALTER TABLE `Application_user`
MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;";

$create[] .= "ALTER TABLE `Card`
MODIFY `Id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;";

$create[] .= "ALTER TABLE `Card_Language`
MODIFY `Id_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;";

$create[] .= "ALTER TABLE `Category`
MODIFY `Id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;";

$create[] .= "ALTER TABLE `Course`
MODIFY `Id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;";

$create[] .= "ALTER TABLE `Login`
MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;";

$create[] .= "ALTER TABLE `Application_user`
ADD CONSTRAINT `id_login_FK` FOREIGN KEY (`id_login_FK`) REFERENCES `Login` (`id_login`);";

$create[] .= "ALTER TABLE `Card`
ADD CONSTRAINT `Card_ibfk_1` FOREIGN KEY (`Id_category`) REFERENCES `Category` (`Id_category`),
ADD CONSTRAINT `Card_ibfk_2` FOREIGN KEY (`Id_language`) REFERENCES `Card_Language` (`Id_language`),
ADD CONSTRAINT `Card_ibfk_3` FOREIGN KEY (`Id_user`) REFERENCES `Application_user` (`Id_user`),
ADD CONSTRAINT `Card_ibfk_4` FOREIGN KEY (`Id_course`) REFERENCES `Course` (`Id_course`);";

$create[] .= "ALTER TABLE `Course`
ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `Application_user` (`Id_user`);";

$create[] .= "COMMIT;";

?>