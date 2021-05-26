<?php

include 'autoload.php';
class Production
{

    public array $list;

    public function __construct($list){
        $this->list = $list;
    }

    public function sortProduction($array): string      //сортировка продукции
    {
        $countMilk = 0;
        $countEggs = 0;

        for ($i=0; $i < count($array); $i++){
            if ($array[$i] instanceof Cow){
                $countMilk = $countMilk + $array[$i]->getProduction();
            } elseif ($array[$i] instanceof Hen){
                $countEggs = $countEggs + $array[$i]->getProduction();
            }
        }

        return 'Кол-во литров малока: ' . $countMilk . ' ' . 'Кол-во яиц: ' . $countEggs;
    }
}