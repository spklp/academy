<?php

class Monitor extends Product
{
    protected $category = 'monitor';
    protected $matrixSize;
    protected $matrixType;

    public function __construct($name, $sku, $weight, $image, $originalPrice, $price, $matrixSize, $matrixType)
    {
        parent::__construct($name, $sku, $weight, $image, $originalPrice, $price);
        $this->matrixSize = $matrixSize;
        $this->matrixType = $matrixType;
    }

    public function getProductInfo()
    {
        echo "<span>Категория - $this->name, вес - $this->weight, цена: $this->price, матрица - $this->matrixType $this->matrixSize</span><br>";
    }

}