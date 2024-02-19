<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/removetodolist.php";

function viewremovetodolist(){
    echo "MENGHAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") echo "batal menghapus todo" . PHP_EOL;
    else {
        $success = removetodolist($pilihan);
        if ($success) echo "sukses menghapus todo nomor $pilihan" . PHP_EOL;
        else echo "gagal menghapus todo nomor $pilihan" . PHP_EOL;
    }
}