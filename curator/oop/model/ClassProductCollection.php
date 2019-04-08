<?php

class ProductCollection
{
    protected $productCollection = [];

    public function addProduct (Product $product)
    {
        $this->productCollection[$product->getSku()] = $product;
    }

    public function getAllProductPrice()
    {
        $allProductPrice = 0;
        foreach ($this->productCollection as $product){
            $allProductPrice += $product->getOriginalPrice();
        }
        return $allProductPrice;
    }

    public function getCollection ()
    {
        return $this->productCollection;
    }

    public function getCountCollection()
    {
        return count($this->productCollection);
    }

    // удаление с проверкой на наличие элемента
    public function removeProduct (Product $product)
    {
        if (isset($this->productCollection[$product->getSku()]))
        {
            unset($this->productCollection[$product->getSku()]);
            return true;
        }
        else
            return false;
    }
}