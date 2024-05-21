<?php 
use FamilyRentCar\BackEnd\App\User;
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
            <form action="verifyReservations.php" method="post">
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
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
          <img src="Images/BMW.webp" alt="" />
        </div>
      </div>
    </main>
    <?php include('Includes/footer.php')?>
</body>
</html>