<?php


class Cow extends Animal
{

    public function getProduction(): int
    {
        return mt_rand(8, 12);
    }
}