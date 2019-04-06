<?php

require_once 'Alien.php';
require_once 'Martian.php';

$armyMartians = [];

$armyMartians[] = new Martian('Викари', 9, 8, 'красны', 13453);
$armyMartians[] = new Martian('Миаарт', 5, 4, 'синий', 15679);
$armyMartians[] = new Martian('Урлахаа', 3, 6, 'желтый', 10781);
$armyMartians[] = new Martian('Эаарт', 7, 13, 'пурпурный', 1945);
$armyMartians[] = new Martian('Мюлел', 2, 2, 'белый', 25767);
$armyMartians[] = new Martian('Йедриха', 11, 13, 'черный', 167);

foreach ($armyMartians as $martian){
    echo "<div style='border: 1px solid black'>" . $martian->getInfo() . "</div>";
}

echo "<h3>Всего порабощено: " . Alien::getAllNumberEarthlings() . " землян.</h3>";
