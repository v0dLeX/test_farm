<?php


class Cow extends Animal
{
    public $name = 'литров молока';
    public $id;
    public function __construct()
    {
        $this->id = substr(md5(rand()), 0, 6);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getProduction(): int
    {
        return mt_rand(8, 12);
    }
}