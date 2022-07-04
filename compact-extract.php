<?php

$data = [
    'name' => 'William',
    'note' => 10,
    'age' => 33,
];

/*
 * Transform an array on variables.
 *
 * Disclaimer: Do not use this function in variables that you don't cleaned.
 * E.g. in $_GET, $_FILES
 * Link doc: https://www.php.net/manual/en/function.extract.php
 */
extract($data);

var_dump($name, $note, $age);

/*
 * Transform one or more variables in an array.
 */
$data2 = compact('name', 'note', 'age');

var_dump($data2);
