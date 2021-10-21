<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-1 Урок 4</title>
  <style>
    img {
      width: 200px;
      height: 200px;
      padding: 10px;
      transition: 1s;
    }
    img:hover {
      transform: scale(1.2);
    }
    body {
      margin: 50px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }
  </style>
</head>
<body>
  <?php
  $images = scandir('./img');
  foreach ($images as $image) {
    if (is_file('img/' . $image)) {
    ?>
    <a href="/img/<?php echo $image; ?>">
      <img src="/img/<?php echo $image; ?>" alt="">
    </a>
    <?php
    }
  }
  ?>
</body>
</html>