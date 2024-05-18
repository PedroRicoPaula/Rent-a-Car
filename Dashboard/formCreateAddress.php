<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Address</title>
</head>
<body>
<h1>Criar Address</h1>
    <div class="login-page">
    <form action="createAddress.php" method="post">
        <label for="street">Street</label>
        <input type="text" name="street" id="street" class="btn-input-login">
        <label for="postal_code">Postal_Code</label>
        <input type="text" name="postal_code" id="postal_code" class="btn-input-login">
        <label for="door">Door</label>
        <input type="text" name="door" id="door" class="btn-input-login">
        <!-- chaves estrangeiras? -->
        <input type="submit" value="Criar Address" class="btn-login">
    </form>
    </div>
</body>
</html>