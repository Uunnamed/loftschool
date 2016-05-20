<?php
/**
Функция должна принимать в качестве аргумента массив чисел и возвращать так же массив, но отсортированный по возрастанию.
Системные функции сортировки не использовать.
Пример: В функцию передали [1, 22, 5, 66, 3, 57]. Вернула: [1, 3, 5, 22, 57, 66]
Дополнительно (не обязательно): Доработать функцию так, чтобы в качестве второго аргумента
 она принимала название функции сортировки. И сортировала массив с использованием этой функции.
В идеале добавить 2 функции сортировки, одна из которых должна быть задана по умолчанию.
 */


function sortUp(array $arr){
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;

}
function sortDown(array $arr){
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;

}
function sortarr(array $arr,$method) {
    return $method($arr);

}

$arr=[22, 5, 66, 3, 57];
print_r(sortarr($arr,'sortDown'));