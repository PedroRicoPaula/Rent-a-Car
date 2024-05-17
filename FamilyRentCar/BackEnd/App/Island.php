<?php
namespace FamilyRentCar\BackEnd\App;

class Island
{
    use DBModel;

    protected string $islandsname;
    protected string $code;

    public function __construct(string $islandsname= '', string $code= '')
    {
        $this->tableName = 'islands';
        
        $this->islandsname = $islandsname;
        $this->code = $code;
    }

    /**
     * Get the value of islandsname
     */ 
    public function getIslandsName()
    {
        return $this->islandsname;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
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