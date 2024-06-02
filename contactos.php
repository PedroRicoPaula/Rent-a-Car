<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<header class="header">
<?php include('Includes/header.php')?>
    <section class="contactos">
        <div class="grid-x2">
        <div class="info-contactos">
          <h1>Contactos</h1>
          <h4>Morada</h4>
          <p>Rua das Marias Desengonçadas</p>
          <h4>Telefone</h4>
          <p>+351 9123456789</p>
          <h4>E-mail</h4>
          <p>pedro@uac.pt</p>
          <h4>Horário</h4>
            <p>8h30 às 20h
              Domingo e Segunda encerrado
            </p>
          <div class="icons-contactos">
            <a href="www.facebook.com"><img src="Images/Face_ico.svg" alt="" class="icon"></a>
            <a href="www.twitter.com"><img src="Images/Twitter_ico.svg" alt="" class="icon"></a>
            <a href="www.instagram.com"><img src="Images/Insta_ico.svg" alt="" class="icon"></a>
          </div>
        </div>
        <div class="mensagem-contactos">
          <h2>Envie uma mensagem</h2>
          <label for="nome-contactos">Nome</label>
          <input type="text" name="Nome" id="nome-contactos">
          <label for="email-contactos">Email</label>
          <input type="text" name="email" id="email-contactos">
          <label for="msg-contactos">Mensagem</label>
          <input type="text" name="mensagem" id="msg-contactos">
          <button class="btn-contactos ">Enviar</button>
      </div>
    </div>
      </section>
      </header>
      <?php include('Includes/footer.php')?>
</body>
</html>