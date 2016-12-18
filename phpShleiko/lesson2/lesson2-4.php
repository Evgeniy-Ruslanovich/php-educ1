<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04.12.2016
 * Time: 0:15
 */
/**
 * @param $arg1
 * @param $arg2
 * @param $operation
 * @return float|int|string
 */
function calc ($arg1, $arg2, $operation) {
    if ( !( is_int($arg1) || is_float($arg1)) ) {
        return "invalid argument 1";
    }
    if ( !( is_int($arg2) || is_float($arg2)) ) {
        return "invalid argument 2";
    }
    switch ($operation):
        case "summ":
            return $arg1 + $arg2;
        case "diff":
            return $arg1 - $arg2;
        case "div":
            return $arg1 / $arg2;
        case "mult":
            return $arg1 * $arg2;
        default:
            echo "Invalid operation";

    endswitch;
}

echo calc(4,5, 'summ') . '<br>';
echo calc(4,5, 'diff') . '<br>';
echo calc(4,5, 'div') . '<br>';
echo calc(4,5, 'mult') . '<br>';
echo calc('blabla',5, 'summ') . '<br>';
echo calc(4,'blabla', 'summ') . '<br>';
echo calc(4,5, 'blabla') . '<br>';