<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus Todo ";

    $pilih = input("No ( Ketik x untuk membatalkan)");

    if ($pilih == 'x') {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {

        $success = removeTodoList($pilih);

        if ($success) {
            echo "Success menghapus todo no $pilih" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo no $pilih" . PHP_EOL;
        }
    }
}
