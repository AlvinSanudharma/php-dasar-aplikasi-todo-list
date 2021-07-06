<?php

require_once "../View/ViewRemoveTodoList.php";
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Makan");
addTodoList("Mandi");
addTodoList("Belajar PHP Dasar");

showTodoList();

viewRemoveTodoList();

showTodoList();
