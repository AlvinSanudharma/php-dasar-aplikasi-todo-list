<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Makan");
addTodoList("Main Game");
addTodoList("Belajar PHP Dasar");
addTodoList("Belajar React Native");

showTodoList();

removeTodoList(2);

showTodoList();
