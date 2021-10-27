<?php
require_once 'db.php';

$id = $_GET['image_id'] ?? null;
if ($id && is_numeric($id)) {
  mysqli_query($link, 'update images set viewed=viewed+1 where id=' . $id);
  $result = mysqli_query($link, 'select * from images where id=' . $id);
  $image = mysqli_fetch_assoc($result);
  if ($image) {
    echo '<img src="' . $row['image_path'] . '">';
  }
}
