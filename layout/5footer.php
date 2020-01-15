<footer class="pt-3">

    <div class="container">
        <div class="col-12 p-0 d-flex flex-column">

            <div class="col-12">
                <h2 class="d-flex justify-content-center"> Contáctenos </h2>
                <div class="d-flex">

                    <!-- SEDE PRINCIPAL -->
                    <div class="col-4">
                        <p class="text-justify d-flex justify-content-center"> <b class="verde_oscuro"> <?php echo $datos_contacto['principal']['nombre_sede'] ?> </b> </p>

                        <div class="d-flex align-items-baseline">
                            <i class="mr-1 <?php echo $datos_contacto['principal']['direccion']['icono'] ?>"> </i>
                            <p> <?php echo $datos_contacto['principal']['direccion']['direccion'] ?> </p>
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

                        <div class="hover_iconos">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 <?php echo $datos_contacto['principal']['horario']['icono'] ?>"> </i>
                                <p> <?php echo $datos_contacto['principal']['horario']['horario'] ?> </p>
                            </div>
                        </div>



                    </div>
                    <!-- SEDE PRINCIPAL -->


                    <!-- SEDE CABECERA -->
                    <div class="col-4">
                        <p class="text-justify d-flex justify-content-center"> <b class="verde_oscuro"> <?php echo $datos_contacto['cabecera']['nombre_sede'] ?> </b> </p>

                        <div class="d-flex align-items-baseline">
                            <i class="mr-1 <?php echo $datos_contacto['cabecera']['direccion']['icono'] ?>"> </i>
                            <p> <?php echo $datos_contacto['cabecera']['direccion']['direccion'] ?> </p>
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

                        <div class="hover_iconos">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 <?php echo $datos_contacto['cabecera']['horario']['icono'] ?>"> </i>
                                <p> <?php echo $datos_contacto['cabecera']['horario']['horario'] ?> </p>
                            </div>
                        </div>

                    </div>
                    <!-- SEDE CABECERA -->

                    <!-- SEDE CAÑAVERAL -->
                    <div class="col-4">
                        <p class="text-justify d-flex justify-content-center"> <b class="verde_oscuro"> <?php echo $datos_contacto['cañaveral']['nombre_sede'] ?> </b> </p>

                        <div class="d-flex align-items-baseline">
                            <i class="mr-1 <?php echo $datos_contacto['cañaveral']['direccion']['icono'] ?>"> </i>
                            <p> <?php echo $datos_contacto['cañaveral']['direccion']['direccion'] ?> </p>
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

                        <div class="hover_iconos">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 <?php echo $datos_contacto['cañaveral']['horario']['icono'] ?>"> </i>
                                <p> <?php echo $datos_contacto['cañaveral']['horario']['horario'] ?> </p>
                            </div>
                        </div>

                    </div>
                    <!-- SEDE CAÑAVERAL -->

                </div>
            </div>

            <!-- <div class="col-12 mt-4 d-flex justify-content-center align-items-center flex-column">
                    <h2 class="d-flex justify-content-center"> Matriculas Arrendador </h2>
                    <ul class="px-3">
                        <li> MA 023 Oficio 192/2003 - Bucaramanga </li>
                        <li> R.I 009-2009/ Resolución 0073/2009 - Floridablanca </li>
                        <li> M.A 0030/ Resolución 0030/2014 - Piedecuesta </li>
                        <li> M.A 078/ Resolución 078/2014 – Girón </li>
                    </ul>
                </div> -->

        </div>
    </div>

    <div class="copyright border-top p-2 mt-3">
        <p class="d-flex align-items-center justify-content-center"> Diseñado y Desarrollado por <a class="mx-1" target="blank" href="dexcondigital.com"> Dexcon Digital </a> ©Copyright 2020 para Inmobiliaria
            Alejandro Dominguez Parra. Todos los derechos reservados. </p>
    </div>

</footer>