<?php
    //include_once 'function3.php';
    $hrefMenu = [];
    $hrefMenu[0] = [
       'url' => 'vegan',
        'getChek' => 'vegan',
       'hrefText' => 'Вегетарианское меню',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[1] = [
       'url' => 'fish',
       'hrefText' => 'Рыба и морепродукты',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[2] = [
       'url' => 'meat',
       'hrefText' => 'Мясное меню',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[3] = [
       'url' => 'pizza',
       'hrefText' => 'Пицца',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    $hrefMenu[4] = [
       'url' => 'drinks',
       'hrefText' => 'Напитки',
       'Салат' => '0',
       'Суп' =>'0',
       'Горячее блюдо' =>'0',
    ];
    //надо добавить еще несколько пунктов и выводить с помощью цикла. Пицца там, паста,
    //$arrL = 0;
    //$arrL = count($hrefMenu);
    //echo "$arrL";
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
        <!-- <p><a href="<?= $hrefMenu[0]['url'] ?>"> <?= $hrefMenu[0]['hrefText'] ?> </a></p>
        <p><a href="<?= $hrefMenu[1]['url'] ?>"> <?= $hrefMenu[1]['hrefText'] ?> </a></p>
        <p><a href="<?= $hrefMenu[2]['url'] ?>"> <?= $hrefMenu[2]['hrefText'] ?> </a></p>
            <br> -->

<?php

    /**  цикл выводит ссылки из массива*/
	$page = $_GET['menu'];
    for ($i = 0; $i < count($hrefMenu) ; $i++) {
        $page1 =  $hrefMenu[$i]['ulr'] ;
        echo "$page1 <br>";
        if ( isset($_GET['menu']) && $hrefMenu[$i]['url'] == $_GET['menu'] ) { //если есть такое значение в массиве, то некликабельна
            ?>
            <p> <?= $hrefMenu[$i]['hrefText'] ?> </p>
            <?php
        }

        /*
        *Другой вариант, тоже не работает:
                if ( $_GET['menu'] == $hrefMenu[$i]['url'] ) { //если есть такое значение в массиве, то некликабельна
          echo "not clickable<br>" ;
        }
        */

        else {
           // echo "$page1 <br>";
           // echo "$page <br>";
            ?>
            <p><a href="lesson3.php?menu=<?= $hrefMenu[$i]['url'] ?>"> <?= $hrefMenu[$i]['hrefText'] ?> </a></p>
            <?php
        }
    }
?>  


<?php
$page = $_GET['menu'];
//var_dump($_GET);
echo "<br> $page";
     switch ($page) {
            case 'vegan':
                echo "<p> веган</p>";
                break;
            case 'fish':
                echo "<p> рыба</p>";
                break;
            case 'meat':
                echo "<p> мясо</p>";
                break;
            case 'pizza':
                echo "<p> пиццко</p>";
                break;
            case 'drinks':
                echo "<p> напитки</p>";
                break;
            default:
                break;
    }
 ?>




        </div>


       <div class="footer">
    
       </div>
    </body> 
</html>
