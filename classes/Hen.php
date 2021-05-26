<?php


class Hen extends Animal
{

    public function getProduction(): int
    {
        return mt_rand(0, 1);
    }


}