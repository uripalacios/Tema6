<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="navbar">
        <h1>MVC</h1>
        <!--Mostrar un boton de ir al login si no esta registrado 
        y dos botones uno de perfil y otro de logout-->
        <?php
        if(isset($_SESSION['validada'])){
            ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="submit" value="Registar" name="registro">
        </form>
        <?php
            }
        ?>
    </header>
    <main class="container">
        <?php
        //si hay alguna vista cargada desde el controlador la carga
            if(!isset($_SESSION['vista']))
                require_once $vistas['inicio'];
            else{//sino se va siempre al inicio
                require_once $_SESSION['vista'];
            }
        ?>
    </main>
    <footer class="text_center">
        Derechos de autor Uriel
    </footer>
</body>
</html>