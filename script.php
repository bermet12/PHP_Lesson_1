<?php
//Второе задание
$name = readline("Привет, как тебя зовут?\n");
$age = readline("Сколько тебе лет?\n");
echo "Вас зовут $name, вам $age лет\n";

//не совсем поняла как надо было реализовать 3 задание, поэтому добавила сюда оба варианта ответов
//Третье задание
$task1 = readline("Какая задача стоит перед вами сегодня?\n");
$timeOfTask1 = (int)readLine("Сколько примерно времени эта задача займет?\n");
$task2 = readline("Какая задача стоит перед вами сегодня?\n");
$timeOfTask2 = (int)readLine("Сколько примерно времени эта задача займет?\n");
$task3 = readline("Какая задача стоит перед вами сегодня?\n");
$timeOfTask3 = (int)readLine("Сколько примерно времени эта задача займет?\n");
$sum = $timeOfTask1 + $timeOfTask2 + $timeOfTask3;
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n";
echo "- $task1 ($timeOfTask1 ч)\n";
echo "- $task2 ($timeOfTask2 ч)\n";
echo "- $task3 ($timeOfTask3 ч)\n";
echo "Примерное время выполнения плана = $sum ч\n";


//Третье задание
//for ($i = 1; $i <= 3; $i++) {
//    $key = readline("Какая задача стоит перед вами сегодня?\n");
//    $value = readLine("Сколько примерно времени эта задача займет?\n");
//     $array[$key] = $value;
//}
//echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n";
//foreach($array as $item => $item_count) {
//    echo  "- $item  ($item_count ч)\n";
//}
//echo "Примерное время выполнения плана = " . array_sum($array) . "ч\n";