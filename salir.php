<?php
session_start();
session_destroy(); //Matamos la sesion

echo 'Ha cerrado correctamente su sesion<p>
<a href="index.php">index</a></p>';
?>
<SCRIPT LANGUAGE="javascript">
location.href = "index.php";
</SCRIPT>
