<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todo" . PHP_EOL;

    $todo = input("Mau ngapain? (Ketik x untuk membatalkan)");

    if ($todo == 'x') {
        echo "Batal menambahlan Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
