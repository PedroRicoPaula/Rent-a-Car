<?php
session_start();
include ('autoload.php');
use FamilyRentCar\BackEnd\App\Reservation;
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\Client;
use FamilyRentCar\BackEnd\App\DBModel;
use FamilyRentCar\BackEnd\App\User;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>
</head>
<body>
    
<header class="header">
    <?php include('Includes/header.php')?>
      <article>
        <?php
        if(isset($_SESSION['logged_id'])){
        $reservations = Reservation::search([]);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Levantamento</th>
                    <th>Data de Levantamento</th>
                    <th>Hora de Levantamento</th>
                    <th>Devolução</th>
                    <th>Data de Devolução</th>
                    <th>Hora de Devolução</th>
                    <th>Categoria</th>
                    <th>Cliente</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation) {
                    ?>
                <tr>
                    <td><?php echo $reservation->getId(); ?></td>
                    <td><?php echo $reservation->getLocationCollection_id(); ?></td>
                    <td><?php echo $reservation->getdate_collection(); ?></td>
                    <td><?php echo $reservation->gethour_collection(); ?></td>
                    <td><?php echo $reservation->getLocationDelivery_id(); ?></td>
                    <td><?php echo $reservation->getdate_delivery(); ?></td>
                    <td><?php echo $reservation->gethour_delivery(); ?></td>
                    <td><?php echo $reservation->getCategory_id(); ?></td>
                    <td><?php echo $reservation->getClient_id(); ?></td>
                    <!-- Configurações -->
                    <td><a href="deleteMyReservation.php?id=<?php echo $reservation->getId(); ?>">🗑️</a></td>
                    
                </tr>
                <?php }
          } else {
            echo 'Não tem sessão Iniciada';
          } ?>
            </tbody>
        </table>
        </article>
    </header>
</body>
</html>