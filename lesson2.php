﻿<?php
/**
 * Домашнее задание №2
 *автор Евгений Зайнутдинов
 *страница выводит разное приветствие в зависимости от времени суток,
 *и предложения по меню, в зависимости от кулинарных предпочтений клиента
 */

    $userName = 'Василий'; //имя пользователя
    $time =  (int) date (G); //Запрашиваем время, сразу переводим в целое число


 /**   echo "<h1> Привет,  $userName!</h1>";
 *  //echo "$time<br>";  Проверка как запросилось время
 * //echo gettype($time); проверка, какого типа в итоге время
*
 *   $dayPeriod = 0; //переменая времени дня

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
/**
 * Функция возвращает цифру в зависимости от вермени суток.
 * до 6 утра - 1. С 6 до 12 - 2, с 12 до 18 - 3, с 18 до 24 - 4.
 * @return int
 */
    function getDayPeriod ()
    {
        Global $time;
        if ($time <= 6) {
          return 1;
        } elseif ($time >= 6 && $time < 12) {
          return 2;
        } elseif ($time >= 12 && $time < 18) {
          return 3;
        } elseif ($time >= 18 && $time < 24) {
          return 4;
        }
    }

    $dayPeriod = getDayPeriod (); //присваиваем значение периода дня с помощью функции

  //  echo "$dayPeriod <br>"; //проверяем, как определилось время дня
    $Hello = "Доброго времени суток, "; //дефаультное значение переменной "приветственная фраза", на случай если что-то пойдет не так
/**
 * Функция присваивает переменной приветственой фразы $Hello разное значение, в зависимости от времени суток
 * @param $Hello
 */
    function helloPhrase (&$Hello)
    {
        Global $dayPeriod;
        switch ($dayPeriod) {
            case 1:
              $Hello = "Доброй ночи, ";
                break;
            case 2:
                $Hello = "Доброй утро, ";
                break;
            case 3:
                $Hello = "Добрый день, ";
                break;
            case 4:
                $Hello = "Добрый вечер, ";
                break;
            default:
                break;
        }

    }
helloPhrase ($Hello); //Вызываем функцию присвоения приветственной фразы
// echo "$Hello <br>"; проверка приветственной фразы

echo "<h1> $Hello $userName!</h1>";

   ?>
