<?php
namespace FamilyRentCar\BackEnd\App;

class Properties
{
    use DBModel;

    protected string $propretiesname;

    public function __construct(string $propretiesname = '')
    {
        $this->propretiesname = $propretiesname;
    }
    

    /**
     * Get the value of propretiesname
     */ 
    public function getpropretiesname()
    {
        return $this->propretiesname;
    }

    /**
     * Set the value of propretiesname
     *
     * @return  self
     */ 
    public function setpropretiesname($propretiesname)
    {
        $this->propretiesname = $propretiesname;

        return $this;
    }
}