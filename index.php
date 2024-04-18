<?php

require_once __DIR__  . '/models/Production.php';

$firstProduction = new Production('First Product', 'italian', '5');
$secondProduction = new Production('Second Product', 'french', '2');

var_dump($firstProduction, $secondProduction);