<?php

class Product {
    public $name;
    public $price;
    public $weight;

    public function __construct(string $name, int $price, float $weight) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;

    }

    public function getInfo() {
        echo "<div>
            <h3>$this->name</h3><br>
            <span>Цена: $this->price ₽ - $this->weight кг.</span>
            </div><br>";

    }

    public function getPriceWithNDS() {
        echo "<span>Цена: $this->price ₽ - цена с учетом НДС</span><br>";
    }

    public function getPriceWithOutNDS() {
        echo "<span>Цена: " . round(($this->price * 100 / 120), 2) . " ₽  - цена без учета НДС</span><br>";
    }
}

$product1 = new Product('Камень', '100', '5');
$product2 = new Product('Большие Ножницы', '300', '1');
$product3 = new Product('Бумага', '200', '0.5');

$product1->getInfo();
$product2->getInfo();
$product3->getInfo();
$product3->getPriceWithNDS();
$product3->getPriceWithOutNDS();