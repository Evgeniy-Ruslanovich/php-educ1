<?php
/**
 * Created by PhpStorm.
 * User: zaynutdinov.er
 * Date: 07.07.2016
 * Time: 15:16
 * ДЗ 4, файл функций
 */

function renderPage () {
   // echo $body;
    include TEMPLATE_DIR .  DIRECTORY_SEPARATOR ."/body.php";
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