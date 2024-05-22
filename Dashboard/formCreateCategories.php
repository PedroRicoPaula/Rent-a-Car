<?php
include ('../autoload.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categorias</title>
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