<?php

require_once 'Alien.php';
require_once 'Martian.php';

$armyMartians = [];

$armyMartians[] = $martian = new Martian('Викари', 9, 8, 'красны', 13453);
$armyMartians[] = $martian1 = new Martian('Миаарт', 5, 4, 'синий', 15679);
$armyMartians[] = $martian2 = new Martian('Урлахаа', 3, 6, 'желтый', 10781);
$armyMartians[] = $martian3 = new Martian('Эаарт', 7, 13, 'пурпурный', 1945);
$armyMartians[] = $martian4 = new Martian('Мюлел', 2, 2, 'белый', 25767);
$armyMartians[] = $martian5 = new Martian('Йедриха', 11, 13, 'черный', 167);

foreach ($armyMartians as $martian){
    echo $martian->getInfo();
}

echo "<h3>Всего порабощено: " . Alien::getAllNumberEarthlings() . " землян.</h3>";
