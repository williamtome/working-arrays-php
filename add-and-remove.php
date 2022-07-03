<?php

$students2022 = [
    'Anne with an E',
    'William',
    'John Snow',
    'Luke Skywalker',
    'Han Solo'
];

array_push($students2022, 'Victor', 'Mary', 'Kellen');
$students2022[] = 'Michael';

array_unshift($students2022, 'Joseph', 'Franklin', 'Martin');

echo array_shift($students2022) . PHP_EOL;
echo array_pop($students2022) . PHP_EOL;

var_dump($students2022);

$data = ['William', 10, 33];
var_dump(list($name, $note, $age) = $data);

$data2 = [
    'name' => 'William',
    'note' => 10,
    'age' => 33
];
var_dump([$name, $note, $age] = $data2);

$accounts = [
    [
        'balance' => 800,
        'titular' => 'Fulano',
    ],
    [
        'balance' => 1000,
        'titular' => 'Cicrano',
    ],
    [
        'balance' => 350,
        'titular' => 'Beltrano',
    ],
];

foreach ($accounts as ['titular' => $titular, 'balance' => $balance]) {
    echo "$titular possui $balance reais." . PHP_EOL;
}
