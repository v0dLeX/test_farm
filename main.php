<?php

include 'autoload.php';
include 'vendor/autoload.php';  //попробовал поработать с Composer'ом, но нужно больше времени


$animals = array();         //Да, я обожаю массивы
$cows = array();
$hens = array();
(int)$product = array();
(int)$milk = array();
(int)$eggs = array();

for ($i = 0; $i<10; $i++){
    $cows[] = new Cow();
    Farm::addAnimal($cows[$i], $milk);
}
for ($i = 0; $i<20; $i++){
    $hens[] = new Hen();
    Farm::addAnimal($hens[$i], $eggs);
}
array_push($animals, $cows, $hens);
array_push($product, $milk, $eggs);

print 'Кол-во литров молока: ' . Farm::collectProduction($product)[0] . PHP_EOL;
print 'Кол-во яиц: ' . Farm::collectProduction($product)[1] . PHP_EOL;