
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
                <div class="col-md-6 prod_a no-padding bg_grisx hidden-xs hidden-sm">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-xs-12">
                            <div class="main_slider prod_gal">
                                <div class="main_slider_item">
                                    <img class="img_disento" src="img/anillo_cita.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 prod_b">
                    <div class="row">
                        <div class="col-md-12 text-center padd_top_15">
                            <h3 class="no-margin pasos_items"><span >1</span> - <span  >2</span> - <span class="active" >3</span></h3>
                            <h3 class="no-margin">Datos de contacto</h3>
                        </div>
                    </div><div class="row mar_top_30  bg_gxris padd_top_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <div class="_input ">
                                            <input type="text" class="_icon disable " placeholder="Nombre de la persona de contacto..." value="">
                                            <small class="font-color-red">No es un email valido</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <div class="_input ">
                                            <input type="text" class="_icon disable " placeholder="Email..." value="">
                                            <small class="font-color-red">No es un email valido</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <div class="_input ">
                                            <input type="text" class="_icon disable " placeholder="Teléfono celular..." value="">
                                            <small class="font-color-red">No es un email valido</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mar_bottom_30  ">
                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <a href="/diamex/cita_cuatro" class="btn btn-block btn-success">Continuar</a>
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

