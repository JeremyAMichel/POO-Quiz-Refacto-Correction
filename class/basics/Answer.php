<?php

class Answer
{
    private int $id;
    private string $intitulé;
    private bool $isCorrect;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->intitulé = $data['intitulé'];
        $this->isCorrect = $data['isCorrect'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIntitulé()
    {
        return $this->intitulé;
    }

    public function getIsCorrect()
    {
        return $this->isCorrect;
    }
}