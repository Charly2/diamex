
<section class="section_first">
    <div class="row padd_top_30 container_prod no-margin">
        <div class="col-md-6 col-md-offset-3 prod_b">
            <div class="row">
                <div class="col-md-12 text-center padd_top_15 mar_bottom_30">
                    <h3 class="no-margin">Contacto</h3>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
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
                    <div class="col-md-12">
                        <div class="form_group">
                            <div class="_input ">
                                <textarea type="text" class="_icon disable " placeholder="Mensaje" value="" rows="5"></textarea>
                                <small class="font-color-red">No es un email valido</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 padd_top_15 mar_bottom_30">
                        <a href="/diamex/personaliza_dos" class="btn btn-block btn-success ">Continuar compra</a>
                    </div>



                </div>

                <div class="row">
                    <div class="col-md-12 text-center padd_top_15 mar_bottom_30">
                        <h3 class="no-margin">Show Room</h3>
                    </div>
                </div>
                <div class="row mar_bottom_30">
                    <div class="col-md-6 no-padding contacto_item">
                        <span class="fa fa-phone"></span>
                        <span>+52 55 5555 5555</span>
                    </div>
                    <div class="col-md-6 no-padding contacto_item">
                        <span class="fa fa-envelope"></span>
                        <span>info@joyasdiamex.com</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=av%20francisco%20i.%20madero%2054&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>

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