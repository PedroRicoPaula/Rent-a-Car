<?php
namespace FamilyRentCar\BackEnd\App;

require_once 'Address.php';


class Client
{
    protected string $email;
    protected int $id;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function validatePassword(string $password): bool
    {
        
    }

    public static function getUserByEmail(string $email): self
    {

    }


}
