<?php

$students = [
    'Anne with an E' => 9,
    'William' => 4,
    'John Snow' => 6,
    'Luke Skywalker' => 7,
    'Han Solo' => 10
];

// This method to order descendant the array values keeping the keys.
arsort($students);

var_dump($students);
