<?php

abstract class Alian
{
    protected $name;
    protected $numberEyes;
    protected $numberLimbs;
    protected $skinColor;
    protected static $allNumberEarthlings;

    public function __construct(string $name, int $numberEyes, int $numberLimbs, string $skinColor)
    {
        $this->name = $name;
        $this->numberEyes = $numberEyes;
        $this->numberLimbs = $numberLimbs;
        $this->skinColor = $skinColor;

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

    public static function getAllNumberEarthlings (){
        return self::$allNumberEarthlings;
    }

    abstract public function getInfo ();

}