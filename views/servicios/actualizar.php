<h1 class = "nombre-pagina">Actualizar Servicio</h1>

<p class = "descripcion-pagina">Modifica valores del formulario</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form  method = "POST" class = "formulario"><!--Le quitas el accion para que te respete el id que le pones a la url e identificar el servicio--->
    <?php include_once __DIR__ . '/formulario.php'?>
    <input type = "submit" class = "boton" value = "Actualizar">
</form>