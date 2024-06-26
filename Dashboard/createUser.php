<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\DBModel;

// Recebe os valores do Form(POST) e verifica se não está vazio os dados inseridos
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
    // Cria na BD através do DBModel
    $new_user->save();
    header('Location: modifyUsers.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar o utilizador.". $e->getMessage();
    print_r($e->getTrace());
}
       
} else {
    echo "Todos os campos são obrigatórios.";
    echo '<button><a href="formCreateUsers.php">Criar Categorias</a></button>';
}

?>