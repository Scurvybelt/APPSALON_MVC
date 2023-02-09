<h1 class = "nombre-pagina">Olvide password</h1>
<p class = "descripcion-pagina">Restablece tu password escribiedo tu email a continuacion</p>


<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class = "formulario" method="POST" action="/olvide"><!--se usa la / en el por que tiene que esera la misma como la del router-->
    <div class = "campo">
        <label for = "email">Email</label> <!--si usas un for apuersas nesecitas del email y el type te ayuda a la validacion y al teclado -->
        <input
            type = "email" 
            id = "email"
            placeholder=" Tu email"
            name="email" 
        /><!-El name te permite leer el POST['email']--->
    </div>

    <input type = "submit" class = "boton" value = "Enviar Instrucciones">
</form>

<div class = "acciones">
    <a href = "/">¿Ya tienes cuenta? Inicia Sesion</a>
    <a href = "/crear-cuenta">¿Aun no tienes una cuenta? Crea una</a>
</div>