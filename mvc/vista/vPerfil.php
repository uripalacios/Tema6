<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label class="form-group" for="">Inicio Sesion</label><br>
    <label  class="form-group"  for="nombre">User: 
        <input type="text" disabled value="<?echo $usuario->codUsuario;?>" name="user" id="user"></label><br>
        <input type="hidden" value="<?echo $usuario->codUsuario;?>" name="user" id="user"></label><br>
    <label class="form-group" for="nombre">Nombre: 
        <input  type="text" value="<?echo $usuario->nombre;?>"name="nombre" id="nombre"></label><br>
    <label class="form-group" for="pass">Contraseña: 
        <input  type="password" name="pass" id="pass"></label><br>
            <label class="form-group" for="pass">Repetir contraseña: 
        <input type="password" name="pass2" id="pass2"></label><br>
        <label class="form-group" for="pass">perfil: 
    <input  type="text" name="pass" value="<?echo $usuario->perfil;?>" id="pass"></label><br>
    
    <input type="submit" value="Modificar" name="modificar">
    <input type="submit" value="Volver" name="volver">
    
</form>