<?php
include ('../autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cliente</title>
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
<h1>Criar Cliente</h1>
    <div class="login-page">
    <form action="createClient.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="btn-input-login">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="btn-input-login">
        <label for="cellphone">Cellphone</label>
        <input type="text" name="cellphone" id="cellphone" class="btn-input-login">
        <!-- Address -->
        <h3>Adiciona a morada</h3>
        <label for="street">Street</label>
        <input type="text" name="street" id="street" class="btn-input-login">
        <label for="postal_code">Postal_Code</label>
        <input type="text" name="postal_code1" id="postal_code" class="btn-input-login" maxlength="4">
        <input type="text" name="postal_code2" id="postal_code" class="btn-input-login" maxlength="3">
        <label for="door">Door</label>
        <input type="text" name="door" id="door" class="btn-input-login">
        <input type="submit" value="Criar Cliente" class="btn-login">
    </form>
    </div>
</body>
</html>