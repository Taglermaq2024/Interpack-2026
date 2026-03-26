
<?php require("enlaces.php");?>
<?php require ('header.php');?>



<div class="wrapper-background-footer" data-aos="fade-in">
    <div class="mask">
        <img class="img-background-galeria" src="img/bienvenidos.jpg">
    </div>


    <div class="wrapper-box-form" data-aos="fade-up" data-aos-delay="100">
        <div class="box-img-form"></div>
        <div class="box-datos-form">

            <img class="logotipos-iffa-taglermaq" src="assets/img/logotipos/iffa-taglermaq.png" alt="">

            <div class="contendor-campos">
                <!-- <h3 class="txt-contactanos" data-aos="fade-up" data-aos-delay="100">¿Está en la feria y necesita una reunión con una de nuestras 
                    marcas? ¡Contáctenos!
                </h3> -->

                <div class="wrapper-form">
                    <input type="text" required>
                    <label class="lbl-nombre">
                        <span class="text-nomb"><img src="assets/img/iconos/icon-user.png">Nombre</span>
                    </label>
                </div>
                <div class="wrapper-form">
                    <input type="mail" required>
                    <label class="lbl-nombre">
                        <span class="text-nomb"><img src="assets/img/iconos/icon-mail.png">Correo Electrónico</span>
                    </label>
                </div>
                <div class="wrapper-form">
                    <input type="text" required>
                    <label class="lbl-nombre">
                        <span class="text-nomb"><img src="assets/img/iconos/icon-empresa.png">Empresa</span>
                    </label>
                </div>
                <div class="wrapper-form">
                    <input type="text" required>
                    <label class="lbl-nombre">
                        <span class="text-nomb"><img src="assets/img/iconos/icon-mobile.png">Teléfono</span>
                    </label>
                </div>

                <div class="wrapper-text-area">
                    <label for="comentarios"><img src="assets/img/iconos/icon-message.png">Comentario:</label>
                    <textarea id="comentarios" name="comentarios" rows="6"></textarea>
                </div>
                
                <button class="btn-enviar-datos">ENVIAR</button>
            </div>
        </div>
    </div>



</div>









<?php
    require("script.php");
?>



</body>
</html>