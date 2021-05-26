<?php

include 'autoload.php';

$stable = array();    //создание хлева
$farm = new Farm($stable);

$cow1 = new Cow();
$cow2 = new Cow();
$cow3 = new Cow();
$cow4 = new Cow();
$cow5 = new Cow();
$cow6 = new Cow();
$cow7 = new Cow();
$cow8 = new Cow();
$cow9 = new Cow();
$cow10 = new Cow();

$farm -> addAnimal($cow1);
$farm -> addAnimal($cow2);
$farm -> addAnimal($cow3);
$farm -> addAnimal($cow4);
$farm -> addAnimal($cow5);
$farm -> addAnimal($cow6);
$farm -> addAnimal($cow7);
$farm -> addAnimal($cow8);
$farm -> addAnimal($cow9);
$farm -> addAnimal($cow10);

$hen1 = new Hen();
$hen2 = new Hen();
$hen3 = new Hen();
$hen4 = new Hen();
$hen5 = new Hen();
$hen6 = new Hen();
$hen7 = new Hen();
$hen8 = new Hen();
$hen9 = new Hen();
$hen10 = new Hen();
$hen11 = new Hen();
$hen12 = new Hen();
$hen13 = new Hen();
$hen14 = new Hen();
$hen15 = new Hen();
$hen16 = new Hen();
$hen17 = new Hen();
$hen18 = new Hen();
$hen19 = new Hen();
$hen20 = new Hen();

$farm -> addAnimal($hen1);
$farm -> addAnimal($hen2);
$farm -> addAnimal($hen3);
$farm -> addAnimal($hen4);
$farm -> addAnimal($hen5);
$farm -> addAnimal($hen6);
$farm -> addAnimal($hen7);
$farm -> addAnimal($hen8);
$farm -> addAnimal($hen9);
$farm -> addAnimal($hen10);
$farm -> addAnimal($hen11);
$farm -> addAnimal($hen12);
$farm -> addAnimal($hen13);
$farm -> addAnimal($hen14);
$farm -> addAnimal($hen15);
$farm -> addAnimal($hen16);
$farm -> addAnimal($hen17);
$farm -> addAnimal($hen18);
$farm -> addAnimal($hen19);
$farm -> addAnimal($hen20);

print $farm->collectionProduction();