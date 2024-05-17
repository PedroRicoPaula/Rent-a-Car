<?php
namespace FamilyRentCar\BackEnd\App;

class Island
{
    use DBModel;

    protected string $islandsname;

    public function __construct(string $islandsname= '')
    {
        $this->tableName = 'islands';
        
        $this->islandsname = $islandsname;
    }

    /**
     * Get the value of islandsname
     */ 
    public function getIslandsName()
    {
        return $this->islandsname;
    }

    /**
     * Set the value of islandsname
     *
     * @return  self
     */ 
    public function setIslandsName($islandsname)
    {
        $this->islandsname = $islandsname;

        return $this;
    }
}