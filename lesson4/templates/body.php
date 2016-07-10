<?php
/**
 * Created by PhpStorm.
 * User: zaynutdinov.er
 * Date: 07.07.2016
 * Time: 14:44
 * Основной шаблон страницы
 */

//require_once(LIB_DIR .  DIRECTORY_SEPARATOR . 'functions.php');
//include_once (TEMPLATE_DIR. DIRECTORY_SEPARATOR . "header.php");

//$body = "

$header = "header.php";
/**
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
*/
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' type='text/css' href=' <?= STYLE_DIR . DIRECTORY_SEPARATOR . "style.css" ?> ' >
        <title>
            <?= TITLE ?>
        </title>
    </head>
    <body>
        <?php 
            renderChunk($header , null);
    //        renderChunk($navmenu , null);
     //       renderChunk($tasks , $taskParams);
     //       renderChunk($footer , null);
?>
         
         
        <p>Привет медвед</p>
    </body>
</html>

