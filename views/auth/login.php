<h1 class= "nombre-pagina">Login</h1>
<p class = "descripcion-pagina">Inicia sesion con tus datos</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class = "formulario" method="POST" action="/"><!--se usa la / en el por que tiene que esera la misma como la del router-->
    <div class = "campo">
        <label for = "email">Email</label> <!--si usas un for apuersas nesecitas del email y el type te ayuda a la validacion y al teclado -->
        <input
            type = "email" 
            id = "email"
            placeholder=" Tu email"
            name="email" 
        /><!-El name te permite leer el POST['email']--->
    </div>
    <div class = "campo">
        <label for= "password">Password</label>
        <input 
            type= "password"
            id = "passord"
            placeholder="Tu password"
            name = "password"
        />
    </div>

    <input type = "submit" class = "boton" value = "Inciar sesion">
</form>

<div class = "acciones">
    <a href = "/crear-cuenta">¿Aun no tienes cuenta? Crear una</a>
    <a href = "/olvide">¿Olvidaste tu password?</a>
</div>