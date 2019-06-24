
<section class="section_first">
    <div class="row padd_top_30 container_prod">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div class="row prod_cal">
                <div class="col-md-12 prod_a no-paddzing bg_grisx">
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
                <div class="col-md-12 prod_b">
                    <div class="row">
                        <div class="col-md-12 text-center padd_top_15">
                            <h3 class="no-margin pasos_items"><span class="active">1</span> - <span>2</span> - <span>3</span></h3>
                            <h3 class="no-margin">Personalización</h3>
                        </div>
                    </div>
                    <div class="row mar_top_30 mar_bottom_30">
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="form_group">
                                <label class="w800"><h4>Notificaciones de email</h4></label>
                                <div class="_input ">
                                    <textarea type="text" rows="4" class="_icon disable " placeholder="Escriba aquí su mensaje..." maxlength="20" value=""></textarea>
                                    <small class="font-color-red">No es un email valido</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12">
                            <div class="form_group">
                                <label class="w800"><h4>Medida del anillo:</h4></label>
                                <div class="_input ">
                                    <select type="text" class="_icon disable " placeholder="Escriba aquí su mensaje..." maxlength="20" value="">
                                        <option value="a">Selecione uno...</option>
                                        <?for ($i=1;$i<10;$i++){?>
                                            <option value="<?=$i?>">Talla <?=$i?></option>
                                        <?}?>
                                    </select>
                                    <small class="font-color-red">No es un email valido</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-xs-12 padd_top_15">
                            <a href="/diamex/personaliza_paso_dos" class="btn btn-block btn-success">Continuar compra</a>
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
    });
</script>