<!-- Codigo del preloader -->
<!-- <style>
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
</script> -->
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
    <div id="celulares" class="caja_telefono w-100 position-relative col-12">

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

    <!-- CAJA VERDE CON CELULAR (RESPONSIVE) -->
    <div id="celulares_responsive" class="caja_telefono w-100 position-relative col-12">

        <div class="w-auto align-items-center d-flex h-100 justify-content-center position-absolute telefono">

            <div class="d-flex align-items-baseline" data-toggle="modal" data-target="#telefonos_responsive">
                <i class="mr-2 <?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"></i>
                <p> Teléfonos </p>
            </div>

        </div>
    </div>
    <!-- CAJA VERDE CON CELULAR (RESPONSIVE) -->

    <!-- CAJA MENU -->
    <section id="menu" class="d-flex align-items-center justify-content-center">

        <div class="container position-relative">

            <nav class="navbar w-100 d-flex align-items-center justify-content-between navbar navbar-expand-lg navbar-light p-0">

                <div>
                    <a href="index.php"><img class="logo" src="images/logo_color.png" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU -->
                <div class="menu1 ml-5 collapse navbar-collapse" id="navbarSupportedContent">
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

                        <li class="nav-item position-relative">
                            <a class="a2 nav-link <?php if ($page == 'Clientes') {
                                                        echo 'span';
                                                    } ?>" href="clientes.php?"> <span class="<?php if ($page == 'Clientes') {
                                                                                                    echo 'active2';
                                                                                                } ?>"></span> Clientes </a>
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
                <!-- MENU -->

                <!-- MENU (RESPONSIVE) -->
                <div class="menu2 pl-3 rounded collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex">

                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Inicio') {
                                                    echo 'activoo';
                                                } ?>" href="index.php"> Inicio </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Nosotros') {
                                                    echo 'activoo';
                                                } ?>" href="nosotros.php"> Nosotros </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Servicios') {
                                                    echo 'activoo';
                                                } ?>" href="servicios.php"> Servicios </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Asesores') {
                                                    echo 'activoo';
                                                } ?>" href="asesores.php"> Asesores </a>
                        </li>



                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Inmuebles') {
                                                    echo 'activoo';
                                                } ?>" href="inmuebles.php?"> Inmuebles </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Clientes') {
                                                    echo 'activoo';
                                                } ?>" href="clientes.php?"> Clientes </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a data-toggle="modal" data-target="#exampleModal" class="nav-link <?php if ($page == '') {
                                                                                                    echo 'activoo';
                                                                                                } ?>" href="index.php"> Consigne su Inmueble </a>
                        </li>

                        <!-- Button trigger modal -->


                        <!-- Modal -->


                        <li class="nav-item position-relative">
                            <a class="nav-link <?php if ($page == 'Contáctenos') {
                                                    echo 'activoo';
                                                } ?>" href="contactenos.php"> Contáctenos </a>
                        </li>

                        <li style="width:0px" class="nav-item position-relative">
                            <a href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments" target="blank" class="nav-link"> <img class="logo_pse" src="images/mpa.png" alt=""> </a>
                        </li>



                    </ul>

                </div>
                <!-- MENU (RESPONSIVE) -->



            </nav>

        </div>

    </section>
    <!-- CAJA MENU -->


</header>









<!-- MODAL DEL BOTON DE TELEFONOS (RESPONSIVE) -->
<div class="modal fade" id="telefonos_responsive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="linea position-relative modal-title" id="exampleModalLabel"> Teléfonos </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <a title="Sede Principal" class="mr-2" href="tel:<?php echo $datos_contacto['principal']['telefono_fijo']['link'] ?>">

                    <div class=" w-100 d-flex align-items-center justify-content-center">

                        <p class="mr-2"> Sede Principal: </p>

                        <div><i class="verde <?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"></i></div>

                        <div><?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?></div>
                    </div>
                </a>


                <a title="Sede Cabecera" class="mr-2" href="tel:<?php echo $datos_contacto['cabecera']['telefono_fijo']['link'] ?>">

                    <div class=" w-100 d-flex align-items-center justify-content-center">

                        <p class="mr-2"> Sede Cabecera: </p>

                        <div><i class="verde <?php echo $datos_contacto['cabecera']['telefono_fijo']['icono'] ?>"></i></div>

                        <div><?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?></div>
                    </div>
                </a>


                <a title="Sede Cañaveral" class="mr-2" href="tel:<?php echo $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>">

                    <div class=" w-100 d-flex align-items-center justify-content-center">

                        <p class="mr-2"> Sede Cañaveral: </p>

                        <div><i class="verde <?php echo $datos_contacto['cañaveral']['telefono_fijo']['icono'] ?>"></i></div>

                        <div><?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?></div>
                    </div>
                </a>
            </div>
            <div class="modal-footer">
                <button style="color:white" type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DEL BOTON DE TELEFONOS (RESPONSIVE) -->


<!-- MODAL DE CONSIGNAR INMUEBLE -->
<section>
    <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="exampleModalLabel"> Consigne gratis su inmueble </h5>
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

<!-- MODAL FORMULARIOS -->
<div class="modal fade" id="formulario3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Formulario de aseguradoras </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">

                <div class="my-3 container-fluid d-flex flex-column align-items-center justify-content-center">
                    <img class="w-50" src="images/a_libertador.png" alt="">
                    <a target="blank" href="archivos/persona_juridica_el_libertador.pdf"> Persona Jurídica - El Libertador </a>
                    <a target="blank" href="archivos/persona_natural_el_libertador.pdf"> Persona Natural - El Libertador </a>
                </div>

                <div class="my-3 container-fluid d-flex flex-column align-items-center justify-content-center">
                    <img class="w-50" src="images/a_fianzasantander-logo-1.png" alt="">
                    <a target="blank" href="archivos/personas_naturales_y_juridicas_fianzacredito.pdf"> Persona Natural y Jurídica - Fianzacredito </a>
                </div>

                <div class="modal-footer">
                    <button style="color:white" type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL FORMULARIOS -->