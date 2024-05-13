<?php

namespace FamilyRentCar\BackEnd\App;

class User
{
    use DBModel;

    protected string $email;
    protected string $password;
    protected int $is_admin;

    public function __construct(string $email = '', string $password = '', int $is_admin = 0)
    {
        $this->tableName = 'users';

        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->is_admin = $is_admin; 
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }

    public function checkPassword(string $password): bool
    {
        return password_verify($password, $this->password);
    }

    /**
     * Get the value of is_admin
     */ 
    public function isAdmin(): bool
    {
        return $this->is_admin == 1;
    }

    /**
     * Set the value of is_admin
     *
     * @return  self
     */ 
    public function setIs_admin($is_admin)
    {
        $this->is_admin = $is_admin;

        return $this;
    }
}