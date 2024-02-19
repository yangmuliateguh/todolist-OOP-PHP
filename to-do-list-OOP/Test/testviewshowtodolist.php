<?php

require_once "../View/viewshowtodolist.php";
require_once "../BusinessLogic/addtodolist.php";

addtodolist("bangun tidur");
addtodolist("mandi");
addtodolist("menggosok gigi");
addtodolist("tolong ibu");
addtodolist("membersihkan tempat tidurku");

viewshowtodolist();