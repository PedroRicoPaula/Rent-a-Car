<?php

include ('autoload.php');
use FamilyRentCar\BackEnd\App\User;

if (empty($_POST)) {
    header('Location: Login.php');
}

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
    $_SESSION['first_name'] = $utilizadores[0]->getFirstName();
    header('Location: index.php');
} else {
    echo "Palavra-passe Incorrecta";
    exit;
}
?>
