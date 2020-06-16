<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
  
    <?php
        session_start();
       require_once('autenticacao.php');
  ?>

    <p><?= "Olá, seja bem vindo " .$_SESSION['auth']['login'] ?></p>
    <p>Eu posso fazer toda uma página HTML aqui!</p>
    <a href="/logout.php">Sair </a>
</body>
</html>