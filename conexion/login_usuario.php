<?php
session_start();
include 'coneccion.php';

$correo= $_POST['email'];
$passw= $_POST['password'];

$validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' and passw='$passw'");
if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario']=$correo;
    header("location: ../index_login.php");
    exit;
}else{
    echo '
    <script>
    alert("usuario no existe, verifique los datos e intente nuevamente");
    window.location="../login_registro.php";
    </script>';
    exit;
}

?>