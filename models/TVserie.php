<?php

class TVSerie extends Production{
    public $numbSeasons;

    public function __construct($name, $lastname, $vote, $numbSeasons){

        parent::__construct($name, $lastname, $vote);

        $this->numbSeasons = $numbSeasons;

    }

}
