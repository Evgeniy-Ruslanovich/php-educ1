<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06.12.2016
 * Time: 20:23
 */

$current_hour = (int)date('G');
$current_minute = (int)date('i');
//var_dump($time);
function word_define($time, $word11, $word1, $word2)
{
    $word = null;
    if (
           (($time > 10) && ($time < 20))   //все значения от 11 до 19 называются отдельно, это относится не только к часам
        || (($time % 10) === 0)        // ноль,десять, двадцать, тридцать и далее часов (да, в сутках часов только 24, но этот скрипт моно применять к любым количествам
        || ((($time % 10) >= 5) && (($time % 10) <= 9))   // заканчивается на числа от 5 до 9 - пять, двадцать пять, сто двадцать пять и т.п.
       )
    {
        $word = $word11;
    }
    elseif (($time % 10) === 1) {
        $word = $word1;              // Все, что заканчивается на 1, кроме 11, который мы исключили ранее
    }
    elseif((($time % 10) >= 2) && (($time % 10) <= 4)) {
        $word = $word2;
    }
    else {
        return 'uncorrect argument';
    }
    return $word;
}

function hour_word_define ($time) {
    return word_define($time, 'часов','час','часа');
}

function minute_word_define ($time) {
    return word_define($time,'минут','минута','минуты');
}

echo 'Текущее время: ' . $current_hour . ' ' . hour_word_define($current_hour)
    . ' ' . $current_minute . ' ' . minute_word_define($current_minute) . '<br>';

/* ПРОВЕРОЧНЫЙ ЦИКЛ */
echo "<hr>Проверочный цикл часы<br>";
for ($i = 0; $i <= 24; $i++){
    echo $i . ' ' . hour_word_define($i) . '<br>';
}
echo "<hr>Проверочный цикл минуты<br>";
for ($i = 0; $i <= 60; $i++){
    echo $i . ' ' . minute_word_define($i) . '<br>';
}