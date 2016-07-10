<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.07.2016
 * Time: 21:07
 */
include( DATA_DIR . DIRECTORY_SEPARATOR .'dataarrays.php');

/**
 * возможные параметры:
 * id = айди задачи
 * cat = категория задачи
 * null - ничего не передано
 */

if (isset($taskId)) {
    taskDetalaized($tasks[$taskId]);
}
if (isset($taskCategory) && ($taskCategory != "all")) {
    tasksByCat($tasks, $taskCategory);
}
if (isset($taskCategory) && ($taskCategory == "all")) {
    echo "<h3>Все дела:</h3>";
    allTasks($tasks);
}



//tasksByCat($tasks, "rest"); //пробный вывоз функции