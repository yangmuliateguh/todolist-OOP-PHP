<?php

require_once __DIR__ . "/../Model/todolist.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/addtodolist.php";

function viewaddtodolist(){
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") echo "batal menambah todo" . PHP_EOL;
    else addtodolist($todo);

}