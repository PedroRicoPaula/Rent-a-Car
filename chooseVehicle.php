<?php 
use FamilyRentCar\BackEnd\App\User;
use FamilyRentCar\db_rentcar;

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

    <!-- Depois do Check-Out irá aparecer uma janela para entrar como cliente senão vai para um form de user -->
    <!-- Aparece a janela por cima para preencher os dados e finalizar reserva -->
    <?php include('Includes/footer.php')?>
</body>
</html>