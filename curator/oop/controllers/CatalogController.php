<?php

class CatalogController
{

    public function actionIndex()
    {
        include_once ROOT . '/model/AbstractClassProduct.php';
        include_once ROOT . '/model/ClassBook.php';
        include_once ROOT . '/model/ClassMonitor.php';
        include_once ROOT . '/model/ClassProductCollection.php';

        $productCollection = new ProductCollection();

        $monitor = new Monitor('ASUS TC-500', 12345, '500',
                'product-1.jpg', 5000, 10000, 12, 'type');
        $productCollection->addProduct($monitor);
        $monitor2 = new Monitor('ASUS TC-500', 12346, '500',
                'product-1.jpg', 5000, 10000, 12, 'type');
        $productCollection->addProduct($monitor2);
        $book = new Book('Сказки', 54321, 0.1,
                'product-7.jpg',100,300, 'Пушкин', 125);
        $productCollection->addProduct($book);
        $book2 = new Book('Сказки', 54322, 0.1,
                'product-7.jpg',100,300, 'Пушкин', 125);
        $productCollection->addProduct($book2);
        $collection = $productCollection->getCollection();

        include_once ROOT . '/view/header.html';
        include_once ROOT . '/view/catalog.html';
        include_once ROOT . '/view/footer.html';

        return true;
    }
}