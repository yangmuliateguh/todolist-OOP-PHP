<?php

require_once "../Model/todolist.php";
require_once "../BusinessLogic/addtodolist.php";
require_once "../BusinessLogic/removetodolist.php";
require_once "../BusinessLogic/showtodolist.php";

addtodolist("bangun tidur");
addtodolist("mandi");
addtodolist("menggosok gigi");
addtodolist("tolong ibu");
addtodolist("membersihkan tempat tidurku");

showtodolist();

removetodolist(3);

showtodolist();

removetodolist(2);

showtodolist();

$success = removetodolist(4);
var_dump($success);

showtodolist();