<?php

require_once __DIR__ . "/Model/todolist.php";
require_once __DIR__ . "/BusinessLogic/addtodolist.php";
require_once __DIR__ . "/BusinessLogic/removetodolist.php";
require_once __DIR__ . "/BusinessLogic/showtodolist.php";
require_once __DIR__ . "/View/viewaddtodolist.php";
require_once __DIR__ . "/View/viewremovetodolist.php";
require_once __DIR__ . "/View/viewshowtodolist.php";
require_once __DIR__ . "/Helper/input.php";

echo "aplikasi todolist" . PHP_EOL;

viewshowtodolist();