<?php

$notasBimestre1 = [
    'Anne with an E' => 6,
    'William' => 4,
    'John Snow' => 6,
    'Luke Skywalker' => 7,
    'Han Solo' => 10
];

$notasBimestre2 = [
    'William' => 6,
    'John Snow' => 6,
    'Luke Skywalker' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump(array_keys($alunosFaltantes));
