

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title> A la Vuelta</title>
        <link rel = "preconnect" href = "https://fonts.googleapis.com">
        <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
        <link href = "https: //fonts.googleapis.com/css2? familia = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap "rel =" stylesheet ">
        <link rel="shortcut icon" href="Imagenes/Logo.png" type="image/x-icon"> 
        <link rel="stylesheet" href="estilos2.css">
        <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css ">
        <link rel="stylesheet" href="mainAlv.css">
</head>
<body>
<header>
        <img src="Imagenes/Logo.png" alt="">
        <nav>
            <a href="index.php">Inicio</a>
            <a href="categorias.html">Categorías</a>
            <a href="reservar.html">¿Cómo reservar?</a>
            <a href="nosotros.html">AboutUS</a>
            <a href="login_registro.php">Registrar</a>
        </nav>
    </header> 
<main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                  <div class="caja_traseralogin">
                      <h3>¿Ya tienes cuenta?</h3>
                      <p>Inicia sesion para acceder a la página</p>
                      <button id="btn_iniciosesion"> Iniciar sesión</button>
                  </div>
                  <div class="caja_traseraregistro">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrate para iniciar sesión</p>
                    <button id="btn_registro"> Regístrate</button>
                </div>
            </div>
            <div class="contenedor_loginregistro">
                <form action="conexion/login_usuario.php" method="post" class="formulario_login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="email" required>
                    <input type="password" placeholder="Contraseña"  name="password" required>
                    <button>Entrar</button>
                </form>
                <form action="conexion/registro_usuario.php" method="post" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo electrónico" name="email" required>
                    <input type="text" placeholder="Usuario" name="nombre_usuario" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
<footer>
        <div class="footer-content">
            <h3>A la Vuelta</h3>
            <p>Raj Template is a blog website where you will find great tutorials on web design and development. Here each tutorial is beautifully described step by step with the required source code.</p>
            <ul class="socials">
                <li><a href="https://m.facebook.com/Alavueltaagencia/"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://vm.tiktok.com/ZMLgPbKCG/"><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="https://instagram.com/alavuelta_mx?igshid=YmMyMTA2M2Y"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="https://www.linkedin.com/in/jose-francisco-melgoza-covarrubias-349ab5225/">JosMelCov</a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="nosotros.html">AboutUS</a></li>
                        <li><a href="reservar.html">¿Cómo Reservar?</a></li>
                      </ul>
                    </div>
      </footer>
  </body>
  </html>