<?php

$students2022 = [
    'Anne with an E',
    'William',
    'John Snow',
    'Luke Skywalker',
    'Han Solo'
];

$newStudents = [
    'Nico',
    'Kilderson',
    'Patrícia',
    'Lucas',
];

/*
 * This works on PHP 7.4 or newer
 */
$students = [...$students2022, ...$newStudents];
var_dump($students);

funcao(...[1, 2, 3]);

function funcao(int $a, int $b, int $c)
{
    var_dump($a, $b, $c);
}
