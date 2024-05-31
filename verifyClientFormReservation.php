<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\Client;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Reservas</title>
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
    <h1>Criar Reservas</h1>
    <div class="login-page">
        <form action="createMyReservation.php" method="post">
                <!-- Levantamento -->
        <label for="locationCollection">Levantamento</label>
        <select name="locationCollection" id="locationCollection">
                <?php 
                $locations = Location::search([]);
                foreach ($locations as $location) {?>
                <option value="<?php echo $location->getId(); ?>" name="locationCollection" id="locationCollection"><?php echo $location->getLocationname(); ?></option>
                <?php } ?>
        </select><br>
        <label for="data"> Data de Levantamento</label>
              <input type="date" name="date_collection" id="date_collection" class="input-form"/><br>
        <label for="hora">Hora de Levantamento</label>
              <input type="time" name="hour_collection" id="hour_collection" class="input-form" min="09:00" max="18:00" required/>
              <br/>
              <!-- Devolução -->
        <label for="locationDelivery">Devolução</label>
        <select name="locationDelivery" id="locationDelivery">
                <?php
                $locations = Location::search([]);
                foreach ($locations as $location) {?>
                <option value="<?php echo $location->getId(); ?>" name="locationDelivery" id="locationDelivery"><?php echo $location->getLocationname(); ?></option>
                <?php } ?>
        </select><br>
              <label for="data"> Data de Devolução</label>
              <input type="date" name="date_delivery" id="date_delivery" class="input-form"/><br>
              <label for="hora">Hora de Devolução</label>
              <input type="time" name="hour_delivery" id="hour_delivery" class="input-form" min="09:00" max="18:00" required/>
              <br>
        <label for="categories">Seleciona a Categoria:</label>
        <select name="category" id="category">
                <?php
                $categories = Category::search([]);
                foreach ($categories as $category) {?>
                <option value="<?php echo $category->getId(); ?>" name="category" id="category"><?php echo $category->getcategoryName(); ?></option>
                <?php } ?>
        </select>
        <br>
        <label for="clients">ID de Cliente</label>
        <!-- Aqui mostro o id do cliente criado no formulário anterior -->
        <input type="submit" value="Criar Veículo" class="btn-login">
        </form>
    </div>
</body>
</html>