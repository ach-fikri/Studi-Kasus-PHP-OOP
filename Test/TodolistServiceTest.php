<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use \Entity\TodoList;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist():void{

    $todolisRepository = new TodolistRepositoryImpl();
    $todolisRepository->todolist[1] = new TodoList("Belajar PHP Dasar");
    $todolisRepository->todolist[2] = new TodoList("Belajar OOP");
    $todolisRepository->todolist[3] = new TodoList("Belajar Database");


    $todolisService = new TodolistServiceImpl($todolisRepository);

    $todolisService->showTodolist();
}



function testAddTodolist():void{

    $todolisRepository = new TodolistRepositoryImpl();

    $todolisService = new TodolistServiceImpl($todolisRepository);
    $todolisService->addTodolist("Belajar PHP Dasar");
    $todolisService->addTodolist("Belajar PHP OOP");
    $todolisService->addTodolist("Belajar PHP Database");

    $todolisService->showTodolist();
}


function testRemoveTodolist():void{

    $todolisRepository = new TodolistRepositoryImpl();

    $todolisService = new TodolistServiceImpl($todolisRepository);
    $todolisService->addTodolist("Belajar PHP Dasar");
    $todolisService->addTodolist("Belajar PHP OOP");
    $todolisService->addTodolist("Belajar PHP Database");

    $todolisService->removeTodolist(1);
    $todolisService->showTodolist();
    $todolisService->removeTodolist(3);
    $todolisService->showTodolist();
    $todolisService->removeTodolist(2);
    $todolisService->showTodolist();
}

testRemoveTodolist();

