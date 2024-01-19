<?php

require_once('../utils/load_classes.php');
require_once('../utils/database_connect.php');

session_start();

$answerManager = new AnswerManager($database);

foreach($_SESSION['quiz']->getQuestions() as $question) {
    $question->setAnswers($answerManager->findAllByQuestionId($question->getId()));
    
}

$_SESSION['total-number-question'] = count($_SESSION['quiz']->getQuestions());
$_SESSION['actual-question-index'] = 0;
$_SESSION['is-answer-given'] = false;
$_SESSION['point'] = 0;
$_SESSION['id-answer-given'] = '';

header('Location: ../the-quiz.php');