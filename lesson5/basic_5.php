<?php

class Product
{
    public $name;
    public $price;
    public $weight;

    public function __construct ($name, $price, $weight){
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;

    }

    public function getInfo(){
        echo "<div>
            <h3>$this->name</h3><br>
            <span>Цена: $this->price ₽ - $this->weight кг.</span>
            </div><br>";

    }
}

$product1 = new Product('Камень', '100', '5');
$product2 = new Product('Большие Ножницы', '300', '1');
$product3 = new Product('Бумага', '200', '0.5');

$product1->getInfo();
$product2->getInfo();
$product3->getInfo();