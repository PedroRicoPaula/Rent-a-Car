<?php

namespace FamilyRentCar\BackEnd\App;

class Client
{
    use DBModel;
    
    protected string $email;
    protected string $name;
    protected string $cellphone;
    protected string $street;
    protected string $postal_code;
    protected string $door;

    public function __construct(string $email= '', string $name= '', string $cellphone= '', string $street= '', string $postal_code= '', string $door= '')
    {
        $this->tableName = 'clients';
        
        $this->email = $email;
        $this->name = $name;
        $this->cellphone = $cellphone;
        $this->street = $street;
        $this->postal_code = $postal_code;
        $this->door = $door;
    }


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * Get the value of cellphone
     */ 
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set the value of cellphone
     *
     * @return  self
     */ 
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
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
