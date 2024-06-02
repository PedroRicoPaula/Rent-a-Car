<?php
namespace FamilyRentCar\BackEnd\App;

class Reservation
{
    use DBModel;

    protected string $date_collection;
    protected string $date_delivery;
    protected string $hour_collection;
    protected string $hour_delivery;
    /* Chaves Estrangeiras -> 4 */
    protected ?Client $client = null;
    protected ?int $client_id = null;
    protected ?Category $category = null;
    protected ?int $category_id = null;
    protected ?Location $locationCollection = null;
    protected ?int $locationCollection_id = null;
    protected ?Location $locationDelivery = null;
    protected ?int $locationDelivery_id = null;

    public function __construct(string $date_collection= '', string $date_delivery= '', string $hour_collection= '', string $hour_delivery= '', 
    ?Client $client = null, ?Location $locationCollection = null, ?Category $category = null, ?Location $locationDelivery = null)
    {
        $this->tableName = 'reservations';

        $this->date_collection = $date_collection;
        $this->date_delivery = $date_delivery;
        $this->hour_collection = $hour_collection;
        $this->hour_delivery = $hour_delivery;

        $this->client = $client;
        /* Verifica se não está vazio na BD em todos os if's dentro deste __construct*/
        if(!empty($this->client)){
            $this->client_id = $this->client->getId();
        }
        $this->locationCollection = $locationCollection;
        if(!empty($this->locationCollection)){
            $this->locationCollection_id = $this->locationCollection->getId();
        }
        $this->category = $category;
        if(!empty($this->category)){
            $this->category_id = $this->category->getId();
        }
        $this->locationDelivery = $locationDelivery;
        if(!empty($this->locationDelivery)){
            $this->locationDelivery_id = $this->locationDelivery->getId();
        }
    }


    

    /**
     * Get the value of date_collection
     */ 
    public function getdate_collection()
    {
        return $this->date_collection;
    }

    /**
     * Set the value of date_collection
     *
     * @return  self
     */ 
    public function setdate_collection($date_collection)
    {
        $this->date_collection = $date_collection;

        return $this;
    }

    /**
     * Get the value of date_delivery
     */ 
    public function getdate_delivery()
    {
        return $this->date_delivery;
    }

    /**
     * Set the value of date_delivery
     *
     * @return  self
     */ 
    public function setdate_delivery($date_delivery)
    {
        $this->date_delivery = $date_delivery;

        return $this;
    }

    /**
     * Get the value of hour_collection
     */ 
    public function gethour_collection()
    {
        return $this->hour_collection;
    }

    /**
     * Set the value of hour_collection
     *
     * @return  self
     */ 
    public function sethour_collection($hour_collection)
    {
        $this->hour_collection = $hour_collection;

        return $this;
    }

    /**
     * Get the value of hour_delivery
     */ 
    public function gethour_delivery()
    {
        return $this->hour_delivery;
    }

    /**
     * Set the value of hour_delivery
     *
     * @return  self
     */ 
    public function sethour_delivery($hour_delivery)
    {
        $this->hour_delivery = $hour_delivery;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of client_id
     */ 
    public function getClient_id()
    {
        return $this->client_id;
    }

    /**
     * Get the value of locationCollection
     */ 
    public function getLocationCollection()
    {
        return $this->locationCollection;
    }

    /**
     * Set the value of locationCollection
     *
     * @return  self
     */ 
    public function setLocationCollection($locationCollection)
    {
        $this->locationCollection = $locationCollection;

        return $this;
    }

    /**
     * Get the value of locationCollection_id
     */ 
    public function getLocationCollection_id()
    {
        return $this->locationCollection_id;
    }

    /**
     * Get the value of locationDelivery
     */ 
    public function getLocationDelivery()
    {
        return $this->locationDelivery;
    }

    /**
     * Set the value of locationDelivery
     *
     * @return  self
     */ 
    public function setLocationDelivery($locationDelivery)
    {
        $this->locationDelivery = $locationDelivery;

        return $this;
    }

    /**
     * Get the value of locationDelivery_id
     */ 
    public function getLocationDelivery_id()
    {
        return $this->locationDelivery_id;
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

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }
}