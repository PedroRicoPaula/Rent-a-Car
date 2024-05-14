<?php
namespace FamilyRentCar\BackEnd\App;

class Reservations
{
    use DBModel;

    /* protected User $user;
    protected Categoria $categoria; */
    protected Location $local_collection;
    protected Location $local_delivery;
    protected Carbon $dt_ini_prev;
    protected Carbon $dt_fim_prev;
    protected Carbon $dt_ini_efec;
    protected Carbon $dt_fim_efec;

    public function __construct(string $local_collection = "", string $local_delivery = "", string $dt_ini_prev = "", string $dt_fim_prev = "",
    string $dt_ini_efec = "", string $dt_fim_efec = "")
    {
        $this->tableName = 'reservations';
    }
}