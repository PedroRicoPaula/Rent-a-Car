<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Address;
use FamilyRentCar\BackEnd\App\Island;
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\DBModel;

$islands = Island::search([]);
$locations = Location::search([]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Address</title>
</head>
<body>
<h1>Criar Address</h1>
    <div class="login-page">
    <form action="createAddress.php" method="post">
        <label for="street">Street</label>
        <input type="text" name="street" id="street" class="btn-input-login">
        <label for="postal_code">Postal_Code</label>
        <input type="text" name="postal_code" id="postal_code" class="btn-input-login">
        <label for="door">Door</label>
        <input type="text" name="door" id="door" class="btn-input-login">
        <!-- chaves estrangeiras -->
        <label for="islands">Escolhe uma Ilha:</label>
        <select name="islands" id="islands">
            <option value=""></option>
            <?php foreach ($islands as $island) {?>
            <option value="islands"><?php echo $island->getIslandsName(); ?></option>
            <?php } ?>
        </select>
        <label for="location">Escolhe uma Localidade:</label>
        <select name="locations" id="locations">
            <option value=""> </option>
            <?php foreach ($locations as $location) {?>
            <option value="locations"><?php echo $location->getLocationname(); ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Criar Address" class="btn-login">
    </form>
    </div>
</body>
</html>