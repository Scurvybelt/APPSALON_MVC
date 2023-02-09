<h1 class = "nombre-pagina">Recuperar Password</h1>
<p class = "descripcion-pagina">Coloca tu nuevo password a continuacion</p>

<?php include_once __DIR__ .  "/../templates/alertas.php";?>

<?php if($error) return null;?><!--Esto hace que lo demas no se ejecute-->

<form class = "formulario" method = "POST"><!--NO se le pone action por que sino te elimina el token por eso no lo pongo aqui-->
    <div class = "campo">
        <label for = "password">Password</label>
        <input
            type = "password"
            id = "password"
            name = "password"
            placeholder="Tu nuevo password"
        />
    </div>
    <input type="submit" class = "boton" value = "Guardar Nuevo Password">
</form>

<action class = "acciones">
    <a href = "/">¿Ya tienes cuenta? Inicia Sesion</a>
    <a href = "/crear-cuenta">¿Aun no tienes cuenta? Obtener una</a>
</action>