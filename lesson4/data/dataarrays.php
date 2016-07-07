<?php
/**
 * Created by PhpStorm.
 * User: zaynutdinov.er
 * Date: 07.07.2016
 * Time: 16:38
 * Данные, выводимые на экран
 */

$categories = [
    "0" => [
        "name"      => "Illegal",
        "descript"  => "Неверная секция",
    ],
    "1" => [
        "name" => "work",
        "descript"  => "Работа",
    ],
    "2" => [
        "name" => "private",
        "descript"  => "Личные дела",
    ],
    "3" => [
        "name" => "family",
        "descript"  => "Семья",
    ],
    "4" => [
        "name" => "education",
        "descript"  => "Образование",
    ],
    "5" => [
        "name" => "health",
        "descript"  => "Здоровье",
    ],
    "6" => [
        "name" => "rest",
        "descript"  => "отдых",
    ],
    "7" => [
        "name" => "home",
        "descript"  => "Домашние дела",
    ],
];

$tasks = [
    "0" => [
        "category" => "work",
        "descript" => 'Нет такой задачи',
    ],
    "1" => [
        "name" => "Проверить проекторы",
        "category" => "work",
        "descript" => 'Пройтись по всем аудиторяим, проверить фильтры проекторов и почистить учетки',
    ],
    "2" => [
        "category" => "work",
        "descript" => 'Товар 2',
    ],
    "3" => [
        "category" => "private",
        "descript" => 'Товар 3',
    ],
    "4" => [

        "category" => "private",
        "descript" => 'Товар 4',
    ],
    "7" => [
        "category" => "family",
        "descript" => 'Товар 7',
    ],
    "8" => [
        "category" => "family",
        "descript" => 'Товар 8',
    ],
    "9" => [
        "category" => "family",
        "descript" => 'Товар 9',
    ],
    "12" => [
        "category" => "family",
        "descript" => 'Товар 12',
    ],
    "15" => [
        "category" => "education",
        "descript" => 'Товар 15',
    ],
    "16" => [
        "category" => "education",
        "descript" => 'Товар 16',
    ],
    "21" => [
        "category" => "health",
        "descript" => 'Товар 21',
    ],
    "24" => [
        "category" => "health",
        "descript" => 'Товар 24',
    ],
    "37" => [
        "category" => "health",
        "descript" => 'Товар 37',
    ],
    "54" => [
        "category" => "rest",
        "descript" => 'Товар 54',
    ],
    "59" => [
        "category" => "rest",
        "descript" => 'Товар 59',
    ],
    "76" => [
        "category" => "home",
        "descript" => 'Товар 76',
    ],
    "123" => [
        "category" => "home",
        "descript" => 'Товар 123',
    ],
    "145" => [
        "category" => "home",
        "descript" => 'Товар 145',
    ],
];

$testarr = [1,2,3];
echo $testarr[0];
echo $testarr[1];
echo $testarr[2];
echo $tasks[0][descript];

function writeTask($item) {
    ?>
    <div class="taskDiv">
        <p> <b> <?= $item[name] ?> </b> </p>

        <p> <?= $item[descript] ?></p>
        <br>
    </div>
<?php
}

writeTask($tasks[1]);