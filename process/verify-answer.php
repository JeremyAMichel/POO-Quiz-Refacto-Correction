<?php

require_once('../utils/load_classes.php');
require_once('../utils/database_connect.php');

session_start();

$_SESSION['is-answer-given'] = true;

// Récupère toutes les clés d'un tableau
$keys = array_keys($_POST);

// Vérifier s'il y a une clé dans le tableau
if (count($keys) === 1){
    $answerId = $keys[0];

    $answerManager = new AnswerManager($database);

    $answer = $answerManager->findAnswerById($answerId);

    if($answer->getIsCorrect()){
        $_SESSION['point'] += 1;
    }

    $_SESSION['id-answer-given'] = $answer->getId();

    header('Location: ../the-quiz.php');
}