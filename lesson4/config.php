<?php

/**
 * Зайнутдинов евгений
 * урок 4
 * Файл конфигурации - указывает расположение основных директорий
 */

define('SITE_ROOT', __DIR__);
define('WWW_ROOT', SITE_ROOT . DIRECTORY_SEPARATOR .'www');

define('DATA_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'data');
define('LIB_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'lib');
define('TEMPLATE_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'templates');
define('STYLE_DIR', SITE_ROOT . DIRECTORY_SEPARATOR . 'style');

define('TITLE' , "Список дел");

require_once(LIB_DIR . '/functions.php');
require_once(DATA_DIR . '/dataarrays.php');
include_once (TEMPLATE_DIR. DIRECTORY_SEPARATOR . "body.php");
//возникает вопрос - а как пхп находит путь из подчиненных директорий? сам чтоли выставляет ../?
//ответ нашелся экспериментальным путем - пишутся абсолютные адреса


