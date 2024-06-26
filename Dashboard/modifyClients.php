<?php
session_start();
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Client;
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
    <button class="btn-Reservations" name="clickReservations"><a href="modifyReservation.php">Reservas</a></button>

<?php 
        $clients = Client::search([]);

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>name</th>
                    <th>Cellphone</th>
                    <th>Street</th>
                    <th>Postal_Code</th>
                    <th>Door</th>
                    <th>Modificar</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php //Foreach para procurar e mostrar os Clientes que existem na BD 
                 foreach ($clients as $client) {?>
                <tr>
                    <td><?php echo $client->getId(); ?></td>
                    <td><?php echo $client->getEmail(); ?></td>
                    <td><?php echo $client->getName(); ?></td>
                    <td><?php echo $client->getCellphone(); ?></td>
                    <td><?php echo $client->getStreet(); ?></td>
                    <td><?php echo $client->getPostal_code(); ?></td>
                    <td><?php echo $client->getDoor(); ?></td>
                    <!-- Configurações -->
                    <td><a href="formCreateClients.php?id=<?php echo $client->getId(); ?>">➕</a></td>
                    <td><a href="deleteClients.php?id=<?php echo $client->getId(); ?>">🗑️</a></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>