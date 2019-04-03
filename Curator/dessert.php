<?php
/*$result = [];
for ($i=1; $i<=10000; $i++){
    for ($j=1; $j<=10000; $j++) {
        $a1 = $i * $j;
        $a2 = ($i + $j) * 10;
        if ($a1 == $a2){
            if (! in_array($a1, $result)) {
                echo "<br>$i * $j = " . $a1; // проблема с областью видимости нельзя заменить $i * $j  на  $i1
                array_push($result, $a1);
            }
        }
    }
}*/


for ($i=1; $i<=10000; $i++):
    for ($j=$i; $j<=10000; $j++):
        $a1 = $i * $j;
        $a2 = ($i + $j) * 10;
        if ($a1 == $a2):
            echo "<br>$i * $j = " . $a1;
        endif;
    endfor;
endfor;