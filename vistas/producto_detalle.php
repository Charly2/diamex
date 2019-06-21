
<section class="section_first">
    <div class="row padd_top_30 container_prod no-margin">
        <div class="col-xs-12 col-md-12">
            <div class="row ">
                <div class="col-md-8 prod_a no- bg_grisx">
                    <div class="row">
                        <div class="col-md-12  col-xs-12">
                            <div class="main_slider prod_gal">
                                <div class="main_slider_item">
                                    <img src="img/items/item_prod1.jpg" alt="">
                                </div>
                                <div class="main_slider_item">
                                    <img src="img/items/item_prod2.jpg" alt="">
                                </div>
                            </div>
                            <div class="main_caract_pdo">
                                <h3>Características</h3>
                                <div class="flex_between">
                                    <span>Peso del anillo</span>
                                    <span class="_item">2.45 g</span>
                                </div>
                                <div class="flex_between">
                                    <span>Material</span>
                                    <span class="_item">oro 18 qts</span>
                                </div>
                                <div class="flex_between">
                                    <span>Color</span>
                                    <span class="_item">Blanco</span>
                                </div>
                                <div class="flex_between">
                                    <span>Diamante principal</span>
                                    <span class="_item">1 qts</span>
                                </div>
                                <div class="flex_between">
                                    <span>Color diamante principal</span>
                                    <span class="_item">F</span>
                                </div>
                                <div class="flex_between">
                                    <span>Pureza del diamante principal</span>
                                    <span class="_item">VS1</span>
                                </div>
                                <div class="flex_between">
                                    <span>SKU</span>
                                    <span class="_item">AB18-2.45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 prod_b">
                    <div class="row mar_top_30 mar_bottom_30 bg_gris padd_top_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="form_group">
                                <label class="w800"><h4>Tamaño del diamante principal (quilates)</h4></label>
                                <div class="slider_precio">
                                    <input type="text" class="span2 ex2_slider" value="" data-slider-min="1" data-slider-max="8" data-slider-step="1" data-slider-value="1"/>
                                </div>
                                <div class="slider_precio_val">
                                    <div class="slider_precio_val_item min">1q</div>
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
                            <div class="form_group mar_top_15">
                                <label class="w800"><h4>Color del metal</h4></label>
                                <div class="cont_bange">
                                    <div class="bange_item_mat gold">

                                    </div>
                                    <div class="bange_item_mat silver activo">

                                    </div>
                                    <div class="bange_item_mat pink">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mar_top_30 mar_bottom_30  padd_top_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="flex_start">
                                <span>Precio:</span>
                                <span class="_item precio_ti">$9,599.00</span>
                            </div>
                            <div class="flex_start">
                                <span>Costo de envío:</span>
                                <span class="_item azul_ti">Gratis</span>
                            </div>
                            <div class="flex_start">
                                <span>Recíbelo en:</span>
                                <span class="_item azul_ti">15 días</span>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <a href="/diamex/personaliza_paso_uno" class="btn btn-block btn-success">Comprar</a>
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

    });



</script>