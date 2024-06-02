<?php 
include ('autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\Category;
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<header class="header">
    <?php include('Includes/header.php')?>
    <div class="tituloFrota">
      <h1>Desça para Visualizar a Frota</h1>
      <p>⬇️</p>
    </div>
    </header>

    <main>
      <div class="titulo-frota">
        <h1>Frota</h1>
      </div>
      <div class="frota">
        <div class="img">
          <?php 
          $categories = Category::search([]);
//Foreach para procurar e mostrar as Categorias que existem na BD e adiciona as imagens correspondentes ao id
          foreach($categories as $category){
          ?>
          <div class="blocoCategoria">
          <img class="img-card" src="Images/<?php echo $category->getId()?>.jpg" alt="category Image">
          <p class="tiposCategorias">Tipo de Categoria: <?php echo $category->getcategoryName(); ?></p>
          <p class="tiposCategorias"> ⛽ <?php echo $category->getFuel_type(); ?></p>
          <p class="tiposCategorias">Cilindrada: <?php echo $category->getType(); ?></p>
          </div>
          <?php }?>
        </div>
      </div>
    </main>
    <?php include('Includes/footer.php')?>
</body>
</html>