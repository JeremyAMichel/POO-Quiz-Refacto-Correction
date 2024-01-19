<?php

class Quiz
{
    private int $id;
    private string $theme;
    private array $questions = [];

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->theme = $data['theme'];
    }

    public function getId(){
        return $this->id;
    }

    public function getTheme(){
        return $this->theme;
    }

    public function getQuestions(){
        return $this->questions;
    }

    public function setQuestions(array $questions){
        $this->questions = $questions;
        return $this;
    }
}