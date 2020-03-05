<div class="subir">
    <div class="position-absolute w-100 h-100 efecto"></div>
    <i class="icono position-absolute w-100 h-100 fas fa-angle-up"></i>
</div>

<footer class="pt-3">

    <div class="container py-2">
        <div class="col-12 p-0 d-flex flex-column">

            <div class="col-12">
                <h2 class="d-flex justify-content-center"> Contáctenos </h2>
                <div class="d-flex flex-wrap align-items-center justify-content-center">

                    <!-- SEDE PRINCIPAL -->
                    <div class="align-items-center justify-content-center d-flex flex-column col-6 col-md-4 col-lg-4 col-xl-4 mt-2">
                        <h3 class="m-0 titulos text-justify d-flex justify-content-center"> <b class=" text-center verde_oscuro"> Oficina Principal </b> </h3>

                        <!-- MODAL -->
                        <div class="d-flex justify-content-center mt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn boton_principal" data-toggle="modal" data-target="#m1">
                                Ver información
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Principal </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="hover_iconos2 d-flex align-items-baseline">
                                                <div class="d-flex align-items-baseline">

                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['direccion']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['direccion']['direccion'] ?> </p>
                                                </div>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['telefono_fijo']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['celular']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" target="blank" href="<?php echo  $datos_contacto['principal']['whatsapp']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['whatsapp']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="mailto:<?php echo  $datos_contacto['principal']['correo'] ?>">
                                                    <i class="mr-1 fas fa-envelope"></i>
                                                    <p> <?php echo $datos_contacto['principal']['correo'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos2">
                                                <div class="d-flex align-items-baseline">
                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['horario']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['horario']['horario'] ?> </p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn boton_footer" data-dismiss="modal"> Cerrar </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL -->

                    </div>
                    <!-- SEDE PRINCIPAL -->


                    <!-- SEDE CABECERA -->
                    <div class="align-items-center justify-content-center d-flex flex-column col-6 col-md-4 col-lg-4 col-xl-4 mt-2">
                        <h3 class="m-0 titulos text-justify d-flex justify-content-center"> <b class=" text-center verde_oscuro"> Oficina Cabecera </b> </h3>

                        <!-- MODAL -->
                        <div class="d-flex justify-content-center mt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn boton_principal" data-toggle="modal" data-target="#m2">
                                Ver información
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Cabecera </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="hover_iconos2">
                                                <div class="d-flex align-items-baseline">
                                                    <i class="mr-1 <?php echo $datos_contacto['cabecera']['direccion']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cabecera']['direccion']['direccion'] ?> </p>
                                                </div>
                                            </div>


                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['cabecera']['telefono_fijo']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['cabecera']['telefono_fijo']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['celular']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" target="blank" href="<?php echo  $datos_contacto['cabecera']['whatsapp']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['cabecera']['whatsapp']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cabecera']['whatsapp']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="mailto:<?php echo  $datos_contacto['cabecera']['correo'] ?>">
                                                    <i class="mr-1 fas fa-envelope"></i>
                                                    <p> <?php echo $datos_contacto['cabecera']['correo'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos2">
                                                <div class="d-flex align-items-baseline">
                                                    <i class="mr-1 <?php echo $datos_contacto['cabecera']['horario']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cabecera']['horario']['horario'] ?> </p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn boton_footer" data-dismiss="modal"> Cerrar </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL -->

                    </div>
                    <!-- SEDE CABECERA -->


                    <!-- SEDE CAÑAVERAL -->
                    <div class="align-items-center justify-content-center d-flex flex-column col-6 col-md-4 col-lg-4 col-xl-4 mt-2">
                        <h3 class="m-0 titulos text-justify d-flex justify-content-center"> <b class=" text-center verde_oscuro"> Oficina Cañaveral </b> </h3>

                        <!-- MODAL -->
                        <div class="d-flex justify-content-center mt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn boton_principal" data-toggle="modal" data-target="#m3">
                                Ver información
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Cañaveral </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="hover_iconos2">
                                                <div class="d-flex align-items-baseline">
                                                    <i class="mr-1 <?php echo $datos_contacto['cañaveral']['direccion']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cañaveral']['direccion']['direccion'] ?> </p>
                                                </div>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['cañaveral']['telefono_fijo']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['principal']['celular']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                                </a>
                                            </div>


                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" target="blank" href="<?php echo  $datos_contacto['cañaveral']['whatsapp']['link'] ?>">
                                                    <i class="mr-1 <?php echo $datos_contacto['cañaveral']['whatsapp']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cañaveral']['whatsapp']['imprimir'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos">
                                                <a class="d-flex align-items-baseline" href="mailto:<?php echo  $datos_contacto['cañaveral']['correo'] ?>">
                                                    <i class="mr-1 fas fa-envelope"></i>
                                                    <p> <?php echo $datos_contacto['cañaveral']['correo'] ?> </p>
                                                </a>
                                            </div>

                                            <div class="hover_iconos2">
                                                <div class="d-flex align-items-baseline">
                                                    <i class="mr-1 <?php echo $datos_contacto['cañaveral']['horario']['icono'] ?>"> </i>
                                                    <p> <?php echo $datos_contacto['cañaveral']['horario']['horario'] ?> </p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn boton_footer" data-dismiss="modal"> Cerrar </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL -->



                    </div>
                    <!-- SEDE CAÑAVERAL -->

                    <!-- NUESTROS ALIADOS -->
                    <section id="nuestros_aliados" class="container-fluid mt-5">

                        <div class="">
                            <h2 class="d-flex justify-content-center mb-5"> Nuestros Aliados </h2>

                            <div class="d-flex flex-wrap align-items-center justify-content-center">

                                <div class="p-0 d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src="images/banco-caja-social_blanco.png" alt="">
                                </div>

                                <div style="height:auto;" class="p-0 d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src="images/fianzasantander_blanco.png" alt="">
                                </div>

                                <div class="p-0 d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src="images/libertador_blanco.png" alt="">
                                </div>

                                <div class="p-0 d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src="images/logo_lonja_2_lineas_blanco.png" alt="">
                                </div>

                                <div class="p-0 d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos2 col-12 col-md-3 col-lg-4 col-xl-4">
                                    <img src="images/ccbucaramanga_blanco.png" alt="">
                                </div>

                                <div class="p-0 d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos2 col-6 col-md-3 col-lg-2 col-xl-2">
                                    <img src="images/fenalco_blanco.png" alt="">
                                </div>


                            </div>
                        </div>


                    </section>
                    <!-- NUESTROS ALIADOS -->

                </div>
            </div>

        </div>
    </div>

    <div class="copyright border-top py-2 pr-2 mt-3">
        <p class="text-center px-2 text-justify"> Diseñado y Desarrollado por <a class="mx-1" target="blank" href="https://www.dexcondigital.com"> Dexcon Digital </a> ©Copyright 2020 para Inmobiliaria
            Alejandro Dominguez Parra. Todos los derechos reservados. </p>
    </div>

</footer>