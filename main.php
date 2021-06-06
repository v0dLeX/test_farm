<?php

include 'autoload.php';
include 'vendor/autoload.php';  //попробовал поработать с Composer'ом, но нужно больше времени






print 'Кол-во литров молока: ' . Farm::addAnimal(10, 'Cow') . PHP_EOL;
print 'Кол-во яиц: ' . Farm::addAnimal(20, 'Hen') . PHP_EOL;