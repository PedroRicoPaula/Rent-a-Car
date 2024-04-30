<?php
namespace FamilyRentCar\BackEnd\App;

class Island
{
    protected string $nome;
    protected string $code;

    public function __construct(string $nome, string $code)
    {
        $this->nome = $nome;
        $this->code = $code;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}