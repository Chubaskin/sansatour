
<?php include 'plantillas/header.php'; ?>
<?php session_start(); ?>


    <H1 style="text-align: center;">Bienvenido!</H1>


<?php

if (isset($_SESSION['k_username'])) {
 echo '<b>'.$_SESSION['k_username'].'</b>.';
 echo '<p><a href="salir.php">Salir</a></p>';
}else{
 echo ' <p style="text-align: center;">
    <a href="./ingreso.php">Ingreso</a></p>
';
 
}

include 'plantillas/footer.php'; ?>
