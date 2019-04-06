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
        return "Имя инопланетянина: " . $this->name .
                "<br>Количество глаз: " . $this->numberEyes .
                "<br>Количество конечностей: " . $this->numberLimbs .
                "<br>Цвет кожи: " . $this->skinColor .
                "<br>За время вторжения поработил: " . $this->numberEnslavedEarthlings . " землян.";
    }
}