<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Makan");
addTodoList("Belajar React Native");
addTodoList("Belajar PHP Dasar");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
