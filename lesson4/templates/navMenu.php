<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.07.2016
 * Time: 19:01
 * Это шаблон для вывода навигационного меню
 * 
 */

/**
$categories = [
    0 => [
        "name" => "home",
        "descript" => "Домашние дела",
    ],
    1 => [
        "name" => "work",
        "descript" => "Работа",
    ],
    2 => [
        "name" => "private",
        "descript" => "Личные дела",
    ],
    3 => [
        "name" => "family",
        "descript" => "Семья",
    ],
    4 => [
        "name" => "education",
        "descript" => "Образование",
    ],
    5 => [
        "name" => "health",
        "descript" => "Здоровье",
    ],
    6 => [
        "name" => "rest",
        "descript" => "отдых",
    ],
    7 => [
        "name" => "home",
        "descript" => "Домашние дела",
    ],
];   */
include (DATA_DIR . DIRECTORY_SEPARATOR .'dataarrays.php');
$cat = $categories;


?>




<div class="navMenu">
    <h3> Категории задач</h3>
    <?php
    foreach ($categories as $key => $value) {
        ?>
        <a href="?cat=<?= $value[name] ?>"> <?= $value[descript] ?> </a>
        <br>
    <?php
    }
    ?>
    <a href="?cat=all">Все дела</a>
</div>
