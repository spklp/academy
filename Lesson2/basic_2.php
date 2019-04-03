<?php
// Вывод таблицы умножения
echo "<table><tr>";
for ($i = 1; $i < 11; $i++){
    if ($i == 6){
        echo "</tr><tr>";
    }
    echo "<td style='border: 1px solid gray'>";
    for ($j = 1; $j < 11; $j++){
        echo "$i x $j = " . $i * $j . "<br>";
    }
    echo "</td>";
}
echo "</tr></table><br>";


// Бесконечный цикл вывода квадратов чисел
$i = 1;
while ($i > 0){
    $i2 = $i * $i;
    echo "$i<sup>2</sup> = $i2<br>";
    if ($i2 > 100){
        goto finish;
    }
    $i++;
}
finish:
echo "Цикл завершон<br><br>";


// Создание функции произведения трех аргументов
function mul3 ($a, $b, $c = 5){
    return $a * $b * $c;
}
