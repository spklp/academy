<?php

$data = date("j");
$dayOfTheWeek = date("N");
$month = date("F");
$daysInTheMonth = date("t");

if ($data - $dayOfTheWeek >= 0){ // TODO проверить
    $addDays = 7 - (($data - $dayOfTheWeek)% 7);
    if ($addDays == 7){
        $addDays = 0;
    }
}
else{
    $addDays = $dayOfTheWeek - $data;
}
$weeks = ceil(($daysInTheMonth + $addDays) / 7);
?>

<link href="style_2.css" rel="stylesheet">
<table class="cinereousTable">
    <thead>
    <tr>
        <th colspan="7"><?php echo $month; ?></th>
    </tr>
    </thead>
    <thead>
    <tr>
        <th>Пн</th>
        <th>Вт</th>
        <th>Ср</th>
        <th>Чт</th>
        <th>Пт</th>
        <th>Сб</th>
        <th>Вс</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0, $num = -$addDays + 1; $i < $weeks; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 7 and $num <= $daysInTheMonth; $j++, $num++): ?>
                <?php if ($num > 0): ?>
                    <?php if ($num == $data): ?>
                        <td class="today"><?php echo $num ?></td>
                    <?php else: ?>
                        <td><?php echo $num ?></td>
                    <?php endif; ?>
                <?php else: ?>
                    <td></td>
                <?php endif; ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>
