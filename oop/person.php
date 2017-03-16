<?php

//final - to stop inheritance
class Person
{
    protected $name;
    protected $age;
    protected $height;
    protected $weight;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    function __construct($name, $age, $height, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        echo 'Person constructor called';
    }


    function show()
    {
        echo "Name : " . $this->name . "<br/>";
        echo "Age : " . $this->age . "<br/>";
        echo "Height : " . $this->height . "<br/>";
        echo "Weight : " . $this->weight . "<br/>";
    }
}
