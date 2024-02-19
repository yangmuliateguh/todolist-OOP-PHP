<?php

require_once "../Model/todolist.php";
require_once "../View/viewremovetodolist.php";
require_once "../BusinessLogic/addtodolist.php";
require_once "../BusinessLogic/showtodolist.php";

addtodolist("bangun tidur");
addtodolist("mandi");
addtodolist("menggosok gigi");
addtodolist("tolong ibu");
addtodolist("membersihkan tempat tidurku");

showtodolist();

viewremovetodolist();

showtodolist();