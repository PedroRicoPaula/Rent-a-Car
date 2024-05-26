<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\DBModel;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 3rem;
        }
        .button-nav{
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <h1>Admin</h1>
    <!-- Enviar para o Login para sair do Dashboard -->
    <h3>Configurar na Base de Dados</h3>
    <button class="button-nav"><a href="../Login.php">Login</a></button>
    <button class="button-nav"><a href="../Logout.php">Logout</a></button>
    <br>
    <button class="btn-User" name="clickUser"><a href="modifyUsers.php">Modificar Utilizadores</a></button>
    <button class="btn-Islands" name="clickIslands"><a href="modifyIslands.php">Modificar Ilhas</a></button>
    <button class="btn-Locations" name="clickLocations"><a href="modifyLocations.php">Modificar Localizações</a></button>
    <button class="btn-Clients" name="clickClients"><a href="modifyClients.php">Modificar Clientes</a></button><br>
    <button class="btn-Clients" name="clickClients"><a href="modifyAddress.php">Modificar Addresses</a></button>
    <button class="btn-Categories" name="clickCategories"><a href="modifyCategories.php">Modificar Categories</a></button>
    <button class="btn-Vehicles" name="clickVehicles"><a href="modifyVehicles.php">Modificar Vehicles</a></button>
    <button class="btn-Reservations" name="clickReservations"><a href="modifyReservation.php">Modificar Reservas</a></button>
    <br>
    <hr>
    <br>
    <h3>Criar na Base de Dados</h3>
    <button class="btn-Islands" name="clickIslands"><a href="formCreateIslands.php">Criar Islands</a></button>
    <button class="btn-Locations" name="clickLocations"><a href="formCreateLocations.php">Criar Locations</a></button>
    <button class="btn-Clients" name="clickClients"><a href="formCreateClients.php">Criar Clientes</a></button>
    <button class="btn-Address" name="clickAddress"><a href="formCreateAddress.php">Criar Address</a></button>
    <button class="btn-Categories" name="clickCategories"><a href="formCreateCategories.php">Criar Categories</a></button>
    <button class="btn-Vehicles" name="clickVehicles"><a href="formCreateVehicles.php">Criar Vehicles</a></button>
    <button class="btn-Reservas" name="clickReservas"><a href="formCreateReservations.php">Criar Reservas</a></button>
      
</body>
</html>