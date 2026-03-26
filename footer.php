
<div class="go-top-container">
     <div class="go-top-button">
          <div class="subir">
               <img src="img/subir.svg" alt="">
          </div>
     </div>
</div>




<footer class="wrapper-footer">
     <div class="logos">
          <img class="logo-cuadros" src="assets/img/imagenes/cuadro-taglermaq.jpg">
          <img class="logo-cuadros" src="assets/img/imagenes/cuadro-iffa.jpg">
     </div>

     <div class="separation-vertical"></div>




     <ul class="ul-footer">
          <li class="li-footer negrita">TAGLERMAQ</li>
          <a href="https://www.taglermaq.cl/">
               <li class="li-footer">Nuestro Sitio</li>
          </a>
          <a href="https://www.taglermaq.cl/quienes-somos/">
               <li class="li-footer">Quiénes Somos</li>
          </a>
     </ul>
     <ul class="ul-footer">
          <li class="li-footer negrita">IFFA 2025</li>

          <a href="equipo.php">
               <li class="li-footer">Nuestro Equipo</li>
          </a>
          <a href="galeria.php">
               <li class="li-footer">Galería & Videos</li>
          </a>
          <!-- <a href="noticia.php">
               <li class="li-footer">Noticias</li>
          </a> -->
     </ul>
     <ul class="ul-footer">
          <li class="li-footer negrita">TEMAS PRINCIPALES</li>

          <a href="mapa.php">
               <li class="li-footer">Hall Plano</li>
          </a>
          <a href="formulario.php">
               <li class="li-footer">Contacto</li>
          </a>
     </ul>
     

     



</footer>

<div class="contador-visitas">
     <div class="content-datos">
          <h3 class="title-contador">Visitante Número</h3>
          <?php
               $archivo = "archivo.txt";
               $contador = intval(trim(file_get_contents($archivo)));

               $file = fopen($archivo, "w");
               fwrite($file, $contador+1 . PHP_EOL);

               $file = fopen($archivo, "r");
               echo '<div class="numero">'. fgets($file). '</div>' ;
               fclose($file);
          ?>
     </div>
</div>


<div class="border-footer">
     <h3 class="title-copy">Copyright© 2025 TAGLERMAQ. Todos los Derechos Reservados.</h3>
</div>