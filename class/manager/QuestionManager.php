<?php

class QuestionManager
{
    private PDO $database;

    public function __construct(PDO $database)
    {
        $this->database = $database;      
    }

    public function findAllByQuizId(int $idQuiz)
    {
        $query = 'SELECT * FROM question INNER JOIN quiz_question ON question.id = quiz_question.idQuestion WHERE idQuiz = :idQuiz';
        $result = $this->database->prepare($query);
        $result->execute([
            ':idQuiz' => $idQuiz
        ]);
        $questionDatas = $result->fetchAll();

        $questions = [];
        foreach($questionDatas as $questionData) {
            $questions[] = new Question($questionData);
        }

        return $questions;
    }

}