<?php
session_start();
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Vehicle;
use FamilyRentCar\BackEnd\App\Category;
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
        $vehicles = Vehicle::search([]);

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Veículo</th>
                    <th>Matrícula</th>
                    <th>Cor</th>
                    <th>Combustível</th>
                    <th>Nº Malas</th>
                    <th>Lugares</th>
                    <th>Categoria</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php //Foreach para procurar e mostrar os Veículos que existem na BD 
                foreach ($vehicles as $vehicle) {
                    /* $vehicle->loadRelation('island'); */
                    ?>
                <tr>
                    <td><?php echo $vehicle->getId(); ?></td>
                    <td><?php echo $vehicle->getBrand(); ?></td>
                    <td><?php echo $vehicle->getPlate(); ?></td>
                    <td><?php echo $vehicle->getColor(); ?></td>
                    <td><?php echo $vehicle->getFuel(); ?></td>
                    <td><?php echo $vehicle->getNumbags(); ?></td>
                    <td><?php echo $vehicle->getSeats(); ?></td>
                    <td><?php echo $vehicle->getCategories_id(); ?></td>
                    <!-- Configurações -->
                    <td><a href="deleteVehicles.php?id=<?php echo $vehicle->getId(); ?>">🗑️</a></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>