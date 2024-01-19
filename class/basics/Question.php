<?php

class Question
{
    private int $id;
    private string $intitulé;
    private string $explication;
    private array $answers = [];

    public function __construct(array $data)
    {
        $this->id = $data['idQuestion'];
        $this->intitulé = $data['intitulé'];
        $this->explication = $data['explication'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIntitulé()
    {
        return $this->intitulé;
    }

    public function getExplication()
    {
        return $this->explication;
    }

    public function getAnswers()
    {
        return $this->answers;
    }

    public function setAnswers(array $answers)
    {
        $this->answers = $answers;
        return $this;
    }
}