<?php
    //include_once 'function3.php';
    $hrefMenu = [];
    $hrefMenu[0] = [
       'url' => 'lesson3.php/vegan',
       'hrefText' => 'Вегетарианское меню'
    ];
    $hrefMenu[1] = [
       'url' => 'lesson3.php/vegan',
       'hrefText' => 'Рыба и морепродукты'
    ];
    $hrefMenu[2] = [
       'url' => 'lesson3.php/vegan',
       'hrefText' => 'Мясное меню'
    ];

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