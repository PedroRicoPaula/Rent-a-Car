<?php
namespace FamilyRentCar\BackEnd\App;

class Vehicle
{
    use DBModel;

    protected string $brand;
    protected string $plate;
    protected string $color;
    protected string $fuel;
    protected int $numbags;
    protected int $seats;
    protected Category $category;
    /* protected string $image; */
    
    public function __construct(string $brand= '', string $plate= '', string $color= '', string $fuel= '', int $numbags, int $seats, $category= '')
    {
        $this->tablename = 'vehicles';
        
        $this->brand = $brand;
        $this->plate = $plate;
        $this->color = $color;
        $this->fuel = $fuel;
        $this->numbags = $numbags;
        $this->seats = $seats;
        $this->category = $category;
        /* $this->image = $image; */
    }


    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of plate
     */ 
    public function getPlate()
    {
        return $this->plate;
    }

    /**
     * Set the value of plate
     *
     * @return  self
     */ 
    public function setPlate($plate)
    {
        $this->plate = $plate;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of fuel
     */ 
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set the value of fuel
     *
     * @return  self
     */ 
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get the value of num_bags
     */ 
    public function getNum_bags()
    {
        return $this->num_bags;
    }

    /**
     * Set the value of num_bags
     *
     * @return  self
     */ 
    public function setNum_bags($num_bags)
    {
        $this->num_bags = $num_bags;

        return $this;
    }

    /**
     * Get the value of seats
     */ 
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set the value of seats
     *
     * @return  self
     */ 
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    /* public function getImage()
    {
        return $this->image;
    } */

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    /* public function setImage($image)
    {
        $this->image = $image;

        return $this;
    } */
}