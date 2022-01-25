

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label class="form-group" for="">Inicio Sesion</label><br>
    <label  class="form-group"  for="nombre">User: 
        <input type="text" name="user" id="user"></label><br>
    <label class="form-group" for="nombre">Nombre: 
        <input  type="text" name="nombre" id="nombre"></label><br>
    <label class="form-group" for="pass">Contraseña: 
        <input  type="password" name="pass" id="pass"></label><br>
    <label class="form-group" for="pass">Repetir contraseña: 
        <input type="password" name="pass2" id="pass2"></label><br>
    
    <input type="submit" value="Registrar" name="registro">
    <input type="submit" value="Volver" name="volver">
    
</form>