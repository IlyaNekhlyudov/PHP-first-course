<?php

// первое задание

$a = 5;
$b = -6;

echo arithmeticOperation($a, $b);

function arithmeticOperation(int $a, int $b) : int {
    if ($a >= 0 && $b >= 0) {
        return $a - $b;
    } else if ($a < 0 && $b < 0) {
        return $a * $b;
    } else {
        return $a + $b;
    }
}

// второе задание

function addition(int $arg1, int $arg2) : int {
    return $arg1 + $arg2;
}

function subtraction(int $arg1, int $arg2) : int {
    return $arg1 - $arg2;
}

function multiplication(int $arg1, int $arg2) : int {
    return $arg1 * $arg2;
}

function division(int $arg1, int $arg2) : int {
    return $arg1 / $arg2;
}

// пример
echo "<br>";
echo subtraction(4, 6);
echo "<br>";

// третье задание

function mathOperation(int $arg1, int $arg2, string $operation) {
    switch ($operation) {
        case "addition":
            return addition($arg1, $arg2);
        break;

        case "subtraction":
            return subtraction($arg1, $arg2);
        break;

        case "multiplication":
            return multiplication($arg1, $arg2);
        break;

        case "division":
            return division($arg1, $arg2);
        break;

        default:
            return "There is no such.";
    }
}

// пример
echo mathOperation(4, 2, "addition");
echo "<br>";

// четвертое задание

$currentYear = date("Y");

// пятое задание

function power(int $val, int $pow) : int {
    if ($pow <= 1) return $val;
    return $val * power($val, $pow - 1);
}

echo power(-6, 3);
echo "<br>";

function getTime() : string {
    $hour = date("G");
    $hourText = "";
    $minute = date("i");
    $minuteText = "";

    // склоняем часы
    if ($hour == 11) {
        $hourText = "часов";
    } else if (($hour % 10) == 1) {
        $hourText = "час";
    } else if (($hour % 10) > 1 && ($hour % 10) < 5) {
        $hourText = "часа";
    } else {
        $hourText = "часов";
    }

    // склоняем минуты
    if ($minute == 11) {
        $minuteText = "минут";
    } else if (($minute % 10) == 1) {
        $minuteText = "минута";
    } else if (($minute % 10) > 1 && ($minute % 10) < 4) {
        $minuteText = "минуты";
    } else {
        $minuteText = "минут";
    }

    return "$hour $hourText $minute $minuteText";
}

echo getTime();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer> 
        <p>Сейчас <?=$currentYear?> год.</p>
    </footer>
</body>
</html>