<?php
session_start();
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Address;
use FamilyRentCar\BackEnd\App\Location;
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin</h1>
    <!-- Enviar para o Login para sair do Dashboard -->
    <button class="btn-Reservations" name="clickReservations"><a href="index.php">Admin Page</a></button>
    <br>
    <button class="button-nav"><a href="../Login.php">Login</a></button>
    <button class="button-nav"><a href="formCreateUser.php">Criar User</a></button>
    <button class="btn-Frotas" name="clickFrota"><a href="modifyFrotas.php">Frotas</a></button>
    <button class="btn-Reservations" name="clickReservations"><a href="modifyReservas.php">Reservas</a></button>

<?php 
        $addresses = Address::search([]);

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Street</th>
                    <th>Postal_Code</th>
                    <th>Door</th>
                    <th>Localidade</th>
                    <th>Modificar</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($addresses as $address) {?>
                <tr>
                    <td><?php echo $address->getId(); ?></td>
                    <td><?php echo $address->getStreet(); ?></td>
                    <td><?php echo $address->getPostal_code(); ?></td>
                    <td><?php echo $address->getDoor(); ?></td>
                    <td><?php echo $address->getLocation_id(); ?></td>
                    <!-- Configurações -->
                    <td><a href="formCreateAddress.php?id=<?php echo $address->getId(); ?>">➕</a></td>
                    <td><a href="deleteAddress.php?id=<?php echo $address->getId(); ?>">🗑️</a></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>