<?php

include 'autoload.php';
include 'vendor/autoload.php';


class Farm{

    public static function addAnimal(Animal $animal, &$array){  //добавление животных к аппарату и выкачивание ресурсов
        if ($animal instanceof CanGiveProduct) {
            array_push($array, $animal->getProduction());
        } else {
            print 'Животное класса ' . get_class($animal). ' с id '.$animal->id . ' не может создовать продукты.' . PHP_EOL;
        }
    }

    public static function collectProduction($list): array         //сбор
    {
        $count = array();
        foreach ($list as $value){
            $count[] = array_sum($value);
        }
        return $count;
    }





}