<?php
namespace FamilyRentCar\BackEnd\App;


class Client
{
    use DBModel;
    
    protected string $email;
    protected string $name;
    protected string $cellphone;

    public function __construct(string $email= '', string $name= '', string $cellphone= '')
    {
        $this->tableName = 'clientes';
        
        $this->email = $email;
        $this->name = $name;
        $this->cellphone = $cellphone;
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
}
