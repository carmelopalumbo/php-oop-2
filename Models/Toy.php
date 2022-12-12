<?php

class Toy extends Product
{
    public $feature;
    public $size;
    public $color;
    public $image = null;

    public function __construct($_id, $_name, $_brand, $_price, $_inStore, $_feature, $_size, $_color)
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_inStore);

        $this->feature = $_feature;
        $this->size = $_size;
        $this->color = $_color;
    }
}
