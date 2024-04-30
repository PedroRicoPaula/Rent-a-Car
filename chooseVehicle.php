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
    <?php include('Includes/header.php')?>
    <h1>Rent-a-Car</h1>
    <h1>Escolha um Veículo</h1>
    <div class="container1">
        <p>1</p>
        <p>Escolha o Veículo</p>
        <p>2</p>
        <p>Detalhes da Reserva</p>
        <p>3</p>
        <p>Boa viagem</p>
    </div>
    <form action="" method="post">
        <label for="">Levantamento</label>
        <option value="<?php echo "opcao1"; ?>"> <?php echo "opcao1";?></option>
        <label for="">Devolução</label>
        <option value="<?php echo "opcao1"; ?>"> <?php echo "opcao1";?></option>
        <br>
        <input type="date" name="date" id="data" placeholder="Data de levantamento">
        <input type="text" name="hora" id="hora" placeholder="Hora de levantamento">
        <br>
        <input type="date" name="date" id="data" placeholder="Data de Devolução">
        <input type="text" name="hora" id="hora" placeholder="Hora de Devolução">
        <br>
        <button type="submit">Pesquisar 🔍</button>
    </form>
    <!-- Aparece os veículos disponíveis -->
    <button>Check-Out</button>

    <!-- Depois do Check-Out irá aparecer uma janela para entrar como cliente senão vai para um form de user -->
    <!-- Aparece a janela por cima para preencher os dados e finalizar reserva -->
    <?php include('Includes/footer.php')?>
</body>
</html>