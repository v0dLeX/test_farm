<?php

include 'autoload.php';
include 'vendor/autoload.php';


class Farm{

    public static function addAnimal(int $count, string $getClass){  //добавление животных к аппарату и выкачивание ресурсов
       for ($i = 0; $i < $count; $i++){
           $animalsList[] = new $getClass();
           if ($animalsList[$i] instanceof CanGiveProduct) {
               $production[] = $animalsList[$i]->getProduction();
           } else {
               print 'Животное класса ' . get_class($animalsList[$i]). ' с id '.$animalsList[$i]->id . ' не может создовать продукты.' . PHP_EOL;
           }
       }
       if ($production != null){
           return array_sum($production);
       }
    }





}