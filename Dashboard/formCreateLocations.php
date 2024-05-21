<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Island;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Localizações</title>
</head>
<body>
<h1>Criar Localizações</h1>
    <div class="login-page">
    <form action="createLocation.php" method="post">
        <label for="locationname">Nome da Localização</label>
        <input type="text" name="locationname" id="locationname" class="btn-input-locationname">
        <label for="islands">Seleciona a Ilha: </label>
        <select name="islands" id="islands">
            <?php 
            $islands = Island::search([]);
            foreach ($islands as $island) {?>
            <option value="island" name="island" id="island"><?php echo $island->getIslandsName(); ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Criar Localização" class="btn-login">
    </form>
    </div>
</body>
</html>