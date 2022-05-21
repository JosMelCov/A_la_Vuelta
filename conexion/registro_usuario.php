<?php
   include 'coneccion.php';

   $nombre_completo=$_POST["nombre_completo"];
   $correo=$_POST["email"];
   $usuario=$_POST["nombre_usuario"];
   $passw=$_POST["password"];
   
   //encriptar contraseñas
   $passw=hash('sha1', $passw);

   $query="INSERT INTO usuarios(nombre_completo,email,usuario,passw) VALUES('$nombre_completo','$correo','$usuario','$passw')";
   //verificar que el correo no se repita en la base de datos
   $verificar_correo= mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$correo'");
   if(mysqli_num_rows($verificar_correo) > 0){
       echo '
       <script>
            alert("Este correo ya está registrado, intenta nuevamente");
            window.location="../index1.html";
       </script>';
       exit();
   }
   //verificar que el nombre de usuario no se repita
   $verificar_usuario= mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
   if(mysqli_num_rows($verificar_usuario) > 0){
       echo '
       <script>
            alert("Este usuario ya está registrado, intenta nuevamente");
            window.location="../index1.html";
       </script>';
       exit();
   }
   $ejecutar=mysqli_query($conexion, $query);
   if($ejecutar){
       echo '
       <script>
            alert("Usuario resgistrado correctamente");
                window.location="../index1.html";      
            </script>
       ';
   }
   mysqli_close($conexion);
?>