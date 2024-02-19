<?php
require_once __DIR__ . "/../Model/todolist.php";
require_once __DIR__ . "/../View/viewaddtodolist.php";
require_once __DIR__ . "/../View/viewremovetodolist.php";
require_once __DIR__ . "/../BusinessLogic/showtodolist.php";
require_once __DIR__ . "/../Helper/input.php";

function viewshowtodolist(){
    while(true){
        showtodolist();

        echo "MENU" . PHP_EOL;
        echo "1. tambah todo" . PHP_EOL;
        echo "2. hapus todo" . PHP_EOL;
        echo "x. keluar" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == '1') viewaddtodolist();
        else if ($pilihan == '2') viewremovetodolist();
        else if ($pilihan == 'x') break;
        else echo "pilihan tidak valid" . PHP_EOL;
    }

    echo "sampai jumpa " . PHP_EOL;
}