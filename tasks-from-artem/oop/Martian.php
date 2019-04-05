<?php

class Martian extends Alien
{
    protected $numberEnslavedEarthlings;

    public function __construct(string $name, int $numberEyes, int $numberLimbs, string $skinColor, int $numberEnslavedEarthlings)
    {
        parent::__construct($name, $numberEyes, $numberLimbs, $skinColor);
        $this->numberEnslavedEarthlings = $numberEnslavedEarthlings;
        Alien::$allNumberEarthlings += $numberEnslavedEarthlings;
    }

    public function getNumberEnslavedEarthlings ()
    {
        return $this->numberEnslavedEarthlings;
    }

    public function getInfo()
    {
        return "Инопланетянин по имени " . $this->name . " имеет " . $this->numberEyes . " глаз, " .
                $this->numberLimbs . " конечностей и " . $this->skinColor .
                " цвет кожи, за время вторжения поработил всего " . $this->numberEnslavedEarthlings . " землян.<br>";
    }
}