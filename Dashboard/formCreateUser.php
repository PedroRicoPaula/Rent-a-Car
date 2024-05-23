<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar User</title>
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
<h1>Criar User</h1>
    <div class="login-page">
    <form action="createUser.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="btn-input-login">
        <label for="password">Palavra-Passe</label>
        <input type="password" name="password" id="password" class="btn-input-login">
        <label for="password_verify">Verifica Palavra-Passe</label>
        <input type="password" name="password_verify" id="password_verify" class="btn-input-login">
        <label for="is_admin">Admin?</label>
        <input type="number" name="is_admin" id="is_admin" min="0" max="1">
        <input type="submit" value="Modificar Utilizador" class="btn-login">
    </form>
    </div>
</body>
</html>