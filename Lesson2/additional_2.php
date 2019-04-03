<?php
// Поик простых чисел
$simNum = [];
for ($i = 2; $i <= 100; $i++){
    for($j = 2, $isSimpleNumber = true; $j < $i - 1; $j++) {
        if ($i % $j == 0){
            $isSimpleNumber = false;
        }
    }
    if ($isSimpleNumber){
        echo "$i<br> ";
        $simNum[] = $i;
    }
}
echo "<br>";

// Вывод простих чисел циклом foreach
foreach ($simNum as $key => $value){
    echo "$value - это простое число №" . ($key + 1) . "<br>";
}


// Фунция определения високосного года
function year ($a){

        return ((($a % 4 == 0) and ($a % 100 != 0)) or ($a % 400 == 0));

}

var_dump(year(2100));


