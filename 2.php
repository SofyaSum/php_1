<?php                                                    //1
$a = rand(-10, 10);
$b = rand(-10, 10);

if ($a >= 0 and $b >= 0)
    echo ($a - $b);
else if ($a < 0 and $b < 0)
    echo $a * $b;
else 
    echo $a + $b;
?>

<?php                                                    //2
$a = rand(0, 15);

switch ($a){
    case 0:
        echo '0 ';
    case 1:
        echo '1 ';
    case 2:
        echo '2 ';
    case 3:
        echo '3 ';
    case 4:
        echo '4 ';
    case 5:
        echo '5 ';
    case 6:
        echo '6 ';
    case 7:
        echo '7 ';
    case 8:
        echo '8 ';
    case 9:
        echo '9 ';
    case 10:
        echo '10 ';
    case 11:
        echo '11 ';
    case 12:
        echo '12 ';
    case 13:
        echo '13 ';
    case 14:
        echo '14 ';
    case 15:
        echo '15 ';
}
?>

<?php                                                    //3
function AddInt($x, $y){
   return $x + $y;
}
function SubInt($x, $y){
   return $x - $y;
}
function MultInt($x, $y){
   return $x * $y;
}
function DivInt($x, $y){
   return $x / $y;
}
                                                         //4
function mathOperation($arg1, $arg2, $operation){       
    switch($operation){
        case 'AddInt':
            return AddInt($arg1, $arg2);
        case 'SubInt':
            return SubInt($arg1, $arg2);
        case 'MultInt':
            return MultInt($arg1, $arg2);
        case 'DivInt':
            return DivInt($arg1, $arg2);
    }
}
?>
                                                      
<!DOCTYPE html>                                       <!--  5   -->
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
      <span><?php echo date('Y-m-d')?></span>
  </footer>
</body>
</html>

<?php                                                    //6
function powFunc($x, $n) {
  if ($n == 0)
    return 1;
  else if ($n < 0)
    return powFunc(1/$x, -$n);
  else
    return $x * powFunc($x, $n-1);
}
?>

<?php                                                    //7
$h = +date("H");
$m = +date("i");

if ($h % 10 == 1)
  $hours = " час";
else if ($h % 10 >= 2 and $h % 10 <= 4)
  $hours = " часа";
else 
  $hours = " часов";

if ($m % 10 == 1 and $m <> 11)
  $minutes = " минута.";
else if ($m % 10 >= 2 and $m % 10 <= 4 and $m <> 12 and $m <> 13 and $m <> 14)
  $minutes = " минуты.";
else
  $minutes = " минут.";

echo $h . $hours . " " . $m . $minutes;
?>