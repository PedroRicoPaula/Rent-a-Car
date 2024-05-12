<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Utilizador</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
<h1>Registar Utilizador</h1>
    <div class="login-page">
    <form action="verifyRegisterUser.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="btn-input-login">
        <label for="password">Palavra-Passe</label>
        <input type="password" name="password" id="password" class="btn-input-login">
        <label for="password_verify">Verifica Palavra-Passe</label>
        <input type="password" name="password_verify" id="password_verify" class="btn-input-login">
        <input type="submit" value="Criar Utilizador" class="btn-login">
    </form>
    <div class="user-register">
        <a href="verifyLogin.php">Faz Login</a>
    </div>
    </div>
</body>
</html>