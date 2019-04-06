<?php

interface iName
{
    public function getName();
}

abstract class Alien implements iName
{
    protected $name;
    protected $numberEyes;
    protected $numberLimbs;
    protected $skinColor;
    protected static $allNumberEarthlings = 0;

    public static function getAllNumberEarthlings (){
        return self::$allNumberEarthlings;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEyesNumber()
    {
        return $this->numberEyes;
    }

    public function getLimbsNumber()
    {
        return $this->numberLimbs;
    }

    public function getSkinColor()
    {
        return $this->skinColor;
    }

    public function __construct($name, $numberEyes, $numberLimbs, $skinColor)
    {
        $this->name = $name;
        $this->numberEyes = $numberEyes;
        $this->numberLimbs = $numberLimbs;
        $this->skinColor = $skinColor;
    }
    abstract public function getNumberEnslavedEarthlings();
}

class Martian extends Alien
{
    protected $numberEnslavedEarthlings;

    public function getNumberEnslavedEarthlings ()
    {
        return $this->numberEnslavedEarthlings;
    }

    public function __construct(string $name, int $numberEyes, int $numberLimbs, string $skinColor, int $numberEnslavedEarthlings) {
        parent::__construct($name, $numberEyes, $numberLimbs, $skinColor);
        $this->numberEnslavedEarthlings = $numberEnslavedEarthlings;
        parent::$allNumberEarthlings += $numberEnslavedEarthlings;
    }

    public function getInfo()
    {
        return "Имя инопланетянина: " . $this->name .
                "<br>Количество глаз: " . $this->numberEyes .
                "<br>Количество конечностей: " . $this->numberLimbs .
                "<br>Цвет кожи: " . $this->skinColor .
                "<br>За время вторжения поработил: " . $this->numberEnslavedEarthlings . " землян.";
    }
}

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
echo Alien::getAllNumberEarthlings();



