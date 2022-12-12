<?php

class Product
{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $inStore;
    public $image;

    /**
     * @var Number $id
     * @var String $name
     * @var String $brand
     * @var Number $price
     * @var Bool $inStore
     */
    public function __construct($_id, $_name, $_brand, $_price, $_inStore)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->inStore = $_inStore;
    }
}
