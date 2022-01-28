<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="navbar">
        <!-- mostratr un boton de ir al login 
    si no esta logueado y dos botontes
    uno de perfil y otro de logout -->

        <h1>MVC</h1>
        <?php
        if (isset($_SESSION['validada'])){
            if($_SESSION['perfil']== 'admini'){
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" value="Admi usuarios" name="usuarios">
            </form>
            <?php
            }
        }
        if (isset($_SESSION['validada'])) {
            echo "<p>".$_SESSION['nombre']."</p>";
        ?>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" value="Mi perfil" name="perfil">
                <input type="submit" value="Logout" name="logout">
            </form>
        <?
        } else {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" value="Login" name="login">
            </form>
        <?
        }

        ?>
    </header>
    <main class="container">
        <div class="row">
            <?php
            //si hay alguna vista cargada desde
            // el controlador la cargar
            if (!isset($_SESSION['vista']))
                require_once $vistas['inicio'];
            else { //sino se va siempre al inicio
                require_once $_SESSION['vista'];
            }
            ?>
        </div>
    </main>
    <footer class="text-center">
        Derecho de autora María
    </footer>

</body>

</html>