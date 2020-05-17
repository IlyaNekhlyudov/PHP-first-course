<?php

if (!empty($_GET)) {
    $firstNumber = htmlspecialchars((int) $_GET['first_number']);
    $secondNumber = htmlspecialchars((int) $_GET['second_number']);
    $operation = htmlspecialchars($_GET['operation']);

    if ($operation == '+') {
        $total = $firstNumber + $secondNumber;
    } else if ($operation == '-') {
        $total = $firstNumber - $secondNumber;
    } else if ($operation == '*') {
        $total = $firstNumber * $secondNumber;
    } else if ($operation == '/') {
        if ($secondNumber == 0) {
            echo 'На ноль делить нельзя.';
            return false;
        } else {
            $total = $firstNumber / $secondNumber;
        }
    }

    echo $firstNumber . ' ' . $operation . ' ' . $secondNumber . ' = ' . $total;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Calculator</title>
</head>
<body>
    <form method='GET'>
        <input name='first_number' type='number' placeholder='Введите число'>
        <input name='second_number' type='number' placeholder='Введите число'>
        <input type='submit' value='+' name='operation'>
        <input type='submit' value='-' name='operation'>
        <input type='submit' value='*' name='operation'>
        <input type='submit' value='/' name='operation'>
    </form>
</body>
</html>