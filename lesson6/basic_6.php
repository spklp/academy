<?php

abstract class Product
{
    public $name;
    public $price;
    public $weight;

    public function __construct(string $name, int $price, float $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getInfo()
    {
        echo "<div>
            <h3>$this->name</h3><br>
            <span>Цена: $this->price ₽ - $this->weight кг.</span>
            </div><br>";

    }

    public function showImage()
    {
        return $this->name;
    }
}

class Chocolate extends Product
{
    public $calories;

    public function __construct(string $name, int $price, float $weight, int $calories)
    {
        $this->calories = $calories;
        parent::__construct($name, $price, $weight);
    }

    public function showImage ()
    {
        echo "<div style='width: 200px; height: 200px; background-image: url(img/chocolate.jpg);'></div>";
    }
}


class Candy extends Product
{

    public function __construct(string $name, int $price, float $weight)
    {
        parent::__construct($name, $price, $weight);
    }

    public function showImage ()
    {
        echo "<div style='width: 100px; height: 100px; background-image: url(img/candy.png);'></div>";
    }
}


$chocolate = new Chocolate('name', 110, 0.1, 200);
$chocolate->showImage();

$candy = new Candy('name', 50, 0.01);
$candy->showImage();



