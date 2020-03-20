<?php


class User{
    
    public int $id;
    public string $name;}



$factor = 10;
$nums = \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'array_map', [fn($n) => $n * \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'pow', [2, $factor]), [1, 2, 3, 4]]);


$array['key'] ??= \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'pow', [2, 3]);


$parts = ['apple', 'pear'];

function convert(array $a){
    return \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'array_reverse', [$a]);}


$fruits = [
    'banana',
    ...\Badoo\SoftMocks::callFunction(__NAMESPACE__, 'convert', [&$parts]),
    'watermelon',
];