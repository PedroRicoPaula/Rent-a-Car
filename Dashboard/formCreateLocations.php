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
<h1>Criar Localizações</h1>
    <div class="login-page">
    <form action="createLocation.php" method="post">
        <label for="locationname">Nome da Localização</label>
        <input type="text" name="locationname" id="locationname" class="btn-input-locationname">
        <label for="islands">Seleciona a Ilha: </label>
        <select name="island" id="island">
            <?php 
            //Foreach para procurar as Ilhas que existem na BD
            $islands = Island::search([]);
            foreach ($islands as $island) {?>
            <option value="<?php echo $island->getId(); ?>" name="island" id="island"><?php echo $island->getIslandsName(); ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Criar Localização" class="btn-login">
    </form>
    </div>
</body>
</html>