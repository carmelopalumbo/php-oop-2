<?php

class Category
{
    public $type;
    public $icon;

    public function __construct($_type)
    {
        $this->type = $_type;
        $this->setIcon();
    }

    public function setIcon()
    {
        if ($this->type === 'Cane') {
            $this->icon = 'https://www.focus.it/images/2022/05/03/cani_1020x680.jpg';
        } elseif ($this->type === 'Gatto') {
            $this->icon = 'https://www.focus.it/images/2021/02/22/gatto_1020x680.jpg';
        }
    }
}
