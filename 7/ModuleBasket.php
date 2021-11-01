<?php
require_once 'shop.php';
session_start();

// Вывод данных из формы в переменные
if (isset($_POST['item_id'])) {
    foreach ($_POST as $item => $value) {
        switch ($item) {
            case 'item_id':
                $goodId = $value;
                break;
            case 'item_name':
                $goodName = $value;
                break;
            case 'item_path':
                $goodPath = $value;
                break;
            case 'delete' or 'add_to_basket':
                $operation = $item;
                break;
        }
    }
}

// Занесение данных о товаре, если товаров в сессии нет.
if (!isset($_SESSION['goods'])) {
    $_SESSION['goods'][$goodId] = ['id' => $goodId, 'name' => $goodName, 'amount' => '1', 'path' => $goodPath];
    die();
}
// Занесение\удаление данных о товаре, если ЕСТЬ СОВПАДЕНИЕ по id товара
foreach (array_keys($_SESSION['goods']) as $key) {
    if ($_SESSION['goods'][$key]['id'] == $goodId) {
        if ($operation == 'add_to_basket') {
            $_SESSION['goods'][$key]['amount'] += 1;
        }
        else if ($operation == 'delete' && $_SESSION['goods'][$key]['amount'] > 1) {
            $_SESSION['goods'][$key]['amount'] -= 1;
        }
        else {
            unset($_SESSION['goods'][$key]);
        }
        $match = 1;
    }
}
// Занесение данных о товаре, если НЕТ СОВПАДЕНИЯ по id товара
if (!$match) {
    $_SESSION['goods'][$goodId] = ['id' => $goodId, 'name' => $goodName, 'amount' => '1', 'path' => $goodPath];
}