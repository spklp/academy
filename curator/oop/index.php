<?php

require_once 'abstract_class_product.php';
require_once 'class_monitor.php';
require_once 'class_book.php';

$monitor = new Monitor('TC-500', 12345, '500',
        'имя картинки', 5000, 10000, 12, 'type');
$book = new Book('Сказки', 54321, 'book', 0.1,
        'имя картинки книги', 100, 300, 'Пушкин', 125);

$monitor->getProductInfo();
echo $monitor->getOriginalPrice();

$book->getProductInfo();
echo $book->getDiscountPrice();


