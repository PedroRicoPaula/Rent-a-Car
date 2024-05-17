<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cliente</title>
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
        <input type="submit" value="Criar Cliente" class="btn-login">
    </form>
    </div>
</body>
</html>