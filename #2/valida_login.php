<?php

require('database.php');
session_start();

foreach($usuarios as $usuario) {
    if ($usuario['login'] == $_POST['username'] && $usuario['password'] == $_POST['password']) {
        echo 'hiasidhas';
          $_SESSION['auth'] = $usuario;
          
        };
    };
   if(isset($_SESSION["auth"])){
       header('location: /home.php');

   }else{
       header('location: /login.php');
   };


?>
