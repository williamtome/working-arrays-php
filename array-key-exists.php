<?php

$students = [
    'Ana' => 10,
    'Claire' => 5,
    'Joseph' => 9,
    'William' => null,
];

$exists = array_key_exists('Fulano', $students);

var_dump(isset($students['William']));
var_dump($exists);
