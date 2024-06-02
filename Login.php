<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <h1>Login User</h1>
    <div class="login-page">
    <form action="verifyLogin.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="btn-input-login">
        <label for="password">Palavra-passe</label>
        <input type="password" name="password" id="password" class="btn-input-login">
        <input type="submit" value="Iniciar Sessão" class="btn-login">
    </form>
    <div class="user-register">
        <a href="registerUser.php">Registar Utilizador</a>
        <br>
        <a href="index.php">Voltar para a Home Page</a>
    </div>
    </div>
</body>
</html>