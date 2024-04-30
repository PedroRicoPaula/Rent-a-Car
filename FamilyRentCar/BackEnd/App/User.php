<?php
namespace FamilyRentCar\BackEnd\App;
require_once 'Address.php';

require_once 'vendor/autoload.php';


use Carbon\Carbon;

class User
{
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected Carbon $birthdate;
    protected string $cellphone;
    protected Address $address;

    public function __construct($firstName, $lastName, $email, Carbon $birthdate, $cellphone, Address $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->cellphone = $cellphone;
        $this->address = $address;
    }

    

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
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
     * Get the value of birthdate
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

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
}