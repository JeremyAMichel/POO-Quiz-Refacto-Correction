<?php

class QuizManager
{
    private PDO $database;

    public function __construct(PDO $database)
    {
        $this->database = $database;      
    }

    public function findAllQuiz(){
        $query = 'SELECT * FROM quiz';
        $result = $this->database->prepare($query);
        $result->execute();
        $quizDatas = $result->fetchAll();

        $quizs = [];
        foreach($quizDatas as $quizData) {
            $quizs[] = new Quiz($quizData);
        }

        return $quizs;
    }

    public function findQuizById(int $idQuiz){
        $query = 'SELECT * FROM quiz WHERE id = :id';
        $result = $this->database->prepare($query);
        $result->execute([
            ':id' => $idQuiz
        ]);
        $quizData = $result->fetch();   

        return new Quiz($quizData);
    }
}