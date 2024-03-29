<?php


//Todo Application

//Todo, Comment, User

class Task

{
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}


$tasks = [
    new Task('Go to the store'),
    new Task('Finish my chores'),
    new Task('Clean my room'),
];


$tasks[0]->complete();

require 'index.view.php';
