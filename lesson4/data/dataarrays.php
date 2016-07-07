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
        "name" => "Illegal",
        "descript" => "Неверная секция",
    ],
    "1" => [
        "name" => "work",
        "descript" => "Работа",
    ],
    "2" => [
        "name" => "private",
        "descript" => "Личные дела",
    ],
    "3" => [
        "name" => "family",
        "descript" => "Семья",
    ],
    "4" => [
        "name" => "education",
        "descript" => "Образование",
    ],
    "5" => [
        "name" => "health",
        "descript" => "Здоровье",
    ],
    "6" => [
        "name" => "rest",
        "descript" => "отдых",
    ],
    "7" => [
        "name" => "home",
        "descript" => "Домашние дела",
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
        "name" => "Название задачи",
        "category" => "work",
        "descript" => 'Товар 2',
    ],
    "3" => [
        "name" => "Название задачи",
        "category" => "private",
        "descript" => 'Товар 3',
    ],
    "4" => [
        "name" => "Название задачи",
        "category" => "private",
        "descript" => 'Товар 4',
    ],
    "7" => [
        "name" => "Название задачи",
        "category" => "family",
        "descript" => 'Товар 7',
    ],
    "8" => [
        "name" => "Название задачи",
        "category" => "family",
        "descript" => 'Товар 8',
    ],
    "9" => [
        "name" => "Название задачи",
        "category" => "family",
        "descript" => 'Товар 9',
    ],
    "12" => [
        "name" => "Название задачи",
        "category" => "family",
        "descript" => 'Товар 12',
    ],
    "15" => [
        "name" => "Название задачи",
        "category" => "education",
        "descript" => 'Товар 15',
    ],
    "16" => [
        "name" => "Название задачи",
        "category" => "education",
        "descript" => 'Товар 16',
    ],
    "21" => [
        "name" => "Название задачи",
        "category" => "health",
        "descript" => 'Товар 21',
    ],
    "24" => [
        "name" => "Название задачи",
        "category" => "health",
        "descript" => 'Товар 24',
    ],
    "37" => [
        "name" => "Название задачи",
        "category" => "health",
        "descript" => 'Товар 37',
    ],
    "54" => [
        "name" => "Название задачи",
        "category" => "rest",
        "descript" => 'Товар 54',
    ],
    "59" => [
        "name" => "Название задачи",
        "category" => "rest",
        "descript" => 'Товар 59',
    ],
    "76" => [
        "name" => "Название задачи",
        "category" => "home",
        "descript" => 'Товар 76',
    ],
    "123" => [
        "name" => "Название задачи",
        "category" => "home",
        "descript" => 'Товар 123',
    ],
    "145" => [
        "name" => "Название задачи",
        "category" => "home",
        "descript" => 'Товар 145',
    ],
];

/**
 * Тестовые выводы значений:
 *
 * $testarr = [1,2,3];
 * echo $testarr[0];
 * echo $testarr[1];
 * echo $testarr[2];
 * echo $tasks[0][descript];
 */
/**
 * @param $item
 * Функция выводит одну отдельную задачу из массива задач.
 * Принимает в качетве параметра элемент массива задач
 * Выводит сначала заголовок, а потом текст описания задачи.
 */
function writeTask($item)
{
    ?>
    <div class="taskDiv">
        <p><b> <?= $item[name] ?> </b></p>

        <p> <?= $item[descript] ?></p>
        <br>
    </div>
    <?php
}

/**
 * @param $item
 * Функция похожа на предыдущую, то выводит также и категорию, к которой относится задача
 */
function writeTaskCat($item)
{
    ?>
    <div class="taskDiv">
        <p><b> <?= $item[name] ?> </b> Категория: <?= $item[category] ?> </p>

        <p> <?= $item[descript] ?></p>
        <br>
    </div>
    <?php
}

writeTask($tasks[1]);

/**
 * @param $arr
 * Функция выводит список всех задач подряд в том порядке, в каком они стоят в массиве в данный момент
 */
function allTasks($arr)
{
    foreach ($arr as $value) {
        writeTaskCat($value); //эта функция выводит одну задачу вместе с категорией
    }
}
//allTasks($tasks); тестовый вызов функции


function tasksByCat ($arr, $category) {
    foreach ($arr as $value) {
        if ($value[category] == "$category") {
            writeTaskCat($value);
        }
    }
}
tasksByCat($tasks, "rest");

