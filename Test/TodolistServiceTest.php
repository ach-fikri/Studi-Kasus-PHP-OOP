<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__. "/../Config/Database.php";

use \Entity\TodoList;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist():void{
    $connection = \Config\Database::getConnection();
    $todolisRepository = new TodolistRepositoryImpl($connection);
    $todolisService = new TodolistServiceImpl($todolisRepository);
    $todolisService->addTodolist("Belajar PHP Dasar");
    $todolisService->addTodolist("Belajar PHP OOP");
    $todolisService->addTodolist("Belajar PHP Database");

    $todolisService->showTodolist();
}



function testAddTodolist():void{

    $connection = \Config\Database::getConnection();
    $todolisRepository = new TodolistRepositoryImpl($connection);

    $todolisService = new TodolistServiceImpl($todolisRepository);
    $todolisService->addTodolist("Belajar PHP Dasar");
    $todolisService->addTodolist("Belajar PHP OOP");
    $todolisService->addTodolist("Belajar PHP Database");

//    $todolisService->showTodolist();
}


function testRemoveTodolist():void{

    $connection = \Config\Database::getConnection();

    $todolisRepository = new TodolistRepositoryImpl($connection);

    $todolisService = new TodolistServiceImpl($todolisRepository);

    echo $todolisService->removeTodolist(5).PHP_EOL;
    echo $todolisService->removeTodolist(4).PHP_EOL;
    echo $todolisService->removeTodolist(3).PHP_EOL;
    echo $todolisService->removeTodolist(2).PHP_EOL;
    echo $todolisService->removeTodolist(1).PHP_EOL;
}

testShowTodolist();
