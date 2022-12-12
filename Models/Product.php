<?php

class Product
{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $inStore;
    protected $image;

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
        $this->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png';
    }

    public function setImg($_image)
    {
        $this->image = $_image;
    }

    public function getImg()
    {
        return $this->image;
    }
}
