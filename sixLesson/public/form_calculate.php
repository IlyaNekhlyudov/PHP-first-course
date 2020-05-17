<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstNumber = htmlspecialchars((int) $_POST['first_number']);
    $secondNumber = htmlspecialchars((int) $_POST['second_number']);
    $operation = htmlspecialchars($_POST['operation']);
    

    if ($operation == '+') {
        $total = $firstNumber + $secondNumber;
    } else if ($operation == '-') {
        $total = $firstNumber - $secondNumber;
    } else if ($operation == '*') {
        $total = $firstNumber * $secondNumber;
    } else {
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
    <form method='POST'>
        <input name='first_number' type='number' placeholder='Введите число'>
        <input name='second_number' type='number' placeholder='Введите число'>
        <select name='operation'>
            <option value='+'>+</option>
            <option value='-'>-</option>
            <option value='*'>*</option>
            <option value='/'>/</option>
        </select>
        <input type='submit' value='Посчитать'>
    </form>
</body>
</html>