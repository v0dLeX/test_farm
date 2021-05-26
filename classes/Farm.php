<?php

//include 'autoload.php';


class Farm{


    public array $list_animals;    //создание списка регистрации животных

    public function __construct($list_animals)
    {$this->list_animals = $list_animals;
    }

    public function addAnimal($animal){     //добавление животных в хлев
        $this->list_animals[] = $animal;    //индекс является уникальным регистрационным номером
    }

    public function collectionProduction(): string  //сбор продукции
    {
        $collecting = new Production($this->list_animals);
        return $collecting->sortProduction($this->list_animals);
    }






}