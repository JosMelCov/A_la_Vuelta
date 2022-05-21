<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor, debes iniciar sesión");
    window.location="login_registro.php";
    </script>
    ';
    //header("location: login_registro.php");
    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagenes/Logo.png"type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css ">
    <link rel="stylesheet" href="mainAlv.css" type="text/css">  
    
</head>
<body style="background: linear-gradient(30deg, rgba(220, 20, 60, 0.267),rgba(160, 81, 45, 0.274), rgba(65, 105, 225, 0.397), rgba(205, 92, 92, 0.356), rgba(128, 0, 128, 0.315)); margin-top: 0px;">
    <header>
        <img src="Imagenes/Logo.png" alt="">
        <nav>
            <a href="index_login.php">Inicio</a>
            <a href="categorias.html">Categorías</a>
            <a href="reservar.html">¿Cómo reservar?</a>
            <a href="nosotros.html">AboutUS</a>
            <a href="index.php">Log Out</a>
            <ul class="usuario">
            <li><a href="usuario.html"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
    </header> 
    <div class="contenBg">
    </div>
     <div class="slide">
        <div class="slide-inner">
            <input class="slide-open" type="radio" id="slide-1" 
                  name="slide" aria-hidden="true" hidden="" checked="checked">
            <div class="slide-item">
                <img src="Imagenes/regreso.jpg">
            </div>
            <input class="slide-open" type="radio" id="slide-2" 
                  name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="Imagenes/Puebla.jpg">
            </div>
            <input class="slide-open" type="radio" id="slide-3" 
                  name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="Imagenes/Logo.png">
            </div>
            <label for="slide-3" class="slide-control prev control-1">‹</label>
            <label for="slide-2" class="slide-control next control-1">›</label>
            <label for="slide-1" class="slide-control prev control-2">‹</label>
            <label for="slide-3" class="slide-control next control-2">›</label>
            <label for="slide-2" class="slide-control prev control-3">‹</label>
            <label for="slide-1" class="slide-control next control-3">›</label>
            <ol class="slide-indicador">
                <li>
                    <label for="slide-1" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-2" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-3" class="slide-circulo">•</label>
                </li>
            </ol>
        </div>
    </div>
    <div class="contenido" >
        <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: x-large; margin-bottom: 0px; padding-top: 5px;">Próximos Viajes</h1>
        <div style=" height: 100px;">
        </div>
        <table style="padding-bottom: 0px;">
            <tbody>
                <tr>
                    <td><img src="Imagenes/parqueAcu.jpg"></td>

                    <td>
                        <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: medium;">AquaPark, en Tuxpan, Veracruz </h2>
                    </td>
                    <td>
                        <p style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: medium;">La playa más cercana a la CDMX Incluye: <br>
                            Transporte viaje redondo.
                            Entrada al parque.
                            Acceso a la playa.
                            Seguro de viajero.
                            8 toboganes.
                            Precio Adulto: $930
                            Precio niño: $870 <br>
                            *Salidas*<br>
                            Ángel de la independencia - 5:15am
                            Monumento a la revolución - 5:30am
                            Plaza Aragón (hospital vivo) - 6:00am
                            Las Américas - 6:20am <br>
                            *Regreso*<br>
                            6:00 pm
                            Contamos con la alberca infantil más grande de México. </p>
                    </td>
                </tr>
                <tr>
                    <td><img src="Imagenes/tlaxcala.png"></td>
                    <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: medium;">
                        <h3>Tlaxcala</h3>
                    </td>
                    <td>
                        <p style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: medium;">Nativitas-Tlaxcala de Xicotencatl-Huamantla-Tlaxco-Nanacamilpa
                            Incluye: <br>
                            - Transporte viaje redondo
                            - Hospedaje por 2 noches en "Molino de los Reyes"
                            - Hospedaje en "Hacienda Soltepec" por una noche
                            - Desayunos
                            - Elevación en globo aeroestático
                            - Entradas a los atractivos mencionados en el itinerario
                            - Seguro de viajero <br>
                            Conocerás<br>
                            Val'quirico
                            Zona arqueológica de Tlaxcala Xochitécatl
                            Jardín botánico Tizatlán
                            Parque nacional la Malinche
                            Santuario de las luciérnagas
                            <br>
                            Vaya al apartado de contacto para más información.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><img src="Imagenes/Puebla1.png"></td>
                    <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: medium;">
                        <h4>Puebla</h4>
                    </td>
                    <td style="font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
    color: white; font-size: medium;">Zacatlan y Chignahuapan
                        Incluye: <br>
                        Transporte viaje redondo
                        Recorrido en tranvía
                        Desayuno tipo buffet
                        Entrada a bodega de sidra
                        Entrada al museo del reloj
                        Seguro de viajero <br>

                        Conocerás<br>
                        Proceso de elaboración de sidra
                        Museo del reloj
                        Los vitromurales
                        Castillo de la esfera
                        <br>
                        Vaya al apartado de contacto para más información.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

     <footer >
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
        </div>

    </footer>
     
    
</body>

</html>