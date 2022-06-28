<?php

$students = [
    [
        'name' => 'Mary',
        'note' => 10,
    ],[
        'name' => 'John',
        'note' => 6,
    ],[
        'name' => 'Carl',
        'note' => 8,
    ],[
        'name' => 'James',
        'note' => 5,
    ],
];

function orderingNotes(array $student1, array $student2): int
{
    /**
     * In this way the notes will be sorted in ascendant order.
     * To order descendant, change the variables order.
     */
    return $student1['note'] <=> $student2['note'];
}

usort($students, 'orderNotes');
var_dump($students);
