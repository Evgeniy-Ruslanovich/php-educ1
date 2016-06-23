<?php
    //include_once 'function3.php';
    $hrefMenu = [];
    $hrefMenu[0] = [
       'url' => 'lesson3.php?menu=vegan',
       'hrefText' => 'Вегетарианское меню',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[1] = [
       'url' => 'lesson3.php?menu=fish',
       'hrefText' => 'Рыба и морепродукты',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[2] = [
       'url' => 'lesson3.php?menu=meat',
       'hrefText' => 'Мясное меню',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[3] = [
       'url' => 'lesson3.php?menu=pizza',
       'hrefText' => 'Пицца',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[4] = [
       'url' => 'lesson3.php?menu=drinks',
       'hrefText' => 'Напитки',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    //надо добавить еще несколько пунктов и выводить с помощью цикла. Пицца там, паста,

?>
<html>
    <head>
        <title>Харчелло Похаватти - итальянский ресторан</title>
        <meta charset="UTF­8">
    </head>
    <body>
        <h1>Итальянский ресторан "Харчелло Похаватти"</h1>
        <h3>Лучшая кухня по лучшим ценам</h3>
        <div class="main">
        <p><b>Выберите меню:</b></p>
        <p><a href="<?= $hrefMenu[0]['url'] ?>"> <?= $hrefMenu[0]['hrefText'] ?> </a></p>
        <p><a href="<?= $hrefMenu[1]['url'] ?>"> <?= $hrefMenu[1]['hrefText'] ?> </a></p>
        <p><a href="<?= $hrefMenu[2]['url'] ?>"> <?= $hrefMenu[2]['hrefText'] ?> </a></p>

<?php
$page = $_GET['menu'];
var_dump($_GET);
echo "<br> $page";
 /**       switch ($dayPeriod) {
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
                break;*/
    ?>




        </div>


       <div class="footer">
    
       </div>
    </body> 
</html>