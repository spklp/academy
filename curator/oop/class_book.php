<?php

class Book extends Product
{
    protected $category = 'book';
    protected $author;
    protected $pageCount;

    public function __construct($name, $sku, $category, $weight, $image, $originalPrice, $price, $author, $pageCount)
    {
        parent::__construct($name, $sku, $category, $weight, $image, $originalPrice, $price);
        $this->author = $author;
        $this->pageCount = $pageCount;
    }

    public function getProductInfo()
    {
        echo "<span>Категория - $this->name, вес - $this->weight, цена: $this->price, Автор - $this->author, $this->pageCount стр.</span><br>";
    }

}