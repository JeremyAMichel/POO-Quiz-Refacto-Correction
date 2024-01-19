<?php

require_once('../utils/load_classes.php');
require_once('../utils/database_connect.php');

// Récupère toutes les clés d'un tableau
$keys = array_keys($_POST);

// Vérifier s'il y a une clé dans le tableau
if (count($keys) === 1){
    $quizId = $keys[0];

    $quizManager = new QuizManager($database);

    $quiz = $quizManager->findQuizById($quizId);

    $questionManager = new QuestionManager($database);

    $quiz->setQuestions($questionManager->findAllByQuizId($quiz->getId()));

    session_start();
    $_SESSION['quiz'] = $quiz;

    header('Location: ../to-start-quiz.php');
}


