<?php
namespace FamilyRentCar\BackEnd\App;

class Category
{
    protected Vehicle $vehicle;
    protected string $name;
    protected string $price;
    protected array $fuel_type;
    protected string $type;
    protected Properties $properties;

    public function __construct(string $name= '', string $price= '', array $fuel_type, string $type='', $vehicle= '', $properties= '')
    {
        $this->tableName = 'categories';

        $this->name = $name;
        $this->price = $price;
        $this->fuel_type = $fuel_type;
        $this->type = $type;
        $this->vehicle = $vehicle;
        $this->properties = $properties;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of fuel_type
     */ 
    public function getFuel_type()
    {
        return $this->fuel_type;
    }

    /**
     * Set the value of fuel_type
     *
     * @return  self
     */ 
    public function setFuel_type($fuel_type)
    {
        $this->fuel_type = $fuel_type;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}