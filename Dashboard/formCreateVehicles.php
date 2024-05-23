<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Category;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Veículos</title>
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
<h1>Criar Veículos</h1>
    <div class="login-page">
    <form action="createVehicle.php" method="post" enctype="multipart/form-data" >
        <label for="brand">Nome do Veículo</label>
        <input type="text" name="brand" id="brand" class="btn-input-brand">
        <label for="plate">Matrícula</label>
        <input type="text" name="plate" id="plate" class="btn-input-plate">
        <label for="color">Escolha uma Cor</label>
        <select name="color" id="color">
            <option value="0">Cor</option>
            <option value="Preto">Preto</option>
            <option value="Cinzento">Cinzento</option>
            <option value="Branco">Branco</option>
            <option value="Vermelho">Vermelho</option>
            <option value="Verde">Verde</option>
            <option value="Amarelo">Amarelo</option>
        </select>
        <!-- ir bucar ao Category o fuel disponível -->
        <label for="fuel">Seleciona o Combustível</label>
        <select name="fuel" id="fuel">
            <?php
            $categories = Category::search([]);
            foreach ($categories as $fuel) {?>
            <option value="<?php echo $fuel->getFuel_type(); ?>" name="fuel" id="fuel"><?php echo $fuel->getFuel_type(); ?></option>
            <?php } ?>
        </select>
            <br>
        <label for="numbags">Nº Malas</label>
        <input type="number" name="numbags" id="numbags" class="btn-input-numbags" maxlength="2">
        <label for="sits">Lugares</label>
        <input type="number" name="sits" id="sits" class="btn-input-sits" maxlength="2">
        <!-- UPLOAD DA IMAGEM DO CARRO -->
        <!-- <label for="image">Escolhe a Imagem</label>
        <input type="file" name="file" id="file"> -->
        <label for="categories">Seleciona a Categoria:</label>
        <select name="category" id="category">
            <?php
            /* $categories = Category::search([]); */
            foreach ($categories as $category) {?>
            <option value="<?php echo $category->getId(); ?>" name="category" id="category"><?php echo $category->getcategoryName(); ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Criar Veículo" class="btn-login">
    </form>
    </div>
</body>
</html>