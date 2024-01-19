<?php

class AnswerManager
{
    private PDO $database;

    public function __construct(PDO $database)
    {
        $this->database = $database;      
    }

    public function findAllByQuestionId(int $idQuestion) {
        $query = 'SELECT * FROM answer WHERE idQuestion = :idQuestion';
        $result = $this->database->prepare($query);
        $result->execute([
            ':idQuestion' => $idQuestion
        ]);
        $answerDatas = $result->fetchAll();

        $answers = [];
        foreach($answerDatas as $answerData) {
            $answers[] = new Answer($answerData);
        }

        return $answers;
    }

    public function findAnswerById(int $idAnswer){
        $query = 'SELECT * FROM answer WHERE id = :id';
        $result = $this->database->prepare($query);
        $result->execute([
            ':id' => $idAnswer
        ]);
        $answerData = $result->fetch();   

        return new Answer($answerData);
    }
}