<?php

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;

    function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }
    
    function getPrice() {
        return $this->price;
    }
    
}
?>
