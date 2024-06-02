<?php
session_start();
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\DBModel;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin</h1>
    <!-- Enviar para o Login para sair do Dashboard -->
    <button class="btn-Reservations" name="clickReservations"><a href="index.php">Admin Page</a></button>
    <br>
    <button class="button-nav"><a href="../Login.php">Login</a></button>
    <button class="button-nav"><a href="formCreateUser.php">Criar User</a></button>
    <button class="btn-Reservations" name="clickReservations"><a href="modifyReservation.php">Reservas</a></button>

<?php 
        $categories = Category::search([]);

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Categoria</th>
                    <th>Tipo de Combustível</th>
                    <th>Tipo de Motor</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php //Foreach para procurar e mostrar as Categorias que existem na BD 
                foreach ($categories as $category) {?>
                <tr>
                    <td><?php echo $category->getId(); ?></td>
                    <td><?php echo $category->getcategoryName(); ?></td>
                    <td><?php echo $category->getFuel_type(); ?></td>
                    <td><?php echo $category->getType(); ?></td>
                    <!-- Configurações -->
                    <td><a href="deletecategories.php?id=<?php echo $category->getId(); ?>">🗑️</a></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>