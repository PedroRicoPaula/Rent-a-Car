<?php
namespace FamilyRentCar\BackEnd\App;

class Location
{
    use DBModel;

    protected string $locationname;
    protected string $code;

    public function __construct(string $locationname= '', $code= '')
    {
        $this->tableName = 'locations';
        
        $this->locationname = $locationname;
        $this->code = $code;
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}