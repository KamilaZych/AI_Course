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
<style>
        .flashcard {
            width: 550px;
            height: 370px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            background-color: #f1f1f1;
            border-radius: 5px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.4s;
            cursor: pointer;
            margin-left: auto;
            margin-right: auto;
        }

        .flashcard.rotate {
            transform: rotateY(180deg);
        }

        .flashcard div {
            font-size: 45px;
            color: purple;
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .flashcard .front {
            z-index: 2;
            pointer-events: none;
        }

        .flashcard .back {
            transform: rotateY(180deg);
            z-index: 1;
            pointer-events: none;
        }

        .button-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
        }

    .next-button {
        width: 130px;
        height: 45px;
        background-color: purple;
        color: white;
        border: 2px solid purple;
        border-radius: 10px;
        font-size: 16px;
        margin: 0 10px;
        cursor: pointer;
    }

    .next-button:hover {
        background-color: #4b0082;
    }

    button.next-button:first-child {
        margin-left: 0;
    }

    button.next-button:last-child {
        margin-right: 0;
    }

    </style>

</head>
<body>
    <div id="flashcards-container"></div>
    <br> <br> 
    <div class="button-container">
    <button class="next-button" onclick="showPreviousFlashcard()">Poprzednia</button>
    <button class="next-button" onclick="showNextFlashcard()">Następna</button>
</div>

    <br>

    <?php
    function do_query($sql)
    {
        $connect = connectToDataBase();
        $result = $connect->query($sql);

        if (!$result) {
            throw new Exception($sql);
        }
        return $result;
    }

    $course = $_POST["course"];
    $sql = "SELECT First_Word, Second_Word FROM Card 
    WHERE Id_course = (SELECT Id_course FROM Course WHERE Name = '$course') ";
    $result = do_query($sql);
    $cards = array();

    while ($row = $result->fetch_assoc()) {
        $card = array(
            'First_Word' => $row['First_Word'],
            'Second_Word' => $row['Second_Word']
        );
        $cards[] = $card;
    }

    $cards_json = json_encode($cards);
    ?>

    <script>
        var cards = <?php echo $cards_json; ?>;
        var currentIndex = 0;

        function showFlashcard(index) {
            var flashcardContainer = document.getElementById('flashcards-container');
            flashcardContainer.innerHTML = '';

            if (index < 0 || index >= cards.length) {
                flashcardContainer.innerHTML = 'Brak fiszek!';
                return;
            }

            var card = cards[index];
            var flashcard = document.createElement('div');
            flashcard.classList.add('flashcard');

            var front = document.createElement('div');
            front.classList.add('flashcard');
            front.innerHTML = card['First_Word'];

            front.addEventListener('click', function() {
                // Obracanie
                this.classList.add('rotate');

                setTimeout(function() {
                    front.style.display = 'none';

                    var back = document.createElement('div');
                    back.classList.add('flashcard');
                    back.innerHTML = card['Second_Word'];

                    flashcard.appendChild(back);
                }, 1000);
            });

            flashcard.appendChild(front);
            flashcardContainer.appendChild(flashcard);
        }

        function showPreviousFlashcard() {
            currentIndex--;
            showFlashcard(currentIndex);
        }

        function showNextFlashcard() {
            currentIndex++;
            showFlashcard(currentIndex);
        }

        showFlashcard(currentIndex);
    </script>
    <br>

    <?php
    if (file_exists("../include/footer.php")) {
        include("../include/footer.php");
    }
    ?>
</body>
</html>