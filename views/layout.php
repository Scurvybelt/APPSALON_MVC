<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/build/css/app.css"><!--Se le pone la / antes para que pusque desde el principio del servidor luego busque el build y asi susesivamente-->
</head>
<body>
    <div class = "contenedor-app">
        <div class = "imagen"></div>
        <div class = "app">
            <?php echo $contenido; ?>
        </div>
    </div>
    
    <?php 
        echo $script ?? '';//la variable script es el javaScript y como no lo vas a tener en todos lados se le pone el ?? '';
    ?>
            
</body>
</html>