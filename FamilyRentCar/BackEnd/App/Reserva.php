<?php

namespace FamilyRentCar\BackEnd\App;

class Reserva
{
    use DBModel;
    
    protected string $descricao = '';

    public function __construct(string $descricao = '')
    {
        $this->tableName = 'reservations';
        $this->descricao = $descricao;
    }


    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

}
