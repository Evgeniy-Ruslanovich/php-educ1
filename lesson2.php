<?php
/**
 * Домашнее задание №2
 *автор Евгений Зайнутдинов
 *страница выводит разное приветствие в зависимости от времени суток,
 *и предложения по меню, в зависимости от кулинарных предпочтений клиента
 */

    $userName = 'Василий'; //имя пользователя
    $time =  (int) date (G); //Запрашиваем время, сразу переводим в целое число

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

echo "<h1> $Hello $userName!</h1> <h3>Добро пожаловать в наш ресторан!</h3>";

   ?>
    <p>Далее, пользователь укажет свои кулинарные предпочтения, и в зависимости от этого, ему предложан завтрак, обед, ужин, или ночное меню</p>
<?php
    $vegan = false; // тру означает, что чел вегетарианец
    $fishNoMeat = false; //тру означает, что чел ест рыбу и морепродукты, но не есть мясо
    $meatNoFish = false; //тру  - чел есть мясо, но не любит рыбу
    $meatAdnFish = true; // ест и рыбу и мясо

    $dishName = "Угощение"; // дефаултное значение названия блюда. Дальше будут завтрак, обед, ужин и ночной заказ.

/**
 * Функция присваивает переменной значение "завтрак", "обед",
 * "ужин" или "ночной заказ" в зависимосит от времени суток
 * @param $dishName
 */
    function menuPeriod (&$dishName)
    {
        Global $dayPeriod;
        switch ($dayPeriod) {
            case 1:
                $dishName = "ночной заказ";
                break;
            case 2:
                $dishName = "завтрак";
                break;
            case 3:
                $dishName = "обед";
                break;
            case 4:
                $dishName = "ужин";
                break;
            default:
                break;
        }
    }

    menuPeriod ($dishName); //а теперь вызываем функцию, и получаем правильное название нашего меню
    echo " <p>Вот что мы можем предложить Вам на <b>$dishName</b>:</p>";

  //  function menuChoiсe ($dayPeriod, $vegan, $fishNoMeat, $meatNoFish, $meatAdnFish)
/**
 * Функция выбираети выводин на экран меню из 16 вариантов: ночное, утренее, обеденное и вечернее,
 * и веган/рыба/мясо/мясо и рыба
 */
    function menuChoiсe ()
    {
        Global $dayPeriod;
        Global $vegan;
        Global $fishNoMeat;
        Global $meatNoFish;
        Global $meatAdnFish;
        switch ($dayPeriod) {
            case 1: //ночь
                if ($vegan) {
                    echo "Вегетарианец ночь";
                } elseif ($fishNoMeat) {
                    echo "рыба ночь";
                } elseif ($meatNoFish) {
                    echo "мясо без рыбы ночь";
                } elseif ($meatAdnFish) {
                    echo "мясорыбное меню ночь";
                }
                echo "<br>";
                break;
            case 2:  //завтрак
                if ($vegan) {
                    echo "веган завтрак";
                } elseif ($fishNoMeat) {
                    echo "морепродукты завтрак";
                } elseif ($meatNoFish) {
                    echo "мясное меню, без рыбы завтрак";
                } elseif ($meatAdnFish) {
                    echo "мясорыбное меню завтрак";
                }
                echo "<br>";
                break;
            case 3: //обед
                if ($vegan) {
                    echo "веганский обед";
                } elseif ($fishNoMeat) {
                    echo "рыбное меню обед";
                } elseif ($meatNoFish) {
                    echo "мясное меню, без рыбы обед";
                } elseif ($meatAdnFish) {
                    echo "мясорыбное меню обед";
                }
                echo "<br>";
                break;
            case 4:   //ужин
                if ($vegan) {
                    echo "Салат из репки, фасолевый пудинг, и смородиновый чай";
                } elseif ($fishNoMeat) {
                    echo "Салат из морепродуктов и Креветки по-буржуйски";
                } elseif ($meatNoFish) {
                    echo "мясное меню, без рыбы ужин";
                } elseif ($meatAdnFish) {
                    echo "мясорыбное меню ужин";
                }
                echo "<br>";
                break;
            default:
                break;
        }
    }

    menuChoiсe (); //вызываем функцию выбора меню
    echo "<br><br>";
    /**
    * Теперь мы попробуем заменить кулинарные предпочтения. Пользователь будет вегетарианцем
    */
    echo "<p>Теперь пользователь выбрал вегетарианское меню </p> ";
    $vegan = true; // тру означает, что чел вегетарианец
    $fishNoMeat = false; //тру означает, что чел ест рыбу и морепродукты, но не есть мясо
    $meatNoFish = false; //тру  - чел есть мясо, но не любит рыбу
    $meatAdnFish = false; // ест и рыбу и мясо

    echo " <p>Вот что мы можем предложить Вам на <b>$dishName</b>:</p>";
    menuChoiсe (); //вызываем функцию выбора меню
    echo "<br><br>";
    /**
     * Теперь Пользователь будет любителем морепродуктов:
     */
    echo "<p>Теперь пользователь выбрал меню с рыбой и морепродуктами</p> ";
    $vegan = false; // тру означает, что чел вегетарианец
    $fishNoMeat = true; //тру означает, что чел ест рыбу и морепродукты, но не есть мясо
    $meatNoFish = false; //тру  - чел есть мясо, но не любит рыбу
    $meatAdnFish = false; // ест и рыбу и мясо
    echo " <p>Вот что мы можем предложить Вам на <b>$dishName</b>:</p>";
    menuChoiсe (); //вызываем функцию выбора меню

    /**
     * Займемся  рекурсией
     */
    echo "<hr> <h3>Займемся рекурсией</h3>";
    function numberRow ($n) {
        if ($n > 0) {
            echo "$n ";
            $n--;
            numberRow ($n);
        } elseif ($n == 0){
            echo "$n ";
        } elseif ($n < 0) {
            echo "$n ";
            $n++;
            numberRow ($n);
        }
    }
numberRow(256);