<?php

// Typed properties
class User
{
    public int $id;
    public string $name;
}

// Arrow functions
$factor = 10;
$nums = array_map(fn($n) => $n * pow(2, $factor), [1, 2, 3, 4]);

//Null coalescing assignment operator
$array['key'] ??= pow(2, 3);

// Unpacking inside arrays
$parts = ['apple', 'pear'];

function convert(array $a) {
    return array_reverse($a);
}

$fruits = [
    'banana',
    ...convert($parts),
    'watermelon',
];
