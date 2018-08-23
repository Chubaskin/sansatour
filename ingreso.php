<?php include 'plantillas/header.php'; ?>
<?php session_start(); ?>

<form action="validar.php" method="post">
    <p style="text-align: center;">Usuario: 
        <input type="text" name="nombre" size="20" maxlength="20" /> </p>
    <p style="text-align: center;">Contraseña: 
        <input type="password" name="clave" size="10" maxlength="10" /> </p>
<br />
<input  style=" margin:10px auto; display:block;"
    type="submit" value="Ingresar" />
<p style="text-align: center;">
    <a href="./registro.php">Registro</a>
</p>

<h6 style="text-align: center;"><a href="./Index.php">Volver</a><br/></h6>
</form>


<?php include 'plantillas/footer.php'; ?>