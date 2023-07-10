<?php

// umieszczamy przykładowe dane - fiszki podstawowe
$insert[] .= "INSERT INTO `Card_Language` (`Id_language`, `Name`) VALUES
(1, 'English');";
$insert[] .= "
INSERT INTO `Category` (`Id_category`, `Name`) VALUES
(1, 'Animals'),
(2, 'Food'),
(3, 'School'),
(4, 'Nature'),
(5, 'Work');";
$insert[] .= "INSERT INTO `Course` (`Id_course`, `Name`, `Id_user`, `Course_Level`, `Availability`) VALUES
(7, 'Courses: Kurs dla początkujących', 15, 'A1', b'1'),
(17, 'Courses: Kurs dla średniozaawansowanych', 15, 'B1', b'1'),
(18, 'Courses: Kurs dla zaawansowanych', 15, 'C1', b'1');";

$insert[] .= "INSERT INTO `Card` (`Id_card`, `First_Word`, `Second_Word`, `Id_category`, `Id_language`, `Id_user`, `Id_course`) VALUES
(63, 'vampire', 'wampir', 1, 1, 14, 18),
(64, 'werewolf', 'wilkołak', 1, 1, 14, 18),
(65, 'witch', 'czarownica', 1, 1, 14, 18),
(66, 'tribrid', 'trybryda', 1, 1, 14, 18),
(119, 'apple', 'jabłko', 2, 1, 5, 7),
(120, 'bread', 'chleb', 2, 1, 5, 7),
(121, 'cheese', 'ser', 2, 1, 5, 7),
(122, 'potato', 'ziemniak', 2, 1, 5, 7),
(123, 'chicken', 'kurczak', 2, 1, 5, 7),
(124, 'orange', 'pomarańcza', 2, 1, 5, 7),
(125, 'rice', 'ryż', 2, 1, 5, 7),
(126, 'fish', 'ryba', 2, 1, 5, 7),
(127, 'carrot', 'marchewka', 2, 1, 5, 7),
(128, 'pizza', 'pizza', 2, 1, 5, 7),
(129, 'soup', 'zupa', 2, 1, 5, 7),
(130, 'beef', 'wołowina', 2, 1, 5, 7),
(131, 'egg', 'jajko', 2, 1, 5, 7),
(132, 'milk', 'mleko', 2, 1, 5, 7),
(133, 'pasta', 'makaron', 2, 1, 5, 7),
(134, 'book', 'książka', 3, 1, 5, 7),
(135, 'teacher', 'nauczyciel', 3, 1, 5, 7),
(136, 'pen', 'długopis', 3, 1, 5, 7),
(137, 'classroom', 'klasa', 3, 1, 5, 7),
(138, 'homework', 'praca domowa', 3, 1, 5, 7),
(139, 'desk', 'biurko', 3, 1, 5, 7),
(140, 'student', 'uczeń', 3, 1, 5, 7),
(141, 'board', 'tablica', 3, 1, 5, 7),
(142, 'lesson', 'lekcja', 3, 1, 5, 7),
(143, 'exam', 'egzamin', 3, 1, 5, 7),
(144, 'job', 'praca', 4, 1, 5, 17),
(145, 'office', 'biuro', 4, 1, 5, 17),
(146, 'colleague', 'kolega z pracy', 4, 1, 5, 17),
(147, 'salary', 'pensja', 4, 1, 5, 17),
(148, 'interview', 'rozmowa kwalifikacyjna', 4, 1, 5, 17),
(149, 'resume', 'życiorys', 4, 1, 5, 17),
(150, 'promotion', 'awans', 4, 1, 5, 17),
(151, 'deadline', 'termin', 4, 1, 5, 17),
(152, 'meeting', 'spotkanie', 4, 1, 5, 17),
(153, 'project', 'projekt', 4, 1, 5, 17),
(154, 'negotiation', 'negocjacje', 4, 1, 5, 18),
(155, 'networking', 'nawiązywanie kontaktów', 4, 1, 5, 18),
(156, 'leadership', 'przywództwo', 4, 1, 5, 18),
(157, 'workload', 'obciążenie pracy', 4, 1, 5, 18),
(158, 'entrepreneurship', 'przedsiębiorczość', 4, 1, 5, 18),
(159, 'professional development', 'rozwój zawodowy', 4, 1, 5, 18),
(160, 'stress management', 'zarządzanie stresem', 4, 1, 5, 18),
(161, 'teamwork', 'praca zespołowa', 4, 1, 5, 18),
(162, 'critical thinking', 'myślenie krytyczne', 4, 1, 5, 18),
(163, 'project management', 'zarządzanie projektem', 4, 1, 5, 18),
(164, 'innovation', 'innowacja', 4, 1, 5, 18),
(165, 'time management', 'zarządzanie czasem', 4, 1, 5, 18),
(166, 'conflict resolution', 'rozwiązywanie konfliktów', 4, 1, 5, 18),
(167, 'presentation skills', 'umiejętności prezentacyjne', 4, 1, 5, 18),
(168, 'workplace ethics', 'etyka w miejscu pracy', 4, 1, 5, 18),
(169, 'problem-solving', 'rozwiązywanie problemów', 4, 1, 5, 18),
(170, 'professionalism', 'profesjonalizm', 4, 1, 5, 18),
(171, 'workplace diversity', 'różnorodność w miejscu pracy', 4, 1, 5, 18),
(172, 'career advancement', 'rozwój kariery', 4, 1, 5, 18);";


?>