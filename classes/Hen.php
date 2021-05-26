<?php


class Hen extends Animal
{
    public $id;

    public function __construct(){
        $this->id = substr(md5(rand()), 0,6);
    }
    public function getProduction(): int
    {
        return mt_rand(0, 1);
    }


}