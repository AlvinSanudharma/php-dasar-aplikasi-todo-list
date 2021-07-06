<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");

var_dump($todoList);
