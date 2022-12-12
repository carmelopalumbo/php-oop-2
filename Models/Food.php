<?php

class Food extends Product
{
    public $weight;
    public $ingredients;
    public $expiry_date;
    public $category;
    public $image = null;

    public function __construct($_id, $_name, $_brand, $_price, $_inStore, $_weight, $_ingredients, $_expiry_date, Category $_category)
    {
        parent::__construct($_id, $_name, $_brand, $_price, $_inStore);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->expiry_date = $_expiry_date;
        $this->category = $_category;
    }
}
