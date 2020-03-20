<?php

use Foo\Bar\{Baz1, Baz2,};

function a($cnt)
{
    return str_pad('a', intval($cnt));
}

function o() : object
{
    $o = new stdClass();
    $o->value = a(1);
    return $o;
}

echo 'end';
