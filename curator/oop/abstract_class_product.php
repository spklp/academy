<?php

abstract class Product
{
    protected $name;
    protected $sku; // артикль
    protected $category;
    protected $weight;
    protected $image; // имя файла картинки товара
    protected $originalPrice; //цена за продукт
    protected $price; //цена со скидкой

    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    public function getDiscountPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getSku(){
        return $this->sku;
    }

    abstract public function getProductInfo();

    public function __construct($name, $sku, $weight, $image, $originalPrice, $price)
    {
        $this->name = $name;
        $this->sku = $sku;
        $this->weight = $weight;
        $this->image = $image;
        $this->originalPrice = $originalPrice;
        $this->price = $price;
    }

}
