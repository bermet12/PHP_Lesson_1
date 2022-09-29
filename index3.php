<?php
//Задание 1
$number1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$number2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$answer = array_map(function ($el1, $el2) {
    return $el1 * $el2;
},
    $number1, $number2);

print_r($answer);

//Задание 2
$name = readline("Привет, как тебя зовут?\n");
    $wishes = ["счастья", "успехa", "здоровья", "благополучия", "процветания"];
    $epithets = ["бесконечного", "крепкого", "космического", "безудержного"];

$rand_keys_wishes = array_rand($wishes, 3);
$rand_keys_epithets = array_rand($epithets, 3);
$congratulation = [];

    for ($i = 0; $i < 3; $i++) {
        array_push($congratulation, $epithets[$rand_keys_epithets[$i]] . " "  . $wishes[$rand_keys_wishes[$i]]);

    }


   echo "Дорогой" . " " . $name . "," . "от всего сердца поздравляю тебя с днем рождения, желаю" . " " .implode(',' ,$congratulation) . "!";

