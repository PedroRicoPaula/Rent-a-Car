<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Location;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Reservas</title>
</head>
<body>
    <h1>Criar Reservas</h1>
    <div class="login-page">
        <form action="createReservations.php" method="post">
                <!-- Levantamento -->
        <label for="">Levantamento</label>
        <select name="levantamento" id="levantamento">
                <?php 
                $locations = Location::search([]);
                foreach ($locations as $location) {?>
                <option value="<?php echo $location->getId(); ?>" name="lcoation$location" id="lcoation$location"><?php echo $location->getLocationname(); ?></option>
                <?php } ?>
        </select><br>
        <label for="data"> Data de Levantamento</label>
              <input type="date" name="date" id="data" class="input-form"/><br>
        <label for="hora">Hora de Levantamento</label>
              <input type="time" name="hora" id="hora" class="input-form" min="09:00" max="18:00" required/>
              <br/>
              <!-- Devolução -->
        <label for="">Devolução</label>
        <select name="levantamento" id="levantamento">
                <?php 
                $locations = Location::search([]);
                foreach ($locations as $location) {?>
                <option value="<?php echo $location->getId(); ?>" name="lcoation$location" id="lcoation$location"><?php echo $location->getLocationname(); ?></option>
                <?php } ?>
        </select><br>
              <label for="data"> Data de Devolução</label>
              <input type="date" name="date" id="data" class="input-form"/><br>
              <label for="hora">Hora de Devolução</label>
              <input type="time" name="hora" id="hora" class="input-form" min="09:00" max="18:00" required/>
              <br>
        <input type="submit" value="Criar Veículo" class="btn-login">
        </form>
    </div>
</body>
</html>