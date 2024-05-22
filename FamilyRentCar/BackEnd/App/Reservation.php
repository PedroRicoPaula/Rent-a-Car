<?php
namespace FamilyRentCar\BackEnd\App;

class Reservation
{
    use DBModel;

    protected string $date_Collection;
    protected string $date_Delivery;
    protected string $hour_Collection;
    protected string $hour_Delivery;
    /* Chaves Estrangeiras -> 4*/
    protected ?Client $client = null;
    protected ?int $client_id = null;
    protected ?Vehicle $vehicle = null;
    protected ?int $vehicle_id = null;
    protected ?Location $locationCollection = null;
    protected ?int $locationCollection_id = null;
    protected ?Location $locationDelivery = null;
    protected ?int $locationDelivery_id = null;

    public function __construct(string $date_Collection, string $date_Delivery, string $hour_Collection, string $hour_Delivery, 
    ?Client $client = null, ?Location $locationCollection = null, ?Vehicle $vehicle = null, ?Location $locationDelivery = null)
    {
        $this->tableName = 'reservations';

        $this->date_Collection = $date_Collection;
        $this->date_Delivery = $date_Delivery;
        $this->hour_Collection = $hour_Collection;
        $this->hour_Delivery = $hour_Delivery;

        $this->client = $client;
        if(!empty($this->client)){
            $this->client_id = $this->client->getId();
        }
        $this->locationCollection = $locationCollection;
        if(!empty($this->locationCollection)){
            $this->locationCollection_id = $this->locationCollection->getId();
        }
        $this->vehicle = $vehicle;
        if(!empty($this->vehicle)){
            $this->vehicle_id = $this->vehicle->getId();
        }
        $this->locationDelivery = $locationDelivery;
        if(!empty($this->locationDelivery)){
            $this->locationDelivery_id = $this->locationDelivery->getId();
        }

        /* Dúvidas:
A chave estrangeira da localização -> tenho que criar duas strings vazias e atribuir a cada uma delas o getlocationname?
As datas e as horas posso deixar como string e depois fazer a verificação se não números em vez de usar Carbon?

        */
    }


    

    /**
     * Get the value of date_Collection
     */ 
    public function getDate_Collection()
    {
        return $this->date_Collection;
    }

    /**
     * Set the value of date_Collection
     *
     * @return  self
     */ 
    public function setDate_Collection($date_Collection)
    {
        $this->date_Collection = $date_Collection;

        return $this;
    }

    /**
     * Get the value of date_Delivery
     */ 
    public function getDate_Delivery()
    {
        return $this->date_Delivery;
    }

    /**
     * Set the value of date_Delivery
     *
     * @return  self
     */ 
    public function setDate_Delivery($date_Delivery)
    {
        $this->date_Delivery = $date_Delivery;

        return $this;
    }

    /**
     * Get the value of hour_Collection
     */ 
    public function getHour_Collection()
    {
        return $this->hour_Collection;
    }

    /**
     * Set the value of hour_Collection
     *
     * @return  self
     */ 
    public function setHour_Collection($hour_Collection)
    {
        $this->hour_Collection = $hour_Collection;

        return $this;
    }

    /**
     * Get the value of hour_Delivery
     */ 
    public function getHour_Delivery()
    {
        return $this->hour_Delivery;
    }

    /**
     * Set the value of hour_Delivery
     *
     * @return  self
     */ 
    public function setHour_Delivery($hour_Delivery)
    {
        $this->hour_Delivery = $hour_Delivery;

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
     * Get the value of vehicle
     */ 
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set the value of vehicle
     *
     * @return  self
     */ 
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get the value of vehicle_id
     */ 
    public function getVehicle_id()
    {
        return $this->vehicle_id;
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
}