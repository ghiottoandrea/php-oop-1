<?php

class Movie extends Production{
    public $profits;
    public $duration;

    public function __construct($name, $lastname, $vote, $profits, $duration){

        parent::__construct($name, $lastname, $vote);

        $this->profits = $profits;
        $this->duration = $duration;

    }
}