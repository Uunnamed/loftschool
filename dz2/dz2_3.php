<?php
/**
Задание No3
Функция должна принимать переменное число аргументов, но первым аргументом обязательно должна быть строка,
 * обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы целые и/или вещественные.
Например: имя функции someFunction(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2
Дополнительно (не обязательно): Задание взять из Задачи No2.
 */

function math()
{
    $arr=func_get_args();
    $operator=array_shift($arr);
    if(!empty($arr) && $operator !='') {
        $result = array_shift($arr);
        foreach ($arr as $key => $value) {
            switch ($operator) {
                case '-':
                    $result -= $value;
                    break;
                case '+':
                    $result += $value;
                    break;
                case '/':
                    $result /= $value;
                    break;
                case '*':
                    $result *= $value;
                    break;
                case '^':
                    $result = pow($result, $value);
                    break;
                default:
                    $result = 'Не известный вид операции';
            }


        }
        return $result;
    }
    else{
        return 'Недостаточно данных для проведения вычислений';
    }
}


echo math('+', 1, 2, 3, 5.2);