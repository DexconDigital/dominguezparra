<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->


<section id="seccion_redes" class="rounded">

    <div class="contenedor_iconos rounded flex-column d-flex justify-content-around align-items-center h-100">
        <div class="align-items-center border-bottom d-flex justify-content-center w-100">
            <a target="blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"><i class="iconos icono_f <?php echo $redes_sociales['facebook']['icono'] ?>"></i></a>
        </div>

        <div class="align-items-center border-bottom d-flex justify-content-center w-100">
            <a target="blank" href="<?php echo $redes_sociales['twitter']['link'] ?>"><i class="iconos icono_t <?php echo $redes_sociales['twitter']['icono'] ?>"></i></a>
        </div>

        <div class="align-items-center border-bottom d-flex justify-content-center w-100">
            <a target="blank" href="<?php echo $datos_contacto['principal']['whatsapp']['link'] ?>"><i class="iconos icono_w rounded <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"></i></a>
        </div>

    </div>

</section>

<header class="sticky-top position-fixed">

    <!-- CAJA VERDE CON CELULAR -->
    <div class="caja_telefono w-100 position-relative">

        <div class="w-auto align-items-center d-flex h-100 justify-content-center position-absolute telefono">

            <a title="Sede Principal" class="mr-2" href="tel:<?php echo $datos_contacto['principal']['telefono_fijo']['link'] ?>">

                <div class=" w-100 d-flex align-items-center justify-content-center">

                    <div><i class="<?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"></i></div>

                    <div><?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?></div>
                </div>
            </a>


            <a title="Sede Cabecera" class="mr-2" href="tel:<?php echo $datos_contacto['cabecera']['telefono_fijo']['link'] ?>">

                <div class=" w-100 d-flex align-items-center justify-content-center">

                    <div><i class="<?php echo $datos_contacto['cabecera']['telefono_fijo']['icono'] ?>"></i></div>

                    <div><?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?></div>
                </div>
            </a>


            <a title="Sede Cañaveral" class="mr-2" href="tel:<?php echo $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>">

                <div class=" w-100 d-flex align-items-center justify-content-center">

                    <div><i class="<?php echo $datos_contacto['cañaveral']['telefono_fijo']['icono'] ?>"></i></div>

                    <div><?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?></div>
                </div>
            </a>

        </div>
    </div>
    <!-- CAJA VERDE CON CELULAR -->

    <!-- CAJA MENU -->
    <section id="menu" class="d-flex align-items-center justify-content-center">

        <div class="container position-relative">

            <nav class="navbar w-100 d-flex align-items-center justify-content-between navbar navbar-expand-lg navbar-light p-0">

                <div>
                    <a href="index.php"><img style="width:300px" src="images/logo_color.png" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="ml-5 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center">

                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Inicio') {
                                                        echo 'span';
                                                    } ?>" href="index.php"> <span class="<?php if ($page == 'Inicio') {
                                                                                                echo 'active2';
                                                                                            } ?>"></span> Inicio </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Nosotros') {
                                                        echo 'span';
                                                    } ?>" href="nosotros.php"> <span class="<?php if ($page == 'Nosotros') {
                                                                                                echo 'active2';
                                                                                            } ?>"></span> Nosotros </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Servicios') {
                                                        echo 'span';
                                                    } ?>" href="servicios.php"> <span class="<?php if ($page == 'Servicios') {
                                                                                                    echo 'active2';
                                                                                                } ?>"></span> Servicios </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Asesores') {
                                                        echo 'span';
                                                    } ?>" href="asesores.php"> <span class="<?php if ($page == 'Asesores') {
                                                                                                echo 'active2';
                                                                                            } ?>"></span> Asesores </a>
                        </li>



                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Inmuebles') {
                                                        echo 'span';
                                                    } ?>" href="inmuebles.php?"> <span class="<?php if ($page == 'Inmuebles') {
                                                                                                    echo 'active2';
                                                                                                } ?>"></span> Inmuebles </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" target="blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=986&tipo=2"> Arrendatarios </a>
                                <a class="dropdown-item" target="blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=986&tipo=1"> Propietarios </a>
                                <a class="dropdown-item" target="blank" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments"> Pagos en línea </a>
                            </div>
                        </li>

                        <li class="nav-item position-relative">
                            <a data-toggle="modal" data-target="#exampleModal" class="a2 nav-link <?php if ($page == '') {
                                                                                                        echo 'span';
                                                                                                    } ?>" href="index.php"> <span class="<?php if ($page == '') {
                                                                                                echo 'active2';
                                                                                            } ?>"></span> Consigne su Inmueble </a>
                        </li>

                        <!-- Button trigger modal -->


                        <!-- Modal -->


                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Contáctenos') {
                                                        echo 'span';
                                                    } ?>" href="contactenos.php"> <span class="<?php if ($page == 'Contáctenos') {
                                                                                                    echo 'active2';
                                                                                                } ?>"></span> Contáctenos </a>
                        </li>

                        <li style="width:0px" class="nav-item position-relative">
                            <a href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments" target="blank" class="nav-link"> <img class="logo_pse" src="images/mpa.png" alt=""> </a>
                        </li>



                    </ul>

                </div>

            </nav>

        </div>

    </section>
    <!-- CAJA MENU -->


</header>


<!-- MODAL DE CONSIGNAR INMUEBLE -->
<section>
    <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form action="email/consignainmueble.php" class="row" method="post">
                            <div class="form-group col-12">
                                <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="mail" placeholder="Correo" name="email" class="form-control" required="">
                            </div>
                            <div class="form-group col-12">
                                <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <select class="form-control select_color" name="transaccion" requiered="">
                                    <option selected="" disabled="">Tipo de Transacción</option>
                                    <option value="arriendo">Arriendo</option>
                                    <option value="arriendo/venta">Arriendo/venta</option>
                                    <option value="venta">Venta</option>
                                    <option value="avaluos">Avalúos</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered="">
                                    <option selected="" disabled="">Tipo de Inmueble</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Consultorio">Consultorio</option>
                                    <option value="Oficina">Oficina</option>
                                    <option value="Local">Local</option>
                                    <option value="Bodega">Bodega</option>
                                    <option value="Lote">Lote</option>
                                    <option value="Finca">Finca</option>
                                    <option value="Parqueadero">Parqueadero</option>
                                    <option value="Edificio">Edificio</option>
                                    <option value="Apartaestudio">Apartaestudio</option>
                                    <option value="Hotel">Hotel</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <input type="number" placeholder="Valor" name="valor" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Área" name="area" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered=""></textarea>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered="">
                                    <label class="form-check-label" for="exampleCheck1">Acepto <a class="tratamiento politicas_contac" href="Politicas_de_seguridad.pdf" class="a-terminos" target="_blank">la política y tratamiento de datos</a></label>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn boton_principal btn-sm btn-block color_azul">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button style="color:white;" type="button" class="tratamiento btn btn-dark" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- MODAL DE CONSIGNAR INMUEBLE -->


