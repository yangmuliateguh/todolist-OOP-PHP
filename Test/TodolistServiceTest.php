<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist () : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("bangun tidur");
    $todolistRepository->todolist[2] = new Todolist("mandi");
    $todolistRepository->todolist[3] = new Todolist("menggosok gigi");
    
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist () : void {
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("bangun tidur");
    $todolistService->addTodolist("mandi");
    $todolistService->addTodolist("menggosok gigi");
    
    $todolistService->showTodolist();
}

function testRemoveTodolist () : void {
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("bangun tidur");
    $todolistService->addTodolist("mandi");
    $todolistService->addTodolist("menggosok gigi");
    
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

testRemoveTodolist();