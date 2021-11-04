<?php
session_start();

$link = mysqli_connect('localhost', 'root', '', 'gb');
$result = mysqli_query($link, 'SELECT * FROM images WHERE 1 ORDER BY viewed DESC');
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div style="display: flex; align-items: center">';
    echo '<a href="' . $row['path'] . '" target = "blank">';
    echo '<img width="250px" src="' . $row['path'] . '">';
    echo '</a>';
    echo '<form action="ModuleBasket.php" method="post">
        <input type="hidden" name="item_id" value="'.$row['id'].'">
        <input type="hidden" name="item_name" value="'.$row['name'].'">
        <input type="hidden" name="item_path" value="'.$row['path'].'">
        <input type="submit" name="delete" value="Удалить из корзины"><br>
        <input type="submit" name="add_to_basket" value="Добавить в корзину">
    </form>';
    echo '</div>';
}
    echo '<a href="basket.php?' . SID . '">Перейти в корзину</a>';