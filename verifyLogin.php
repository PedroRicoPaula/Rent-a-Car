<?php

include ('autoload.php');
use FamilyRentCar\BackEnd\App\User;

if (empty($_POST)) {
    header('Location: Login.php');
}
// Verifica se já existe um utilziador com o email para iniciar sessão
$utilizadores = User::search([
    [
        'column' => 'email',
        'operator' => '=',
        'value' => $_POST['email']
    ]
]);

if (count($utilizadores) != 1) {
    echo "Utilizador ou password incorrectos";
    exit;
}

if ($utilizadores[0]->checkPassword($_POST['password'])) {
    session_start();
    $_SESSION['logged_id'] = true;
    // Verifica se o login é por um utilizador ou um admin
    $_SESSION['user_id'] = $utilizadores[0]->getId();
    $_SESSION['is_admin'] = $utilizadores[0]->isAdmin();
// Envia para o dashboard de admin
    if($_SESSION['is_admin']){
        header('Location: Dashboard/index.php');
    } else {
        // Envia para a Interface de Utilizador com sessão iniciada
        header('Location: index.php');
    }
} else {
    echo "Palavra-Passe Incorrecta";
    exit;
}
?>
