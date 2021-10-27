<?php

// 1. Создать форму-калькулятор операциями: сложение, вычитание, умножение, деление.
// Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
  
// 2. Создать калькулятор, который будет определять тип выбранной пользователем операции,
// ориентируясь на нажатую кнопку.
 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $reset = $_POST['reset'];

    if ($reset) {
        $view = "";
        $num1 = "";
        $num2 = "";
        $operation = false;
        $view = "";
    }

    if ($operation) {
        if ($operation == "+") {
            $result = $num1 + $num2;
        }
        if ($operation == "-") {
            $result = $num1 - $num2;
        }
        if ($operation == "*") {
            $result = $num1 * $num2;
        }
        if ($operation == "/") {
            $result = ($num2 != 0) ? $num1 / $num2 : "Infinity";
        }
        $view = "$num1 $operation $num2 = " . $result;
    }

}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Title</title>
</head>

<body style="width:50%; margin:0 auto;">
<h2>Basic Calculator</h2>

<form action="" method="post">
    <input name="num1" type="text" value="<?= $num1 ?>"><br><br>
    <input name="num2" type="text" value="<?= $num2 ?>"><br><br>
    <input name="result" type="text" value="<?= $view ?>" disabled/><br><br>

    <select name="operation" onchange="submit()">
        <option value="">Select operation</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input name="operation" value="+" type="submit"/>
    <input name="operation" value="-" type="submit"/>
    <input name="operation" value="*" type="submit"/>
    <input name="operation" value="/" type="submit"/>
    <input name="reset" value="Reset" type="submit"/>
</form>

</body>
</html>