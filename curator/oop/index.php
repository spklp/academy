<?php

require_once 'AbstractClassProduct.php';
require_once 'ClassMonitor.php';
require_once 'ClassBook.php';
require_once 'ClassProductCollection.php';


$productCollection = new ProductCollection();

$monitor = new Monitor('ASUS TC-500', 12345, '500',
        'product-1.jpg', 5000, 10000, 12, 'type');

$productCollection->addProduct($monitor);

$book = new Book('Сказки', 54321, 0.1,
        'product-7.jpg',100,300, 'Пушкин', 125);

$productCollection->addProduct($book);
$collection = $productCollection->getCollection();

include_once 'shop.html';