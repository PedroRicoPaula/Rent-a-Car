<?php
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

if (!empty($user_exists)) {
    echo "Já existe um utilizador com esse email.";
}

    $new_user = new User();
    $new_user->setEmail($_POST['email']);
    $new_user->setPassword($_POST['password']);
    $new_user->setIs_admin($_POST['is_admin']);

try {
    $new_user->save();
    header('Location: modifyUsers.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar o utilizador.";
}
       
} else {
    echo "Todos os campos são obrigatórios.";
}

?>