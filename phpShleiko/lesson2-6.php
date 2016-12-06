<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04.12.2016
 * Time: 1:18
 */
function power($arg, $pow) {
    if ($pow === 1) {
        return $arg;
    }
    else {
        return ($arg * power($arg, $pow-1));
    }
}

echo pow(2,4) . '<br>';
echo pow(2,1) . '<br>';
