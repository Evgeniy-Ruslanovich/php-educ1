<?php
/**
 * Зайнутдинов евгений
 * урок 4
 * Индесный файл публичной директории
 */

require_once('../config.php');

$route = (isset($_GET['route'])) ? $_GET['route'] : 'main' ; //указывает маршрут, какую страницу сгенерировать
$sec = (isset($_GET['sec'])) ? $_GET['sec'] : '' ; //указывает, какую категорию вывести
$id = (isset($_GET['id'])) ? $_GET['id'] : 0 ; //указывает, какой элемент вывести


//проверка правильности вывода адреса. Оказалось, что выводятся абсолютные адреса
echo DATA_DIR . "<br>" .
LIB_DIR . "<br>" .
TEMPLATE_DIR . "<br>" .
STYLE_DIR . "<br>";



renderChunk ( TEMPLATE_DIR . DIRECTORY_SEPARATOR ."body.php", null);

/**
*renderPage(
 *   $route,
  *  [
   *     "sec" => $sec,
    *    "id" => $id
   * ]
*осн функция, генерирующая страницу*/