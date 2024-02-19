<?php

require_once "../View/viewaddtodolist.php";
require_once "../BusinessLogic/addtodolist.php";
require_once "../BusinessLogic/showtodolist.php";

addtodolist("bangun tidur");
addtodolist("mandi");
addtodolist("menggosok gigi");
addtodolist("tolong ibu");
addtodolist("membersihkan tempat tidurku");

viewaddtodolist();

showtodolist();

viewaddtodolist();

showtodolist();