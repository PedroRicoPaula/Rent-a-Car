<?php
namespace FamilyRentCar\BackEnd\App;

class Category
{
    protected Vehicle $vehicle;
    protected string $name;
    protected string $price;
    protected array $fuel_type;
    protected string $type;
    protected Properties $properties;

    public function __construct(string $name= '', string $price= '', array $fuel_type, string $type='', $vehicle= '', $properties= '')
    {
        $this->tableName = 'categories';
    }
}