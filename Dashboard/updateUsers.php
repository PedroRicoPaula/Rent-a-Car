<?php
session_start();
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_verify'])) {
    $user_exists = User::search([
        [
            'column' => 'email',
            'operator' => '=',
            'value' => $_POST['email']
        ]
    ]);

/*     $new_user = new User();
    $new_user->setEmail($_POST['email']);
    $new_user->setPassword($_POST['password']); */

    try {
        $user_exists->save();
        header('Location: modifyUsers.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar o utilizador.";
    }
       
} else {
    echo "Todos os campos são obrigatórios.";
}

?>