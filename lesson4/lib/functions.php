<?php
/**
 * Created by PhpStorm.
 * User: zaynutdinov.er
 * Date: 07.07.2016
 * Time: 15:16
 * ДЗ 4, файл функций
 */

/**function renderPage () {
   // echo $body;
    include TEMPLATE_DIR .  DIRECTORY_SEPARATOR ."/body.php";
}*/

/**
 * @param $file
 * @param $parameters
 * Функция выводит на экран шаблон, который хранится в папке шаблонов, и применяет к нему дополнительные
 * параметры, которые передаются в переменной "параметерс" в виде массива.
 * Необходимо, чтобы индексы массива "параметерс" собпадали с именами переменных, используемых в соответствющих 
 * шаблонах
 */

function renderpage ($file, $parameters) {
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found ';
        exit(ERROR_NOT_FOUND);
    }

    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty ';
        exit(ERROR_TEMPLATE_EMPTY);
    }
    ob_start();
    if ($parameters != null) {
        extract($parameters);
    }
    include $file;
    echo ob_get_clean();
}

function renderChunk ($file, $parameters) {
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found ';
        exit(ERROR_NOT_FOUND);
    }

    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty ';
        exit(ERROR_TEMPLATE_EMPTY);
    }
    ob_start();
    if ($parameters != null) {
        extract($parameters);
    }
    include $file;
    echo ob_get_clean();
}


// ФУНКЦИИ ДЛЯ ВЫВОДА ЗАДАЧ НА ЭКРАН. ИСПОЛЬЗУЮТСЯ В ШАБЛОНЕ TASKS

/**
 * @param $item
 * Функция выводит одну отдельную задачу из массива задач.
 * Принимает в качетве параметра элемент массива задач
 * Выводит сначала заголовок, а потом текст описания задачи.
 */
function writeTask($item, $itemKey)
{
    ?>
    <div class="taskDiv">
        <p><b><a href="?id=<?=$itemKey?>"> <?= $item[name] ?> </a></b></p>

        <p> <?= $item[descript] ?></p>

    </div>
    <?php
}

/**
 * @param $item
 * Функция похожа на предыдущую, то выводит также и категорию, к которой относится задача
 */
function writeTaskCat($item, $itemKey)
{
    ?>
    <div class="taskDiv">
        <p><b><a href="?id=<?=$itemKey?>"> <?= $item[name] ?> </a> Категория: <?= $item[category] ?> </p>

        <p> <?= $item[descript] ?></p>

    </div>
    <?php
}

/**
*
* @param $arr
* Функция выводит список всех задач подряд в том порядке, в каком они стоят в массиве в данный момент
*/
function allTasks($arr)
{
    foreach ($arr as $key => $value) {
        writeTaskCat($value, $key); //эта функция выводит одну задачу вместе с категорией
    }
}

/**
 * @param $arr
 * @param $category
 * Функция выводит все задачи, входящие в какую-то категорию
 */

function tasksByCat($arr, $category)
{
    echo "<h3>Все дела категории $category:</h3>";
    foreach ($arr as $key => $value) {
        if ($value[category] == "$category") {
            writeTask($value , $key);
        }
    }
}

/**
 * @param $item
 * Функция выводит детальное описание задачи из массива
 */

function taskDetalaized($item)
{
    ?>
    <div class="taskDiv">
        <p><b><?= $item[name] ?> </b> Категория: <?= $item[category] ?> </p>

        <p><b>Описание:</b> <?= $item[descript] ?></p>
        <p><b>Детальное описание задачи:</b>  <?= $item[details] ?></p>
    </div>
    <?php
}