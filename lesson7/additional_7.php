<?php

interface iPrice
{
    public function getPrice();
}

interface iImage
{
    public function showImage();
}

interface iInfo
{
    public function getInfo();
}


// Абстрактный класс продукт
abstract class Product implements iPrice, iImage, iInfo
{
    protected $name;
    protected $price;
    protected $weight;
    public static $count = 0;

// Конструктор объектов
    public function __construct(string $name, int $price, float $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        Product::$count++;
    }

    public function getPrice()
    {
        return $this->price;
    }
// Публичная функция для всех объектов
    public function getInfo()
    {
        echo "<div>
            <h3>$this->name</h3><br>
            <span>Цена: $this->price ₽ - $this->weight кг.</span>
            </div><br>";

    }

// Счетчик объектов (статический)
    public function getCount()
    {
        return self::$count ;
    }



}


class Chocolate extends Product
{
    public $calories;

// Конструктор класса с счетчиком количества объектов и выводом изображения при создании
    public function __construct(string $name, int $price, float $weight, int $calories)
    {
        $this->calories = $calories;
        parent::__construct($name, $price, $weight);
        $this->showImage ();

    }

// Описание абстрактного класса родителя
    public function showImage ()
    {
        echo "<div style='width: 200px; height: 200px; background-image: url(img/chocolate.jpg);'></div>";
    }

    public function __set($name, $value)
    {
        echo "Нельзя присвоить значение $value свойству $name<br>";
    }

}


class Candy extends Product
{

    public function __construct(string $name, int $price, float $weight)
    {
        parent::__construct($name, $price, $weight);
        $this->showImage ();
    }

    public function showImage ()
    {
        echo "<div style='width: 100px; height: 100px; background-image: url(img/candy.png);'></div>";
    }

    public function __get($name)
    {
        echo "Нельзя обратится к свойству $name<br>";
    }
}


$chocolate = new Chocolate('Alpen Gold', 110, 0.1, 200);

$candy = new Candy('Коровка', 50, 0.01);
echo "<br>________________________________________________________________<br>";


$chocolate->abc = 10;  // проверка __set
echo $candy->randomVelue;  // проверка __get

// проверка интерфейсов
echo $candy->getPrice();
echo $candy->getInfo();
echo $candy->showImage();





