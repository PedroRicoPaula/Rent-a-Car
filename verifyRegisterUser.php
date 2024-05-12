<?php

include('autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])) {
    $user_exists = User::search([
        [
            'column' => 'email',
            'operator' => '=',
            'value' => $_POST['email']
        ]
    ]);

    if (!empty($user_exists)) {
        echo "Já existe um usuário com este email.";
        exit;
    }

    $new_user = new User();
    $new_user->setEmail($_POST['email']);
    $new_user->setPassword($_POST['password']); // Você pode querer hash a senha aqui usando uma função como password_hash()

    // Salva o novo usuário no banco de dados
    if ($new_user->save()) {
        echo "Usuário criado com sucesso.";
    } else {
        echo "Houve um erro ao criar o usuário.";
    }
} else {
    // Se algum dos campos estiver vazio, exibe uma mensagem de erro
    echo "Todos os campos são obrigatórios.";
}
?>