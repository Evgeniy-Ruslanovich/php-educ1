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
require_once(TEMPLATE_DIR . DIRECTORY_SEPARATOR .'dataarrays.php');
$header = TEMPLATE_DIR . DIRECTORY_SEPARATOR . "header.php";
$navmenu = TEMPLATE_DIR . DIRECTORY_SEPARATOR . "navMenu.php";
$footer = TEMPLATE_DIR . DIRECTORY_SEPARATOR . "footer.php";
$tasks = TEMPLATE_DIR . DIRECTORY_SEPARATOR . "tasks.php";


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
         renderChunk($navmenu , null);
        renderChunk($tasks , $param=[taskCategory => $_GET['cat'], taskId => $_GET['id']]);
//renderChunk($tasks , $param=[taskCategory => work]);
         renderChunk($footer , null);
?>
         
         

    </body>
</html>

