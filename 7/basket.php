<?php
session_start();

echo '<p> КОРЗИНА </p>';
foreach ($_SESSION['goods'] as $good_key => $good) {
    echo '<div style="border: 1px solid gray; width: 200px">';
    echo '<a href="' . $good['path'] . '" target = "blank">';
    echo '<img width="150px" src="' . $good['path'] . '">';
    echo '</a>';
    echo '<p> Товар: '. $good['name'].'</p>';
    echo '<p> Кол-во: '. $good['amount'].' шт</p>';
    echo '</div>';
}