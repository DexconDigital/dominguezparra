<div class="subir">
    <div class="position-absolute w-100 h-100 efecto"></div>
    <i class="icono position-absolute w-100 h-100 fas fa-angle-up"></i>
</div>

<footer class="pt-3">

    <div class="container py-2">
        <div class="col-12 p-0 d-flex flex-column">

            <div class="col-12">
                <h2 class="d-flex justify-content-center"> Contáctenos </h2>
                <div class="d-flex">

                    <!-- SEDE PRINCIPAL -->
                    <div class="col-4 mt-2">
                        <h3 class="titulos text-justify d-flex justify-content-center"> <b class=" verde_oscuro"> Sucursal Principal </b> </h3>

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
                                            <h5 class="modal-title" id="exampleModalLabel"> Sucursal Principal </h5>
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
                    <div class="col-4 mt-2">
                        <h3 class="titulos text-justify d-flex justify-content-center"> <b class=" verde_oscuro"> Sucursal Cabecera </b> </h3>

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
                                            <h5 class="modal-title" id="exampleModalLabel"> Sucursal Cabecera </h5>
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
                    <div class="col-4 mt-2">
                        <h3 class="titulos text-justify d-flex justify-content-center"> <b class=" verde_oscuro"> Sucursal Cañaveral </b> </h3>

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
                                            <h5 class="modal-title" id="exampleModalLabel"> Sucursal Cañaveral </h5>
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

                </div>
            </div>

        </div>
    </div>

    <div class="copyright border-top p-2 mt-3">
        <p class="d-flex align-items-center justify-content-center"> Diseñado y Desarrollado por <a class="mx-1" target="blank" href="dexcondigital.com"> Dexcon Digital </a> ©Copyright 2020 para Inmobiliaria
            Alejandro Dominguez Parra. Todos los derechos reservados. </p>
    </div>

</footer>