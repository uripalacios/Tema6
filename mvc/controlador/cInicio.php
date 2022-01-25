<?
//si se ha pulsqado login
if(isset($_POST['login'])){
    $_SESSION['pagina']='login';
    header('Location: index.php');
    exit();
}
$_SESSION['pagina']=$vistas['inicio'];
require_once $vistas['layout'];
