<?php
namespace FamilyRentCar\BackEnd\App;

class Location
{
    use DBModel;

    protected string $locationname;

    public function __construct(string $locationname= '')
    {
        $this->tableName = 'locations';
        
        $this->locationname = $locationname;
    }

    /**
     * Get the value of locationname
     */ 
    public function getLocationname()
    {
        return $this->locationname;
    }

    /**
     * Set the value of locationname
     *
     * @return  self
     */ 
    public function setLocationname($locationname)
    {
        $this->locationname = $locationname;

        return $this;
    }
}