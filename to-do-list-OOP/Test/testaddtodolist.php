<?php

require_once "../Model/todolist.php";
require_once "../BusinessLogic/addtodolist.php";

addtodolist("bangun tidur");
addtodolist("mandi");
addtodolist("menggosok gigi");

var_dump($todolist);