<?php                                           //3
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true?     При нестрогом сравнении $b приводится к типу $a
var_dump((int)'012345');                        // Почему 12345?    Преобразование строки в число
var_dump((float)123.0 === (int)123.0);          // Почему false?             При строгом сравнении разные типы неравны
var_dump((int)0 === (int)'hello, world');       // Почему true?           Строка не имеет цифр, следовательно приводится к числу '0'
?>

<?php                                           //4

$title = 'Title';
$h1 = 'Headline';
$date = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
</head>
<body>
  <h1><?php echo $h1 ?></h1>
  <footer>
      <span><?php echo $date ?></span>
  </footer>
</body>
</html>

<?php                                           //5

$a = 1;
$b = 2;

$a += $b;
$b = $a - $b;
$a -= $b;

echo $a . ', ' . $b;

?>