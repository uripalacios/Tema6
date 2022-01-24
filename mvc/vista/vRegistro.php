

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="">Inicio Sesion</label>
    <label for="nombre">User:
        <input type="text" name="user" id="user">
    </label>
    <label for="nombre">Nombre:
        <input type="text" name="nombre" id="nombre">
    </label>
    <label for="pass">Constraseña:
        <input type="password" name="pass" id="pass">
    </label>
    <label for="pass">Repetir constraseña:
        <input type="password" name="pass2" id="pass2">
    </label>
    <input type="submit" value="Registrar" name="registro">

</form>
