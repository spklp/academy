<?php

class CartController
{

    public function actionList()
    {
        include_once ROOT . '/view/header.html';
        include_once ROOT . '/view/cart.html';
        include_once ROOT . '/view/footer.html';
        return true;

    }
}