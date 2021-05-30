<?php

include 'autoload.php';
include 'vendor/autoload.php';


class Farm{


    public array $list_animals;    //создание списка регистрации животных

    public function __construct($list_animals)
    {$this->list_animals = $list_animals;
    }

    public function addAnimal($animal){         //добовление животных
        if ($animal instanceof Animal){
            $this->list_animals[] = $animal;
        } else {
            print 'Не верный тип животного';
        }
    }

    private function sortAnimals($list){                //сортировка массива по типу
        if (count($list) < 2){
            return $list;
        } else {
            $pilot[] = $list[0];
            $first_class = [];
            $second_class = [];
            for ($i = 1; $i < count($list); $i++){
                if ($list[$i] instanceof $pilot[0]){
                    array_push($first_class, $list[$i]);
                } else {
                    array_push($second_class, $list[$i]);
                }
            }
            return array_merge($first_class, $pilot, $this->sortAnimals($second_class));
        }
    }

    public function collectProduction($array){      //сбор и распределение продукции
        $production = [];                           //конечно же с костылем в виде name у класса
        $collect_list = $this->sortAnimals($array);
        $count_production = $collect_list[0]->getProduction();
        for ($i = 1; $i < count($collect_list); $i++){
            if ($collect_list[$i] instanceof $collect_list[$i-1]){
                $count_production = $count_production + $collect_list[$i]->getProduction();
            } else {
                $production[$collect_list[$i-1]->getName()] = $count_production;
                $count_production = $collect_list[$i]->getProduction();
            }
            if ($i + 1 == count($collect_list)){
                $production[$collect_list[$i]->getName()] = $count_production;
            }
        }
        foreach ($production as $item => $value){
            print 'Колличество ' . $item . ': ' . $value . ' ';
        }
    }





}