<?php
/**
Задача No1
Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе.
Примечание: Теги параграфа <p></p>.
Дополнительно (не обязательно): При выводе каждую строку выводить внутри параграфа случайное число раз.
 */

function printStrings($array){
    $printarr="";
    foreach ($array as $key=>$value) {
        $printarr .="<p>";
        $random=mt_rand(1,5);
        for($i=0;$i<$random;$i++){
            $printarr.=$value;
        }
        $printarr.="</p>";
    }
    return $printarr;
}
$array=["Идет бычек качается ","Вздыхает на ходу ","- Ох, доска кончается, ","Сейчас я упаду! "];

echo printStrings($array);