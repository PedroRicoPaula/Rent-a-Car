<?php
namespace FamilyRentCar\BackEnd\App;
require_once 'Location.php';
require_once 'Island.php';
require_once 'Address.php';


class Client
{
    protected string $email;
    protected string $name;
    protected string $cellphone;

    public function __construct(string $email, string $name, string $street, string $postal_code, string $door, Island $island, Location $location, string $cellphone= '')
    {
        $this->email = $email;
        $this->name = $name;
        $this->cellphone = $cellphone;
        $this->street = $street;
        $this->postal_code = $postal_code;
        $this->door = $door;
        $this->island = $island;
        $this->location = $location;
    }

}
