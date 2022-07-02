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

$students = array_merge($students2022, $newStudents);
var_dump($students);
