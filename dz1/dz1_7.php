<?php
//Создать ассоциативный массив $cars. Данные взять из задания No6. Требуется, чтобы все данные были в одном массиве.
// Реализовать через вложенные массивы.
// Вывести массив в удобочитаемом виде через конструкцию print_r и через foreach.
$cars=[
'BMW'  =>  ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015],
'Toyota'  =>  ['model' => 'Corolla', 'speed' => 110, 'doors' => 4, 'year' => 2013],
'Opel'  =>  ['model' => 'Mokka', 'speed' => 90, 'doors' => 5, 'year' => 2014]
];
//вариант 1
function print_infocars($brend_car){
    echo 'Модель: '.$brend_car['model'].'</br>Скорость: '.$brend_car['speed'].'км/ч</br>Двери: '.$brend_car['doors'].
        '</br>Год выпуска: '.$brend_car['year'].'</br></br>';
}


foreach ($cars as $brend => $info){
    echo 'Марка: '.$brend.'</br>';
    print_infocars($info);
}
//вариант 2
foreach ($cars as $brend => $info){
    echo '<pre>'.$brend."</br>";
    print_r($info);
    echo '</pre>';
}