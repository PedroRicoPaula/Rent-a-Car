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
    /* protected string $image; */
    protected ?Category $category = null;
    protected ?int $categories_id = null;
    
    public function __construct(string $brand= '', string $plate= '', string $color= '', string $fuel= '', int $numbags= 0, int $seats= 0 /* , string $image= '' */, ?Category $category = null)
    {
        $this->tableName = 'vehicles';
        
        $this->brand = $brand;
        $this->plate = $plate;
        $this->color = $color;
        $this->fuel = $fuel;
        $this->numbags = $numbags;
        $this->seats = $seats;
        /* $this->image = $image; */
        $this->category = $category;
        /* Verifica se não está vazio na BD */
        if(!empty($this->category)){
            $this->categories_id = $this->category->getId();
        }
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
     * Get the value of numbags
     */ 
    public function getNumbags()
    {
        return $this->numbags;
    }

    /**
     * Set the value of numbags
     *
     * @return  self
     */ 
    public function setNumbags($numbags)
    {
        $this->numbags = $numbags;

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

    

    /**
     * Get the value of categories_id
     */ 
    public function getCategories_id()
    {
        return $this->categories_id;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}