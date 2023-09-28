<?php

namespace php\Class\Event;

class Conference extends Event
{
    private array $questions;
    private string $argument;

    /**
     * @param array $questions
     * @param string $argument
     */
    public function __construct(array $questions, string $argument, string $place, \DateTime $date)
    {
        parent::__construct($place, $date);
        $this->questions = $questions;
        $this->argument = $argument;
    }


    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function setQuestions(array $questions): void
    {
        $this->questions = $questions;
    }

    public function addQuestions(string $question): void
    {
        $this->questions[] = $question;
    }

    public function getArgument(): string
    {
        return $this->argument;
    }

    public function setArgument(string $argument): void
    {
        $this->argument = $argument;
    }
}