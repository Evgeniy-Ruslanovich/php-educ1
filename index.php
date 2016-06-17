<?php
    echo "Hello world!"; 
?>

<h2>Разбираем примеры из методички</h2>
<?php

    $name = "Mahmud";
    echo "<h3>variables</h3>Hello, $name!";
?>
<?php
    $a = "Elefant";
    $b = true;
    $c = 22;
    $d = 45.4;
    echo "<h3> type of variables</h3>string: $a ! <br>";
    echo "boolean: $b <br>";
    echo "number: $c <br>";
    echo "float: $d <hr>";
?>
<?php
     echo "<h3>String tricks</h3>";
    $a = 'Die ';
    $b = "hard";
    $c = "$a, $b";
    $d = '$a, $b';
    echo " $c  <br>";
    echo " $d  <hr>";
?>
<?php
     echo "<h3>Concatination</h3>";
    $a = 'Everybody';
    $b = 'dance';
    $c = $a . " " . $b;
    echo " $c  <hr>";
?>
<?php
     echo "<h3>Ghost to type</h3>";
    $a = (int)'05';
    $b = (string)1148.4;
    $c = (bool)-4;
    echo 'string -> number -> string: ' . $a . '<br>';
    echo 'number -> string: ' . $b . '<br>';
    echo 'number -> bool -> string: ' . $c . '<hr>';
?>
<?php
    echo "<h3>Math ops</h3>";
    $a = 6;
    $b = 4;
    echo 'Сложение 6+4' . ($a + $b) . '<br>';
    echo 'Вычитание 6-4=' . ($a - $b) . '<br>';
    echo 'Умножение 6*4=' . $a * $b . '<br>';
    echo 'Деление 6/4=' . $a / $b . '<br>';
    echo 'Остаток от деления ост(6/4)=' . $a % $b . '<br>';
    echo 'Возведение в степень 6^4=' . pow($a, $b) . '<hr>';
  //  echo 'Возведение в степень 6^4=' . $a ** $b . '<hr>';
?>
<?php
    echo "<h3>Tricky math ops</h3>";
    $a = 6;
    $b = 4;
    $a += $b;
    echo 'a=6, b=4, a += b <br>';
    echo 'a=' . $a . '<hr>';
?>
