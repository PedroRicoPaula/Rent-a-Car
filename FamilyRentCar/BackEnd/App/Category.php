<?php
namespace FamilyRentCar\BackEnd\App;

class Category
{
    use DBModel;
    
    protected string $categoryname;
    protected string $fuel_type;
    protected string $type;

    public function __construct(string $categoryname= '', string $fuel_type='', string $type='')
    {
        $this->tableName = 'categories';

        $this->categoryname = $categoryname;
        $this->fuel_type = $fuel_type;
        $this->type = $type;
    }

    /**
     * Get the value of categoryname
     */ 
    public function getcategoryName()
    {
        return $this->categoryname;
    }

    /**
     * Set the value of categoryname
     *
     * @return  self
     */ 
    public function setcategoryName($categoryname)
    {
        $this->categoryname = $categoryname;

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