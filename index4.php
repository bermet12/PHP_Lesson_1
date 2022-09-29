<?php
//Задание 1
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$remainderDivision = function (int $array):string
{
    if($array % 2 == 0){
        return "«четное»\n";
    } else {
        return "«нечетное»\n";
    }
};

$result = array_map($remainderDivision, $numbers);
print_r($result);

//Задание 2
function createNewArray(array $arr):array
{
    return [max($arr), min($arr), array_sum($arr) / count($arr)];
}
print_r(createNewArray($numbers));


