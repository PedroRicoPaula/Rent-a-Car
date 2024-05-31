<?php 
include ('autoload.php');
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\BackEnd\App\Category;
session_start();

//var_dump($_SESSION);
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
      <article>
        <div class="container">
          <div class="form">
            <form action="createClient.php" method="post">
              <label for="">Levantamento</label>
              <option value=""></option>
              <input
                type="date"
                name="date"
                id="data"
                placeholder="Data de levantamento"
                class="input-form"
              />
              <input
                type="time"
                name="hora"
                id="hora"
                placeholder="Hora de levantamento"
                class="input-form"
                min="09:00" max="18:00" required
              />
              <br />
              <label for="">Devolução</label>
              <option value=""></option>
              <input
                type="date"
                name="date"
                id="data"
                placeholder="Data de Devolução"
                class="input-form"
              />
              <input
                type="time"
                name="hora"
                id="hora"
                placeholder="Hora de Devolução"
                class="input-form"
                min="09:00" max="18:00" required
              />
              <button type="submit" class="submit">Pesquisar 🔍</button>
            </form>
          </div>
        </div>
      </article>
    </header>
    <main>
      <div class="titulo-frota">
        <h1>Frota</h1>
      </div>
      <div class="frota">
        <div class="img">
          <?php 
          $categories = Category::search([]);
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