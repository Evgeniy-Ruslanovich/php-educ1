<?php
/**
 * Домашнее задание №2
 *автор Евгений Зайнутдинов
 *страница выводит разное приветствие в зависимости от времени суток,
 *и предложения по меню, в зависимости от кулинарных предпочтений клиента
 */
    $userName = 'Василий'; //имя пользователя
    $time =  (int) date (G); //Запрашиваем время, сразу переводим в целое число


    echo "<h1> Привет,  $userName!</h1>";
    //echo "$time<br>";  Проверка как запросилось время
    //echo gettype($time); проверка, какого типа в итоге время

    $dayPeriod = 0; //переменая времени дня

  /**  swith ($time)
        case ($time < 6)
            $dayPeriod = 0;
            break;
        case ($time >= 6)&&($time < 12)
            $dayPeriod = 2;
        case 0,1,2,3,4,5
            $dayPeriod = 0;
            break;
        case 0,1,2,3,4,5
            $dayPeriod = 0;
            break;
     */
  function getDayPeriod ($clock)
    if ($time <=6) {
        $dayPeriod = 1;
    } elseif ($time >= 6 && $time < 12) {
        $dayPeriod = 2;
    } elseif ($time >= 12 && $time < 18) {
        $dayPeriod = 3;
    } elseif ($time >= 18 && $time < 24) {
        $dayPeriod = 4;
    }
   // echo "$dayPeriod"; проверяем, как определилось время дня


   ?>
