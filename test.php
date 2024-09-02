<?php

$bool = validate("()(())(()");
var_dump($bool);

function validate (string $str): bool {
    $stack = [];

    foreach (str_split($str) as $char) {
        if ($char === '(') {
            array_push($stack, $char);
        } elseif ($char === ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }

    return empty($stack);
}