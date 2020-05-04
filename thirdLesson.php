<?php

// 1 задание

$number = 1;
while ($number <= 100) {
    if (!($number % 3)) {
        echo $number . "<br>";
    }
    $number++;
}

// 2 задание

echo "<br><br>";
$number = 0;

do {

    if ($number == 0) {
        echo "0 - ноль. <br>";
    } else {

        if (($number % 2) == 0) {
            echo $number . " - четное число. <br>";
        } else {
            echo $number . " - нечетное число. <br>";
        }

    }

    $number++;

} while ($number <= 10);

// 3 задание

echo "<br><br>";
$geolocation = [
    "Московская область" => [
        "Москва",
        "Зеленоград",
        "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург",
        "Всеволожск",
        "Павловск",
        "Кронштадт"
    ],
    "Рязанская область" => [
        "Рязань",
        "Сасово",
        "Касимов", 
        "Скопин"
    ]
];

foreach($geolocation as $key => $value) {

    if ($key == "Московская область") {
        echo $key . "<br>";
    }  else {
        echo "<br><br>" . $key . "<br>";
    }

    foreach ($value as $item) {
        echo $item . ", ";
    }

}

// 4 задание (сначала сделал более сложное решение, потом нашёл функцию нужную и сделал простое решение, решил оставить два)

$alphabet = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'sch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => '\“',
    'ы' => 'y',
    'ь' => '\'',
    'э' => 'je',
    'ю' => 'yu',
    'я' => 'ya',
    ' ' => '_'
];

// первый вариант 4-го задания...

echo "<br><br>";
echo Transliteration('ПРОДАМ ГАРАЖ!', $alphabet);

function Transliteration(string $text, array $lang) : string {
    
    $text = mb_strtolower($text, "UTF-8");
    $textArray = mb_str_split($text);
    
    foreach($textArray as $index => $item) {

        foreach($lang as $key => $value) {

            if ($item == $key) {
                if ($key == " ") {
                    continue;
                }
                $textArray[$index] = $value;
            }

        }
    }
    $textArray = implode("", $textArray);
    return $textArray;
}

// второй вариант 4-го задания...

echo "<br><br>";
echo TransliterationTwo('ПРОДАМ ГАРАЖ!', $alphabet);

function TransliterationTwo(string $text, array $lang) : string {

    $text = mb_strtolower($text, "UTF-8");

    foreach($lang as $index => $item) {
        if ($index == " ") {
            continue;
        }
        $text = str_replace($index, $item, $text);
    }

    return $text;
}

// 5 задание

echo "<br><br>";
echo ReplacingSpace("проверка работы функции");

function ReplacingSpace(string $text) : string {
    $text = str_replace(" ", "_", $text);
    return $text;
}

// 6 задание

$arrayForUl = [
    'Продам', 'Гараж', 'Недорого', 'Звоните'
];

// 7 задание

echo "<br><br>";

for ($i = 0; $i <= 9; print $i++ . ' ') {}

// 8 задание

echo "<br><br>";

foreach($geolocation as $key => $value) {

    if ($key == "Московская область") {
        echo $key . "<br>";
    }  else {
        echo "<br><br>" . $key . "<br>";
    }

    foreach ($value as $item) {
        if (substr($item, 0, 2) == "К") {
            echo $item;
        }
    }

}

echo "<br><br>";

// 9 задание решил след. образом: добавил в алфавит ключ " " и значение "_", 
// в прошлой функции при получении данного символа - continue, а в этой без доп. проверки

echo TransliterationWithSpace("ПРОДАМ ГАРАЖ!", $alphabet);

function TransliterationWithSpace(string $text, array $lang) : string {

    $text = mb_strtolower($text, "UTF-8");
    str_replace($index, $item, $text);
    foreach($lang as $index => $item) {
        $text = str_replace($index, $item, $text);
    }

    return $text;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 6 задание -->
    <ul>
        <?php foreach($arrayForUl as $item): ?>
        <li><?=$item?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>