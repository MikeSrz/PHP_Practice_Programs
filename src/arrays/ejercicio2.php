<?php
    if (isset($_GET['userQuestion'])) {
        $userQuestion = $_GET['user_question'];
        $answers = ["Sí", "No", "Tal vez", "Quizás", "Mateo."];
        $randomAnswer = $answers[array_rand($answers)];
        //Presentamos:
        echo "Pregunta: $userQuestion <br/>";
        echo "Respuesta: $randomAnswer";
    }
?>