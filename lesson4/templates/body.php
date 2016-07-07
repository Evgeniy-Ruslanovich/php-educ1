<?php
/**
 * Created by PhpStorm.
 * User: zaynutdinov.er
 * Date: 07.07.2016
 * Time: 14:44
 * Основной шаблон страницы
 */


include_once (TEMPLATE_DIR. DIRECTORY_SEPARATOR . "header.php");

$body = "

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' type='text/css' href=' <?= STYLE_DIR ?> ' >
        <title>
            <?= TITLE ?>
        </title>
    </head>
    <body>
        <p>Привет медвед</p>
        
        <?=$header?>

    </body>
</html>";

