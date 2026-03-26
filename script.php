<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/timeline.js?0.0.17"></script>
<script src="js/card.js"></script>

<script>
window.onscroll = function(){
    if(document.documentElement.scrollTop > 100){
        document.querySelector('.go-top-container')
        .classList.add('show');
    }else{
        document.querySelector('.go-top-container')
        .classList.remove('show');
    }
}

document.querySelector('.go-top-container')
.addEventListener('click', () =>{

    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });

});
</script>


<script src="js/venobox.js"></script>
<script>
	$ (document) .ready (function () {
    $ ('.venobox'). venobox(); 
});
</script>

<script>
VenoBox({
    selector: '.venobox',
    numeration: true,
    infinigall: true,
    share: true,
    spinner: 'rotating-plane'
});
</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 150,
        duration: 800
    });
</script>



<!-- SWIPER -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        watchSlidesProgress: true,
        slidesPerGroup: 1,
        slidesPerView: 4,
        loop: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>



<!-- CURSOR ESCRIBE TEXTO-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/main.js"></script>
<!-- CURSOR -->




<script>
// Block 8
$('.block8').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container8').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})
$('#modal-container8').click(function(){
    $(this).addClass('out');
    $('body').removeClass('modal-active');
});


// Block9
$('.block9').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container9').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})
$('#modal-container9').click(function(){
    $(this).addClass('out');
    $('body').removeClass('modal-active');
});


// Block11
$('.block11').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container11').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})
$('#modal-container11').click(function(){
    $(this).addClass('out');
    $('body').removeClass('modal-active');
});


// Block12
$('.block12').click(function(){
    var buttonId = $(this).attr('id');
    $('#modal-container12').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
})
$('#modal-container12').click(function(){
    $(this).addClass('out');
    $('body').removeClass('modal-active');
});




$("#active-menu-mobile").click(function(){
    $(".ul-iffa2022").toggleClass("activa-menu");
    $(".li-iffa2022").toggleClass("efecto-menu-mobile");

    $('.burguer2').toggleClass("off-burguer");
    $('.burguer1').toggleClass("line-burguer1");
    $('.burguer3').toggleClass("line-burguer3");
});
</script>



<!-- Lógica para mostrar Modal para mapa IFFA 2025 -->
<script>
    $(document).ready(function() {
    function openModal(modalId) {
        $("#" + modalId).fadeIn();
        $("#" + modalId).find(".modal-content").addClass("animateIn").show();
    }

    function closeModal(modal) {
        $(modal).find(".modal-content").addClass("animateOut");
        setTimeout(function() {
            $(modal).find(".modal-content").removeClass("animateIn animateOut").hide();
            $(modal).fadeOut();
        }, 300);
    }

    // Evento para abrir el modal correspondiente
    $(".openModal").click(function() {
        var modalId = $(this).data("modal");
        openModal(modalId);
    });

    // Evento para cerrar el modal
    $(".close").click(function() {
        var modal = $(this).closest(".modal");
        closeModal(modal);
    });

    // Cerrar modal al hacer clic en el overlay (fondo)
    $(".wrapper-modal").click(function(event) {
        if ($(event.target).hasClass("wrapper-modal")) {
            closeModal($(this).closest(".modal"));
        }
    });

});
</script>





<!-- Cuenta regresiva -->
<script>
    function iniciarCuentaRegresiva() {
        const fechaObjetivo = new Date("2025-05-03T00:00:00").getTime();

        const intervalo = setInterval(() => {
            const ahora = new Date().getTime();
            const tiempoRestante = fechaObjetivo - ahora;

            if (tiempoRestante <= 0) {
                document.getElementById("countdown").innerHTML = "¡La feria ha comenzado!";
                clearInterval(intervalo);
                return;
            }

            const dias = Math.floor(tiempoRestante / (1000 * 60 * 60 * 24));
            const horas = Math.floor((tiempoRestante % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutos = Math.floor((tiempoRestante % (1000 * 60 * 60)) / (1000 * 60));
            const segundos = Math.floor((tiempoRestante % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = dias.toString().padStart(2, '0');
            document.getElementById("hours").textContent = horas.toString().padStart(2, '0');
            document.getElementById("minutes").textContent = minutos.toString().padStart(2, '0');
            document.getElementById("seconds").textContent = segundos.toString().padStart(2, '0');
        }, 1000);
    }

    iniciarCuentaRegresiva();
</script>