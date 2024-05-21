<?php
namespace FamilyRentCar\BackEnd\App;

class Address
{
    use DBModel;

    protected string $street;
    protected string $postal_code;
    protected string $door;
    protected ?Location $location = null;
    protected ?int $location_id = null;

    public function __construct(string $street= '', string $postal_code= '', string $door= '', ?Location $location = null)
    {
        $this->tableName = 'addresses';

        $this->street = $street;
        $this->postal_code = $postal_code;
        $this->door = $door;
        $this->location = $location;
        if(!empty($this->location)){
            $this->location_id = $this->location->getId();
        }
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postal_code
     */ 
    public function getPostal_code()
    {
        return $this->postal_code;
    }

    /**
     * Set the value of postal_code
     *
     * @return  self
     */ 
    public function setPostal_code($postal_code)
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * Get the value of door
     */ 
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Set the value of door
     *
     * @return  self
     */ 
    public function setDoor($door)
    {
        $this->door = $door;

        return $this;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of location_id
     */ 
    public function getLocation_id()
    {
        return $this->location_id;
    }
}