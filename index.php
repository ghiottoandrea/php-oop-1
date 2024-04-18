<?php

class Production{

    public $title;
    public $language;
    public $vote;

    public function __construct(public string $title, public string $language, public string $vote)

}