<?php

//base product
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';

//type of products
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Accessory.php';
require_once __DIR__ . '/../Models/Toy.php';

//stock
$food_stock = [
    new Food(123, 'Croccantini per cani', 'CaniOK', 20, true, 'XL', 'Verdura e Pollo', '26/12/2023', new Category('Cane')),
    new Food(185, 'Croccantini per gatti', 'GattiOK', 18, true, 'Medium', 'Pollo', '26/10/2023', new Category('Gatto')),
    new Food(193, 'Biscotti per cani', 'PETSTORE', 13, false, 'Small', 'Carne essiccata', '21/12/2023', new Category('Cane')),
    new Food(103, 'Biscotti per gatti', 'PETSTORE', 11, true, 'Small', 'Verdura', '26/03/2023', new Category('Gatto')),
    new Food(123, 'Dentalstick', 'CaniAlTop', 35, true, 'XL', 'Carne e Pollo', '16/12/2023', new Category('Cane')),
];
//var_dump($food_stock);

$toys_stock = [
    new Toy(987, 'Gomitolo', 'PetGames', 8, true, 'Gomitolo di materiale sicuro', 'Small', 'Rosso'),
    new Toy(967, 'Maialino', 'GiochiXTutti', 5, false, 'Maialino che suona', 'Medium', 'Rosa'),
    new Toy(917, 'Pallina', 'PetGames', 3, true, 'Pallina rimbalzante', 'Small', 'Giallo'),
    new Toy(950, 'Osso Finto', 'TuttoPerAnimali', 9, true, 'Osso finto sicuro per i denti', 'XL', 'Bianco'),
    new Toy(987, 'Pallina elettrica', 'PetGames', 20, false, 'Pallina che riproduce suoni ad ogni rimbalzo', 'Medium', 'Verde')
];
//var_dump($toys_stock);

$accessory_stock = [
    new Accessory(654, 'Guinzaglio per cani', 'AnimalDress', 15, true, 'Lana', 'medium', new Category('Cane')),
    new Accessory(614, 'Lettiera per gatti', 'CatOK', 10, false, 'Bentonite', 'small', new Category('Gatto')),
    new Accessory(684, 'Guinzaglio per cani grandi', 'AnimalDress', 25, true, 'Lana', 'XL', new Category('Cane')),
    new Accessory(692, 'Collare per cani', 'CollariPerAnimali', 27, true, 'Nylon', 'medium', new Category('Cane')),
    new Accessory(654, 'Collare per gatti', 'CollariPerAnimali', 25, false, 'Pelle', 'small', new Category('Gatto')),
];
//var_dump($accessory_stock);


//set images
$food_stock[0]->setImg('https://i0.wp.com/www.bizon.it/wp-content/uploads/2020/11/crocchette-per-cani-superpremium-maiale-e-patate-kg-10.jpg');

$food_stock[2]->setImg('https://www.ilcuoreinpentola.it/wp-content/uploads/2020/04/biscotti-per-cani-ricetta4.jpg');

$food_stock[4]->setImg('https://www.viridiaonline.it/wp-content/uploads/2017/08/NS1020-DENTAL-STICK-PARTIC..jpg');

$accessory_stock[1]->setImg('https://www.palucart.it/media/prodotti/2-lettiera.jpg');

$toys_stock[3]->setImg('https://amicaveterinaria.com/wp-content/uploads/2021/01/osso-di-bufalo.jpg');

$toys_stock[1]->setImg('https://www.robinsonpetshop.it/1758-large_default/trixie-gioco-maialino-per-cane.jpg');
