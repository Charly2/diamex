
<section class="section_first">


    <div class="row padd_top_30 container_prod no-margin">
        <div class="row ">
            <div class="col-xs-12 col-md-12 no-padding no-margin">
                <div class="img_disen cita" style="    background: url(img/f01.jpg);">
                    <h3>Agendar cita</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="row prod_cal">
                <div class="col-md-6 col-md-offset-3 prod_b">

                    <div class="row mar_top_30 mar_bottom_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="maa">
                                <img src="img/anill.svg" alt="">
                                <div class="cont">
                                    <h2 class="text-center">¡Todo listo!</h2>
                                    <p class="text-center mb0">Te hemos enviado un correo con los detalles de tu cita.</p>
                                    <p class="text-center mb0">Un experto te visitará y te asesorará con todo lo necesitas saber para escoger tu anillo perfecto.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <a href="/diamex/" class="btn btn-block btn-success">Ir al inicio </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_15 catalogo_index_ser">
    <div class="row">
        <div class="col-md-12">
            <h3>¿Necesitas ayuda personalizada?</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6 item_prod_servi sh no-padding" style="background-image: url('img/items/calendar.jpg')">
            <a href="">
                Agendar Cita
            </a>
        </div>
        <div class="col-xs-6 col-md-6 item_prod_servi cc no-padding" style="background-image: url('img/items/showroom.jpg')">
            <a href="">
                Showroom
            </a>
        </div>
    </div>

</section>
<section class="contacto_seciton">
    <div class="row no-margin">
        <div class="col-md-4 no-padding contacto_item">
            <span class="fa fa-phone"></span>
            <span>+52 55 5555 5555</span>
        </div>
        <div class="col-md-4 no-padding contacto_item">
            <span class="fa fa-whatsapp"></span>
            <span>+52 55 5555 5555</span>
        </div>
        <div class="col-md-4 no-padding contacto_item">
            <span class="fa fa-envelope"></span>
            <span>info@joyasdiamex.com</span>
        </div>
    </div>
</section>
<script src="js/bootstrap-slider.js"></script>
<link rel="stylesheet" href="css/bootstrap-slider.min.css">
<script>
    $(document).ready(function (e) {

        $('.main_slider').slick({
            dots:true
        });





        $('.bange_item').click(function (e) {
            $(this).siblings().removeClass('activo')
            $(this).addClass('activo')
        });
        $('.bange_item_mat').click(function (e) {
            $(this).siblings().removeClass('activo')
            $(this).addClass('activo')
        });


        $('.main_img_item ').click(function (e) {
            $(this).siblings().removeClass('activo')
            $(this).addClass('activo')
        });

        $('.item_horario').click(function (e) {

            $('.item_horario').removeClass('activo')
            $(this).addClass('activo')
        });

        $('._seta').click(function (e) {
            $('._seta').removeClass('btn-success').addClass('btn-success_out');
            $(this).addClass('btn-success');
            $('.direc').removeClass('active')
            $(this).parents('.direc').addClass('active');
        });

    });
</script>

