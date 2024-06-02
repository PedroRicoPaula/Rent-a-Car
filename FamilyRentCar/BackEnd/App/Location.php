<?php
namespace FamilyRentCar\BackEnd\App;

class Location
{
    use DBModel;

    protected string $locationname;
    protected ?Island $island = null;
    protected ?int $island_id = null;

    public function __construct(string $locationname= '', ?Island $island = null)
    {
        $this->tableName = 'locations';
        
        $this->locationname = $locationname;
        $this->island = $island;
        /* Verifica se não está vazio na BD */
        if(!empty($this->island)){
            $this->island_id = $this->island->getId();
        }
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

    /**
     * Set the value of island
     *
     * @return  self
     */ 
    public function setIsland($island)
    {
        $this->island = $island;

        return $this;
    }

    /**
     * Get the value of island
     */ 
    public function getIsland()
    {
        return $this->island;
    }

    /**
     * Get the value of island_id
     */ 
    public function getIsland_id()
    {
        return $this->island_id;
    }
}