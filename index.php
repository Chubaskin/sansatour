<head>
<title>Sansa Tour</title>
</head>

<body>
<img alt="Bus"
    style=" margin:10px auto;
	display:block;"
    src="./imagenes/bus-lane-160716_1280.png" 
    width="100" height="100"/>

</body>

    <H1 style="text-align: center;">Bienvenido</H1>


<?php session_start(); ?>


<?php

if (isset($_SESSION['k_username'])) {
 echo '<b>'.$_SESSION['k_username'].'</b>.';
 echo '<p><a href="salir.php">Salir</a></p>';
}else{
 echo ' <p style="text-align: center;">
    <a href="./ingreso.php">Ingreso</a></p>
';
 
}
?>