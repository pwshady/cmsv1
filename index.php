<?php
require_once "app\lib\\functions.php";
require_once "app\lib\Database.php";
require_once "app\basic\Model.php";
require_once "app\basic\dev.php";
require_once "app\models\MainModels.php";

use app\lib\database;
use app\models\MainModels;
$mm = new MainModels;
$menu = $mm->getNews();
print_r($menu);

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="public/style/style.css" rel="stylesheet">
    <link href="public/style/basic-menu-style.css" rel="stylesheet">
    <script src="public/script/basic-menu-script.js"></script>
    <title>Добро пожаловать!</title>
</head>

<body class="guest__page">
    <?=include_block("public\layouts\header-menu\menu.php",[])?>
    <section class="guest__content">
        <div class="guest__content_left">
            <nav>
                <ul>
                    <li>
                        <div>
                            <?print_r($mm->getMenu());?>

                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="guest__content_center">
        Prepared do an dissuade be so whatever steepest. Yet her beyond looked either day wished nay. By doubtful disposed do juvenile an. Now curiosity you explained immediate why behaviour. An dispatched impossible of of melancholy favourable. Our quiet not heart along scale sense timed. Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new. 
        </div>
        <div class="guest__content_right">
            c
        </div>
    </section>
</body>

</html>