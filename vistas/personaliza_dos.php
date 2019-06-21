
<section class="section_first">


    <div class="row padd_top_30 container_prod no-margin">
        <div class="row ">
            <div class="col-xs-12 col-md-12 no-padding no-margin">
                <div class="img_disen">
                    <img src="img/imggggg.png" alt="">
                    <h4>Diseña tu propia anillo</h4>
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
                                    <img class="img_disento" src="img/anill_plus_net.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 prod_b">
                    <div class="row">
                        <div class="col-md-12 text-center padd_top_15">
                            <h3 class="no-margin pasos_items"><span >1</span> - <span class="active" >2</span> - <span >3</span></h3>
                            <h3 class="no-margin">Cuéntanos de tu diseño</h3>
                        </div>
                    </div>
                    <div class="row mar_top_30 mar_bottom_30 bg_gxris padd_top_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="form_group mar_top_15">
                                <label class="w800"><h4>Forma de la montura</h4></label>
                                <div class="main_img">
                                    <div class="main_img_item">
                                        <img src="img/aaa.svg" alt="">
                                    </div>
                                    <div class="main_img_item activo">
                                        <img src="img/bbb.svg" alt="">
                                    </div>
                                    <div class="main_img_item">
                                        <img src="img/ccc.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="form_group mar_top_15">
                                <label class="w800"><h4>Material</h4></label>
                                <div class="cont_bange">
                                    <div class="bange_item activo">
                                        Oro 10k
                                    </div>
                                    <div class="bange_item">
                                        Oro 14k
                                    </div>
                                    <div class="bange_item">
                                        Oro 18k
                                    </div>
                                    <div class="bange_item">
                                        Platino
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="form_group mar_top_25">
                                <label class="w800"><h4>Tamaño del diamante principal (quilates)</h4></label>
                                <div class="slider_precio">
                                    <input type="text" class="span2 ex2_slider" value="" data-slider-min="1" data-slider-max="8" data-slider-step="1" data-slider-value="1"/>
                                </div>
                                <div class="slider_precio_val">
                                    <div class="slider_precio_val_item min">1q</div>
                                </div>
                            </div>
                        </div>

                    </div><div class="row mar_top_30 mar_bottom_30  padd_top_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="flex_start wrap">
                                <span class="precio_as">Precio estimado:</span>
                                <span class="_item precio_ti">$9,599.00</span>
                            </div>
                            <div class="flex_start mar_top_15">
                                <span>Este es un pre-cotizador rápido y es muy posible que el precio final del anillo tenga variaciones importantes. Termina con el proceso de personalización del anillo para que un profesional cotize tu diseño.</span>

                            </div>

                        </div>

                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <a href="/diamex/personaliza_tres" class="btn btn-block btn-success">Continuar compra</a>
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



        $('.ex2_slider').slider({
        }).on('slide', function (e) {
            var min = $('.slider .tooltip.top')[0].style.left;
            console.dir(min);
            $('.slider_precio_val_item.min').html(e.value+"q").css('left',min);
        }).on('change',function (e) {
            var min = $('.slider .tooltip.top')[0].style.left;
            console.dir(min);
            $('.slider_precio_val_item.min').html(e.value.newValue+"q").css('left',min);
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

        $('.item_item').click(function (e) {
            $('.item_item').removeClass('activo')
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

