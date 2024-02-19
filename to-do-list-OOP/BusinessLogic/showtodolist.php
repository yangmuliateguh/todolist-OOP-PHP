<?php
// menampilkan todolist
function showtodolist(){
    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}