<?php
//Первое задание
while (true) {
    $answer = readline("В каком году произошло крещение Руси? Варианты: 810, 988 или 740 год\n");
    if ($answer == 988) {
        echo "Правильно!\n";
        break;
    } elseif ($answer == 810){
   echo "Неправильно.\n";
   break;
} elseif ($answer == 740) {
   echo "Неправильно.\n";
   break;
} else {
        echo "Введите значение из предложенных вариантов:\n";
    }
}

//Второе задание
$name = readline("Привет, как тебя зовут?\n");
$array = [];
$number = (int)readLine("Сколько задач Вы запланировали на день?\n");
while ($number !== 0) {
    $key = readline("Какая задача стоит перед вами сегодня?\n");
    $value = readLine("Сколько примерно времени эта задача займет?\n");
    $array[$key] = $value;
    $number--;
}
foreach($array as $item => $item_count) {
    echo  "- $item  ($item_count ч)\n";
}
echo "Примерное время выполнения плана = " . array_sum($array) . "ч\n";

//Третье задание
//Пока третье задание было не обязательным, я смогла придти к такому решению.Все работает до числа 21,
// если вводить больше все ломается и пока я не нашла как это исправить.
// Я правильно пытаюсь решать или пошла не в том направлении?
$input = (int)readline("Введите положительное число больше 0\n");
$NumberDivides = 5;

$wholeNumber = intdiv($input, $NumberDivides);
$remainder = $input % 5;
$arm = array('Большой',
    'Указательный',
    'Средний',
    'Безымянный',
    'Мизинец');
$arm_r = array_reverse($arm);

if ($wholeNumber % 2 == 0 ){
    $result = $arm[$remainder + $wholeNumber - 1];
} else {
    $result = $arm_r[$remainder + $wholeNumber -1];
}
print_r($result."\n");