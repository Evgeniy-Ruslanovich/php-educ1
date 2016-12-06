<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04.12.2016
 * Time: 0:15
 */

$a = -10;
$b = 13;

if (($a >= 0) && ($b >=0)) {
    echo ($a - $b);
    }
elseif (($a < 0) && ($b < 0)) {
    echo ($a * $b);
}
else {
    echo ($a + $b);
}