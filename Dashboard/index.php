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
    <button class="button-nav"><a href="../Login.php">Login</a></button>
    <button class="btn-User" name="clickUser"><a href="modifyUsers.php">Utilizadores</a></button>
    <button class="btn-Frotas" name="clickFrota"><a href="modifyFrotas.php">Frotas</a></button>
    <button class="btn-Reservations" name="clickReservations"><a href="modifyReservas.php">Reservas</a></button>
    <br>
    <h3>Configurações na Base de Dados</h3>
    <button class="btn-Islands" name="clickIslands"><a href="modifyIslands.php">Islands</a></button>
    <button class="btn-Locations" name="clickLocations"><a href="modifyLocations.php">Locations</a></button>
    <button class="btn-Address" name="clickAddress"><a href="modifyAddress.php">Address</a></button>
    <button class="btn-Properties" name="clickProperties"><a href="modifyProperties.php">Properties</a></button>
    <button class="btn-Categories" name="clickCategories"><a href="modifyCategories.php">Categories</a></button>
    <button class="btn-Vehicles" name="clickVehicles"><a href="modifyVehicles.php">Vehicles</a></button>
    
      
</body>
</html>