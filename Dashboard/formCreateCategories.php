<?php
include ('../autoload.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categorias</title>
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
<h1>Criar Categorias</h1>
    <div class="login-page">
    <form action="createCategory.php" method="post">
        <label for="categoryname">Nome da Categoria</label>
        <input type="text" name="categoryname" id="categoryname" class="btn-input-categoryname">
        <label for="fuel_type">Tipo de Combustível</label>
        <input type="text" name="fuel_type" id="fuel_type" class="btn-input-fuel_type">
        <label for="type">Tipo de Motor</label>
        <input type="text" name="type" id="type" class="btn-input-type">
        <input type="submit" value="Criar Categoria" class="btn-login">
    </form>
    </div>
</body>
</html>