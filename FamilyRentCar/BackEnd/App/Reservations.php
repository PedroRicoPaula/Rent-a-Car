<?php
namespace FamilyRentCar\BackEnd\App;

class Reservations
{
    protected User $user;
    protected Categoria $categoria;
    protected string $local_collection;
    protected string $local_delivery;
    protected string $dt_ini_prev;
    protected string $dt_fim_prev;
    protected string $dt_ini_efec;
    protected string $dt_fim_efec;
}