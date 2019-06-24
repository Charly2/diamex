
<section class="section_first">
    <div class="row padd_top_30 container_prod no-margin">
        <div class="col-xs-12 col-md-12">
            <div class="row prod_cal">
                <div class="col-md-8 prod_a no-padding bg_grisx">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
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

                            <div class="main_caract_pdo">
                                <h3>Perzonalización</h3>
                                <div class="flex_between">
                                    <span>Medida del anillo:</span>
                                    <span class="_item">7.5</span>
                                </div>
                                <div class="flex_between">
                                    <span>Mensaje en el anillo:</span>
                                    <span class="_item">11/11/19</span>
                                </div>
                            </div>

                            <div class="main_caract_pdo">
                                <h3>Información de envío</h3>
                                <div class="flex_between">
                                    <span>Costo de envío:</span>
                                    <span class="_item">Gratis</span>
                                </div>
                                <div class="flex_between">
                                    <span>Fecha de entrega:</span>
                                    <span class="_item">11/11/19</span>
                                </div>
                                <div class="flex_between">
                                    <span>Tipo de entrega:</span>
                                    <span class="_item">A domicilio</span>
                                </div>
                                <div class="flex_between">
                                    <span>Persona que recibe:</span>
                                    <span class="_item">Juan Carlos</span>
                                </div>
                                <div class="flex_between">
                                    <span>Persona que recibe:</span>
                                    <span class="_item">Juan Carlos</span>
                                </div>
                                <div class="flex_between">
                                    <span>Contacto:</span>
                                    <span class="_item">55889963655</span>
                                </div>
                                <div class="flex_between">
                                    <span>Mail de contacto:</span>
                                    <span class="_item">pfernandez@gmail.com</span>
                                </div>
                                <div class="flex_between">
                                    <span>Lugar en entrega:</span>
                                    <span class="_item text-right">
                                        Av. Ingeniero Eduardo<br>
                                        Molina 5907, Gestrudis<br>
                                        Sanchez 2a sección. GAM.<br>
                                        CP 07839
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 prod_b">

                    <div class="row mar_top_30 mar_bottom_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="maa">
                                <img src="img/anill.svg" alt="">
                                <div class="cont">
                                    <h2 class="text-center">¡Gracias por tu compra!</h2>
                                    <p class="text-center">Un experto se comunicará contigo para afinar los detalles de compra.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <a href="/diamex/" class="btn btn-block btn-success">Continuar compra</a>
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
<script>
    $(document).ready(function (e) {

        $('.main_slider').slick({
            dots:true
        });

        $('._seta').click(function (e) {
            $('._seta').removeClass('btn-success').addClass('btn-success_out');
            $(this).addClass('btn-success');
            $('.direc').removeClass('active')
            $(this).parents('.direc').addClass('active');
        });

    });
</script>