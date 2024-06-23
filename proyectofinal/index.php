<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\css\home.css">
    <link rel="stylesheet" href=".\css\carruzel.css">
    
    <link rel="stylesheet" href="./css/sliderfix/style.css">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/imagenes.css">
  <link rel="stylesheet" href="./css/slider.css">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href=".\css\imagenes.css">
    <link rel="stylesheet" href="./loggin/loggin.css">
  
   
    <link rel="stylesheet" href="./css/style.css">

    <center>


    <dialog id="modal" open class="fondo">
    <h3>REGISTRATE </h3>
    <form action="./conexionbd  /Registro.php" id="formLogin" method="post" class="formulario">
        <div>
            <label for="usuario" class="labels">Usuario</label>
            <input type="text" id="usuario" name="usuario" maxlength="25" onkeydown="return /[a-zA-Z]/.test(event.key)" class="inputs" placeholder="Usuario" required>
            <span id="errorUsuario"></span>
        </div>
        <div>
            <label for="contrasena" class="labels">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" maxlength="13" oninput="soloNumeros(event)" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="inputs" required>
            <span id="errorContrasena"></span>
        </div>
        <div>
            <button type="submit" id="btnEnviar" class="botoon" onclick="boton(event)">Enviar</button>
        </div>

         
    </form>
   
    <form >

    <button type="button" id="CerrarModal" onclick="btnCerrarModal()">Ya estás registrado? Haz clic aquí</button>

    </form>
   
</dialog>

      </center>
         <script src="./loggin/loggin.js"></script>
         <script src="./loggin/modal.js"></script>

    <title>Inicio</title> <div class="wrapper">

 





      <input type="checkbox" id="btn" hidden>

      <label for="btn" class="menu-btn">

        <i class="fas fa-bars"></i>

        <i class="fas fa-times"></i>

        <i class="fa-solid fa-bars"></i>

        </i>

      </label>

     <nav id="sidebar">

        <div class="title">Viajes</div>

        <ul class="list-items">

          <li><a href="./index.php"><i class="fas fa-home"></i>Inicio</a></li>

          <li><a href="./html/home.html"><i class="fas fa-sliders-h"></i>Viajes disponibles</li>

          <li><a href="./html/contacto.html"><i class="fas fa-user"></i>Contactanos</a></li> 

         
        </ul>

      </nav>

    </div>

    <center> <img src="imagenes y logos/volarr.jpg" height="200" width="200" class=""></center>

    

    <center> 
     
     </div>
    
        <ul class="menu">
          
           
            <li><a href="./html/home.html">Destinos disponibles</a></li>
            <li><a href="./html/agendar.html">Acerca de</a></li>
            <li><a href="">Servicios</a></li>
            <li><a href="./html/contacto.html">Contacto</a></li>
            <li><a href="./daducoss/daduco.html">daducos</a></li>
            <li><a href="./conexionbd/formlog.php">dsvs</a></li>
<!--<div class="padre" width: 20%;> <a href="./conexionbd/formlog.php"><img src="./imagenes y logos/iconlog.jpeg" class="im"></a></div> -->
           

          </ul>
     </center>
 <div>



 </div>

    
    

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;900&display=swap" rel="stylesheet">

 
 
 <link rel="stylesheet" href="./css/contact.css">

</head>
<body  background="./imagenes y logos/cancuncirris.jpg">
   
    <script src="https://kit.fontawesome.com/62d4eea4d1.js" crossorigin="anonymous"></script>
     
        
    <section id="gallery">
      <div class="gallery-container">
          <figure class="gallery-item">
              <img src=".\imagenes y logos\atardecer.jpg" alt="Imagen 1">
              <figcaption></figcaption>
          </figure>
          <figure class="gallery-item">
              <img src=".\imagenes y logos/burbujadelcarmen.jpg" alt="Imagen 2">
             <li><a href="./destinos/playadelcarmen.html"></a></li>
          </figure>
          <figure class="gallery-item">
              <img src="./imagenes y logos/oajakix.jpeg" alt="Imagen 3">
              <figcaption>Descripción de la imagen 3</figcaption>
          </figure>
          <!-- ... otras imágenes ... -->
      </div>
      <nav class="gallery-navigation">
          <button class="nav-button prev-button"></button>
          <button class="nav-button next-button"></button>
      </nav>
  </section>
  <script>

let currentIndex = 0;

document.querySelector('.prev-button').addEventListener('click', () => {
 navigate(-1);
});

document.querySelector('.next-button').addEventListener('click', () => {
 navigate(1);
});

function navigate(direction) {
 const galleryContainer = document.querySelector('.gallery-container');
 const totalImages = document.querySelectorAll('.gallery-item').length;

 currentIndex = (currentIndex + direction + totalImages) % totalImages;
 const offset = -currentIndex * 100;

 galleryContainer.style.transform = `translateX(${offset}%)`;
}

      
      </script>
</body>




  <footer class="main-footer">
    <div class="container container--flex">
        <div class="column column--33">
            <h4 class="column__title">¿Porque viajar con nosotros?</h4>
            <p class="column__txt">Somos la mejor empresa en gestion de viajes, la primera de Mexico y brindamos una cobertura de otro pedo</p>
        </div>
        <div class="column column--33">
            <h4 class="column__title">Contactanos</h4>
            <p class="column__txt"><span class="icon-map"><li>Direccion</li> <br> Fraccionamineto altavela, nayarit</span></p>
            <p class="column__txt"><span class="icon-phone"><li>322-000-0000</li></span></p>
            <p class="column__txt"><span class="icon-email"><li>gonzalooficial110@gmail.com</li></span></p>
        </div>
        <div class="column column--33">
            <h4 class="column__title">Siguenos en nuestras redes</h4>
            <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
            <p class="column__txt"><a href="" class="icon-youtube">Visita nuestro canal</a></p>
        </div>
        <p class="copy">Agencia de viajes Gonzalo | Todos los derechos reservados</p>
    </div>
</footer>

</html>