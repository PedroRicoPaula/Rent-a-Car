<?php
session_start();
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\DBModel;

$users = User::search([]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Users</title>
</head>
<body>
<h1>Modificar Utilizador</h1>
    <div class="login-page">
    <?php foreach ($users as $user) {?>
    <form action="updateUsers.php?id=<?php $user->getId(); }?>" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="btn-input-login">
        <label for="password">Palavra-Passe</label>
        <input type="password" name="password" id="password" class="btn-input-login">
        <label for="password_verify">Verifica Palavra-Passe</label>
        <input type="password" name="password_verify" id="password_verify" class="btn-input-login">
        <input type="submit" value="Modificar Utilizador" class="btn-login">
    </form>
    </div>
</body>
</html>