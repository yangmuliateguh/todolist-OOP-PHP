<?php
// menghapus todolist
function removetodolist(int $number) : bool {
    global $todolist;
    $length = sizeof($todolist);

    if ($number > $length) return false;

    for ($i = $number; $i < $length; $i++){
        $todolist[$i] = $todolist[$i+1];
    }

    unset($todolist[$length]);

    return true;
}