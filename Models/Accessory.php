<?php

class Accessory extends Product
{
    public $material;
    public $size;
    public $category;

    public function __construct($_id, $_name, $_brand, $_price, $_inStore, $_material, $_size, Category $_category)
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_inStore);

        $this->material = $_material;
        $this->size = $_size;
        $this->category = $_category;
    }
}
