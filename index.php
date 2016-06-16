<?php
    echo "Hello world!";
    
?>


<?php
    $name = "Mahmud";
    echo "<h1>variables</h1>Hello, $name!";
?>
<?php
    $a = "Elefant";
    $b = true;
    $c = 22;
    $d = 45.4;
    echo "<h1> type of variables</h1>string: $a ! <br>";
    echo "boolean: $b <br>";
    echo "number: $c <br>";
    echo "float: $d <hr>";
?>
<?php
     echo "<h1>String tricks</h1>";
    $a = 'Die ';
    $b = "hard";
    $c = "$a, $b";
    $d = '$a, $b';
    echo " $c  <br>";
    echo " $d  <hr>";
?>
<?php
     echo "<h1>Concatination</h1>";
    $a = 'Everybody';
    $b = 'dance';
    $c = $a . " " . $b;
    echo " $c  <hr>";
?>
<?php
     echo "<h1>Ghost to type</h1>";
    $a = (int)'05';
    $b = (string)1148.4;
    $c = (bool)-4;
    echo 'string -> number -> string' . $a . '<br>';
    echo 'number -> string' . $b . '<br>';
    echo 'number -> bool -> string ->' . $c . '<br>';
?>
<?php
     echo "<h1>Math ops</h1>";
    $a = (int)'05';
    $b = (string)1148.4;
    $c = (bool)-4;
    echo 'string -> number -> string' . $a . '<br>';
    echo 'number -> string' . $b . '<br>';
    echo 'number -> bool -> string ->' . $c . '<br>';
    echo "<hr>"
?>