<?php //Como pertenece a la vista tienes acceso a la variable de alertas y usuarios
    foreach($alertas as $key => $mensajes)://$key es la llave de error y $alerta tiene los mensajes
        foreach($mensajes as $mensaje):
?>
    <div class = "alerta <?php echo $key; ?>">
            <?php echo $mensaje; ?>
    </div>
<?php
        endforeach;
    endforeach;
?>