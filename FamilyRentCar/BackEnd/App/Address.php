<?php
namespace FamilyRentCar\BackEnd\App;
require_once 'Location.php';
require_once 'Island.php';
require_once 'Client.php';


class Address
{
    use DBModel;

    protected string $street;
    protected string $postal_code;
    protected string $door;
    protected Island $island;
    protected Location $localidade;
    protected Client $client;

    public function __construct(string $street= '', string $postal_code= '', string $door, $island= '', $location= '', $client= '')
    {
        $this->tableName = 'addresses';

        $this->street = $street;
        $this->postal_code = $postal_code;
        $this->door = $door;
        $this->island = $island;
        $this->location = $location;
        $this->client = $client;
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
}