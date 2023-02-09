<h1>Crear cuenta</h1>
<p class = "descripcion-pagina">LLena el siguiente formulario para crear una cuenta</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>
<form class= "formulario" method = "POST" action="/crear-cuenta">
    <div class = "campo">
        <label for="nombre">Nombre</label><!--recuerda que como tienes un for nesecitas un id-->
        <input
            type="text"
            id = "nombre"
            name = "nombre"
            placeholder="Tu nombre"
            value = "<?php echo s($usuario->nombre); ?>"
        />
    </div>
    <div class = "campo">
        <label for="apellido">Apellido</label><!--recuerda que como tienes un for nesecitas un id-->
        <input
            type="text"
            id = "apellido"
            name = "apellido"
            placeholder="Tu Apellido"
            value = "<?php echo s($usuario->apellido); ?>"
        />
    </div>
    <div class = "campo">
        <label for="telefono">Telefono</label><!--recuerda que como tienes un for nesecitas un id-->
        <input
            type="tel"
            id = "telefono"
            name = "telefono"
            placeholder="Tu telefono"
            value = "<?php echo s($usuario->telefono); ?>"
        />
    </div>
    <div class = "campo">
        <label for="email">E-mail</label><!--recuerda que como tienes un for nesecitas un id-->
        <input
            type="email"
            id = "email"
            name = "email"
            placeholder="Tu E-mail"
            value = "<?php echo s($usuario->email); ?>"
        />
    </div>
    <div class = "campo">
        <label for="password">Password</label><!--recuerda que como tienes un for nesecitas un id-->
        <input
            type="password"
            id = "password"
            name = "password"
            placeholder="Tu Password"
        />
    </div>

    <input type = "submit" value = "Crear cuenta" class = "boton">
</form>

<div class = "acciones">
    <a href = "/">¿Ya tienes una cuenta? Inicia Sesion</a>
    <a href = "/olvide">¿Olvidaste tu password?</a>
</div>

