<?php

function addTodoList($todo)
{
    global $todoList;

    $number = count($todoList) + 1;

    $todoList[$number] = $todo;
}
