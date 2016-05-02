<?php
/**
Задача No6
Создайте массив $bmw с ячейками: model, speed, doors, year.
Заполните ячейки значениями соответственно: “X5”, 120, 5, “2015”.
Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните данными).
Выведите значения всех трёх массивов в виде: Модель: model
Скорость: speed
Двери: doors
Год выпуска: year
Например:
Модель: X5 Скорость: 120

Двери: 5
Год выпуска: 2015
 */
$bmv = ['model'=>'X5', 'speed'=>120, 'doors'=>5, 'year'=>2015];
$toyota = ['model'=>'Corolla', 'speed'=>110, 'doors'=>4, 'year'=>2013];
$opel = ['model'=>'Mokka', 'speed'=>90, 'doors'=>5, 'year'=>2014];

function print_infocars($brend_car){
    echo 'Модель:'.$brend_car['model'].'</br>Скорость:'.$brend_car['speed'].'км/ч</br>Двери:'.$brend_car['doors'].
        '</br>Год выпуска:'.$brend_car['year'].'</br></br>';
}
print_infocars($bmv);
print_infocars($toyota);
print_infocars($opel);